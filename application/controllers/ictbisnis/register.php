<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register extends CI_Controller {

	public function Register()
	{
		parent::__construct();
		$this->load->helper(array('url','form'));
		$this->load->model('m_register');
		//$this->load->library('session');
	}
	
	public function index()
	{
		$this->load->view('register');
	}

	public function add_user(){
		$data = array(
            'username' 	 => $this->input->post('username'),
            'password' 	 => $this->input->post('password'),
			'email' 	 => $this->input->post('email')
        );
        $this->m_register->tambah_user($data);
        $this->load->view('register');
	}

	public function view_user(){
		$data['user']=$this->m_register->lihat_user();
		$this->load->view('dataUser',$data);
	}

	public function edit_user(){
		$data['user'] = $this->m_register->edit_user($this->input->get('id'));
		$this->load->view('editUser',$data);
	}

	public function update(){
		$data = array(
            'username' 	 => $this->input->post('username'),
            'password' 	 => $this->input->post('password'),
			'email' 	 => $this->input->post('email')
        );
        $this->m_register->update_data($data,$data['username']);
    }

	public function delete_data(){
		$this->m_register->delete_data($this->input->get('id'));
	}
}