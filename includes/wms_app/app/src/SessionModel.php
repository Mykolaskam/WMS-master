<?php
/**
 * SessionModel.php
 *
 * stores the validated values in the relevant storage location
 *
 * Author: CF Ingrams
 * Email: <clinton@cfing.co.uk>
 * Date: 22/10/2017
 *
 *
 * @author CF Ingrams <clinton@cfing.co.uk>
 * @copyright CFI
 *
 */

class SessionModel
{

    private $c_username;

    private $c_order_id;

    private $c_server_type;

    private $c_arr_storage_result;

    private $c_obj_wrapper_session_db;

    private $c_obj_db_handle;

    private $c_obj_sql_queries;

    /**
     * SessionModel constructor.
     */
    public function __construct()
    {
        $this->c_username = null;
        $this->c_order_id = null;
        $this->c_server_type = null;
        $this->c_arr_storage_result = null;
        $this->c_obj_wrapper_session_db = null;
        $this->c_obj_db_handle = null;
        $this->c_obj_sql_queries = null;
    }

    /**
     *
     */
    public function __destruct()
    {
    }

    /**
     * Simple setter to set the username in the class as a session value
     * @param $p_username
     */
    public function set_session_values($p_username)
    {
        $this->c_username = $p_username;
    }

    public function set_session_order_id($p_order_id)
    {
        $this->c_order_id = $p_order_id;
    }

    public function set_server_type($p_server_type)
    {
        $this->c_server_type = $p_server_type;
    }

    public function set_wrapper_session_db($p_obj_wrapper_db)
    {
        $this->c_obj_wrapper_session_db = $p_obj_wrapper_db;
    }

    public function set_db_handle($p_obj_db_handle)
    {
        $this->c_obj_db_handle = $p_obj_db_handle;
    }

    public function set_sql_queries($p_obj_sql_queries)
    {
        $this->c_obj_sql_queries = $p_obj_sql_queries;
    }

    /**
     *
     */
    public function store_data()
    {
        $this->c_arr_storage_result['database'] = $this->store_data_in_database();
    }


    /**
     * @return null
     */
    public function get_storage_result()
    {
        return $this->c_arr_storage_result;
    }

    public function store_data_in_database()
    {
        $m_store_result = false;

        $this->c_obj_wrapper_session_db->set_db_handle($this->c_obj_db_handle);
        $this->c_obj_wrapper_session_db->set_sql_queries($this->c_obj_sql_queries);

        $m_store_result = $this->c_obj_wrapper_session_db->store_session_var('user_name', $this->c_username);

        if ($m_store_result !== false) {
            $m_store_result = true;
        }
        return $m_store_result;
    }
}
