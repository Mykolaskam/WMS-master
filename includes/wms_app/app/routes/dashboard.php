<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

$app->get('/dashboard', function (Request $request, Response $response, $args) {

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


        $to_be_packed_arr = $wrapper_sql->count_to_be_packed_var('off');

        foreach ($to_be_packed_arr as $to_be_packed_num) {
            $to_be_packed_num;
        }


        $to_be_shipped_arr = $wrapper_sql->count_to_be_shipped_var('on', 'off');

        foreach ($to_be_shipped_arr as $to_be_shipped_num) {
            $to_be_shipped_num;
        }


        $to_be_invoiced_arr = $wrapper_sql->count_to_be_invoiced_var('off');

        foreach ($to_be_invoiced_arr as $to_be_invoiced_num) {
            $to_be_invoiced_num;
        }


        $completed_sales_arr = $wrapper_sql->count_completed_sales_var('on', 'on', 'on');

        foreach ($completed_sales_arr as $completed_sales_num) {
            $completed_sales_num;
        }


        return $this->view->render($response,
            'dashboard.html.twig',
            [
                'css_path' => CSS_PATH,
                'js_path' => JS_PATH,

                'to_be_packed_num' => $to_be_packed_num,
                'to_be_shipped_num' => $to_be_shipped_num,
                'to_be_invoiced_num' => $to_be_invoiced_num,
                'completed_sales_num' => $completed_sales_num,

            ]);

    } else {

        return $this->response->withRedirect('/wms/index.php/');

    }


})->setName('dashboard');

$app->get('/tobepacked', function (Request $request, Response $response, $args) {

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

        $to_be_packed = [];
        $to_be_packed = $wrapper_sql->get_sales_orders_to_be_packed_var('off');


        return $this->view->render($response,
            'tobepacked.html.twig',
            [
                'css_path' => CSS_PATH,
                'js_path' => JS_PATH,

                'to_be_packed' => $to_be_packed,
            ]);

    } else {

        return $this->response->withRedirect('/wms/index.php/');

    }


})->setName('tobepacked');


$app->get('/tobeshipped', function (Request $request, Response $response, $args) {

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


        $to_be_shipped = [];
        $to_be_shipped = $wrapper_sql->get_sales_orders_to_be_shipped_var('on', 'off');


        return $this->view->render($response,
            'tobeshipped.html.twig',
            [
                'css_path' => CSS_PATH,
                'js_path' => JS_PATH,

                'to_be_shipped' => $to_be_shipped,
            ]);

    } else {

        return $this->response->withRedirect('/wms/index.php/');

    }


})->setName('tobeshipped');


$app->get('/tobeinvoiced', function (Request $request, Response $response, $args) {

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


        $to_be_invoiced = [];
        $to_be_invoiced = $wrapper_sql->get_sales_orders_to_be_invoiced_var('off');


        return $this->view->render($response,
            'tobeinvoiced.html.twig',
            [
                'css_path' => CSS_PATH,
                'js_path' => JS_PATH,

                'to_be_invoiced' => $to_be_invoiced,
            ]);

    } else {

        return $this->response->withRedirect('/wms/index.php/');

    }


})->setName('tobeinvoiced');


$app->get('/completedsales', function (Request $request, Response $response, $args) {

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


        $completed_salesm = [];
        $completed_sales = $wrapper_sql->get_completed_sales_var('on', 'on', 'on');


        return $this->view->render($response,
            'completedsales.html.twig',
            [
                'css_path' => CSS_PATH,
                'js_path' => JS_PATH,

                'completed_sales' => $completed_sales,
            ]);

    } else {

        return $this->response->withRedirect('/wms/index.php/');

    }


})->setName('completedsales');




