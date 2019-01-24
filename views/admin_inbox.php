<!DOCTYPE html>
<html class="no-js before-run" lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<meta name="description" content="bootstrap admin template">
<meta name="author" content="">
<title>Inbox | Familyfood Dashboard</title>
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
<link rel="stylesheet" href="../assets/assets/css/site.min.css">
<link rel="stylesheet" href="../assets/assets/vendor/animsition/animsition.css">
<link rel="stylesheet" href="../assets/assets/vendor/asscrollable/asScrollable.css">
<link rel="stylesheet" href="../assets/assets/vendor/switchery/switchery.css">
<link rel="stylesheet" href="../assets/assets/vendor/intro-js/introjs.css">
<link rel="stylesheet" href="../assets/assets/vendor/slidepanel/slidePanel.css">
<link rel="stylesheet" href="../assets/assets/vendor/flag-icon-css/flag-icon.css">
<link rel="stylesheet" href="../assets/assets/css/custom.css">

<!-- Plugin -->
<link rel="stylesheet" href="../assets/assets/vendor/chartist-js/chartist.css">
<link rel="stylesheet" href="../assets/assets/vendor/aspieprogress/asPieProgress.css">
<link rel="stylesheet" href="../assets/assets/vendor/footable/footable.core.css">
<link rel="stylesheet" href="../assets/assets/vendor/footable/footable.core.css">
<link rel="stylesheet" href="../assets/assets/vendor/webui-popover/webui-popover.css">
<link rel="stylesheet" href="../assets/assets/vendor/bootstrap-sweetalert/sweet-alert.css">

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
<div class="page-content">
<div class="page-header">
<h1 class="page-title">Inbox</h1>
<!--div class="page-header-actions"> <a href="#" role="button" class="btn btn-danger btn-block btn-round"><i class="icon wb-plus" aria-hidden="true"></i>eh?</a></div-->
</div>

<div class="panel">
<div class="panel-body">

<div class="form-inline padding-bottom-15">
<div class="row">
<div class="col-md-6">
<div class="form-group">
<div class="input-group">
<form method="get">
<input type="search" name="search" value="" class="form-control" placeholder="Search Inbox by Customer Name">
<span class="input-group-btn">
<button type="submit" class="btn btn-primary"><i class="icon wb-search" aria-hidden="true"></i></button>
</span> 
</form>
</div>
</div>
</div>
</div>
</div>
<!-- Panel Filtering -->
<!--header class="panel-heading"><h3 class="panel-title">Filtering</h3></header-->
<table class="table table-bordered table-hover toggle-circle" id="inboxFilteringList">
<thead>
<tr>
<th data-toggle="true">Dietitian</th>
<th>Customer</th>
<th data-hide="phone, tablet">Appointment Date</th>
<th data-hide="phone, tablet">Booking Date</th>
<th data-hide="phone, tablet">Service</th>
<th data-hide="phone, tablet">Confirmation</th>
<th data-hide="phone, tablet">Booked By</th>
<th class=" text-center">Change Dietitian</th>
<th class=" text-center">Delete Appointment</th>
<!-- <th data-hide="phone, tablet">Status</th> -->
</tr>
</thead>
<div class="form-inline padding-bottom-15">
<div class="row">
<div class="col-sm-6">
<div class="form-group">
<!-- <input id="filteringSearch" type="text" placeholder="Search" class="form-control" autocomplete="off"> -->
</div>
</div>

<!-- <div class="col-sm-6 text-right">
<div class="form-group">
<label class="control-label">Status</label>
<select id="filteringStatus" class="form-control">
<option value="">Show all</option>
<option value="active">Active</option>
<option value="disabled">Disabled</option>
<option value="suspended">Suspended</option>
</select>
</div>
</div> -->

</div>
</div>
<tbody>
<?php
// $dietitians = "";
// if( !empty( $dietitianList ) ){
//   foreach( $dietitianList as $value ){
//     $name = $value['first_name'].' '.$value['last_name'];
//     $dietitians .= '<option value='.$value['dietitian_id'].'>'.$name.'</option>';
//   }
// }
// $html = "";
// if( !empty( $inboxList ) ){
//   $num = 0; 
//   foreach( $inboxList as $inbox ){
//     $customerName = $inbox->firstname.' '.$inbox->lastname;
//     $dietitianName = $inbox->first_name.' '.$inbox->last_name;
//     $confirmation = $inbox->confirmation_code.' '.$inbox->confirmation_number;
//     $selectID = 'dietitian_list'.$num;
//     $popButton = 'popDietList'.$num;


//     $html .= 
//       '<tr>
//       <td>'.$dietitianName.'</td>
//       <td>'.$customerName.'</td>
//       <td>'.$inbox->appointment_date.'</td>
//       <td>'.$inbox->booked_date.'</td>
//       <td>'.$inbox->name.'</td>
//       <td>'.$confirmation.'</td>
//       <td>'.$inbox->booked_by.'</td>
//       <td class=" text-center">
//       <button type="button" class="btn btn-icon btn-sm btn-primary '.$popButton.'" onclick="setSelectedDietitian('.$inbox->dietitian_id.', '.$num.')" href="javascript:void(0)"><i class="icon wb-pencil" aria-hidden="true"></i></button>
//       <div class="hidden form-group examplePopoverLargeContent" id="'.$selectID.'">
//       <select class="form-control" data-plugin="select2">'.$dietitians.
//       '</select>
//       <div class="padding-top-20">
//       <button type="button" onclick="saveDietitian('.$num.','.$inbox->confirmation_number.')" class="btn btn-success pull-right"><i class="icon wb-edit" aria-hidden="true"></i>Update Dietitian</button>
//       </div>
//       </div>
//       </td>
//       <td class=" text-center">
//       <a href="javascript:void(0);" class="btn btn-icon btn-danger" onclick="deleteAppointment('.$inbox->confirmation_number.', this)"><i class="icon wb-close-mini" aria-hidden="true"></i></a>
//       </td>
//       </tr>';
//       // $( '#inboxFilteringList tbody' ).append( html );
//       // popUpDietitianList( selectID, popButton, inbox.dietitian_id )
//       $num .= 1;
// // <td><span class="label label-table label-success">Active</span></td>
//   }
// }

// echo $html;
?>

<!-- php staart $dietitians = "";
if( !empty( $dietitianList ) ){
  foreach( $dietitianList as $dietitian ){
    $name = $dietitian['first_name'].' '.$dietitian['last_name'];
    $dietitians .= '<option value='.$dietitian['dietitian_id'].'>'.$name.'</option>';
  }
}

if( !empty( $inboxList ) ){
  $num = 0;
  foreach( $inboxList as $inbox ){
    $customerName = $inbox->firstname.' '.$inbox->lastname;
    $dietitianName = $inbox->first_name.' '.$inbox->last_name;
    $confirmation = $inbox->confirmation_code.' '.$inbox->confirmation_number;
    $selectID = 'dietitian_list'.$num;

    echo <<< EOT
      <tr>
      <td>{$dietitianName}</td>
      <td>{$customerName}</td>
      <td>{$inbox->appointment_date}</td>
      <td>{$inbox->booked_date}</td>
      <td>{$inbox->name}</td>
      <td>{$confirmation}</td>
      <td>{$inbox->booked_by}</td>
      <td class=" text-center">
      
      <button type="button" class="btn btn-icon btn-sm btn-primary" href="javascript:void(0)"><i class="icon wb-pencil" aria-hidden="true"></i></button>
      <div class="hidden form-group examplePopoverLargeContent" id="{$selectID}">


      <div class="padding-top-20">
      <button type="button" class="btn btn-success pull-right"><i class="icon wb-plus" aria-hidden="true"></i> Add Selected</button>
      </div>
      </div>
      </td>
	  <td>	  <select name="test">{$conference_rooms}</select></td>
      </tr>
EOT;
    $num = $num+1;

// <td><span class="label label-table label-success">Active</span></td>
  }
} php end-->


<!-- <tr>
<td>Anthony Tassoni</td>
<td>Stan Drake</td>
<td>2016-04-29</td>
<td>2015-11-20</td>
<td>Individualized Nutrition Counseling</td>
<td>FFLLC11553</td>
<td>art12586@gmail.com</td>
<td class=" text-center"> -->
<!-- Pop Large Content -->
<!-- <button type="button" class="btn btn-icon btn-sm btn-primary" id="examplePopWithLargeContent" href="javascript:void(0)"><i class="icon wb-pencil" aria-hidden="true"></i></button>
<div class="hidden form-group" id="examplePopoverLargeContent">

<select class="form-control" data-plugin="select2">
<option>Alyson Heller</option>
<option>Amanda Sajczuk</option>
<option>Andrea Gekoff</option>
<option>Anthony Tassoni</option>
<option>Chelsea Anderson</option>
<option>Cierra Robbins</option>
<option>Courtney Lee</option>
</select>

<div class="padding-top-20">
<button type="button" class="btn btn-success pull-right"><i class="icon wb-plus" aria-hidden="true"></i> Add Selected</button>
</div>
</div> -->
<!-- End Pop Large Content -->
<!-- </td>
<td><span class="label label-table label-success">Active</span></td>
</tr>

<tr>
<td>Elizabeth May</td>
<td>Zakia Sykes</td>
<td>2016-03-10</td>
<td>2015-11-20</td>
<td>Individualized Nutrition Counseling</td>
<td>FFLLC11570</td>
<td>alysonroseheller@gmail.co</td>
<td class=" text-center"> -->
<!-- Pop Large Content -->
<!-- <button type="button" class="btn btn-icon btn-sm btn-primary" id="examplePopWithLargeContent" href="javascript:void(0)"><i class="icon wb-pencil" aria-hidden="true"></i></button>
<div class="hidden form-group" id="examplePopoverLargeContent">

<select class="form-control" data-plugin="select2">
<option>Alyson Heller</option>
<option>Amanda Sajczuk</option>
<option>Andrea Gekoff</option>
<option>Anthony Tassoni</option>
<option>Chelsea Anderson</option>
<option>Cierra Robbins</option>
<option>Courtney Lee</option>
</select>

<div class="padding-top-20">
<button type="button" class="btn btn-success pull-right"><i class="icon wb-plus" aria-hidden="true"></i> Add Selected</button>
</div>
</div> -->
<!-- End Pop Large Content -->
<!-- </td>
<td><span class="label label-table label-success">Active</span></td>
</tr>

<tr>
<td>Julie Vander Meer</td>
<td>Test kaitlin</td>
<td>2016-03-01</td>
<td>2015-08-05</td>
<td>Individualized Nutrition Counseling</td>
<td>FFLLC8836</td>
<td>cservice@familyfoodllc.com</td>
<td class=" text-center"> -->
<!-- Pop Large Content -->
<!-- <button type="button" class="btn btn-icon btn-sm btn-primary" id="examplePopWithLargeContent" href="javascript:void(0)"><i class="icon wb-pencil" aria-hidden="true"></i></button>
<div class="hidden form-group" id="examplePopoverLargeContent">

<select class="form-control" data-plugin="select2">
<option>Alyson Heller</option>
<option>Amanda Sajczuk</option>
<option>Andrea Gekoff</option>
<option>Anthony Tassoni</option>
<option>Chelsea Anderson</option>
<option>Cierra Robbins</option>
<option>Courtney Lee</option>
</select>

<div class="padding-top-20">
<button type="button" class="btn btn-success pull-right"><i class="icon wb-plus" aria-hidden="true"></i> Add Selected</button>
</div>
</div> -->
<!-- End Pop Large Content -->
<!-- </td>
<td><span class="label label-table label-success">Active</span></td>
</tr> -->

</tbody>
<tfoot>
<tr>
<td colspan="9">
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
      $hrf = '<a href="inbox?page='.$page.$search.'">'.$i.'</a>';
      if( $page == $curr_page ){
        $hrf = $i;
      }
      echo $hrf;
      echo '&nbsp;';
    }
    echo '....';
    echo '&nbsp;';
    echo '<a href="inbox?page='.($pages-2).$search.'">'.($pages-1).'</a>';
    echo '&nbsp;';
    echo '<a href="inbox?page='.($pages-1).$search.'">'.$pages.'</a>';
    echo '&nbsp;';
  }else if( $curr_page < $pages && $curr_page > ( $pages-5 ) ){
    echo '&nbsp;';
    echo '<a href="inbox?page=0'.$search.'">1</a>';
    echo '&nbsp;';
    echo '<a href="inbox?page=1'.$search.'">2</a>';
    echo '&nbsp;';
    echo '....';
    for( $i=($pages-5); $i <= $pages; $i++ ){
      $page = $i-1;
      $hrf = '<a href="inbox?page='.$page.$search.'">'.$i.'</a>';
      if( $page == $curr_page ){
        $hrf = $i;
      }
      echo $hrf;
      echo '&nbsp;';
    }
  }else{
    echo '<a href="inbox?page=0'.$search.'">1</a>';
    echo '&nbsp;';
    echo '<a href="inbox?page=1='.$search.'">2</a>';
    echo '&nbsp;';
    echo '....';
    echo '&nbsp;';
    echo '<a href="inbox?page='.($curr_page-2).$search.'">'.($curr_page-1).'</a>';
    echo '&nbsp;';
    echo '<a href="inbox?page='.($curr_page-1).$search.'">'.($curr_page).'</a>';
    echo '&nbsp;';
    echo $curr_page+1;
    echo '&nbsp;';
    echo '<a href="inbox?page='.($curr_page+1).$search.'">'.($curr_page+2).'</a>';
    echo '&nbsp;';
    echo '<a href="inbox?page='.($curr_page+2).$search.'">'.($curr_page+3).'</a>';
    echo '&nbsp;';
    echo '....';
    echo '&nbsp;';
    echo '<a href="inbox?page='.($pages-2).$search.'">'.($pages-1).'</a>';
    echo '&nbsp;';
    echo '<a href="inbox?page='.($pages-1).$search.'">'.$pages.'</a>';
    echo '&nbsp;';
  }
}else{
  if( $pages > 1 ){
    for( $i=1; $i <= $pages; $i++ ){
      $page = $i-1;
      $hrf = '<a href="inbox?page='.$page.$search.'">'.$i.'</a>';
      if( $page == $curr_page ){
        $hrf = $i;
      }
      echo $hrf;
      echo '&nbsp;';
    }
  }
}
?>
</td>
</tr>
</tfoot>
</table>
<!-- End Panel Filtering -->

</div>
</div>

</div>
</div>
<!-- End Page --> 

<!-- start footer -->
<?php include("inc_footer.php"); ?>
<!-- end footer -->
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
<script src="../assets/assets/vendor/webui-popover/jquery.webui-popover.min.js"></script>
<script src="../assets/assets/vendor/bootstrap-sweetalert/sweet-alert.js"></script>

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
<script src="../assets/assets/js/components/webui-popover.js"></script>
<script src="../assets/assets/js/components/bootstrap-sweetalert.js"></script>
<script src="../assets/assets/js/components/panel.min.js"></script>
<script src="../assets/assets/js/components/panel-actions.min.js"></script>

<script>
var defaults = "";
    (function(document, window, $) {
      'use strict';

      var Site = window.Site;

      $(document).ready(function($) {
        Site.run();
      });

      defaults = $.components.getDefaults("webuiPopover");

// Example Webui Popover Pop with Large Content
      // --------------------------------------------
      // (function() {
      //   var largeContent = $('.examplePopoverLargeContent').html(),
      //     largeSettings = {
      //       title: 'Change Dietitian',
      //       content: largeContent,
      //       width: 400,
      //       //height: 350,
      //       closeable: true
      //     };

      //   $('.examplePopWithLargeContent').webuiPopover($.extend({},
      //     defaults, largeSettings));
      // })();

    })(document, window, jQuery);

    var dietitianList = <?php print_r( json_encode( $dietitianList ) ); ?>;
    var inboxList = <?php print_r( json_encode( $inboxList ) ); ?>;
    var dietitians = "";
    if( dietitianList.length > 0 ){
      $.each( dietitianList, function( key, value ){
        var name = value.first_name+' '+value.last_name;
        dietitians += '<option value='+value.dietitian_id+'>'+name+'</option>';
      });
    }
    if( inboxList.length > 0 ){
      var num = 0;
      $.each( inboxList, function( key, inbox ){
        customerName = inbox.firstname+' '+inbox.lastname;
        dietitianName = inbox.first_name+' '+inbox.last_name;
        confirmation = inbox.confirmation_code+' '+inbox.confirmation_number;
        selectID = 'dietitian_list'+num;
		//var confeSelectID = 'conf_room'+num;
        popButton = 'popDietList'+num;
		//popConfButton = 'popConfList'+num;
		var conference_rooms = "";
		if( inbox.conf1 != "NULL" && inbox.conf1 !== null && inbox.conf1 !== "" ){
			conference_rooms += "<option value="+inbox.conf1+">"+inbox.conf_room_1+"</option>";
		}
		if( inbox.conf2 != "NULL" && inbox.conf2 !== null && inbox.conf2 !== "" ){
			conference_rooms += "<option value="+inbox.conf2+">"+inbox.conf_room_2+"</option>";
		}
		if( inbox.conf3 != "NULL" && inbox.conf3 !== null && inbox.conf3 !== "" ){
			conference_rooms += "<option value="+inbox.conf3+">"+inbox.conf_room_3+"</option>";
		}
		if( inbox.conf4 != "NULL" && inbox.conf4 !== null && inbox.conf4 !== "" ){
			conference_rooms += "<option value="+inbox.conf4+">"+inbox.conf_room_4+"</option>";
		}
		if( inbox.conf5 != "NULL" && inbox.conf5 !== null && inbox.conf5 !== "" ){
			conference_rooms += "<option value="+inbox.conf5+">"+inbox.conf_room_5+"</option>";
		}
        var html = 
          '<tr>'+
          '<td>'+dietitianName+'</td>'+
          '<td>'+customerName+'</td>'+
          '<td>'+inbox.appointment_date+'</td>'+
          '<td>'+inbox.booked_date+'</td>'+
          '<td>'+inbox.name+'</td>'+
          '<td>'+confirmation+'</td>'+
          '<td>'+inbox.booked_by+'</td>'+
          '<td class=" text-center">'+
          '<button type="button" class="btn btn-icon btn-sm btn-primary '+popButton+'" onclick="setSelectedDietitian('+inbox.dietitian_id+', '+num+')" href="javascript:void(0)"><i class="icon wb-pencil" aria-hidden="true"></i></button>'+
          '<div class="hidden form-group examplePopoverLargeContent" id="'+selectID+'">'+
          '<select class="form-control" data-plugin="select2">'+dietitians+
          '</select>'+
          '<div class="padding-top-20">'+
          '<button type="button" onclick="saveDietitian('+num+','+inbox.confirmation_number+')" class="btn btn-success pull-right"><i class="icon wb-edit" aria-hidden="true"></i>Update Dietitian</button>'+
          '</div>'+
          '</div>'+
          '</td>'+



          '<td class=" text-center">'+
          '<a href="javascript:void(0);" class="btn btn-icon btn-danger" onclick="deleteAppointment('+inbox.confirmation_number+', this)"><i class="icon wb-close-mini" aria-hidden="true"></i></a>'+
          '</td>'+
          '</tr>';
          $( '#inboxFilteringList tbody' ).append( html );
          popUpDietitianList( selectID, popButton, inbox.dietitian_id );
          //popUpConfList( confeSelectID , popConfButton, inbox.conference_id );
          num += 1;
    // <td><span class="label label-table label-success">Active</span></td>
      });
    }

    //functions
    function popUpDietitianList( popUpID, elem, dietitian_id ){
      var largeContent = $('#'+popUpID ).html(),
      largeSettings = {
        title: 'Change Dietitian',
        content: largeContent,
        width: 400,
        //height: 350,
        closeable: true
      };
      $( "."+elem ).webuiPopover($.extend({},
      defaults, largeSettings));
    }

    function popUpConfList( popUpID, elem, conference_id ){
      var largeContent = $('#'+popUpID ).html(),
      largeSettings = {
        title: 'Change Dietitian',
        content: largeContent,
        width: 400,
        //height: 350,
        closeable: true
      };
      $( "."+elem ).webuiPopover($.extend({},
      defaults, largeSettings));
    }

    function setSelectedConfe( conf_id, num ){
      setTimeout( function(){
		alert( conf_id );
        $( '#confeChange'+num ).val( conf_id );
      }, 300)
    }

	function setSelected( elem, num ){
		 $( '#confeChange'+num ).val( $( elem ).val() );
	}

    function setSelectedDietitian( dietitian_id, num ){
      setTimeout( function(){
        $( '#webuiPopover'+num+' select' ).val( dietitian_id );
      }, 200)
    }

    function deleteAppointment( confiNum, elem ){
      swal({
        title: "Are you sure?",
        text: "You will not be able to recover this Appointment.",
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
        var date = d.getFullYear()+"-"+addzero+eval(d.getMonth() + 1)+"-"+d.getDate();
        $.ajax({
          type: 'POST',
          datatype: 'JSON',
          url: 'deleteAppointments',
          data: { 
            'confirmationid': confiNum,
            'date': date,
          },
          success: function( data ){
            $( elem ).closest( 'tr' ).remove();
            if( data == "success" ) {
              // getAppointmentsOnLoad();
              swal("Deleted!",
                "Appointment info has been deleted!",
                "success");
            }else{
              swal("Failed",
                "Failed canceling appointment",
                "failed");
            }
          },
        });
      });
    }

    function saveDietitian( webuiPopoverNum, confNum ){
      var dietitian_id = $( '#webuiPopover'+webuiPopoverNum+' select' ).val();
      $.ajax({
        type: 'POST',
        datatype: 'JSON',
        url: 'submitChangeDietitian',
        data: { 
          'dietitian_id': dietitian_id,
          'confirmation_number': confNum,
        },
        success: function( data ){
          alert( data );
        },
      });
    }

    function saveConference( webuiPopoverNum, confNum ){
      var conf_id = $( '#confeChange'+webuiPopoverNum ).val();
alert( conf_id );
      $.ajax({
        type: 'POST',
        datatype: 'JSON',
        url: 'submitChangeConference',
        data: { 
          'conference_id': conf_id,
          'confirmation_number': confNum,
        },
        success: function( data ){
          alert( data );
        },
      });
    }

  </script>


<script>
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
        // var filtering = $('#inboxFilteringList');
        // filtering.footable().on('footable_filtering', function(e) {
        //   var selected = $('#filteringStatus').find(':selected').val();
        //   e.filter += (e.filter && e.filter.length > 0) ? ' ' +
        //     selected : selected;
        //   e.clear = !e.filter;
        // });

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
            '<tr><td><button class="btn btn-icon btn-danger btn-outline btn-round btn-xs demo-delete-btn"><i class="icon wb-close-mini" aria-hidden="true"></i></button></td><td>Adam</td><td>Doe</td><td>Traffic Court Referee</td><td>22 Jun 1972</td><td><span class="label label-table label-success">Active</span></td></tr>';

          //add it
          footable.appendRow(newRow);
        });
      })();
						
						

    })(document, window, jQuery);
</script>
</body>
</html>