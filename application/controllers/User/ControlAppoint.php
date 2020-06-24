<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ControlAppoint extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model("MAppoint");
		$this->load->model("MDokter");
	}
	public function index($id = null)
	{
		$data['contain'] = "user/appointments";
		if($id != null){
			$data['doc'] = $this->MAppoint->show($id = null)->result();
		}else{
			$data['doc'] = $this->MAppoint->show($id)->result();
		}
		$this->load->view("user/index", $data);
	}
	public function show($id){
		$hasil = $this->MAppoint->showTime($id)->result();
		$data['time'] = $hasil;
		foreach($hasil as $row){
			echo "<tr>";
			echo "<td>". $row->jam_mulai. "</td>";
			echo "<td>". $row->jam_selesai. "</td>";
			echo "</tr>";
		}
	}
}
