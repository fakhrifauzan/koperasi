<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function Auth() {
        parent::__construct();
        $this->load->model('Auth_model');
    }

	public function index()	{
		if ($this->session->has_userdata('logged_in')) {
			redirect(base_url("dashboard"));
		} else {
			$this->load->view('auth/login_view');
		}
	}

    public function login() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => md5($password)
		);
        $user = $this->Auth_model->cek_auth('tbl_user', $where);

		if ($user == NULL) {
			echo "<script>alert('Username / Password Salah!');location.href='".base_url('auth')."';</script>";
		} else {
			$id = $user->id_user;
			$user_level = $user->user_level;

			$where = array(
				'id_user' => $id,
			);

			if ($user_level == "Anggota") {
				$auth = $this->Auth_model->cek_auth('tbl_anggota',$where);
				$session_data = array(
					'id_user'    => $id,
					'user_level' => $user_level,
					'id'		 => $auth->id_anggota,
					'nama' 		 => $auth->nama_anggota,
			        'logged_in'  => TRUE
				);
			} elseif ($user_level == "Petugas") {
				$auth = $this->Auth_model->cek_auth('tbl_petugas',$where);
				$session_data = array(
					'id_user'    => $id,
					'user_level' => $user_level,
					'id'		 => $auth->id_petugas,
					'nama' 		 => $auth->nama_petugas,
			        'logged_in'  => TRUE
				);
			}
			$this->session->set_userdata($session_data);
			redirect(base_url());
		}
	}

	public function logout() {
		$this->session->sess_destroy();
		redirect(base_url('auth'));
	}
}
