<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori_pinjaman extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function Kategori_pinjaman() {
        parent::__construct();
        $this->load->model('Kategori_pinjaman_model');
    }

	public function index()	{
		$data['kategori_pinjaman'] = $this->Kategori_pinjaman_model->view_kategori();
		$this->load->view('kategori_pinjaman/kategori_view',$data);
	}

	public function add_kategori() {
        if ($this->input->post('submit')) {     	
        	$kategori = array(
	            'nama_pinjaman' => $this->input->post('nama_pinjaman'),
            );
            $this->Kategori_pinjaman_model->add_kategori('tbl_pinjaman_kategori',$kategori);           
            echo "<script>alert('Data Kategori berhasil disimpan!');location.href='".base_url('kategori_pinjaman')."';</script>";
        } else {
            $this->load->view('kategori_pinjaman/kategori_tambah');
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
    			$this->load->view('kategori_pinjaman/kategori_edit',$data);
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