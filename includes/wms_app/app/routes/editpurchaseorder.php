<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

$app->get('/deletepurchasesorder/{id3}', function ($request, $response, $args) {

    $item_id = $args['id3'];


    $wrapper_sql = $this->get('sql_wrapper');
    $db_handle = $this->get('dbase');
    $sql_queries = $this->get('sql_queries');
    $session_model = $this->get('session_model');
    $session_wrapper = $this->get('session_wrapper');
    $validator = $this->get('validator');

    $wrapper_sql->set_db_handle($db_handle);
    $wrapper_sql->set_sql_queries($sql_queries);

    if ($wrapper_sql->session_var_exists(session_id())) {

        $wrapper_sql->delete_purchase_order_var($session_wrapper->get_session('sales_order_id'));

        return $this->response->withRedirect('/wms/index.php/purchaseorders');

    }

})->setName('deletepurchasesorder');


$app->get('/removepurchaseorderitem/{id2}', function ($request, $response, $args) {

    $item_id = $args['id2'];


    $wrapper_sql = $this->get('sql_wrapper');
    $db_handle = $this->get('dbase');
    $sql_queries = $this->get('sql_queries');
    $session_model = $this->get('session_model');
    $session_wrapper = $this->get('session_wrapper');
    $validator = $this->get('validator');

    $wrapper_sql->set_db_handle($db_handle);
    $wrapper_sql->set_sql_queries($sql_queries);

    if ($wrapper_sql->session_var_exists(session_id())) {

        $wrapper_sql->delete_order_item_var($session_wrapper->get_session('sales_order_id'), $item_id);

        return $this->response->withRedirect('/wms/index.php/editsalesorder/' . $session_wrapper->get_session('sales_order_id'));

    }

})->setName('removepurchaseorderitem');

$app->get('/editpurchaseorder/{id}', function ($request, $response, $args) {

    $purchase_order_id = $args['id'];


    $wrapper_sql = $this->get('sql_wrapper');
    $db_handle = $this->get('dbase');
    $sql_queries = $this->get('sql_queries');
    $session_model = $this->get('session_model');
    $session_wrapper = $this->get('session_wrapper');
    $validator = $this->get('validator');

    $wrapper_sql->set_db_handle($db_handle);
    $wrapper_sql->set_sql_queries($sql_queries);

    $session_wrapper->set_session('sales_order_id', $args['id']);

    if ($wrapper_sql->session_var_exists(session_id())) {

        $the_order = $wrapper_sql->get_purchase_order_by_id_var($purchase_order_id);


        unset($order_items_array);
        $order_items_array = $wrapper_sql->get_item_var($purchase_order_id);

        unset($real_items_array);
        $real_items_array = null;
        foreach ($order_items_array as $item) {
            $real_items_array[] = $wrapper_sql->get_items_with_quantity_var($item['item_id'], $purchase_order_id);
        }

        $total_amount = null;
        $total_quantity = null;
        $total_amount = 0;
        $total_quantity = 0;
        if (!empty($real_items_array)) {
            foreach ($real_items_array as $i) {
                $total_amount += ($i[0]["selling_price"] * $i[0]["quantity"]);
                $total_quantity += $i[0]["quantity"];
            }
        }

        $items_array = [];
        $items_array = $wrapper_sql->get_items_var();

        $customers_array = [];
        $customers_array = $wrapper_sql->get_vendors_var();


        return $this->view->render($response,
            'editPO.html.twig',
            [
                'css_path' => CSS_PATH,
                'js_path' => JS_PATH,

                'action_update_po' => '/wms/index.php/editsalesorder',
                'the_order' => $the_order,
                'items_array' => $items_array,
                'customers_array' => $customers_array,
                'real_items_array' => $real_items_array,
                'total_amount' => $total_amount,
                'total_quantity' => $total_quantity,
                'action_add_item_to_list' => '/wms/index.php/editpurchaseorder_modal',
            ]);

    } else {

        return $this->response->withRedirect('/wms/index.php/');

    }

})->setName('editpurchaseorder');


$app->post('/editpurchaseorder', function (Request $request, Response $response) {


    $wrapper_sql = $this->get('sql_wrapper');
    $db_handle = $this->get('dbase');
    $sql_queries = $this->get('sql_queries');
    $session_model = $this->get('session_model');
    $session_wrapper = $this->get('session_wrapper');
    $sales_order = $this->get('sales_order');
    $validator = $this->get('validator');

    $wrapper_sql->set_db_handle($db_handle);
    $wrapper_sql->set_sql_queries($sql_queries);


    if ($wrapper_sql->session_var_exists(session_id())) {

        $arr_tainted_params = $request->getParsedBody();

        $customer = $arr_tainted_params['customer'];
        $orderID = $arr_tainted_params['orderID'];
        $date = $arr_tainted_params['date'];


        if (isset($arr_tainted_params['switchPacked'])){
            $switchPacked = "on";
        } else {
            $switchPacked = "off";
        }

        if (isset($arr_tainted_params['switchShipped'])){
            $switchShipped = "on";
        } else {
            $switchShipped = "off";
        }

        if (isset($arr_tainted_params['switchInvoiced'])){
            $switchInvoiced = "on";
        } else {
            $switchInvoiced = "off";
        }


        $sanitised_customer = $validator->sanitise_string($customer);
        $sanitised_orderID = $validator->sanitise_string($orderID);
        $sanitised_date = $validator->sanitise_string($date);

        $customer_name_array[0] = $wrapper_sql->get_customer_by_id_var($sanitised_customer);
        $customer_name = "";
        foreach ($customer_name_array[0] as $customer) {
            $customer_name = ($customer['first_name'] . " " . $customer['last_name']);
        }

        //get amount
        $order_items = $wrapper_sql->get_item_var($session_wrapper->get_session('sales_order_id'));

        //get item id and quantity from each order item
        //get selling price from each item
        $amount = null;
        $amount = 0;
        foreach ($order_items as $order_item) {

            $item = $wrapper_sql->get_items_by_id_var($order_item["item_id"]);

            $amount += ($item[0]["selling_price"] * $order_item["quantity"]);

        }


        $wrapper_sql->create_sales_order_var($sanitised_customer, $customer_name, $sanitised_orderID, $sanitised_date, $switchPacked, $switchShipped, $switchInvoiced, $amount, $session_wrapper->get_session('sales_order_id'));


        return $this->response->withRedirect('/wms/index.php/salesorders');

    } else {

        return $this->response->withRedirect('/wms/index.php/');

    }


})->setName('editpurchaseorder');


$app->post('/editpurchaseorder_modal', function (Request $request, Response $response) {


    $wrapper_sql = $this->get('sql_wrapper');
    $db_handle = $this->get('dbase');
    $sql_queries = $this->get('sql_queries');
    $session_model = $this->get('session_model');
    $validator = $this->get('validator');
    $session_wrapper = $this->get('session_wrapper');
    $order_items = $this->get('order_items');
    $real_item = $this->get('item');


    $session_model->set_wrapper_session_db($wrapper_sql);
    $session_model->set_db_handle($db_handle);
    $session_model->set_sql_queries($sql_queries);


    $wrapper_sql->set_db_handle($db_handle);
    $wrapper_sql->set_sql_queries($sql_queries);


    if ($wrapper_sql->session_var_exists(session_id())) {

        $arr_tainted_params = $request->getParsedBody();

        if (!empty($arr_tainted_params)) {
            $item = $arr_tainted_params['item'];
            $qty = $arr_tainted_params['quantity'];
        }

        $item_sanitised = $validator->sanitise_string($item);
        $qty_sanitised = $validator->sanitise_string($qty);

        $real_item->set_wrapper_user_db($wrapper_sql);
        $real_item->set_db_handle($db_handle);
        $real_item->set_sql_queries($sql_queries);

        $order_items->set_order_id($session_wrapper->get_session('sales_order_id'));
        $order_items->set_item_id($item_sanitised);
        $order_items->set_quantity($qty_sanitised);
        $order_items->set_wrapper_user_db($wrapper_sql);
        $order_items->set_db_handle($db_handle);
        $order_items->set_sql_queries($sql_queries);


        if ($wrapper_sql->order_item_added_var($session_wrapper->get_session('sales_order_id'), $order_items->get_item_id())) {

            $wrapper_sql->update_order_item_var($session_wrapper->get_session('sales_order_id'), $order_items->get_item_id(), $qty_sanitised);

            $wrapper_sql->minus_quantity_item_var($order_items->get_item_id(), $qty_sanitised);

        } else {

            $order_items->store_data();

            $wrapper_sql->minus_quantity_item_var($order_items->get_item_id(), $qty_sanitised);

        }

        $the_order = $wrapper_sql->get_sales_order_by_id_var($session_wrapper->get_session('sales_order_id'));


        unset($order_items_array);
        $order_items_array = $real_item->get_order_items_from_database($order_items->get_order_id());

        unset($real_items_array);

        foreach ($order_items_array as $item) {
            $real_items_array[] = $wrapper_sql->get_items_with_quantity_var($item['item_id'], $session_wrapper->get_session('sales_order_id'));
        }

        $total_amount = null;
        $total_quantity = null;
        foreach ($real_items_array as $i) {
            $total_amount += ($i[0]["selling_price"] * $i[0]["quantity"]);
            $total_quantity += $i[0]["quantity"];
        }


        $items_array = [];
        $items_array = $wrapper_sql->get_items_var();

        $customers_array = [];
        $customers_array = $wrapper_sql->get_customers_var();

        return $this->view->render($response,
            'editSO.html.twig',
            [
                'css_path' => CSS_PATH,
                'js_path' => JS_PATH,

                'action_update_so' => '/wms/index.php/editsalesorder',
                'the_order' => $the_order,
                'items_array' => $items_array,
                'real_items_array' => $real_items_array,
                'customers_array' => $customers_array,
                'total_amount' => $total_amount,
                'total_quantity' => $total_quantity,
                'order_id' => $session_wrapper->get_session('order_id'),
                'action_add_item_to_list' => '/wms/index.php/editpurchaseorder_modal',
                'action_create_po' => '/wms/index.php/editpurchaseorder'
            ]);


    } else {

        return $this->response->withRedirect('/wms/index.php/');

    }


})->setName('editpurchaseorder');



$app->get('/editPOremovepurchaseorderitem/{id}/{qty}', function ($request, $response, $args) {

    $item_id = $args['id'];
    $item_quantity = $args['qty'];


    $wrapper_sql = $this->get('sql_wrapper');
    $db_handle = $this->get('dbase');
    $sql_queries = $this->get('sql_queries');
    $session_model = $this->get('session_model');
    $session_wrapper = $this->get('session_wrapper');
    $validator = $this->get('validator');

    $wrapper_sql->set_db_handle($db_handle);
    $wrapper_sql->set_sql_queries($sql_queries);

    if ($wrapper_sql->session_var_exists(session_id())) {

        $wrapper_sql->delete_purchase_order_item_var($session_wrapper->get_session('sales_order_id'), $item_id);

        //returnt quantity to stock
        $wrapper_sql->plus_quantity_item_var($item_id, $item_quantity);

        return $this->response->withRedirect('/wms/index.php/editpurchaseorder/' . $session_wrapper->get_session('sales_order_id'));

    }

})->setName('editPOremovepurchaseorderitem');
