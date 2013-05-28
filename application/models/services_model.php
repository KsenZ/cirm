<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* CiRM
*
* @author        Aleksey Ksenzov aka KsenZ
* @copyright            Copyright (c) 2013, Aleksey Ksenzov
* @license        GNU General Public License version 2(GPLv2)
*/

// ------------------------------------------------------------------------

class Srvices_model extends Crud_model
{
	public $table = "services";

	public function add($data)
	{
		$this->db->insert($this->table, $data);
		return $this->db->insert_id();
	}
}