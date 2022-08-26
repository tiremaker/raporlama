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
 * @param object $client
 * @return string
 */
function format_client($client)
{
    if ($client->client_surname != "") {
        return $client->client_name . " " . $client->client_surname;
    }

    return $client->client_name;
}

/**
 * @param string $gender
 * @return string
 */
function format_gender($gender)
{
    if ($gender == 0) {
        return trans('gender_male');
    }

    if ($gender == 1) {
        return trans('gender_female');
    }

    return trans('gender_other');
}