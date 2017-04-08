<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anggota extends CI_Controller {

	public function Anggota() {
        parent::__construct();
        $this->load->model('Anggota_model');
    }

	public function index()
	{
		$data['anggota'] = $this->Anggota_model->view_anggota();
		$this->load->view('anggota/anggota_view',$data);
	}

    public function cek_username($username) {
        $username = $this->input->post('username');
        $exists = $this->Anggota_model->cek_username($username);
        if (empty($exists)) {
            return true;
        } else {
            return false;
        }
    }

    public function add_anggota() {
        if ($this->input->post('submit')) {
            $username = $this->input->post('username');         
            if ($this->cek_username($username)) {
                $user = array(
                    'username' => $this->input->post('username'),
                    'password' => $this->input->post('password'),
                    'user_level' => 'Anggota',
                );
                $id_user = $this->Anggota_model->add_anggota('tbl_user',$user);

                $data = array(
                    'id_user' => $id_user,              
                    'nama_anggota' => $this->input->post('nama_anggota'),
                    'alamat_anggota' => $this->input->post('alamat_anggota'),
                    'tgl_lahir_anggota' => $this->input->post('tgl_lahir_anggota'),
                    'tempat_lahir_anggota' => $this->input->post('tempat_lahir_anggota'),
                    'jenis_kelamin_anggota' => $this->input->post('jenis_kelamin_anggota'),
                    'status_anggota' => $this->input->post('status_anggota'),
                    'no_telp_anggota' => $this->input->post('no_telp_anggota'),
                    'keterangan_anggota' => $this->input->post('keterangan_anggota'),
                );
                $this->Anggota_model->add_anggota('tbl_anggota',$data);            
                echo "<script>alert('Data Anggota berhasil disimpan!');location.href='".base_url('anggota')."';</script>"; 
            } else {
                echo "<script>alert('Username Telah Digunakan!');location.href='".base_url('anggota')."';</script>";
            }                        
        } else {
            $this->load->view('anggota/anggota_tambah');
        }
    }

    public function delete_anggota($id_anggota = 0) {
        $this->Anggota_model->delete_anggota($id_anggota);
        echo "<script>alert('Data Anggota berhasil dihapus!');location.href='".base_url('anggota')."';</script>";
    }

    public function edit_anggota($id_anggota = 0) {
        if ($id_anggota != 0 && !empty($id_anggota)) {
            $data = array(
                'record' => $this->Anggota_model->edit_anggota($id_anggota), 
                );
            $this->load->view('anggota/anggota_edit',$data);
        } else {
            redirect(base_url('anggota'));
        }
    }

	public function update_anggota() {
        if ($this->input->post('submit')) {
            $id_anggota = $this->input->post('id_anggota');
            $data = array(              
                'nama_anggota' => $this->input->post('nama_anggota'),
                'alamat_anggota' => $this->input->post('alamat_anggota'),
                'tgl_lahir_anggota' => $this->input->post('tgl_lahir_anggota'),
                'tempat_lahir_anggota' => $this->input->post('tempat_lahir_anggota'),
                'jenis_kelamin_anggota' => $this->input->post('jenis_kelamin_anggota'),
                'status_anggota' => $this->input->post('status_anggota'),
                'no_telp_anggota' => $this->input->post('no_telp_anggota'),
                'keterangan_anggota' => $this->input->post('keterangan_anggota'),
                );
            $this->Anggota_model->update_anggota('tbl_anggota',$data,$id_anggota);
            echo "<script>alert('Data Anggota berhasil disimpan!');location.href='".base_url('anggota')."';</script>";                  
        } else {
            echo "<script>alert('Data Anggota gagal disimpan!');location.href='".base_url('anggota')."';</script>";
        }
    }
}