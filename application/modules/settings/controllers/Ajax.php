<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

/*
 * Online Accounting Lite
 *
 * @author		Online Accounting Lite Developers & Contributors
 * @copyright	Copyright (c) 2012 - 2018 Online Accounting Lite.com
 * @license		https://invoiceplane.com/license.txt
 * @link		https://invoiceplane.com
 */

/**
 * Class Ajax
 */
class Ajax extends Admin_Controller
{
    public $ajax_controller = true;

    /**
     *
     */
    public function get_cron_key()
    {
        $this->load->helper('string');
        echo random_string('alnum', 16);
    }

}
