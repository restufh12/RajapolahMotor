<?php  
if (!defined('BASEPATH')) exit('No direct script access allowed');

class MHome extends CI_Model
{
	
	

	function get_data(){
		$StrSQL = $this->db->query("SELECT * FROM tbl_mobil WHERE TerjualYN='0' ORDER BY RunNo DESC LIMIT 6");
		return $StrSQL->result_array();
	}
}

?>