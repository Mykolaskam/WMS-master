<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

$app->get('/newsalesorder', function (Request $request, Response $response) {

    $wrapper_sql = $this->get('sql_wrapper');
    $db_handle = $this->get('dbase');
    $sql_queries = $this->get('sql_queries');

    $wrapper_sql->set_db_handle($db_handle);
    $wrapper_sql->set_sql_queries($sql_queries);


    if ($wrapper_sql->session_var_exists(session_id())) {
        return $this->view->render($response,
            'newSO.html.twig',
            [
                'css_path' => CSS_PATH,
                'js_path' => JS_PATH,
                'sales_orders' => '/wms/index.php/salesorders',
            ]);

    } else {

        return $this->response->withRedirect('/wms/index.php/');

    }


})->setName('newsalesorder');
