<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * CiRM
 *
 * @author        Aleksey Ksenzov aka KsenZ
 * @copyright            Copyright (c) 2013, Aleksey Ksenzov
 * @license        GNU General Public License version 2(GPLv2)
 */

// ------------------------------------------------------------------------

class Services_model extends Crud_model
{
	public $table = "services";

	public function add($data)
	{
		$this->db->insert($this->table, $data);
		return $this->db->insert_id();
	}

	public function get_list($sort_by, $sort_order)
	{
		$sort_order = ($sort_order == 'desc') ? 'desc' : 'asc';
		$sort_columns = array('id', 'description', 'cost');
		$sort_by = in_array($sort_by, $sort_columns) ? $sort_by : 'id';

		$this->db->order_by($sort_by, $sort_order);
		$query = $this->db->get($this->table);
		return $query->result_array();
	}

	public function get_count()
	{
		return $this->db->count_all($this->table);
	}

	public function get_by_id($id)
	{
		$this->db->where('id', $id);
		$query = $this->db->get($this->table);
		return $query->row_array();
	}

	public function update($id, $data)
	{
		$this->db->where('id', $id);
		$this->db->update($this->table, $data);
	}

	public $add_rules = array
	(
		array
		(
			'field' => 'description',
			'label' => '"Описание услуги"',
			'rules' => 'trim|required|min_length[4]|max_length[200]'
		),

		array
		(
			'field' => 'cost',
			'label' => '"Стоймость"',
			'rules' => 'trim|required|min_length[2]|max_length[5]'
		),

	);
}