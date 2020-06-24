<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ControlUserLogin extends CI_Controller {

    public function index(){
        $this->load->view('user/login');
    }
    public function checkData(){
        if(isset($_POST['in'])){
            $this->load->model('MUserLogin');
            $email = $this->input->post('email');
            $pass = $this->input->post('password');

            $cek = $this->MUserLogin->check($email);
            if($cek->num_rows() > 0){
                $row = $cek->row();
                if(password_verify($pass, $row->password)){
                    $data = array(
                        'id' => $row->id_user,
                        'name' => $row->nama_lengkap,
                        'gambar' => $row->gambar,
                        'loggin' => TRUE
                    );
                    $this->session->set_userdata($data);
                    $this->session->set_flashdata("sukses", "Success Login");
                    redirect('HomeUser');
                }else{
                    $this->session->set_flashdata('gagal', "Wrong Password");
                    redirect('user/ControlUserLogin');
                }
            }else{
                $this->session->set_flashdata('gagal', "Failed To Login Check the Email Address or Password");
                redirect('HomeUser');
            }
        }
    }
    public function logout(){
        $data = array(
            'id',
            'name',
            'email',
            'gambar',
            'loggin'
        );
        $this->session->unset_userdata($data);
        redirect("HomeUser");    
    }
}
