<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {
	public function index()
	{
		$con = array(
			"content" => $this->Content()
			);
		$this->load->view('header', $con);
		$this->load->view('survei', $con);
		$this->load->view('footer', $con);

		if (isset($_POST['simpan'])){

			$tgl = date("Y-m-d");
			$data = array(
				"tanggal" => $tgl,
				"bintang" => $_POST['stars']
			);
			$this->mod_survei->InsertData('data', $data);

			redirect('');
		}
	}

	public function Result(){
		$con = array(
			"content" => $this->GetResult()
			);
		$this->load->view('web', $con);	
	}
	private function Content(){
		return $this->load->view('content', array(), true);
	}
	public function GetResult(){
		date_default_timezone_set("Asia/Jakarta");
		$tgl = date("Y-m-d");
		$where = "where tanggal = '$tgl'";
		$data = $this->mod_survei->GetResult();
		return $this->load->view('result', $data, true);
	}

}
