<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

$app->get('/deletecustomer', function ($request, $response, $args) {

    $wrapper_sql = $this->get('sql_wrapper');
    $db_handle = $this->get('dbase');
    $sql_queries = $this->get('sql_queries');
    $session_model = $this->get('session_model');
    $session_wrapper = $this->get('session_wrapper');
    $validator = $this->get('validator');

    $wrapper_sql->set_db_handle($db_handle);
    $wrapper_sql->set_sql_queries($sql_queries);

    if ($wrapper_sql->session_var_exists(session_id())) {

        $wrapper_sql->delete_customer_var($session_wrapper->get_session('customer_id'));

        return $this->response->withRedirect('/wms/index.php/customers');

    }

})->setName('deletecustomer');


$app->get('/editcustomer/{id}', function ($request, $response, $args) {

    $customer_id = $args['id'];


    $wrapper_sql = $this->get('sql_wrapper');
    $db_handle = $this->get('dbase');
    $sql_queries = $this->get('sql_queries');
    $session_model = $this->get('session_model');
    $session_wrapper = $this->get('session_wrapper');
    $validator = $this->get('validator');

    $wrapper_sql->set_db_handle($db_handle);
    $wrapper_sql->set_sql_queries($sql_queries);

    $session_wrapper->set_session('customer_id', $customer_id);

    if ($wrapper_sql->session_var_exists(session_id())) {

        $the_customer = $wrapper_sql->get_customer_by_id_var($customer_id);


        return $this->view->render($response,
            'editcustomer.html.twig',
            [
                'css_path' => CSS_PATH,
                'js_path' => JS_PATH,

                'the_customer' => $the_customer,
                'action_update_customer' => '/wms/index.php/editcustomer',
            ]);

    } else {

        return $this->response->withRedirect('/wms/index.php/');

    }

})->setName('editcustomer');


$app->post('/editcustomer', function (Request $request, Response $response) {


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

        $salutation = $arr_tainted_params['salutation'];
        $first_name = $arr_tainted_params['first_name'];
        $last_name = $arr_tainted_params['last_name'];
        $company_name = $arr_tainted_params['company_name'];
        $email = $arr_tainted_params['email'];
        $alt_email = $arr_tainted_params['alt_email'];
        $phone_number = $arr_tainted_params['phone_number'];
        $alt_phone_number = $arr_tainted_params['alt_phone_number'];
        $website = $arr_tainted_params['website'];
        $billing_address = $arr_tainted_params['billing_address'];
        $pref_currency = $arr_tainted_params['pref_currency'];
        $notes = $arr_tainted_params['notes'];

        $sanitised_salutation = $validator->sanitise_string($salutation);
        $sanitised_first_name = $validator->sanitise_string($first_name);
        $sanitised_last_name = $validator->sanitise_string($last_name);
        $sanitised_company_name = $validator->sanitise_string($company_name);
        $sanitised_email = $validator->sanitise_string($email);
        $sanitised_alt_email = $validator->sanitise_string($alt_email);
        $sanitised_phone_number = $validator->sanitise_string($phone_number);
        $sanitised_alt_phone_number = $validator->sanitise_string($alt_phone_number);
        $sanitised_website = $validator->sanitise_string($website);
        $sanitised_billing_address = $validator->sanitise_string($billing_address);
        $sanitised_pref_currency = $validator->sanitise_string($pref_currency);
        $sanitised_notes = $validator->sanitise_string($notes);


        $wrapper_sql->update_customer_var($sanitised_salutation,
            $sanitised_first_name,
            $sanitised_last_name,
            $sanitised_company_name,
            $sanitised_email,
            $sanitised_alt_email,
            $sanitised_phone_number,
            $sanitised_alt_phone_number,
            $sanitised_website,
            $sanitised_billing_address,
            $sanitised_pref_currency,
            $sanitised_notes,
            $session_wrapper->get_session('customer_id'));


        return $this->response->withRedirect('/wms/index.php/customers');

    } else {

        return $this->response->withRedirect('/wms/index.php/');

    }


})->setName('editcustomer');




