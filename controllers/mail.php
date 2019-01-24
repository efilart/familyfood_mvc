<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mail extends CI_Controller {


function __construct()
{

    parent::__construct();

    /* Standard Libraries of codeigniter are required */
        $this->load->helper('url');
	    $this->load->model('Familyfood_model');
		$this->load->library('encrypt');
		$this->load->library('session');

}

	function index()
	{
	    $this->load->library('email');
            $this->email->from('team@familyfood.com', 'Admin');
            $this->email->to('k.ramesh47@gmail.com'); 
            $this->email->cc('ramesh.kandagatla@saventech.com'); 
            $this->email->bcc('deepakkumar.bahekar@saventech.com'); 

            $this->email->subject('Email Test');
            $this->email->message('Testing the email class.');	

            $this->email->send();

            echo $this->email->print_debugger();
	}
	
	
	
}

/* End of file mail.php */
/* Location: ./application/controllers/mail.php */

?>