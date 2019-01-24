<!DOCTYPE html>

<html class="no-js before-run" lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<meta name="description" content="bootstrap admin template">
<meta name="author" content="">
<title>Manage Appointments| Family Food Dashboard</title>

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
<link rel="stylesheet" href="../assets/assets/vendor/datatables-bootstrap/dataTables.bootstrap.css">
<link rel="stylesheet" href="../assets/assets/vendor/datatables-fixedheader/dataTables.fixedHeader.css">
<link rel="stylesheet" href="../assets/assets/vendor/datatables-responsive/dataTables.responsive.css">
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

<?php include("inc_user_menu_header.php"); ?>

<!-- end header menu --> 

<!-- start left menu -->

<?php include("inc_user_left_menu.php"); ?>

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
<h1 class="page-title">Manage Appointments</h1>
<div class="page-header-actions"> <a href="searchdietitian" role="button" class="btn btn-danger btn-block btn-round"><i class="icon wb-plus" aria-hidden="true"></i>New Appointment</a> </div>
</div>
<div class="panel">
<div class="panel-body">
<table id="appointmentsList" class="table table-hover dataTable table-striped width-full" data-plugin="dataTable">
<thead>
<tr>
<th>Company Name</th>
<th>Name</th>
<th>Service</th>
<th>Date</th>
<th>Time</th>
<th class="text-center">Edit Details</th>
<th class="text-center">Cancel</th>
</tr>
</thead>
<tfoot>
<tr>
<th>Company Name</th>
<th>Name</th>
<th>Service</th>
<th>Date</th>
<th>Time</th>
<th class="text-center">Edit Details</th>
<th class="text-center">Cancel</th>
</tr>
</tfoot>
<tbody>

<!-- <tr>

<td>Hamilton Lane</td>

<td><strong>Andrea Gore</strong></td>

<td>Individualized Nutrition Counsceling</td>

<td>Wed. June 10, 2015</td>

<td>9:00AM EST</td>

<td class="text-center"><a href="#" class="btn btn-icon btn-success"><i class="icon wb-pencil" aria-hidden="true"></i></a></td>

<td class="text-center"><a href="#" class="btn btn-icon btn-danger"><i class="icon wb-close-mini" aria-hidden="true"></i></a></td>

</tr> -->

</tbody>
</table>
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
<script src="../assets/assets/vendor/datatables/jquery.dataTables.min.js"></script> 
<script src="../assets/assets/vendor/datatables-fixedheader/dataTables.fixedHeader.js"></script> 
<script src="../assets/assets/vendor/datatables-bootstrap/dataTables.bootstrap.js"></script> 
<script src="../assets/assets/vendor/datatables-responsive/dataTables.responsive.js"></script> 
<script src="../assets/assets/vendor/datatables-tabletools/dataTables.tableTools.js"></script> 
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
<script src="../assets/assets/js/components/datatables.js"></script> 
<script src="../assets/assets/js/components/bootstrap-sweetalert.js"></script> 
<script>

//functions

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



$.ajax({

  type: 'POST',

  datatype: 'JSON',

  url: 'getAppointments',

  data: { 

      'userid': '<?php echo $cuser ?>',

      'bookedby': '<?php echo $cservice ?>'

    },

  success: function( data ){

    var appointmentsList = jQuery.parseJSON(data);

    displayAppointments( appointmentsList );

  }

});



function displayAppointments( data ){

  if( data != 'undefined' ){

    if( data.length > 0 ){

      var innerHtml = "";

      $.each( data, function( key, value ){

        var dates = value.appointment_date.split("-");

        var myDate=new Date();

        var myDate1=new Date();

        var nextdate=getNextDate().split("-");;

        var one_day=1000*60*60*24;



        myDate.setFullYear(dates[0],eval(dates[1] -1),dates[2]);

        myDate1.setFullYear(nextdate[0],eval(nextdate[1] -1),nextdate[2]);



        var difference_ms = myDate.getTime() - myDate1.getTime();



        var block = "";

        var appointmenttime = value.appointment_time.split(" ");

        var appointmenthourmin = appointmenttime[0].split(":");

        var appointmentdate = calendarDayFormat(value.appointment_date);

        var currdate = new Date();

        var timezone = "";



        if(Math.round(difference_ms/one_day) < 2){

          block ="disabled";

        } else if(Math.round(difference_ms/one_day) == 0)  {

        

          var bookedtime = "";

          if (appointmenttime[1] == "PM") {

            bookedtime = eval(eval(eval(parseInt(appointmenthourmin[0]) + 12) * 60) +eval(parseInt(appointmenthourmin[1]))); 

          } else {

            bookedtime = eval(eval(parseInt(appointmenthourmin[0]) * 60) +eval(parseInt(appointmenthourmin[1]))); 

          }

          //  alert(bookedtime+"--------------"+blockedtime+"-----------"+appointmenttime);

          var blockedtime = eval(eval(parseInt(currdate.getHours()) * 60) +parseInt(currdate.getMinutes()));

          var timediff = eval((eval(blockedtime/60) - eval(bookedtime/60)));

          if((timediff >= 0) && (timediff<= 24)) {

            block = "disabled";

          } else {

            block = "";

          }

        }

        if(value.timezone != null) {

          timezone = value.timezone;

        }

        

        innerHtml += "<tr>"+

        "<td>"+value.company_name+"</td>"+

        "<td><strong>"+value.firstname+" "+value.lastname+"</strong></td>"+

        "<td>"+value.name+"</td>"+

        "<td>"+weekday[myDate.getDay()]+','+month[myDate.getMonth()]+' '+myDate.getDate()+","+myDate.getFullYear()+"</td>"+

        "<td>"+appointmenttime[0]+' '+appointmenttime[1]+' '+timezone+"</td>";

// <td class="text-center"><a href="#" class="btn btn-icon btn-success"><i class="icon wb-pencil" aria-hidden="true"></i></a></td>

// <td class="text-center"><a href="#" class="btn btn-icon btn-danger"><i class="icon wb-close-mini" aria-hidden="true"></i></a></td>

        // innerHtml = innerHtml + '<tr><td scope="row"><a href="javascript:void(0)">'+jsonObj[i].company_name+'</a></td><td class="app-td">'+jsonObj[i].firstname+" "+jsonObj[i].lastname+'</td><td class="app-td">'+jsonObj[i].name+'</td><td>'+weekday[myDate.getDay()]+','+month[myDate.getMonth()]+' '+myDate.getDate()+","+myDate.getFullYear()+'</td><td>'+appointmenttime[0]+' '+appointmenttime[1]+' '+timezone+'</td><td>';

        if(block == "disabled") {

          // innerHtml = innerHtml +'<i class="glyphicon glyphicon-edit"></i>Edit details</td><td><i class="glyphicon glyphicon-remove"></i>Cancel</td></tr>';



          innerHtml = innerHtml +'<td class="text-center"><i class="icon wb-pencil" aria-hidden="true"></i></td>';

          innerHtml = innerHtml + '<td class="text-center"><i class="icon wb-close-mini" aria-hidden="true"></i></td></tr>';



        } else {

          innerHtml = innerHtml +'<td class="text-center"><a href="javascript:void(0);" class="btn btn-icon btn-success" onclick="editAppointmentDetails(\''+value.confirmation_number+'\')"><i class="icon wb-pencil" aria-hidden="true"></i></a></td>';

          innerHtml = innerHtml + '<td class="text-center"><a href="javascript:void(0);" class="btn btn-icon btn-danger" onclick="deleteAppointment('+value.confirmation_number+', this)"><i class="icon wb-close-mini" aria-hidden="true"></i></a></td></tr>';

          // innerHtml = innerHtml +'<a href="javascript:void(0)"  onclick="editAppointmentDetails(\''+jsonObj[i].confirmation_number+'\')"><i class="glyphicon glyphicon-edit"></i>Edit details</a></td><td><a href="javascript:void(0)" onclick="deleteAppointment(\''+jsonObj[i].confirmation_number+'\')" ><i class="glyphicon glyphicon-remove"></i>Cancel</a></td></tr>';

        }

        innerHtml = innerHtml +'<input type="hidden" id="'+value.confirmation_number+'_searchlocation" value="'+value.city+'" />';

        innerHtml = innerHtml +'<input type="hidden" id="'+value.confirmation_number+'_company_name" value="'+value.company_name+'" />';

        innerHtml = innerHtml +'<input type="hidden" id="'+value.confirmation_number+'_location_id" value="'+value.location_id+'" />';

        innerHtml = innerHtml +'<input type="hidden" id="'+value.confirmation_number+'_service_id" value="'+value.service_id+'" />';

        innerHtml = innerHtml +'<input type="hidden" id="'+value.confirmation_number+'_servicename" value="'+value.name+'" />';

        innerHtml = innerHtml +'<input type="hidden" id="'+value.confirmation_number+'_hour" value="'+appointmenthourmin[0]+'" />';

        innerHtml = innerHtml +'<input type="hidden" id="'+value.confirmation_number+'_minutes" value="'+appointmenthourmin[1]+'" />';

        innerHtml = innerHtml +'<input type="hidden" id="'+value.confirmation_number+'_timestatus" value="'+appointmenttime[1]+'" />';

        innerHtml = innerHtml +'<input type="hidden" id="'+value.confirmation_number+'_calendarday" value="'+appointmentdate+'" />';

        innerHtml = innerHtml +'<input type="hidden" id="'+value.confirmation_number+'_calenderdate" value="'+value.appointment_date+'" />';

        innerHtml = innerHtml +'<input type="hidden" id="'+value.confirmation_number+'_locationname" value="'+value.address2+'" />';

       innerHtml = innerHtml +'<input type="hidden" id="'+value.confirmation_number+'_confirmationnumber" value="'+value.confirmation_number+'" />';

      });

      $( '#appointmentsList tbody' ).html( innerHtml );

    }

  }

}



function editAppointmentDetails( id ){

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

    }, 

    success: function( msg ){

      if( msg == "success" ) {

        window.location.href="searchdietitian";

      }

    }

  });

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



function getNextDate() {

  var mydate2 = new Date();

  var zeromonthprecession = "0";

  var zeroprecession = "0";



  if(eval(mydate2.getMonth() +1) < 10 ) {

    zeromonthprecession = zeromonthprecession + eval(mydate2.getMonth() +1) ;

  } else {

    zeromonthprecession = eval(mydate2.getMonth() +1) ;

  }



  if(eval(mydate2.getDate() + 1) < 10) {

    zeroprecession = zeroprecession + eval(mydate2.getDate() + 1) ;

  //alert(zeroprecession);

  } else {

    zeroprecession = eval(mydate2.getDate() + 1) ;

  }

  

  return  mydate2.getFullYear()+"-"+zeromonthprecession+"-"+zeroprecession;

}



function calendarDayFormat(datestring) {

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



      // Fixed Header Example

      // --------------------

      // (function() {

      //   // initialize datatable

      //   var table = $('#exampleFixedHeader').DataTable({

      //     responsive: true,

      //     "bPaginate": false,

      //     "sDom": "t" // just show table, no other controls

      //   });



      //   // initialize FixedHeader

      //   var offsetTop = 0;

      //   if ($('.site-navbar').length > 0) {

      //     offsetTop = $('.site-navbar').eq(0).innerHeight();

      //   }

      //   var fixedHeader = new FixedHeader(table, {

      //     offsetTop: offsetTop

      //   });



      //   // redraw fixedHeaders as necessary

      //   $(window).resize(function() {

      //     fixedHeader._fnUpdateClones(true);

      //     fixedHeader._fnUpdatePositions();

      //   });

      // })();



      // Individual column searching

      // ---------------------------

      (function() {

        $(document).ready(function() {

          var defaults = $.components.getDefaults("dataTable");



          var options = $.extend(true, {}, defaults, {

            initComplete: function() {

              this.api().columns().every(function() {

                var column = this;

                var select = $(

                    '<select class="form-control width-full"><option value=""></option></select>'

                  )

                  .appendTo($(column.footer()).empty())

                  .on('change', function() {

                    var val = $.fn.dataTable.util.escapeRegex(

                      $(this).val()

                    );



                    column

                      .search(val ? '^' + val + '$' : '',

                        true, false)

                      .draw();

                  });



                column.data().unique().sort().each(function(

                  d, j) {

                  select.append('<option value="' + d +

                    '">' + d + '</option>')

                });

              });

            }

          });



          $('#exampleTableSearch').DataTable(options);

        });

      })();



      // Table Tools

      // -----------

      (function() {

        $(document).ready(function() {

          var defaults = $.components.getDefaults("dataTable");



          var options = $.extend(true, {}, defaults, {

            "aoColumnDefs": [{

              'bSortable': false,

              'aTargets': [-1]

            }],

            "iDisplayLength": 5,

            "aLengthMenu": [

              [5, 10, 25, 50, -1],

              [5, 10, 25, 50, "All"]

            ],

            "sDom": '<"dt-panelmenu clearfix"Tfr>t<"dt-panelfooter clearfix"ip>',

            "oTableTools": {

              "sSwfPath": "../assets/vendor/datatables-tabletools/swf/copy_csv_xls_pdf.swf"

            }

          });



          $('#exampleTableTools').dataTable(options);

        });

      })();



      // Table Add Row

      // -------------



      (function() {

        $(document).ready(function() {

          var defaults = $.components.getDefaults("dataTable");



          var t = $('#exampleTableAdd').DataTable(defaults);



          $('#exampleTableAddBtn').on('click', function() {

            t.row.add([

              'Adam Doe',

              'New Row',

              'New Row',

              '30',

              '2015/10/15',

              '$20000'

            ]).draw();

          });

        });

      })();

    })(document, window, jQuery);



  </script>
</body>
</html>