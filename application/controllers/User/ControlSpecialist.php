<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ControlSpecialist extends CI_Controller {

	function __construct(){
		parent:: __construct();
		$this->load->model("MSpecialist");
	}
	public function special()
	{
        $data['contain'] = "user/specialist";
		$this->load->view("user/index", $data);
	}
	public function laserDetistry(){
		$data['contain'] = "user/laserdentistry";
		$data['laser'] = $this->MSpecialist->Spec("Laser Densitry")->result();
		$this->load->view('user/index', $data);
	}
	public function orthoDontics(){
		$data['contain'] = "user/orthodontics";
		$data['ortho'] = $this->MSpecialist->Spec("Orthodontics")->result();
		$this->load->view('user/index', $data);
	}
	public function dentalImplant(){
		$data['contain'] = "user/dentalimplant";
		$data['dental'] = $this->MSpecialist->Spec("Dental Implent")->result();
		$this->load->view('user/index', $data);
	}
}
