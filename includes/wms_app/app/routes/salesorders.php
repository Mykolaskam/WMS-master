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

        $all_salesorders = $wrapper_sql->get_all_on_sales_order_var();
      //  var_dump($all_salesorders);

        $sales_orders_array = $wrapper_sql->get_sales_orders_var();

        return $this->view->render($response,
            'salesorders.html.twig',
            [
                'css_path' => CSS_PATH,
                'js_path' => JS_PATH,

                'all_salesorders' => $all_salesorders,
                'sales_orders_array' => $sales_orders_array,
                'action_new_so' => '/wms/index.php/newsalesorder',
                'action_add_item_to_list' => '/wms/index.php/newsalesorder'
            ]);

    } else {

        return $this->response->withRedirect('/wms/index.php/');

    }


})->setName('salesorders');



