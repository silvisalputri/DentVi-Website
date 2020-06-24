<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AboutDokter extends CI_Controller {

	function __construct(){
		parent::__construct();

	}
	public function index()
	{
        $data['body'] = "admin/testimonial";
		$this->load->view("admin/index", $data);
	}
}
