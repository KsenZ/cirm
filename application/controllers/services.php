<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * CiRM
 *
 * @author        Aleksey Ksenzov aka KsenZ
 * @copyright            Copyright (c) 2013, Aleksey Ksenzov
 * @license        GNU General Public License version 2(GPLv2)
 */

// ------------------------------------------------------------------------

class Services extends CI_Controller
{

	public function __construct()
	{
		$this->load->model('crud_model');
		$this->load->model('services_model');

		if (!$this->ion_auth->logged_in()) {
			redirect('auth/login');
		}
	}

	public function add()
	{
		$this->form_validation->set_rules($this->services_model->add_rules);

		if ($this->form_validation->run() == TRUE) {
			$service = array(
				'description' => $this->input->post('description'),
				'cost' => $this->input->post('cost'),
			);
			$this->services_model->add($service);
			redirect('services/index');
		}
		$this->data['form_action'] = 'services/add/';
		$this->layout->render('services/add', $this->data);
	}
}