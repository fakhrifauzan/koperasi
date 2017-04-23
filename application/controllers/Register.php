<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

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

    public function Register() {
        parent::__construct();
        $this->load->model('m_register');
    }

    public function index()
    {
        $this->load->view('register');
    }

    public function add_user() {
        if ($this->input->post('submit')) {
            $data = array(
                'nama' => $this->input->post('nama'),
                'username' => $this->input->post('username'),
                'password' => sha1($this->input->post('password')),
            );
            if ($this->m_register->add_user($data)) {
                $this->load->view('add_user_sukses');
            } else {
                die('Username sudah digunakan');
            }            
        } else {
            redirect('register');
        }
    }
}