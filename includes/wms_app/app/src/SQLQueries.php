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

    public static function get_sales_order_by_id()
    {
        $m_query_string = "SELECT * ";
        $m_query_string .= "FROM salesorders ";
        $m_query_string .= "WHERE ID = :local_id";
        return $m_query_string;
    }

    public static function create_sales_order_id()
    {
        $m_query_string = "INSERT INTO salesorders ";
        $m_query_string .= "SET customer_id = '' ";
        return $m_query_string;
    }

    public static function delete_empty_orders()
    {
        $m_query_string = "DELETE FROM salesorders ";
        $m_query_string .= "WHERE so_number = '' ";
        return $m_query_string;
    }

    public static function delete_sales_order()
    {
        $m_query_string = "DELETE FROM salesorders ";
        $m_query_string .= "WHERE ID = :local_id ";
        return $m_query_string;
    }

    public static function create_sales_order()
    {
        $m_query_string = "UPDATE salesorders ";
        $m_query_string .= "SET customer_id = :local_customer_id, ";
        $m_query_string .= "customer_name = :local_customer_name, ";
        $m_query_string .= "so_number = :local_so_number, ";
        $m_query_string .= "so_date = :local_so_date, ";

        $m_query_string .= "packed = :local_so_packed, ";
        $m_query_string .= "shipped = :local_so_shipped, ";
        $m_query_string .= "invoiced = :local_so_invoiced, ";

        $m_query_string .= "amount = :local_amount ";
        $m_query_string .= "WHERE ID = :local_ID ";
        return $m_query_string;
    }

    public static function get_all_on_sales_order()
    {
        $m_query_string = "SELECT * FROM salesorders ";
        $m_query_string .= "INNER JOIN order_items ";
        $m_query_string .= "ON salesorders.ID = order_items.order_id ";
        $m_query_string .= "INNER JOIN items ";
        $m_query_string .= "ON items.ID = order_items.item_id ";
        $m_query_string .= "INNER JOIN customers ";
        $m_query_string .= "ON customers.ID = salesorders.customer_id ";
        return $m_query_string;
    }

    /**========================= SALES ORDERS END ==============================     */


    /** ========================= PURCHASE ORDERS ==============================     */
    public static function get_purchase_orders()
    {
        $m_query_string = "SELECT * ";
        $m_query_string .= "FROM purchaseorders ";
        $m_query_string .= "ORDER BY po_date DESC ";
        return $m_query_string;
    }

    public static function get_purchase_order_by_id()
    {
        $m_query_string = "SELECT * ";
        $m_query_string .= "FROM purchaseorders ";
        $m_query_string .= "WHERE ID = :local_id";
        return $m_query_string;
    }

    public static function create_purchase_order_id()
    {
        $m_query_string = "INSERT INTO purchaseorders ";
        $m_query_string .= "SET vendor_id = '' ";
        return $m_query_string;
    }

    public static function delete_empty_purchase_orders()
    {
        $m_query_string = "DELETE FROM purchaseorders ";
        $m_query_string .= "WHERE po_number = '' ";
        return $m_query_string;
    }

    public static function delete_purchase_order()
    {
        $m_query_string = "DELETE FROM purchaseorders ";
        $m_query_string .= "WHERE ID = :local_id ";
        return $m_query_string;
    }

    public static function create_purchase_order()
    {
        $m_query_string = "UPDATE purchaseorders ";
        $m_query_string .= "SET vendor_id = :local_vendor_id, ";
        $m_query_string .= "vendor_name = :local_vendor_name, ";
        $m_query_string .= "po_number = :local_po_number, ";
        $m_query_string .= "po_date = :local_po_date, ";

        $m_query_string .= "received = :local_po_received, ";
        $m_query_string .= "billed = :local_po_billed, ";

        $m_query_string .= "amount = :local_amount ";
        $m_query_string .= "WHERE ID = :local_ID ";
        return $m_query_string;
    }

    public static function get_all_on_purchase_order()
    {
        $m_query_string = "SELECT * FROM purchaseorders ";
        $m_query_string .= "INNER JOIN purchase_order_items ";
        $m_query_string .= "ON purchaseorders.ID = purchase_order_items.order_id ";
        $m_query_string .= "INNER JOIN items ";
        $m_query_string .= "ON items.ID = purchase_order_items.item_id ";
        $m_query_string .= "INNER JOIN vendors ";
        $m_query_string .= "ON vendors.ID = purchaseorders.vendor_id ";
        return $m_query_string;
    }

    /**========================= PURCHASE ORDERS END ==============================     */


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

    public static function delete_item()
    {
        $m_query_string = "DELETE ";
        $m_query_string .= "FROM items ";
        $m_query_string .= "WHERE ID = :local_id ";
        return $m_query_string;
    }


    public static function get_purchase_items_with_quantity()
    {
        $m_query_string = "SELECT items.*, purchase_order_items.quantity ";
        $m_query_string .= "FROM items ";
        $m_query_string .= "INNER JOIN purchase_order_items ";
        $m_query_string .= "ON items.ID = purchase_order_items.item_id ";
        $m_query_string .= "WHERE items.ID = :local_item_id ";
        $m_query_string .= "AND purchase_order_items.order_id = :local_order_id ";
        return $m_query_string;
    }

    public static function get_items_with_quantity()
    {
        $m_query_string = "SELECT items.*, order_items.quantity ";
        $m_query_string .= "FROM items ";
        $m_query_string .= "INNER JOIN order_items ";
        $m_query_string .= "ON items.ID = order_items.item_id ";
        $m_query_string .= "WHERE items.ID = :local_item_id ";
        $m_query_string .= "AND order_items.order_id = :local_order_id ";
        return $m_query_string;
    }

    public static function create_new_item()
    {
        $m_query_string = "INSERT INTO items ";
        $m_query_string .= "SET item_name = :local_item_name, ";
        $m_query_string .= "sku = :local_sku, ";
        $m_query_string .= "manufacturer = :local_manufacturer, ";
        $m_query_string .= "selling_price = :local_selling_price, ";
        $m_query_string .= "part_number = :local_part_number, ";
        $m_query_string .= "serial_number = :local_serial_number, ";
        $m_query_string .= "purchase_price = :local_purchase_price, ";
        $m_query_string .= "barcode_code = :local_barcode_code, ";
        $m_query_string .= "description = :local_description, ";
        $m_query_string .= "warehouse_location = :local_warehouse_location, ";
        $m_query_string .= "stock = :local_stock ";
        return $m_query_string;
    }

    public static function update_item()
    {
        $m_query_string = "UPDATE items ";
        $m_query_string .= "SET item_name = :local_item_name, ";
        $m_query_string .= "sku = :local_sku, ";
        $m_query_string .= "manufacturer = :local_manufacturer, ";
        $m_query_string .= "selling_price = :local_selling_price, ";
        $m_query_string .= "part_number = :local_part_number, ";
        $m_query_string .= "serial_number = :local_serial_number, ";
        $m_query_string .= "purchase_price = :local_purchase_price, ";
        $m_query_string .= "barcode_code = :local_barcode_code, ";
        $m_query_string .= "description = :local_description, ";
        $m_query_string .= "warehouse_location = :local_warehouse_location, ";
        $m_query_string .= "stock = :local_stock ";
        $m_query_string .= "WHERE ID = :local_id ";
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


    public static function delete_order_item()
    {
        $m_query_string = "DELETE ";
        $m_query_string .= "FROM order_items ";
        $m_query_string .= "WHERE order_id = :local_order_id ";
        $m_query_string .= "AND item_id = :local_item_id ";
        return $m_query_string;
    }

    public static function order_item_added()
    {
        $m_query_string = "SELECT ID ";
        $m_query_string .= "FROM order_items ";
        $m_query_string .= "WHERE order_id = :local_order_id ";
        $m_query_string .= "AND item_id = :local_item_id ";
        return $m_query_string;
    }

    public static function update_order_item()
    {
        $m_query_string = "UPDATE order_items ";
        $m_query_string .= "SET quantity = quantity + :local_quantity ";
        $m_query_string .= "WHERE order_id = :local_order_id ";
        $m_query_string .= "AND item_id = :local_item_id ";
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

    public static function minus_quantity_item()
    {
        $m_query_string = "UPDATE items ";
        $m_query_string .= "SET stock = stock - :local_quantity ";
        $m_query_string .= "WHERE ID = :local_item_id ";
        return $m_query_string;
    }

    public static function plus_quantity_item()
    {
        $m_query_string = "UPDATE items ";
        $m_query_string .= "SET stock = stock + :local_quantity ";
        $m_query_string .= "WHERE ID = :local_item_id ";
        return $m_query_string;
    }
    /** ========================= ORDER ITEMS END ==============================     */


    /** ========================= PURCHASE ORDER ITEMS ==============================     */
    public static function get_purchase_item()
    {
        $m_query_string = "SELECT * ";
        $m_query_string .= "FROM purchase_order_items ";
        $m_query_string .= "WHERE order_id = :local_order_id ";
        return $m_query_string;
    }

    public static function delete_purchase_order_item()
    {
        $m_query_string = "DELETE ";
        $m_query_string .= "FROM purchase_order_items ";
        $m_query_string .= "WHERE order_id = :local_order_id ";
        $m_query_string .= "AND item_id = :local_item_id ";
        return $m_query_string;
    }

    public static function purchase_order_item_added()
    {
        $m_query_string = "SELECT ID ";
        $m_query_string .= "FROM purchase_order_items ";
        $m_query_string .= "WHERE order_id = :local_order_id ";
        $m_query_string .= "AND item_id = :local_item_id ";
        return $m_query_string;
    }

    public static function update_purchase_order_item()
    {
        $m_query_string = "UPDATE purchase_order_items ";
        $m_query_string .= "SET quantity = quantity + :local_quantity ";
        $m_query_string .= "WHERE order_id = :local_order_id ";
        $m_query_string .= "AND item_id = :local_item_id ";
        return $m_query_string;
    }

    public static function add_item_to_purchase_order_items()
    {
        $m_query_string = "INSERT INTO purchase_order_items ";
        $m_query_string .= "SET order_id = :local_order_id, ";
        $m_query_string .= "item_id = :local_item_id, ";
        $m_query_string .= "quantity = :local_quantity ";
        return $m_query_string;
    }

//    public static function minus_quantity_item()
//    {
//        $m_query_string = "UPDATE items ";
//        $m_query_string .= "SET stock = stock - :local_quantity ";
//        $m_query_string .= "WHERE ID = :local_item_id ";
//        return $m_query_string;
//    }
//
//    public static function plus_quantity_item()
//    {
//        $m_query_string = "UPDATE items ";
//        $m_query_string .= "SET stock = stock + :local_quantity ";
//        $m_query_string .= "WHERE ID = :local_item_id ";
//        return $m_query_string;
//    }
    /** ========================= PURCHASE ORDER ITEMS END ==============================     */


    /** ========================= CUSTOMERS ==============================     */
    public static function get_customer_by_id()
    {
        $m_query_string = "SELECT * ";
        $m_query_string .= "FROM customers ";
        $m_query_string .= "WHERE ID = :local_id ";
        return $m_query_string;
    }


    public static function get_customers()
    {
        $m_query_string = "SELECT * ";
        $m_query_string .= "FROM customers ";
        $m_query_string .= "ORDER BY first_name DESC ";
        return $m_query_string;
    }

    public static function delete_customer()
    {
        $m_query_string = "DELETE ";
        $m_query_string .= "FROM customers ";
        $m_query_string .= "WHERE ID = :local_id ";
        return $m_query_string;
    }

    public static function create_new_customer()
    {
        $m_query_string = "INSERT INTO customers ";
        $m_query_string .= "SET salutation = :local_salutation, ";
        $m_query_string .= "first_name = :local_first_name, ";
        $m_query_string .= "last_name = :local_last_name, ";
        $m_query_string .= "company_name = :local_company_name, ";
        $m_query_string .= "email = :local_email, ";
        $m_query_string .= "alt_email = :local_alt_email, ";
        $m_query_string .= "phone_number = :local_phone_number, ";
        $m_query_string .= "alt_phone_number = :local_alt_phone_number, ";
        $m_query_string .= "website = :local_website, ";
        $m_query_string .= "billing_address = :local_billing_address, ";
        $m_query_string .= "pref_currency = :local_pref_currency, ";
        $m_query_string .= "notes = :local_notes ";
        return $m_query_string;
    }

    public static function update_customer()
    {
        $m_query_string = "UPDATE customers ";
        $m_query_string .= "SET salutation = :local_salutation, ";
        $m_query_string .= "first_name = :local_first_name, ";
        $m_query_string .= "last_name = :local_last_name, ";
        $m_query_string .= "company_name = :local_company_name, ";
        $m_query_string .= "email = :local_email, ";
        $m_query_string .= "alt_email = :local_alt_email, ";
        $m_query_string .= "phone_number = :local_phone_number, ";
        $m_query_string .= "alt_phone_number = :local_alt_phone_number, ";
        $m_query_string .= "website = :local_website, ";
        $m_query_string .= "billing_address = :local_billing_address, ";
        $m_query_string .= "pref_currency = :local_pref_currency, ";
        $m_query_string .= "notes = :local_notes ";
        $m_query_string .= "WHERE ID = :local_id ";
        return $m_query_string;
    }
    /** ========================= CUSTOMERS END ==============================     */


    /** ========================= VENDORS ==============================     */
    public static function get_vendors()
    {
        $m_query_string = "SELECT * ";
        $m_query_string .= "FROM vendors ";
        $m_query_string .= "ORDER BY first_name DESC ";
        return $m_query_string;
    }

    public static function get_vendor_by_id()
    {
        $m_query_string = "SELECT * ";
        $m_query_string .= "FROM vendors ";
        $m_query_string .= "WHERE ID = :local_id ";
        return $m_query_string;
    }

    public static function delete_vendor()
    {
        $m_query_string = "DELETE ";
        $m_query_string .= "FROM vendors ";
        $m_query_string .= "WHERE ID = :local_id ";
        return $m_query_string;
    }

    public static function create_new_vendor()
    {
        $m_query_string = "INSERT INTO vendors ";
        $m_query_string .= "SET salutation = :local_salutation, ";
        $m_query_string .= "first_name = :local_first_name, ";
        $m_query_string .= "last_name = :local_last_name, ";
        $m_query_string .= "company_name = :local_company_name, ";
        $m_query_string .= "email = :local_email, ";
        $m_query_string .= "alt_email = :local_alt_email, ";
        $m_query_string .= "phone_number = :local_phone_number, ";
        $m_query_string .= "alt_phone_number = :local_alt_phone_number, ";
        $m_query_string .= "website = :local_website, ";
        $m_query_string .= "billing_address = :local_billing_address, ";
        $m_query_string .= "pref_currency = :local_pref_currency, ";
        $m_query_string .= "notes = :local_notes ";
        return $m_query_string;
    }

    public static function update_vendor()
    {
        $m_query_string = "UPDATE vendors ";
        $m_query_string .= "SET salutation = :local_salutation, ";
        $m_query_string .= "first_name = :local_first_name, ";
        $m_query_string .= "last_name = :local_last_name, ";
        $m_query_string .= "company_name = :local_company_name, ";
        $m_query_string .= "email = :local_email, ";
        $m_query_string .= "alt_email = :local_alt_email, ";
        $m_query_string .= "phone_number = :local_phone_number, ";
        $m_query_string .= "alt_phone_number = :local_alt_phone_number, ";
        $m_query_string .= "website = :local_website, ";
        $m_query_string .= "billing_address = :local_billing_address, ";
        $m_query_string .= "pref_currency = :local_pref_currency, ";
        $m_query_string .= "notes = :local_notes ";
        $m_query_string .= "WHERE ID = :local_id ";
        return $m_query_string;
    }
    /** ========================= CUSTOMERS END ==============================     */


    /** ========================= DASHBOARD ==============================     */

    public static function get_sales_orders_to_be_packed()
    {
        $m_query_string = "SELECT * ";
        $m_query_string .= "FROM salesorders ";
        $m_query_string .= "WHERE packed = :local_packed";
        return $m_query_string;
    }

    public static function get_sales_orders_to_be_invoiced()
    {
        $m_query_string = "SELECT * ";
        $m_query_string .= "FROM salesorders ";
        $m_query_string .= "WHERE invoiced = :local_invoiced";
        return $m_query_string;
    }

    public static function get_sales_orders_to_be_shipped()
    {
        $m_query_string = "SELECT * ";
        $m_query_string .= "FROM salesorders ";
        $m_query_string .= "WHERE packed = :local_packed ";
        $m_query_string .= "AND shipped = :local_shipped";
        return $m_query_string;
    }

    public static function count_to_be_packed()
    {
        $m_query_string = "SELECT COUNT(*) ";
        $m_query_string .= "FROM salesorders ";
        $m_query_string .= "WHERE packed = :local_packed";
        return $m_query_string;
    }

    public static function count_to_be_invoiced()
    {
        $m_query_string = "SELECT COUNT(*) ";
        $m_query_string .= "FROM salesorders ";
        $m_query_string .= "WHERE invoiced = :local_invoiced";
        return $m_query_string;
    }

    public static function count_to_be_shipped()
    {
        $m_query_string = "SELECT COUNT(*) ";
        $m_query_string .= "FROM salesorders ";
        $m_query_string .= "WHERE packed = :local_packed ";
        $m_query_string .= "AND shipped = :local_shipped";
        return $m_query_string;
    }

    /** ========================= DASHBOARD END ==============================     */


}
