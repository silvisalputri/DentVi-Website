<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ControlDoctor extends CI_Controller {

	public function index()
	{
		$this->load->model("MDokter");
		$data['contain'] = "user/doctors";
		$data['data'] = $this->MDokter->getDokter()->result();
		$this->load->view("user/index", $data);
	}
}
