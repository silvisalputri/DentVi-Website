<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ControlTesti extends CI_Controller {

	public function index()
	{
		$this->load->model("MTesti");
		$data['contain'] = "user/testimonials";
		$data['data'] = $this->MTesti->getTesti()->result();
		$this->load->view("user/index", $data);
	}
}
