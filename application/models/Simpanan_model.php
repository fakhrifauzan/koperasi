<?php
	class Simpanan_model extends CI_Model{

	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	function view_simpanan($id_anggota = NULL) {
		$this->db->select('s.*, a.id_anggota, a.nama_anggota');
		$this->db->from('tbl_simpanan as s');
		$this->db->join('tbl_anggota as a','a.id_anggota = s.id_anggota');
		if ($id_anggota) {
			$this->db->where('a.id_anggota', $id_anggota);
		}
		$data = $this->db->get();
		return $data->result();
	}

	function add_simpanan($table,$data) {
		$this->db->insert($table,$data);
		return $this->db->insert_id();
	}
	//
	// function delete_kategori($id_pinjaman_kategori) {
	// 	$this->db->where('id_pinjaman_kategori', $id_pinjaman_kategori);
	// 	$this->db->delete('tbl_pinjaman_kategori');
	// }
	//
	// function edit_kategori($id_pinjaman_kategori) {
	// 	$this->db->select('*');
	// 	$this->db->from('tbl_pinjaman_kategori');
	// 	$this->db->where('id_pinjaman_kategori',$id_pinjaman_kategori);
	// 	$query = $this->db->get();
	// 	if ($query->num_rows() > 0) {
	// 		$data = $query->row();
	// 		$query->free_result();
	// 	} else {
	// 		$data = NULL;
	// 	}
	// 	return $data;
	// }
	//
	// function update_kategori($table,$data,$id_pinjaman_kategori) {
	// 	$this->db->where('id_pinjaman_kategori',$id_pinjaman_kategori);
	// 	$this->db->update($table,$data);
	// }
}
?>
