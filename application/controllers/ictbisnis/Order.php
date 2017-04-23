<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Order extends CI_Controller {


	public function Order()
	{
		parent::__construct();
		$this->load->helper(array('url','form'));
		$this->load->model('m_order');
		$this->load->model('m_stock');
		//$this->load->library('session');
	}
	
	public function index()
	{
		$data['tbstock']=$this->m_stock->view_stock();
		$this->load->view('landing_page',$data);
	}

	public function new_order()
	{
		$data['tbstock']=$this->m_stock->view_stock();
		$this->load->view('order_view',$data);
	}

	public function how_to()
	{
		$this->load->view('how_to');
	}

	
	public function add_order(){
		if (isset($_POST['submit'])){
			$data = array(
            'nama'		 => $this->input->post('nama'),
            'email' 	 => $this->input->post('email'),
            'handphone'  => $this->input->post('handphone'),
			'namaBarang' => $this->input->post('namaBarang'),
			'jumlah' 	 => $this->input->post('jumlah'),
			//'totalbayar' => (int)$this->input->post('harga') * (int)$this->input->post('jumlah'),
			'pembayaran' => $this->input->post('pembayaran'),
			'alamat' 	 => $this->input->post('alamat')
       		);
        	$this->m_order->add_order($data);
			$this->load->view('sukses');
		} else{
			redirect('order/new_order');
		}
	}

	public function view_order(){
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
		$data['tborder']=$this->m_order->view_order();
		$this->load->view('allorder_view',$data);
	}

	public function delete_order($idOrder){
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
		$this->m_order->delete_order($idOrder);
		redirect('order/view_order');
	}

	public function edit_order($idOrder){
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
		$where = array('idOrder' => $idOrder);
		$data['tborder'] = $this->m_order->edit_order('tborder', $where)->result();
		$data['tbstock']=$this->m_stock->view_stock();
		$this->load->view('orderedit_view',$data);
	}

	public function update_order(){
		$data = array(
            'idOrder' 	 => $this->input->post('idOrder'),
           	'nama'		 => $this->input->post('nama'),
            'email' 	 => $this->input->post('email'),
            'handphone'  => $this->input->post('handphone'),
			'pembayaran' => $this->input->post('pembayaran'),
			'alamat' 	 => $this->input->post('alamat'),
			'status' 	 => $this->input->post('status')
        );
        $this->m_order->update_order($data['idOrder'],$data);
      	redirect('order/view_order');
	}

}