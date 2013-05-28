<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * CiRM
 *
 * @author        Aleksey Ksenzov aka KsenZ
 * @copyright            Copyright (c) 2013, Aleksey Ksenzov
 * @license        GNU General Public License version 2(GPLv2)
 * @link        https://gitorious.org/cirm/cirm
 */
// ------------------------------------------------------------------------

class Crud_model extends CI_Model
{

	public $table = '';

	public function insert($data)
	{
		$this->db->insert($this->table, $data);
		return $this->db->insert_id();
	}

	public function select($sort = 'id', $order = 'asc')
	{
		$this->db->order_by($sort, $order);
		$query = $this->db->get($this->table);
		return $query->result_array();
	}

	public function update($id, $data)
	{
		$this->db->where('id', $id);
		$this->db->update($this->table, $data);
	}

	public function delete($id)
	{
		if ($id != NULL) {
			$this->db->where('id', $id);
			$this->db->delete($this->table);
		}
	}
}