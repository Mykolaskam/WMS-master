<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;


$app->get('/newsalesorder', function (Request $request, Response $response) {


    $wrapper_sql = $this->get('sql_wrapper');
    $db_handle = $this->get('dbase');
    $sql_queries = $this->get('sql_queries');
    $session_model = $this->get('session_model');
    $session_wrapper = $this->get('session_wrapper');

    $wrapper_sql->set_db_handle($db_handle);
    $wrapper_sql->set_sql_queries($sql_queries);

    $wrapper_sql->create_sales_order_id_var();
    $last_id = $wrapper_sql->last_inserted_ID();


    $session_wrapper->set_session('order_id', $last_id);


    if ($wrapper_sql->session_var_exists(session_id())) {

        $items_array = [];
        $items_array = $wrapper_sql->get_items_var();

        $customers_array = [];
        $customers_array = $wrapper_sql->get_customers_var();

        return $this->view->render($response,
            'newSO.html.twig',
            [
                'css_path' => CSS_PATH,
                'js_path' => JS_PATH,
                'items_array' => $items_array,
                'customers_array' => $customers_array,
                'sales_orders' => '/wms/index.php/salesorders',
                'action_add_item_to_list' => '/wms/index.php/newsalesorder_modal',
            ]);

    } else {

        return $this->response->withRedirect('/wms/index.php/');

    }


})->setName('newsalesorder');


$app->post('/newsalesorder_modal', function (Request $request, Response $response) {

    $arr_tainted_params = $request->getParsedBody();

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


    $item = $arr_tainted_params['item'];
    $qty = $arr_tainted_params['quantity'];

    $item_sanitised = $validator->sanitise_string($item);
    $qty_sanitised = $validator->sanitise_string($qty);

    $wrapper_sql->set_db_handle($db_handle);
    $wrapper_sql->set_sql_queries($sql_queries);


    if (!empty($item_sanitised) || !empty($qty_sanitised)) {

        if ($wrapper_sql->session_var_exists(session_id())) {


            $order_items->set_order_id($session_wrapper->get_session('order_id'));
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


            foreach ($order_items_array as $item) {
                $real_items_array[] = $real_item->get_items_from_database($item['item_id']);
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
                    'items_array' => $items_array,
                    'real_items_array' => $real_items_array,
                    'customers_array' => $customers_array,

                    'sales_orders' => '/wms/index.php/salesorders',
                    'action_add_item_to_list' => '/wms/index.php/newsalesorder_modal',
                ]);

        } else {

            return $this->response->withRedirect('/wms/index.php/');

        }

    }


})->setName('newsalesorder');
