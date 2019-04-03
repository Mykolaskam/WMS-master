<?php
/**
 * Created by PhpStorm.
 * User: mykolaskaminskas
 * Date: 2019-01-25
 * Time: 01:49
 */

class OrderItems
{

    private $c_id;
    private $c_order_id;
    private $c_item_id;
    private $c_quantity;


    public function __construct()
    {
        $this->c_id = null;
        $this->c_order_id = null;
        $this->c_item_id = null;
        $this->c_quantity = null;
    }

    public function __destruct()
    {
    }

    /**
     * @return null
     */
    public function get_id()
    {
        return $this->c_id;
    }

    /**
     * @param null $c_id
     */
    public function set_id($c_id)
    {
        $this->c_id = $c_id;
    }

    /**
     * @return null
     */
    public function get_order_id()
    {
        return $this->c_order_id;
    }

    /**
     * @param null $c_order_id
     */
    public function set_order_id($c_order_id)
    {
        $this->c_order_id = $c_order_id;
    }

    /**
     * @return null
     */
    public function get_item_id()
    {
        return $this->c_item_id;
    }

    /**
     * @param null $c_item_id
     */
    public function set_item_id($c_item_id)
    {
        $this->c_item_id = $c_item_id;
    }

    /**
     * @return null
     */
    public function get_quantity()
    {
        return $this->c_quantity;
    }

    /**
     * @param null $c_quantity
     */
    public function set_quantity($c_quantity)
    {
        $this->c_quantity = $c_quantity;
    }


    public function set_wrapper_user_db($p_obj_wrapper_db)
    {
        $this->c_obj_wrapper_user_db = $p_obj_wrapper_db;
    }

    /**
     * @param $p_obj_db_handle
     */
    public function set_db_handle($p_obj_db_handle)
    {
        $this->c_obj_db_handle = $p_obj_db_handle;
    }

    /**
     * @param $p_obj_sql_queries
     */
    public function set_sql_queries($p_obj_sql_queries)
    {
        $this->c_obj_sql_queries = $p_obj_sql_queries;
    }

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

    /**
     * @return bool
     */
    public function store_data_in_database()
    {
        $m_store_result = false;

        $this->c_obj_wrapper_user_db->set_db_handle($this->c_obj_db_handle);
        $this->c_obj_wrapper_user_db->set_sql_queries($this->c_obj_sql_queries);


        $m_store_result = $this->c_obj_wrapper_user_db->add_item_to_order_items_var($this->c_order_id, $this->c_item_id, $this->c_quantity);

        return $m_store_result;
    }


}