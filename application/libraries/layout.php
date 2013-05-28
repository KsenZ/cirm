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

class Layout
{

	private $CI;

	public function __construct()
	{
		$this->CI =& get_instance();
	}

	public function render($part, $data = array())
	{
		$data['part_name'] = $part;
		$this->CI->load->view('layout', $data);
	}

}