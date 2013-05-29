<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * CiRM
 *
 * @author        Aleksey Ksenzov aka KsenZ
 * @copyright            Copyright (c) 2013, Aleksey Ksenzov
 * @license        GNU General Public License version 2(GPLv2)
 */

// ------------------------------------------------------------------------

class Repairs_model extends Crud_model
{

	public $table = 'repairs';
	public $ctable = 'crepairs';

	public function add($data)
	{
		$this->db->insert($this->table, $data);
		return $this->db->insert_id();
	}

	public function get_list($limit, $offset, $sort_by, $sort_order)
	{
		$sort_order = ($sort_order == 'desc') ? 'desc' : 'asc';
		$sort_columns = array('id', 'date', 'name', 'phone', 'address', 'description', 'open', 'responsible');
		$sort_by = in_array($sort_by, $sort_columns) ? $sort_by : 'id';

		$this->db->order_by($sort_by, $sort_order)->limit($limit, $offset);
		$query = $this->db->get($this->table);
		return $query->result_array();
	}

	public function get_list_closed($limit, $offset, $sort_by, $sort_order)
	{
		$sort_order = ($sort_order == 'desc') ? 'desc' : 'asc';
		$sort_columns = array('id', 'date', 'name', 'phone', 'address', 'description', 'open', 'responsible');
		$sort_by = in_array($sort_by, $sort_columns) ? $sort_by : 'id';

		$this->db->order_by($sort_by, $sort_order)->limit($limit, $offset);
		$query = $this->db->get($this->ctable);
		return $query->result_array();
	}

	public function get_names($sort_by = 'id', $sort_order = 'asc')
	{
		$sort_order = ($sort_order == 'desc') ? 'desc' : 'asc';
		$sort_columns = array('id', 'name');
		$sort_by = in_array($sort_by, $sort_columns) ? $sort_by : 'id';

		$this->db->select('id, name');
		$this->db->order_by($sort_by, $sort_order);
		//->limit($limit, $offset);
		$query = $this->db->get($this->table);

		$data = array();

		foreach ($query->result_array() as $row) {
			$data[$row['id']] = $row['name'];
		}
		return $data;
	}

	public function get_count()
	{
		return $this->db->count_all($this->table);
	}

	public function get_count_closed()
	{
		return $this->db->count_all($this->ctable);
	}

	public function update($id, $data)
	{
		$this->db->where('id', $id);
		$this->db->update($this->table, $data);
	}

	public function close_ticket($id, $data)
	{
		$this->db->where('id', $id);
		$this->db->insert($this->ctable, $data);
		$this->delete($id);
	}

	public function delete($id)
	{
		if ($id != NULL) {
			$this->db->where('id', $id);
			$this->db->delete($this->table);
		}
	}

	public function get_by_id($id)
	{
		$this->db->where('id', $id);
		$query = $this->db->get($this->table);
		return $query->row_array();
	}

	public function get_by_id_closed($id)
	{
		$this->db->where('id', $id);
		$query = $this->db->get($this->ctable);
		return $query->row_array();
	}

	public $add_rules = array
	(
		array
		(
			'field' => 'client',
			'label' => 'Клиент',
			'rules' => 'trim|required|min_length[5]|max_length[50]'
		),

		array
		(
			'field' => 'phone',
			'label' => 'Контактный номер телефона клиента',
			'rules' => 'trim|required|min_length[5]|max_length[50]'
		),

		array
		(
			'field' => 'product',
			'label' => 'Изделие',
			'rules' => 'trim|required|min_length[4]|max_length[50]'
		),

		array
		(
			'field' => 'sn',
			'label' => 'Серийный номер',
			'rules' => 'trim|required|min_length[4]|max_length[50]'
		),

		array
		(
			'field' => 'description',
			'label' => 'Описание неисправности',
			'rules' => 'trim|required|min_length[10]|max_length[200]'
		),

	);

	public $update_rules = array
	(
		array
		(
			'field' => 'comment',
			'label' => '"Коментарий"',
			'rules' => 'trim|required|min_length[5]|max_length[200]'
		),
	);
}