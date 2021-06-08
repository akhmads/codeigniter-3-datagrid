<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	 
class Bootstrap4 extends CI_Controller {

	/**
	 * Constructor
	 *
	 */
	public function __construct()
	{
		parent::__construct();
		
		$this->load->database();
		$this->load->helper('url');
	}
	
	/**
	 * Index Method
	 *
	 */
	public function index()
	{
		$this->load->helper('url');
		$this->load->helper('menu');
		
		$start = $this->input->get('start') ? (int) $this->input->get('start') : 0;
		$rows = $this->input->get('rows') ? (int) $this->input->get('rows') : 10;
		if($start <= 0) $start = 0;
		
		$num_rows = $this->db->count_all_results('countries');
		$this->db->select('*');
		$this->db->limit($rows, $start);
		$query = $this->db->get('countries');
		$this->db->flush_cache();
		$out['countries'] = $query;
		
		$this->load->library('pagination');

		$config['base_url'] = site_url('bootstrap4/index');
		$config['page_query_string'] = TRUE;
		$config['query_string_segment'] = 'start';
		$config['total_rows'] = $num_rows;
		$config['per_page'] = $rows;
		$config['full_tag_open'] = '<ul class="pagination mt-3 justify-content-center">';
		$config['full_tag_close'] = '</ul>';
		$config['attributes'] = ['class' => 'page-link'];
		$config['prev_link'] = '&laquo';
		$config['prev_tag_open'] = '<li class="page-item">';
		$config['prev_tag_close'] = '</li>';
		$config['next_link'] = '&raquo';
		$config['next_tag_open'] = '<li class="page-item">';
		$config['next_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="page-item active"><a href="#" class="page-link">';
		$config['cur_tag_close'] = '<span class="sr-only">(current)</span></a></li>';
		$config['num_tag_open'] = '<li class="page-item">';
		$config['num_tag_close'] = '</li>';

		$this->pagination->initialize($config);
		$out['START'] = $start;
		$out['PAGING'] = $this->pagination->create_links();
		
		$this->load->view('bootstrap4', $out);
	}
}
