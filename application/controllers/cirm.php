<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* CiRM
*
* @author		Aleksey Ksenzov aka KsenZ
* @copyright	        Copyright (c) 2013, Aleksey Ksenzov
* @license		GNU General Public License version 2(GPLv2)
*/

// ------------------------------------------------------------------------

class Cirm extends CI_Controller {

    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        if(!$this->ion_auth->logged_in())
        {
            redirect('auth/login');
        }

        $this->layout->render('cirm/index');
    }

    function logout()
    {
        if($this->ion_auth->logout())
        {
            redirect('auth/login');
        }
    }

    function del_user($id)
    {
        if(!$this->ion_auth->logged_in())
        {
            redirect('auth/login');
        }
        else
        {
            $this->ion_auth->delete_user($id);
            redirect('auth/index');
        }
    }
}