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
 * Class Admin_Controller
 */
class Admin_Controller extends User_Controller
{

    /**
     * Admin_Controller constructor.
     */
    public function __construct()
    {
        parent::__construct('user_type', 1);
    }
}
