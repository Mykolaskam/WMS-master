<?php
/**
 * Created by PhpStorm.
 * User: mykolaskaminskas
 * Date: 2019-01-25
 * Time: 01:49
 */

class SalesOrder
{

    private $c_id;
    private $c_company_name;
    private $c_customer_name;
    private $c_so_number;
    private $c_so_date;
    private $c_packed;
    private $c_shipped;
    private $c_invoiced;
    private $c_amount;

    public function __construct()
    {
        $this->c_id = null;
        $this->c_company_name = null;
        $this->c_customer_name = null;
        $this->c_so_number = null;
        $this->c_so_date = null;
        $this->c_packed = null;
        $this->c_shipped = null;
        $this->c_invoiced = null;
        $this->c_amount = null;
    }

    public function __destruct()
    {
    }

    public function set_values($p_id, $p_company_name, $p_customer_name, $p_so_number, $p_so_date, $p_packed, $p_shipped, $p_invoiced, $p_amount)
    {
        $this->c_id = $p_id;
        $this->c_company_name = $p_company_name;
        $this->c_customer_name = $p_customer_name;
        $this->c_so_number = $p_so_number;
        $this->c_so_date = $p_so_date;
        $this->c_packed = $p_packed;
        $this->c_shipped = $p_shipped;
        $this->c_invoiced = $p_invoiced;
        $this->c_amount = $p_amount;
    }

    /**
     * @return null
     */
    public function get_c_id()
    {
        return $this->c_id;
    }

    /**
     * @param null $c_id
     */
    public function set_c_id($c_id)
    {
        $this->c_id = $c_id;
    }

    /**
     * @return null
     */
    public function get_c_company_name()
    {
        return $this->c_company_name;
    }

    /**
     * @param null $c_company_name
     */
    public function set_c_company_name($c_company_name)
    {
        $this->c_company_name = $c_company_name;
    }

    /**
     * @return null
     */
    public function get_c_customer_name()
    {
        return $this->c_customer_name;
    }

    /**
     * @param null $c_customer_name
     */
    public function set_c_customer_name($c_customer_name)
    {
        $this->c_customer_name = $c_customer_name;
    }

    /**
     * @return null
     */
    public function get_c_so_number()
    {
        return $this->c_so_number;
    }

    /**
     * @param null $c_so_number
     */
    public function set_c_so_number($c_so_number)
    {
        $this->c_so_number = $c_so_number;
    }

    /**
     * @return null
     */
    public function get_c_so_date()
    {
        return $this->c_so_date;
    }

    /**
     * @param null $c_so_date
     */
    public function set_c_so_date($c_so_date)
    {
        $this->c_so_date = $c_so_date;
    }

    /**
     * @return null
     */
    public function get_c_packed()
    {
        return $this->c_packed;
    }

    /**
     * @param null $c_packed
     */
    public function set_c_packed($c_packed)
    {
        $this->c_packed = $c_packed;
    }

    /**
     * @return null
     */
    public function get_c_shipped()
    {
        return $this->c_shipped;
    }

    /**
     * @param null $c_shipped
     */
    public function set_c_shipped($c_shipped)
    {
        $this->c_shipped = $c_shipped;
    }

    /**
     * @return null
     */
    public function get_c_invoiced()
    {
        return $this->c_invoiced;
    }

    /**
     * @param null $c_invoiced
     */
    public function set_c_invoiced($c_invoiced)
    {
        $this->c_invoiced = $c_invoiced;
    }

    /**
     * @return null
     */
    public function get_c_amount()
    {
        return $this->c_amount;
    }

    /**
     * @param null $c_amount
     */
    public function set_c_amount($c_amount)
    {
        $this->c_amount = $c_amount;
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




}