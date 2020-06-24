<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->view("admin/login");
    }
    public function checkData(){
        
        if(isset($_POST['submit'])){
            $this->load->model('MLogin');
            $email = $this->input->post('email');
            $pass = $this->input->post('password');

            $cek = $this->MLogin->check($email);
            if($cek->num_rows() > 0){
                $row = $cek->row();
                if(password_verify($pass, $row->password)){
                    $data = array(
                        'id' => $row->id_dokter,
                        'name' => $row->nama_dokter,
                        'email' => $row->email,
                        'akses' => $row->akses,
                        'loggin' => TRUE
                    );
                    $this->session->set_userdata($data);
                    $this->session->set_flashdata("sukses", "Success Login");
                    redirect('admin/HomeDokter/');
                }else{
                    $this->session->set_flashdata('gagal', "Wrong Password");
                    redirect('admin/login');
                }
            }else{
                $this->session->set_flashdata('gagal', "Failed To Login Check the Email Address or Password");
                redirect('admin/login');
            }
        }
    }
    public function logout(){
        $data = array(
            'id',
            'name',
            'email',
            'akses',
            'loggin'
        );
        $this->session->unset_userdata($data);
        redirect("admin/login/index");    
    }
}
