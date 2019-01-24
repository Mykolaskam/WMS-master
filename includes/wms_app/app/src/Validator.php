<?php

/**
 * Class Validator
 */
class Validator
{
    /**
     * Validator constructor.
     */
    public function __construct()
    {
    }

    public function __destruct() { }

/**
 * checks the string for data and santises it
 * @param  $p_string_to_sanitise
 * @return $m_sanitised_string
 */
    public function sanitise_string($p_string_to_sanitise)
    {
        $m_sanitised_string = false;

        if (!empty($p_string_to_sanitise)) {
            $m_sanitised_string = filter_var($p_string_to_sanitise, FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
        }

        $m_sanitised_string = strip_tags($m_sanitised_string);
        return $m_sanitised_string;
    }
/**
 * checking whether the string length fits the parameters
 * @param $p_username_password_to_validate
 * @return $valid
 */
    public function validate_username_password($p_username_password_to_validate)
    {
        $valid = false;

        if (strlen($p_username_password_to_validate) < 3 || strlen($p_username_password_to_validate) > 30) {
            $valid = false;
        } else {
            $valid = true;
        }

        return $valid;
    }
/**
 * checks to see whether the entered string in an integer
 * @param  $p_value_to_check
 * @return $m_checked_value
 */
    public function validate_integer($p_value_to_check)
    {
        $m_checked_value = false;
        $options = array(
            'options' => array(
                'default' => -1, // value to return if the filter fails
                'min_range' => 0
            )
        );

        if (isset($p_value_to_check)) {
            $m_checked_value = filter_var($p_value_to_check, FILTER_VALIDATE_INT, $options);
        }

        return $m_checked_value;
    }


}
