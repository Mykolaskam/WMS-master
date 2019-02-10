<?php


class SQLWrapper
{
    /**
     * @var null
     */
    private $c_obj_db_handle;
    /**
     * @var null
     */
    private $c_obj_sql_queries;
    /**
     * @var null
     */
    private $c_obj_stmt;
    /**
     * @var array
     */
    private $c_arr_errors;

    /**
     * SQLWrapper constructor.
     */
    public function __construct()
    {
        $this->c_obj_db_handle = null;
        $this->c_obj_sql_queries = null;
        $this->c_obj_stmt = null;
        $this->c_arr_errors = [];
    }

    /**
     *
     */
    public function __destruct()
    {
    }

    /**
     * @param $p_obj_db_handle
     */
    public function set_db_handle($p_obj_db_handle)
    {
        $this->c_obj_db_handle = $p_obj_db_handle;
    }

    /**
     * SQL queries are passed through using the SQLqueries.php
     * @param $p_obj_sql_queries
     */
    public function set_sql_queries($p_obj_sql_queries)
    {
        $this->c_obj_sql_queries = $p_obj_sql_queries;
    }






    /** ========================= LOGIN STUFF ==============================     */
    /**
     * @param $p_session_key
     * @param $p_session_value
     * @return array
     */
    public function store_session_var($p_session_key, $p_session_value)
    {

        if ($this->session_var_exists($p_session_key) === true) {
            $this->set_session_var($p_session_key, $p_session_value);
        } else {
            $this->create_session_var($p_session_key, $p_session_value);
        }

        return ($this->c_arr_errors);
    }

    /**
     * checks if session exists on the database using an sql query with given session_id(). The query is executed using safe_query with passed query string and passed parameters. if more than 0 rows is returned - method will return true.
     * @return bool
     */
    public function session_var_exists()
    {
        $session_var_exists = false;
        $m_query_string = $this->c_obj_sql_queries->check_session_var();

        $m_arr_query_parameters = [
            ':local_session_id' => session_id()
        ];

        $this->safe_query($m_query_string, $m_arr_query_parameters);

        if ($this->count_rows() > 0) {
            $session_var_exists = true;
        }
        return $session_var_exists;
    }

    /**
     *
     * @param $p_session_key
     * @param $p_session_value
     */
    private function set_session_var($p_session_key, $p_session_value)
    {
        $m_query_string = $this->c_obj_sql_queries->set_session_var();

        $m_arr_query_parameters = [
            ':local_session_id' => session_id(),
            ':session_var_name' => $p_session_key,
            ':session_var_value' => $p_session_value
        ];

        $this->safe_query($m_query_string, $m_arr_query_parameters);
    }

    /**
     *Session is deleted from the database using an sql query with given session_id(). The query is executed using safe_query with passed query string and passed parameters. and at the end local session is destroyed using session_destroy()
     */
    public function destroy_session()
    {
        $m_query_string = $this->c_obj_sql_queries->delete_session_var();

        $m_arr_query_parameters = [
            ':local_session_id' => session_id()
        ];

        $this->safe_query($m_query_string, $m_arr_query_parameters);
        session_destroy();
    }

    /**
     * function accepts a sting parameter username. Function returns a password from the database using an sql query with given parameter username. The query is executed using safe_query with passed query string and passed parameters.
     * the method fetches an array stored in password variable that contains the password of the given username.
     * @param $p_username
     * @return mixed
     */
    public function user_var_exists($p_username)
    {

        $m_query_string = $this->c_obj_sql_queries->get_password();

        $m_arr_query_parameters = [
            ':local_username' => $p_username
        ];

        $this->safe_query($m_query_string, $m_arr_query_parameters);

        $password = $this->safe_fetch_array()['password'];
        return $password;

    }

    /**
     *function checks if the username already exists on the database. The query is executed using safe_query with passed query string and passed parameters. if more than 0 rows is returned - method will return true.
     * @param $p_username
     * @return bool
     */
    public function username_var_exists($p_username)
    {

        $username_var_exists = false;

        $m_query_string = $this->c_obj_sql_queries->get_username();

        $m_arr_query_parameters = [
            ':local_username' => $p_username
        ];

        $this->safe_query($m_query_string, $m_arr_query_parameters);

        if ($this->count_rows() > 0) {
            $username_var_exists = true;
        }
        return $username_var_exists;
    }

    /**
     * function creates a new record in the databaes of a session recorded. function accepts session key and session value to be passed as parameters for safe_query.The query is executed using safe_query with passed query string and passed parameters.
     * @param $p_session_key
     * @param $p_session_value
     */
    private function create_session_var($p_session_key, $p_session_value)
    {
        $m_query_string = $this->c_obj_sql_queries->create_session_var();

        $m_arr_query_parameters = [
            ':local_session_id' => session_id(),
            ':session_var_name' => $p_session_key,
            ':session_var_value' => $p_session_value
        ];

        $this->safe_query($m_query_string, $m_arr_query_parameters);
    }

    public function create_user_var($p_username, $p_password, $p_name, $p_surname)
    {
        $m_query_string = $this->c_obj_sql_queries->create_new_user();

        $m_arr_query_parameters = [
            ':local_username' => $p_username,
            ':local_password' => $p_password,
            ':local_name' => $p_name,
            ':local_surname' => $p_surname
        ];

        $this->safe_query($m_query_string, $m_arr_query_parameters);
    }

    /** ========================= LOGIN STUFF END ==============================     */




    /** ========================= SALES ORDERS ==============================     */
    public function create_sales_order_id_var()
    {
        $m_query_string = $this->c_obj_sql_queries->create_sales_order_id();

        $m_arr_query_parameters = [];

        $this->safe_query($m_query_string, $m_arr_query_parameters);
    }


    public function delete_empty_orders_var()
    {
        $m_query_string = $this->c_obj_sql_queries->delete_empty_orders();

        $m_arr_query_parameters = [];

        $this->safe_query($m_query_string, $m_arr_query_parameters);
    }


    /**
     * function returns and array of messages from the database messages table. The query is executed using safe_query with passed query string and passed parameters but in this case no parameters needed to be set.
     * @return mixed
     */
    public function get_sales_orders_var()
    {

        $m_query_string = $this->c_obj_sql_queries->get_sales_orders();

        $m_arr_query_parameters = [];

        $this->safe_query($m_query_string, $m_arr_query_parameters);

        $message = $this->safe_fetch_all_array();
        return $message;
    }

    public function create_sales_order_var($customer_id, $so_number, $so_date,$ID)
    {

        $m_query_string = $this->c_obj_sql_queries->create_sales_order();

        $m_arr_query_parameters = [
            ':local_customer_id' => $customer_id,
            ':local_so_number' => $so_number,
            ':local_so_date' => $so_date,
            ':local_ID' => $ID
        ];

        $this->safe_query($m_query_string, $m_arr_query_parameters);
    }

    public function get_all_on_sales_order_var()
    {

        $m_query_string = $this->c_obj_sql_queries->get_all_on_sales_order();

        $m_arr_query_parameters = [];

        $this->safe_query($m_query_string, $m_arr_query_parameters);

        $message = $this->safe_fetch_all_array();
        return $message;
    }

    /** ========================= SALES ORDERS END ==============================     */






    /** ========================= ITEMS ==============================     */
    public function get_items_var()
    {

        $m_query_string = $this->c_obj_sql_queries->get_items();

        $m_arr_query_parameters = [];

        $this->safe_query($m_query_string, $m_arr_query_parameters);

        $item = $this->safe_fetch_all_array();
        return $item;
    }

    public function get_items_by_id_var($p_item_id)
    {

        $m_query_string = $this->c_obj_sql_queries->get_items_by_id();

        $m_arr_query_parameters = [
            ':local_item_id' => $p_item_id
        ];

        $this->safe_query($m_query_string, $m_arr_query_parameters);

        $item = $this->safe_fetch_all_array();
        return $item;
    }

    public function create_new_item_var($p_item_name, $p_sku, $p_manufacturer, $p_selling_price, $p_part_number, $p_serial_number, $p_purchase_price, $p_barcode_code, $p_description, $p_warehouse_location, $p_stock)
    {
        $m_query_string = $this->c_obj_sql_queries->create_new_item();

        $m_arr_query_parameters = [
            ':local_item_name' => $p_item_name,
            ':local_sku' => $p_sku,
            ':local_manufacturer' => $p_manufacturer,
            ':local_selling_price' => $p_selling_price,
            ':local_part_number' => $p_part_number,
            ':local_serial_number' => $p_serial_number,
            ':local_purchase_price' => $p_purchase_price,
            ':local_barcode_code' => $p_barcode_code,
            ':local_description' => $p_description,
            ':local_warehouse_location' => $p_warehouse_location,
            ':local_stock' => $p_stock
        ];

        $this->safe_query($m_query_string, $m_arr_query_parameters);
    }
    /** ========================= ITEMS END ==============================     */







    /** ========================= CUSTOMERS ==============================     */
    public function get_customers_var()
    {

        $m_query_string = $this->c_obj_sql_queries->get_customers();

        $m_arr_query_parameters = [];

        $this->safe_query($m_query_string, $m_arr_query_parameters);

        $customer = $this->safe_fetch_all_array();
        return $customer;
    }

    public function create_new_customer_var($p_salutation, $p_first_name, $p_last_name, $p_company_name, $p_email, $p_alt_email, $p_phone_number, $p_alt_phone_number, $p_website, $p_billing_address, $p_pref_currency, $p_notes)
    {
        $m_query_string = $this->c_obj_sql_queries->create_new_customer();

        $m_arr_query_parameters = [
            ':local_salutation' => $p_salutation,
            ':local_first_name' => $p_first_name,
            ':local_last_name' => $p_last_name,
            ':local_company_name' => $p_company_name,
            ':local_email' => $p_email,
            ':local_alt_email' => $p_alt_email,
            ':local_phone_number' => $p_phone_number,
            ':local_alt_phone_number' => $p_alt_phone_number,
            ':local_website' => $p_website,
            ':local_billing_address' => $p_billing_address,
            ':local_pref_currency' => $p_pref_currency,
            ':local_notes' => $p_notes
        ];

        $this->safe_query($m_query_string, $m_arr_query_parameters);
    }
    /** ========================= CUSTOMERS ==============================     */





    /** ========================= ORDER ITEMS ==============================     */
    public function add_item_to_order_items_var($p_order_id, $p_item_id, $p_quantity)
    {
        $m_query_string = $this->c_obj_sql_queries->add_item_to_order_items();

        $m_arr_query_parameters = [
            ':local_order_id' => $p_order_id,
            ':local_item_id' => $p_item_id,
            ':local_quantity' => $p_quantity
        ];

        $this->safe_query($m_query_string, $m_arr_query_parameters);
    }


    public function get_item_var($p_order_id)
    {

        $m_query_string = $this->c_obj_sql_queries->get_item();

        $m_arr_query_parameters = [
            ':local_order_id' => $p_order_id
        ];

        $this->safe_query($m_query_string, $m_arr_query_parameters);

        $item = $this->safe_fetch_all_array();
        return $item;
    }
    /** ========================= ORDER ITEMS END ==============================     */



    /**
     * this function accepts a query string and an array of parameters. The function uses prepeared statements and binds parameters. Function also catches pdo exception and displays error information
     * @param $p_query_string
     * @param null $p_arr_params
     * @return mixed
     */
    public function safe_query($p_query_string, $p_arr_params = null)
    {
        $this->c_arr_errors['db_error'] = false;
        $m_query_string = $p_query_string;
        $m_arr_query_parameters = $p_arr_params;

        try {
            $m_temp = array();

            $this->c_obj_stmt = $this->c_obj_db_handle->prepare($m_query_string);

            // bind the parameters
            if (sizeof($m_arr_query_parameters) > 0) {
                foreach ($m_arr_query_parameters as $m_param_key => $m_param_value) {
                    $m_temp[$m_param_key] = $m_param_value;
                    $this->c_obj_stmt->bindParam($m_param_key, $m_temp[$m_param_key], PDO::PARAM_STR);
                }
            }
            // execute the query
            $m_execute_result = $this->c_obj_stmt->execute();
            $this->c_arr_errors['execute-OK'] = $m_execute_result;
        } catch (PDOException $exception_object) {
            $m_error_message = 'PDO Exception caught. ';
            $m_error_message .= 'Error with the database access.' . "\n";
            $m_error_message .= 'SQL query: ' . $m_query_string . "\n";
            $m_error_message .= 'Error: ' . var_dump($this->c_obj_stmt->errorInfo(), true) . "\n";
            // NB would usually output to file for sysadmin attention
            $this->c_arr_errors['db_error'] = true;
            $this->c_arr_errors['sql_error'] = $m_error_message;
        }
        return $this->c_arr_errors['db_error'];
    }

    /**
     * function counts how many rows were returne from a query
     * @return mixed
     */
    public function count_rows()
    {
        $m_num_rows = $this->c_obj_stmt->rowCount();
        return $m_num_rows;
    }

    /**
     * @return mixed
     */
    public function safe_fetch_array()
    {
        $m_arr_row = $this->c_obj_stmt->fetch(PDO::FETCH_ASSOC);
        $this->c_obj_stmt->closeCursor();
        return $m_arr_row;
    }

    /**
     * @return mixed
     */
    public function safe_fetch_all_array()
    {
        $m_arr_row = $this->c_obj_stmt->fetchall(PDO::FETCH_ASSOC);
        $this->c_obj_stmt->closeCursor();
        return $m_arr_row;
    }

    public function last_inserted_ID()
    {
        $m_sql_query = 'SELECT LAST_INSERT_ID()';

        $this->safe_query($m_sql_query);
        $m_arr_last_inserted_id = $this->safe_fetch_array();
        $m_last_inserted_id = $m_arr_last_inserted_id['LAST_INSERT_ID()'];
        return $m_last_inserted_id;
    }

}
