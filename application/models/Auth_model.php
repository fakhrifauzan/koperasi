<?php
	class Auth_model extends CI_Model{

		function __construct(){
			parent::__construct();
			$this->load->database();
		}

		// function cek_user($username, $password) {
		// 	$query = $this->db->get_where('tbl_user', array('username' => $username,  'password' => $password));
		// 	if ($quey->num_rows() > 0) {
		// 		$user = $query->row();
		// 		$query->free_result();
		// 	} else {
		// 		$user = NULL;
		// 	}
		// 	return $user;
		// }

		function cek_auth($table, $where){
			$query = $this->db->get_where($table,$where);
			if ($query->num_rows() > 0) {
				$auth = $query->row();
				$query->free_result();
			} else {
				$auth = NULL;
			}
			return $auth;
		}

		// function cek_auth($username, $password) {
		// 	$this->db->select('u.*, a.id_anggota, a.nama_anggota');
		// 	$this->db->from('tbl_anggota as a');
		// 	$this->db->join('tbl_user as u','u.id_user = a.id_user');
		// 	$this->db->where('u.username', $username);
		// 	$this->db->where('u.password', $password);
		// 	$query = $this->db->get();
		// 	if ($query->num_rows() > 0) {
		// 		$data = $query->row();
		// 		$query->free_result();
		// 	} else {
		// 		$data = NULL;
		// 	}
		// 	return $data;
		// }
}

?>
