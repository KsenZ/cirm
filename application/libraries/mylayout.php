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

class Mylayout
{

	private $CI;

	public function __construct()
	{
		$this->CI =& get_instance();
	}

	public $header = 'header';
	public $footer = 'footer';

	public function content($views = '', $data = '')
	{
		if ($this->header) {
			$this->load->view($this->header, $data);
			$data = '';
		}

		if (is_array($views)) {
			foreach ($views as $view) {
				$this->load->view($view, $data);
				$data = '';
			}
		} else {
			$this->load->view($views, $data);
		}

		if ($this->footer) {
			$this->load->view($this->footer);
		}
	}
}
