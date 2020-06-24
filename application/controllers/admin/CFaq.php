<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CFaq extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
    	$this->load->model('MFaq');
	}
	public function index()
    {
		$data['body'] = "admin/DataFaq";
		$hasil = $this->MFaq->getFaq();
		$data['faq_data'] = $hasil->result();
		$this->load->view("admin/index", $data);
  	}
  	public function addFaq(){
		$data['body'] = "admin/addDataFaq";
		$this->load->view("admin/index", $data);
	}
	public function prosesDataFaq(){
		if(isset($_POST['add'])){			
			$pertanyaan = $this->input->post('pertanyaan');
			$jawaban = $this->input->post('jawaban');

			$data = $this->MFaq->addFaq($pertanyaan, $jawaban);
			redirect("admin/CFaq");
		}
	}
	public function deleteDataFaq(){
		if(isset($_POST['delete'])){
			$this->load->model('MFaq');
			$id = $this->input->post('id_faq');
			$this->MFaq->deleteFaq($id);
			$this->session->set_flashdata('notif', 'Success Delete Data FAQ');
			redirect('admin/CFaq');
		}
	}
	public function editData(){
		if(isset($_POST['edit'])){
			$this->load->model('MFaq');
			$id = ucwords(strip_tags($this->input->post('id')));
			$pertanyaan = $this->input->post('pertanyaan');
			$jawaban = $this->input->post('jawaban');

			$data = $this->MFaq->editFaq($pertanyaan, $jawaban, $id);
			redirect("admin/CFaq");
		}
	}
	public function editFaq($id = null){
		$data['body'] = "admin/editDataFaq";
		$hasil = $this->MFaq->getFaq($id);
		$data['faq_data'] = $hasil->result();
		$this->load->view('admin/index', $data);
	}
}