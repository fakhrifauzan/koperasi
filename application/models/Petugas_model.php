<?php
	class Petugas_model extends CI_Model{
		function __construct(){
		parent::__construct();
		$this->load->database();
	}

	function view_petugas()	{
		$this->db->select('*');
		$this->db->from('tbl_petugas');
		$this->db->join('tbl_user', 'tbl_petugas.id_user = tbl_user.id_user');
		$data = $this->db->get();
		return $data->result();
	}

	function cek_username($username) {
		$this->db->select('username');
		$this->db->from('tbl_user');
		$this->db->where('username',$username);
		$query = $this->db->get();
		$result = $query->result_array();
		return $result;
	}

	function add_petugas($table,$data) {
		$this->db->insert($table,$data);
		return $this->db->insert_id();
	}
	

	function edit_petugas($id_petugas) {
		$this->db->select('*');
		$this->db->from('tbl_petugas as p');
		$this->db->join('tbl_user as u','u.id_user = p.id_user');
		$this->db->where('p.id_petugas',$id_petugas);
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			$data = $query->row();
			$query->free_result();
		} else {
			$data = NULL;
		}
		return $data;
	}

	function update_petugas($table,$data,$id_petugas) {
		$this->db->where('id_petugas',$id_petugas);
		$this->db->update($table,$data);
	}

	function delete_petugas($id_petugas) {
		$this->db->from('tbl_petugas');
		$this->db->where('id_petugas',$id_petugas);
		$query = $this->db->get();
		$row = $query->row();
		$id_user = $row->id_user;

		$this->db->where('id_user',$id_user);
		$this->db->delete('tbl_user');
	}

	//FUNGSI LAMA
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