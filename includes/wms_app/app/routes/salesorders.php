<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

$app->get('/salesorders', function (Request $request, Response $response) {

    $wrapper_sql = $this->get('sql_wrapper');
    $db_handle = $this->get('dbase');
    $sql_queries = $this->get('sql_queries');
    $session_model = $this->get('session_model');
    $bcrypt = $this->get('bcrypt_wrapper');
    $validator = $this->get('validator');
    $session_wrapper = $this->get('session_wrapper');
    $session_wrapper->unset_session('order_id');

    $wrapper_sql->set_db_handle($db_handle);
    $wrapper_sql->set_sql_queries($sql_queries);


    if ($wrapper_sql->session_var_exists(session_id())) {

        $wrapper_sql->delete_empty_orders_var();

        $all_salesorders = $wrapper_sql->get_sales_orders_var();


        foreach ($all_salesorders as $order) {
            $customer = $wrapper_sql->get_customer_by_id_var($order['customer_id']);
            //   var_dump($customer[0]);

            foreach ($customer as $c) {
                //     $name = $c['first_name'] . " " . $c['last_name'];
                // var_dump($name);
            }

        }
     //   var_dump($all_salesorders);


        return $this->view->render($response,
            'salesorders.html.twig',
            [
                'css_path' => CSS_PATH,
                'js_path' => JS_PATH,

                'all_salesorders' => $all_salesorders,
                'action_new_so' => '/wms/index.php/newsalesorder',
                'action_add_item_to_list' => '/wms/index.php/newsalesorder'
            ]);

    } else {

        return $this->response->withRedirect('/wms/index.php/');

    }


})->setName('salesorders');



