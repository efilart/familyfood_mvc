<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Authenticate_model extends CI_Model {

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct()
	{
		parent::__construct();

    /* Standard Libraries of codeigniter are required */
        $this->load->helper('url');
	    $this->load->database();
		$this->load->library('encrypt');
	}
	public function get_usertype($userid,$pwd) {
	  if(($userid != "") && ($pwd != "")) {
	    $query = $this->db->get_where('fllc_user', array('userid' => $userid,'pwd' => $pwd));
	    return $query;
	  }
	  else {
	    return FALSE;
	  }
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */