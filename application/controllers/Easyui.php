<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Easyui Controller
 *
 */
	 
class Easyui extends CI_Controller {

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
		$this->load->helper('menu');
		$this->load->view('easyui');
	}

	/**
	 * Json Method
	 * Data for table in json format
	 *
	 */
	 
	public function json()
	{
		$page = $this->input->post('page') ? (int) $this->input->post('page') : 1;
		$rows = $this->input->post('rows') ? (int) $this->input->post('rows') : 20;
		$sort = $this->input->post('sort') ? $this->input->post('sort') : 'id';
		$order = $this->input->post('order') ? $this->input->post('order') : 'asc';
		$offset = ($page-1)*$rows;
		
		$num_rows = $this->db->count_all_results('countries');
		
		$this->db->order_by( $sort, $order );
		$this->db->select('*');
		$this->db->limit($rows, $offset);
		$query = $this->db->get('countries');
		$this->db->flush_cache();
		
		$data = array();
		
		$num = 0;
		foreach( $query->result() as $row )
		{
			$num++;
			$t['num'] = $num + $offset;
			$data[] = $t + (array) $row;
		}
		
		$res['total'] = $num_rows;
		$res['rows'] = $data;
		
		echo json_encode( $res );
	}
}
