<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;


$app->get('/newsalesorder', function (Request $request, Response $response) {


    $wrapper_sql = $this->get('sql_wrapper');
    $db_handle = $this->get('dbase');
    $sql_queries = $this->get('sql_queries');
    $session_model = $this->get('session_model');
    $session_wrapper = $this->get('session_wrapper');
    $validator = $this->get('validator');

    $wrapper_sql->set_db_handle($db_handle);
    $wrapper_sql->set_sql_queries($sql_queries);


    if ($wrapper_sql->session_var_exists(session_id())) {

        $wrapper_sql->create_sales_order_id_var();
        $last_id = $wrapper_sql->last_inserted_ID();

        $session_wrapper->set_session('sales_order_id', $last_id);
        $order_id = uniqid();
        $session_wrapper->set_session('order_id', $order_id);

        $items_array = [];
        $items_array = $wrapper_sql->get_items_var();

        $customers_array = [];
        $customers_array = $wrapper_sql->get_customers_var();

        return $this->view->render($response,
            'newSO.html.twig',
            [
                'css_path' => CSS_PATH,
                'js_path' => JS_PATH,

                'order_id' => $order_id,
                'items_array' => $items_array,
                'customers_array' => $customers_array,
                'action_add_item_to_list' => '/wms/index.php/newsalesorder_modal',
            ]);

    } else {

        return $this->response->withRedirect('/wms/index.php/');

    }


})->setName('newsalesorder');


$app->post('/newsalesorder', function (Request $request, Response $response) {


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
        foreach ($order_items as $order_item) {

            $item = $wrapper_sql->get_items_by_id_var($order_item["item_id"]);

            $amount += ($item[0]["selling_price"] * $order_item["quantity"]);

        }


        //substract item quantity from stock


        $wrapper_sql->create_sales_order_var($sanitised_customer, $customer_name, $sanitised_orderID, $sanitised_date, $amount, $session_wrapper->get_session('sales_order_id'));

        //    $sales_order->set_values('1', '2', '3', '4', '5', '6', '7', '8', '9');


        return $this->response->withRedirect('/wms/index.php/salesorders');

    } else {

        return $this->response->withRedirect('/wms/index.php/');

    }


})->setName('newsalesorder');


$app->post('/newsalesorder_modal', function (Request $request, Response $response) {


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

        $item = $arr_tainted_params['item'];
        $qty = $arr_tainted_params['quantity'];

        $item_sanitised = $validator->sanitise_string($item);
        $qty_sanitised = $validator->sanitise_string($qty);


        $order_items->set_order_id($session_wrapper->get_session('sales_order_id'));
        $order_items->set_item_id($item_sanitised);
        $order_items->set_quantity($qty_sanitised);
        $order_items->set_wrapper_user_db($wrapper_sql);
        $order_items->set_db_handle($db_handle);
        $order_items->set_sql_queries($sql_queries);
        $order_items->store_data();


        $real_item->set_wrapper_user_db($wrapper_sql);
        $real_item->set_db_handle($db_handle);
        $real_item->set_sql_queries($sql_queries);
        $order_items_array = $real_item->get_order_items_from_database($order_items->get_order_id());

        $sum = null;
        foreach ($order_items_array as $item) {

            unset($real_items_array);
            $real_items_array[] = $wrapper_sql->get_items_with_quantity_var($item['item_id'], $session_wrapper->get_session('sales_order_id'));

            foreach ($real_items_array as $it) {
                $sum += ($it[0]['quantity'] * $it[0]['selling_price']);
            }
        }


        $items_array = [];
        $items_array = $wrapper_sql->get_items_var();

        $customers_array = [];
        $customers_array = $wrapper_sql->get_customers_var();

        return $this->view->render($response,
            'newSO.html.twig',
            [
                'css_path' => CSS_PATH,
                'js_path' => JS_PATH,

                'css_path' => CSS_PATH,
                'js_path' => JS_PATH,
                'items_array' => $items_array,
                'real_items_array' => $real_items_array,
                'customers_array' => $customers_array,
                'sum' => $sum,
                'order_id' => $session_wrapper->get_session('order_id'),
                'action_add_item_to_list' => '/wms/index.php/newsalesorder_modal',
                'action_create_so' => '/wms/index.php/newsalesorder'
            ]);


    } else {

        return $this->response->withRedirect('/wms/index.php/');

    }


})->setName('newsalesorder');
