<?php  
if (!defined('BASEPATH')) exit('No direct script access allowed');

class CPages extends CI_Controller {

    function services() {
        $data['content'] = "Frontend/services";
		$data['activemenu'] = "CPages";
		$this->load->view('Frontend/frontend_template', $data);
    }

    function comparison() {
        $data['content'] = "Frontend/comparison";
		$data['activemenu'] = "CPages";
		$this->load->view('Frontend/frontend_template', $data);
    }

    function brand() {
        $data['content'] = "Frontend/brand";
		$data['activemenu'] = "CPages";
		$this->load->view('Frontend/frontend_template', $data);
    }

    function simulasi_cicilan() {
        $data['content'] = "Frontend/simulasi_cicilan";
		$data['activemenu'] = "CPages";
		$this->load->view('Frontend/frontend_template', $data);
    }

    function faq() {
        $data['content'] = "Frontend/faq";
		$data['activemenu'] = "CPages";
		$this->load->view('Frontend/frontend_template', $data);
    }
}
        
?>