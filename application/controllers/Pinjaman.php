<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pinjaman extends CI_Controller {

	public function Pinjaman() {
        parent::__construct();
        $this->load->model('Pinjaman_model');
		if(!$this->session->has_userdata('logged_in')){
			redirect(base_url("auth"));
		}
  	}

	public function index()	{
		if($this->session->user_level == "Anggota"){
			$data['pinjaman'] = $this->Pinjaman_model->view_pinjaman($this->session->id);
		} else {
			$data['pinjaman'] = $this->Pinjaman_model->view_pinjaman();
		}
		$this->template->load('template','pinjaman/pinjaman_view',$data);
		// $this->load->view('pinjaman/pinjaman_view',$data);
	}

	public function add_pinjaman() {
		if($this->session->user_level == "Anggota"){
			redirect(base_url());
		} else {
			if ($this->input->post('submit')) {
	        	$pinjaman = array(
	              	'id_pinjaman_kategori' => $this->input->post('id_pinjaman_kategori'),
	              	'id_anggota' => $this->input->post('id_anggota'),
	  				'besar_pinjaman' => $this->input->post('besar_pinjaman'),
	              	'tgl_pengajuan_pinjaman' => date("Y-m-d"),
	              	'jml_angsuran' => $this->input->post('jml_angsuran'),
	              	// 'tgl_acc_pinjaman' => $this->input->post('tgl_acc_pinjaman'),
	              	// 'tgl_pinjam' => $this->input->post('tgl_pinjam'),
	              	// 'tgl_pelunasan' => $this->input->post('tgl_pelunasan'),
	              	'keterangan_pinjaman' => $this->input->post('keterangan_pinjaman'),
	            );
	  	      	$this->Pinjaman_model->add_pinjaman('tbl_pinjaman',$pinjaman);
	  	      	echo "<script>alert('Data Pinjaman berhasil disimpan!');location.href='".base_url('pinjaman')."';</script>";
	        } else {
		  		$this->load->model('Anggota_model');
		  		$data['anggota'] = $this->Anggota_model->view_anggota('pinjaman');
		  		$this->load->model('Kategori_pinjaman_model');
		  		$data['kategori'] = $this->Kategori_pinjaman_model->view_kategori();
		  		$this->template->load('template','pinjaman/pinjaman_add',$data);
		          // $this->load->view('pinjaman/pinjaman_add',$data);
	        }
		}
    }

    public function delete_pinjaman($id_pinjaman = 0) {
		if($this->session->user_level == "Anggota"){
			redirect(base_url());
		} else {
			if ($id_pinjaman != 0) {
				$this->Pinjaman_model->delete_pinjaman($id_pinjaman);
	    		echo "<script>alert('Data Pinjaman berhasil dihapus!');location.href='".base_url('pinjaman')."';</script>";
			}
		}
    }

    public function edit_pinjaman($id_pinjaman = 0) {
		if($this->session->user_level == "Anggota"){
			redirect(base_url());
		} else {
			if ($id_pinjaman != 0 && !empty($id_pinjaman)) {
				$this->load->model('Anggota_model');
				$this->load->model('Kategori_pinjaman_model');
	    		$data = array(
	    			'record' => $this->Pinjaman_model->edit_pinjaman($id_pinjaman),
					'anggota' => $this->Anggota_model->view_anggota('pinjaman'),
					'kategori' => $this->Kategori_pinjaman_model->view_kategori(),
	    		);
	    		if (!empty($data)) {
					$this->template->load('template','pinjaman/pinjaman_edit',$data);
	    			// $this->load->view('pinjaman/pinjaman_edit',$data);
	    		} else {
	    			echo "<script>alert('ID Pinjaman tidak ditemukan!');location.href='".base_url('pinjaman')."';</script>";
	    		}
	    	} else {
	    		redirect(base_url('pinjaman'));
	    	}
		}
    }

    public function update_pinjaman() {
		if($this->session->user_level == "Anggota"){
			redirect(base_url());
		} else {
			if ($this->input->post('submit')) {
				$id_pinjaman = $this->input->post('id_pinjaman');
	        	$data = array(
					'id_pinjaman_kategori' => $this->input->post('id_pinjaman_kategori'),
					'id_anggota' => $this->input->post('id_anggota'),
					'besar_pinjaman' => $this->input->post('besar_pinjaman'),
					// 'tgl_pengajuan_pinjaman' => date("Y-m-d"),
					// 'tgl_acc_pinjaman' => $this->input->post('tgl_acc_pinjaman'),
					// 'tgl_pinjam' => $this->input->post('tgl_pinjam'),
					// 'tgl_pelunasan' => $this->input->post('tgl_pelunasan'),
					'keterangan_pinjaman' => $this->input->post('keterangan_pinjaman'),
	          	);
	          	$this->Pinjaman_model->update_pinjaman('tbl_pinjaman',$data,$id_pinjaman);
	          	echo "<script>alert('Data Pinjaman berhasil disimpan!');location.href='".base_url('pinjaman')."';</script>";
	        } else {
	          	echo "<script>alert('Data Pinjaman gagal disimpan!');location.href='".base_url('pinjaman')."';</script>";
	        }
		}
    }
}
