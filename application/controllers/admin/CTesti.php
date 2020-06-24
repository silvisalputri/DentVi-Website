<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CTesti extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('MTesti');
		$this->load->model('MUser');
	}
	public function index()
    {
		$data['body'] = "admin/DataTestimonial";
		$hasil = $this->MTesti->getTesti();
		$data['testi'] = $hasil->result();
		$this->load->view("admin/index", $data);
  	}
  	public function addTesti(){
		$data['body'] = "admin/addDataTesti";
		$data['user'] = $this->MUser->getUser()->result();
		$this->load->view("admin/index", $data);
	}
	public function deleteDataTesti(){
		if(isset($_POST['delete'])){
			$this->load->model('MTesti');
			$id = $this->input->post('id_testimonial');
			$this->MTesti->deleteTesti($id);
			$this->session->set_flashdata('notif', 'Success Delete Data Testimonial');
			redirect('admin/CTesti');
		}
	}
	public function prosesDataTesti(){
		if(isset($_POST['add'])){			
			$nama = $this->input->post('nama');
			$rate = strip_tags($this->input->post('rate'));
			$ket = $this->input->post('ket');

			$data = $this->MTesti->addTesti($nama, $rate, $ket);
			redirect("admin/CTesti");

		}
	}
	public function editData(){
		if(isset($_POST['edit'])){
			$this->load->model('MTesti');
			$nama = $this->input->post('nama');
			$rate = $this->input->post('rate');
			$ket = $this->input->post('ket');
			$id_testi = $this->input->post('id_testimonial');

			$data = $this->MTesti->editTesti($nama, $rate, $ket, $id_testi);
			redirect("admin/CTesti");
		}
	}
	public function editTesti($id_testi = null){
		$data['body'] = "admin/editDataTesti";
		$data['user'] = $this->MUser->getUser()->result();
		$hasil = $this->MTesti->getTesti($id_testi);
		$data['testi'] = $hasil->result();
		$this->load->view('admin/index', $data);
	}
}