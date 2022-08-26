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
 * Class Welcome
 */
class Welcome extends CI_Controller
{
    public function index()
    {
        $this->load->helper('url');

        $this->load->view('welcome');
    }
}
