<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataUser extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model("MUser");
	}
	public function index()
	{
		$data['body'] = "admin/DataUser";
		$hasil = $this->MUser->getUser();
		$data['user'] = $hasil->result();
		$this->load->view("admin/index", $data);
	}
	public function adduser(){
		$data['body'] = "admin/addDataUser";
		$this->load->view("admin/index", $data);
	}
	public function editUser($id = null){
		$data['body'] = "admin/editDataUser";
		$hasil = $this->MUser->getUser($id);
		$data['user'] = $hasil->result();
		$this->load->view('admin/index', $data);
	}
	public function prosesDataUser(){
		if(isset($_POST['add'])){
			$this->load->model('MUser');
			$GName = $_FILES['picture']['name'];
			$GSize = $_FILES['picture']['size'];
			$GTmp = $_FILES['picture']['tmp_name'];
			$GType = $_FILES['picture']['type'];
			
			$user = ucwords(strip_tags($this->input->post('username')));
			$email = $this->input->post('email');
			$pass = password_hash($this->input->post('password'), PASSWORD_BCRYPT);
			$name = strip_tags($this->input->post('name'));
			$gender = $this->input->post('gender');
			$date = $this->input->post('date');
			$age = trim($this->input->post('age'));
			$address = $this->input->post('address');
			$telp = trim(strip_tags($this->input->post('telp')));

			$MovePic = "./assets/images/User/".$GName;
			if($GName != null){
				if($GType == 'image/jpg' || $GType == 'image/png' || $GType == 'image/jpeg'){
					if($GSize <= 10000000){
						if(move_uploaded_file($GTmp, $MovePic)){
							$data = $this->MUser->addUser($user, $email, $pass, $name, $gender, $date, $age, $address, $telp, $GName);
							if($data){
								$this->session->set_flashdata("notif", "Data Recorded");
								redirect("admin/DataUser/index");
							}else{
								$this->session->set_flashdata('failed', "Failed To Recorded data");
								redirect("admin/DataUser/addDataUser");
							}
						}else{
							$this->session->set_flashdata("failed", "Failed to Add Picture, Sorry!!");
							redirect("admin/DataUser/addDataUser");
						}
					}else{
						$this->session->set_flashdata("failed", "Failed, The Size is To Big, Sorry!!");
						redirect("admin/DataUser/addDataUser");
					}
				}else{
					$this->session->set_flashdata("failed", "Failed Wrong Type Of File Only Accept jpg, png, jpeg, Sorry!!");
					redirct("admin/DataUser/addDataUser");
				}
			}else{
				$data = $this->MUser->addUserWithoutPicture($user, $email, $pass, $name, $gender, $date, $age, $address, $telp);
				if($data){
					$this->session->set_flashdata("notif", "Data Recorded");
					redirect("admin/Datauser/index");
				}else{
					$this->session->set_flashdata("failed", "Failed To Record data");
					redirect("admin/DataUser/addDataUser");
				}
			}
		}
	}
	public function editData(){
		if(isset($_POST['edit'])){
			$this->load->model('MUser');
			$GName = $_FILES['picture']['name'];
			$GSize = $_FILES['picture']['size'];
			$GTmp = $_FILES['picture']['tmp_name'];
			$GType = $_FILES['picture']['type'];

			$user = ucwords(strip_tags($this->input->post('username')));
			$email = $this->input->post('email');
			$name = strip_tags($this->input->post('name'));
			$gender = $this->input->post('gender');
			$date = $this->input->post('date');
			$age = trim($this->input->post('age'));
			$address = $this->input->post('address');
			$telp = trim(strip_tags($this->input->post('telp')));
			$id = $this->input->post('id_user');

			$MovePic = "./assets/images/User/".$GName;	
			if($GName != null){
				if($GType == 'image/jpg' || $GType == 'image/png' || $GType == 'image/jpeg'){
					if($GSize <= 10000000){
						if(move_uploaded_file($GTmp, $MovePic)){								
		
							$oldPhoto = strip_tags($this->input->post('oldPhoto'));
							$path = '.assets/images/User/'.$oldPhoto;
							if($oldPhoto != null){
								unlink($path);
							}
							$data = $this->MUser->editUser($user, $email, $name, $gender, $date, $age, $address, $telp, $GName, $id);
							if($data){
								$this->session->set_flashdata("notif", "Data Recorded");
								redirect("admin/DataUser/index");
							}else{
								$this->session->set_flashdata('failed', "Failed To Recorded data");
								redirect("admin/DataUser/editUser");
							}
						}else{
							$this->session->set_flashdata("failed", "Failed to Add Picture, Sorry!!");
							redirect("admin/DataUser/editUser");
						}
					}else{
						$this->session->set_flashdata("failed", "Failed, The Size is To Big, Sorry!!");
						redirect("admin/DataUser/editUser");
					}
				}else{
					$this->session->set_flashdata("failed", "Failed Wrong Type Of File Only Accept jpg, png, jpeg, Sorry!!");
					redirct("admin/DataUser/editUser");
				}
			}else{
				$data = $this->MUser->editUserWithoutPicture($user, $email, $name, $gender, $date, $age, $address, $telp, $id);
				if($data){
					$this->session->set_flashdata("notif", "Data Recorded");
					redirect("admin/Datauser/index");
				}else{
					$this->session->set_flashdata("failed", "Failed To Record data");
					redirect("admin/DataUser/editUser");
				}
			}
		}
	}
	public function deleteDataUser(){
		if(isset($_POST['delete'])){
			$this->load->model('MUser');
			$id = $this->input->post('id_user');
			$path = "./assets/images/User".$old;
			$old = strip_tags($this->input->post('oldPhoto'));
			if($old != null){
				unlink($path);
			}
			$this->MUser->deleteUser($id);
			$this->session->set_flashdata('notif', 'Success Delete Data User');
			redirect('admin/DataUser/index');
		}
	}

}
