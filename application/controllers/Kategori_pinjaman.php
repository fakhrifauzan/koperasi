<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori_pinjaman extends CI_Controller {

	public function Kategori_pinjaman() {
        parent::__construct();
        $this->load->model('Kategori_pinjaman_model');
		if(!$this->session->has_userdata('logged_in')){
			redirect(base_url("auth"));
		}

		if($this->session->user_level == "Anggota"){
			redirect(base_url());
		}
    }

	public function index()	{
		$data['kategori_pinjaman'] = $this->Kategori_pinjaman_model->view_kategori();
		$this->template->load('template','kategori_pinjaman/kategori_view',$data);
		// $this->load->view('kategori_pinjaman/kategori_view',$data);
	}

	public function add_kategori() {
        if ($this->input->post('submit')) {
        	$kategori = array(
	            'nama_pinjaman' => $this->input->post('nama_pinjaman'),
            );
            $this->Kategori_pinjaman_model->add_kategori('tbl_pinjaman_kategori',$kategori);
            echo "<script>alert('Data Kategori berhasil disimpan!');location.href='".base_url('kategori_pinjaman')."';</script>";
        } else {
			$this->template->load('template','kategori_pinjaman/kategori_tambah');
            // $this->load->view('kategori_pinjaman/kategori_tambah');
        }
    }

    public function delete_kategori($id_pinjaman_kategori = 0) {
    	$this->Kategori_pinjaman_model->delete_kategori($id_pinjaman_kategori);
    	echo "<script>alert('Data Kategori pinjaman berhasil dihapus!');location.href='".base_url('kategori_pinjaman')."';</script>";
    }

    public function edit_kategori($id_pinjaman_kategori = 0) {
    	if ($id_pinjaman_kategori != 0 && !empty($id_pinjaman_kategori)) {
    		$data = array(
    			'record' => $this->Kategori_pinjaman_model->edit_kategori($id_pinjaman_kategori),
    			);
    		if (!empty($data['record'])) {
				$this->template->load('template','kategori_pinjaman/kategori_edit',$data);
    			// $this->load->view('kategori_pinjaman/kategori_edit',$data);
    		} else {
    			echo "<script>alert('ID Kategori pinjaman tidak ditemukan!');location.href='".base_url('kategori_pinjaman')."';</script>";
    		}
    	} else {
    		redirect(base_url('kategori_pinjaman'));
    	}
    }

    public function update_kategori() {
    	if ($this->input->post('submit')) {
    		$id_pinjaman_kategori = $this->input->post('id_pinjaman_kategori');
        	$data = array(
                'nama_pinjaman' => $this->input->post('nama_pinjaman'),
	            );
            $this->Kategori_pinjaman_model->update_kategori('tbl_pinjaman_kategori',$data,$id_pinjaman_kategori);
            echo "<script>alert('Data Kategori berhasil disimpan!');location.href='".base_url('kategori_pinjaman')."';</script>";
        } else {
            echo "<script>alert('Data Kategori gagal disimpan!');location.href='".base_url('kategori_pinjaman')."';</script>";
        }
    }
}
