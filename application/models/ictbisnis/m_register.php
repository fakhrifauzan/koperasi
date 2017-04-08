<?php
	class m_register extends CI_Model{

		function __construct(){
		parent::__construct();
		$this->load->database();
	}

	function tambah_user($data){
		$this->db->insert('user',$data);
	}

	function lihat_user(){
		$lihat = $this->db->get('user');
		return $lihat->result();
	}

	function edit_user($data){
		$lihat = $this->db->get_where('user', array('username' => $data));
		return $lihat->result();
	}

	function update_data($data,$username){
		$this->db->where('username', $username);
		$this->db->update('user',$data);
	}

	function delete_data($username){
		$this->db->delete('user', array('username'=>$username));
	}

}

?>