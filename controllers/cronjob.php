<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Cronjob extends CI_Controller {

function __construct()

{



    parent::__construct();


    /* Standard Libraries of codeigniter are required */

        $this->load->helper('url');

	    $this->load->model('Familyfood_model');

		$this->load->library('encrypt');

		$this->load->library('session');

		$this->load->driver('cache');

		$this->load->library('email');

		$this->output->set_header('Last-Modified: ' . gmdate("D, d M Y H:i:s") . ' GMT');

		$this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');

		$this->output->set_header('Pragma: no-cache');

		$this->output->set_header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");

		

}





function removePendingAppointments() {



$output = $this->Familyfood_model->removePendingAppointments();



}



function reminder5min() {

$output = $this->Familyfood_model->getAppointmentsFor5minReminder();

}



function reminder1hour() {
//$this->mail( 'filart.ervin@gmail.com', 'Email Reminder Test 1hr', 'This is test', '' );

$output = $this->Familyfood_model->getAppointmentsFor1hourReminder();

$output = $output->result_array();


if(count($output) > 0) {

for($i=0 ; $i<count($output) ; $i++) {

$userid = $output[$i]['userid'];

$confnumber = $output[$i]['confirmation_number'];



$msg = $this->mail($userid, ONEHOURAFTERVISITSUBJECT, ONEHOURAFTERVISITMESSAGE.'<br> <a href ="' . base_url() . 'login/reviewform?userid=' . $userid . '&confnumber=' . $confnumber . '">'. base_url() . 'login/reviewform</a>', "");



if($msg == "success" ) {

$this->Familyfood_model->changehourlymailstatusmsg($confnumber);

}

}

}

}


function testemail() {
    $this->mail( '365webdays@gmail.com', 'Email Reminder Test 24hr '.date("Y-m-d H:i:s"), 'This is test', '' );
}

function reminder24hours() {
//$this->mail( 'filart.ervin@gmail.com', 'Email Reminder Test 24hr', 'This is test', '' );

$email_list = "";
$email_fail = "";
$output = $this->Familyfood_model->getAppointmentsFor24hourReminder();

$output = $output->result_array();


if(count($output) > 0) {

for($i=0 ; $i<count($output) ; $i++) {

$userid = $output[$i]['userid'];


$time = $output[$i]['appointment_time'];

$timezone = $output[$i]['timezone'];

$locaion = $output[$i]['address2'];
$conference = $output[$i]['conf_room'];

$appointmentdate = $output[$i]['appointment_date'];

$confnumber = $output[$i]['confirmation_number'];




$html = 'Date:<b>'.$appointmentdate .'</b><br>';

	$html = $html . 'Time:<b>'.$time .'</b><br>';

	$html = $html . 'Time Zone:<b>'.$timezone .'</b><br>';

	$html = $html . 'Location:<b>'.$locaion .'</b><br>';

	$html = $html . 'Conference Room:<b>'.$conference.'</b><br>';


//if( $userid == 'test3@gmail.com' ){ $userid = 'filart.ervin@gmail.com'; }
 $msg = $this->mail($userid, ONEDAYBEFOREVISITSUBJECT, ONEDAYBEFOREVISITMESSAGE1 . "<br>" . $html . "<br>" . ONEDAYBEFOREVISITMESSAGE2 , "fpwd");

 if($msg == "success" ) {
	$email_list .= "<br />".$userid;
 	//$msg = $this->mail('filart.ervin@gmail.com', ONEDAYBEFOREVISITSUBJECT, ONEDAYBEFOREVISITMESSAGE1 . "<br>" . $html . "<br>" . ONEDAYBEFOREVISITMESSAGE2 , "fpwd");
	$this->Familyfood_model->changedailymailstatusmsg($confnumber);

 }else{ 
$email_fail .= "<br />".$userid; 
}



}
//$this->mail( 'filart.ervin@gmail.com', 'Email Reminder Test 24hr', $email_list.'<br />'.$email_fail, '' );
echo 'Email Success<br />'.$email_list.'<br />Email Fail:'.$email_fail;
if( $email_list !== '' ){
	//$msg = $this->mail('filart.ervin@gmail.com', 'succeful mail sent', $email_list, "");
}
if( $email_fail !== '' ){
	//$msg = $this->mail('filart.ervin@gmail.com', 'FAILED mail sent', $email_fail, "");
}
}

}



function reminder24hours1() {
//$this->mail( 'filart.ervin@gmail.com', 'Email Reminder Test 24hr', 'This is test', '' );


$output = $this->Familyfood_model->getAppointmentsFor24hourReminder();

$output = $output->result_array();



if(count($output) > 0) {

for($i=0 ; $i<count($output) ; $i++) {

$userid = $output[$i]['userid'];

$time = $output[$i]['appointment_time'];

$timezone = $output[$i]['timezone'];

$locaion = $output[$i]['address2'];
$conference = $output[$i]['conf_room'];

$appointmentdate = $output[$i]['appointment_date'];

$confnumber = $output[$i]['confirmation_number'];





$html = 'Date:<b>'.$appointmentdate .'</b><br>';

	$html = $html . 'Time:<b>'.$time .'</b><br>';

	$html = $html . 'Time Zone:<b>'.$timezone .'</b><br>';

	$html = $html . 'Location:<b>'.$locaion .'</b><br>';

	$html = $html . 'Conference Room:<b>'.$conference.'</b><br>';

	

 $msg = $this->mail($userid, ONEDAYBEFOREVISITSUBJECT, ONEDAYBEFOREVISITMESSAGE1 . "<br>" . $html . "<br>" . ONEDAYBEFOREVISITMESSAGE2 , "");

 if($msg == "success" ) {

	$this->Familyfood_model->changedailymailstatusmsg($confnumber);

 }



}

}

}



function reminderoneweek() {
//$this->mail( 'filart.ervin@gmail.com', 'Email Reminder Test 1wk', 'This is test', '' );


$output = $this->Familyfood_model->getAppointmentsFor1weekReminder();

$output = $output->result_array();


if(count($output) > 0) {

for($i=0 ; $i<count($output) ; $i++) {

$userid = $output[$i]['userid'];

$time = $output[$i]['appointment_time'];

$timezone = $output[$i]['timezone'];

$locaion = $output[$i]['address2'];

$conference = $output[$i]['conf_room'];

$appointmentdate = $output[$i]['appointment_date'];

$confnumber = $output[$i]['confirmation_number'];



$html = 'Date:<b>'.$appointmentdate .'</b><br>';

	$html = $html . 'Time:<b>'.$time .'</b><br>';

	$html = $html . 'Time Zone:<b>'.$timezone .'</b><br>';

	$html = $html . 'Location:<b>'.$locaion .'</b><br>';

	$html = $html . 'Conference Room:<b>'.$conference.'</b><br>';

	

$msg = $this->mail($userid, ONEWEEKBEFOREVISITSUBJECT, ONEWEEKBEFOREVISITMESSAGE1 . "<br>" . $html . "<br>" . ONEWEEKBEFOREVISITMESSAGE2 . '<br> <a href ="' . base_url() . 'login/logins">'. base_url() . 'login/logins</a>' . ONEWEEKBEFOREVISITMESSAGE3 , "");



if($msg == "success" ) {

	$this->Familyfood_model->changeweeklymailstatusmsg($confnumber);

 }

}

}



}



 function mail($mailTo, $subject, $messageFormat, $fromFeature)

	{

	     

         $this->email->from(FFLLCADMINMAIL, FFLLCADMINMAILNAME);

         $this->email->to($mailTo); // $mailTo - can be a comma separated email-ids

            //$this->email->cc('ramesh.kandagatla@saventech.com'); 
           
            
            $list = array('365webdays@gmail.com');
  $this->email->bcc($list);


         $this->email->subject($subject);

         $this->email->message($messageFormat);	



            if($this->email->send()){
                
              

						return "success";

			} else {

				echo "ERROR = ".$this->email->print_debugger();

			}

	}



}





?>