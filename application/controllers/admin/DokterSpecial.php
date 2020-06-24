<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DokterSpecial extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('MSpecialist');
	}
	public function index()
	{
		$data['body'] = "admin/Specialist";
		$data['modal'] = "admin/Modal/ModalDelSpecialist";
		$data['pop'] = $this->MSpecialist->show()->result();
		$this->load->view("admin/index", $data);
	}
	public function viewAdd(){
		$data['body'] = "admin/AddSpecialist";
		$this->load->view('admin/index', $data);
	}
	public function viewEdit($id){
		$data['body'] = "admin/EditSpecialist";
		$data['show'] = $this->MSpecialist->show($id)->result();
		$this->load->view('admin/index', $data);
	}
	public function addData(){
		if(isset($_POST['add'])){
			$name = ucwords(trim(strip_tags($this->input->post('name'))));
			$ket = trim(strip_tags($this->input->post('ket')));
			$harga = trim($this->input->post('harga'));
			if(empty($name) || empty($ket) || empty($harga)){
				$this->session->set_flashdata("failed", "One of The required Column is empty");
				redirect('admin/DokterSpecial/viewAdd');
			}else{
				$data = $this->MSpecialist->add($name, $ket, $harga);
				if($data){
					$this->session->set_flashdata('notif', 'Data Recorded');
					redirect("admin/DokterSpecial/");
				}else{
					$this->session->set_flashdata('failed', 'Failed to Record The Data, Sorry!!');
					redirect("admin/DokterSpecial/");
				}
			}
		}
	}
	public function updateData(){
		if(isset($_POST['edit'])){
			$id = $this->input->post('id');
			$name = ucwords(trim(strip_tags($this->input->post('name'))));
			$ket = trim(strip_tags($this->input->post('ket')));
			$harga = trim($this->input->post('harga'));
			
			$data = $this->MSpecialist->update($name, $ket, $harga, $id);
			if($data){
				$this->session->set_flashdata('notif', 'Success Updating Data');
				redirect("admin/DokterSpecial/");
			}else{
				$this->session->set_flashdata('failed', 'Failed to Update The Data, Sorry!!');
				redirect("admin/DokterSpecial/");
			}
			
		}
	}
	public function deleteData(){
		if(isset($_POST['delete'])){
			$id = $this->input->post('id');
			$data = $this->MSpecialist->delete($id);
			if($data){
				$this->session->set_flashdata('notif', 'Success Deleting Data');
				redirect("admin/DokterSpecial/");
			}else{
				$this->session->set_flashdata('failed', 'Failed to Delete The Data, Sorry!!');
				redirect("admin/DokterSpecial/");
			}
		}
	}

}
