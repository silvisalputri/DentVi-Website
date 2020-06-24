<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ControlFaq extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model("MFaq");
	}
	public function index()
	{
		$data['contain'] = "user/faq";
		$data['faq_data'] = $this->MFaq->getFaq()->result();
		$this->load->view("user/index", $data);
	}
}
