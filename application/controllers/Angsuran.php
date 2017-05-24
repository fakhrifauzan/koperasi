<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Angsuran extends CI_Controller {

	public function Angsuran() {
        parent::__construct();
        $this->load->model('Angsuran_model');
  	}

	public function index()	{
		$data['angsuran'] = $this->Angsuran_model->view_angsuran();
		$this->template->load('template','angsuran/angsuran_view',$data);
		// $this->load->view('angsuran/angsuran_view',$data);
	}

	// public function add_pinjaman() {
    //   if ($this->input->post('submit')) {
    //   	$pinjaman = array(
    //         'id_pinjaman_kategori' => $this->input->post('id_pinjaman_kategori'),
    //         'id_anggota' => $this->input->post('id_anggota'),
	// 		'besar_pinjaman' => $this->input->post('besar_pinjaman'),
    //         'tgl_pengajuan_pinjaman' => date("Y-m-d"),
    //         'jml_angsuran' => $this->input->post('jml_angsuran'),
    //         // 'tgl_acc_pinjaman' => $this->input->post('tgl_acc_pinjaman'),
    //         // 'tgl_pinjam' => $this->input->post('tgl_pinjam'),
    //         // 'tgl_pelunasan' => $this->input->post('tgl_pelunasan'),
    //         'keterangan_pinjaman' => $this->input->post('keterangan_pinjaman'),
    //       );
	//       $this->Pinjaman_model->add_pinjaman('tbl_pinjaman',$pinjaman);
	//       echo "<script>alert('Data Pinjaman berhasil disimpan!');location.href='".base_url('pinjaman')."';</script>";
    //   } else {
	// 	$this->load->model('Anggota_model');
	// 	$data['anggota'] = $this->Anggota_model->view_anggota('pinjaman');
	// 	$this->load->model('Kategori_pinjaman_model');
	// 	$data['kategori'] = $this->Kategori_pinjaman_model->view_kategori();
    //     $this->load->view('pinjaman/pinjaman_add',$data);
    //   }
    // }
	//
    // public function delete_pinjaman($id_pinjaman = 0) {
	// 	if ($id_pinjaman != 0) {
	// 		$this->Pinjaman_model->delete_pinjaman($id_pinjaman);
    // 	echo "<script>alert('Data Pinjaman berhasil dihapus!');location.href='".base_url('pinjaman')."';</script>";
	// 	}
    // }
	//
    // public function edit_pinjaman($id_pinjaman = 0) {
    // 	if ($id_pinjaman != 0 && !empty($id_pinjaman)) {
	// 		$this->load->model('Anggota_model');
	// 		$this->load->model('Kategori_pinjaman_model');
    // 		$data = array(
    // 			'record' => $this->Pinjaman_model->edit_pinjaman($id_pinjaman),
	// 			'anggota' => $this->Anggota_model->view_anggota('pinjaman'),
	// 			'kategori' => $this->Kategori_pinjaman_model->view_kategori(),
    // 		);
    // 		if (!empty($data)) {
    // 			$this->load->view('pinjaman/pinjaman_edit',$data);
    // 		} else {
    // 			echo "<script>alert('ID Pinjaman tidak ditemukan!');location.href='".base_url('pinjaman')."';</script>";
    // 		}
    // 	} else {
    // 		redirect(base_url('pinjaman'));
    // 	}
    // }
	//
    // public function update_pinjaman() {
    // 	if ($this->input->post('submit')) {
	// 		$id_pinjaman = $this->input->post('id_pinjaman');
    //     	$data = array(
	// 			'id_pinjaman_kategori' => $this->input->post('id_pinjaman_kategori'),
	// 			'id_anggota' => $this->input->post('id_anggota'),
	// 			'besar_pinjaman' => $this->input->post('besar_pinjaman'),
	// 			// 'tgl_pengajuan_pinjaman' => date("Y-m-d"),
	// 			// 'tgl_acc_pinjaman' => $this->input->post('tgl_acc_pinjaman'),
	// 			// 'tgl_pinjam' => $this->input->post('tgl_pinjam'),
	// 			// 'tgl_pelunasan' => $this->input->post('tgl_pelunasan'),
	// 			'keterangan_pinjaman' => $this->input->post('keterangan_pinjaman'),
    //       	);
    //       	$this->Pinjaman_model->update_pinjaman('tbl_pinjaman',$data,$id_pinjaman);
    //       	echo "<script>alert('Data Pinjaman berhasil disimpan!');location.href='".base_url('pinjaman')."';</script>";
    //     } else {
    //       	echo "<script>alert('Data Pinjaman gagal disimpan!');location.href='".base_url('pinjaman')."';</script>";
    //     }
    // }
}
