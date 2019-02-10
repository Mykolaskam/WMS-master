<?php
/**
 * Created by PhpStorm.
 * User: mykolaskaminskas
 * Date: 2019-01-25
 * Time: 01:49
 */

class Item
{

    private $c_id;
    private $c_item_name;
    private $c_sku;
    private $c_manufacturer;
    private $c_selling_price;
    private $c_part_number;
    private $c_serial_number;
    private $c_purchase_price;
    private $c_barcode_code;
    private $c_description;
    private $c_warehouse_location;
    private $c_stock;

    private $c_quantity;

    public function __construct()
    {
        $this->c_id = null;
        $this->c_item_name = null;
        $this->c_sku = null;
        $this->c_manufacturer = null;
        $this->c_selling_price = null;
        $this->c_part_number = null;
        $this->c_serial_number = null;
        $this->c_purchase_price = null;
        $this->c_barcode_code = null;
        $this->c_description = null;
        $this->c_warehouse_location = null;
        $this->c_stock = null;
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
    public function get_item_name()
    {
        return $this->c_item_name;
    }

    /**
     * @param null $c_item_name
     */
    public function set_item_name($c_item_name)
    {
        $this->c_item_name = $c_item_name;
    }

    /**
     * @return null
     */
    public function get_sku()
    {
        return $this->c_sku;
    }

    /**
     * @param null $c_sku
     */
    public function set_sku($c_sku)
    {
        $this->c_sku = $c_sku;
    }

    /**
     * @return null
     */
    public function get_manufacturer()
    {
        return $this->c_manufacturer;
    }

    /**
     * @param null $c_manufacturer
     */
    public function set_manufacturer($c_manufacturer)
    {
        $this->c_manufacturer = $c_manufacturer;
    }

    /**
     * @return null
     */
    public function get_selling_price()
    {
        return $this->c_selling_price;
    }

    /**
     * @param null $c_selling_price
     */
    public function set_selling_price($c_selling_price)
    {
        $this->c_selling_price = $c_selling_price;
    }

    /**
     * @return null
     */
    public function get_part_number()
    {
        return $this->c_part_number;
    }

    /**
     * @param null $c_part_number
     */
    public function set_part_number($c_part_number)
    {
        $this->c_part_number = $c_part_number;
    }

    /**
     * @return null
     */
    public function get_serial_number()
    {
        return $this->c_serial_number;
    }

    /**
     * @param null $c_serial_number
     */
    public function set_serial_number($c_serial_number)
    {
        $this->c_serial_number = $c_serial_number;
    }

    /**
     * @return null
     */
    public function get_purchase_price()
    {
        return $this->c_purchase_price;
    }

    /**
     * @param null $c_purchase_price
     */
    public function set_purchase_price($c_purchase_price)
    {
        $this->c_purchase_price = $c_purchase_price;
    }

    /**
     * @return null
     */
    public function get_barcode_code()
    {
        return $this->c_barcode_code;
    }

    /**
     * @param null $c_barcode_code
     */
    public function set_barcode_code($c_barcode_code)
    {
        $this->c_barcode_code = $c_barcode_code;
    }

    /**
     * @return null
     */
    public function get_description()
    {
        return $this->c_description;
    }

    /**
     * @param null $c_description
     */
    public function set_description($c_description)
    {
        $this->c_description = $c_description;
    }

    /**
     * @return null
     */
    public function get_warehouse_location()
    {
        return $this->c_warehouse_location;
    }

    /**
     * @param null $c_warehouse_location
     */
    public function set_warehouse_location($c_warehouse_location)
    {
        $this->c_warehouse_location = $c_warehouse_location;
    }

    /**
     * @return null
     */
    public function get_stock()
    {
        return $this->c_stock;
    }

    /**
     * @param null $c_stock
     */
    public function set_stock($c_stock)
    {
        $this->c_stock = $c_stock;
    }

    public function get_quantity()
    {
        return $this->c_stock;
    }

    public function set_quantity($c_stock)
    {
        $this->c_stock = $c_stock;
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

        $m_store_result = $this->c_obj_wrapper_user_db->create_user_var($this->c_username, $this->c_password, $this->c_name, $this->c_surname);

        return $m_store_result;
    }

    public function get_order_items_from_database($p_order_id)
    {
        $m_store_result = false;

        $this->c_obj_wrapper_user_db->set_db_handle($this->c_obj_db_handle);
        $this->c_obj_wrapper_user_db->set_sql_queries($this->c_obj_sql_queries);

        $m_store_result = $this->c_obj_wrapper_user_db->get_item_var($p_order_id);

        return $m_store_result;
    }


    public function get_items_from_database($p_item_id)
    {
        $m_store_result = false;

        $this->c_obj_wrapper_user_db->set_db_handle($this->c_obj_db_handle);
        $this->c_obj_wrapper_user_db->set_sql_queries($this->c_obj_sql_queries);

        $m_store_result = $this->c_obj_wrapper_user_db->get_items_by_id_var($p_item_id);

        return $m_store_result;
    }


}