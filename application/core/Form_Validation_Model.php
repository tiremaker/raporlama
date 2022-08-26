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
 * Class Form_Validation_Model
 */
class Form_Validation_Model extends MY_Model
{

    /**
     * Form_Validation_Model constructor.
     */
    public function __construct()
    {
        parent::__construct();

        $this->load->library('form_validation');
        $this->form_validation->CI =& $this;
    }
}
