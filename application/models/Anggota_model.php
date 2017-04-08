<?php
	class Anggota_model extends CI_Model{
	
	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	function view_anggota()	{
		$this->db->select('*');
		$this->db->from('tbl_anggota');
		$data = $this->db->get();
		return $data->result();
	}

	function cek_username($username) {
		$this->db->select('username');
		$this->db->from('tbl_user');
		$this->db->where('username',$username);
		$query = $this->db->get();
		return $query->num_rows();
	}

	function add_anggota($table,$data) {
		$this->db->insert($table,$data);
		return $this->db->insert_id();
	}

	function delete_anggota($id_anggota) {
		$this->db->from('tbl_anggota');
		$this->db->where('id_anggota',$id_anggota);
		$query = $this->db->get();
		$row = $query->row();
		$id_user = $row->id_user;

		$this->db->where('id_user',$id_user);
		$this->db->delete('tbl_user');
	}

	function edit_anggota($id_anggota) {
		$this->db->select('*');
		$this->db->from('tbl_anggota as a');
		$this->db->join('tbl_user as u','u.id_user = a.id_user');
		$this->db->where('a.id_anggota',$id_anggota);
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			$data = $query->row();
			$query->free_result();
		} else {
			$data = NULL;
		}
		return $data;
	}

	function update_anggota($table,$data,$id_anggota) {
		$this->db->where('id_anggota',$id_anggota);
		$this->db->update($table,$data);
	}
}

?>