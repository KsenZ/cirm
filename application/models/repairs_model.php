<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* CiRM
*
* @author        Aleksey Ksenzov aka KsenZ
* @copyright            Copyright (c) 2013, Aleksey Ksenzov
* @license        GNU General Public License version 2(GPLv2)
*/

// ------------------------------------------------------------------------

class Repairs_model extends Crud_model {

    public $table = 'repairs';
    public $ctable = 'crepairs';

    public function add($data)
    {
        $this->db->insert($this->table, $data);
        return $this->db->insert_id();
    }
}