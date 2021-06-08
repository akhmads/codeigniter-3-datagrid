<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Tabulator Controller
 *
 */
	 
class Tabulator extends CI_Controller {

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
		$this->load->view('tabulator');
	}

	/**
	 * Json Method
	 * Data for table in json format
	 *
	 */
	 
	public function json()
	{
		$page = intval($this->input->get('page'));
		$size = intval($this->input->get('size'));
		$sorters = $this->input->get('sorters');
		$filters = $this->input->get('filters');
		
		if( is_array( $filters ) AND count( $filters ) > 0 )
		{
			$this->db->start_cache();
			foreach( $filters as $filter )
			{
				if( $filter['type'] == 'like' )
				{
					$this->db->like( $filter['field'], $filter['value'], 'both' );
				}
			}
			$this->db->stop_cache();
		}
		
		$num_rows = $this->db->count_all_results('countries');

		if( $page < 1 ) $page = 1;
		if( empty($size) ) $size = 20;
		$offset = ($page-1)*$size;
		$last_page = ceil($num_rows/$size);
		
		if( is_array( $sorters ) AND count( $sorters ) > 0 )
		{
			foreach( $sorters as $sort )
			{
				$this->db->order_by( $sort['field'], $sort['dir'] );
			}
		}
		
		$this->db->select('*');
		$this->db->limit($size, $offset);
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
		
		$res['last_page'] = $last_page;
		$res['data'] = $data;
		
		echo json_encode( $res );
	}
}
