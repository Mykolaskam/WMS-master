<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

$app->get('/deleteitem', function ($request, $response, $args) {

    $wrapper_sql = $this->get('sql_wrapper');
    $db_handle = $this->get('dbase');
    $sql_queries = $this->get('sql_queries');
    $session_model = $this->get('session_model');
    $session_wrapper = $this->get('session_wrapper');
    $validator = $this->get('validator');

    $wrapper_sql->set_db_handle($db_handle);
    $wrapper_sql->set_sql_queries($sql_queries);

    if ($wrapper_sql->session_var_exists(session_id())) {

        $wrapper_sql->delete_item_var($session_wrapper->get_session('item_id'));

        return $this->response->withRedirect('/wms/index.php/items');

    }

})->setName('deleteitem');


$app->get('/edititem/{id}', function ($request, $response, $args) {

    $item_id = $args['id'];



    $wrapper_sql = $this->get('sql_wrapper');
    $db_handle = $this->get('dbase');
    $sql_queries = $this->get('sql_queries');
    $session_model = $this->get('session_model');
    $session_wrapper = $this->get('session_wrapper');
    $validator = $this->get('validator');

    $wrapper_sql->set_db_handle($db_handle);
    $wrapper_sql->set_sql_queries($sql_queries);

    $session_wrapper->set_session('item_id', $item_id);

    if ($wrapper_sql->session_var_exists(session_id())) {

        $the_item = $wrapper_sql->get_items_by_id_var($item_id);


        return $this->view->render($response,
            'edititem.html.twig',
            [
                'css_path' => CSS_PATH,
                'js_path' => JS_PATH,

                'the_item' => $the_item,
                'action_update_item' => '/wms/index.php/edititem',
            ]);

    } else {

        return $this->response->withRedirect('/wms/index.php/');

    }

})->setName('edititem');


$app->post('/edititem', function (Request $request, Response $response) {


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

        $item_name = $arr_tainted_params['item_name'];
        $sku = $arr_tainted_params['sku'];
        $manufacturer = $arr_tainted_params['manufacturer'];
        $selling_price = $arr_tainted_params['selling_price'];
        $part_number = $arr_tainted_params['part_number'];
        $serial_number = $arr_tainted_params['serial_number'];
        $purchase_price = $arr_tainted_params['purchase_price'];
        $barcode_code = $arr_tainted_params['barcode_code'];
        $description = $arr_tainted_params['description'];
        $warehouse_location = $arr_tainted_params['warehouse_location'];
        $stock = $arr_tainted_params['stock'];


        $sanitised_item_name = $validator->sanitise_string($item_name);
        $sanitised_sku = $validator->sanitise_string($sku);
        $sanitised_manufacturer = $validator->sanitise_string($manufacturer);
        $sanitised_selling_price = $validator->sanitise_string($selling_price);
        $sanitised_part_number = $validator->sanitise_string($part_number);
        $sanitised_serial_number = $validator->sanitise_string($serial_number);
        $sanitised_purchase_price = $validator->sanitise_string($purchase_price);
        $sanitised_barcode_code = $validator->sanitise_string($barcode_code);
        $sanitised_description = $validator->sanitise_string($description);
        $sanitised_warehouse_location = $validator->sanitise_string($warehouse_location);
        $sanitised_stock = $validator->sanitise_string($stock);



        $wrapper_sql->update_item_var($sanitised_item_name, $sanitised_sku, $sanitised_manufacturer, $sanitised_selling_price, $sanitised_part_number, $sanitised_serial_number, $sanitised_purchase_price, $sanitised_barcode_code, $sanitised_description, $sanitised_warehouse_location, $sanitised_stock, $session_wrapper->get_session('item_id'));


        return $this->response->withRedirect('/wms/index.php/items');

    } else {

        return $this->response->withRedirect('/wms/index.php/');

    }


})->setName('edititem');




