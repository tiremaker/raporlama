<?php
if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

/*
 * Online Accounting Lite
 *
 * @author		Online Accounting Lite Developers & Contributors
 * @copyright	Copyright (c) 2012 - 2018 Online Accounting Lite.com
 * @license		https://invoiceplane.com/license.txt
 * @link		https://invoiceplane.com
 */

/**
 * Class User_Controller
 */
class User_Controller extends Base_Controller
{

    /**
     * User_Controller constructor.
     *
     * @param string  $required_key
     * @param integer $required_val
     */
    public function __construct($required_key, $required_val)
    {
        parent::__construct();

        if ($this->session->userdata($required_key) != $required_val) {
            redirect('sessions/login');
        }
    }
}
