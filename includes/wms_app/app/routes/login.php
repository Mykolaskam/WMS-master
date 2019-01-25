<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

$app->get('/', function (Request $request, Response $response) {

    $wrapper_sql = $this->get('sql_wrapper');
    $db_handle = $this->get('dbase');
    $sql_queries = $this->get('sql_queries');
    $session_model = $this->get('session_model');

    $session_model->set_wrapper_session_db($wrapper_sql);
    $session_model->set_db_handle($db_handle);
    $session_model->set_sql_queries($sql_queries);

    $wrapper_sql->set_db_handle($db_handle);
    $wrapper_sql->set_sql_queries($sql_queries);

    if ($wrapper_sql->session_var_exists(session_id())) {

        return $this->response->withRedirect('/wms/index.php/salesorders');

    } else {

        return $this->view->render($response,
            'login.html.twig',
            [
                'css_path' => CSS_PATH,
                'js_path' => JS_PATH,
                'action_login' => '/wms/index.php/',
            ]);

    }

})->setName('login');


$app->post('/', function (Request $request, Response $response) {

    $arr_tainted_params = $request->getParsedBody();

    $wrapper_sql = $this->get('sql_wrapper');
    $db_handle = $this->get('dbase');
    $sql_queries = $this->get('sql_queries');
    $session_model = $this->get('session_model');
    $validator = $this->get('validator');
    $bcrypt = $this->get('bcrypt_wrapper');

    $session_model->set_wrapper_session_db($wrapper_sql);
    $session_model->set_db_handle($db_handle);
    $session_model->set_sql_queries($sql_queries);

    $username = $arr_tainted_params['username'];
    $password = $arr_tainted_params['password'];

    $sanitised_username = $validator->sanitise_string($username);
    $sanitised_password = $validator->sanitise_string($password);

    $wrapper_sql->set_db_handle($db_handle);
    $wrapper_sql->set_sql_queries($sql_queries);

    if (empty($sanitised_username) || empty($sanitised_password)) {

        return $this->view->render($response,
            'login.html.twig',
            [
                'css_path' => CSS_PATH,
            ]);
    }

    if ($bcrypt->authenticate_password($sanitised_password, $wrapper_sql->user_var_exists($sanitised_username))) {

        $session_model->set_session_values($sanitised_username);
        $session_model->set_wrapper_session_db($wrapper_sql);
        $session_model->set_db_handle($db_handle);
        $session_model->set_sql_queries($sql_queries);
        $session_model->store_data();
        $store_result = $session_model->get_storage_result();
        return $this->response->withRedirect('/wms/index.php/salesorders');

    } else {

        return $this->view->render($response,
            'login.html.twig',
            [
                'css_path' => CSS_PATH,
            ]);
    }

})->setName('login');


$app->get('/logout', function (Request $request, Response $response) {

    $wrapper_sql = $this->get('sql_wrapper');
    $db_handle = $this->get('dbase');
    $sql_queries = $this->get('sql_queries');
    $session_model = $this->get('session_model');

    $session_model->set_wrapper_session_db($wrapper_sql);
    $session_model->set_db_handle($db_handle);
    $session_model->set_sql_queries($sql_queries);

    $wrapper_sql->set_db_handle($db_handle);
    $wrapper_sql->set_sql_queries($sql_queries);

    $wrapper_sql->destroy_session(session_id());

    return $this->response->withRedirect('/wms/index.php/');


})->setName('logout');
