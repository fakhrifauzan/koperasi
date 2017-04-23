<?php
	class Pinjaman_model extends CI_Model {

	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	function view_pinjaman() {
		$this->db->select('p.*, a.id_anggota, a.nama_anggota, k.nama_pinjaman');
		$this->db->from('tbl_pinjaman as p');
		$this->db->join('tbl_pinjaman_kategori as k','k.id_pinjaman_kategori = p.id_pinjaman_kategori');
		$this->db->join('tbl_anggota as a','a.id_anggota = p.id_anggota');
		$data = $this->db->get();
		return $data->result();
	}

	function add_pinjaman($table,$data) {
		$this->db->insert($table,$data);
		return $this->db->insert_id();
	}

	function delete_pinjaman($id_pinjaman) {
		$this->db->where('id_pinjaman', $id_pinjaman);
		$this->db->delete('tbl_pinjaman');
	}

	function edit_pinjaman($id_pinjaman) {
		$this->db->where('id_pinjaman',$id_pinjaman);
		$query = $this->db->get('tbl_pinjaman');
		if ($query->num_rows() > 0) {
			$data = $query->row();
			$query->free_result();
		} else {
			$data = NULL;
		}
		return $data;
	}

	function update_pinjaman($table,$data,$id_pinjaman) {
		$this->db->where('id_pinjaman',$id_pinjaman);
		$this->db->update($table,$data);
	}
}
?>
