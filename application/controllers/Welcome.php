<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Welcome Controller
 *
 */
	 
class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->helper('url');
		
		redirect('tabulator');
	}
}
