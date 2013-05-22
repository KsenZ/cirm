<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* CiRM
*
* @author		Aleksey Ksenzov aka KsenZ
* @copyright	        Copyright (c) 2013, Aleksey Ksenzov
* @license		GNU General Public License version 2(GPLv2)
* @link		https://gitorious.org/cirm/cirm
*/

// ------------------------------------------------------------------------

class Page extends CI_Controller {

    public $data = array();

    public function __construct()
    {
        parent::__construct();
        $this->load->model('crud_model');
    }

    public function index()
    {
        $this->data['tickets'] = $this->tickets_model->get_list();
        $this->layout->render('tickets/list', $this->data);
    }

    public function help()
    {
        $this->layout->render('page/help');
    }

    public function settings()
    {
        $this->layout->render('page/settings');
    }	
}