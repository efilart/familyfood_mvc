<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Familyfood_model extends CI_Model {
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
	function __construct(){
		parent::__construct();
	    /* Standard Libraries of codeigniter are required */
        $this->load->helper( 'url' );
	    $this->load->database();
		$this->load->library( 'encrypt' );
		$this->load->library( 'session' );
		$this->closeDb();
	}

	public function saveUserDetails( $data_assoc, $uid ){
		$this->reconnectDb();
		$SET = $this->buildUpdateSet( $data_assoc );
		$sql = 'UPDATE fllc_user SET '.implode( ',', $SET ).' where uid = '.$uid;

		$query = $this->db->query($sql);
		$this->closeDb();

		return $query;
	}

	public function saveInsuranceDetails( $data_assoc, $uid ){
		$this->reconnectDb();
		if( $userInsurance = $this->getInsuranceCnt_byUid( $uid ) ){
			// update
			$SET = $this->buildUpdateSet( $data_assoc );

			$sql = 'UPDATE fllc_user_insurance SET '.implode( ',', $SET ).' where uid = '.$uid;
		}else{
			// insert
			$data_assoc['uid'] = $uid;
			$values = $this->checkValues( $data_assoc );
        
			$sql = sprintf( "INSERT INTO %s (%s) VALUES (%s)",
	              "fllc_user_insurance",
	              implode( ',', array_keys( $data_assoc ) ),
	              implode( ',', $values ) );
		}
		// echo $sql;exit;
		$query = $this->db->query($sql);
		$this->closeDb();

		return $query;
	}

	public function getInsuranceCnt_byUid( $uid ){
		$this->reconnectDb();

		$sql = 'select count(*) as cnt from fllc_user_insurance where uid='.$uid;

		$query=$this->db->query($sql);
		$this->closeDb();

		return $query->first_row()->cnt;
	}

	public function insertDietAdvice( $data_assoc, $uid ){
		if ( !is_array( $data_assoc ) || empty( $data_assoc ) ) {
            return ( 0 );
        }
        // update check
        $existing_data = $this->getAdviceCount_byUID( $uid );
        if( $existing_data->cnt > 0 ){
        	$this->setInvalidAdvice( $existing_data->da_id );
        }

        $values = $this->checkValues( $data_assoc );
        
		$sql = sprintf( "INSERT INTO %s (%s) VALUES (%s)",
              "fllc_dietitian_advice",
              implode( ',', array_keys( $data_assoc ) ),
              implode( ',', $values ) );
	
		$query = $this->db->query($sql);
		$this->closeDb();

	}

	public function insertSessionNote2( $data_assoc, $uid ){
		if ( !is_array( $data_assoc ) || empty( $data_assoc ) ) {
            return ( 0 );
        }
        // update check
        $existing_data = $this->getSessionNote2Count_byUID( $uid );
        if( $existing_data->cnt > 0 ){
        	$this->setInvalidSessionNote2( $existing_data->sn2_id );
        }

        $values = $this->checkValues( $data_assoc );
        
		$sql = sprintf( "INSERT INTO %s (%s) VALUES (%s)",
              "fllc_session_note_2",
              implode( ',', array_keys( $data_assoc ) ),
              implode( ',', $values ) );
		// echo $sql;exit;
		$query = $this->db->query($sql);
		$this->closeDb();

	}	

	public function insertSessionNote1( $data_assoc, $uid ){
		if ( !is_array( $data_assoc ) || empty( $data_assoc ) ) {
            return ( 0 );
        }
        // update check
        $existing_data = $this->getSessionNoteCount_byUID( $uid );
        if( $existing_data->cnt > 0 ){
        	$this->setInvalidSessionNote( $existing_data->sn_id );
        }

        $values = $this->checkValues( $data_assoc );
        
		$sql = sprintf( "INSERT INTO %s (%s) VALUES (%s)",
              "fllc_session_note_1",
              implode( ',', array_keys( $data_assoc ) ),
              implode( ',', $values ) );

		$query = $this->db->query($sql);
		$this->closeDb();

	}

	function checkValues( $data ){
		$this->reconnectDb();
		$values = array();
		if( is_array( $data ) ){
			foreach( $data as $value ){
				if ( is_string( $value ) ) {
                    $values[] = "'".mysql_real_escape_string( $value )."'";
                }else if ( is_numeric( $value ) ) {
                    $values[] = $value;
                }else if( is_bool( $value ) ){
                	$values[] = ( $value ) ? 1 : 0;
                }else{
                	$values[] = '""';
                }
			}
		}else{
			return false;
		}
		return $values;
	}

	function buildUpdateSet( $data ){
		$values = array();
		if( is_array( $data ) ){
			foreach( $data as $key=>$value ){
				if ( is_string( $value ) ) {
                    $values[] = $key." = '".@mysql_real_escape_string( $value )."'";
                }else if ( is_numeric( $value ) ) {
                    $values[] = $key." = ".$value;
                }else if( is_bool( $value ) ){
                	$values[] = ( $value ) ? $key." = 1" : $key." = 0";
                }else{
                	$values[] = $key.' = ""';
                }
			}
		}else{
			return false;
		}

		return $values;
	}

	// get session3 note details by uid
	public function getSessionNote3_byUid( $uid ){
		$this->reconnectDb();
		// get session note 3
		$sql = "Select * from fllc_session_note_3 where sn3_uid = ".$uid." and sn3_valid = 1";

		$query = $this->db->query($sql);
		$this->closeDb();

		return $query->first_row();
	}

	public function getReportList( $search_details, $sort, $limit, $offset, $order ){
		$this->reconnectDb();
		// get session note 3
		$sql = 'SELECT sn_id,sn_uid, date( sn_date_created ) as sn_date_created, CONCAT( firstname, " ", lastname ) as client_name from fllc_session_note_1 
		left join fllc_user on sn_uid = uid where sn_uid = '.$search_details['uid'];
		// if( $date = $search_details['date'] !== '' ){
		// 	$sql .= ' AND sn_date_created = ((select max( sn_date_created ) from fllc_session_note_1 where sn_uid = '.$search_details['uid'].' and date( sn_date_created ) = "'.$date.'" ))';
		// }

		if( $search_details['date'] !== '' ){
			$sql .= ' AND date( sn_date_created ) like "%'.$search_details['date'].'%"';
		}

		$sql .= ' GROUP BY date( sn_date_created ) ORDER BY '.$sort.' '.$order.' limit '.$offset.', '.$limit;
		
		$query = $this->db->query($sql);
		$this->closeDb();

		return $query;
	}

	public function getReport_session1( $date, $uid ){
		$sql = "SELECT * from fllc_session_note_1 WHERE date(sn_date_created) = '".$date."' and sn_uid = ".$uid;
		$sql .= " ORDER BY sn_date_created DESC limit 1";

		$query = $this->db->query($sql);
		$this->closeDb();

		return $query->first_row();
	}

	public function getReport_session2( $date, $uid ){
		$sql = "SELECT * from fllc_session_note_2 WHERE date(sn2_date_created) = '".$date."' and sn2_uid = ".$uid;
		$sql .= " ORDER BY sn2_date_created DESC limit 1";

		$query = $this->db->query($sql);
		$this->closeDb();

		return $query->first_row();
	}

	public function getReport_session3( $date, $uid ){
		$sql = "SELECT * from fllc_session_note_3 WHERE date(sn3_date_created) = '".$date."' and sn3_uid = ".$uid;
		$sql .= " ORDER BY sn3_date_created DESC limit 1";

		$query = $this->db->query($sql);
		$this->closeDb();

		return $query->first_row();
	}

	public function getReportSess1( $uid, $date ){
		$sql = "Select fllc_session_note_1.*, concat( firstname, ' ', lastname ) as client_name from fllc_session_note_1 left join fllc_user on uid = sn_uid where sn_uid = ".$uid;
		$sql .= ' AND sn_date_created = ((select max( sn_date_created ) from fllc_session_note_1 where sn_uid = '.$uid.' and date( sn_date_created ) = "'.$date.'" ))';
		$query = $this->db->query($sql);
		$this->closeDb();

		return $query;
	}

	// insert session 3
	public function insertSessionNote3( $data_assoc, $uid ){
		if( $this->checkSession3_byUid( $uid ) > 0 ){
			$sql1 = "UPDATE fllc_session_note_3 SET sn3_valid = 0 where sn3_uid = ".$uid;
			$query = $this->db->query($sql1);
		}
		// insert
		$values = $this->checkValues( $data_assoc );
    
		$sql = sprintf( "INSERT INTO %s (%s) VALUES (%s)",
              "fllc_session_note_3",
              implode( ',', array_keys( $data_assoc ) ),
              implode( ',', $values ) );
		$query = $this->db->query($sql);
		$this->closeDb();

		return $query;
		return false;
	}

	public function updatedSessionNote3( $data, $sn3_id ){
		$this->reconnectDb();
		$SET = $this->buildUpdateSet( $data );
		$sql = 'UPDATE fllc_session_note_3 SET '.implode( ',', $SET ).' where sn3_valid = 1 and sn3_id = '.$sn3_id;

		$query = $this->db->query($sql);
		$this->closeDb();

		return $query;
	}

	public function checkSession3_byUid( $uid ){
		$this->reconnectDb();
		$sql = 'SELECT count(*) as cnt from fllc_session_note_3 where sn3_valid = 1 and sn3_uid = '.$uid;

		$query = $this->db->query($sql);
		$this->closeDb();

		return $query->first_row()->cnt;
	}

	public function setInvalidSessionNote2( $sn_id ){
		$this->reconnectDb();
		$now = date( 'Y-m-d H:i:s');
		$sql = "UPDATE fllc_session_note_2 SET sn2_valid = 0, sn2_date_updated = '".$now."' where sn2_id = ".$sn_id;

		$query = $this->db->query($sql);
		$this->closeDb();

		return $query;
	}

	public function setInvalidSessionNote( $sn_id ){
		$this->reconnectDb();
		$now = date( 'Y-m-d H:i:s');
		$sql = "UPDATE fllc_session_note_1 SET sn_valid = 0, sn_date_updated = '".$now."' where sn_id = ".$sn_id;

		$query = $this->db->query($sql);
		$this->closeDb();

		return $query;
	}

	public function setInvalidAdvice( $da_id ){
		$this->reconnectDb();
		$now = date( 'Y-m-d H:i:s');
		$sql = "UPDATE fllc_dietitian_advice SET da_valid = 0, da_date_updated = '".$now."' where da_id = ".$da_id;

		$query = $this->db->query($sql);
		$this->closeDb();

		return $query;
	}

	// get session note details by uid
	public function getSessionNote2_byUID( $uid ){
		$this->reconnectDb();
		// get session note 1
		$sql = "Select * from fllc_session_note_2 where sn2_uid = ".$uid." and sn2_valid = 1";

		$query = $this->db->query($sql);
		$this->closeDb();

		return $query->first_row();
	}

	// get session note details by uid
	public function getSessionNote1_byUID( $uid ){
		$this->reconnectDb();
		// get session note 1
		$sql = "Select * from fllc_session_note_1 where sn_uid = ".$uid." and sn_valid = 1";
		$query = $this->db->query($sql);
		$this->closeDb();

		return $query->first_row();
	}

	public function getSessionNoteCount_byUID( $uid ){
		$this->reconnectDb();
		// get session note 1
		$sql = "Select sn_id, count(*) as cnt from fllc_session_note_1 where sn_uid = ".$uid." and sn_valid = 1";

		$query = $this->db->query($sql);
		$this->closeDb();

		return $query->first_row();
	}

	public function getSessionNote2Count_byUID( $uid ){
		$this->reconnectDb();
		// get session note 1
		$sql = "Select sn2_id, count(*) as cnt from fllc_session_note_2 where sn2_uid = ".$uid." and sn2_valid = 1";

		$query = $this->db->query($sql);
		$this->closeDb();

		return $query->first_row();
	}

	// get diet advice details by uid
	public function getAdvice_byUID( $uid ){
		$this->reconnectDb();
		// get advice
		$sql = "Select * from fllc_dietitian_advice where da_uid = ".$uid." and da_valid = 1";

		$query = $this->db->query($sql);
		$this->closeDb();

		return $query->first_row();
	}

	public function getAdviceCount_byUID( $uid ){
		$this->reconnectDb();
		// get session note 1
		$sql = "Select da_id, count(*) as cnt from fllc_dietitian_advice where da_uid = ".$uid." and da_valid = 1";

		$query = $this->db->query($sql);
		$this->closeDb();

		return $query->first_row();
	}

	public function getUserDetails_byUID( $uid ){
		$this->reconnectDb();
		$sql = 'select userid, CONCAT( fllc_user.firstname, " ", fllc_user.lastname ) as name from fllc_user where uid = '.$uid;

		$query = $this->db->query($sql);
		$this->closeDb();

		return $query->first_row();
	}

	public function getUser_byID( $uid ){
		$this->reconnectDb();
		$sql = 'select * from fllc_user left join fllc_user_insurance as a on a.uid = fllc_user.uid where fllc_user.uid = '.$uid;

		$query = $this->db->query($sql);
		$this->closeDb();

		return $query->first_row();
	}

	public function getSessionNoteDetail1( $userid ){
		$this->reconnectDb();
		$clientEmail = mysql_real_escape_string( $userid );
		$sql = 'select * from fllc_session_note_1 where sn_userid = "'.$clientEmail.'" and sn_valid = 1';

		$query = $this->db->query($sql);
		$this->closeDb();

		return $query->first_row();
	}

	public function getClientNameDetails( $diet_email ){
		$this->reconnectDb();
		$dietitian = mysql_real_escape_string( $diet_email );
		// $sql = "SELECT * from fllc_user WHERE CONCAT( firstname, ' ', lastname ) like '%".$client."%'";
		$sql = "SELECT fllc_user.uid, CONCAT( fllc_user.firstname, ' ', fllc_user.lastname ) as name FROM `fllc_user` left join fllc_appointments on fllc_appointments.userid = fllc_user.userid left join fllc_dietitian on fllc_appointments.dietitian_id = fllc_dietitian.dietitian_id where fllc_dietitian.email = '".$dietitian."' ";

		$query = $this->db->query($sql);
		$this->closeDb();

		return $query->result();
	}

	public function getImpactByID( $dietitian_id ){
		$this->reconnectDb();
		$id = mysql_real_escape_string( $dietitian_id );
		$sql = "SELECT i.*, d.first_name, d.last_name FROM fllc_dietitian_impact as i 
		left join fllc_dietitian as d on d.dietitian_id = i.di_dietitian_id where i.di_dietitian_id = ".$id;
		$query = $this->db->query($sql);
		$this->closeDb();

		return $query->result();
	}

	public function getAllPublicImpact(){
		$this->reconnectDb();
		$id = mysql_real_escape_string( $dietitian_id );
		$sql = "SELECT i.*, d.first_name, d.last_name FROM fllc_dietitian_impact as i 
		left join fllc_dietitian as d on d.dietitian_id = i.di_dietitian_id where i.di_status = 1";
		$query = $this->db->query($sql);
		$this->closeDb();

		return $query->result();
	}

	public function getDietitianByID( $diet_id ){
		$this->reconnectDb();
		$sql = "SELECT * FROM fllc_dietitian WHERE dietitian_id = ".$diet_id;
		$query = $this->db->query($sql);
		$this->closeDb();

		return $query->first_row();
	}

	public function saveImpact( $id, $title, $details, $di_status, $by = 0 ){
		$this->reconnectDb();

		$title = mysql_real_escape_string( $title );
		$details = mysql_real_escape_string( $details );
		$by = mysql_real_escape_string( $by );
		$now = date( 'c' );
		$sql = "INSERT INTO fllc_dietitian_impact ( di_dietitian_id, di_title, di_details, di_status, di_created_by, di_date_created, di_date_updated ) 
		VALUES (".$id.",'".$title."', '".$details."', ".$di_status.", ".$by.", '".$now."', '".$now."')";
		$query = $this->db->query($sql);
		$this->closeDb();

		$dietitian_details = $this->getDietitianByID( $id );

		if( $by > 0 ){
			$subject = "RD Impact by ".$dietitian_details->last_name;
			$message = "RD ".$dietitian_details->first_name.' '.$dietitian_details->last_name." added impact to RD impact";
			$headers = "From: ".$dietitian_details->first_name.' '.$dietitian_details->last_name."<".$dietitian_details->email.">";
			$this->mail('filart.ervin@gmail.com', $subject, $message, $headers );
		}

		return $query;
	}

	public function updateImpactStatus( $di_id, $status ){
		$this->reconnectDb();

		$sql = "UPDATE fllc_dietitian_impact SET di_status = ".$status." WHERE di_id = ".$di_id;
		$query = $this->db->query($sql);
		$this->closeDb();

		return $query;
	}

	public function getGoalMeter(){
		$this->reconnectDb();

		$sql = "SELECT * FROM fllc_goalmeter where gm_valid = 1";
		$query = $this->db->query($sql);
		$this->closeDb();

		return $query->first_row();
	}

	public function saveGoalMeter( $val, $max ){
		$this->reconnectDb();
		//set prev val, max to valid : 0
		$sql = "UPDATE fllc_goalmeter SET gm_valid = 0 WHERE gm_valid = 1";
		$query = $this->db->query($sql);

		$now = date( 'c' );
		$sql1 = "INSERT INTO fllc_goalmeter value('', ".$max.", ".$val.", 1, '".$now."' )";
		$query1 = $this->db->query($sql1);

		$this->closeDb();

		return $query1;
	}

	public function getCustomerPerPage( $limit, $page, $searchName ){
		$this->reconnectDb();
		$start = 0;
		if( $page > 0 ){
			$start = $page*$limit;
		}
		$sql = 'SELECT * FROM fllc_user WHERE usertype="customer"';
		if( $searchName != "" ){
			$sql .= ' AND ( CONCAT( firstname, " ", lastname ) LIKE "%'.$searchName.'%" )';
		}
		$sql .=' ORDER BY lastname limit '.$start.','.$limit;
		
		$query = $this->db->query($sql);
		$this->closeDb();
		return $query->result();
	}

	public function countCustomers( $searchName ){
		$this->reconnectDb();
		$sql= 'SELECT count(*) as cust_count FROM fllc_user WHERE usertype="customer"';
		if( $searchName != "" ){
			$sql .= ' AND ( firstname LIKE "'.$searchName.'%" OR lastname LIKE "'.$searchName.'%" )';
		}
		$query = $this->db->query($sql);
		$this->closeDb();
		return $query->first_row();
	}

	public function closeDb() {
	  	$this->db->close();
	}

	public function reconnectDb() {
	 	$this->db->db_connect();
	}

	public function get_usertype( $userid, $pwd ) {
		$this->reconnectDb();
		
		if( ( $userid !== "" ) && ( $pwd !== "" ) ) {
		    // $query = $this->db->get_where( 'fllc_user', array( 'userid' => $userid,'pwd' => $pwd ) );
		    $query = 'SELECT * FROM fllc_user WHERE userid = "'.$userid.'" and pwd = "'.$pwd.'" ';
		    $result = $this->db->query($query);

			$this->closeDb();
		    return $result;
		}

		$this->closeDb();
	}

	public function getCategoryList() {
		$this->reconnectDb();
		// remove limit after testing
		$sql1 = 'select * from fllc_company ORDER BY company_name';
		$query1= $this->db->query( $sql1 );
		$output="";
		
		foreach ( $query1->result() as $row ){
		    $data1 = "";
		   	$data2 ="";
		   	$sql2 = 'select * from fllc_location where fllc_location.company_id="'.$row->company_id.'" ORDER BY address2';
		   	$query2 = $this->db->query($sql2);
		   	foreach ( $query2->result() as $row1 ) {
				$data1[] = $row1;
		   	}

		  	$data3["location"] = $data1;
	      	$data["company_id"] = $row->company_id;
		  	$data["company_name"] = $row->company_name;
		  	$data["locationdetails"] = $data3;
		  	$output[] = $data;
		   	unset( $data2 );
		   	unset( $data1 );
     	}
	 	
	 	$this->closeDb();
		
		return $output;
	}

	public function getLocationdata( $locationid ) {
		$this->reconnectDb();
		$sql = 'select * from fllc_location where fllc_location.location_id ='.$locationid;
		$query = $this->db->query( $sql );
		$this->closeDb();
		return $query->first_row();
	}

	public function getLocationHolidays( $locationid, $today ){
		$this->reconnectDb();
		$sql ='select * from fllc_loc_available where location_id="'.$locationid.'" and loc_available_from > "'.$today.'" ORDER BY loc_available_from';
		$query= $this->db->query( $sql );
		$this->closeDb();
		return $query;
	}

	public function getServiceDetails() {

		$this->reconnectDb();
	 	$sql = 'select * from fllc_service ORDER BY name';	 
	 	$query = $this->db->query($sql);

		return $query->result();
	}

	public function editExistingService($servicename,$description,$duration,$cost,$showprice,$serviceid) {

		$this->reconnectDb();
		$sql = 'update fllc_service set name = "'.$servicename.'", description = "'.$description.'", duration ="'.$duration.'", cost= "'.$cost.'", publish_cost = "'.$showprice.'" where service_id="'.$serviceid.'"';
		$query= $this->db->query($sql);

		if ($query) {
			echo "Service details are updated successfully";
		} else {
			echo "Service details are not updated";
		}

		$this->closeDb();

	}

	public function removeServiceDetails($serviceid) {

	$this->reconnectDb();
	   	$sql1 = 'delete from fllc_loc_srvc where service_id='.$serviceid;
	   	$query1 = $this->db->query($sql1);
	   	$sql2 = 'delete from fllc_dietitian_srvc where service_id='.$serviceid;
	   	$query2 = $this->db->query($sql2);
	   	$sql = 'delete from fllc_service where service_id='.$serviceid;
	   	$query = $this->db->query($sql);
	   	$this->closeDb();
	   	
	   	return true;
	}

	public function removeLocationdata($locationid) {

		$this->reconnectDb();
	   	$sql6 = 'delete from fllc_conference where location_id ='.$locationid;
	   	$this->db->query($sql6);
	   	$sql = 'delete from fllc_loc_srvc where location_id='.$locationid;
	   	$query = $this->db->query($sql);
	   	$sql1 = 'delete from fllc_location where location_id='.$locationid;
	   	$query = $this->db->query($sql1);
	   	$this->closeDb();

	   	return true;

	}

	public function getDietitianMembers() {
		$this->reconnectDb();
	 	$sql = 'select * from fllc_dietitian ORDER BY first_name';
		$query = $this->db->query($sql);
	 	$output = "";
		$this->closeDb();
		return $query->result();
	}

	function displayAllDietitianMembersForCategory() {
		$this->reconnectDb();
		$sql = 'select * from fllc_dietitian,fllc_dietitian_srvc,fllc_service where fllc_dietitian.dietitian_id = fllc_dietitian_srvc.dietitian_id and fllc_service.service_id = fllc_dietitian_srvc.service_id ORDER BY fllc_dietitian.first_name,fllc_dietitian.last_name';
		$query = $this->db->query($sql);
		$this->closeDb();
		return $query;
	}

	public function addDietitian($sfirstname,$slastname,$saliasname,$semail,$smobile,$showphonenumber,$smobilenotificationtextmsg,$semailnotification) {
		$this->reconnectDb();
		$sql2 = 'select * from fllc_dietitian where email = "'.$semail.'"';
		$query2 = $this->db->query($sql2);
		$sqldummy = 'select * from fllc_user where userid = "'.$semail.'"';
		$querydummy = $this->db->query($sqldummy);
		if(($query2->num_rows() == 0) && ($querydummy->num_rows() == 0)) {
			$sql = 'insert into fllc_dietitian values("", "'.$sfirstname.'", "'.$slastname.'", "'.$saliasname.'", "", "'.$semail.'", "'.$smobile.'", "'.$showphonenumber.'", "'.$smobilenotificationtextmsg.'", "'.$semailnotification.'","","","'.DEFAULTRDPWD.'","counselor","","","",1)';
			$query = $this->db->query($sql);
			if($query) {
				return 'Added new Dietitian';
				$mailsuccess = $this->mail($semail,"familyfoodllc","You have been added to the familyfoodllc as dietitian.<br> <b> Your id: </b>".$semail." <br> <b>your password:</b>".DEFAULTRDPWD." <br> Please change your password after <a href = \"".base_url() ."login/dietitianlogin\"> login </a>","");
			} else {
				return "Dietitian is not added";
			} 
		} else {
			if($query2->num_rows() != 0) {
				return "A Dietitian is already exists with this user id";
			} elseif ($querydummy->num_rows() != 0) {
			  return "This id is already registered in the system"; 
			}
		}
		$this->closeDb();
	}

	public function removeDietitianMember($dietitian_id) {
		$this->reconnectDb();
	   	$sql = 'delete from fllc_dietitian_srvc where dietitian_id ='.$dietitian_id;
	   	$query = $this->db->query($sql);
	   	// $sql1 = 'delete from fllc_dietitian where dietitian_id = '.$dietitian_id;
	   	$sql1 = 'UPDATE `fllc_dietitian` SET `status`=0 where dietitian_id = '.$dietitian_id;
	   	$query1 = $this->db->query($sql1);
	   	if ($query1) {
			return "Dietitian is deleted";
	   	} else {
			return "Dietitian is not deleted";
	   	}
	 	$this->closeDb();
	}

	public function activateDietitianMember($dietitian_id) {
		$this->reconnectDb();
	   	// $sql1 = 'delete from fllc_dietitian where dietitian_id = '.$dietitian_id;
	   	$sql1 = 'UPDATE `fllc_dietitian` SET `status`=1 where dietitian_id = '.$dietitian_id;
	   	$query1 = $this->db->query($sql1);
	   	if ($query1) {
			return "Dietitian is activated";
	   	} else {
			return "Dietitian is not activated";
	   	}
	 	$this->closeDb();
	}

	public function getCustomerList(){
		$this->reconnectDb();
		$sql= 'SELECT * FROM fllc_user WHERE usertype="customer" ORDER BY firstname limit 500';
		$query = $this->db->query($sql);
		$this->closeDb();
		return $query->result();
	}

	public function displayCustomerDetails($userId){
		$this->reconnectDb();
		$sql1 = 'select * from fllc_location,fllc_appointments,fllc_service,fllc_company,fllc_user where fllc_appointments.userid = "'.$userId.'" and fllc_service.service_id = fllc_appointments.service_id and fllc_appointments.location_id = fllc_location.location_id and fllc_location.company_id = fllc_company.company_id and fllc_appointments.userid = fllc_user.userid and fllc_appointments.booking_status = "Yes" and fllc_appointments.dietitian_id in (select dietitian_id from fllc_dietitian)';
		$query1 = $this->db->query($sql1);
		$data1 ="";
		$data2="";
		$output="";
		foreach ($query1->result() as $row1)
		{ 
			$data1[]=$row1; 
		}	

		$sql2='SELECT * FROM fllc_appointments a,fllc_dietitian s,fllc_service sv,fllc_user u,fllc_location loc WHERE u.usertype="customer" AND a.dietitian_id=s.dietitian_id  AND sv.service_id=a.service_id AND a.userid=u.userid AND a.location_id=loc.location_id AND a.userid="'.$userId.'" ORDER BY appointment_date DESC ';
		$query2 = $this->db->query($sql2);
	    foreach ($query2->result() as $row2) {
	    	$data2[]=$row2;
		}


		$data["userdetails"]= $data1;
		$data["appointmentdetails"]= $data2;
		$output[]=$data;	
		$this->closeDb();
		return json_encode( $output );
   	}

   	public function getListOfCurrentAppointmentsPerPage( $limit, $page, $searchName ){
   		$this->reconnectDb();
   		$start = 0;
		if( $page > 0 ){
			$start = $page*$limit;
		}
		$search = "";
		if( $searchName != "" ){
			$search .= 'AND ( CONCAT( usr.firstname," ", usr.lastname ) LIKE "%'.$searchName.'%" )';
		}
		$sql = 'select company_name,a.company_id,address2,b.location_id,c.appointment_date,c.appointment_time,c.booked_date,c.confirmation_number,c.confirmation_code,c.booking_status,c.booked_by,sc.name,st.first_name,st.last_name,st.dietitian_id,st.email,usr.userid,usr.firstname,usr.lastname from 
		fllc_company a,
		fllc_user usr,
		fllc_location b,
		fllc_service sc,
		fllc_appointments c,
		fllc_dietitian st
		where 
		c.location_id = b.location_id and 
		b.company_id= a.company_id  and 
		sc.service_id= c.service_id and 
		st.dietitian_id=c.dietitian_id and
		usr.userid=c.userid and c.appointment_date >= CURDATE()'.$search.' ORDER BY c.appointment_date limit '.$start.','.$limit;
		
		$query = $this->db->query($sql);
		$this->closeDb();
		
		return $query->result();

   	}

   	public function countAppointments( $searchName ){
		$this->reconnectDb();
		$sql = 'select count(*) as appointment_count from 
		fllc_company a,
		fllc_user usr,
		fllc_location b,
		fllc_service sc,
		fllc_appointments c,
		fllc_dietitian st
		where 
		c.location_id = b.location_id and 
		b.company_id= a.company_id  and 
		sc.service_id= c.service_id and 
		st.dietitian_id=c.dietitian_id and
		usr.userid=c.userid and c.appointment_date >= CURDATE() ';
		if( $searchName != "" ){
			$sql .= ' AND ( CONCAT( usr.firstname," ", usr.lastname ) LIKE "%'.$searchName.'%" )';
		}
		$query = $this->db->query($sql);
		$this->closeDb();
		return $query->first_row();
	}

   	public function getListOfAllCurrentAppointments() {
		$this->reconnectDb();

		$sql = 'select company_name,a.company_id,address2,b.location_id,c.appointment_date,c.appointment_time,c.booked_date,c.confirmation_number,c.confirmation_code,c.booking_status,c.booked_by,sc.name,st.first_name,st.last_name,st.dietitian_id,st.email,usr.userid,usr.firstname,usr.lastname from 
		fllc_company a,
		fllc_user usr,
		fllc_location b,
		fllc_service sc,
		fllc_appointments c,
		fllc_dietitian st
		where 
		c.location_id = b.location_id and 
		b.company_id= a.company_id  and 
		sc.service_id= c.service_id and 
		st.dietitian_id=c.dietitian_id and
		usr.userid=c.userid and c.appointment_date >= CURDATE() ORDER BY c.appointment_date DESC';

		$query = $this->db->query($sql);
		$this->closeDb();
		
		return $query->result();
	}

	public function displayAllDietitians($serviceid) {
		$this->reconnectDb();

		$sql = 'select * from fllc_dietitian ORDER BY first_name';
		$query = $this->db->query($sql);
		$this->closeDb();

		return $query;
	}

	public function submitChangeDietitian($dietitianid,$confirmnumber) {
		$this->reconnectDb();

		$sql = 'update fllc_appointments set dietitian_id= "'.$dietitianid.'" where confirmation_number = "'. $confirmnumber. '"';
		$query = $this->db->query($sql);

		$this->closeDb();

		return $query;
	}

	public function displayReviews() {
		$this->reconnectDb();
		
		$sql = "select * from fllc_reviews";
		$query = $this->db->query($sql);

		$this->closeDb();

		return $query;
	}

	public function getAllCompaniesLocationsServicesandDietitians() {
		$this->reconnectDb();

		$sql = "select company_id as id,company_name as name,'' as secondname,'company' as table_check from fllc_company union select  service_id,name,'','service' as table_check from fllc_service union select dietitian_id,first_name,last_name,'dietitian' as table_check from fllc_dietitian union select location_id,address2,'','location' as table_check from  fllc_location order by table_check,name;";
		$query = $this->db->query($sql);
		$this->closeDb();
		
		return $query;
	}

	public function getAllLocationNames($company_id) {
		$this->reconnectDb();
		
		if ( $company_id != "" ) {
			$sql = "select * from fllc_location where company_id ='".$company_id."' ORDER BY address2";
		} else {
			$sql = "select * from fllc_location ORDER BY address2";
		}
		$query = $this->db->query($sql);
		$this->closeDb();
		
		return $query->result();
	}

	public function getAllCompanyNames() {
		$this->reconnectDb();

		$sql = "select * from fllc_company ORDER BY company_name";
		$query = $this->db->query($sql);
		$this->closeDb();

		return $query;
	}

	public function getListOfAppointmentsBasedOnCriteria($client_name,$singledate,$fromdate,$todate,$company_id,$locationid,$serviceid,$dietitian_id) {
		$this->reconnectDb();
			
		$sql = 'select c.reason,company_name,a.company_id,address2,b.location_id,c.appointment_date,c.appointment_time,c.timezone,c.booked_date,c.confirmation_number,c.confirmation_code,c.booking_status,c.booked_by,sc.name,sc.cost,st.first_name,st.last_name,st.email,st.dietitian_id,usr.userid,usr.firstname,usr.lastname,usr.phonenumber,usrins.insurance_company,usrins.insurance_id,conf.conf_room from 
		fllc_company a,
		fllc_user usr,
		fllc_location b,
		fllc_service sc,
		fllc_appointments c,
		fllc_dietitian st,
		fllc_conference conf,
		fllc_user_insurance usrins
		where 
		c.userid = usr.userid and
		c.location_id = b.location_id and 
		b.company_id= a.company_id  and 
		sc.service_id= c.service_id and 
		st.dietitian_id=c.dietitian_id and
		usrins.userid = c.userid and
		conf.conference_id = c.conference_id ';

		if ( $singledate != "") {
			$dates = explode( '-', $singledate );
			$propDate = $dates[2]."-".$dates[0]."-".$dates[1];
			$sql = $sql .' and c.appointment_date = "'.$propDate.'"';
		}
		if( $client_name != "" ){
			$sql = $sql .' and concat( firstname, " " , lastname ) LIKE "'.$client_name.'%%"';
		}
		if ( ($fromdate != "") && ($todate != "")) {
			$dateFrom = explode( '-', $fromdate );
			$dateTo = explode( '-', $todate );
			$propDateFrom = $dateFrom[2]."-".$dateFrom[0]."-".$dateFrom[1];
			$propDateTo = $dateTo[2]."-".$dateTo[0]."-".$dateTo[1];
			$sql = $sql .' and c.appointment_date >= "'.$propDateFrom.'" and c.appointment_date <="'.$propDateTo.'"';
		}
		if ($company_id != "") {
			$sql = $sql . ' and b.company_id = "'.$company_id.'"';
		} 
		if($locationid != "") {
			$sql = $sql . ' and c.location_id = "'.$locationid.'"';
		}
		if($serviceid != "") {
			$sql = $sql . ' and c.service_id = "'.$serviceid.'"';
		}
		if($dietitian_id != "") {
			$sql = $sql . ' and c.dietitian_id = "'.$dietitian_id.'"';
		}

		$sql = $sql . 'GROUP BY c.confirmation_number ORDER BY c.appointment_date';

		$query = $this->db->query($sql);
		$this->closeDb();
		
		return $query->result_array();
	}

	public function getLocationForCorporateClient($company_id) {
		$this->reconnectDb();
		
		$sql = 'select * from fllc_location where company_id="'.$company_id.'" ORDER BY address2';
		$query = $this->db->query($sql);
		$this->closeDb();
		
		return $query;
	}

	public function getAllConferenceNames($locationid) {
		$this->reconnectDb();
		
		$sql = 'select * from fllc_conference where location_id = '.$locationid;
		$query = $this->db->query($sql);
		$this->closeDb();

		return $query;
	}

	public function selectDisplayedDietitianCheckboxes($locationid,$confnumber) {
		$this->reconnectDb();

		$sql = 'select * from fllc_dietitian_conference where conference_id in (select conference_id from fllc_conference where location_id="'.$locationid.'" and conf_number ="'.$confnumber.'")';
		$query = $this->db->query($sql);
		$this->closeDb();

		return $query;
	}

	public function newEditLocation($company_id,$locationid,$add1,$add2,$state,$country,$zpc,$conf1,
		$conf2,$conf3,$conf4,$conf5,$conf1dietitiancheck,$conf1dietitianuncheck,$conf2dietitiancheck,
		$conf2dietitianuncheck,$conf3dietitiancheck,$conf3dietitianuncheck,$conf4dietitiancheck,
		$conf4dietitianuncheck,$conf5dietitiancheck,$conf5dietitianuncheck,$locaAvailableDateAndTime, $notes) {
		$this->reconnectDb();
		$sqlGet = 'select * from fllc_location where location_id = '.$locationid;
		$querySelect = $this->db->query($sqlGet);
		if( $querySelect->num_rows() ){
			$sql = 'update fllc_location set company_id='.$company_id.', address1="'.$add1.'", 
			address2="'.$add2.'", city="'.$state.'", country="'.$country.'", pincode="'.$zpc.'", 
			conf_room_1="'.$conf1.'", conf_room_2="'.$conf2.'", conf_room_3="'.$conf3.'", 
			conf_room_4="'.$conf4.'", conf_room_5="'.$conf5.'", notes="'.$notes.'" where location_id='.$locationid;

			$query= $this->db->query($sql);
		}else{
			$sql = 'insert into fllc_location values("",'.$company_id.',"'.$add1.'","'.$add2.'","'.$state.'",
				"'.$country.'","'.$zpc.'","'.$conf1.'","'.$conf2.'","'.$conf3.'","'.$conf4.'","'.$conf5.'","8:00", "6:00","'.$notes.'")';

			$query = $this->db->query($sql);

			$locationid =  mysql_insert_id();
		}

		$this->newSaveLocationAvailableDates($locationid,$locaAvailableDateAndTime);

		$this->insertORUpdateConference($locationid,$conf1,1,$conf1dietitiancheck,$conf1dietitianuncheck);

		$this->insertORUpdateConference($locationid,$conf2,2,$conf2dietitiancheck,$conf2dietitianuncheck);

		$this->insertORUpdateConference($locationid,$conf3,3,$conf3dietitiancheck,$conf3dietitianuncheck);

		$this->insertORUpdateConference($locationid,$conf4,4,$conf4dietitiancheck,$conf4dietitianuncheck);

		$this->insertORUpdateConference($locationid,$conf5,5,$conf5dietitiancheck,$conf5dietitianuncheck);

		$this->closeDb();

		return "success";
	}

	public function newSaveLocationAvailableDates($locationid,$locaAvailableDateAndTime) {
		$this->reconnectDb();
		// print_r( (array) json_decode( $locaAvailableDateAndTime ) );

		$sqldelete = 'delete from fllc_loc_available where location_id= "'.$locationid.'"';

		$query = $this->db->query($sqldelete);

		$newList = (array) json_decode( $locaAvailableDateAndTime );
		
		if( count( $newList ) > 0 ){
			foreach( $newList as $date => $time ){
				// print_r( $date."=".$time[0].'-'.$time[1] );
				$sqlinsert = 'insert into fllc_loc_available values("","'.$locationid.'", "'.$date.'", "'.$date.'", "'.$time[0].'", "'.$time[1].'")';
				$this->db->query($sqlinsert);

			}
		}

		$this->closeDb();
	}

	public function insertORUpdateConference($locationid,$confname,$confnumber,$confdietitiancheck,$confdietitianuncheck) {
		$this->reconnectDb();

		$sql = 'select * from fllc_conference where location_id ="'.$locationid.'"  and conf_number ="'.$confnumber.'"';
		$query = $this->db->query($sql);
		$conferenceid = "";
		$deleted = false;
		
		if ($query->num_rows() == 0) {

           	if($confname != "" ) {

				$sql1 = 'insert into fllc_conference values("", "'.$locationid.'", "'.$confname.'", "'.$confnumber.'" , "","Available")';
				$query1 = $this->db->query($sql1);
				$conferenceid = mysql_insert_id();

			}

		} else {

		    $row = $query->row_array(); 
			if ($confname != "" ) {

				$sql1 = 'update fllc_conference set conf_room = "'.$confname.'" ,  status ="Available" where conference_id = "'.$row['conference_id'].'"';
				$query1 = $this->db->query($sql1);
				$conferenceid = $row['conference_id'];

		    } else {

			   $conferenceid = $row['conference_id'];
			   $sql1 = 'delete from fllc_conference where conference_id = "'.$row['conference_id'].'"';
			   $query1 = $this->db->query($sql1);
			   $sql2 = 'delete from fllc_dietitian_conference where conference_id = "'.$row['conference_id'].'"';
			   $query2 = $this->db->query($sql2);
			   $deleted = true;

			}

		}

		if($deleted) {

			$sqldelete = 'delete from fllc_dietitian_conference where conference_id = "'.$row['conference_id'].'"';
			$query1 = $this->db->query($sql1);

		} else {

			if (strlen($confdietitiancheck) > 0) {
				$dietitian = explode(",",$confdietitiancheck);
				$countservices = 0;

				for($i=0;$i< count($dietitian) ; $i++) {

					$sql = 'select * from fllc_dietitian_conference where conference_id = "'.$conferenceid.'" and dietitian_id ="'.$dietitian[$i].'"';
					$query = $this->db->query($sql);

					if ($query->num_rows() == 0) {

						$sql1 = 'insert into fllc_dietitian_conference values("", "'.$conferenceid.'", "'.$dietitian[$i].'")';
						$query1 = $this->db->query($sql1);

					}

				}

			} 


			if (strlen($confdietitianuncheck) > 0) {

				$dietitian = explode(",",$confdietitianuncheck);
				
				for($i=0;$i<count($dietitian);$i++) {

				  $sql = 'delete from fllc_dietitian_conference where conference_id = "'.$conferenceid.'" and dietitian_id ="'.$dietitian[$i].'"';
				  $query = $this->db->query($sql);

				}

			}

		}

		$this->closeDb();

	}

	public function calender1($cmp_id,$date,$locationid,$confid){
		$this->reconnectDb();
		
		$sql = "select distinct a.location_id,a.address2,a.company_id, b.appointment_date,b.appointment_time,b.userid,us.firstname,us.lastname,sc.name as service_name,sc.description,cf.conf_room 
			from fllc_location a, fllc_appointments b, fllc_user us, fllc_service sc ,fllc_conference cf  
			where a.location_id=b.location_id and b.userid=us.userid and b.service_id=sc.service_id and 
			b.conference_id=cf.conference_id and a.company_id=".$cmp_id." and b.appointment_date='".$date."' and 
			b.location_id='".$locationid."' and b.conference_id = '".$confid."' ORDER BY  str_to_date(concat(time(b.appointment_time),' ',substring_index(b.appointment_time,' ',-1)),'%r');";

		$query = $this->db->query($sql);
		$this->closeDb();

		return $query;
	}

	public function saveEditDietitianMember($dietitian_id,$sfirstname,$slastname,$saliasname,$semail,$smobile,$showphonenumber,$smobilenotificationtextmsg,$semailnotification) {
		$this->reconnectDb();
		
		$sql = 'update fllc_dietitian set first_name="'.$sfirstname.'", last_name ="'.$slastname.'", alias_name="'.$saliasname.'", email="'.$semail.'", phone="'.$smobile.'", phone_status="'.$showphonenumber.'", notify_msg= "'.$smobilenotificationtextmsg.'", notify_email ="'.$semailnotification.'" where dietitian_id='.$dietitian_id;

		$query1 = $this->db->query($sql);

		return $query1;

		$this->closeDb();
	}

	public function saveavailableDates($availabledatefrom,$dietitian_id,$availabledateto,$company_id,$locationid,$conferenceid) {
		$this->reconnectDb();

		$sql = 'select * from fllc_dietitian_availability where dietitian_id="'.$dietitian_id.'" and (available_date_from BETWEEN "'.$availabledatefrom.'" and "'.$availabledateto.'" OR available_date_to BETWEEN "'.$availabledatefrom.'" and "'.$availabledateto.'") ';
		
		$query=$this->db->query($sql);
		
		if($query->num_rows() == 0) {

			$sql1 = 'insert into fllc_dietitian_availability values("","'.$availabledateto.'","'.$availabledatefrom.'", "'.$company_id.'", "'.$locationid.'", "'.$conferenceid.'", "'.$dietitian_id.'")';
			$query=$this->db->query($sql1);
			$this->closeDb();
			
			if( !$query ){
				return false;
			}
			// return "available date  is stored";

		}else{
			return $query->result();
		}

		//check fllc_dietitian_conference table
		$sqlCheck = 'select * from fllc_dietitian_conference where conference_id = '.$conferenceid.' and dietitian_id = '.$dietitian_id;
		$queryCheck = $this->db->query($sqlCheck);

		if($queryCheck->num_rows() == 0) {
			$sqlInsert = 'insert into fllc_dietitian_conference values( "",'.$conferenceid.','.$dietitian_id.' )';
			$queryInsert = $this->db->query($sqlInsert);
			if( !$queryInsert ){
				return false;
			}
		}

		$sqlSelectAppointment = 'select * from fllc_appointments  where dietitian_id = 0 AND location_id = '.$locationid.' AND conference_id = '.$conferenceid.' AND appointment_date between "'.$availabledatefrom.'" AND "'.$availabledateto.'"' ;
		
		$queryAppointments = $this->db->query($sqlSelectAppointment);

		if($queryAppointments->num_rows() > 0) {
			$sqlUpdate = 'update fllc_appointments set dietitian_id = "'.$dietitian_id.'" where dietitian_id = 0 AND location_id = '.$locationid.' AND conference_id = '.$conferenceid.' AND appointment_date between "'.$availabledatefrom.'" AND "'.$availabledateto.'"' ;
			$updateRes = $this->db->query($sqlUpdate);

			if( !$updateRes ){
				return false;
			}
		}

		return true;
		

		// else {

		// 	$this->closeDb();

		// 	return false;
		// 	// return "This available date is already set for the user";

		// }

	}

	function deleteAppointments($confirmationid,$date) {
		$this->reconnectDb();

		$sql1 = 'select * from fllc_appointments where fllc_appointments.confirmation_number ="'.$confirmationid.'"';
		$query1 = $this->db->query($sql1);
		$row = $query1->row_array();

		$sqladminmail = 'select company_name,a.company_id,address2,b.location_id,c.appointment_date,c.appointment_time,c.timezone,c.booked_date,c.confirmation_number,c.confirmation_code,c.booking_status,c.booked_by,sc.name,st.first_name,st.last_name,st.email,usr.userid,usr.phonenumber,usr.firstname,usr.lastname,conf.conf_room from 
		fllc_company a,
		fllc_user usr,
		fllc_location b,
		fllc_service sc,
		fllc_appointments c,
		fllc_dietitian st ,
		fllc_conference conf
		where 
		c.location_id = b.location_id and 
		b.company_id= a.company_id  and 
		sc.service_id= c.service_id and 
		st.dietitian_id=c.dietitian_id and
		conf.conference_id = c.conference_id and 
		usr.userid=c.userid and c.confirmation_number = '. $confirmationid. ' ORDER BY c.appointment_date DESC';

		$queryadminmail = $this->db->query($sqladminmail);
		$rowadminmail = $queryadminmail->row_array();

		$sql = 'delete from fllc_appointments where fllc_appointments.confirmation_number ="'.$confirmationid.'"';

		$query=$this->db->query($sql);

		$message = "";

		if ($queryadminmail->num_rows() > 0 ) {
			$message = "<br/> Reference: ".$rowadminmail['confirmation_code']."".$rowadminmail['confirmation_number']."<br/>";
			$message = $message. "Customer : ".$rowadminmail['firstname']." ".$rowadminmail['lastname']."<br/>";
			$message = $message. "Email : ".$rowadminmail['userid']."<br/>";
			$message = $message. "Contact Number : ".$rowadminmail['phonenumber']."<br/>";
			$message = $message. "Company : ".$rowadminmail['company_name']."<br/>";
			$message = $message. "Location: ".$rowadminmail['address2']."<br/>";	
			$message = $message . "Conference room#: ".$rowadminmail['conf_room']."<br/>";	
			$message = $message. "Appointment Date: ".$rowadminmail['appointment_date']."<br/>";
			$message = $message . "Appointment time: ".$rowadminmail['appointment_time']." ".$rowadminmail['timezone']."<br/>";
			$message = $message . "Dietitian: ".$rowadminmail['first_name']." ".$rowadminmail['last_name']."<br/>";
			$message = $message . "Service: ".$rowadminmail['name']."<br/>";
		}

		if ($query) {
			$mailsuccess = $this->mail($row['userid'],DELETEAPPOINTMENTSUBJECT,DELETEAPPOINTMENTMESSAGE . base_url() . DELETEAPPOINTMENTMESSAGE1 . base_url() . DELETEAPPOINTMENTMESSAGE2 ,"");
			$mailsuccess1 = $this->mail('hannah@familyfoodllc.com',FFLLCOUSTEMERCANCELLATIONSUBJECT,FFLLCOUSTEMERCANCELLATIONBODY1 ."<br />".$message ,"");
			$this->closeDb();
			return "success";
		} else {
			$this->closeDb();
		  	return "fail";
		}

	}

	public function externalBlockingTimeslots($serviceid,$appointmentdate,$location_id,$appointmenttime) {
		$appointmenttimes = explode(",",$appointmenttime);
		$output = "";
		for($j =0 ;$j < count($appointmenttimes); $j++) {
			$output1 = "";
			$sql = 'select DISTINCT fllc_dietitian_srvc.dietitian_id from fllc_dietitian_srvc, fllc_dietitian_availability where fllc_dietitian_srvc.service_id = "'.$serviceid.'" and fllc_dietitian_srvc.dietitian_id  IN (select dietitian_id from fllc_dietitian_availability where fllc_dietitian_availability.available_date_from <= "'.$appointmentdate.'" and "'.$appointmentdate.'" <= fllc_dietitian_availability.available_date_to )';
			$query=$this->db->query($sql);
			$numberOfDietitian = $query->num_rows();
			$count = 0;
			foreach($query->result() as $row) {
				$sql1 = 'select * from fllc_appointments where fllc_appointments.appointment_date = "'.$appointmentdate.'" and fllc_appointments.appointment_time = "'.$appointmenttimes[$j].'" and dietitian_id ="'.$row->dietitian_id.'" and location_id = "'.$location_id.'"and booking_status in ("Yes","Pending") ';
				$query1 = $this->db->query($sql1);

				if ($query1->num_rows() == 0 ){
					$dietitian_idtobebooked = $row->dietitian_id;
					$sqlconf = 'select * from fllc_dietitian_conference,fllc_conference where location_id = "'.$location_id.'" and fllc_dietitian_conference.dietitian_id = "'.$dietitian_idtobebooked.'" and fllc_dietitian_conference.conference_id = fllc_conference.conference_id and fllc_conference.conference_id not in (select conference_id from fllc_appointments where fllc_appointments.location_id = "'.$location_id.'" and fllc_appointments.appointment_date = "'.$appointmentdate.'" and fllc_appointments.appointment_time = "'.$appointmenttimes[$j].'") and fllc_conference.conference_id in (select conference_id from fllc_dietitian_availability where available_date_from <="'.$appointmentdate.'" and "'.$appointmentdate.'"<= available_date_to )';
					$queryconf = $this->db->query($sqlconf);

					if($queryconf->num_rows() > 0) {
						break;
					}

					$dietitian_idtobebooked = "";
					$count = $count +1;
				} else {
					$count = $count +1;
				}
			}

			$output1['location_id'] = $location_id;
			$output1['appointment_date'] = $appointmentdate;
			$output1['appointment_time'] = $appointmenttimes[$j];
			
			if ($count == $numberOfDietitian) {    
				$output1['status'] = "block";
			} else {
				$output1['status'] = "unblock";
			}
			
			$output[] = $output1;
		}
		return $output;
	}

	function deleteAppointmentsInPening($confirmationid,$date) {
		$this->reconnectDb();

		$sql1 = 'select * from fllc_appointments where fllc_appointments.confirmation_number ="'.$confirmationid.'"';
		$query1 = $this->db->query($sql1);
		$row = $query1->row_array();
		$sql = 'delete from fllc_appointments where fllc_appointments.confirmation_number ="'.$confirmationid.'"';
		$query=$this->db->query($sql);

		if ($query) {
			$this->closeDb();
		  	return "success";
		} else {
			$this->closeDb();
		  	return "fail";
		}
	}

	public function bookAppointmentInPendingState($userid,$serviceid,$appointmentdate,$appointmenttime,$location_id,$appointmentnumber,$bookedby,$fname,$lname,$phone,$clickalreadyuser,$reason,$timezone,$insurancename,$insuranceid){

		$this->reconnectDb();
		$checkcserviceid = $this->session->userdata('cservice');
		$checkcuserid = $this->session->userdata('cuser'); 
		$output = "";
		$output['Confirmation_Number'] =  "";
		$output['confimessage'] = "";
		$output['Conferenceroom'] = "";
		$output['Locationname'] = "";
		$output['confirmation_code'] = "";
		$output['appointmentmodified'] = "";

		if($clickalreadyuser == "Yes") {
			$cserviceid = $this->session->userdata('cservice');
			$cuserid = $this->session->userdata('cuser');
			if(($cserviceid  == "") && ($cuserid == "")) {
			    $this->session->set_userdata('cuser',$userid);
			}
		}

		$sqlstart = 'select * from fllc_user where userid = "'.$userid.'"';
		$querystart = $this->db->query($sqlstart);

		if ($querystart->num_rows() == 0) {
			$sqlinsert = 'insert into fllc_user values("'.$userid.'", "'.DEFAULTCUSTOMERPWD.'","customer","'.$fname.'","'.$lname.'","","","'.$phone.'","",0)';
			$this->db->query($sqlinsert);
			$mailsuccess = $this->mail($userid,"familyfoodllc","You have been added to the familyfoodllc.<br> <b> Your id: </b>".$userid." <br> <b>your password:</b>".DEFAULTCUSTOMERPWD." <br> Please change your password after <a href = \"".base_url() ."login/userlogin\"> login </a>","");
		} else {
			$sqlupdate = 'update fllc_user set firstname = "'.$fname.'" , lastname = "'.$lname.'" , phonenumber = "'.$phone.'" where userid = "'.$userid.'"';
			$this->db->query($sqlupdate);
		}

		$this->setInsuranceAndUserDeails($userid,$insurancename,$insuranceid);

		$sqlfirst = 'select * from fllc_appointments where fllc_appointments.appointment_date = "'.$appointmentdate.'" and fllc_appointments.appointment_time = "'.$appointmenttime.'" and userid = "'.$userid.'"';

		$queryfirst = $this->db->query($sqlfirst);

		$dietitian_idtobebooked = "";
		$conferenceroom  = "";

		if ($queryfirst->num_rows() == 0) {
			$sql = 'select DISTINCT fllc_dietitian_srvc.dietitian_id from fllc_dietitian_srvc, fllc_dietitian_availability where fllc_dietitian_srvc.service_id = "'.$serviceid.'" and fllc_dietitian_srvc.dietitian_id  IN (select dietitian_id from fllc_dietitian_availability where fllc_dietitian_availability.available_date_from <= "'.$appointmentdate.'" and "'.$appointmentdate.'" <= fllc_dietitian_availability.available_date_to )';
			$query=$this->db->query($sql);
			$numberOfDietitian = $query->num_rows();
			$count = 0;

			foreach($query->result() as $row) {
			   $sql1 = 'select * from fllc_appointments where fllc_appointments.appointment_date = "'.$appointmentdate.'" and fllc_appointments.appointment_time = "'.$appointmenttime.'" and dietitian_id ="'.$row->dietitian_id.'" and booking_status in ("Yes","Pending") ';
			   $query1 = $this->db->query($sql1);
			   if ($query1->num_rows() == 0 ){
				   	$dietitian_idtobebooked = $row->dietitian_id;
				   	$sqlconf = 'select * from fllc_dietitian_conference,fllc_conference where location_id = "'.$location_id.'" and fllc_dietitian_conference.dietitian_id = "'.$dietitian_idtobebooked.'" and fllc_dietitian_conference.conference_id = fllc_conference.conference_id and fllc_conference.conference_id not in (select conference_id from fllc_appointments where fllc_appointments.location_id = "'.$location_id.'" and fllc_appointments.appointment_date = "'.$appointmentdate.'" and fllc_appointments.appointment_time = "'.$appointmenttime.'") and fllc_conference.conference_id in (select conference_id from fllc_dietitian_availability where available_date_from <="'.$appointmentdate.'" and "'.$appointmentdate.'"<= available_date_to )';
				   	$queryconf = $this->db->query($sqlconf);
					   	if($queryconf->num_rows() > 0) {
					        $rowconf = $queryconf->row_array();
							$conferenceroom = $rowconf['conference_id'];
							break;
					   	}
					$dietitian_idtobebooked = "";
					$count = $count +1;
			   	} else {
					$count = $count +1;
			   	}
			}

			if ($count == $numberOfDietitian) {
			    $output['Confirmation_Number'] =  "";
				$output['confimessage'] =  "Registered dietitians are not there.";
				$output['Conferenceroom'] = "";
			} else {
			  	$sql2  ='insert into fllc_appointments values("","FFLLC","'.$userid.'", "'.$dietitian_idtobebooked.'", "'.$serviceid.'", "'.$appointmentdate.'", "'.$appointmenttime.'", "Pending" ,"'.$location_id.'", "'.$bookedby.'","'.$reason.'", "'.$conferenceroom.'","'.$timezone.'",NOW(),CURRENT_TIME(),"No","No","No","No")';
			  	$query1 = $this->db->query($sql2);
			  	$output['Confirmation_Number'] =  mysql_insert_id();
			   	$output['confirmation_code'] = "FFLLC";
			  	$output['Conferenceroom'] = $conferenceroom;
			  	if($checkcserviceid != "" ) {
			   		$output['confimessage'] =  "Successfully scheduled appointment";
			  	} else {
			  	$output['confimessage'] =  "You have successfully scheduled your appointment";
			  	}
			}
		} else {
		    $output['Confirmation_Number'] =  "";
			$output['Conferenceroom'] = "";
			if($checkcserviceid != "" ) {
			   	$output['confimessage'] =  "Already booked this time";
			} else {
				$output['confimessage'] =  "You have already booked this time";
			}
		}

		$this->closeDb();
		
		return  $output;
	}

	public function bookAppointment($userid,$serviceid,$appointmentdate,$appointmenttime,$location_id,$appointmentnumber,$bookedby,$fname,$lname,$phone,$clickalreadyuser,$reason,$timezone,$insurancename,$insuranceid,$pendingAppointment,$confroom,$company){
		$this->reconnectDb();

		$checkcserviceid = $this->session->userdata('cservice');
		$checkcuserid = $this->session->userdata('cuser'); 
		$output = "";
		$output['Confirmation_Number'] =  "";
		$output['confimessage'] = "";
		$output['Conferenceroom'] = $confroom;
		$output['Locationname'] = "";
		$output['confirmation_code'] = "";
		$output['appointmentmodified'] = "";

		if($appointmentnumber != "" ) {
			$sqlupdate = 'update fllc_appointments set fllc_appointments.appointment_date = "'.$appointmentdate.'" , fllc_appointments.appointment_time = "'.$appointmenttime.'" , userid = "'.$userid.'" , location_id="'.$location_id.'", service_id="'.$serviceid.'" , booked_by = "'.$bookedby.'", booking_status ="Yes" where confirmation_number="'.$appointmentnumber.'"';
			$query = $this->db->query($sqlupdate);
			if($query) {
			   	$output['Confirmation_Number'] =  $appointmentnumber;
	           	$output['confimessage'] = "Appointment details are updated successfully";
			    $output['confirmation_code'] = "FFLLC";
			   	$output['appointmentmodified'] = "Yes";
			} else {
			   	$output['Confirmation_Number'] =  $appointmentnumber;
	           	$output['confimessage'] = "Appointment details are not updated";
			}
			$sqlremove = 'DELETE from fllc_appointments where confirmation_number="'.$pendingAppointment.'"';
			$query = $this->db->query($sqlremove);
		} else {
	    	if($pendingAppointment != "") {
				$sqlupdate = 'update fllc_appointments set fllc_appointments.appointment_date = "'.$appointmentdate.'" , fllc_appointments.appointment_time = "'.$appointmenttime.'" , userid = "'.$userid.'" , location_id="'.$location_id.'", service_id="'.$serviceid.'" , booked_by = "'.$bookedby.'", booking_status ="Yes" where confirmation_number="'.$pendingAppointment.'"';

				$query = $this->db->query($sqlupdate);
				if($query) {
					$sqlLocation = 'Select * from fllc_location where location_id = '.$location_id;
					$queryLoc = $this->db->query($sqlLocation);
					$locRow = $queryLoc->row_array();
				   	$output['Confirmation_Number'] =  $pendingAppointment;
		           	$output['confimessage'] = "You have successfully scheduled your appointment";
				    $output['confirmation_code'] = "FFLLC";
				   	$output['appointmentmodified'] = "No";
				   	$message = "An Appointment has been booked by ".$fname.", ".$lname."(".$userid.") on ".$appointmentdate." at ".$appointmenttime." with ".$company." in ".$locRow['address2'].",".$locRow['city'];
				} else {
				   	$output['Confirmation_Number'] =  $pendingAppointment;
		           	$output['confimessage'] = "Appointment details are not updated";
				}
			}
		}

		$this->closeDb();

		return  $output;

	}

	public function publishThis($reviewID){
		$this->reconnectDb();
		if( $reviewID ){
			$sqlupdate = 'update fllc_reviews set publish_status = "Yes" where review_id = '.$reviewID;
			$output = $this->db->query($sqlupdate);

			if( $output ){
				return "Review is published";
			}else{
				return "Failed to publish review";
			}
		}
		$this->closeDb();
	}


	public function getUserDetailsForEdit($userid) {
		$this->reconnectDb();

		$cuser = $this->session->userdata('cuser');
		$conuser = $this->session->userdata('conuser');
		$sql ="";

		if($cuser != "") {
			$sql = 'select * from fllc_user where userid="'.$userid.'"';
		} elseif ($conuser != "") {
			$sql = 'select * from fllc_dietitian where email="'.$userid.'"';
		}
		
		$query = $this->db->query($sql);
		$this->closeDb();

		return $query;
	}

	public function updateprofile($firstname,$lastname,$birthday,$phoneno,$address,$gender) {
		$this->reconnectDb();

		$cuser = $this->session->userdata('cuser');
		$conuser = $this->session->userdata('conuser');

		if($cuser != "") {
			$userid = $this->session->userdata('cuser');
			$sql = 'update fllc_user set  firstname="'.$firstname.'",  lastname ="'.$lastname.'",  gender="'.$gender.'",  birthday ="'.$birthday.'",  phonenumber ="'. $phoneno .'",  address = "'. $address .'" where  userid="'. $this->session->userdata('cuser').'"'; 
		} elseif ( $conuser != "" ) {
			$userid= $this->session->userdata('cuser');
			$sql = 'update fllc_dietitian set  first_name="'.$firstname.'",  last_name ="'.$lastname.'",  gender="'.$gender.'",  birthday ="'.$birthday.'",  phone ="'. $phoneno .'",  address = "'. $address .'" where  email="'. $this->session->userdata('conuser').'"';
		}

		$query=$this->db->query($sql);
		$this->closeDb();

		return $query;
	}

	public function getListOfAllAppointments() {
		$this->reconnectDb();

		$sql = 'select c.reason,company_name,a.company_id,address2,b.location_id,c.appointment_date,c.appointment_time,c.timezone,c.booked_date,c.confirmation_number,c.confirmation_code,c.booking_status,c.booked_by,sc.name,sc.cost,st.first_name,st.last_name,st.email,st.dietitian_id,usr.userid,usr.firstname,usr.lastname,usr.phonenumber,usrins.insurance_company,usrins.insurance_id,conf.conf_room from 
		fllc_company a,
		fllc_user usr,
		fllc_location b,
		fllc_service sc,
		fllc_appointments c,
		fllc_dietitian st,
		fllc_conference conf,
		fllc_user_insurance usrins
		where 
		c.location_id = b.location_id and 
		b.company_id= a.company_id  and 
		sc.service_id= c.service_id and 
		st.dietitian_id=c.dietitian_id and
		usrins.userid = usr.userid and
		conf.conference_id = c.conference_id and 
		usr.userid=c.userid ORDER BY c.appointment_date DESC';

		$query = $this->db->query($sql);
		$this->closeDb();

		return $query;

	}

	public function updatePassword($newpwd,$userid) {
		$this->reconnectDb();

		$cuser = $this->session->userdata('cuser');
		$conuser = $this->session->userdata('conuser');
		$sql ="";

		if($cuser != "") {
			$userid = $this->session->userdata('cuser');
			$sql = 'update fllc_user set  pwd="'.$newpwd.'" where  userid="'. $userid.'"'; 
		} elseif ( $conuser != "" ) {
			$sql = 'update fllc_dietitian set  password="'.$newpwd.'" where  email="'. $conuser.'"'; 
		}

		$query= $this->db->query($sql);
		$this->closeDb();

		return $query;

	}


	public function registerDetails($email,$password,$confpwd,$phoneno) {
		$this->reconnectDb();
		$sqlexists = 'select * from fllc_user where userid = "'.$email.'"';
		$queryexists = $this->db->query($sqlexists);
		$sql2 = 'select * from fllc_dietitian where email = "'.$email.'"';
		$query2 = $this->db->query($sql2);
		if(($query2->num_rows() == 0) && ($queryexists->num_rows() == 0)) {
			$sql = 'insert into fllc_user values ("'.$email.'", "'.$password.'", "customer", "","","","","'.$phoneno.'", "",0)';
			$query = $this->db->query($sql);
			if($query) {
	        	$this->closeDb();
			  return 0;
			} 
		} else {
	        if($queryexists->num_rows() != 0) {
				return 1;
			} elseif ($query2->num_rows() != 0) {
			  	return 2;
			}
		}
	}

	//new function
	public function getDietitianAvailability( $dietitian_id ){
		$this->reconnectDb();

		// $sql = 'select * from fllc_dietitian_conference, fllc_company, fllc_location, fllc_conference '.
		// 	'where fllc_dietitian_conference.conference_id = fllc_conference.conference_id '.
		// 	// 'AND fllc_dietitian_availability.location_id = fllc_location.location_id '.
		// 	'AND fllc_conference.location_id = fllc_location.location_id '.
		// 	'AND fllc_location.company_id = fllc_company.company_id '.
		//  	'AND fllc_dietitian_conference.dietitian_id = '.$dietitian_id;
		$sql = 'select * from fllc_dietitian_availability, fllc_company, fllc_location, fllc_conference '.
			'where fllc_dietitian_availability.company_id = fllc_company.company_id '.
			'AND fllc_dietitian_availability.location_id = fllc_location.location_id '.
			'AND fllc_dietitian_availability.conference_id = fllc_conference.conference_id '.
			'AND fllc_dietitian_availability.available_date_to > NOW() '.
		 	'AND dietitian_id = '.$dietitian_id;

		$query= $this->db->query( $sql );

		$this->closeDb();

		return $query->result_array();
	}

	public function cancelDietitianAppointment( $id ){
		$this->reconnectDb();

		// $sql = 'select * from fllc_dietitian_availability, fllc_dietitian, fllc_company, fllc_location, fllc_conference '.
		// 	'where fllc_dietitian_availability.company_id = fllc_company.company_id '.
		// 	'AND fllc_dietitian_availability.location_id = fllc_location.location_id '.
		// 	'AND fllc_dietitian_availability.conference_id = fllc_conference.conference_id '.
		// 	'AND fllc_dietitian_availability.dietitian_id = fllc_dietitian.dietitian_id '.
		//  	'AND id = '.$id;

		// $query= $this->db->query( $sql );
		// $locAvail = $query->first_row();
		
		$sql1 = 'select * from fllc_dietitian_availability where id = '.$id;
		$query1 = $this->db->query( $sql1 );
		$result = $query1->first_row();

		$sqlDelete = 'delete from fllc_dietitian_availability where id = '.$id;

		$sqlUpdate = 'update fllc_appointments set dietitian_id = 0 where location_id = '.$result->location_id.' AND conference_id = '.$result->conference_id.' AND dietitian_id = '.$result->dietitian_id.' AND appointment_date between "'.$result->available_date_from.'" AND "'.$result->available_date_to.'"' ;

		$delRes = $this->db->query( $sqlDelete );
		if( !$delRes ){
			return false;
		}
		$updateRes = $this->db->query( $sqlUpdate );
		if( !$updateRes ){
			return false;
		}

		$this->closeDb();

		return true;

	}

	////saveDietitianService
	public function saveDietitianService( $addDietList, $service_id, $delDietList ){
		$sqlservice = 'select * from fllc_service where service_id="'.$service_id.'"';
		$queryservice = $this->db->query($sqlservice);

		if($queryservice->num_rows() > 0) {
			$servicerow = $queryservice->row_array();
			$servicename = $servicerow['name'];
			if( !empty( $addDietList ) ){
				foreach( $addDietList as $diet ){
					$sql = 'insert into fllc_dietitian_srvc values("", "'.$diet.'" , "'.$service_id.'")';
					$query1 = $this->db->query($sql);
					// echo $sql;
					$sqlforemail = "select email from fllc_dietitian where dietitian_id= '".$diet."'";
					$querMail = $this->db->query($sqlforemail);

					$row = $querMail->row_array();
					if ($row['email'] != "" ) {
						//NEED TO SEND MAILS TO BOTH STAFF and admin.
						$this->mail($row['email'],"FamilyFoodLLC: Added to a Service","You have been added to ".$servicename." service as a counselor", "");
					}

				}
			}
			if( !empty( $delDietList ) ){
				foreach( $delDietList as $diet ){
					$sql = 'delete from fllc_dietitian_srvc where dietitian_id = "'.$diet.'" and service_id="'.$service_id.'"';
					$query1 = $this->db->query($sql);
					// echo $sql;
					$sqlforemail = "select email from fllc_dietitian where dietitian_id= '".$diet."'";
					$querMail = $this->db->query($sqlforemail);

					$row = $querMail->row_array(); 
					if ($row['email'] != "" ) {
						//NEED TO SEND MAILS TO BOTH STAFF and admin.
						$this->mail($row['email'],"FamilyFoodLLC: Removed From Service","You have been removed from".$servicename." service as a counselor", "");
					}
				}
			}

			echo "Dietitian details are updated for this service";

		}else{
			echo 'Sorry this service has been deleted';
		}
	}

	public function getLatest5Appointments(){
		$this->reconnectDb();

		$sql = 'SELECT * FROM `fllc_appointments` left join fllc_user on fllc_appointments.userid = fllc_user.userid ORDER BY appointment_date DESC limit 5';
		$query = $this->db->query($sql);

		$this->closeDb();

		return $query->result_array();
	}

	public function getUserAdvice( $userid, $appointment_date ){
		$this->reconnectDb();
		
		$sql = 'Select * from fllc_dietitian_advice where da_userid="'.$userid.'" and da_appointment_date="'.$appointment_date.'" ';
		$query = $this->db->query($sql);

		$this->closeDb();

		return $query->first_row();
	}

	public function checkDatesAvailability( $dateFrom, $dateTo, $dietitian_id ){
		$this->reconnectDb();
		
		$sql = 'Select * from fllc_dietitian_availability where dietitian_id="'.$dietitian_id.'" and available_date_from="'.$appointment_date.'" ';
		$query = $this->db->query($sql);

		$this->closeDb();

		return $query->first_row();	
	}

	function saveWalkIn( $company, $location, $conference, $userid, $fname, $lname, $phone, $dietEmail, $serviceid, $reason, $hinsuranceid, $hinsurancecompany ){
		$this->reconnectDb();
		$sqlSelect = 'select count(*) as count from fllc_user where userid="'.$userid.'"';
		$query = $this->db->query($sqlSelect);
		$checkUserid = $query->first_row();
		
		if ( $checkUserid->count > 0 ) {
		}else{
			$sqlinsert = 'insert into fllc_user values("'.$userid.'", "'.DEFAULTCUSTOMERPWD.'","customer","'.$fname.'","'.$lname.'","","","'.$phone.'","",0)';
			$query1 = $this->db->query($sqlinsert);
			if ( !$query1 ) {
				return "Error occured, New client and Walk-in appointment was not saved!";
			}
			$this->mail($email,"familyfoodllc","You have been added to the familyfoodllc.<br> <b> Your id: </b>".$email." <br> <b>your password:</b>".$password." <br> Please change your password after <a href = \"".base_url() ."login/logins\"> login </a>","");
		}

		$sqlInsuranceSelect = 'select * from fllc_user_insurance where userid ="'.$userid.'"';
		$queryInsurance = $this->db->query($sqlInsuranceSelect);
		if ( $queryInsurance->num_rows() == 0) {
			$sqlInsertInsurance = 'insert into fllc_user_insurance values("'.$userid.'", "'.$hinsuranceid.'", "'.$hinsurancecompany.'")';
			$queryInsurance = $this->db->query($sqlInsertInsurance);
		} else {
			$sqlUpdateInsurance = 'update fllc_user_insurance set insurance_company ="'.$hinsurancecompany.'", insurance_id ="'.$hinsuranceid.'" where userid ="'.$userid.'"';
			$queryInsurance = $this->db->query($sqlUpdateInsurance);
		}

		$dietDetails = $this->getDietitianDetails( $dietEmail );
		$sqlInsertAppointment ='insert into fllc_appointments values("","FFLLC","'.$userid.'", "'.$dietDetails->dietitian_id.'", "'.$serviceid.'", current_date, "00:00", "Yes" ,"'.$location.'", "'.$dietEmail.'","'.$reason.'", "'.$conference.'","EST",NOW(),CURRENT_TIME(),"No","No","No","No")';
		$query2 = $this->db->query($sqlInsertAppointment);
		
		$this->closeDb();
		if ( !$query2 ) {
			return "Error occured, Walk-in appointment was not saved!";
		}else{
			return "Walk-in client saved!";
		}
	}

	function getDietitianDetails( $email ){
		$this->reconnectDb();

		$sql = 'SELECT * from fllc_dietitian where email = "'.$email.'"';
		$query = $this->db->query($sql);

		$this->closeDb();

		return $query->first_row();
	}

	///////END



	public function get_counselortype($userid,$pwd) {


	$this->reconnectDb();


	$sql1 = 'select type from fllc_dietitian where email = "'.$userid.'" and password = "'.$pwd.'" AND status = 1';


	$query1= $this->db->query($sql1);


	$this->closeDb();


	return $query1;


	}


	public function addCategory($company_name) {


	$this->reconnectDb();


	$sql1 = 'select company_id from fllc_company where company_name = "'. $company_name .'"';


	$query1= $this->db->query($sql1);


	


	if ( $query1->num_rows() == 0) {


			$sql = 'insert into fllc_company values ("","'.  $company_name .'" )'; 


			$query= $this->db->query($sql);


			if ($query) {


			 echo "successfully added Corporate Company";


			} else {


			 echo "Corporate Company is not added";


			}


		} else {


		 echo "Corporate Company " . $company_name ." already exists"; 


		}


    $this->closeDb();


	}


	function displayAllDietitianMembers() {


	$this->reconnectDb();


	$sql = 'select * from fllc_dietitian ';


	$query = $this->db->query($sql);


	$this->closeDb();


	return $query;


	


	}
	


	public function saveLocation($company_id,$add1,$add2,$state,$country,$zpc,$conf1,$conf2,$conf3,$conf4,$conf5,$conf1dietitiancheck,$conf1dietitianuncheck,$conf2dietitiancheck,$conf2dietitianuncheck,$conf3dietitiancheck,$conf3dietitianuncheck,$conf4dietitiancheck,$conf4dietitianuncheck,$conf5dietitiancheck,$conf5dietitianuncheck,$locaAvailableDateAndTime) {


	$this->reconnectDb();


	$sqllocationexists = 'select * from fllc_location where address2 ="'.$add2.'" and city ="'.$state.'" and pincode ="'.$zpc.'" and company_id = "'.$company_id.'"';


	$sqllocationexists = $this->db->query($sqllocationexists);


	if($sqllocationexists->num_rows() == 0) {


	


	$sql = 'insert into fllc_location values("",'.$company_id.',"'.$add1.'","'.$add2.'","'.$state.'","'.$country.'","'.$zpc.'","'.$conf1.'","'.$conf2.'","'.$conf3.'","'.$conf4.'","'.$conf5.'","8:00", "6:00")';


	//echo $sql;


	


	


	$query= $this->db->query($sql);


	$locationid =  mysql_insert_id();


	//$this->saveLocationUnavailableDates($locationid,$locationunavailabledates);


	$this->newSaveLocationAvailableDates($locationid,$locaAvailableDateAndTime);


	$this->insertORUpdateConference($locationid,$conf1,1,$conf1dietitiancheck,$conf1dietitianuncheck);


	$this->insertORUpdateConference($locationid,$conf2,2,$conf2dietitiancheck,$conf2dietitianuncheck);


	$this->insertORUpdateConference($locationid,$conf3,3,$conf3dietitiancheck,$conf3dietitianuncheck);


	$this->insertORUpdateConference($locationid,$conf4,4,$conf4dietitiancheck,$conf4dietitianuncheck);


	$this->insertORUpdateConference($locationid,$conf5,5,$conf5dietitiancheck,$conf5dietitianuncheck);


	


	$this->closeDb();


		return "success";


	 } else {


	   return "A location is already exists with same details";


	 }


	} 


	//else {


	//return "fail";


	//}


	


	/*public function saveLocationUnavailableDates($locationid,$locationunavailabledates) {


	$this->reconnectDb();


	$listofunavailabledates = explode(",",$locationunavailabledates);


	$unavailablecount = 0;


	$unavailablesize = count($listofunavailabledates);


	$sqldelete = 'delete from fllc_loc_unavailable where location_id= "'.$locationid.'"';


	$query = $this->db->query($sqldelete);


	if(count($listofunavailabledates) > 0) {


		for($i = 0 ; $i<count($listofunavailabledates) ; $i++) {


		if($listofunavailabledates[$i] != "") {


			$sqlunavailable = 'select * from fllc_loc_unavailable where location_id= "'.$locationid.'" and loc_unavailable_date = "'.$listofunavailabledates[$i].'"';


			$queryunavailable = $this->db->query($sqlunavailable);


			if($queryunavailable->num_rows() == 0) {


			  $sqlinsert = 'insert into fllc_loc_unavailable values("'.$locationid.'", "'.$listofunavailabledates[$i].'")';


			  $this->db->query($sqlinsert);


			} else {


			 $unavailablecount = $unavailablecount+1;


			}


		}


		}


	}


	$this->closeDb();


	}*/



	public function saveLocationAvailableDates($locationid,$locationavailabledates) {


	$this->reconnectDb();


	$listofavailabledates = explode(",",$locationavailabledates);


	$unavailablecount = 0;


	$unavailablesize = count($locationavailabledates);


	$sqldelete = 'delete from fllc_loc_available where location_id= "'.$locationid.'"';


	$query = $this->db->query($sqldelete);


	if(count($listofavailabledates) > 0) {


		for($i = 0 ; $i<count($listofavailabledates) ; $i++) {


		if($listofavailabledates[$i] != "") {


			$sqlunavailable = 'select * from fllc_loc_available where location_id= "'.$locationid.'" and loc_available_from <= "'.$listofavailabledates[$i].'" and "'.$listofavailabledates[$i].'" <= loc_available_to';


			$queryunavailable = $this->db->query($sqlunavailable);


			if($queryunavailable->num_rows() == 0) {


			  $sqlinsert = 'insert into fllc_loc_available values("","'.$locationid.'", "'.$listofavailabledates[$i].'", "'.$listofavailabledates[$i].'", "8:00", "5:00")';


			  $this->db->query($sqlinsert);


			} else {


			 $unavailablecount = $unavailablecount+1;


			}


		}


		}


	}


	$this->closeDb();


	}
	


	public function editLocation($company_id,$locationid,$add1,$add2,$state,$country,$zpc,$conf1,$conf2,$conf3,$conf4,$conf5,$conf1dietitiancheck,$conf1dietitianuncheck,$conf2dietitiancheck,$conf2dietitianuncheck,$conf3dietitiancheck,$conf3dietitianuncheck,$conf4dietitiancheck,$conf4dietitianuncheck,$conf5dietitiancheck,$conf5dietitianuncheck,$locationunavailabledates,$businessfrom,$businessto) {


	$this->reconnectDb();


	$sql = 'update fllc_location set company_id='.$company_id.', address1="'.$add1.'", address2="'.$add2.'", city="'.$state.'", country="'.$country.'", pincode="'.$zpc.'", conf_room_1="'.$conf1.'", conf_room_2="'.$conf2.'", conf_room_3="'.$conf3.'", conf_room_4="'.$conf4.'", conf_room_5="'.$conf5.'", business_hours_start= "'.$businessfrom.'", business_hours_end = "'.$businessto.'" where location_id='.$locationid;


	//echo $sql;


	$query= $this->db->query($sql);


	//$this->saveLocationUnavailableDates($locationid,$locationunavailabledates);


	$this->saveLocationAvailableDates($locationid,$locationunavailabledates);


	$this->insertORUpdateConference($locationid,$conf1,1,$conf1dietitiancheck,$conf1dietitianuncheck);


	$this->insertORUpdateConference($locationid,$conf2,2,$conf2dietitiancheck,$conf2dietitianuncheck);


	$this->insertORUpdateConference($locationid,$conf3,3,$conf3dietitiancheck,$conf3dietitianuncheck);


	$this->insertORUpdateConference($locationid,$conf4,4,$conf4dietitiancheck,$conf4dietitianuncheck);


	$this->insertORUpdateConference($locationid,$conf5,5,$conf5dietitiancheck,$conf5dietitianuncheck);


	$this->closeDb();


	return "success";


	


	//} 


	//else {


	//return "fail";


	//}


	


	


	//$query= $this->db->query($sql);


	


	


	


	}



	public function removeCategory($company_id) {


	


	    $this->reconnectDb();


		$sql5 = 'delete from fllc_loc_srvc where location_id in (select location_id from  fllc_location where company_id='.$company_id.')';


		$this->db->query($sql5);


		$sql6 = 'delete from fllc_conference where location_id in (select location_id from  fllc_location where company_id='.$company_id.')';


		$this->db->query($sql6);


		


		$sql4 = 'delete from fllc_location where company_id='.$company_id;


		$this->db->query($sql4);


	   // $sql = 'delete from fllc_service where company_id='.$company_id;


		//$query= $this->db->query($sql);


		$sql1 = 'delete from fllc_company where company_id='.$company_id;


		$query1= $this->db->query($sql1);


		$output = $this->getCategoryList();


		$this->closeDb();


		return $output;


	}


	public function insertService($servicename,$description,$duration,$cost,$showprice) {


	$this->reconnectDb();


	$sqlexists = 'select * from fllc_service where name = "'.$servicename.'"';


	$queryexists = $this->db->query($sqlexists);


	if($queryexists->num_rows() == 0) {


	$sql = 'insert into fllc_service values ("", "'.$servicename.'", "'.$description.'","'.$duration.'","'.$cost.'","'.$showprice.'")'; 


	//echo $sql;


	$query= $this->db->query($sql);


	if ($query) {


			 echo "successfully added new service";


			} else {


			 echo "new service is not added";


			}


	} else {


	    echo "A service is already exists";


	}


	$this->closeDb();


	}


	public function getAllServices() {


	$this->reconnectDb();


	$sql1 = 'select * from fllc_service ORDER BY name';


	$query1= $this->db->query($sql1);


	$this->closeDb();


	return $query1;


	}


	public function saveDietitianToServices($dietitianarray,$serviceid,$dietitianarrayunchecked) {


	$this->reconnectDb();


	$sqlservice = 'select * from fllc_service where service_id="'.$serviceid.'"';


	$queryservice = $this->db->query($sqlservice);


	if($queryservice->num_rows() > 0) {


	$servicerow = $queryservice->row_array();


	$servicename = $servicerow['name'];


	if (strlen($dietitianarray) > 0) {


	$dietitian = explode(",",$dietitianarray);


	$countservices = 0;


		for($i=0;$i< count($dietitian) ; $i++) {


			$sql = 'select * from fllc_dietitian_srvc where service_id ="'.$serviceid.'" and dietitian_id ="'.$dietitian[$i].'"';


			$query = $this->db->query($sql);


			if ($query->num_rows() == 0) {


			     $countservices++;


				 $sql1 = 'insert into fllc_dietitian_srvc values("", "'.$dietitian[$i].'" , "'.$serviceid.'")';


				 $query1 = $this->db->query($sql1);


				 


				$sqlforemail = "select email from fllc_dietitian where dietitian_id= '".$dietitian[$i]."'";


				$queryemail = $this->db->query($sqlforemail);


				$row = $queryemail->row_array(); 


							if ($row['email'] != "" ) {


				//NEED TO SEND MAILS TO BOTH STAFF and admin.


								$this->mail($row['email'],"FamilyFoodLLC: Added to a Service","You have been added to ".$servicename." service as a counselor", "");


				}


			}


		


		}


	}


	if(strlen($dietitianarrayunchecked) > 0) {


		$dietitianunchecked = explode(",",$dietitianarrayunchecked);


		$countdelete = 0;


		for($i=0;$i< count($dietitianunchecked) ; $i++) {


			$countdelete++;


			$sqlexists = 'select * from fllc_dietitian_srvc where dietitian_id = "'.$dietitianunchecked[$i].'" and service_id="'.$serviceid.'"';


			$queryexists = $this->db->query($sqlexists);


			if($queryexists->num_rows() > 0 ) {


					$sql = 'delete from fllc_dietitian_srvc where dietitian_id = "'.$dietitianunchecked[$i].'" and service_id="'.$serviceid.'"';


				    $query = $this->db->query($sql);


					$sqlappointments = 'delete from fllc_appointments where dietitian_id = "'.$dietitianunchecked[$i].'" and service_id="'.$serviceid.'"';


					$queryappointments = $this->db->query($sqlappointments);


					$sqlforemail = "select email from fllc_dietitian where dietitian_id= '".$dietitianunchecked[$i]."'";


					$queryemail = $this->db->query($sqlforemail);


					$row = $queryemail->row_array(); 


								if ($row['email'] != "" ) {


									$this->mail($row['email'],"FamilyFoodLLC: Removed From Service","You have been removed from".$servicename." service as a counselor", "");


								}


					}


		}


	}


	 $this->closeDb();


		echo "Dietitian details are updated for this service";


	} else {


	 echo "Sorry this service has been deleted";  


	}


	}


	public function displayPublishedReviews() {


	$this->reconnectDb();

	// edited remove where statement
	// $sql = "select * from fllc_reviews where publish_status='Yes'";
	$sql = "select * from fllc_reviews";

	$query = $this->db->query($sql);


	$this->closeDb();


	return $query;


	


	}


	public function publish($publishdata) {


	$this->reconnectDb();


	if(strlen($publishdata) > 0) {


		$publishdata = explode(",",$publishdata);


			for($i=0;$i< count($publishdata) ; $i++) {


				$sql = 'update fllc_reviews set publish_status="Yes" where review_id="'.$publishdata[$i].'"';


				$query = $this->db->query($sql);


			}


			$this->closeDb();


			echo "Review is published";


		} else {


	       $this->closeDb();


	  }


	}


	public function unpublish($unpublishdata) {


	$this->reconnectDb();


	if(strlen($unpublishdata) > 0) {


		$unpublishdata = explode(",",$unpublishdata);


			for($i=0;$i< count($unpublishdata) ; $i++) {


				$sql = 'update fllc_reviews set publish_status="No" where review_id="'.$unpublishdata[$i].'"';


				$query = $this->db->query($sql);


			}


			$this->closeDb();


			echo "Review is unpublished";


		} else {


		$this->closeDb();


		}


	}


	


	public function saveServicesToLocations($services,$locationid,$serviceArrayuncheck) {


	


	$this->reconnectDb();


	if(strlen($services) > 0) {


	$services = explode(",",$services);


	$countservices = 0;


	for($i=0;$i< count($services) ; $i++) {


			$sql = 'select * from fllc_loc_srvc where location_id ="'.$locationid.'" and service_id ="'.$services[$i].'"';


			$query = $this->db->query($sql);


			if ($query->num_rows() == 0) {


			     $countservices++;


				 $sql1 = 'insert into fllc_loc_srvc values("", "'.$locationid.'", "'.$services[$i].'")';


			     $query1 = $this->db->query($sql1);


			}


		


		}


	}


	if (strlen($serviceArrayuncheck) > 0) {


		$servicesuncheck = explode(",",$serviceArrayuncheck);


		for($i=0;$i<count($servicesuncheck);$i++) {


		  $sql = 'delete from fllc_loc_srvc where service_id = "'.$servicesuncheck[$i].'" and location_id="'.$locationid.'"';


		  $query = $this->db->query($sql);


		  


		}


	}


	$this->closeDb();


	echo "Service details successfully updated.";





	}


	public function displayEditSereviceDetails($serviceid) {


	$this->reconnectDb();


	$sql2 = 'select * from fllc_service where fllc_service.service_id ='.$serviceid;


	$query2 = $this->db->query($sql2);


	$this->closeDb();


	return $query2;


	


	}


	public function selectServiceCheckboxes($locationid) {


	$this->reconnectDb();


	$sql = 'select * from fllc_loc_srvc where location_id ='.$locationid;


	$query = $this->db->query($sql);


	$this->closeDb();


	return $query;


	}


	public function editDietitianMember($dietitian_id,$serviceid) {


	$this->reconnectDb();


	$sql = 'select * from fllc_dietitian where dietitian_id = '. $dietitian_id;


	$query = $this->db->query($sql);


	$this->closeDb();


	return $query;


	}
	


	public function selectDietitianCheckboxes($serviceid) {


	$this->reconnectDb();


	$sql = 'select * from fllc_dietitian_srvc where service_id ='.$serviceid;


	$query = $this->db->query($sql);


	$this->closeDb();


	return $query;


	


	


	}


	


	public function getCompaniesData($location) {


	$this->reconnectDb();


	$sql ='select * from fllc_company, fllc_location where fllc_location.city ="'.$location.'" and fllc_location.company_id = fllc_company.company_id';


	$query=$this->db->query($sql);


	$this->closeDb();


	return $query;


	


	


	}


	


	public function getCompaniesData1($zipcode) {


	$this->reconnectDb();


	$sql ='select * from fllc_company, fllc_location where fllc_location.pincode ="'.$zipcode.'" and fllc_location.company_id = fllc_company.company_id';


	$query=$this->db->query($sql);


	


	$output = "";


	foreach ($query->result() as $row)


     {


	 


	 $data['address'] = $row->company_name.",".$row->address1;


	 $data['location_id'] = $row->location_id;


	 $output [] = $data;


	 }


	 $this->closeDb();


	return $output;


	


	


	}


	


	public function getCompaniesDetails($value) {


	$this->reconnectDb();


	$data = $this->getValidLocation($value);


	//echo "<pre>";


	//print_r($data);


	$sql ='select DISTINCT company_name from fllc_company, fllc_location where (fllc_location.pincode ="'.$value.'" OR LOWER(fllc_location.city)="'.strtolower($value).'" OR LOWER(fllc_location.city) ="'.strtolower($data['state']).'" OR LOWER(fllc_location.city) ="'.strtolower(implode("",explode(" ",$data['state']))).'" OR LOWER(fllc_location.city) ="'.strtolower($data['code']).'") and fllc_location.company_id = fllc_company.company_id';


	//echo $sql;


	$query=$this->db->query($sql);


	$output = "";


	foreach ($query->result() as $row)


     {


	 


	 $data['address'] = $row->company_name;


	// $data['location_id'] = $row->location_id;


	 $output [] = $data;


	 }


	 $this->closeDb();


	return $output;


	}


	


	function getValidLocation($value) {


	$this->reconnectDb();


	$sqldefaultcodes = 'select * from fllc_state_code' ;


	$query=$this->db->query($sqldefaultcodes);


	$statevalue ="";


	$codevalue ="";


	//echo "comni....";


	foreach ($query->result() as $row)


     {


	 $city = explode(" ",$row->state);


	 $valuelist = explode(" ",$value);


	 $state = implode("",$city);


	 $value = implode("",$valuelist);


	 $statecode = $row->code;


	  


	 if(strlen($value) > 2) {


	  $ss = strtolower($value);


	  $dd = strtolower($state);


	  $comvalue = strpos($ss,$dd);


	  


			 if( trim($comvalue) === "0") {


				 $statevalue = $row->state;


				 $codevalue = $row->code;


				 $data['state'] = $statevalue;


				 $data['code'] = $codevalue;


				 $this->closeDb();


				 return $data;


				// break;


			}


	 } else {


	       $ss = strtolower($value);


		   $dd = strtolower($statecode);


		   $comvalue = strpos($ss,$dd);


		if( trim($comvalue) === "0") {


			$statevalue = $row->state;


			 $codevalue = $row->code;


			 $data['state'] = $statevalue;


				 $data['code'] = $codevalue;


				 $this->closeDb();


				 return $data;


			// break;


		 


		 }


	 }


	 


	 }


	$this->closeDb();


	


	}


	


	


	public function getAllServiceDetail($locationid) {


	$this->reconnectDb();


	$sql ='select * from fllc_service, fllc_loc_srvc where fllc_loc_srvc.location_id ="'.$locationid.'" and fllc_service.service_id = fllc_loc_srvc.service_id';


	$query=$this->db->query($sql);


	$this->closeDb();


	return $query;


	


	}


	


	public function getPassWord($username) {


	$this->reconnectDb();


	$sql = 'select pwd from fllc_user where userid="'.$username.'"';


	$query=$this->db->query($sql);


	$this->closeDb();


	return $query;


	}


	


	public function getDietitianPassWord($username) {


	$this->reconnectDb();


	$sql = 'select password from fllc_dietitian where email="'.$username.'"';


	$query=$this->db->query($sql);


	$this->closeDb();


	return $query;


	}


	


	public function getServiceDetailsForTimeSlots($serviceid,$currentdate) {


	$this->reconnectDb();


	//$sqlfirst = 'select dietitian_id from fllc_dietitian_srvc where service_id = "'.$serviceid.'" and dietitian_id NOT IN (select dietitian_id from fllc_dietitian_unavailable where fllc_dietitian_unavailable.unavailable_date <= "'.$currentdate.'" and "'.$currentdate.'" <= fllc_dietitian_unavailable.unavailable_dateto)';


	$sqlfirst = 'select dietitian_id from fllc_dietitian_srvc where service_id = "'.$serviceid.'" and dietitian_id IN (select dietitian_id from fllc_dietitian_availability where fllc_dietitian_availability.available_date_from <= "'.$currentdate.'" and "'.$currentdate.'" <= fllc_dietitian_availability.available_date_to)';


	//echo $sqlfirst;


	$queryfirst = $this->db->query($sqlfirst);


	$query ="";


	if($queryfirst->num_rows() > 0){ 


		$sql = 'select * from fllc_service where service_id="'.$serviceid.'"';


		$query=$this->db->query($sql);


		return $query->result_array();


	}


	$this->closeDb();


	return $query;


	


	}


	public function getUserDetails($userid,$cnumber,$cservice) {


	$this->reconnectDb();


	$sql = "";


	if($userid != "") {


	$sql = 'select * from fllc_user where userid="'.$userid.'"';


	} 


	


	if ( $cservice != "") {


		$sql = 'select * from fllc_user where userid in (select userid from fllc_appointments where confirmation_number = "'.$cnumber.'")';


	}


	$query=$this->db->query($sql);


	$this->closeDb();


	return $query;


	


	}


	public function getInsuranceDeails($userid) {


	$this->reconnectDb();


	$sql = 'select * from fllc_user_insurance where userid="'.$userid.'"';


	$query=$this->db->query($sql);


	$this->closeDb();


	return $query;


	


	}


	


	public function setInsuranceAndUserDeails($userid, $hinsurancecompany ,  $hinsuranceid) {


	$this->reconnectDb();


	$sql = 'select * from fllc_user where userid="'.$userid.'"';


	$query = $this->db->query($sql);


	


		$sql1 = 'select * from fllc_user_insurance where userid ="'.$userid.'"';


		$query1 = $this->db->query($sql1);


		if ( $query1->num_rows() == 0) {


		 $sql2 = 'insert into fllc_user_insurance values("'.$userid.'", "'.$hinsuranceid.'", "'.$hinsurancecompany.'")';


		 $query2 = $this->db->query($sql2);


		} else {


		$sql2 = 'update fllc_user_insurance set insurance_company ="'.$hinsurancecompany.'", insurance_id ="'.$hinsuranceid.'" where userid ="'.$userid.'"';


		$query2 = $this->db->query($sql2);


		}


	$this->closeDb();


	//echo "success";


	}


	public function authenticateuseremailid($userid) {


	$this->reconnectDb();


	$sql = 'select * from fllc_user where userid="'.$userid.'"';


	$query = $this->db->query($sql);


	$this->closeDb();


	return $query;


	}


	


	public function getOldPassword($userid) {


	$this->reconnectDb();


	$cuser = $this->session->userdata('cuser');


	$conuser = $this->session->userdata('conuser');


	$sql ="";


	if($cuser != "") {


	  $userid = $this->session->userdata('cuser');


	 $sql = 'select pwd from fllc_user where userid="'.$userid.'"';


	 $query = $this->db->query($sql);


	foreach($query->result() as $row){


	$this->closeDb();


	   return $row->pwd;


	 }


	} elseif ($conuser != "") {


	  $userid = $conuser ;


	  $sql = 'select password from fllc_dietitian where email="'.$userid.'"';


	  $query = $this->db->query($sql);


	  foreach($query->result() as $row){


	  $this->closeDb();


	   return $row->password;


	 }


	}


	$this->closeDb();


	//return $query;


	}


	


	public function displayAllLocations($location,$company) {


	$this->reconnectDb();


	$data = $this->getValidLocation($location);


	$sql ='select * from fllc_company, fllc_location where (fllc_location.pincode ="'.$location.'" OR LOWER(fllc_location.city)="'.strtolower($location).'" OR LOWER(fllc_location.city) ="'.strtolower($data['state']).'" OR LOWER(fllc_location.city)="'.strtolower($data['code']).'" OR LOWER(fllc_location.city)="'.strtolower(implode("",explode(" ",$data['state']))).'") and fllc_location.company_id = fllc_company.company_id and fllc_company.company_name = "'.$company.'"';


	


//	echo $sql;


	$query=$this->db->query($sql);


	$output = "";


	foreach ($query->result() as $row)


     {


	 


	 $data['location_id'] = $row->location_id;


	 $data['address2'] = $row->address2;


	 $data['address1'] = $row->address1;


	 $data['zipcode'] = $row->pincode;


	 


	// $data['location_id'] = $row->location_id;


	 $output [] = $data;


	 }


	 $this->closeDb();


	return $output;


	


	


	}







	


	/*public function saveUnavailableDates($unavailabledate,$dietitian_id,$unavailabledateto) {


	$this->reconnectDb();


	$sql = 'select * from fllc_dietitian_unavailable where dietitian_id="'.$dietitian_id.'" and unavailable_date <= "'.$unavailabledate.'" and "'.$unavailabledateto.'" <= unavailable_dateto';


	$query=$this->db->query($sql);


	if($query->num_rows() == 0) {


	$sql1 = 'insert into fllc_dietitian_unavailable values("'.$dietitian_id.'","'.$unavailabledate.'", "'.$unavailabledateto.'")';


	$query=$this->db->query($sql1);


	$this->closeDb();


	return "Unavailable date  is stored";


	} else {


	$this->closeDb();


	return "This Unavailable date is already set for the user";


	}


	


	}*/


	//edited : added function

	public function save_dietitian_advice( $userid,$followup,$weight,$height,$bmi,$goalMet,$whole_grains,$vegetables,$fruit,$dairy,$fish,$water,$physical,$nutrition,$physicalGoal,$socialGoal,$handouts,$appointment_date ){
		$this->reconnectDb();
		$sql1 = 'select * from fllc_dietitian_advice where da_userid = "'.$userid.'"';
		$userExists = $this->db->query( $sql1 );
		if ( $userExists->num_rows() > 0 ) {
			$sqlDelete = 'delete from fllc_dietitian_advice where da_userid = "'.$userid.'"';
			$this->db->query( $sqlDelete );
		}
		$sqlInsert = 'insert into fllc_dietitian_advice values("","'.$userid.'","'.$followup.'",'.$weight.','.$height.','.$bmi.','.$whole_grains.','.$vegetables.','.$fruit.','.$dairy.','.$fish.','.$water.','.$physical.',"'.$nutrition.'","'.$physicalGoal.'","'.$socialGoal.'","'.$handouts.'","'.$appointment_date.'","'.$goalMet.'")';
		$query = $this->db->query( $sqlInsert );
		if( $query ){
			return "Successfully Adviced Client";
		}else{
			return "Advicing Client Failed";
		}
		$this->closeDb();
	}
	


	// edited added function
	public function getAppointmentsOrderBy($userid,$bookedby,$order) {	
	$this->reconnectDb();
	if($bookedby != "") {
		$sql = 'select * from fllc_location,fllc_appointments,fllc_service,fllc_company,fllc_user where fllc_appointments.booked_by = "'.$bookedby.'" and fllc_service.service_id = fllc_appointments.service_id and fllc_appointments.location_id = fllc_location.location_id and fllc_location.company_id= fllc_company.company_id and fllc_appointments.userid = fllc_user.userid and fllc_appointments.booking_status = "Yes" and fllc_appointments.dietitian_id in (select dietitian_id from fllc_dietitian) '.$order;
	}elseif($userid != ""){
		$sql = 'select * from fllc_location,fllc_appointments,fllc_service,fllc_company,fllc_user where fllc_appointments.userid = "'.$userid.'" and fllc_service.service_id = fllc_appointments.service_id and fllc_appointments.location_id = fllc_location.location_id and fllc_location.company_id= fllc_company.company_id and fllc_appointments.userid = fllc_user.userid and fllc_appointments.booking_status = "Yes" and fllc_appointments.dietitian_id in (select dietitian_id from fllc_dietitian) '.$order;
	}
	// echo $sql;
	$query = $this->db->query($sql);
	$this->closeDb();
	return $query;
	}
	//end

	public function getAppointments($userid,$bookedby) {	


	$this->reconnectDb();


	if($bookedby != "") {


	$sql = 'select * from fllc_location,fllc_appointments,fllc_service,fllc_company,fllc_user where fllc_appointments.booked_by = "'.$bookedby.'" and fllc_service.service_id = fllc_appointments.service_id and fllc_appointments.location_id = fllc_location.location_id and fllc_location.company_id= fllc_company.company_id and fllc_appointments.userid = fllc_user.userid and fllc_appointments.booking_status = "Yes" and fllc_appointments.dietitian_id in (select dietitian_id from fllc_dietitian)';


	


	} elseif ($userid != "") {


	$sql = 'select * from fllc_location,fllc_appointments,fllc_service,fllc_company,fllc_user where fllc_appointments.userid = "'.$userid.'" and fllc_service.service_id = fllc_appointments.service_id and fllc_appointments.location_id = fllc_location.location_id and fllc_location.company_id= fllc_company.company_id and fllc_appointments.userid = fllc_user.userid and fllc_appointments.booking_status = "Yes" and fllc_appointments.dietitian_id in (select dietitian_id from fllc_dietitian)';


	}


	// echo $sql;


	$query = $this->db->query($sql);


	$this->closeDb();


	return $query;


	}



	public function checkForDietitianAvailableOnConferenceBased($serviceid,$locationid,$date) {
		$this->reconnectDb();

		$sql = 'select a.location_id,b.conference_id,c.dietitian_id,d.service_id from 
		fllc_location a,
		fllc_conference b,
		fllc_dietitian_conference c,
		fllc_dietitian_srvc  d
		where a.location_id=b.location_id  and 
		a.location_id in (select location_id from fllc_loc_available where loc_available_from <= "'.$date.'" and "'.$date.'" <= loc_available_to) and 
		b.conference_id = c.conference_id and 
		c.dietitian_id in (select dietitian_id from fllc_dietitian_availability where available_date_from <= "'.$date.'" and "'.$date.'"<= available_date_to and conference_id=b.conference_id and location_id=a.location_id ) and d.dietitian_id=c.dietitian_id and a.location_id="'.$locationid.'" and d.service_id="'.$serviceid.'"';
		
		$query = $this->db->query($sql);

		$this->closeDb();

		return $query;
	}


	public function changehourlymailstatusmsg($confirmationnumber) {


	$this->reconnectDb();


	$sql = 'update fllc_appointments set hourly_mail_status = "Yes" where confirmation_number= "'.$confirmationnumber.'"';


	$query = $this->db->query($sql);


	$this->closeDb();


	


	}


	


	public function changedailymailstatusmsg($confirmationnumber) {


	$this->reconnectDb();


	$sql = 'update fllc_appointments set daily_mail_status = "Yes" where confirmation_number= "'.$confirmationnumber.'"';


	$query = $this->db->query($sql);


	$this->closeDb();


	


	}


	


	public function changeweeklymailstatusmsg($confirmationnumber) {


	$this->reconnectDb();


	$sql = 'update fllc_appointments set weekly_mail_status = "Yes" where confirmation_number= "'.$confirmationnumber.'"';


	$query = $this->db->query($sql);


	$this->closeDb();


	


	}


	


	public function getConferenceName($conferenceid) {


	$this->reconnectDb();


	$sql = 'select * from fllc_conference where conference_id="'.$conferenceid.'"';


	$query = $this->db->query($sql);


	$this->closeDb();


	return $query;


	}


	


	public function getUserDetailsForAlreadyRegistered($username,$password) {


	$this->reconnectDb();


	$sql = 'select * from fllc_user where userid="'.$username.'" and pwd="'.$password.'"';


	//echo $sql;


	$query = $this->db->query($sql);


	$this->closeDb();


	return $query;


	}


	


	public function getTimeZones($locationid) {


	$this->reconnectDb();


	$sql = 'select * from fllc_zipcode_timezones where zipcode IN (select pincode from fllc_location where fllc_location.location_id="'.$locationid.'")';


	//echo $sql;


	$query = $this->db->query($sql);


	$this->closeDb();


	return $query;


	}


	


	public function bookAppointmentOnDateSelect($userid,$serviceid,$appointmentdate,$appointmenttime,$location_id,$appointmentnumber){


	


	


	


	


	


	


	


	


	}


	public function setInsuranceInfo($userid,$insurancename,$insuranceid) {


	


	


	


	


	}


	public function blockOnLocationBasedHolidays($locationid,$date) {


	$this->reconnectDb();


	$sql = 'select * from fllc_loc_available where location_id="'.$locationid.'" and loc_available_from <="'.$date.'" and "'.$date.'" <= loc_available_to';


	$query = $this->db->query($sql);


	$this->closeDb();


	return $query;


	}


	


	function blockAlreadyBookedTimes($userid,$appointmentdate) {


	$this->reconnectDb();


	$sql = 'select * from fllc_appointments where userid="'.$userid.'" and appointment_date = "'.$appointmentdate.'" and booking_status in ("Yes","Pending")';


	$query=$this->db->query($sql);


	$this->closeDb();


	return $query;


	}


	


	function blockAlreadyBookedTimesWithoutLogin($locationid,$appointmentdate) {


	$this->reconnectDb();


	//function blockAlreadyBookedTimesWithoutLogin($locationid,$appointmentdate) {


	/*$sql = "select appointment_date,appointment_time,count(appointment_time) appt_cnt,


(select count(dietitian_id) from fllc_dietitian_srvc where service_id='".$serviceid."' group by service_id) dietitian_cnt  from fllc_appointments where service_id='".$serviceid."'  and appointment_date='".$appointmentdate."' and booking_status in ('Yes','Pending') group by appointment_time";


echo $sql."----------------";*/


//$sql = 'select a.location_id,count(a.conference_id) appt_cnt ,a.appointment_date,a.appointment_time, (select count(distinct dietitian_id) from fllc_dietitian_conference sc, fllc_conference cf where sc.conference_id=cf.conference_id and cf.location_id=a.location_id and sc.dietitian_id NOT IN (select dietitian_id from fllc_dietitian_unavailable where fllc_dietitian_unavailable.unavailable_date <= "'.$appointmentdate.'" and "'.$appointmentdate.'" <= fllc_dietitian_unavailable.unavailable_dateto)) dietitian_cnt from fllc_appointments a where  a.location_id="'.$locationid.'" and a.appointment_date="'.$appointmentdate.'" group by appointment_time';


//echo $sql."----------------";





$sql = 'select a.location_id,count(a.conference_id) appt_cnt ,a.appointment_date,a.appointment_time,


(select count(conference_id) from fllc_conference where location_id="'.$locationid.'") default_conf_cnt from fllc_appointments a where  a.location_id="'.$locationid.'" and a.appointment_date="'.$appointmentdate.'" group by appointment_time';











	$query = $this->db->query($sql);


	$output ="";


	$output1 = "";


	foreach ($query->result() as $row)


     {


	    $status = "block";


		//echo $row->appt_cnt;


		//echo $row->appt_cnt ."------------".$row->default_conf_cnt;


	    if($row->appt_cnt != $row->default_conf_cnt) {


		


		$sqlnext = ' select a.dietitian_id from fllc_dietitian_availability a  where a.conference_id in 


(select conference_id from fllc_conference a where conference_id not in 


(select conference_id from fllc_appointments where location_id="'.$locationid.'" and appointment_date ="'.$appointmentdate.'" and appointment_time="'.$row->appointment_time.'")  and location_id= "'.$locationid.'") 


and a.location_id="'.$locationid.'" and  a.available_date_from <= "'.$appointmentdate.'" and "'.$appointmentdate.'"<= a.available_date_to and a.dietitian_id not in (select  dietitian_id from fllc_appointments where dietitian_id=a.dietitian_id   and appointment_date ="'.$appointmentdate.'" and appointment_time ="'.$row->appointment_time.'")';


//echo $sqlnext;


       $querynext = $this->db->query($sqlnext);


	   if($querynext->num_rows() > 0) {


           $status = "unblock";


	    } else {


		  $status = "block";


		}


		} else {


		$status = "block";


		}


		$output1['location_id'] = $row->location_id;


		$output1['appointment_date'] = $row->appointment_date;


		$output1['appointment_time'] = $row->appointment_time;


		$output1['status'] = $status;


		$output[] = $output1;


		


	 }


	 


	 


	


	


	


	$this->closeDb();


	return $output;


	


	


	}


	


	


	function mail($mailTo, $subject, $messageFormat, $fromFeature)


	{


	    // $this->reconnectDb();


         $this->email->from(FFLLCADMINMAIL, FFLLCADMINMAILNAME);


         $this->email->to($mailTo); // $mailTo - can be a comma separated email-ids


            //$this->email->cc('ramesh.kandagatla@saventech.com'); 


            //$this->email->bcc('deepakkumar.bahekar@saventech.com'); 





         $this->email->subject($subject);


         $this->email->message("<img alt=\"Family Food, LLC\" src=\"".base_url()."images/family-food-logo.png\" /> <br><br>".$messageFormat);	





            if($this->email->send()){


				if($fromFeature =="fpwd" ) {


				//$this->closeDb();


						return "success";


				}


			} else {


			//$this->closeDb();


				echo "ERROR = ".$this->email->print_debugger();


			}


	}


	public function getUserAppts($dietitian_id,$date,$date2){

	


	$this->reconnectDb();


	//$sql ="SELECT * FROM fllc_appointments a,fllc_dietitian s, fllc_user u,fllc_dietitian_srvc svc,fllc_service sv WHERE s.email = '".$dietitian_id."' AND a.booking_status='Yes' AND a.dietitian_id=s.dietitian_id AND u.userid=a.userid AND svc.service_id=sv.service_id AND a.service_id=sv.service_id AND timestamp(concat(a.appointment_date,' ',time(a.appointment_time)))  >= (current_timestamp) and timestamp(concat(a.appointment_date,' ',time(a.appointment_time))) <= (current_timestamp+interval 1 day) ORDER BY appointment_time DESC";


/*$sql = "SELECT * FROM fllc_appointments a,fllc_dietitian s, fllc_user u,fllc_dietitian_srvc svc,fllc_service sv,fllc_location loc,fllc_company cat  WHERE s.email = '".$dietitian_id."'  AND a.booking_status='Yes' AND a.dietitian_id=s.dietitian_id AND u.userid=a.userid AND svc.dietitian_id = s.dietitian_id AND svc.service_id=sv.service_id AND a.service_id=sv.service_id AND a.location_id=loc.location_id and 


loc.company_id = cat.company_id and timestamp(concat(a.appointment_date,' ',time(a.appointment_time)))  >= (current_timestamp) and timestamp(concat(a.appointment_date,' ',time(a.appointment_time))) <= (current_timestamp+interval 1 day) ORDER BY appointment_time DESC";


	//$sql = 'SELECT * FROM fllc_appointments a,fllc_dietitian s, fllc_user u,fllc_dietitian_srvc svc,fllc_service sv WHERE s.email = "'.$dietitian_id.'" AND a.booking_status="Yes" AND a.dietitian_id=s.dietitian_id AND u.userid=a.userid AND svc.service_id=sv.service_id AND a.service_id=sv.service_id AND a.appointment_date="'.$date.'" ORDER BY appointment_time DESC';*/


	


	/*$sql = "SELECT * FROM fllc_appointments a,fllc_dietitian s, fllc_user u,fllc_dietitian_srvc svc,fllc_service sv,fllc_location loc,fllc_company cat  WHERE s.email = '".$dietitian_id."'  AND a.booking_status='Yes' AND a.dietitian_id=s.dietitian_id AND u.userid=a.userid AND svc.dietitian_id = s.dietitian_id AND svc.service_id=sv.service_id AND a.service_id=sv.service_id AND a.location_id=loc.location_id and 


loc.company_id = cat.company_id and timestamp(concat(a.appointment_date,' ',str_to_date(concat(time(a.appointment_time),' ',substring_index(a.appointment_time,' ',-1)),'%r')))  >= (current_timestamp) and timestamp(concat(a.appointment_date,' ',str_to_date(concat(time(a.appointment_time),' ',substring_index(a.appointment_time,' ',-1)),'%r'))) <= (current_timestamp+interval 1 day) ORDER BY str_to_date(concat(time(a.appointment_time),' ',substring_index(a.appointment_time,' ',-1)),'%r') DESC";*/




// edited : appointment_date <= (current_date+interval 1 day) -> appointment_date >= (current_date+interval 1 day)
// and removed last part of sql "str_to_date(concat(time(a.appointment_time),' ',substring_index(a.appointment_time,' ',-1)),'%r') DESC"
// added timeSet for arranging list from earliest time to last
$sql = "SELECT *,STR_TO_DATE(a.appointment_time, '%h:%i %p') as timeSet FROM fllc_appointments a,fllc_dietitian s, fllc_user u,fllc_dietitian_srvc svc,fllc_service sv,fllc_location loc,fllc_company cat 
WHERE s.email = '".$dietitian_id."'  AND a.booking_status='Yes' AND a.dietitian_id=s.dietitian_id AND u.userid=a.userid AND svc.dietitian_id = s.dietitian_id AND svc.service_id=sv.service_id AND a.service_id=sv.service_id AND a.location_id=loc.location_id and 
loc.company_id = cat.company_id and appointment_date between '".$date."' and '".$date2."' ORDER BY appointment_date ASC, timeSet ASC";
	//and appointment_date between '".$date."' and '".$date2."' 

	 $query = $this->db->query($sql);


	 $output ="";


	foreach ($query->result() as $row)

 
     {

		$getAdvice = "Select * from fllc_dietitian_advice where da_userid=\"".$row->userid."\"";
		$advice = $this->db->query($getAdvice);
		$adviceList = $advice->result();
		if( !empty( $adviceList ) ){

			$row->da_followup = $adviceList[0]->da_followup;
			$row->da_weight = $adviceList[0]->da_weight;
			$row->da_height = $adviceList[0]->da_height;
			$row->da_bmi = $adviceList[0]->da_bmi;
			$row->da_whole_grains = $adviceList[0]->da_whole_grains;
			$row->da_vegetables = $adviceList[0]->da_vegetables;
			$row->da_fruit = $adviceList[0]->da_fruit;
			$row->da_dairy = $adviceList[0]->da_dairy;
			$row->da_fish = $adviceList[0]->da_fish;
			$row->da_water = $adviceList[0]->da_water;
			$row->da_physical = $adviceList[0]->da_physical;
			$row->da_nutritionalGoal = $adviceList[0]->da_nutritionalGoal;
			$row->da_physicalGoal = $adviceList[0]->da_physicalGoal;
			$row->da_socialGoal = $adviceList[0]->da_socialGoal;
			$row->da_handouts = $adviceList[0]->da_handouts;
			$row->da_appointment_date = $adviceList[0]->da_appointment_date;
			$row->da_goalMet = $adviceList[0]->da_goalMet;
		}else{
			$row->da_followup = "";
			$row->da_weight = "";
			$row->da_height = "";
			$row->da_bmi = "";
			$row->da_whole_grains = "";
			$row->da_vegetables = "";
			$row->da_fruit = "";
			$row->da_dairy = "";
			$row->da_fish = "";
			$row->da_water = "";
			$row->da_physical = "";
			$row->da_nutritionalGoal = "";
			$row->da_physicalGoal = "";
			$row->da_socialGoal = "";
			$row->da_handouts = "";
			$row->da_appointment_date = "";
			$row->da_goalMet = "";
		}
	    $output [] = $row;


	 }


	 $this->closeDb();


	 return $output;	


	 }


	//edite added function for cron mail of dietitian advice
	public function cronAdviceMail(){
		$this->reconnectDb();
		$sql = "Select * from fllc_dietitian_advice";
		// function mail($mailTo, $subject, $messageFormat, $fromFeature)
		$subject = "My Family Food Goals/Handout";
		$output = $this->db->query($sql);
		if( $output ){
			foreach ($output->result() as $row){
				$message = "Did you meet your Family Food goals this week? Here are the goals you set: <br /><br />";
				// $message .= "Whole Grains / Day :".$row->da_whole_grains."<br />";
				// $message .= "Vegetables / Day :".$row->da_vegetables."<br />";
				// $message .= "Fruit / Day :".$row->da_fruit."<br />";
				// $message .= "Low fat diary / Day :".$row->da_dairy."<br />";
				// $message .= "Fish / Week :".$row->da_fish."<br />";
				// $message .= "Water cups / Day :".$row->da_water."<br />";
				// $message .= "Physical activity days / Week :".$row->da_physical."<br /><br />";
				$message .= "NUTRITIONAL GOAL <br />";
				$message .= $row->da_nutritionalGoal."<br />";
				$message .= "PHYSICAL ACTIVITY GOAL <br />";
				$message .= $row->da_physicalGoal."<br /><br />";
				$message .= "FAMILY/SOCIAL/ENVIRONMENTAL GOAL <br />";
				$message .= $row->da_socialGoal."<br /><br />";
				$message .= "Keep up the good work! <br />";
				$message .= "We hope you enjoyed your time with the Family Food Registered Dietitian today.  Your Registered Dietitian recommended the attached information for your reference as you work on the goals you set. <br /><br />";
				$message.="<p><strong>Share your experience with Family Food LLC.</strong> <a href='https://familyfoodllc.com/service/login/logins'>Post your review here</a>. <i>(Login required)</i>. <br /><br />";
				$message .= "We look forward to seeing you at your next nutrition appointment to support you in accomplishing your goals.";
				$message .= "If you have not yet booked your next visit, please visit www.familyfoodllc.com or call (800) 203-8657 to schedule.";
				$message .= "Having trouble viewing your attachments? <a href='https://get.adobe.com/reader/'>Download Acrobat Reader by clicking on this link</a>.";
				$headers = "From: Admin<contact@familyfoodllc.com>";
				
				// boundary 
				$semi_rand = md5(time());  
				$mime_boundary = "==Multipart_Boundary_x{$semi_rand}x"; 
				// headers for attachment 
				$headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\""; 
				 
				// multipart boundary 
				$message = "This is a multi-part message in MIME format.\n\n" . "--{$mime_boundary}\n" . "Content-Type: text/html; charset=\"iso-8859-1\"\n" . "Content-Transfer-Encoding: 7bit\n\n" . $message . "\n\n"; 
				$message .= "--{$mime_boundary}\n";

				if( $row->da_handouts != "" ){
					$handoutArray = explode( ",", $row->da_handouts );
					foreach( $handoutArray as $handout ){
						$file = fopen( 'handouts/'.$handout.'.pdf',"rb" );
						$data = fread($file,filesize( 'handouts/'.$handout.'.pdf' ));
						fclose($file);
						$data = chunk_split(base64_encode($data)); 
						$name = $handout.'.pdf';
						$message .= "Content-Type: {\"application/octet-stream\"};\n" . " name=\"$name\"\n" . 
						"Content-Disposition: attachment;\n" . " filename=\"$name\"\n" . 
						"Content-Transfer-Encoding: base64\n\n" . $data . "\n\n";
						$message .= "--{$mime_boundary}\n";
					}
				}

				//handouts
				// $handoutLink = "staticfolder/handout".$row->handouts;
				// $message .= "\n<a href='".$handoutLink."'>click here to download</a>";
				// $this->mail( $row->da_userid, $subject, $message, "" );
				 $ok = mail($row->da_userid, $subject, $message, $headers); 
				// echo $ok = mail('365webdays@gmail.com', $subject, $message, $headers); exit;
				 
				// echo $message; 
			}
		}
		
		$this->closeDb();
	}

	//test
	public function testAttachment(){
		$to = "filart.ervin@gmail.com";
		$from = "testfrom@gmail.com"; 
		$subject ="test attachment"; 
		$message = "this is a test message";
		$headers = "From: $from";
		
		// boundary 
		$semi_rand = md5(time()); 
		$mime_boundary = "==Multipart_Boundary_x{$semi_rand}x"; 
		 
		// headers for attachment 
		$headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\""; 
		 
		// multipart boundary 
		$message = "This is a multi-part message in MIME format.\n\n" . "--{$mime_boundary}\n" . "Content-Type: text/plain; charset=\"iso-8859-1\"\n" . "Content-Transfer-Encoding: 7bit\n\n" . $message . "\n\n"; 
		$message .= "--{$mime_boundary}\n";
		$file = fopen(base_url().'handouts/GroceryList.pdf',"rb");
		$data = fread($file,filesize( 'handouts/GroceryList.pdf' ));
		fclose($file);
		$data = chunk_split(base64_encode($data));
		$name = 'GroceryList.pdf';
		$message .= "Content-Type: {\"application/octet-stream\"};\n" . " name=\"$name\"\n" . 
		"Content-Disposition: attachment;\n" . " filename=\"$name\"\n" . 
		"Content-Transfer-Encoding: base64\n\n" . $data . "\n\n";
		$message .= "--{$mime_boundary}\n";

		$ok = mail($to, $subject, $message, $headers); 
		if ($ok) { 
			echo "<p>mail sent to $to!</p>"; 
		} else { 
			echo "<p>mail could not be sent!</p>"; 
		} 
	}


	 public function displayViewDetails($confNum) {


 $this->reconnectDb();


    $sql ='select * from fllc_company c,fllc_user u,fllc_location l,fllc_service sv,


fllc_appointments a,fllc_dietitian s where a.location_id = l.location_id and l.company_id= c.company_id  and sv.service_id= a.service_id and s.dietitian_id=a.dietitian_id and u.userid=a.userid and a.confirmation_number= "'.$confNum.'"';


	$query = $this->db->query($sql);


	$this->closeDb();


	return $query;	


	}


	


    public function getAllUserAppts($dietitian_id){	


	$this->reconnectDb();


   	$sql = 'SELECT * FROM fllc_appointments a,fllc_dietitian s, fllc_user u,fllc_dietitian_srvc svc,fllc_service sv WHERE s.email = "'.$dietitian_id.'" AND a.booking_status="Yes" AND a.dietitian_id=s.dietitian_id AND u.userid=a.userid and svc.service_id=sv.service_id and a.service_id=sv.service_id order by appointment_date desc,str_to_date(concat(time(a.appointment_time)," ",substring_index(a.appointment_time," ",-1)),"%r") desc' ;


	 $query = $this->db->query($sql);


	 $output ="";


	foreach ($query->result() as $row)


     {


	    $output [] = $row;


	 }


	 $this->closeDb();


	 return $output;	


	}


	


	public function getAllServiceNames($locationid) {


	$this->reconnectDb();


	if ( $locationid != "" ) {


	$sql = "select * from fllc_service,fllc_loc_srvc where fllc_loc_srvc.location_id='".$locationid."' and fllc_loc_srvc.service_id = fllc_service.service_id";


	} else {


	$sql = "select * from fllc_service";


	}


	$query = $this->db->query($sql);


	$this->closeDb();


	return $query;


	}


	


	public function getAllDietitianNames($serviceid) {


	$this->reconnectDb();


	if ($serviceid != "" ) {


	$sql = "select * from fllc_dietitian, fllc_dietitian_srvc where fllc_dietitian_srvc.service_id= '".$serviceid."' and fllc_dietitian_srvc.dietitian_id = fllc_dietitian.dietitian_id";


	} else {


	$sql = "select * from fllc_dietitian";


	}


	$query = $this->db->query($sql);


	$this->closeDb();


	return $query;


	}


	//Added 


	public function calender($cmp_id,$date){


	$this->reconnectDb();


		$sql = "select distinct a.location_id,a.address2,a.company_id, b.appointment_date,b.appointment_time,b.userid,us.firstname,us.lastname,sc.name as service_name,sc.description,cf.conf_room 


				from fllc_location a, fllc_appointments b, fllc_user us, fllc_service sc ,fllc_conference cf  


				where a.location_id=b.location_id and b.userid=us.userid and b.service_id=sc.service_id and b.conference_id=cf.conference_id and a.company_id=".$cmp_id." and b.appointment_date='".$date."';";


		$query = $this->db->query($sql);


		$this->closeDb();


		return $query;


	}


	//ended


	


	


	public function submitreview($username,$rating,$reviewtitle,$reviewdiscription,$userid,$confnumber,$company) {


	$this->reconnectDb();


	$sql = 'insert into fllc_reviews values("","'.$company.'","'.$reviewtitle.'", "'.$reviewdiscription.'", "'.$username.'", "'.$rating.'","No",NOW())';


	//echo $sql;


	$query = $this->db->query($sql);


	if($query) {


		$sqlappointment = 'update fllc_appointments set posted_review = "Yes" where confirmation_number = "'.$confnumber.'"';


		$queryappointment = $this->db->query($sqlappointment);


		$this->closeDb();


		return "Your review has been submitted successfully";


	} else {


	    $this->closeDb();


		return "";


	}


	}


	public function getCustomerServiceDetails() {


	$this->reconnectDb();


	$sql = 'select * from fllc_user where usertype="customerservice"';


	$query = $this->db->query($sql);


	$this->closeDb();


	return $query;


	}


	


	public function getAppointmentsForReviewPost($userid,$date) {


	$this->reconnectDb();


	$sql = 'select * from fllc_appointments,fllc_service where appointment_date <= DATE_ADD("'.$date.'", INTERVAL 7 DAY) and DATE_ADD("'.$date.'", INTERVAL 7 DAY) >= appointment_date and userid = "'.$userid.'" and booking_status = "Yes" and posted_review = "No" and fllc_appointments.service_id = fllc_service.service_id';


	//$sql = 'select * from fllc_appointments,fllc_service where appointment_date <= DATE_ADD("'.$date.'", INTERVAL 7 DAY) and DATE_ADD("'.$date.'", INTERVAL 7 DAY) >= appointment_date and userid = "'.$userid.'" and booking_status = "Yes" and fllc_appointments.service_id = fllc_service.service_id';


	$query = $this->db->query($sql);


	$this->closeDb();


	return $query;


	}


	


	public function removePendingAppointments() {


	 $this->reconnectDb();


	 //$sql = 'DELETE from fllc_appointments where (TIME_TO_SEC(NOW()) - TIME_TO_SEC(appointment_time)) >= 300 and booked_date = CURDATE() and booking_status = "Pending" ';


	 $sql = 'DELETE from fllc_appointments where booking_status="Pending" and booked_date=current_date and current_time >= addtime(booked_time,"00:05:00")';





	 $query = $this->db->query($sql);


	 $this->closeDb();


	 return $query;


	}


	


	public function getAppointmentsFor5minReminder() {


	$this->reconnectDb();


	 //$sql = 'SELECT userid from fllc_appointments where (TIME_TO_SEC(NOW()) - TIME_TO_SEC(appointment_time)) = -300 and appointment_date = CURDATE() and booking_status = "Yes" ';


	$sql = 'SELECT userid from fllc_appointments where (TIME_TO_SEC(NOW()) - TIME_TO_SEC(appointment_time)) = -300 and appointment_date = CURDATE() and booking_status = "Yes" ';





	 $query = $this->db->query($sql);


	 $this->closeDb();


	 return $query;


	}


	


	public function getAppointmentsFor1hourReminder() {


	$this->reconnectDb();


	 //$sql = 'SELECT * from fllc_appointments where ((TIME_TO_SEC(NOW()) - TIME_TO_SEC(appointment_time)) >= 3600) and ((TIME_TO_SEC(NOW()) - TIME_TO_SEC(appointment_time)) <= 3900)  and appointment_date = CURDATE() and booking_status = "Yes" and posted_review = "No" and hourly_mail_status= "No" ';


	 //$sql = 'SELECT * from fllc_appointments where (TIME_TO_SEC(timediff(str_to_date(concat(time(appointment_time)," ",substring_index(appointment_time," ",-1)),"%r"),time(now()))) >= -4000) and (TIME_TO_SEC(timediff(str_to_date(concat(time(appointment_time)," ",substring_index(appointment_time," ",-1)),"%r"),time(now()))) <= 0)  and appointment_date = CURDATE() and booking_status = "Yes" and posted_review = "No" and hourly_mail_status= "Yes" ';
	$sql = 'SELECT * FROM `fllc_appointments` where appointment_date = CURDATE() and booking_status = "Yes" and ( TIMESTAMPDIFF( MINUTE, NOW(), STR_TO_DATE(CONCAT(`appointment_date`, " ", `appointment_time` ), "%Y-%m-%d %h:%i %p") ) <= 60 and TIMESTAMPDIFF( MINUTE, NOW(), STR_TO_DATE(CONCAT(`appointment_date`, " ", `appointment_time` ), "%Y-%m-%d %h:%i %p") ) > 0 )';


 


	$query = $this->db->query($sql);


	 $this->closeDb();


	 return $query;


	}


	public function getAppointmentsFor24hourReminder() {


	$this->reconnectDb();

	 $sql = 'select * from fllc_appointments,fllc_location,fllc_conference where fllc_appointments.appointment_date = (CURDATE()+interval 1 day) and fllc_appointments.booking_status = "Yes" and fllc_appointments.daily_mail_status = "Yes" and fllc_appointments.location_id = fllc_location.location_id and fllc_appointments.conference_id = fllc_conference.conference_id ORDER BY fllc_appointments.confirmation_number';


	 $query = $this->db->query($sql);


	 $this->closeDb();


	 return $query;


	}


	public function getAppointmentsFor1weekReminder() {


	$this->reconnectDb();


	//$sql = 'select * from fllc_appointments,fllc_location,fllc_conference where (TIME_TO_SEC(timediff(str_to_date(concat(time(appointment_time)," ",substring_index(appointment_time," ",-1)),"%r"),time(now()))) >= 0) and (TIME_TO_SEC(timediff(str_to_date(concat(time(appointment_time)," ",substring_index(appointment_time," ",-1)),"%r"),time(now()))) <= 3600) and fllc_appointments.appointment_date = (CURDATE()+interval 1 week) and fllc_appointments.booking_status = "Yes" and fllc_appointments.location_id = fllc_location.location_id and fllc_appointments.weekly_mail_status = "No" and fllc_appointments.conference_id = fllc_conference.conference_id ORDER BY fllc_appointments.confirmation_number ';


	


	$sql = 'select * from fllc_appointments,fllc_location,fllc_conference where fllc_appointments.appointment_date = (CURDATE()+interval 1 week) and fllc_appointments.booking_status = "Yes" and fllc_appointments.location_id = fllc_location.location_id and fllc_appointments.weekly_mail_status = "Yes" and fllc_appointments.conference_id = fllc_conference.conference_id ORDER BY fllc_appointments.confirmation_number ';





	 $query = $this->db->query($sql);


	 $this->closeDb();


	 return $query;


	}		


	public function getCustomerListByName($svalue) {


	$this->reconnectDb();


	$sql= 'SELECT * FROM fllc_user WHERE firstname LIKE "'.$svalue.'%" OR lastname LIKE "'.$svalue.'%" ORDER BY lastname';


	//echo $sql;


	$query = $this->db->query($sql);


	$this->closeDb();


	return $query;


	}



   //edited : added sql function
	public function updatePrivacyConsent( $userid ){

		$this->reconnectDb();

		$sql = 'update fllc_user set privacy_consent = 1 where  userid="'. $userid.'"'; 
			
		$query=$this->db->query($sql);


		$this->closeDb();


		return $query;
	}

	public function getUserFutureAppointments( $userid, $dietitian_id, $today ){
		$sql = "SELECT *,STR_TO_DATE(a.appointment_time, '%h:%i %p') as timeSet FROM fllc_appointments a,fllc_dietitian s, fllc_user u,fllc_dietitian_srvc svc,fllc_service sv,fllc_location loc,fllc_company cat 
		WHERE s.email = '".$dietitian_id."'  AND a.booking_status='Yes' AND a.dietitian_id=s.dietitian_id AND u.userid=a.userid AND svc.dietitian_id = s.dietitian_id AND svc.service_id=sv.service_id AND a.service_id=sv.service_id AND a.location_id=loc.location_id and 
		loc.company_id = cat.company_id and appointment_date >= '".$today."' and a.userid = '".$userid."' ORDER BY appointment_date ASC, timeSet ASC";

		$query=$this->db->query($sql);
		$this->closeDb();

		return $query;
	}


}





/* End of file welcome.php */


/* Location: ./application/controllers/welcome.php */