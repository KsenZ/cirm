<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* CiRM
*
* @author        Aleksey Ksenzov aka KsenZ
* @copyright            Copyright (c) 2013, Aleksey Ksenzov
* @license        GNU General Public License version 2(GPLv2)
*/

// ------------------------------------------------------------------------

class repairs extends CI_Controller {

    public $data = array();

    public function __construct()
    {
        parent::__construct();
        $this->load->model('crud_model');
        $this->load->model('repairs_model');
    }

    public function display($sort_by='id', $sort_order='asc', $offset = 0)
    {

    }

    public function display_closed($sort_by='id', $sort_order='asc', $offset = 0)
    {

    }

    function edit()
    {

    }

    function view_closed()
    {

    }

    public function add()
    {

    }
}