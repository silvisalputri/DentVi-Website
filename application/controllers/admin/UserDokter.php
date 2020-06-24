<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserDokter extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('MProfile');$this->load->model('MProfile');
	}
	public function index()
	{
		$this->load->model('MProfile');
		$id = $this->session->userdata('id');
		$cek = $this->MProfile->CekData($id);
		$data['user'] = $cek->result();
		$data['times'] = $this->MProfile->showTime($id)->result();
		$data['modal'] = "admin/Modal/ModalChangePass";
		$this->load->view("admin/user", $data);
	}
	public function self($id = null){
		if(isset($_POST['edit'])){
			$this->load->model('MProfile');
			$GName = $_FILES['picture']['name'];
			$GSize = $_FILES['picture']['size'];
			$GTemp = $_FILES['picture']['tmp_name'];
			$GType = $_FILES['picture']['type'];
			
			$id = trim($this->input->post('id_dokter'));
			$user = ucwords(strip_tags($this->input->post('user')));
			$email = $this->input->post('email');
			$real = strip_tags($this->input->post('real'));
			$spec = ucwords($this->input->post('spec'));
			$telp = trim(strip_tags($this->input->post('telp')));
			$gender = $this->input->post('gender');
			$bio = $this->input->post('bio');

			$MovePic = "assets/images/Dokter/".$GName;
			if($GName != null){
				if($GType == 'image/jpg' || $GType == 'image/png' || $GType == 'image/jpeg'){
					if($GSize <= 10000000){
						if(move_uploaded_file($GTemp, $MovePic)){
							
							$photo = strip_tags($this->input->post('photo'));
							$path = "assets/images/Dokter/".$photo;
							if($photo != null){
								unlink($path);
							}
							$data = $this->MProfile->selfEdit($user, $email, $real, $spec, $telp, $gender, $bio, $GName, $id);
							if($data){
								$this->session->set_flashdata('notif', "Success Edit Profile");
								redirect("admin/UserDokter/");
							}else{
								$this->session->set_flashdata('failed', "Failed Edit Profile, Sorry!!");
								redirect("admin/UserDokter/");
							}
						}else{
							$this->session->set_flashdata('failed', "Failed Adding Picture, Sorry!!");
							redirect("admin/UserDokter/");
						}
					}else{
						$this->session->set_flashdata('failed', "Failed Adding Picture the Size is to Big, Sorry!!");
						redirect("admin/UserDokter/");
					}
				}else{
					$this->session->set_flashdata('failed', "Failed Adding Picture Wrong Type Accept Only jpg, png, jpeg; Sorry!!");
					redirect("admin/UserDokter/");
				}
			}else{
				$data = $this->MProfile->selfEditWithoutPicture($user, $email, $real, $spec, $telp, $gender, $bio, $id);
				if($data){
					$this->session->set_flashdata('notif', "Success Edit Profile");
					redirect("admin/UserDokter/");
				}else{
					$this->session->set_flashdata('failed', "Failed Edit Profile, Sorry!!");
					redirect("admin/UserDokter/");
				}
			}
		}
	}

	public function changePass(){
		if(isset($_POST['change'])){
			$id = $this->input->post('id_dokter');
			$newPass = $this->input->post('newPass');
			$confirmPass = $this->input->post('confirmPass');
			if($newPass == $confirmPass){
				$pass = password_hash($newPass, PASSWORD_BCRYPT);
				$data = $this->MProfile->changePass($id, $pass);
				if($data){
					$this->session->set_flashdata('notif', 'Success Change Password');
					redirect("admin/UserDokter/");
				}else{
					$this->session->set_flashdata('failed', 'Failed Change Password, Sorry!!');
					redirect('admin/UserDokter/');
				}
			}else{
				$this->session->set_flashdata('failed', "Confirm Password is not same as A New Password, Please!");
				redirect("admin/UserDokter");
			}
		}
	}
	public function addTime(){
		if(isset($_POST['add'])){
			$id = $this->input->post('id');
			$start = $this->input->post('start');
			$st = date("H:i A",strtotime($start));
			$end = $this->input->post('end');
			$en = date("H:i A",strtotime($end));
			$data = $this->MProfile->addTime($id, $st, $en);
			if($data){
				$this->session->set_flashdata("notif", "Success Adding Schedule");
				redirect('admin/UserDokter/');
			}else{
				$this->session->set_flashdata("failed", "Failed Adding Schedule, Sorry!!");
				redirect('admin/UserDokter/');
			}
		}
	}
	public function delTime(){
		if(isset($_POST['del'])){
			$id = $this->input->post('id');
			$data = $this->MProfile->delTime($id);
			if($data){
				$this->session->set_flashdata("notif", "Success Deleting Schedule");
				redirect('admin/UserDokter/');
			}else{
				$this->session->set_flashdata("failed", "Failed Deleting Schedule, Sorry!!");
				redirect('admin/UserDokter/');
			}
		}
	}
}
