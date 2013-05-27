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

        if(!$this->ion_auth->logged_in())
        {
            redirect('auth/login');
        }
    }

    public function display($sort_by='id', $sort_order='asc', $offset = 0)
    {
        $limit = 10;
        $this->data['fields'] = array(
            'id' => '№',
            'date' => 'Дата приемки',
            'client' => 'Клиент',
            'phone' => 'Контактный телефон',
            'product' => 'Изделие',
            'description' => 'Неисправность',
            'target' => 'Сдано для',
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

    public function display_closed($sort_by='id', $sort_order='asc', $offset = 0)
    {

    }

    public function edit()
    {

    }

    public function view_closed()
    {

    }

    public function add()
    {
        $this->form_validation->set_rules($this->repairs_model->add_rules);

        if ($this->form_validation->run() == TRUE)
        {
            $current_user = $this->ion_auth->user()->row();
            $repair = array(
                'date' => $this->input->post('date'),
                'client' => $this->input->post('client'),
                'phone' => $this->input->post('phone'),
                'open' => "$current_user->first_name $current_user->last_name",
                'responsible' => $this->input->post('responsible'),
                'description' => $this->input->post('description'),
            );
            $this->perairs_model->add( $repair );
            redirect('repairs');
        }
        $this->data['form_action'] = 'repairs/add/';
        $this->layout->render('perairs/add', $this->data);
    }
}