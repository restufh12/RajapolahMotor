<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CHome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data['content'] = 'Frontend/home';
		$data['activemenu'] = "CHome";
		$data['mobilbaru'] = $this->load_tbl_mobil();
		$this->load->view('Frontend/frontend_template', $data);
	}

	public function admin()
	{
		$this->load->view('Backend/Home');
	}

	public function load_tbl_mobil(){
		$this->load->model('Frontend/MHome');
		$data = $this->MHome->get_data();
		
		return $data;
	}
}
