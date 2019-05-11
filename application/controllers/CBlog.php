<?php  
if (!defined('BASEPATH')) exit('No direct script access allowed');

class CBlog extends CI_Controller {

    function index() {
        $data['content'] = 'Frontend/blog';
		$data['activemenu'] = "CBlog";
		$this->load->view('Frontend/frontend_template', $data);
    }
}
        
?>