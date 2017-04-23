<?php
	class m_stock extends CI_Model{
		function __construct(){
		parent::__construct();
		$this->load->database();
	}

	function view_stock(){
		$view = $this->db->get('tbstock');
		return $view->result();
	}
	
	function delete_stock($idBarang){
		$this->db->delete('tbstock', array('idBarang' => $idBarang));
	}

	function add_stock($data){
		$this->db->insert('tbstock',$data);
	}
	
	function edit_stock($table,$where){
		return $this->db->get_where($table,$where);
	}

	function update_stock($idBarang,$data){
		$this->db->where('idBarang', $idBarang);
		$this->db->update('tbstock',$data);
	}

	/*
	
	

	
	*/
}