<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function Dashboard() {
        parent::__construct();
		if(!$this->session->has_userdata('logged_in')){
			redirect(base_url("auth"));
		}
    }

	public function index()	{
		$this->template->load('template','dashboard/dash_view');
		// if ($this->session->user_level == "Petugas") {
		// 	$this->template->load('template','dashboard/dash_petugas');
		// } else {
		// 	$this->template->load('template','dashboard/dash_anggota');
		// }
	}


}
