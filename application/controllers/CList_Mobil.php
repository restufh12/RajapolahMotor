<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class CList_Mobil extends CI_Controller {
	public function grid(){
		$data['content'] = "Frontend/list_mobil_grid";
		$data['activemenu'] = "CList_Mobil";
		$this->load->view('Frontend/frontend_template', $data);
	}

	public function list(){
		$data['content'] = "Frontend/list_mobil_list";
		$data['activemenu'] = "CList_Mobil";
		$this->load->view('Frontend/frontend_template', $data);
	}
} 
?>