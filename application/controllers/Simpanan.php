<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Simpanan extends CI_Controller {

	public function Simpanan() {
        parent::__construct();
        $this->load->model('Simpanan_model');
		if(!$this->session->has_userdata('logged_in')){
			redirect(base_url("auth"));
		}
  	}

	public function index()	{
		if($this->session->user_level == "Anggota"){
			$data['simpanan'] = $this->Simpanan_model->view_simpanan($this->session->id);
		} else {
			$data['simpanan'] = $this->Simpanan_model->view_simpanan();
		}
		$this->template->load('template','simpanan/simpanan_view',$data);
		// $this->load->view('simpanan/simpanan_view',$data);
	}

	public function add_simpanan() {
		if($this->session->user_level == "Anggota"){
			redirect(base_url());
		} else {
			if ($this->input->post('submit')) {
	        	$simpanan = array(
		            'nama_simpanan' => $this->input->post('nama_simpanan'),
		            'id_anggota' => $this->input->post('id_anggota'),
		            'tgl_simpanan' => $this->input->post('tgl_simpanan'),
		            'besar_simpanan' => $this->input->post('besar_simpanan'),
		            'keterangan_simpanan' => $this->input->post('keterangan_simpanan'),
	            );
	            $this->Simpanan_model->add_simpanan('tbl_simpanan',$simpanan);
	            echo "<script>alert('Data Simpanan berhasil disimpan!');location.href='".base_url('simpanan')."';</script>";
	        } else {
				$this->load->model('Anggota_model');
				$data['anggota'] = $this->Anggota_model->view_anggota('simpanan');
				$this->template->load('template','simpanan/simpanan_add',$data);
	            // $this->load->view('simpanan/simpanan_add',$data);
	        }
		}
    }
	//
  //   public function delete_kategori($id_pinjaman_kategori = 0) {
  //   	$this->Kategori_pinjaman_model->delete_kategori($id_pinjaman_kategori);
  //   	echo "<script>alert('Data Kategori pinjaman berhasil dihapus!');location.href='".base_url('kategori_pinjaman')."';</script>";
  //   }
	//
  //   public function edit_kategori($id_pinjaman_kategori = 0) {
  //   	if ($id_pinjaman_kategori != 0 && !empty($id_pinjaman_kategori)) {
  //   		$data = array(
  //   			'record' => $this->Kategori_pinjaman_model->edit_kategori($id_pinjaman_kategori),
  //   			);
  //   		if (!empty($data['record'])) {
  //   			$this->load->view('kategori_pinjaman/kategori_edit',$data);
  //   		} else {
  //   			echo "<script>alert('ID Kategori pinjaman tidak ditemukan!');location.href='".base_url('kategori_pinjaman')."';</script>";
  //   		}
  //   	} else {
  //   		redirect(base_url('kategori_pinjaman'));
  //   	}
  //   }
	//
  //   public function update_kategori() {
  //   	if ($this->input->post('submit')) {
  //   		$id_pinjaman_kategori = $this->input->post('id_pinjaman_kategori');
  //       	$data = array(
  //               'nama_pinjaman' => $this->input->post('nama_pinjaman'),
	//             );
  //           $this->Kategori_pinjaman_model->update_kategori('tbl_pinjaman_kategori',$data,$id_pinjaman_kategori);
  //           echo "<script>alert('Data Kategori berhasil disimpan!');location.href='".base_url('kategori_pinjaman')."';</script>";
  //       } else {
  //           echo "<script>alert('Data Kategori gagal disimpan!');location.href='".base_url('kategori_pinjaman')."';</script>";
  //       }
  //   }
}
