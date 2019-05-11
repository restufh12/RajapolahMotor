<?php 
if (!defined('BASEPATH')) exit('No direct script access allowed');

class CContact extends CI_Controller {

    function index() {
        $data['content'] = 'Frontend/contact';
		$data['activemenu'] = "CContact";
		$this->load->view('Frontend/frontend_template', $data);
    }
}

?>