<?php

/**
 * SQLQueries.php
 *
 * hosts all SQL queries to be used by the Model
 *
 * Author: CF Ingrams
 * Email: <clinton@cfing.co.uk>
 * Date: 22/10/2017
 *
 * @author CF Ingrams <clinton@cfing.co.uk>
 * @copyright CFI
 */

class SQLQueries
{
    /**
     * SQLQueries constructor.
     */
    public function __construct()
    {
    }

    /**
     *
     */
    public function __destruct()
    {
    }

    /** ========================= LOGIN STUFF ==============================     */
    /**
     * inserts new user into database table users with values passed in sqlwrapper
     * @return string
     */
    public static function create_new_user()
    {
        $m_query_string = "INSERT INTO users ";
        $m_query_string .= "SET username = :local_username, ";
        $m_query_string .= "password = :local_password, ";
        $m_query_string .= "name = :local_name, ";
        $m_query_string .= "surname = :local_surname ";
        return $m_query_string;
    }

    /**
     * Gets password of an existing user from users table with value :local_username passed in sqlwrapper
     * @return string
     */
    public static function get_password()
    {
        $m_query_string = "SELECT password ";
        $m_query_string .= "FROM users ";
        $m_query_string .= "WHERE username = :local_username ";
        return $m_query_string;
    }

    /**
     * Gets username of an existing user from users table with value :local_username passed in sqlwrapper
     * @return string
     */
    public static function get_username()
    {
        $m_query_string = "SELECT username ";
        $m_query_string .= "FROM users ";
        $m_query_string .= "WHERE username = :local_username ";
        return $m_query_string;
    }

    /**
     * Selects session_var_name from table session where session id matches local session id
     * @return string
     */
    public static function check_session_var()
    {
        $m_query_string = "SELECT session_var_name ";
        $m_query_string .= "FROM session ";
        $m_query_string .= "WHERE session_id = :local_session_id ";
        $m_query_string .= "LIMIT 1";
        return $m_query_string;
    }

    /**
     *
     * inserts into table session session_id, session_var_name and session_var_value passed in sqlwrapper
     * @return string
     */
    public static function create_session_var()
    {
        $m_query_string = "INSERT INTO session ";
        $m_query_string .= "SET session_id = :local_session_id, ";
        $m_query_string .= "session_var_name = :session_var_name, ";
        $m_query_string .= "session_value = :session_var_value ";
        return $m_query_string;
    }

    /**
     * function deletes a row from session table where session_id matches local session id passed in sqlwrapper
     * @return string
     */
    public static function delete_session_var()
    {
        $m_query_string = "DELETE FROM session ";
        $m_query_string .= "WHERE session_id = :local_session_id ";
        return $m_query_string;
    }

    /**
     * updates a row in session table - sets session_value with session_var_value passed in sqlwrapper where session_id matches local session id and session_var_name matches session_var_name both parameters passed in sqlwrapper
     * @return string
     */
    public static function set_session_var()
    {
        $m_query_string = "UPDATE session ";
        $m_query_string .= "SET session_value = :session_var_value ";
        $m_query_string .= "WHERE session_id = :local_session_id ";
        $m_query_string .= "AND session_var_name = :session_var_name";
        return $m_query_string;
    }

    /**
     * gets session value from session table where session_id matches local_session_id and session_var_name matches session_var_name both values passed in sqlwrapper
     * @return string
     */
    public static function get_session_var()
    {
        $m_query_string = "SELECT session_value ";
        $m_query_string .= "FROM session ";
        $m_query_string .= "WHERE session_id = :local_session_id ";
        $m_query_string .= "AND session_var_name = :session_var_name";
        return $m_query_string;
    }
    /** ========================= LOGIN STUFF END ==============================     */






    /** ========================= SALES ORDERS ==============================     */
    public static function get_sales_orders()
    {
        $m_query_string = "SELECT * ";
        $m_query_string .= "FROM salesorders ";
        $m_query_string .= "ORDER BY so_date DESC ";
        return $m_query_string;
    }

    public static function create_sales_order_id()
    {
        $m_query_string = "INSERT INTO salesorders ";
        $m_query_string .= "SET company_name = '' ";
        return $m_query_string;
    }

    public static function delete_empty_orders()
    {
        $m_query_string = "DELETE FROM salesorders ";
        $m_query_string .= "WHERE company_name = '' ";
        $m_query_string .= "OR so_number = '' ";
        return $m_query_string;
    }
    /**========================= SALES ORDERS END ==============================     */






    /** ========================= ITEMS ==============================     */
    public static function get_items()
    {
        $m_query_string = "SELECT * ";
        $m_query_string .= "FROM items ";
        $m_query_string .= "ORDER BY item_name DESC ";
        return $m_query_string;
    }

    public static function get_items_by_id()
    {
        $m_query_string = "SELECT * ";
        $m_query_string .= "FROM items ";
        $m_query_string .= "WHERE ID = :local_item_id ";
        return $m_query_string;
    }
    /** ========================= ITEMS END ==============================     */






    /** ========================= ORDER ITEMS ==============================     */
    public static function get_item()
    {
        $m_query_string = "SELECT * ";
        $m_query_string .= "FROM order_items ";
        $m_query_string .= "WHERE order_id = :local_order_id ";
        return $m_query_string;
    }

    public static function add_item_to_order_items()
    {
        $m_query_string = "INSERT INTO order_items ";
        $m_query_string .= "SET order_id = :local_order_id, ";
        $m_query_string .= "item_id = :local_item_id, ";
        $m_query_string .= "quantity = :local_quantity ";
        return $m_query_string;
    }
    /** ========================= ORDER ITEMS END ==============================     */







    /** ========================= CUSTOMERS ==============================     */
    public static function get_customers()
    {
        $m_query_string = "SELECT * ";
        $m_query_string .= "FROM customers ";
        $m_query_string .= "ORDER BY first_name DESC ";
        return $m_query_string;
    }
    /** ========================= CUSTOMERS END ==============================     */

}
