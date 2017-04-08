<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Stock extends CI_Controller {

	public function Stock()
	{
		parent::__construct();
		$this->load->helper(array('url','form'));
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
		$this->load->model('m_stock');
	}
	
	public function index()
	{
		$data['tbstock'] = $this->m_stock->view_stock();
		$this->load->view('stock_view',$data);
	}


	public function add_stock(){
		if (isset($_POST['submit'])){
			$config['upload_path']		= './images/products/';
			$config['allowed_types']    = 'gif|jpg|jpeg|png';
			$config['max_size']         = 1024;
			$config['file_name'] 		= $this->input->post('namaBarang');

			$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload('gambarBarang')){
				$error = array('error' => $this->upload->display_errors());
				$this->load->view('stock', $error);
			} else{
				$upload_data 	= $this->upload->data();
				$data = array(
            	'namaBarang'	=> $this->input->post('namaBarang'),
            	'descBarang'	=> $this->input->post('descBarang'),
            	'hargaBarang'	=> $this->input->post('hargaBarang'),
				'stockBarang' 	=> $this->input->post('stockBarang'),
				'gambarBarang' 	=> $upload_data['file_name']
       			);
        		$this->m_stock->add_stock($data);
				redirect('stock');
			}	
		} else{
			redirect('stock');
		}
	}

	public function delete_stock($idBarang){
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
		$this->m_stock->delete_stock($idBarang);
		redirect('stock');
	}

	public function edit_stock($idBarang){
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
		$where = array('idBarang' => $idBarang);
		$data['tbstock'] = $this->m_stock->edit_stock('tbstock', $where)->result();
		$this->load->view('stockedit_view',$data);
	}
	
	public function update_stock(){
		$data = array(
			'idBarang' 		=> $this->input->post('idBarang'),
           	'namaBarang'	=> $this->input->post('namaBarang'),
            'descBarang'	=> $this->input->post('descBarang'),
            'hargaBarang'	=> $this->input->post('hargaBarang'),
			'stockBarang' 	=> $this->input->post('stockBarang')
        );
        $this->m_stock->update_stock($data['idBarang'],$data);
      	redirect('stock');
	}
}