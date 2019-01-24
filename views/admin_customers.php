<!DOCTYPE html>
<html class="no-js before-run" lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<meta name="description" content="bootstrap admin template">
<meta name="author" content="">
<title>Customers | Familyfood Dashboard</title>
<!-- meta & scripts -->

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
<link rel="icon" type="image/png" sizes="192x192" href="../../../android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="../../../favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="../../../favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="../../../favicon-16x16.png">

<!-- Stylesheets -->
<link rel="stylesheet" href="../assets/assets/css/bootstrap.min.css">
<link rel="stylesheet" href="../assets/assets/css/bootstrap-extend.min.css">
<link rel="stylesheet" href="../assets/assets/vendor/bootstrap-select/bootstrap-select.min3f0d.css?v2.2.0">
<link rel="stylesheet" href="../assets/assets/css/site.min.css">
<link rel="stylesheet" href="../assets/assets/vendor/animsition/animsition.css">
<link rel="stylesheet" href="../assets/assets/vendor/asscrollable/asScrollable.css">
<link rel="stylesheet" href="../assets/assets/vendor/switchery/switchery.css">
<link rel="stylesheet" href="../assets/assets/vendor/intro-js/introjs.css">
<link rel="stylesheet" href="../assets/assets/vendor/slidepanel/slidePanel.css">
<link rel="stylesheet" href="../assets/assets/vendor/flag-icon-css/flag-icon.css">
<link rel="stylesheet" href="../assets/assets/css/custom.css">

<!-- Plugin -->
<link rel="stylesheet" href="../assets/assets/vendor/select2/select2.min3f0d.css?v2.2.0">
<link rel="stylesheet" href="../assets/assets/vendor/bootstrap-select/bootstrap-select.min3f0d.css?v2.2.0">

<!--link rel="stylesheet" href="../assets/assets/vendor/select2/select2.min.css">
<link rel="stylesheet" href="../assets/assets/vendor/bootstrap-select/bootstrap-select.min.css"-->

<link rel="stylesheet" href="../assets/assets/vendor/chartist-js/chartist.css">
<link rel="stylesheet" href="../assets/assets/vendor/aspieprogress/asPieProgress.css">
<link rel="stylesheet" href="../assets/assets/vendor/footable/footable.core.css">
<link rel="stylesheet" href="../assets/assets/vendor/bootstrap-sweetalert/sweet-alert.css">
<link rel="stylesheet" href="../assets/assets/vendor/filament-tablesaw/tablesaw.min.css">
<!-- Page -->
<link rel="stylesheet" href="../assets/assets/css/dashboard/v2.css">

<!-- Fonts -->
<link rel="stylesheet" href="../assets/assets/fonts/web-icons/web-icons.min.css">
<link rel="stylesheet" href="../assets/assets/fonts/brand-icons/brand-icons.min.css">
<link rel='stylesheet' href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic">
<script src="https://use.fontawesome.com/286c52578e.js"></script>

<!--[if lt IE 9]>
    <script src="../assets/assets/vendor/html5shiv/html5shiv.min.js"></script>
    <![endif]-->

<!--[if lt IE 10]>
    <script src="../assets/assets/vendor/media-match/media.match.min.js"></script>
    <script src="../assets/assets/vendor/respond/respond.min.js"></script>
    <![endif]-->

<!-- Scripts -->
<script src="../assets/assets/vendor/modernizr/modernizr.js"></script>
<script src="../assets/assets/vendor/breakpoints/breakpoints.js"></script>
<script>
    Breakpoints();
</script>

 <style type="text/css">
/* Hidden placeholder */
select option[disabled]:first-child {
display: none;
}
	</style>
<!--?php include("inc_meta.php"); ?-->
</head>
<body class="dashboard site-menubar-unfold" data-auto-menubar="true">
<!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]--> 

<!-- start header menu -->
<?php include("inc_menu_header.php"); ?>
<!-- end header menu --> 
<!-- start left menu -->
<?php include("inc_left_menu.php"); ?>
<!-- end left menu --> 
<!--div class="site-gridmenu">
<ul>
<li> <a href="apps/mailbox/mailbox.html"> <i class="icon wb-envelope"></i> <span>Mailbox</span> </a> </li>
<li> <a href="apps/calendar/calendar.html"> <i class="icon wb-calendar"></i> <span>Calendar</span> </a> </li>
<li> <a href="apps/contacts/contacts.html"> <i class="icon wb-user"></i> <span>Contacts</span> </a> </li>
<li> <a href="apps/media/overview.html"> <i class="icon wb-camera"></i> <span>Media</span> </a> </li>
<li> <a href="apps/documents/categories.html"> <i class="icon wb-order"></i> <span>Documents</span> </a> </li>
<li> <a href="apps/projects/projects.html"> <i class="icon wb-image"></i> <span>Project</span> </a> </li>
<li> <a href="apps/forum/forum.html"> <i class="icon wb-chat-group"></i> <span>Forum</span> </a> </li>
<li> <a href="index.php"> <i class="icon wb-dashboard"></i> <span>Dashboard</span> </a> </li>
</ul>
</div--> 

<!-- Page -->
<div class="page animsition">
<div class="page-header">
<div class="page-header">
<h1 class="page-title">Customers</h1>
<!--div class="page-header-actions"><a href="#" role="button" class="btn btn-danger btn-block btn-round"><i class="icon wb-plus" aria-hidden="true"></i>eh?</a></div--> 
</div>
<div class="panel">
<div class="panel-body">

<!-- start responsive table -->
<div class="form-inline padding-bottom-15">
<div class="row">
<div class="col-md-6">
<div class="form-group">
<div class="input-group">
<form method="get">
<input type="search" name="search" id="filteringSearch" value="" class="form-control" placeholder="Search Customer">
<span class="input-group-btn">
<button type="submit" class="btn btn-primary"><i class="icon wb-search" aria-hidden="true"></i></button>
</span>
</form>
</div>
</div>
</div>
</div>
</div>


<table class="tablesaw table-striped table-bordered table-hover" data-tablesaw-mode="swipe"
              data-tablesaw-sortable data-tablesaw-sortable-switch data-tablesaw-minimap
              data-tablesaw-mode-switch>
<thead>
<tr>
<th data-tablesaw-sortable-col data-tablesaw-sortable-default-col data-tablesaw-priority="persist">Customer</th>
<th data-tablesaw-priority="3">Phone Number</th>
<th data-tablesaw-sortable-col data-tablesaw-priority="2">Email</th>
<th data-tablesaw-priority="1"><abbr title="Tooltip if needed">Appointment Actions</abbr></th>
</tr>
</thead>
<!--tbody>

<tr>
<td><a href="javascript:void(0)">Null</a></td>
<td>1</td>
<td>2016</td>

<td class="text-center">
<div class="btn-group" aria-label="Button group with nested dropdown" role="group">
<div class="btn-group" role="group">
<button type="button" class="btn btn-primary dropdown-toggle" id="exampleGroupDrop1" data-toggle="dropdown" aria-expanded="false">Select<span class="caret"></span> </button>
<ul class="dropdown-menu" aria-labelledby="exampleGroupDrop1" role="menu">
<li role="presentation"><a href="javascript:void(0)" role="menuitem">View</a></li>
<li role="presentation"><a href="javascript:void(0)" role="menuitem">Book</a></li>
</ul>
</div>
</div>
</td>

</tr>
</tbody-->

<tbody>
<!-- Customer List and Details here -->
<?php
$customer_list = "<tr><th colspan=3>Customer Found</th></tr>";
if( !empty( $customers ) ){
  $customer_list = "";
  foreach( $customers as $customer ){
    $name = $customer->firstname.' '.$customer->lastname;
    
    if( $customer->userid != '' ){
      $click = <<< EOT
      
<div class="btn-group bootstrap-select">
<select id="{$customer->uid}_select" data-plugin="selectpicker" data-style="btn-outline btn-primary" tabindex="-98" class="selectpicker dropup empty" data-placeholder="Choose an action">
<option value="" selected disabled>Choose an action</option>
<option value="1">VIEW APPOINTMENTS</option>
<option value="2">BOOK AN APPOINTMENT</option>
</select>
</div>
<a href="javascript:void(0);" onclick="checkAction( {$customer->uid},'{$customer->userid}' )" role="button" class="btn btn-success btn-round">Go</a>
EOT;
    }else{
      $click = "&nbsp;";
    }
    $customer_list .= <<< EOT
    <tr>
    <td>{$name}</td>
    <td>{$customer->phonenumber}</td>
    <td>{$customer->userid}</td>
    <td class="text-center">{$click}</td>
    </tr>

EOT;
// <td class="text-center"><button class="btn btn-icon btn-default btn-outline" onclick="viewAppointment('{$customer->userid}')" type="button"><i class="icon wb-pencil" aria-hidden="true"></i></button></td>
  }
}
echo $customer_list;
?>
<!-- <tr>
<td>tipa@tip.com</td>
<td>2156665555</td>
<td><span class="label label-table label-success">PUBLISHED</span></td>
</tr>

<tr>
<td>amuzi@sju.edu</td>
<td>6107339231</td>
<td><span class="label label-table label-dark">ARCHIVED</span></td>
</tr> -->

</tbody>

</table>

<nav>
<ul class="pagination">
<li><a href="customers" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a> </li>
<li><a href="javascript:void(0)">
<?php
$total = $total_count;

$lim_perPage = 25;
if( $total > $lim_perPage ){
  $pages = ceil($total/$lim_perPage);
}else{
  $pages = 1;
}

$search = "";
if( $searchName != "" ){
  $search='&search='.$searchName;
}
////
if( $pages > 7 ){
  if( $curr_page < 5 ){
    for( $i=1; $i <= 6; $i++ ){
      $page = $i-1;
      $hrf = '<a href="customers?page='.$page.$search.'">'.$i.'</a>';
      if( $page == $curr_page ){
        $hrf = '<a href="javascript:void(0);"  class="bg-blue-800" style="color:white !important">'.$i.'</a>';
      }
      echo $hrf;
    }
    echo '<a href="customers?page='.($pages-2).$search.'">'.($pages-1).'</a>';
    echo '<a href="customers?page='.($pages-1).$search.'">'.$pages.'</a>';
  }else if( $curr_page < $pages && $curr_page > ( $pages-5 ) ){
    echo '<a href="customers?page=0'.$search.'">1</a>';
    echo '<a href="customers?page=1'.$search.'">2</a>';
    for( $i=($pages-5); $i <= $pages; $i++ ){
      $page = $i-1;
      $hrf = '<a href="customers?page='.$page.$search.'">'.$i.'</a>';
      if( $page == $curr_page ){
        $hrf = '<a href="javascript:void(0);" class="bg-blue-800" style="color:white !important">'.$i.'</a>';
      }
      echo $hrf;
    }
  }else{
    echo '<a href="customers?page=0'.$search.'">1</a>';
    echo '<a href="customers?page=1='.$search.'">2</a>';
    echo '<a href="customers?page='.($curr_page-2).$search.'">'.($curr_page-1).'</a>';
    echo '<a href="customers?page='.($curr_page-1).$search.'">'.($curr_page).'</a>';
    echo '<a href="javascript:void(0);" class="bg-blue-800" style="color:white !important">'.($curr_page+1).'</a>';
    echo '<a href="customers?page='.($curr_page+1).$search.'">'.($curr_page+2).'</a>';
    echo '<a href="customers?page='.($curr_page+2).$search.'">'.($curr_page+3).'</a>';
    echo '<a href="customers?page='.($pages-2).$search.'">'.($pages-1).'</a>';
    echo '<a href="customers?page='.($pages-1).$search.'">'.$pages.'</a>';
  }
}else{
  if( $pages > 1 ){
    for( $i=1; $i <= $pages; $i++ ){
      $page = $i-1;
      $hrf = '<a href="customers?page='.$page.$search.'">'.$i.'</a>';
      if( $page == $curr_page ){
        $hrf = '<a href="javascript:void(0);" class="bg-blue-800" style="color:white !important">'.$i.'</a>';
      }
      echo $hrf;
    }
  }
}

// for( $i = 1; $i <= $curr_page; $i++ ){
//   $page = $i-1;
//   if( $i < 5 ){

//   }
//   echo '<a href="customers?page='.$page.'">'.$i.'</a>';
//   echo '&nbsp;';
// }
// print_r( $customers );exit;
?>
</a></li>
<li> <a href="customers?page=<?php echo $pages-1?>" aria-label="Next"> <span aria-hidden="true">&raquo;</span> </a> </li>
</ul>
</nav>

</div>
</div>

<!-- end responsive table -->

</div>
</div>
<!-- End Page --> 

<!-- start popup -->
<div class="modal fade modal-fill-in" id="exampleFillIn" data-target="#exampleFillIn" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="overflow-y: scroll; max-height:100%;  margin-top: 0px; margin-bottom:0px;">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">�</span></button>
<h4 class="modal-title" id="exampleFillInModalTitle">Appointment List</h4>
</div>
<div class="modal-body">
<div class="row">
<form>
<div id="userDetails" class="col-lg-12"></div>
<div id="appointmentList" class="col-lg-12"></div>
<div id="hiddenList"></div>
</form>
</div>
</div>
<!--div class="modal-footer"></div--> 
</div>
</div>
</div>
<!-- end popup -->

<!-- Core  --> 
<script src="../assets/assets/vendor/jquery/jquery.js"></script> 
<script src="../assets/assets/vendor/bootstrap/bootstrap.js"></script> 
<script src="../assets/assets/vendor/animsition/jquery.animsition.js"></script> 
<script src="../assets/assets/vendor/mousewheel/jquery.mousewheel.js"></script> 
<script src="../assets/assets/vendor/asscrollable/jquery.asScrollable.all.min.js"></script> 
<script src="../assets/assets/vendor/ashoverscroll/jquery-asHoverScroll.js"></script> 

<!-- Plugins -->
<script src="../assets/assets/vendor/switchery/switchery.min.js"></script> 
<script src="../assets/assets/vendor/intro-js/intro.js"></script> 
<script src="../assets/assets/vendor/screenfull/screenfull.js"></script> 
<script src="../assets/assets/vendor/slidepanel/jquery-slidePanel.js"></script> 
<script src="../assets/assets/vendor/footable/footable.all.min.js"></script> 
<script src="../assets/assets/vendor/raty/jquery.raty.js"></script> 
<script src="../assets/assets/vendor/bootstrap-sweetalert/sweet-alert.js"></script> 
<script src="../assets/assets/vendor/filament-tablesaw/tablesaw.js"></script> 
<script src="../assets/assets/vendor/filament-tablesaw/tablesaw-init.js"></script> 
<script src="../assets/assets/vendor/aspaginator/jquery.asPaginator.min.js"></script>
	
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
<script src="../assets/assets/js/components/raty.js"></script> 
<script src="../assets/assets/js/components/bootstrap-sweetalert.js"></script> 
<script src="../assets/assets/vendor/aspaginator/aspaginator.min.js"></script>
<script src="../assets/assets/js/components/panel.min.js"></script>
<script src="../assets/assets/js/components/panel-actions.min.js"></script>
<script>
//functions
function checkAction( id, userid ){
	var action = document.getElementById( id+'_select' );
	if( action.value != "" ){
		if( action.value == 1 ){
			viewAppointment( userid );
		}else{
			bookAppointment( userid );
		}
	}else{
		alert( 'No Action Selected' );
	}
}
function viewAppointment( userid ){
  $.ajax({
    type: 'POST',
    datatype: 'JSON',
    url:'displayCustomerDetails',
    data: {
      'userid': userid,
    },
    success: function( data ){
      var appointmentList = jQuery.parseJSON(data);
      displayAppountments( appointmentList );
    }
  });
}

function displayAppountments( data ){
  // if( typeof list != "undefined" ){
  //   if( list.length > 0 ){
  //     // alert( list.length );
  //     // $( '#exampleFillIn' ).modal( 'show' );
  //     // var listHTML = "<table>";
  //     $.each( list, function(key,value){
  //       // listHTML += '<tr><td></td></tr>';
  //       var innerHtml1 = "";
  //       alert( value.appointmentdetails.length );
  //       if( value.appointmentdetails.length > 0 ){
  //         $.each( value.appointmentdetails, function( key1, value1 ){
  //           alert( JSON.stringify( value1) );
  //           // innerHtml1=innerHtml1+'<tr><td class="title" scope="row">'+value1.first_name+' '+value1.last_name+'</td><td class="title" scope="row">'+value1.appointment_date+' '+value1.appointment_time+'</td><td class="title" scope="row">'+value1.name+'</td><td class="title" scope="row">'+value1.address2+'</td><td class="title" scope="row"><a href="javascript:void(0);" onclick="editAppointmentDetails(\''+value1.confirmation_number+'\', \''+value1.userid+'\')">Edit Appointments</a></td><td class="title" scope="row"><a href="javascript:void(0);" onclick="showCancelDialog(\''+value1.confirmation_number+'\', \''+value1.userid+'\')">Cancel Appointment</a></td></tr>';
  //         });
  //       }
  //     });
  //     // listHTML += "</table>";
  //     $( '#appointmentList' ).html(innerHtml1);
  //   }
  // }
  if(typeof data != 'undefined'){
    var jsonObj= data;

    if (jsonObj.length != 0 ) {
      var innerHtml = '<table summary="This Table About customer details">';   
      if( jsonObj[0].userdetails.length > 0 ){
        innerHtml = innerHtml+'<tr><th class="title-th" scope="col">'+jsonObj[0].userdetails[0].firstname+'&nbsp&nbsp'+jsonObj[0].userdetails[0].lastname+'</th></tr><tbody>';
        innerHtml = innerHtml+'<tr><td scope="row">Phone</td><td scope="row">'+jsonObj[0].userdetails[0].phonenumber+'</td></tr><tr><td  scope="row">Email</td><td scope="row"><a href="javascript:void(0)" >'+jsonObj[0].userdetails[0].userid+'</a></td></tr><tr><td scope="row">Address</td><td  scope="row">'+jsonObj[0].userdetails[0].address+'</td></tr>';     

        for (i=0;i < jsonObj.length;i++)
        {
        //alert(innerHtml); 
          var innerHtml1 = "";
          var hiddenInnerHtml = "";
          if(jsonObj[i].appointmentdetails.length > 0) {

            innerHtml1 = innerHtml1 + '<b><div id="appointmentsDivision" class="appointmentsDivision" style=""><div class="appointmentsTitle"><h4>Recent appointments</h4></div></div></b><table class="table" summary="This Table About customer appointments"><thead>';
            innerHtml1 = innerHtml1 + '<tr><th class="title-th1" scope="col">Dietitian</th><th class="title-th1" scope="col">Appointment Date</th><th class="title-th1" scope="col">ServiceName</th><th class="title-th1" scope="col">Location</th class="title-th1" scope="col"><th>&nbsp;</th><th>&nbsp;</th></tr></thead><tbody>';

            for(k=0;k < jsonObj[i].appointmentdetails.length;k++){
              innerHtml1=innerHtml1+'<tr><td class="title" scope="row">'+jsonObj[i].appointmentdetails[k].first_name+' '+jsonObj[i].appointmentdetails[k].last_name+'</td><td class="title" scope="row">'+jsonObj[i].appointmentdetails[k].appointment_date+' '+jsonObj[i].appointmentdetails[k].appointment_time+'</td><td class="title" scope="row">'+jsonObj[i].appointmentdetails[k].name+'</td><td class="title" scope="row">'+jsonObj[i].appointmentdetails[k].address2+'</td><td class="title" scope="row"><a href="javascript:void(0);" onclick="editAppointmentDetails(\''+jsonObj[i].appointmentdetails[k].confirmation_number+'\')">Edit Appointments</a></td><td class="title" scope="row"><a href="javascript:void(0);" onclick="cancelAppointment(\''+jsonObj[i].appointmentdetails[k].confirmation_number+'\', \''+jsonObj[i].appointmentdetails[k].userid+'\', this)">Cancel Appointment</a></td></tr>';

              var appointmenttime = jsonObj[i].appointmentdetails[k].appointment_time.split(" ");
              var appointmenthourmin = appointmenttime[0].split(":");
              var appointmentdate = calendarDayFormat(jsonObj[i].appointmentdetails[k].appointment_date);
              hiddenInnerHtml = hiddenInnerHtml +'<input type="hidden" id="'+jsonObj[i].appointmentdetails[k].confirmation_number+'_searchlocation" value="'+jsonObj[i].appointmentdetails[k].city+'" />';
              hiddenInnerHtml = hiddenInnerHtml +'<input type="hidden" id="'+jsonObj[i].appointmentdetails[k].confirmation_number+'_company_name" value="'+jsonObj[i].userdetails[k].company_name+'" />';
              hiddenInnerHtml = hiddenInnerHtml +'<input type="hidden" id="'+jsonObj[i].appointmentdetails[k].confirmation_number+'_location_id" value="'+jsonObj[i].appointmentdetails[k].location_id+'" />';
              hiddenInnerHtml = hiddenInnerHtml +'<input type="hidden" id="'+jsonObj[i].appointmentdetails[k].confirmation_number+'_service_id" value="'+jsonObj[i].appointmentdetails[k].service_id+'" />';
              hiddenInnerHtml = hiddenInnerHtml +'<input type="hidden" id="'+jsonObj[i].appointmentdetails[k].confirmation_number+'_servicename" value="'+jsonObj[i].appointmentdetails[k].name+'" />';
              hiddenInnerHtml = hiddenInnerHtml +'<input type="hidden" id="'+jsonObj[i].appointmentdetails[k].confirmation_number+'_hour" value="'+appointmenthourmin[0]+'" />';
              hiddenInnerHtml = hiddenInnerHtml +'<input type="hidden" id="'+jsonObj[i].appointmentdetails[k].confirmation_number+'_minutes" value="'+appointmenthourmin[1]+'" />';
              hiddenInnerHtml = hiddenInnerHtml +'<input type="hidden" id="'+jsonObj[i].appointmentdetails[k].confirmation_number+'_timestatus" value="'+appointmenttime[1]+'" />';
              hiddenInnerHtml = hiddenInnerHtml +'<input type="hidden" id="'+jsonObj[i].appointmentdetails[k].confirmation_number+'_calendarday" value="'+appointmentdate+'" />';
              hiddenInnerHtml = hiddenInnerHtml +'<input type="hidden" id="'+jsonObj[i].appointmentdetails[k].confirmation_number+'_calenderdate" value="'+jsonObj[i].appointmentdetails[k].appointment_date+'" />';
              hiddenInnerHtml = hiddenInnerHtml +'<input type="hidden" id="'+jsonObj[i].appointmentdetails[k].confirmation_number+'_locationname" value="'+jsonObj[i].appointmentdetails[k].address2+'" />';
              hiddenInnerHtml = hiddenInnerHtml +'<input type="hidden" id="'+jsonObj[i].appointmentdetails[k].confirmation_number+'_confirmationnumber" value="'+jsonObj[i].appointmentdetails[k].confirmation_number+'" />';
              hiddenInnerHtml = hiddenInnerHtml +'<input type="hidden" id="'+jsonObj[i].appointmentdetails[k].confirmation_number+'_userid" value="'+jsonObj[i].appointmentdetails[k].userid+'" />';
            }
          } else {
          innerHtml1 = "<font color='#FF0000'>There are no Recent appointments</font>";
          }
        }
        innerHtml =innerHtml + '</tbody></table>';
        $("#userDetails").html(innerHtml);
        $("#hiddenList").html(hiddenInnerHtml);
        innerHtml1 =innerHtml1 + '</tbody></table>';
        $("#appointmentList").html(innerHtml1);
        $( '#exampleFillIn' ).modal( 'show' );
      }else{
        alert( 'No Appointments' )
      }
    }
    else {
      // $(".UserDetails").html(" No Details are found.");
      $("#appointmentList").html(" No Details are found.");
      $( '#exampleFillIn' ).modal( 'show' );
    }
  }
}

function editAppointmentDetails(id) {
var serachlocation = $("#"+id+"_searchlocation").val();
var company_name = $("#"+id+"_company_name").val();
var location_id = $("#"+id+"_location_id").val();
var service_id = $("#"+id+"_service_id").val();
var servicename = $("#"+id+"_servicename").val();
var hour = $("#"+id+"_hour").val();
var minutes = $("#"+id+"_minutes").val();
var timestatus = $("#"+id+"_timestatus").val();
var calendarday = $("#"+id+"_calendarday").val();
var calenderdate = $("#"+id+"_calenderdate").val();
var locationname = $("#"+id+"_locationname").val();
var appointmentConfNumber = $("#"+id+"_confirmationnumber").val();
var customerID = $("#"+id+"_userid").val();

//alert(service_id);
$.ajax({
    type: 'POST',
    datatype: 'JSON',
    url:'setSessionForEditAppointment',
    data: {
      'serachlocation': serachlocation,
      'company_name': company_name,
      'location_id': location_id,
      'service_id': service_id,
      'servicename': servicename,
      'hour': hour,
      'minutes': minutes,
      'timestatus': timestatus,
      'calenderdate': calenderdate,
      'locationname': locationname,
      'appointConfNum': appointmentConfNumber,
      'calendarday': calendarday,
      'customerID': customerID,
    },
    success: function( msg ){
      if(msg == "success") {
        window.location.href="searchdietitian";
      }
    }
  });
// $.ajax({
//                 url:'setSessionForEditAppointment' ,
//         type :'POST',
//         data: "serachlocation="+serachlocation+"&company_name="+company_name+
//         "&location_id="+location_id+"&service_id="+service_id+
//         "&servicename="+servicename+"&hour="+hour+"&minutes="+minutes+
//         "&timestatus="+timestatus+"&calenderdate="+calenderdate+
//         "&locationname="+locationname+"&appointConfNum="+appointmentConfNumber+
//         "&calendarday="+calendarday+"&customerID="+customerID,
//                 success: function(msg){
//           if(msg == "success") {
//             window.location.href="<?php echo base_url() ;?>login/searchdietitian";
//           }
//         },
//                 failure: function(msg){ },
//                 cache: true
                
//             });
}

function cancelAppointment( confirmation_number, userid, elem ){
  swal({
      title: "Are you sure?",
      text: "You will not be able to recover this appointment.",
      type: "warning",
      showCancelButton: true,
      confirmButtonColor: '#DD6B55',
      confirmButtonText: 'Yes, delete it',
      closeOnConfirm: false,
      //closeOnCancel: false
  },
  function() {
    var d = new Date();
    var addzero = "";
    if(d.getMonth() < 10) {
    addzero = "0";
    }
    $.ajax({
      type: 'POST',
      datatype: 'JSON',
      url: 'deleteAppointments',
      data: { 
        'confirmationid': confirmation_number,
        'date':d.getFullYear()+"-"+addzero+eval(d.getMonth() + 1)+"-"+d.getDate(),
      },
      success: function( data ){
        $( elem ).closest( 'tr' ).remove();
        swal("Deleted!",
            "Appointment has been deleted!",
            "success");
      },
    });
  });
}

function calendarDayFormat(datestring) {
  var weekday=new Array(7);
  weekday[0]="Sunday";
  weekday[1]="Monday";
  weekday[2]="Tuesday";
  weekday[3]="Wednesday";
  weekday[4]="Thursday";
  weekday[5]="Friday";
  weekday[6]="Saturday";
  var month=new Array(12);
  month[0]="Jan";
  month[1]="Feb";
  month[2]="Mar";
  month[3]="Apr";
  month[4]="May";
  month[5]="Jun";
  month[6]="Jul";
  month[7] ="Aug";
  month[8] ="Sep";
  month[9] ="Oct";
  month[10] ="Nov";
  month[11] ="Dec";
  
  var dates = datestring.split("-");
  
  var myDate=new Date();
    //var monthvalue = dates[0];
  dates[1] = eval(dates[1] -1);
  
  // alert(dates[2]+'---'+monthvalue+'---'+dates[1]);
  myDate.setFullYear(dates[0],dates[1],dates[2]);
  calendarday = weekday[myDate.getDay()]+','+month[myDate.getMonth()]+' '+myDate.getDate();

  return calendarday;
}
//end
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
        var addrow = $('#exampleFooAddRemove');
        addrow.footable().on('click', '.delete-row-btn', function() {

          //get the footable object
          var footable = addrow.data('footable');

          //get the row we are wanting to delete
          var row = $(this).parents('tr:first');

          //delete the row
          footable.removeRow(row);
        });

        // Search input
        $('#addRemoveSearch').on('input', function(e) {
          e.preventDefault();

          addrow.trigger('footable_filter', {
            filter: $(this).val()
          });
        });

        // Add Row Button
        $('#addRowBtn').click(function() {

          //get the footable object
          var footable = addrow.data('footable');

          //build up the row we are wanting to add
          var newRow =
            '<tr><td><button class="btn btn-icon btn-danger btn-outline btn-round btn-xs demo-delete-btn"><i class="icon wb-close-mini" aria-hidden="true"></i></button></td><td>Adam</td><td>Doe</td><td>Traffic Court Referee</td><td>22 Jun 1972</td><td><span class="label label-table label-success">PUBLISHED</span></td></tr>';

          //add it
          footable.appendRow(newRow);
        });
      })();

    })(document, window, jQuery);
  </script>
</div>
</div>
<!-- start footer -->
<?php include("inc_footer.php"); ?>
<!-- end footer --> 
</body>
<script src="../assets/assets/vendor/bootstrap-select/bootstrap-select.js"></script>
<script src="../assets/assets/vendor/bootstrap-select/bootstrap-select.min.js"></script>
<script src="../assets/assets/vendor/select2/select2.full.min.js"></script>
<script src="../assets/assets/js/components/select2.min.js"></script>
<script>
function bookAppointment(id) {
  var userid = id
  $.ajax({
    url:'setSessionForEditAppointment' ,
    type :'POST',
    data: "fuserid="+userid,
      success: function(msg){
      if(msg == "success") {
        window.location.href="searchdietitian";
      }
    },
      failure: function(msg){ },
      cache: true
  });
}
    (function(document, window, $) {
      'use strict';

      var Site = window.Site;
      $(document).ready(function() {
        Site.run();
      });
    })(document, window, jQuery);
  </script>
</html>