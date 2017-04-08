<?php
	class m_order extends CI_Model{
		function __construct(){
		parent::__construct();
		$this->load->database();
	}

	function add_order($data){
		$this->db->insert('tborder',$data);
	}
	
	function view_order(){
		$view = $this->db->get('tborder');
		return $view->result();
	}

	function delete_order($idOrder){
		$this->db->delete('tborder', array('idOrder'=> $idOrder));
	}

	function edit_order($table,$where){
		return $this->db->get_where($table,$where);
	}

	function update_order($idOrder,$data){
		$this->db->where('idOrder', $idOrder);
		$this->db->update('tborder',$data);
	}

}

?>