<link href="<?php echo base_url() ?>css/settings_new.css" rel="stylesheet" />
<link href="<?php echo base_url() ?>css/family_gen.css" rel="stylesheet" />

<link href="<?php echo base_url() ?>css/bootstrap.css" rel="stylesheet" />
<link href="<?php echo base_url() ?>css/common.css" rel="stylesheet" />
<link href="<?php echo base_url() ?>css/details.css" rel="stylesheet">
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">
<link rel="stylesheet" href="http://code.jquery.com/ui/1.8.18/themes/base/jquery-ui.css" type="text/css" media="all" />

<script src="<?php echo base_url() ?>js/jquery-1.10.2.min.js"></script>
<script src="<?php echo base_url() ?>js/bootstrap.min.js"></script>

<script src="<?php echo base_url() ?>js/jquery-1.6.4.min.js"></script>


<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<!-- First get JQuery -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<!-- Then get JQuery UI -->
<script src="http://code.jquery.com/ui/1.8.18/jquery-ui.min.js"></script>
<script>
$(document).ready(function(){
$("#viewdetailsappts").dialog({bgiframe: true,autoOpen: false,height: 325,width: 500,modal: true,resizable: true});


//$(".current").click(function() {
	$('.apptsdetails').css("display","block");
	$(".Allapptsdetails").css("display","none");
	var currentdate = getCurrentdate();
	getUserApptsOnLoad(currentdate);
//});

$(".all").click(function() {

 $('.apptsdetails').css("display","none");
 $(".Allapptsdetails").css("display","block"); 
  getAllUserApptsOnLoad();
});
});



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


function getUserApptsOnLoad(curdate) {
var dates=curdate;
$.ajax({
                url:'getUserAppts' ,
				type :'POST',
				data: "dietitian_id=<?php echo $conuser ?>"+"&date="+dates,
                success: displayAppts,
                failure: displayAppts,
                dataType: 'json',
                cache: true
								
            });
			}	
			
function followupDetails(id) {
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
var dietitian = $("#"+id+"_dietitian").val();
var userid = $("#"+id+"_userid").val();

//alert(service_id);
$.ajax({
                url:'setSessionForEditAppointment' ,
				type :'POST',
				data: "serachlocation="+serachlocation+"&company_name="+company_name+"&location_id="+location_id+"&service_id="+service_id+"&servicename="+servicename+"&hour="+hour+"&minutes="+minutes+"&timestatus="+timestatus+"&calenderdate="+calenderdate+"&locationname="+locationname+"&appointConfNum="+appointmentConfNumber+"&calendarday="+calendarday+"&dietitian="+dietitian+"&fuserid="+userid,
                success: function(msg){
					if(msg == "success") {
						//edited : for localhost
					  window.location.href="<?php echo base_url() ;?>index.php/login/searchdietitian";
					}
				},
                failure: function(msg){ },
                cache: true
								
            });

}

function displayAppts(data){
if(typeof data != 'undefined'){
var jsonObj= data;
if (jsonObj.length != 0 ) {
	var innerHtml = ' <div class="print pull-right"><input type="button" id="print_button" class="btn btn-success" value="Print Appointment" onclick="document.title = \'FamilyFoodLLC, Appointments\';window.print();"/></div><br><table id="report" class="table table-responsive table-striped" summary="This Table About appointment confirm Details"><thead>';
		innerHtml = innerHtml+'<tr><th class="title-th" scope="col">ServiceName</th> <th class="title-th" scope="col">Name</th> <th class="title-th" scope="col">UserName</th><th class="title-th" scope="col">Reason</th><th class="title-th" scope="col">Phone Number</th><th class="title-th" scope="col">Date</th> <th class="title-th" scope="col">Time</th> <th scope="col" class="title-th"></th><th scope="col" class="title-th"></th><th scope="col" class="title-th"></th></tr></thead><tbody>';
      
  	
	for (i=0;i < jsonObj.length;i++)
	{
	
	 var appointmenttime = jsonObj[i].appointment_time.split(" ");
			    var appointmenthourmin = appointmenttime[0].split(":");
			    var appointmentdate = calendarDayFormat(jsonObj[i].appointment_date);
				var currdate = new Date();
				var timezone = "";

				if(jsonObj[i].timezone != null) {
				  timezone = jsonObj[i].timezone;
				}				
	var clientName = jsonObj[i].firstname+' '+jsonObj[i].lastname;
	if( jsonObj[i].privacy_consent < 1 ){
		var clientName = '*'+jsonObj[i].firstname+' '+jsonObj[i].lastname;
	}
	innerHtml=innerHtml+'<tr><td scope="row">'+jsonObj[i].name+'</td><td scope="row">'+clientName+'</td><td scope="row"><a href="#">'+jsonObj[i].firstname+'</a></td><td>'+jsonObj[i].reason+'</td><td>'+jsonObj[i].phonenumber+'</td><td>'+jsonObj[i].appointment_date+'</td> <td>'+jsonObj[i].appointment_time+' '+jsonObj[i].timezone+'</td> <td><a href="javascript:void(0)" onclick="displayViewDetails(\''+jsonObj[i].confirmation_number+'\')"> <i class="glyphicon glyphicon-expand"></i> View Details</a></td><td><a href="javascript:void(0)" onclick="followupDetails(\''+jsonObj[i].confirmation_number+'\')" > <i class="glyphicon glyphicon-thumbs-up"></i> Follow-Up</a></td><td><div class="arrow"></div></td><td colspan="9">Test</td></tr>';		
	innerHtml = innerHtml +'<input type="hidden" id="'+jsonObj[i].confirmation_number+'_searchlocation" value="'+jsonObj[i].city+'" />';
			  innerHtml = innerHtml +'<input type="hidden" id="'+jsonObj[i].confirmation_number+'_company_name" value="'+jsonObj[i].company_name+'" />';
			  innerHtml = innerHtml +'<input type="hidden" id="'+jsonObj[i].confirmation_number+'_location_id" value="'+jsonObj[i].location_id+'" />';
			  innerHtml = innerHtml +'<input type="hidden" id="'+jsonObj[i].confirmation_number+'_service_id" value="'+jsonObj[i].service_id+'" />';
			  innerHtml = innerHtml +'<input type="hidden" id="'+jsonObj[i].confirmation_number+'_servicename" value="'+jsonObj[i].name+'" />';
			  innerHtml = innerHtml +'<input type="hidden" id="'+jsonObj[i].confirmation_number+'_hour" value="'+appointmenthourmin[0]+'" />';
			  innerHtml = innerHtml +'<input type="hidden" id="'+jsonObj[i].confirmation_number+'_minutes" value="'+appointmenthourmin[1]+'" />';
			  innerHtml = innerHtml +'<input type="hidden" id="'+jsonObj[i].confirmation_number+'_timestatus" value="'+appointmenttime[1]+'" />';
			  innerHtml = innerHtml +'<input type="hidden" id="'+jsonObj[i].confirmation_number+'_timezone" value="'+timezone+'" />';
			  innerHtml = innerHtml +'<input type="hidden" id="'+jsonObj[i].confirmation_number+'_calendarday" value="'+appointmentdate+'" />';
			  innerHtml = innerHtml +'<input type="hidden" id="'+jsonObj[i].confirmation_number+'_calenderdate" value="'+jsonObj[i].appointment_date+'" />';
			  innerHtml = innerHtml +'<input type="hidden" id="'+jsonObj[i].confirmation_number+'_locationname" value="'+jsonObj[i].address2+'" />';
			 innerHtml = innerHtml +'<input type="hidden" id="'+jsonObj[i].confirmation_number+'_confirmationnumber" value="" />';
			 innerHtml = innerHtml +'<input type="hidden" id="'+jsonObj[i].confirmation_number+'_dietitian" value="<?php echo $conuser ?>" />';
			 innerHtml = innerHtml +'<input type="hidden" id="'+jsonObj[i].confirmation_number+'_userid" value="'+jsonObj[i].userid+'" />';



	
	}    
	innerHtml =innerHtml + '</tbody></table>';
	$(".apptsdetails").html(innerHtml);
   
   }else {
   
   $(".apptsdetails").html(" No appointments are found.").css({"color":"red","margin-left":"10px","font-size":"20px"});
   }
   }
}

function getAllUserApptsOnLoad() {
$.ajax({
                url:'getAllUserAppts' ,
				type :'POST',
				data: "dietitian_id=<?php echo $conuser ?>",
                success: displayAllAppts,
                failure: displayAllAppts,
                dataType: 'json',
                cache: true
								
            });
			}
function displayAllAppts(data){
if(typeof data != 'undefined'){
var jsonObj= data;
if (jsonObj.length != 0 ) {
	var innerHtml = '<table id="report" class="table table-responsive table-striped" summary="This Table About appointment confirm Details"><thead>';
	innerHtml = innerHtml+'<tr><th class="title-th" scope="col">ServiceName</th> <th class="title-th" scope="col">UserName</th><th class="title-th" scope="col">Date</th> <th class="title-th" scope="col">Time</th> <th scope="col" class="title-th"></th></tr></thead><tbody>';
            		
  	
	for (i=0;i < jsonObj.length;i++)
	{
	 innerHtml=innerHtml+'<tr><td scope="row">'+jsonObj[i].name+'</td><td scope="row"><a href="#">'+jsonObj[i].firstname+'</a></td><td>'+jsonObj[i].appointment_date+'</td> <td>'+jsonObj[i].appointment_time+'</td> <td><a href="javascript:void(0)" onclick="displayViewDetails(\''+jsonObj[i].confirmation_number+'\')"> <i class="glyphicon glyphicon-expand"></i> View Details</a></td><td><a href="#"> <i class="glyphicon glyphicon-thumbs-up"></i> Follow-Up</a></td></tr>';		
		
	}    
	innerHtml =innerHtml + '</tbody></table>';
	$(".Allapptsdetails").html(innerHtml);
   
   }else {
   
   $(".Allapptsdetails").html(" No appointments are found.").css({"color":"red","margin-left":"10px","font-size":"20px"});
   }
   }
   }

function getCurrentdate() {
var mydate = new Date();
				var zeromonthprecession = "0";
				var zeroprecession = "0";
			
				if(eval(mydate.getMonth() +1) < 10 ) {
				  zeromonthprecession = zeromonthprecession + eval(mydate.getMonth() +1) ;
				} else {
				zeromonthprecession = eval(mydate.getMonth() +1) ;
				}
				
				if(mydate.getDate() < 10) {
				
				zeroprecession = zeroprecession + mydate.getDate() ;
				} else {
				zeroprecession = mydate.getDate() ;
				}
 return  mydate.getFullYear()+"-"+zeromonthprecession+"-"+zeroprecession;
}
function displayViewDetails(id) {
var appointmentConfNumber =id;
$("#viewdetailsappts").dialog('option', 'title', 'View Details');
$("#viewdetailsappts").css('display','block');
$("#viewdetailsappts").dialog('open');
$.ajax({
                url:'displayViewDetails' ,
				type :'POST',
				data: "confNum="+appointmentConfNumber,
                success: ViewDetails,
                failure: ViewDetails,
                dataType: 'json',
                cache: true
								
            });
			}
			
function ViewDetails(data){
if(typeof data != 'undefined'){
var jsonObj= data;
if (jsonObj.length != 0 ) {
$("#viewdetailsname").html(jsonObj[0].firstname);
$("#viewdetailscompany").html(jsonObj[0].company_name);
$("#viewdetailslocation").html(jsonObj[0].address2); 
$("#viewdetailszipcode").html(jsonObj[0].pincode);
$("#viewdetailsconf1").html(jsonObj[0].conf_room_1);
$("#viewdetailsconf2").html(jsonObj[0].conf_room_2);
$("#viewdetailsconf3").html(jsonObj[0].conf_room_3);
$("#viewdetailsconf4").html(jsonObj[0].conf_room_4);
$("#viewdetailsconf5").html(jsonObj[0].conf_room_5);

$("#viewdetailsservice").html(jsonObj[0].name);
$("#viewdetailsdate").html(jsonObj[0].appointment_date);
$("#viewdetailstime").html(jsonObj[0].appointment_time);
$("#viewdetailsreason").html(jsonObj[0].reason);
$("#viewdetailsphoneno").html(jsonObj[0].phone);


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

//alert(service_id);
$.ajax({
                url:'setSessionForEditAppointment' ,
				type :'POST',
				data: "serachlocation="+serachlocation+"&company_name="+company_name+"&location_id="+location_id+"&service_id="+service_id+"&servicename="+servicename+"&hour="+hour+"&minutes="+minutes+"&timestatus="+timestatus+"&calenderdate="+calenderdate+"&locationname="+locationname+"&appointConfNum="+appointmentConfNumber+"&calendarday="+calendarday,
                success: function(msg){
					if(msg == "success") {
					  window.location.href="<?php echo base_url() ;?>login/searchdietitian";
					}
				},
                failure: function(msg){ },
                cache: true
								
            });
}

function removeSession1() {

$.ajax({
                url:'removeSessiondetails' ,
				type :'POST',
                success: function(data) {},
                failure: function(data) {},
                dataType: 'text',
                cache: true
								
            });
}

</script>
<!-- expand rows -->
<style type="text/css">
        #report { border-collapse:collapse;}
        #report h4 { margin:0px; padding:0px;}
        #report img { float:right;}
        #report ul { margin:10px 0 10px 40px; padding:0px;}
        #report th { background:#7CB8E2 url(header_bkg.png) repeat-x scroll center left; color:#fff; padding:7px 15px; text-align:left;}
        #report td { background:#C7DDEE none repeat-x scroll center left; color:#000; padding:7px 15px; }
        #report tr.odd td { background:#fff url(row_bkg.png) repeat-x scroll center left; cursor:pointer; }
        #report div.arrow { background:transparent url(../../../images/arrows.png) no-repeat scroll 0px -16px; width:16px; height:16px; display:block;}
        #report div.up { background-position:0px 0px;}
    </style>
<script type="text/javascript">  
        $(document).ready(function(){
            $("#report tr:odd").addClass("odd");
            $("#report tr:not(.odd)").hide();
            $("#report tr:first-child").show();
            
            $("#report tr.odd").click(function(){
                $(this).next("tr").toggle();
                $(this).find(".arrow").toggleClass("up");
            });
            //$("#report").jExpand();
        });
</script>
<!-- end expand rows -->
<body class="dashboard site-menubar-unfold" data-auto-menubar="false">
<header>
    		<div class="container">
			<h1 class="logo"><a href="#"><img alt="Family Food, LLC" src="<?php echo base_url() ?>images/family-food-logo.png" /> </a></h1>

                <nav class="pull-right">
                	<ul class="nav nav-pills">
                    	<!--<li><a href="set-availability.html">Set Availability</a></li>-->
						<?php if($fdietitian != "") { ?>
						<li><a href="searchdietitian">New Appointment</a></li>
						<?php } ?>
                        <li><a href="viewappointments">View Appointments</a></li>
                         <li class="dropdown">
                        	<a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        		<?php echo $conuser ?> <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                            	<li><a href="editprofile">Edit Profile</a></li>
                                <li><a href="changepassword">Change Password</a></li>
                                <li class="divider"></li>
                                <li><a href="signout">Sign Out</a></li>
                            </ul>
                        </li>
                        
                    </ul>
                </nav>
            </div>
        </header>
	<!-- END HEADRT TAG -->
    
    <!-- START MAIN CONTENT -->
    	<div class="container content">
        <h2>Appointments</h2>
		<!--<ol class="breadcrumb">
				<!--<li><a class = "current" href="javascript:void(0)">Current Appointments</a></li>-->
                 <!-- <li><a class = "all" href="javascript:void(0)">All Appointments</a></li>-->
                  
             <!-- </ol>-->
		<br>
		        <div id = "viewdetailsappts" style="display:none;" >
			
			        <div class="horizontalStack" >
					<label for="name" >Name:</label>
					<span class="name" name="firstname" VALUE="" id="viewdetailsname"> </span>
					</div>	
					
					<div class="horizontalStack" >
					<label for="company_name" >Company Name:</label>
					<span  class="company_name" name="company_name" id="viewdetailscompany"> </span>
					</div>	
					
					<div class="horizontalStack" >
					<label for="location" >Location:</label>
					<span class="location" name="location"  id="viewdetailslocation"> </span>
					</div>
					
					<div class="horizontalStack" >
					<label for="zipcode" >ZipCode:</label>
					<span class="zipcode" name="zipcode"  id="viewdetailszipcode"> </span>
					</div>
					
					<div class="horizontalStack" >
					<label for="conference" >Conference Room1:</label>
					<span class="conference" name="conference1"  id="viewdetailsconf1"> </span>
					</div>
					
					<div class="horizontalStack" >
					<label for="conference" >Conference Room2:</label>
					<span class="conference" name="conference2"  id="viewdetailsconf2"> </span>
					</div>
					
					<div class="horizontalStack" >
					<label for="conference" >Conference Room3:</label>
					<span class="conference" name="conference3"  id="viewdetailsconf3"> </span>
					</div>
					
					<div class="horizontalStack" >
					<label for="conference" >Conference Room4:</label>
					<span class="conference" name="conference4"  id="viewdetailsconf4"> </span>
					</div>
					
					<div class="horizontalStack" >
					<label for="conference" >Conference Room5:</label>
					<span class="conference" name="conference5"  id="viewdetailsconf5"> </span>
					</div>

					<div class="horizontalStack" >
					<label for="servicename" >Service Name: </label>
					<span  class="servicename" name="servicename" id="viewdetailsservice"> </span>
					</div>					
					
					<div class="horizontalStack" >
					<label for="reason" >Reason: </label>
					<span  class="reason" name="reason" id="viewdetailsreason"> </span>
					</div>	
					
					<div class="horizontalStack" >
					<label for="phonenumber" >Phone No: </label>
					<span  class="phoneno" name="phoneno" id="viewdetailsphoneno"> </span>
					</div>	
					
					<div class="horizontalStack" >
					<label for="date" >Date:</label>
					<span class="date" name="date" id="viewdetailsdate"> </span>
					</div>
					
					<div class="horizontalStack" >
					<label for="time" >Time:</label>
					<span class="time" name="time" id="viewdetailstime"></span>
					</div>

										
	</div>	

		<div class="apptsdetails" style="display:block;">
			   

				</div> 
		    <div class="Allapptsdetails" style="display:block;">
			    

				</div>             
			            
			</div>
	</div>
    <!-- END MAIN CONTENT -->
    	
    
    <!-- START FOOTER TAG  --> 
    <footer>
		<div class="container">
        	<p>© 2013 Family Food, LLC. All Rights Reserved.</p>
        </div>    
    </footer>	
    <!-- END FOOTER TAG -->
    
	 <!-- Bootstrap core JavaScript
    ================================================== -->
    <!--<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>-->
<script src="js/jquery-1.10.2.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>