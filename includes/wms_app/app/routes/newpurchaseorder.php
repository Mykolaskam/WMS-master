<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;


$app->get('/newpurchaseorder', function (Request $request, Response $response) {


    $wrapper_sql = $this->get('sql_wrapper');
    $db_handle = $this->get('dbase');
    $sql_queries = $this->get('sql_queries');
    $session_wrapper = $this->get('session_wrapper');


    $wrapper_sql->set_db_handle($db_handle);
    $wrapper_sql->set_sql_queries($sql_queries);


    if ($wrapper_sql->session_var_exists(session_id())) {

        $wrapper_sql->create_purchase_order_id_var();
        $last_id = $wrapper_sql->last_inserted_ID();

        $session_wrapper->set_session('purchase_order_id', $last_id);
        $session_wrapper->get_session('purchase_order_id');
        $order_id = uniqid();
        $session_wrapper->set_session('order_id', $order_id);

        $items_array = [];
        $items_array = $wrapper_sql->get_items_var();

        $vendors_array = [];
        $vendors_array = $wrapper_sql->get_vendors_var();

        $total_amount = null;
        $total_quantity = null;
        $total_amount = 0;
        $total_quantity = 0;

        return $this->view->render($response,
            'newPO.html.twig',
            [
                'css_path' => CSS_PATH,
                'js_path' => JS_PATH,

                'total_amount' => $total_amount,
                'total_quantity' => $total_quantity,
                'order_id' => $order_id,
                'items_array' => $items_array,
                'vendors_array' => $vendors_array,
                'action_add_item_to_list' => '/wms/index.php/newpurchaseorder_modal',
            ]);

    } else {

        return $this->response->withRedirect('/wms/index.php/');

    }


})->setName('newpurchaseorder');


$app->post('/newpurchaseorder', function (Request $request, Response $response) {


    $wrapper_sql = $this->get('sql_wrapper');
    $db_handle = $this->get('dbase');
    $sql_queries = $this->get('sql_queries');
    $session_wrapper = $this->get('session_wrapper');
    $validator = $this->get('validator');

    $wrapper_sql->set_db_handle($db_handle);
    $wrapper_sql->set_sql_queries($sql_queries);


    if ($wrapper_sql->session_var_exists(session_id())) {

        $arr_tainted_params = $request->getParsedBody();

        $customer = $arr_tainted_params['vendor'];
        $orderID = $arr_tainted_params['orderID'];
        $date = $arr_tainted_params['date'];

        $sanitised_customer = $validator->sanitise_string($customer);
        $sanitised_orderID = $validator->sanitise_string($orderID);
        $sanitised_date = $validator->sanitise_string($date);

        $customer_name_array[0] = $wrapper_sql->get_vendor_by_id_var($sanitised_customer);

        $customer_name = "";
        foreach ($customer_name_array[0] as $customer) {
            var_dump($customer_name = ($customer['first_name'] . " " . $customer['last_name']));
        }


        //get amount
        $purchase_order_items = $wrapper_sql->get_purchase_item_var($session_wrapper->get_session('purchase_order_id'));

        //get item id and quantity from each order item
        //get selling price from each item

        $amount = null;
        foreach ($purchase_order_items as $order_item) {

            $item = $wrapper_sql->get_items_by_id_var($order_item["item_id"]);

            $amount += ($item[0]["purchase_price"] * $order_item["quantity"]);

        }

        $wrapper_sql->create_purchase_order_var($sanitised_customer, $customer_name, $sanitised_orderID, $sanitised_date, "off", "off", $amount, $session_wrapper->get_session('purchase_order_id'));

        return $this->response->withRedirect('/wms/index.php/purchaseorders');

    } else {

        return $this->response->withRedirect('/wms/index.php/');

    }


})->setName('newpurchaseorder');


$app->post('/newpurchaseorder_modal', function (Request $request, Response $response) {


    $wrapper_sql = $this->get('sql_wrapper');
    $db_handle = $this->get('dbase');
    $sql_queries = $this->get('sql_queries');
    $session_model = $this->get('session_model');
    $validator = $this->get('validator');
    $session_wrapper = $this->get('session_wrapper');
    $purchase_order_items = $this->get('purchase_order_items');
    $real_item = $this->get('item');


    $session_model->set_wrapper_session_db($wrapper_sql);
    $session_model->set_db_handle($db_handle);
    $session_model->set_sql_queries($sql_queries);


    $wrapper_sql->set_db_handle($db_handle);
    $wrapper_sql->set_sql_queries($sql_queries);


    if ($wrapper_sql->session_var_exists(session_id())) {

        $arr_tainted_params = $request->getParsedBody();

        $item = $arr_tainted_params['item'];
        $qty = $arr_tainted_params['quantity'];

        $item_sanitised = $validator->sanitise_string($item);
        $qty_sanitised = $validator->sanitise_string($qty);

        $real_item->set_wrapper_user_db($wrapper_sql);
        $real_item->set_db_handle($db_handle);
        $real_item->set_sql_queries($sql_queries);

        $purchase_order_items->set_order_id($session_wrapper->get_session('purchase_order_id'));
        $purchase_order_items->set_item_id($item_sanitised);
        $purchase_order_items->set_quantity($qty_sanitised);
        $purchase_order_items->set_wrapper_user_db($wrapper_sql);
        $purchase_order_items->set_db_handle($db_handle);
        $purchase_order_items->set_sql_queries($sql_queries);


        if ($wrapper_sql->purchase_order_item_added_var($session_wrapper->get_session('purchase_order_id'), $purchase_order_items->get_item_id())) {

            $wrapper_sql->update_purchase_order_item_var($session_wrapper->get_session('purchase_order_id'), $purchase_order_items->get_item_id(), $qty_sanitised);

        } else {

            $purchase_order_items->store_data();

        }


        unset($order_items_array);
        $order_items_array = $real_item->get_purchase_order_items_from_database($purchase_order_items->get_order_id());

        unset($real_purchase_items_array);

        foreach ($order_items_array as $item) {
            $real_purchase_items_array[] = $wrapper_sql->get_purchase_items_with_quantity_var($item['item_id'], $session_wrapper->get_session('purchase_order_id'));
        }


        $total_amount = null;
        $total_quantity = null;
        $total_amount = 0;
        $total_quantity = 0;

        foreach ($real_purchase_items_array as $i) {
            $total_amount += ($i[0]["purchase_price"] * $i[0]["quantity"]);
            $total_quantity += $i[0]["quantity"];
        }


        $items_array = [];
        $items_array = $wrapper_sql->get_items_var();

        $vendors_array = [];
        $vendors_array = $wrapper_sql->get_vendors_var();

        return $this->view->render($response,
            'newPO.html.twig',
            [
                'css_path' => CSS_PATH,
                'js_path' => JS_PATH,

                'items_array' => $items_array,
                'real_items_array' => $real_purchase_items_array,
                'vendors_array' => $vendors_array,
                'total_amount' => $total_amount,
                'total_quantity' => $total_quantity,
                'order_id' => $session_wrapper->get_session('order_id'),
                'action_add_item_to_list' => '/wms/index.php/newpurchaseorder_modal',
                'action_create_po' => '/wms/index.php/newpurchaseorder'
            ]);


    } else {

        return $this->response->withRedirect('/wms/index.php/');

    }


})->setName('newpurchaseorder');


$app->get('/newPOremovepurchaseitem/{id}/{qty}', function ($request, $response, $args) {

    $item_id = $args['id'];
    $item_quantity = $args['qty'];


    $wrapper_sql = $this->get('sql_wrapper');
    $db_handle = $this->get('dbase');
    $sql_queries = $this->get('sql_queries');
    $session_wrapper = $this->get('session_wrapper');


    $wrapper_sql->set_db_handle($db_handle);
    $wrapper_sql->set_sql_queries($sql_queries);

    if ($wrapper_sql->session_var_exists(session_id())) {

        $wrapper_sql->delete_purchase_order_item_var($session_wrapper->get_session('purchase_order_id'), $item_id);

        return $this->response->withRedirect('/wms/index.php/newpurchaseorder');

    }

})->setName('newPOremoveorderitem');