<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Petugas extends CI_Controller {

	public function Petugas() {
        parent::__construct();
        $this->load->model('Petugas_model');
    }

	public function index()
	{
		$data['petugas'] = $this->Petugas_model->view_petugas();
		$this->template->load('template','petugas/petugas_view',$data);
		// $this->load->view('petugas/petugas_view',$data);
	}

	public function cek_username($username)	{
		$username = $this->input->post('username');
		$exists = $this->Petugas_model->cek_username($username);
		$count = count($exists);
		if (empty($count)) {
			return true;
		} else {
			return false;
		}
	}

	public function add_petugas() {
        if ($this->input->post('submit')) {
        	$username = $this->input->post('username');
        	if ($this->cek_username($username)) {
        		 $user = array(
	                'username' => $this->input->post('username'),
	                'password' => $this->input->post('password'),
	                'user_level' => 'Petugas',
	            );
	            $id_user = $this->Petugas_model->add_petugas('tbl_user',$user);

        		$data = array(
        		'id_user' => $id_user,
                'nama_petugas' => $this->input->post('nama_petugas'),
                'alamat_petugas' => $this->input->post('alamat_petugas'),
                'no_telp_petugas' => $this->input->post('no_telp_petugas'),
                'tempat_lahir_petugas' => $this->input->post('tempat_lahir_petugas'),
                'tgl_lahir_petugas' => $this->input->post('tgl_lahir_petugas'),
                'ket_petugas' => $this->input->post('ket_petugas'),
	            );
	            $this->Petugas_model->add_petugas('tbl_petugas',$data);
	            echo "<script>alert('Data Petugas berhasil disimpan!');location.href='".base_url('petugas')."';</script>";
        	} else {
        		echo "<script>alert('Username Telah Digunakan!');location.href='".base_url('petugas')."';</script>";
        	}
        } else {
			$this->template->load('template','petugas/petugas_tambah',$data);
			// $this->load->view('petugas/petugas_tambah');
        }
    }


    public function edit_petugas($id_petugas = 0) {
    	if ($id_petugas != 0 && !empty($id_petugas)) {
    		$data = array(
    			'record' => $this->Petugas_model->edit_petugas($id_petugas),
    			);
			$this->template->load('template','petugas/petugas_edit',$data);
			// $this->load->view('petugas/petugas_edit',$data);
    	} else {
    		redirect(base_url('petugas'));
    	}
    }

    public function update_petugas() {
    	if ($this->input->post('submit')) {
    		$id_petugas = $this->input->post('id_petugas');
        	$data = array(
                'nama_petugas' => $this->input->post('nama_petugas'),
                'alamat_petugas' => $this->input->post('alamat_petugas'),
                'no_telp_petugas' => $this->input->post('no_telp_petugas'),
                'tempat_lahir_petugas' => $this->input->post('tempat_lahir_petugas'),
                'tgl_lahir_petugas' => $this->input->post('tgl_lahir_petugas'),
                'ket_petugas' => $this->input->post('ket_petugas'),
	            );
            $this->Petugas_model->update_petugas('tbl_petugas',$data,$id_petugas);
            echo "<script>alert('Data Petugas berhasil disimpan!');location.href='".base_url('petugas')."';</script>";
        } else {
            echo "<script>alert('Data Petugas gagal disimpan!');location.href='".base_url('petugas')."';</script>";
        }
    }

    public function delete_petugas($id_petugas=0) {
    	$this->Petugas_model->delete_petugas($id_petugas);
    	echo "<script>alert('Data Petugas berhasil dihapus!');location.href='".base_url('petugas')."';</script>";
    }
}
