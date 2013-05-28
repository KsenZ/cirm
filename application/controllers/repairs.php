<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * CiRM
 *
 * @author        Aleksey Ksenzov aka KsenZ
 * @copyright            Copyright (c) 2013, Aleksey Ksenzov
 * @license        GNU General Public License version 2(GPLv2)
 */

// ------------------------------------------------------------------------

class Repairs extends CI_Controller
{

	public $data = array();

	public function __construct()
	{
		parent::__construct();
		$this->load->model('crud_model');
		$this->load->model('repairs_model');

		if (!$this->ion_auth->logged_in()) {
			redirect('auth/login');
		}
	}

	public function display($sort_by = 'id', $sort_order = 'asc', $offset = 0)
	{
		$limit = 10;
		$this->data['fields'] = array(
			'id' => '№',
			'date' => 'Дата приемки',
			'client' => 'Клиент',
			'phone' => 'Контактный телефон',
			'product' => 'Изделие',
			'description' => 'Неисправность',
			'responsible' => 'Ответственный'
		);
		$this->data['sort_by'] = $sort_by;
		$this->data['sort_order'] = $sort_order;
		$this->data['repairs_count'] = $this->repairs_model->get_count();
		$this->load->library('pagination');
		$config = array(
			'base_url' => site_url("repairs/display/$sort_by/$sort_order"),
			'total_rows' => $this->data['repairs_count'],
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
		$this->data['repairs'] = $this->repairs_model->get_list($limit, $offset, $sort_by, $sort_order);

		$this->layout->render('repairs/list', $this->data);
	}

	public function display_closed($sort_by = 'id', $sort_order = 'asc', $offset = 0)
	{
		$limit = 10;
		$this->data['fields'] = array(
			'id' => '№',
			'date' => 'Дата приемки',
			'cdate' => 'Дата выдачи',
			'client' => 'Клиент',
			'phone' => 'Контактный телефон',
			'product' => 'Изделие',
			'description' => 'Неисправность',
			'close' => 'Выполнил'
		);
		$this->data['sort_by'] = $sort_by;
		$this->data['sort_order'] = $sort_order;
		$this->data['crepairs_count'] = $this->repairs_model->get_count_closed();
		$this->load->library('pagination');
		$config = array(
			'base_url' => site_url("repairs/display_closed/$sort_by/$sort_order"),
			'total_rows' => $this->data['crepairs_count'],
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
		$this->data['repairs'] = $this->repairs_model->get_list_closed($limit, $offset, $sort_by, $sort_order);

		$this->layout->render('repairs/list_closed', $this->data);
	}

	public function edit()
	{
		$id = $this->uri->segment(3, 0);
		$id = (int)$id;

		$this->form_validation->set_rules($this->repairs_model->update_rules);

		if ($this->form_validation->run() == TRUE) {
			if ($this->input->post('close_checkbox')) {
				$current_user = $this->ion_auth->user()->row();
				$data = array(
					'id' => $this->input->post('id'),
					'open' => $this->input->post('open'),
					'responsible' => $this->input->post('responsible'),
					'date' => $this->input->post('date'),
					'cdate' => $this->input->post('cdate'),
					'client' => $this->input->post('client'),
					'phone' => $this->input->post('phone'),
					'product' => $this->input->post('product'),
					'sn' => $this->input->post('sn'),
					'box' => $this->input->post('box'),
					'wire' => $this->input->post('wire'),
					'sh' => $this->input->post('sh'),
					'attrition' => $this->input->post('attrition'),
					'scratch' => $this->input->post('scratch'),
					'new' => $this->input->post('new'),
					'diag' => $this->input->post('diag'),
					'repair' => $this->input->post('repair'),
					'description' => $this->input->post('description'),
					'comment' => $this->input->post('comment'),
					'cost' => $this->input->post('cost'),
					'close' => "$current_user->first_name $current_user->last_name",
				);
				$this->repairs_model->close_ticket($this->input->post('id'), $data);
				redirect('repairs');
			} else {
				$repair = array(
					'cost' => $this->input->post('cost'),
					'comment' => $this->input->post('comment'),
				);
				$this->repairs_model->update($this->input->post('id'), $repair);
				redirect('repairs');
			}
		}

		$this->data['repairs'] = $this->repairs_model->get_by_id($id);

		if ($this->data['repairs'] == null) {
			$this->data['msg'] = 'Ничего не найденно.';
			$this->layout->render('error', $this->data);
		} else {
			$this->data['form_action'] = 'repairs/edit/' . $id;
			$this->layout->render('repairs/edit', $this->data);
		}
	}

	public function view_closed()
	{
		$id = $this->uri->segment(3, 0);
		$id = (int)$id;

		$this->data['repairs'] = $this->repairs_model->get_by_id_closed($id);

		if ($this->data['repairs'] == null) {
			$this->data['msg'] = 'Ничего не найденно.';
			$this->layout->render('error', $this->data);
		} else {
			$this->data['form_action'] = 'repairs/view_closed/' . $id;
			$this->layout->render('repairs/view_closed', $this->data);
		}
	}

	public function add()
	{
		$this->form_validation->set_rules($this->repairs_model->add_rules);

		if ($this->form_validation->run() == TRUE) {
			$current_user = $this->ion_auth->user()->row();
			$repair = array(
				'date' => $this->input->post('date'),
				'client' => $this->input->post('client'),
				'phone' => $this->input->post('phone'),
				'product' => $this->input->post('product'),
				'sn' => $this->input->post('sn'),
				'box' => $this->input->post('box'),
				'wire' => $this->input->post('wire'),
				'sh' => $this->input->post('sh'),
				'attrition' => $this->input->post('attrition'),
				'scratch' => $this->input->post('scratch'),
				'new' => $this->input->post('new'),
				'diag' => $this->input->post('diag'),
				'repair' => $this->input->post('repair'),
				'open' => "$current_user->first_name $current_user->last_name",
				'responsible' => $this->input->post('responsible'),
				'description' => $this->input->post('description'),
			);
			$this->repairs_model->add($repair);
			redirect('repairs');
		}
		$this->data['form_action'] = 'repairs/add/';
		$this->layout->render('repairs/add', $this->data);
	}
}