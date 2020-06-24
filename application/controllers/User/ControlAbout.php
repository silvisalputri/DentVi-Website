<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ControlABout extends CI_Controller {

	public function index()
	{
        $data['contain'] = "user/about_us";
		$this->load->view("user/index", $data);
	}
}
