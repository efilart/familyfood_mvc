<!DOCTYPE html>
<html class="no-js before-run" lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<meta name="description" content="bootstrap admin template">
<meta name="author" content="">
<title>View / Manage Companies - Familyfood Dashboard</title>
<!-- Favicon -->
<link rel="icon" type="image/ico" href="../../../favicon.ico"/>
<link rel="apple-touch-icon" sizes="57x57" href="../../../apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="../../../apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="../../../apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="../../../apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="../../../apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="../../../apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="../../../apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="../../../apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="../../../apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="../../../android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="../../../favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="../../../favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="../../../favicon-16x16.png">

<!-- Stylesheets -->
<link rel="stylesheet" href="../assets/assets/css/bootstrap.min.css">
<link rel="stylesheet" href="../assets/assets/css/bootstrap-extend.min.css">
<link rel="stylesheet" href="../assets/assets/css/site.min.css">
<link rel="stylesheet" href="../assets/assets/vendor/animsition/animsition.css">
<link rel="stylesheet" href="../assets/assets/vendor/asscrollable/asScrollable.css">
<link rel="stylesheet" href="../assets/assets/vendor/switchery/switchery.css">
<link rel="stylesheet" href="../assets/assets/vendor/intro-js/introjs.css">
<link rel="stylesheet" href="../assets/assets/vendor/slidepanel/slidePanel.css">
<link rel="stylesheet" href="../assets/assets/vendor/flag-icon-css/flag-icon.css">
<link rel="stylesheet" href="../assets/assets/vendor/webui-popover/webui-popover.css">

<link rel="stylesheet" href="../assets/assets/css/custom.css">

<!-- Plugin -->
<link rel="stylesheet" href="../assets/assets/vendor/formvalidation/formValidation.css">
<link rel="stylesheet" href="../assets/assets/vendor/footable/footable.core.css">
<link rel="stylesheet" href="../assets/assets/vendor/bootstrap-datepicker/bootstrap-datepicker.css">
<link rel="stylesheet" href="../assets/assets/vendor/jt-timepicker/jquery-timepicker.css">
<link rel="stylesheet" href="../assets/assets/vendor/bootstrap-sweetalert/sweet-alert.css">
<link rel="stylesheet" href="../assets/assets/vendor/bootstrap-select/bootstrap-select.css">
<link rel="stylesheet" href="../assets/assets/vendor/multi-select/multi-select.css">

<!-- Fonts -->
<link rel="stylesheet" href="../assets/assets/fonts/web-icons/web-icons.min.css">
<link rel="stylesheet" href="../assets/assets/fonts/brand-icons/brand-icons.min.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>
<script src="https://use.fontawesome.com/286c52578e.js"></script>

<!--[if lt IE 9]>
    <script src="../assets/vendor/html5shiv/html5shiv.min.js"></script>
    <![endif]-->

<!--[if lt IE 10]>
    <script src="../assets/vendor/media-match/media.match.min.js"></script>
    <script src="../assets/vendor/respond/respond.min.js"></script>
    <![endif]-->

<!-- Scripts -->
<script src="../assets/assets/vendor/modernizr/modernizr.js"></script>
<script src="../assets/assets/vendor/breakpoints/breakpoints.js"></script>
<script>
    Breakpoints();
</script>
</head>
<body class="dashboard site-menubar-unfold" data-auto-menubar="false">
<!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]--> 

<!-- start header menu -->
<?php include("inc_menu_header.php"); ?>
<!-- end header menu --> 

<!-- start left menu -->
<?php include("inc_left_menu.php"); ?>
<!-- end left menu --> 

<!-- Page -->
<div class="page animsition">
<div class="page-header">
<h1 class="page-title">View / Manage Companies</h1>
<div class="page-header-actions">
<!--button type="button" class="btn btn-danger btn-block btn-round"><i class="icon wb-plus" aria-hidden="true"></i> ADD COMPANY</button-->
<a href="javascript:void(0);" onclick="downloadFeedBack(0,0)" role="button" class="btn btn-danger btn-block btn-round"><i class="icon wb-download" aria-hidden="true"></i>DOWNLOAD FEEDBACK</a>
<a href="companyAdd" role="button" class="btn btn-danger btn-block btn-round"><i class="icon wb-plus" aria-hidden="true"></i>ADD COMPANY</a>
</div>
</div>
<div class="page-content container-fluid">
<div class="row">
<div class="col-lg-12">
<!-- Panel Add &amp; Remove Rows -->
<?php
$companyListForSelect = "";
if( !empty( $categoryList ) ){
	foreach( $categoryList as $categ ){
		$companyListForSelect .= '<option value="'.$categ['company_id'].'">'.$categ['company_name'].'</option>';
		$company = str_replace( ' ', '', $categ['company_name'] )."_".$categ['company_id'];
		$companyID = $categ['company_id'];
		$company_name = $categ['company_name'];
		echo <<< EOT
		<div class="panel">
		<header class="panel-heading">
		<h3 class="panel-title">{$categ['company_name']}</h3>
		</header>
		<div class="panel-body"> 
		<!-- add location button -->
		<div class="form-inline padding-bottom-15">
		<div class="row">
		<div class="col-sm-6">
		<div class="form-group" style="padding-top: 25px">
		<button onclick="addEditLocaiton( 0, {$companyID} )" class="addRowBtnTest btn btn-primary"><i class="icon wb-plus" aria-hidden="true"></i>&nbsp;&nbsp;Add New Location</button>
		<button onclick="downloadClientList( {$companyID} )" class="btn btn-primary"><i class="fa fa-file-excel-o"></i>&nbsp;&nbsp;Download CSV File</button>
		<button class="btn btn-primary" data-toggle="modal" type="button" onclick="addUser({$companyID})"><i class="icon wb-plus" aria-hidden="true"></i>&nbsp;&nbsp;Add New User</button>
		</div>
		</div>
		<div class="col-sm-6 text-right">
		<div class="form-group" style="padding-top: 25px">
		<input class="addRemoveSearch form-control" type="text" placeholder="Search" autocomplete="off">
		</div>
		</div>
		</div>
		</div>
		<!-- table -->
		<table id={$company} class="{$company} normalTable table table-bordered table-hover toggle-circle" data-page-size="5">
		<thead>
		<tr>
		<th data-sort-initial="true" data-toggle="true">Address</th>
		<th data-hide="phone">State</th>
		<th data-hide="phone" data-sort-ignore="true" class="min-width text-center">Add Service</th>
		<th data-hide="phone" data-sort-ignore="true" class="min-width text-center">Edit Details</th>
		<!--<th data-hide="phone" data-sort-ignore="true" class="min-width text-center">Download Feedback</th>-->
		<th data-hide="phone" data-sort-ignore="true" class="min-width text-center">DELETE</th>
		</tr>
		</thead>
		<tbody>
EOT;
		if( !empty( $categ['locationdetails']['location'] ) ){
			foreach( $categ['locationdetails']['location'] as $loc ){
				$loc_id = $loc->location_id;
				echo <<< EOT
				<tr>
				<td>{$loc->address1}&nbsp;{$loc->address2}</td>
				<td>{$loc->city}</td>
				<td class="text-center"><button type="button" class="btn btn-icon btn-warning btn-round" onclick="addService( {$loc_id} )" data-toggle="modal"><i class="icon wb-plus" aria-hidden="true"></i></button></td>
				<td class="text-center"><button type="button" onclick="addEditLocaiton( {$loc_id}, {$companyID} )" class="btn btn-icon btn-warning btn-round" data-toggle="modal"><i class="icon wb-edit" aria-hidden="true"></i></button></td>
				<!--td class="text-center"><button type="button" class="btn btn-icon btn-danger btn-round delete-row-btn"><i class="icon wb-trash" aria-hidden="true"></i></button></td>
				<td class="text-center"><button type="button" class="btn btn-icon btn-warning btn-round" onclick="downloadFeedBack({$loc_id}, {$companyID})"><i class="icon wb-download" aria-hidden="true"></i></button></td-->
				<td class="text-center"><button type="button" class="btn btn-icon btn-danger btn-round" onclick="deleteLocation({$loc_id}, this)"><i class="icon wb-trash" aria-hidden="true"></i></button></td>
				</tr>
EOT;
			}
		}
		
		echo <<< EOT
		</tbody>
		<tfoot>
		<tr>
		<td colspan="5"><div class="text-right">
		<ul class="pagination">
		</ul>
		</div></td>
		</tr>
		</tfoot>
		</table>
		<!-- table end -->
		
<!-- table for new user -->



<!-- end table -->
		</div>
		</div>
		<!-- End Panel Add &amp; Remove Rows --> 
EOT;
	}
}
?>
</div>
</div>
</div>
</div>
<!-- End Page -->

<!-- modal popup for new user -->
<div class="modal fade modal-primary" id="addnewuser" aria-hidden="true" aria-labelledby="addnewuser" role="dialog" tabindex="-1">
<div class="modal-dialog modal-center">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
<h4 class="modal-title">Add New User</h4>
</div>
<div class="modal-body">
<div class="row">
<h4>User List</h4>
<table id="userListTable" class="table table-bordered table-hover toggle-circle">
	<thead><tr><td>Firstname</td><td>Lastname</td><td>Email</td></tr></thead>
	<tbody></tbody>
</table>
</div>
<div class="row">
<div class="col-lg-4 form-group"><input type="text" class="form-control" name="firstName" id="firstname" placeholder="First Name"></div>
<div class="col-lg-4 form-group"><input type="text" class="form-control" name="lastName" id="lastname" placeholder="Last Name"></div>
<div class="col-lg-4 form-group"><input type="email" class="form-control" name="email" id="email" placeholder="Your Email"></div>
</div>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal" id="closeNewUser">Close</button>
<button type="button" class="btn btn-primary" id="saveNewUser">Save changes</button>
</div>
</div>
</div>
</div>

<!-- modal popup for service -->
<div class="modal fade modal-fill-in" id="addservice" aria-hidden="false" aria-labelledby="exampleFillIn" role="dialog" tabindex="-1" style="display: none;">
<div class="modal-dialog" style="height: 100% !important;">
<div class="modal-content">

<div class="modal-body">
<div class="modal fade modal-fill-in in" id="exampleFillIn" aria-hidden="false" aria-labelledby="exampleFillIn" role="dialog" tabindex="-1" style="display: block; padding-right: 17px;">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">×</span> </button>
<h4 class="modal-title" id="exampleFillInModalTitle">Add Services</h4>
</div>
<div class="modal-body">
<form>
<div class="row">
<?php
if( !empty( $serviceList ) ){
	$count = count( $serviceList );
	if( $count > 0 ){
		echo '<div class="col-lg-6 form-group">';
			foreach( $serviceList as $key=>$service ){
			if( floor( $count/2 ) == $key ){
				echo '</div><div class="col-lg-6 form-group">';
				echo '<div class="checkbox-custom checkbox-primary">
					<input type="checkbox" class="serviceCheckbox" id="service_'.$service['service_id'].'" value='.$service['service_id'].'>
					<label for="service_'.$service['service_id'].'">'.$service['name'].'</label>
					</div>';
			}else{
				echo '<div class="checkbox-custom checkbox-primary">
					<input type="checkbox" class="serviceCheckbox" id="service_'.$service['service_id'].'" value='.$service['service_id'].'>
					<label for="service_'.$service['service_id'].'">'.$service['name'].'</label>
					</div>';
			}
		}
		echo '</div>';
	}
}
?>
<!-- <div class="col-lg-6 form-group">
<div class="checkbox-custom checkbox-primary">
<input type="checkbox" id="1">
<label for="1">Family Food Nutrition Boot Camp</label>
</div>
<div class="checkbox-custom checkbox-primary">
<input type="checkbox" id="2">
<label for="2">Hamilton Lane Nutrition Boot Camp</label>
</div>
<div class="checkbox-custom checkbox-primary">
<input type="checkbox" id="3">
<label for="3">HMO - Nutrition Counseling</label>
</div>
<div class="checkbox-custom checkbox-primary">
<input type="checkbox" id="4">
<label for="4">HSA/Open Access Plan Nutrition Counseling </label>
</div>
</div>
<div class="checkbox-custom checkbox-primary">
<input type="checkbox" id="5">
<label for="5">Individualized Nutrition Counseling </label>
</div>
<div class="checkbox-custom checkbox-primary">
<input type="checkbox" id="6">
<label for="6">Nutrition Counseling </label>
</div>
<div class="checkbox-custom checkbox-primary">
<input type="checkbox" id="7">
<label for="7">Virtual Nutrition Counseling</label>
</div>
<div class="checkbox-custom checkbox-primary">
<input type="checkbox" id="8">
<label for="8">VWR Eat Right Award Nutrition Counseling</label>
</div> -->
</div>
<div class="col-lg-12"> 
<!-- action buttons here -->

<div class="checkbox-custom checkbox-success">
<input type="checkbox" id="checkAll" />
<label for="checkAll">Check / Uncheck all</label>
<div class="modal-footer">
<div class="pull-right">
<button type="button" class="btn btn-outline btn-primary" data-dismiss="modal">Close</button>
<button onclick="saveService()" type="button" class="btn btn-animate btn-animate-vertical btn-success"> <span><i class="icon wb-add-file" aria-hidden="true"></i>Add Selected</span> </button>
</div>
</div>

</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- end service modal --> 

<!-- modal popup for details page 1 -->
<div class="modal fade modal-fill-in in" id="editLocation" aria-hidden="true" aria-labelledby="editLocation" role="dialog" tabindex="-1">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">×</span> </button>

<!-- step 1 header -->
<div class="steps row">
<div class="step col-md-6 current">
<span class="step-number">1</span>
<div class="step-desc">
<span class="step-title">Edit Location</span>
<p>Choose company details</p>
</div>
</div>

<div class="step col-md-6">
<span class="step-number">2</span>
<div class="step-desc">
<span class="step-title">Conference Room</span>
<p>Assign Dietitian</p>
</div>
</div>

</div>
<!-- end step 1 header -->                 
</div>

<div class="modal-body"> 
<!-- insert form here -->
<div class="form-group">
<label>Corporate Company <span class="required">*</span></label>
<input type="hidden" name="location_id" id="locationID">
<select id="editNewLocationSelection" name="service-company" class="editNewLocationSelection form-control">
<?php echo $companyListForSelect; ?>
<!-- <option value="115">1 and 1 Internet</option>
<option value="67">ACTS</option>
<option value="61">Agnes Irwin </option>
<option value="54">American Association for Cancer Research</option>
<option value="70">American Hearing Aid Associates</option>
<option value="14">Amerihealth</option>
<option value="56">Arcadia</option>
<option value="59">ARI</option>
<option value="16">Ballard Spahr LLP</option>
<option value="68">Bryn Mawr College</option>
<option value="121">BSSF</option>
<option value="39">Bucks County Community College</option>
<option value="77">Cabrini College</option>
<option value="25">Calvary Temple Christian Academy</option>
<option value="106">Campus Apartments</option>
<option value="10">CFFS</option>
<option value="98">Cohen Seglias</option>
<option value="49">Community Behavioral Health</option>
<option value="60">Community College of Philadelphia</option>
<option value="94">Community Legal Services</option>
<option value="22">Cozen O'Connor</option>
<option value="35">Crefeld School</option>
<option value="99">David Thomas Trailways</option>
<option value="79">Delaware County Christian School</option>
<option value="15">Drinker Biddle &amp; Reath</option>
<option value="52">Eastern National </option>
<option value="63">Eastern University </option>
<option value="93">Elliott-Lewis</option>
<option value="101">eXude</option>
<option value="31">Fox Chase Cancer Center</option>
<option value="85">Friends Select School</option>
<option value="43">GF Hotels</option>
<option value="84">Gwynedd Mercy University </option>
<option value="62">Hamilton Lane</option>
<option value="42">Haverford College</option>
<option value="83">Hill Top Prep</option>
<option value="18">Holman Automotive</option>
<option value="112">Holt Logistics Corp</option>
<option value="65">Holy Family University</option>
<option value="110">HTTS</option>
<option value="51">IFM</option>
<option value="80">Justi Group</option>
<option value="21">Kendal Corporation</option>
<option value="40">KTB</option>
<option value="86">La Salle College High School</option>
<option value="66">La Salle University</option>
<option value="13">Longwood Gardens</option>
<option value="114">Lumbermen's Merchandising</option>
<option value="100">MAFCO</option>
<option value="58">Manor College</option>
<option value="30">Medical Examiners</option>
<option value="108">Menasha Display</option>
<option value="95">My Alarm Center</option>
<option value="88">New Hanover County</option>
<option value="105">Newtown Friends School</option>
<option value="97">Ocean City Home Bank</option>
<option value="111">Packaging Coordinators Inc</option>
<option value="89">Paragon Bank</option>
<option value="34">Pennsylvania Academy of the Fine Arts</option>
<option value="53">Pennsylvania Institute of Technology</option>
<option value="36">Performcare</option>
<option value="41">Philadelphia Parking Authority</option>
<option value="74">Piramal</option>
<option value="29">PMI</option>
<option value="103">Precision Escalator Products</option>
<option value="28">PREIT</option>
<option value="118">Price Automotive Group</option>
<option value="11">QVC</option>
<option value="47">Rothman Institute</option>
<option value="19">Saint Joseph's University</option>
<option value="55">Salus University</option>
<option value="71">Saunders House</option>
<option value="78">St Aloysius Academy</option>
<option value="92">St Joe's Prep</option>
<option value="117">St Peter's School</option>
<option value="76">Stradley Ronon Stevens and Young</option>
<option value="107">Stratford Friends School</option>
<option value="104">Sungard</option>
<option value="45">Swarthmore College</option>
<option value="26">Temple University</option>
<option value="20">Temple University Health System</option>
<option value="75">The Haverford School</option>
<option value="46">The Institutes</option>
<option value="81">The Timothy School</option>
<option value="44">Therapy Source</option>
<option value="96">Troemner</option>
<option value="69">UCH</option>
<option value="102">University of Pennsylvania</option>
<option value="116">University of Pennsylvania Health System</option>
<option value="23">University of the Arts</option>
<option value="33">University of the Sciences</option>
<option value="72">Ursinus College</option>
<option value="48">USW Local 286</option>
<option value="17">Villanova University</option>
<option value="90">Visit Pittsburgh</option>
<option value="120">Volpe and Koenig</option>
<option value="91">VWR</option>
<option value="64">Wallace Roberts and Todd</option>
<option value="32">Widener University</option>
<option value="27">Wiley Mission</option> -->
</select>
</div>
<div class="form-group row">
<div class="col-sm-6">
<label class="control-label" for="inputAddress">Address</label>
<span class="required">*</span>
<input type="text" class="form-control" id="addressInput" name="cmpadd2" placeholder="Address" autocomplete="off">
</div>
<div class="col-sm-6">
<label class="control-label" name="cmpstate" for="inputState">State</label>
<span class="required">*</span>
<select id="city" class="form-control">
<option value="AL">Alabama</option>
<option value="AK">Alaska</option>
<option value="AZ">Arizona</option>
<option value="AR">Arkansas</option>
<option value="CA">California</option>
<option value="CO">Colorado</option>
<option value="CT">Connecticut</option>
<option value="DE">Delaware</option>
<option value="DC">District Of Columbia</option>
<option value="FL">Florida</option>
<option value="GA">Georgia</option>
<option value="HI">Hawaii</option>
<option value="ID">Idaho</option>
<option value="IL">Illinois</option>
<option value="IN">Indiana</option>
<option value="IA">Iowa</option>
<option value="KS">Kansas</option>
<option value="KY">Kentucky</option>
<option value="LA">Louisiana</option>
<option value="ME">Maine</option>
<option value="MD">Maryland</option>
<option value="MA">Massachusetts</option>
<option value="MI">Michigan</option>
<option value="MN">Minnesota</option>
<option value="MS">Mississippi</option>
<option value="MO">Missouri</option>
<option value="MT">Montana</option>
<option value="NE">Nebraska</option>
<option value="NV">Nevada</option>
<option value="NH">New Hampshire</option>
<option value="NJ">New Jersey</option>
<option value="NM">New Mexico</option>
<option value="NY">New York</option>
<option value="NC">North Carolina</option>
<option value="ND">North Dakota</option>
<option value="OH">Ohio</option>
<option value="OK">Oklahoma</option>
<option value="OR">Oregon</option>
<option value="PA">Pennsylvania</option>
<option value="RI">Rhode Island</option>
<option value="SC">South Carolina</option>
<option value="SD">South Dakota</option>
<option value="TN">Tennessee</option>
<option value="TX">Texas</option>
<option value="UT">Utah</option>
<option value="VT">Vermont</option>
<option value="VA">Virginia</option>
<option value="WA">Washington</option>
<option value="WV">West Virginia</option>
<option value="WI">Wisconsin</option>
<option value="WY">Wyoming</option>
</select>
</div>
</div>
<div class="form-group row">
<div class="col-sm-6">
<label class="control-label" for="inputAddress">Zip code</label>
<span class="required">*</span>
<input type="text" class="form-control" id="zipInput" name="zipInput" placeholder="Zip code" data-fv-field="type_digits">
</div>
<div class="col-sm-6"> </div>
<!-- Pop with table -->

<!-- End Pop with table -->

</div>

<div class="form-group row">
<div class="col-sm-12">
<h4 class="example-title">Additional notes:</h4>
<textarea class="form-control" id="notes" rows="3"></textarea>
</div>
</div>

<div id="dateTimeList">
<!-- <div class="col-sm-4">
<span class="required">*</span>
<label class="control-label" for="inputTime">Available Date</label>
</div>
<div class="col-sm-4">
<span class="required">*</span>
<label class="control-label" for="inputTime">Start Time</label>
</div>
<div class="col-sm-4">
<span class="required">*</span>
<label class="control-label" for="inputTime">End Time</label>
</div> -->
<!-- <div class="col-sm-4">
<div class="input-group"> <span class="input-group-addon"><i class="icon wb-calendar" aria-hidden="true"></i></span>
<input type="text" id="dateInput" class="form-control" data-plugin="datepicker">
</div>
</div>
<div class="col-sm-4">
<div class="input-group"> <span class="input-group-addon"><i class="icon wb-time" aria-hidden="true"></i></span>
<input type="text" id="startTimeInput" class="form-control" data-plugin="timepicker" />
</div>
</div>
<div class="col-sm-4">
<div class="input-group"> <span class="input-group-addon"><i class="icon wb-time" aria-hidden="true"></i></span>
<input type="text" id="endTimeInput" class="form-control" data-plugin="timepicker" />
</div>
</div> -->
<!-- end form content --> 
</div>
<button type="button" class="btn btn-info" onclick="addDate()">Add Date</button>

<!-- end form content --> 
</div>
<div class="modal-footer">
<button type="button" class="btn btn-outline btn-primary" id="cancelLocation" data-dismiss="modal">Cancel</button>
<button type="button" class="btn btn-info" id="conferenceRoomBtn" data-toggle="modal">Proceed to Conference Room&nbsp;&nbsp;&nbsp;<i class="fa fa-chevron-right" aria-hidden="true"></i></button>
<!--button type="button" class="btn btn-primary" data-target="#conferenceRoom" data-toggle="modal" data-dismiss="modal"> Assign Conference Room</button-->
</div>
</div>
</div>
</div>
<!-- details page 1 modal --> 

<!-- modal popup for details page 2 -->
<div class="modal fade modal-fill-in" id="conferenceRoom" aria-hidden="false" role="dialog" tabindex="-1">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">×</span></button>
<!-- start step 2 -->
<!-- step 1 header -->
<div class="steps row">

<div class="step col-md-6">
<span class="step-number">1</span>
<div class="step-desc">
<span class="step-title">Edit Location</span>
<p>Choose company details</p>
</div>
</div>

<div class="step col-md-6 current">
<span class="step-number">2</span>
<div class="step-desc">
<span class="step-title">Conference Room</span>
<p>Assign Dietitian</p>
</div>
</div>
</div>
<!-- end step 2 header -->

<div class="modal-body">
<!-- page 2 content -->
<div class="form-group row">
<div class="col-sm-6">
<input type="text" class="form-control" id="cmpconfr1" name="cmpconfr1" placeholder="Conference Room 1" data-fv-field="type_digits">
</div>
<div class="col-sm-6">
<div class="button-group" id="confDietitian1">
<button type="button" onclick="displaySelectedDietitian(1)" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><span><i class="fa fa-user-plus">&nbsp;Select Dietitian</i></span> <span class="caret"></span></button>
<ul class="dropdown-menu" style="OVERFLOW-Y:scroll; width:auto; height:300px">
<!-- <optgroup label="Chelsea Anderson">
<option class="small" value="Individualized Nutrition Counseling">Individualized Nutrition Counseling</option>
</optgroup>

<optgroup label="Cierra Robbins">
<option class="small" value="Individualized Nutrition Counseling, Nutrition Counseling, Family Food Nutrition Boot Camp">Individualized Nutrition Counseling, Nutrition Counseling, Family Food Nutrition Boot Camp</option>
</optgroup> -->
<?php echo $dietitianList1; ?>
</ul>
</div>
</div>
</div>

<div class="form-group row">
<div class="col-sm-6">
<input type="text" class="form-control" id="cmpconfr2" name="cmpconfr2" placeholder="Conference Room 2" data-fv-field="type_digits">
</div>
<div class="col-sm-6">
<div class="button-group" id="confDietitian2">
<button type="button" onclick="displaySelectedDietitian(2)" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><span><i class="fa fa-user-plus">&nbsp;Select Dietitian</i></span> <span class="caret"></span></button>
<ul class="dropdown-menu" style="OVERFLOW-Y:scroll; width:auto; height:300px">
<!-- <optgroup label="Chelsea Anderson">
<option class="small" value="Individualized Nutrition Counseling">Individualized Nutrition Counseling</option>
</optgroup>

<optgroup label="Cierra Robbins">
<option class="small" value="Individualized Nutrition Counseling, Nutrition Counseling, Family Food Nutrition Boot Camp">Individualized Nutrition Counseling, Nutrition Counseling, Family Food Nutrition Boot Camp</option>
</optgroup> -->
<?php echo $dietitianList2; ?>
</ul>
</div>
</div>
</div>

<div class="form-group row">
<div class="col-sm-6">
<input type="text" class="form-control" id="cmpconfr3" name="cmpconfr3" placeholder="Conference Room 3" data-fv-field="type_digits">
</div>
<div class="col-sm-6">
<div class="button-group" id="confDietitian3">
<button type="button" onclick="displaySelectedDietitian(3)" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><span><i class="fa fa-user-plus">&nbsp;Select Dietitian</i></span> <span class="caret"></span></button>
<ul class="dropdown-menu" style="OVERFLOW-Y:scroll; width:auto; height:300px">
<!-- <optgroup label="Chelsea Anderson">
<option class="small" value="Individualized Nutrition Counseling">Individualized Nutrition Counseling</option>
</optgroup>

<optgroup label="Cierra Robbins">
<option class="small" value="Individualized Nutrition Counseling, Nutrition Counseling, Family Food Nutrition Boot Camp">Individualized Nutrition Counseling, Nutrition Counseling, Family Food Nutrition Boot Camp</option>
</optgroup> -->
<?php echo $dietitianList3; ?>
</ul>
</div>
</div>
</div>

<div class="form-group row">
<div class="col-sm-6">
<input type="text" class="form-control" id="cmpconfr4" name="cmpconfr4" placeholder="Conference Room 4" data-fv-field="type_digits">
</div>
<div class="col-sm-6">
<div class="button-group" id="confDietitian4">
<button type="button" onclick="displaySelectedDietitian(4)" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><span><i class="fa fa-user-plus">&nbsp;Select Dietitian</i></span> <span class="caret"></span></button>
<ul class="dropdown-menu" style="OVERFLOW-Y:scroll; width:auto; height:300px">
<!-- <optgroup label="Chelsea Anderson">
<option class="small" value="Individualized Nutrition Counseling">Individualized Nutrition Counseling</option>
</optgroup>

<optgroup label="Cierra Robbins">
<option class="small" value="Individualized Nutrition Counseling, Nutrition Counseling, Family Food Nutrition Boot Camp">Individualized Nutrition Counseling, Nutrition Counseling, Family Food Nutrition Boot Camp</option>
</optgroup> -->
<?php echo $dietitianList4; ?>
</ul>
</div>
</div>
</div>

<div class="form-group row">
<div class="col-sm-6">
<input type="text" class="form-control" id="cmpconfr5" name="cmpconfr5" placeholder="Conference Room 5" data-fv-field="type_digits">
</div>
<div class="col-sm-6">
<div class="button-group" id="confDietitian5">
<button type="button" onclick="displaySelectedDietitian(5)" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><span><i class="fa fa-user-plus">&nbsp;Select Dietitian</i></span> <span class="caret"></span></button>
<ul class="dropdown-menu" style="OVERFLOW-Y:scroll; width:auto; height:300px">
<!-- <optgroup label="Chelsea Anderson">
<option class="small" value="Individualized Nutrition Counseling">Individualized Nutrition Counseling</option>
</optgroup>

<optgroup label="Cierra Robbins">
<option class="small" value="Individualized Nutrition Counseling, Nutrition Counseling, Family Food Nutrition Boot Camp">Individualized Nutrition Counseling, Nutrition Counseling, Family Food Nutrition Boot Camp</option>
</optgroup> -->
<?php echo $dietitianList5; ?>
</ul>
</div>
</div>
</div>


<!-- end page 2 content -->
</div>
																						
<div class="modal-footer">
<button type="button" class="btn btn-outline btn-primary" data-dismiss="modal">Cancel</button>
<button type="button" class="btn btn-info" data-target="#editLocation" data-toggle="modal" data-dismiss="modal"><i class="fa fa-chevron-left" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;Back to Location</button>
<button type="button" class="btn btn-success" id="submitLocation"><i class="icon wb-check" aria-hidden="true"></i> SUBMIT</button>

</div>
</div>
</div>
</div>
</div>
<!-- modal popup for details page 2 --> 
<!-- Footer -->
<?php include("inc_footer.php"); ?>

<!-- Core  --> 
<script src="../assets/assets/vendor/jquery/jquery.js"></script> 
<script src="../assets/assets/vendor/bootstrap/bootstrap.js"></script> 
<script src="../assets/assets/vendor/animsition/jquery.animsition.js"></script> 
<script src="../assets/assets/vendor/mousewheel/jquery.mousewheel.js"></script> 
<script src="../assets/assets/vendor/asscrollable/jquery.asScrollable.all.min.js"></script> 
<script src="../assets/assets/vendor/ashoverscroll/jquery-asHoverScroll.js"></script> 
<script src="../assets/assets/js/components/bootbox.js"></script> 


<!-- Plugins --> 
<script src="../assets/assets/vendor/switchery/switchery.min.js"></script> 
<script src="../assets/assets/vendor/intro-js/intro.js"></script> 
<script src="../assets/assets/vendor/screenfull/screenfull.js"></script> 
<script src="../assets/assets/vendor/bootbox/bootbox.js"></script>
<script src="../assets/assets/vendor/bootstrap-sweetalert/sweet-alert.js"></script>
<script src="../assets/assets/vendor/slidepanel/jquery-slidePanel.js"></script> 
<script src="../assets/assets/vendor/footable/footable.all.min.js"></script> 
<script src="../assets/assets/vendor/bootstrap-datepicker/bootstrap-datepicker.js"></script> 
<script src="../assets/assets/vendor/jt-timepicker/jquery.timepicker.min.js"></script> 
<script src="../assets/assets/vendor/bootstrap-select/bootstrap-select.js"></script>
<script src="../assets/assets/vendor/multi-select/jquery.multi-select.js"></script>

<!-- popover -->
<script src="../assets/assets/vendor/webui-popover/jquery.webui-popover.min.js"></script>
<script src="../assets/assets/js/components/webui-popover.js"></script>

<!-- Scripts --> 
<script src="../assets/assets/js/core.js"></script> 
<script src="../assets/assets/js/site.js"></script> 
<script src="../assets/assets/js/sections/menu.js"></script> 
<script src="../assets/assets/js/sections/menubar.js"></script> 
<script src="../assets/assets/js/sections/sidebar.js"></script> 
<script src="../assets/assets/js/configs/config-colors.js"></script> 
<script src="../assets/assets/js/configs/config-tour.js"></script> 
<script src="../assets/assets/js/components/asscrollable.js"></script> 
<script src="../assets/assets/js/components/animsition.js"></script> 
<script src="../assets/assets/js/components/slidepanel.js"></script> 
<script src="../assets/assets/js/components/switchery.js"></script> 
<script src="../assets/assets/js/components/bootstrap-sweetalert.js"></script>
<script src="../assets/assets/js/components/bootstrap-datepicker.js"></script> 
<script src="../assets/assets/js/components/jt-timepicker.js"></script>
<script src="../assets/assets/js/components/bootstrap-select.js"></script>
<script src="../assets/assets/js/components/multi-select.js"></script>
<script src="../assets/assets/js/components/panel.min.js"></script>
<script src="../assets/assets/js/components/panel-actions.min.js"></script>


<script>
	function addUser( companyid ){
		$.ajax({
			type: 'POST',
			datatype: 'JSON',
			url: 'getCompanyUser',
			data: { 
				'companyID': companyid,
			},
			success: function( data ){
				var userList = jQuery.parseJSON(data);
				var list = '';
				$.each( userList, function(key,value){
					list += '<tr><td>'+value.firstname+'</td><td>'+value.lastname+'</td><td>'+value.userid+'</td></tr>';
				});

				if( list == '' ){ list = '<tr><td colspan=3>No user</td></tr>';}

				$( '#userListTable tbody' ).html(list);
			},
		});

		$( '#addnewuser' ).modal( 'show' );
		$( '#saveNewUser' ).click(function(){
			var firstname = $('#firstname').val();
			var lastname = $('#lastname').val();
			var email = $('#email').val();
			if( firstname != "" && lastname != "" && email != "" ){
				$.ajax({
					type: 'POST',
					datatype: 'JSON',
					url: 'saveCompanyUser',
					data: { 
						'companyID': companyid,
						'firstname': firstname,
						'lastname': lastname,
						'email': email
					},
					success: function( data ){
						alert( data );
					},
				});
			}else{
				alert( 'Please fill up all fields' );
			}
		});
		$('#addnewuser').on('hidden.bs.modal', function () {
			$('#saveNewUser').unbind('click');
			$('#firstname').val(''),
			$('#lastname').val(''),
			$('#email').val('');
			$( '#userListTable tbody' ).html('');
		});
		
		$( '#closeNewUser' ).on( 'click', function(){
			$('#saveNewUser').unbind('click');
			$('#firstname').val(''),
			$('#lastname').val(''),
			$('#email').val('');
			$( '#userListTable tbody' ).html('');
		})
	}
    (function(document, window, $) {
      'use strict';

      var Site = window.Site;

      $(document).ready(function($) {
        Site.run();
      });

      // Example Row Toggler
      // -------------------
      (function() {
        $('#exampleRowToggler').footable();
      })();

      // Expand / Collapse All Rows
      // --------------------------
      (function() {
        var fooColExp = $('#exampleAccordion');
        fooColExp.footable().trigger('footable_expand_first_row');

        $('#exampleCollapseBtn').on('click', function() {
          fooColExp.trigger('footable_collapse_all');
        });
        $('#exampleExpandBtn').on('click', function() {
          fooColExp.trigger('footable_expand_all');
        })
      })();

      // Accordion
      // ---------
      (function() {
        $('#exampleFooAccordion').footable().on('footable_row_expanded',
          function(e) {
            $('#exampleFooAccordion tbody tr.footable-detail-show').not(
              e.row).each(function() {
              $('#exampleFooAccordion').data('footable').toggleDetail(
                this);
            });
          });
      })();

      // Pagination
      // ----------
      (function() {
        $('#examplePagination').footable();
        $('#exampleShow').change(function(e) {
          e.preventDefault();
          var pagesize = $(this).find('option:selected').val();
          $('#examplePagination').data('page-size', pagesize);
          $('#examplePagination').trigger('footable_initialized');
        });
      })();

      // Filtering
      // ---------
      (function() {
        var filtering = $('#exampleFootableFiltering');
        filtering.footable().on('footable_filtering', function(e) {
          var selected = $('#filteringStatus').find(':selected').val();
          e.filter += (e.filter && e.filter.length > 0) ? ' ' +
            selected : selected;
          e.clear = !e.filter;
        });

        // Filter status
        $('#filteringStatus').change(function(e) {
          e.preventDefault();
          filtering.trigger('footable_filter', {
            filter: $(this).val()
          });
        });

        // Search input
        $('#filteringSearch').on('input', function(e) {
          e.preventDefault();
          filtering.trigger('footable_filter', {
            filter: $(this).val()
          });
        });
      })();

      // Add & Remove Row
      // ----------------
      (function() {
        var addrow = $('.normalTable');
        addrow.footable().on('click', '.delete-row-btn', function() {

          //get the footable object
          var footable = addrow.data('footable');

          //get the row we are wanting to delete
          var row = $(this).parents('tr:first');

          //delete the row
          footable.removeRow(row);
        });

        // Search input
        $('.addRemoveSearch').on('input', function(e) {
          e.preventDefault();

          var parentDIV = $( this ).closest( '.panel' );
          var tableID = parentDIV.find( 'table' ).attr( 'id' );

          $( "#"+tableID ).trigger('footable_filter', {
            filter: $(this).val()
          });
        });

        // cancel Add Location clear all fields
        $( '#cancelLocation' ).on( 'click', function(e){
			$( '#addressInput').val( '' );
		  	$( '#zipInput' ).val( '' );
		  	$( '#notes' ).val( '' );
		   	$( '.dateInput' ).val( '' );
		   	$( '.startTimeInput' ).val( '' );
		  	$( '.endTimeInput' ).val( '' );
		  	// $( '#editLocation' ).modal('hide');
		});

        // Add Row Button
        $('.addRowBtn').on( 'click', function(e) {
          e.preventDefault();
          //get the footable object
          var parentDIV = $( this ).closest( '.panel' );
          var tableID = parentDIV.find( 'table' ).attr( 'id' );

          var footable = $( "#"+tableID ).data('footable');
          
          var data = tableID.split('_');
          var company_id = data[1];
          $( '#editLocation' ).modal('show');
          $( '#editNewLocationSelection' ).val( company_id );
        });
		
		$( '#conferenceRoomBtn' ).on( 'click', function(e){
		  var address = $( '#addressInput').val();
		  var zip = $( '.zipInput' ).val();
		  var date = $( '.dateInput' ).val();
		  var start = $( '.startTimeInput' ).val();
		  var end = $( '.endTimeInput' ).val();

		  if( address !== "" || zip !== "" || date !== "" || 
		  		start !== "" || end !== "" ){
		  	$( '#editLocation' ).modal('hide');
		  	$( '#conferenceRoom' ).modal('show');
		  }else{
		  	// insert modal here ( fofo )
		  	alert( 'Please fil up all the required information' );
		  }

		});
		
      })();

    })(document, window, jQuery);
				
$("#checkAll").change(function () {
    $("input:checkbox").prop('checked', $(this).prop("checked"));
});
</script>

<script>

var globalLocationID = 0;
//functions
function addService( location_id ){
	$('.serviceCheckbox').prop('checked', false);
	globalLocationID = location_id;
	$( '#addservice' ).modal('show');
	$.ajax({
		type: 'POST',
		datatype: 'JSON',
		url: 'selectServiceCheckboxes',
		data: { 
			'location_id': location_id,
		},
		success: function( data ){
			var serviceList = jQuery.parseJSON(data);
			$.each( serviceList, function( key, value ){
				$( '#service_'+value.service_id ).prop( 'checked', true );
			});
		},
	});
}

function saveService(){
	var  servicesArray = [];
	var serviceArrayuncheck = [];
	$('input.serviceCheckbox:checkbox:checked').each(function () {
	    servicesArray.push($(this).val());
	});

	$('input.serviceCheckbox:checkbox:not(:checked)').each(function () {
	    serviceArrayuncheck.push($(this).val());
	});
	
	$.ajax({
		type :'POST',
		datatype: 'JSON',
        url:'saveServicesToLocations' ,
		data: {
			"servicearray": servicesArray.join(),
			"location_id": globalLocationID,
			"serviceArrayuncheck": serviceArrayuncheck.join(),
		},
        success: function(msg){
		  alert(msg);
		},
    });

}

function addEditLocaiton( location_id, company_id ){
	
	$( '#editLocation' ).modal('show');
  	$( '#editNewLocationSelection' ).val( company_id );
  	$( '#locationID' ).val( location_id );

	if( location_id > 0 ){
		// edit location details
		$( '#dateTimeList' ).empty();
		appendSchedCols();
		getLocationDetails( location_id );
	}else{
		$( '#dateTimeList' ).empty();
		appendSchedCols();
		appendDateTime( " ", " ", " " );
		$( '#addressInput' ).val( "" );
		$( '#city' ).val( "" );
		$( '#zipInput' ).val( "" );
		$( '#notes' ).val( "" );
		$( '#cmpconfr1' ).val( "" );
		$( '#cmpconfr2' ).val( "" );
		$( '#cmpconfr3' ).val( "" );
		$( '#cmpconfr4' ).val( "" );
		$( '#cmpconfr5' ).val( "" );
		$( '.dateInput' ).datepicker({
		    format: 'yyyy-mm-dd',
		    startDate: '+1d'
		});
		$( '.startTimeInput' ).timepicker({
		    'minTime': '01:00',
		    'maxTime': '24:00',
		});
		$( '.endTimeInput' ).timepicker({
		    'minTime': '01:00',
		    'maxTime': '24:00',
		});
		// add location
	}
}

function downloadClientList( company_id ){
	window.open('downloadClientList?company_id='+company_id);
}

var editLocationId = "";
var dateTime = {};
var datePickerOptions = {
    dateFormat: 'yy-m-d',
    gotoCurrent: true,
    changeMonth: true,
    changeYear: true,
}

function getLocationDetails( location_id ){
	editLocationId = location_id;

	$.ajax({
		type: 'POST',
		datatype: 'JSON',
		url: 'getLocationDetails',
		data: { 
			'location_id': location_id,
		},
		success: function( data ){
			var locationDetails = jQuery.parseJSON(data);
			$( '#addressInput' ).val( locationDetails.address2 );
			$( '#city' ).val( locationDetails.city );
			$( '#zipInput' ).val( locationDetails.pincode );
			$( '#notes' ).val( locationDetails.notes );
			$( '#cmpconfr1' ).val( locationDetails.conf_room_1 );
			$( '#cmpconfr2' ).val( locationDetails.conf_room_2 );
			$( '#cmpconfr3' ).val( locationDetails.conf_room_3 );
			$( '#cmpconfr4' ).val( locationDetails.conf_room_4 );
			$( '#cmpconfr5' ).val( locationDetails.conf_room_5 );
		},
	});

	$.ajax({
		type: 'POST',
		datatype: 'JSON',
		url: 'getLocationHolidays',
		data: { 
			'location_id': location_id,
		},
		success: function( data ){
			var availableDatesList = jQuery.parseJSON(data);
			if( availableDatesList.length > 0 ){
				$.each( availableDatesList, function( key, value ){
					appendDateTime( value.loc_available_from, value.loc_time_from, value.loc_time_to );
				});
				$( '.dateInput' ).datepicker({
				    format: 'yyyy-mm-dd',
				    startDate: '+1d'
				});
				$( '.startTimeInput' ).timepicker({
				    'minTime': '01:00',
				    'maxTime': '24:00',
				});
				$( '.endTimeInput' ).timepicker({
				    'minTime': '01:00',
				    'maxTime': '24:00',
				});
			}
		},
	});
}

function addDate(){
	appendDateTime( " ", " ", " " );
	$( '.dateInput' ).datepicker({
	    format: 'yyyy-mm-dd',
	    startDate: '+1d'
	});
	$( '.startTimeInput' ).timepicker({
	    'minTime': '01:00',
	    'maxTime': '24:00',
	});
	$( '.endTimeInput' ).timepicker({
	    'minTime': '01:00',
	    'maxTime': '24:00',
	});
}

function appendSchedCols(){
	$( '#dateTimeList' ).append('<div class="form-group row">'+
	 '<div class="col-sm-3">'+
		'<span class="required">*</span>&nbsp;'+
		'<label class="control-label" for="inputTime">Available Date</label>'+
		'</div>'+
		'<div class="col-sm-3">'+
		'<span class="required">*</span>&nbsp;'+
		'<label class="control-label" for="inputTime">Start Time</label>'+
		'</div>'+
		'<div class="col-sm-3">'+
		'<span class="required">*</span>&nbsp;'+
		'<label class="control-label" for="inputTime">End Time</label>'+
		'</div>'+
		'</div>'
	);
}
var dateCounter = 1;
function appendDateTime( date, startTime, endTime ){
	dateTime[date] = [startTime, endTime];
	$( '#dateTimeList' ).append('<div class="availableDates form-group row">'+
		'<div id="dateTime'+dateCounter+'" class="col-sm-3">'+
		'<div class="input-group"> <span class="input-group-addon"><i class="icon wb-calendar" aria-hidden="true"></i></span>'+
		'<input type="text" value="'+date+'" class="dateInput form-control"">'+
		'</div>'+
		'</div>'+
		'<div id="startTime'+dateCounter+'" class="col-sm-3">'+
		'<div class="input-group"> <span class="input-group-addon"><i class="icon wb-time" aria-hidden="true"></i></span>'+
		'<input type="text" value="'+startTime+'" class="startTimeInput form-control" />'+
		'</div>'+
		'</div>'+
		'<div id="endTime'+dateCounter+'" class="col-sm-3">'+
		'<div class="input-group"> <span class="input-group-addon"><i class="icon wb-time" aria-hidden="true"></i></span>'+
		'<input type="text" value="'+endTime+'" class="endTimeInput form-control" />'+
//		'<button type="button" onclick="removeDate( `'+date+'`, '+dateCounter+' )" class="btn btn-default btn-lg">'+
//		'x'+
//		'</button>'+
		'</div>'+
		'</div>'+	
		'<div id="endTime'+dateCounter+'" class="col-sm-3">'+
		'<button type="button" onclick="removeDate( `'+date+'`, '+dateCounter+' )" class="btn btn-danger"><i class="fa fa-remove" aria-hidden="true"></i> DELETE'+
		'</button>'+
		'</div>'+			
		'</div>'
	);
	dateCounter = dateCounter + 1;
}

function deleteLocation( loc_id, elem ){
	swal({
	  	title: "Are you sure?",
	  	text: "You will not be able to recover this address.",
	  	type: "warning",
	  	showCancelButton: true,
	  	confirmButtonColor: '#DD6B55',
	  	confirmButtonText: 'Yes, delete it',
	  	closeOnConfirm: false,
	  	//closeOnCancel: false
	},
	function() {
		$.ajax({
			type: 'POST',
			datatype: 'JSON',
			url: 'removeLocationDetails',
			data: { 
				'location_id': loc_id,
			},
			success: function( data ){
				$( elem ).closest( 'tr' ).remove();
				swal("Deleted!",
		        "Address has been deleted!",
		        "success");
			},
		});
	});
}

function downloadFeedBack( loc_id, company_id ){
    document.location = "getFeedBack/?location_id="+loc_id+"&company_id="+company_id;
// 	$.ajax({
// 		type: 'POST',
// 		datatype: 'JSON',
// 		url: 'getFeedBack',
// 		data: { 
// 			'location_id': loc_id,
// 			'company_id': company_id,
// 		},
// 		success: function( data ){
			
// 		},
// 	});
	
}

var remDietRoom1 = new Array();
var addDietRoom1 = new Array();

var remDietRoom2 = new Array();
var addDietRoom2 = new Array();

var remDietRoom3 = new Array();
var addDietRoom3 = new Array();

var remDietRoom4 = new Array();
var addDietRoom4 = new Array();

var remDietRoom5 = new Array();
var addDietRoom5 = new Array();

function addRemoveDietitian( dietitian_id, elem, confNum ){
	// var confDIV = $( elem ).closest( 'div' );
	// var confRoom = confDIV.attr( 'id' );
	switch( confNum ){
		case 1:
				//check if does not exist in list from db
				if( jQuery.inArray( dietitian_id, conf1DietitianList ) == -1 ){
					//check first if it was a removed from if it is, move it back to list from DB
					// if not add to added dietitian list
					if( jQuery.inArray( dietitian_id, remDietRoom1 ) == -1 ){
						//check if it is already in the added dietitian list, if not add it, if it is, remove it
						if( jQuery.inArray( dietitian_id, addDietRoom1 ) == -1 ){
							addDietRoom1.push( dietitian_id );
						}else{
							addDietRoom1 = jQuery.grep(addDietRoom1, function( value ) {
							  	return value != dietitian_id;
							});
						}
					}else{
						//move back to original list and remove from dietitian remove list
						conf1DietitianList.push( dietitian_id );
						remDietRoom1 = jQuery.grep(remDietRoom1, function( value ) {
						  	return value != dietitian_id;
						});
					}
				}else{
					// if dietitian id exists on list remove it
					conf1DietitianList = jQuery.grep(conf1DietitianList, function( value ) {
					  	return value != dietitian_id;
					});
					remDietRoom1.push( dietitian_id );
				}
			break;
		case 2:
				//check if does not exist in list from db
				if( jQuery.inArray( dietitian_id, conf2DietitianList ) == -1 ){
					//check first if it was a removed from if it is, move it back to list from DB
					// if not add to added dietitian list
					if( jQuery.inArray( dietitian_id, remDietRoom2 ) == -1 ){
						//check if it is already in the added dietitian list, if not add it, if it is, remove it
						if( jQuery.inArray( dietitian_id, addDietRoom2 ) == -1 ){
							addDietRoom2.push( dietitian_id );
						}else{
							addDietRoom2 = jQuery.grep(addDietRoom2, function( value ) {
							  	return value != dietitian_id;
							});
						}
					}else{
						//move back to original list and remove from dietitian remove list
						conf2DietitianList.push( dietitian_id );
						remDietRoom2 = jQuery.grep(remDietRoom2, function( value ) {
						  	return value != dietitian_id;
						});
					}
				}else{
					// if dietitian id exists on list remove it
					conf2DietitianList = jQuery.grep(conf2DietitianList, function( value ) {
					  	return value != dietitian_id;
					});
					remDietRoom2.push( dietitian_id );
				}
			break;
		case 3:
				//check if does not exist in list from db
				if( jQuery.inArray( dietitian_id, conf3DietitianList ) == -1 ){
					//check first if it was a removed from if it is, move it back to list from DB
					// if not add to added dietitian list
					if( jQuery.inArray( dietitian_id, remDietRoom3 ) == -1 ){
						//check if it is already in the added dietitian list, if not add it, if it is, remove it
						if( jQuery.inArray( dietitian_id, addDietRoom3 ) == -1 ){
							addDietRoom3.push( dietitian_id );
						}else{
							addDietRoom3 = jQuery.grep(addDietRoom3, function( value ) {
							  	return value != dietitian_id;
							});
						}
					}else{
						//move back to original list and remove from dietitian remove list
						conf3DietitianList.push( dietitian_id );
						remDietRoom3 = jQuery.grep(remDietRoom3, function( value ) {
						  	return value != dietitian_id;
						});
					}
				}else{
					// if dietitian id exists on list remove it
					conf3DietitianList = jQuery.grep(conf3DietitianList, function( value ) {
					  	return value != dietitian_id;
					});
					remDietRoom3.push( dietitian_id );
				}
			break;
		case 4:
				//check if does not exist in list from db
				if( jQuery.inArray( dietitian_id, conf4DietitianList ) == -1 ){
					//check first if it was a removed from if it is, move it back to list from DB
					// if not add to added dietitian list
					if( jQuery.inArray( dietitian_id, remDietRoom4 ) == -1 ){
						//check if it is already in the added dietitian list, if not add it, if it is, remove it
						if( jQuery.inArray( dietitian_id, addDietRoom4 ) == -1 ){
							addDietRoom4.push( dietitian_id );
						}else{
							addDietRoom4 = jQuery.grep(addDietRoom4, function( value ) {
							  	return value != dietitian_id;
							});
						}
					}else{
						//move back to original list and remove from dietitian remove list
						conf4DietitianList.push( dietitian_id );
						remDietRoom4 = jQuery.grep(remDietRoom4, function( value ) {
						  	return value != dietitian_id;
						});
					}
				}else{
					// if dietitian id exists on list remove it
					conf4DietitianList = jQuery.grep(conf4DietitianList, function( value ) {
					  	return value != dietitian_id;
					});
					remDietRoom4.push( dietitian_id );
				}
			break;
		case 5:
				//check if does not exist in list from db
				if( jQuery.inArray( dietitian_id, conf5DietitianList ) == -1 ){
					//check first if it was a removed from if it is, move it back to list from DB
					// if not add to added dietitian list
					if( jQuery.inArray( dietitian_id, remDietRoom5 ) == -1 ){
						//check if it is already in the added dietitian list, if not add it, if it is, remove it
						if( jQuery.inArray( dietitian_id, addDietRoom5 ) == -1 ){
							addDietRoom5.push( dietitian_id );
						}else{
							addDietRoom5 = jQuery.grep(addDietRoom5, function( value ) {
							  	return value != dietitian_id;
							});
						}
					}else{
						//move back to original list and remove from dietitian remove list
						conf5DietitianList.push( dietitian_id );
						remDietRoom5 = jQuery.grep(remDietRoom5, function( value ) {
						  	return value != dietitian_id;
						});
					}
				}else{
					// if dietitian id exists on list remove it
					conf5DietitianList = jQuery.grep(conf5DietitianList, function( value ) {
					  	return value != dietitian_id;
					});
					remDietRoom5.push( dietitian_id );
				}
			break;
	}
	
}

var timeConvert = new Array();
timeConvert['1:00am'] = "1:00";
timeConvert['2:00am'] = "2:00";
timeConvert['3:00am'] = "3:00";
timeConvert['4:00am'] = "4:00";
timeConvert['5:00am'] = "5:00";
timeConvert['6:00am'] = "6:00";
timeConvert['7:00am'] = "7:00";
timeConvert['8:00am'] = "8:00";
timeConvert['9:00am'] = "9:00";
timeConvert['10:00am'] = "10:00";
timeConvert['11:00am'] = "11:00";
timeConvert['12:00pm'] = "12:00";
timeConvert['1:00pm'] = "13:00";
timeConvert['2:00pm'] = "14:00";
timeConvert['3:00pm'] = "15:00";
timeConvert['4:00pm'] = "16:00";
timeConvert['5:00pm'] = "17:00";
timeConvert['6:00pm'] = "18:00";
timeConvert['7:00pm'] = "19:00";
timeConvert['8:00pm'] = "20:00";
timeConvert['9:00pm'] = "21:00";
timeConvert['10:00pm'] = "22:00";
timeConvert['11:00pm'] = "23:00";
timeConvert['12:00am'] = "24:00";


$( '#submitLocation' ).on( 'click', function(){
	var room1 = $( '#cmpconfr1' ).val();
	var room2 = $( '#cmpconfr2' ).val();
	var room3 = $( '#cmpconfr3' ).val();
	var room4 = $( '#cmpconfr4' ).val();
	var room5 = $( '#cmpconfr5' ).val();
	
	var companyID = $( '#editNewLocationSelection' ).val();
	var loc_id = $( '#locationID' ).val();
	var address = $( '#addressInput' ).val();
	var city = $( '#city' ).val();
	var zip = $( '#zipInput' ).val();
	var notes = $( '#notes' ).val();
	
	var conf1dietitiancheck = addDietRoom1.join(',');
	var conf1dietitianuncheck = remDietRoom1.join(',');
	
	var conf2dietitiancheck = addDietRoom2.join(',');
	var conf2dietitianuncheck = remDietRoom2.join(',');

	var conf3dietitiancheck = addDietRoom3.join(',');
	var conf3dietitianuncheck = remDietRoom3.join(',');

	var conf4dietitiancheck = addDietRoom4.join(',');
	var conf4dietitianuncheck = remDietRoom4.join(',');

	var conf5dietitiancheck = addDietRoom5.join(',');
	var conf5dietitianuncheck = remDietRoom5.join(',');

	var newDateTimeList = {};
	$( '.availableDates' ).each( function(){
		var date = $( this ).find( '.dateInput' );
		var startTime = $( this ).find( '.startTimeInput' );
		var endTime = $( this ).find( '.endTimeInput' );

		if( typeof date.val() !== 'undefined' ){
			newDateTimeList[date.val()] = [ timeConvert[startTime.val()], timeConvert[endTime.val()] ];
		}
	});
	var dateTimeFromTo = JSON.stringify( newDateTimeList );

	var remDates = getRemovedDates( newDateTimeList );
	
	$.ajax({
		type: 'POST',
		datatype: 'JSON',
		url: 'newEditLocationDetails',
		data: { 
			'company_id': companyID,
			'locationid': loc_id,
			'add1': "",
			'add2': address,
			'state': city,
			'country': "",
			'zpc': zip,
			'conf1': room1,
			'conf2': room2,
			'conf3': room3,
			'conf4': room4,
			'conf5': room5,
			'conf1dietitiancheck': conf1dietitiancheck,
			'conf2dietitiancheck': conf2dietitiancheck,
			'conf3dietitiancheck': conf3dietitiancheck,
			'conf4dietitiancheck': conf4dietitiancheck,
			'conf5dietitiancheck': conf5dietitiancheck,
			'conf1dietitianuncheck': conf1dietitianuncheck,
			'conf2dietitianuncheck': conf2dietitianuncheck,
			'conf3dietitianuncheck': conf3dietitianuncheck,
			'conf4dietitianuncheck': conf4dietitianuncheck,
			'conf5dietitianuncheck': conf5dietitianuncheck,
			'locaAvailableDateAndTime': dateTimeFromTo,
			'notes': notes
		},
		success: function( data ){
			alert( data );
			window.location.href = "company";
		}
	});
	
});

function getRemovedDates( newDateList ){
	var removedDate = new Array();
	$.each( dateTime, function( key, value ){
		if( !$.isArray( newDateList[key] ) ){
			removedDate.push( key );
		}
	});
	return removedDate;
}

function removeDate( date, counter ){
	$( '#dateTime'+counter ).remove();
	$( '#startTime'+counter ).remove();
	$( '#endTime'+counter ).remove();
}

var conf1DietitianList = new Array();
var conf2DietitianList = new Array();
var conf3DietitianList = new Array();
var conf4DietitianList = new Array();
var conf5DietitianList = new Array();
var confNum1Displayed = false;
var confNum2Displayed = false;
var confNum3Displayed = false;
var confNum4Displayed = false;
var confNum5Displayed = false;

function displaySelectedDietitian( confNum ){
	switch( confNum ){
		case 1:
			if( !confNum1Displayed ){
				postDietitianList( confNum )
			}
			break;
		case 2:
			if( !confNum2Displayed ){
				postDietitianList( confNum )
			}
			break;
		case 3:
			if( !confNum3Displayed ){
				postDietitianList( confNum )
			}
			break;
		case 4:
			if( !confNum4Displayed ){
				postDietitianList( confNum )
			}
			break;
		case 5:
			if( !confNum5Displayed ){
				postDietitianList( confNum )
			}
			break;
	}
}

function postDietitianList( confNum ){
	$.ajax({
		type: 'POST',
		datatype: 'JSON',
		url: 'selectDisplayedDietitianCheckboxes',
		data: {
			'location_id':$( '#locationID' ).val(),
			'confnumber':confNum
		},
		success: function( data ){
			var dietitians = jQuery.parseJSON( data );
			$.each( dietitians, function( key, value ){
				$( '#'+confNum+'_'+value.dietitian_id ).prop( "checked", true );
				switch( confNum ){
					case 1:
						confNum1Displayed = true;
						conf1DietitianList.push( value.dietitian_id );
						break;
					case 2:
						confNum2Displayed = true;
						conf2DietitianList.push( value.dietitian_id );
						break;
					case 3:
						confNum3Displayed = true;
						conf3DietitianList.push( value.dietitian_id );
						break;
					case 4:
						confNum4Displayed = true;
						conf4DietitianList.push( value.dietitian_id );
						break;
					case 5:
						confNum5Displayed = true;
						conf5DietitianList.push( value.dietitian_id );
						break;
				}
			});
		}
	});
}

// delete address popup
    //   (function() {
    //     $('#exampleWarningConfirm').on("click", function() {
    //       swal({
    //           title: "Are you sure?",
    //           text: "You will not be able to recover this address.",
    //           type: "warning",
    //           showCancelButton: true,
    //           confirmButtonColor: '#DD6B55',
    //           confirmButtonText: 'Yes, delete it',
    //           closeOnConfirm: false,
    //           //closeOnCancel: false
    //         },
    //         function() {
    //           swal("Deleted!",
    //             "Address has been deleted!",
    //             "success");
    //         });
    //     });


    // })(document, window, jQuery);

</script>

<script>
    (function(document, window, $) {
      'use strict';

      var Site = window.Site;

      $(document).ready(function($) {
        Site.run();
      });

      var defaults = $.components.getDefaults("webuiPopover");

      // Example Webui Popover Pop with Table
      // ------------------------------------
      (function() {
        var tableContent = $('#examplePopoverTable').html(),
          tableSettings = {
            title: 'WebUI Popover',
            content: tableContent,
            width: 500
          };

        $('#examplePopWithTable').webuiPopover($.extend({}, defaults,
          tableSettings));
      })();

      // Example Webui Popover Pop with List
      // -----------------------------------
      (function() {
        var listContent = $('#examplePopoverList').html(),
          listSettings = {
            content: listContent,
            title: '',
            padding: false
          };

        $('#examplePopWithList').webuiPopover($.extend({}, defaults,
          listSettings));

      })();

      // Example Webui Popover Pop with Large Content
      // --------------------------------------------
      (function() {
        var largeContent = $('#examplePopoverLargeContent').html(),
          largeSettings = {
            title: 'WebUI Popover',
            content: largeContent,
            width: 400,
            height: 350,
            closeable: true
          };

        $('#examplePopWithLargeContent').webuiPopover($.extend({},
          defaults, largeSettings));
      })();

    })(document, window, jQuery);
  </script>

</body>
</html>