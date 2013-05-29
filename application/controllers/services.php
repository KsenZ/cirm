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
		parent::__construct();
		$this->load->model('crud_model');
		$this->load->model('services_model');

		if (!$this->ion_auth->logged_in()) {
			redirect('auth/login');
		}
	}

	public function display($sort_by = 'id', $sort_order = 'asc', $offset = 0)
	{
		$limit = 10;
		$this->data['fields'] = array(
			'id' => '№',
			'description' => 'Описание',
			'cost' => 'Стоймость',
		);
		$this->data['sort_by'] = $sort_by;
		$this->data['sort_order'] = $sort_order;
		$this->data['services_count'] = $this->services_model->get_count();
		$this->load->library('pagination');
		$config = array(
			'base_url' => site_url("services/display/$sort_by/$sort_order"),
			'total_rows' => $this->data['services_count'],
			'per_page' => $limit,
			'uri_segment' => 5,
			'full_tag_open' => '<div class="pagination"><ul>',
			'full_tag_close' => '</ul></div>',
			'first_link' => '<li>Первая</li>',
			'last_link' => '<li>Последняя</li>',
			'cur_tag_open' => '<li class="active"><a href="#">',
			'cur_tag_close' => '</a></li>',
			'num_tag_open' => '<li>',
			'num_tag_close' => '</li>',
			'next_link' => '&gt;',
			'next_tag_open' => '<li>',
			'next_tag_close' => '</li>',
			'prev_link' => '&lt;',
			'prev_tag_open' => '<li>',
			'prev_tag_close' => '</li>'
		);
		$this->pagination->initialize($config);

		$this->data['pagination'] = $this->pagination->create_links();
		$this->data['services'] = $this->services_model->get_list($limit, $offset, $sort_by, $sort_order);

		$this->layout->render('services/list', $this->data);
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
			redirect('services');
		}
		$this->data['form_action'] = 'services/add/';
		$this->layout->render('services/add', $this->data);
	}

	public function edit()
	{
		$id = $this->uri->segment(3, 0);
		$id = (int)$id;

		$this->form_validation->set_rules($this->services_model->add_rules);

		if ($this->form_validation->run() == TRUE) {


			$service = array(
				'description' => $this->input->post('description'),
				'cost' => $this->input->post('cost'),
			);
			$this->services_model->update($this->input->post('id'), $service);
			redirect('services');

		}

		$this->data['service'] = $this->services_model->get_by_id($id);

		if ($this->data['service'] == null) {
			$this->data['msg'] = 'Ничего не найденно.';
			$this->layout->render('error', $this->data);
		} else {
			$this->data['form_action'] = 'services/edit/' . $id;
			$this->layout->render('services/edit', $this->data);
		}
	}
}