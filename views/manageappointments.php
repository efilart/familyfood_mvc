<script src="<?php echo base_url() ?>js/jquery-1.10.2.min.js"></script>
<script src="<?php echo base_url() ?>js/bootstrap.min.js"></script>
<link href="<?php echo base_url() ?>css/settings_new.css" rel="stylesheet">
<link href="<?php echo base_url() ?>css/family_gen.css" rel="stylesheet">


<link rel="stylesheet" href="http://code.jquery.com/ui/1.8.18/themes/base/jquery-ui.css" type="text/css" media="all" />

<!-- First get JQuery -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<!-- Then get JQuery UI -->
<script src="http://code.jquery.com/ui/1.8.18/jquery-ui.min.js"></script>


<script type="text/javascript">
var dataexists = 0;
$(document).ready(function() {
$("#canceldialog").dialog({bgiframe: true,autoOpen: false,height: 150,width: 350,modal: true,resizable: true});
	getAppointmentsOnLoad();
});



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

function getAppointmentsOnLoad() {
$.ajax({
                url:'getAppointments' ,
				type :'POST',
				data: "userid=<?php echo $cuser ?>"+"&bookedby=<?php echo $cservice ?>",
                success: displayAppointments,
                failure: displayAppointments,
                dataType: 'json',
                cache: true
								
            });

}

var myDate=new Date();
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

var companyOrder = "";
var nameOrder = "";
var dateOrder = "";
var company = "company";
var firstname = "firstname";
var date = "date";

var ASC = "ASC";
var DESC = "DESC";

function getAppointmentsOrderBy( order ) {
	$.ajax({
		url:'getAppointmentsOrderBy' ,
		type :'POST',
		data: "userid=<?php echo $cuser ?>"+"&bookedby=<?php echo $cservice ?>&order="+order,
	    success: displayAppointments,
	    failure: displayAppointments,
	    dataType: 'json',
	    cache: true
    });

}

function orderBy( order ){
	if( order == "company" ){
		if( companyOrder == "" || companyOrder == DESC ){
			companyOrder = ASC;
		}else{
			companyOrder = DESC;
		}
		getAppointmentsOrderBy( "ORDER BY company_name " + companyOrder );
	}else if( order == "firstname" ){
		if( nameOrder == "" || nameOrder == DESC ){
			nameOrder = ASC;
		}else{
			nameOrder = DESC;
		}
		getAppointmentsOrderBy( "ORDER BY firstname " + nameOrder );
	}else if( order == "date" ){
		if( dateOrder == "" || dateOrder == DESC ){
			dateOrder = ASC;
		}else{
			dateOrder = DESC;
		}
		getAppointmentsOrderBy( "ORDER BY appointment_date " + dateOrder );
	}
}

function displayAppointments(data) {
if(typeof data != 'undefined'){
		var jsonObj = data;
		
		if (jsonObj.length != 0 ) {
         var innerHtml = '<table class="table table-responsive table-striped" summary="This Table About appointment confirm Details"><thead>';
         innerHtml = innerHtml+'<tr><th scope="col" class="title-th"><a href="javascript:void(0);" onclick="orderBy(company)">Corporate Company</a></th><th scope="col" class="title-th"><a href="javascript:void(0);" onclick="orderBy(firstname)">Name</a></th><th scope="col" class="title-th">Service</th><th scope="col" class="title-th"><a href="javascript:void(0);" onclick="orderBy(date)">Date</a></th><th scope="col" class="title-th">Time</th><th scope="col" class="title-th"></th></tr></thead><tbody>';
		 for (i=0;i < jsonObj.length;i++) {
		      var dates = jsonObj[i].appointment_date.split("-");
			  var myDate=new Date();
			  var myDate1=new Date();
			  var nextdate=getNextDate().split("-");;
			   var one_day=1000*60*60*24;
			    //alert(dates[0]+"--"+eval(dates[1] -1)+"---"+dates[2]);
				
				//alert(nextdate[0]+"---"+eval(nextdate[1] -1)+"---"+nextdate[2]);
				myDate.setFullYear(dates[0],eval(dates[1] -1),dates[2]);
				myDate1.setFullYear(nextdate[0],eval(nextdate[1] -1),nextdate[2]);
				
				var difference_ms = myDate.getTime() - myDate1.getTime();
				//alert( myDate.getTime()+"-----"+myDate1.getTime()+"---"+one_day);
				var block = "";
				var appointmenttime = jsonObj[i].appointment_time.split(" ");
			    var appointmenthourmin = appointmenttime[0].split(":");
			    var appointmentdate = calendarDayFormat(jsonObj[i].appointment_date);
				var currdate = new Date();
				var timezone = "";
				
				if(Math.round(difference_ms/one_day) < 0){
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
				if(jsonObj[i].timezone != null) {
				  timezone = jsonObj[i].timezone;
				}
			  
		     // var myDate=new Date();
			 // innerHtml = innerHtml + '<tr><td scope="row"><a href="javascript:void(0)">'+jsonObj[i].company_name+'</a></td><td class="app-td">'+jsonObj[i].name+'</td><td>'+weekday[myDate.getDay()]+','+month[myDate.getMonth()]+' '+myDate.getDate()+","+myDate.getFullYear()+'</td><td>'+jsonObj[i].appointment_time+'</td><td><a href="javascript:void(0)" onclick="editAppointment(\''+jsonObj[i].confirmation_number+'\', \''+jsonObj[i].service_id+'\', \''+jsonObj[i].location_id+'\')" ><i class="glyphicon glyphicon-edit"></i>Edit details</a></td><td><a href="javascript:void(0)" onclick="deleteAppointment(\''+jsonObj[i].confirmation_number+'\')" ><i class="glyphicon glyphicon-remove"></i>Cancel</a></td></tr>';  
			  innerHtml = innerHtml + '<tr><td scope="row"><a href="javascript:void(0)">'+jsonObj[i].company_name+'</a></td><td class="app-td">'+jsonObj[i].firstname+" "+jsonObj[i].lastname+'</td><td class="app-td">'+jsonObj[i].name+'</td><td>'+weekday[myDate.getDay()]+','+month[myDate.getMonth()]+' '+myDate.getDate()+","+myDate.getFullYear()+'</td><td>'+appointmenttime[0]+' '+appointmenttime[1]+' '+timezone+'</td><td>';
			  if(block == "disabled") {
			  innerHtml = innerHtml +'<i class="glyphicon glyphicon-edit"></i>Edit details</td><td><i class="glyphicon glyphicon-remove"></i>Cancel</td></tr>';
              } else {
				innerHtml = innerHtml +'<a href="javascript:void(0)"  onclick="editAppointmentDetails(\''+jsonObj[i].confirmation_number+'\')"><i class="glyphicon glyphicon-edit"></i>Edit details</a></td><td><a href="javascript:void(0)" onclick="deleteAppointment(\''+jsonObj[i].confirmation_number+'\')" ><i class="glyphicon glyphicon-remove"></i>Cancel</a></td></tr>';

              }			  
			  
			  
			 // alert(appointmentdate);
			  innerHtml = innerHtml +'<input type="hidden" id="'+jsonObj[i].confirmation_number+'_searchlocation" value="'+jsonObj[i].city+'" />';
			  innerHtml = innerHtml +'<input type="hidden" id="'+jsonObj[i].confirmation_number+'_company_name" value="'+jsonObj[i].company_name+'" />';
			  innerHtml = innerHtml +'<input type="hidden" id="'+jsonObj[i].confirmation_number+'_location_id" value="'+jsonObj[i].location_id+'" />';
			  innerHtml = innerHtml +'<input type="hidden" id="'+jsonObj[i].confirmation_number+'_service_id" value="'+jsonObj[i].service_id+'" />';
			  innerHtml = innerHtml +'<input type="hidden" id="'+jsonObj[i].confirmation_number+'_servicename" value="'+jsonObj[i].name+'" />';
			  innerHtml = innerHtml +'<input type="hidden" id="'+jsonObj[i].confirmation_number+'_hour" value="'+appointmenthourmin[0]+'" />';
			  innerHtml = innerHtml +'<input type="hidden" id="'+jsonObj[i].confirmation_number+'_minutes" value="'+appointmenthourmin[1]+'" />';
			  innerHtml = innerHtml +'<input type="hidden" id="'+jsonObj[i].confirmation_number+'_timestatus" value="'+appointmenttime[1]+'" />';
			  innerHtml = innerHtml +'<input type="hidden" id="'+jsonObj[i].confirmation_number+'_calendarday" value="'+appointmentdate+'" />';
			  innerHtml = innerHtml +'<input type="hidden" id="'+jsonObj[i].confirmation_number+'_calenderdate" value="'+jsonObj[i].appointment_date+'" />';
			  innerHtml = innerHtml +'<input type="hidden" id="'+jsonObj[i].confirmation_number+'_locationname" value="'+jsonObj[i].address2+'" />';
			 innerHtml = innerHtml +'<input type="hidden" id="'+jsonObj[i].confirmation_number+'_confirmationnumber" value="'+jsonObj[i].confirmation_number+'" />';
		 }
		     innerHtml  = innerHtml +'</tbody></table>';
			 $(".reviewsdiv").html(innerHtml);
		} else {
		  $(".reviewsdiv").html("<br><br>You did not book any appointments");
		}
	}
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

var deleteconfirmationid = "";

function deleteAppointmentsOnYesPress() {

var d = new Date();
var addzero = "";
if(d.getMonth() < 10) {
addzero = "0";
}

$.ajax({
                url:'deleteAppointments' ,
				type :'POST',
				data: "confirmationid="+deleteconfirmationid+"&date="+d.getFullYear()+"-"+addzero+eval(d.getMonth() + 1)+"-"+d.getDate(),
                success: function(msg) {
				    if(msg == "success" ) {
					  getAppointmentsOnLoad();
					  alert("Appointment is cancelled");
					}
				},
                failure: function(msg) {
				    if(msg == "fail" ) {
					alert("You can't cancel appointment");
					}
				},
                cache: true
								
            });
$("#canceldialog").dialog('close');

}

function deleteAppointmentsOnNoPress() {
$("#canceldialog").dialog('close');
}

function deleteAppointment(confirmationid) {
deleteconfirmationid = confirmationid;
$("#canceldialog").dialog('option', 'title', 'Cancel Appointment');
$("#canceldialog").css('display','block');
$("#canceldialog").dialog('open');


/*if(confirm("Are you sure. Do you want to remove?")) {
var d = new Date();
var addzero = "";
if(d.getMonth() < 10) {
addzero = "0";
}
//alert(d.getFullYear()+"-"+addzero+eval(d.getMonth() + 1)+"-"+d.getDate());
$.ajax({
                url:'deleteAppointments' ,
				type :'POST',
				data: "confirmationid="+confirmationid+"&date="+d.getFullYear()+"-"+addzero+eval(d.getMonth() + 1)+"-"+d.getDate(),
                success: function(msg) {
				    if(msg == "success" ) {
					  getAppointmentsOnLoad();
					  alert("Appointment is cancelled");
					}
				},
                failure: function(msg) {
				    if(msg == "fail" ) {
					alert("You can't cancel appointment");
					}
				},
                cache: true
								
            });

} */

}

function editAppointment() {
$.ajax({
                url:'removeSessiondetails' ,
				type :'POST',
                success: removeSessiondetails,
                failure: removeSessiondetails,
                dataType: 'text',
                cache: true
								
            });

}

function removeSessiondetails(data) {
	if(data == "success") {
			window.location.href = "<?php echo base_url() ; ?>login/searchdietitian";
	}
}

</script>
<header>
    		<div class="container">
            	<h1 class="logo"><a href="#"> <img alt="Family Food, LLC" src="<?php echo base_url() ?>images/family-food-logo.png" /> </a></h1>
                <nav class="pull-right">
                	<ul class="nav nav-pills">
                    	<li><a href="searchdietitian">New Appointment</a></li>
                        <li><a href="manageappointments">Manage Appointments</a></li>
						<li><a href="userreviews">Reviews</a></li>
                        <?php if (($cuser != "") || ($cservice != "") ) { ?>
                        <li class="dropdown">
							<?php if($cservice == "") { ?>
							<a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        		<?php echo $cuser ; ?> <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                            	<li><a href="editprofile">Edit Profile</a></li>
                                <li><a href="changepassword">Change Password</a></li>
                                <li class="divider"></li>
                                <li><a href="signout">Sign Out</a></li>
						
                            </ul>
							<?php } else {?>
							<a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        		<?php echo $cservice ; ?> <span class="caret"></span>
                            </a>
							<ul class="dropdown-menu">
                                <li><a href="signout">Sign Out</a></li>
							 </ul>
							<?php } ?>
                        </li>
						<?php } else { ?>
						<li><a href="userlogin">Sign in</a></li>
						<li><a href="userlogin">Register</a></li>
						<?php } ?>
                    </ul>
                </nav>
            </div>
        </header>
	<!-- END HEADRT TAG -->
    
    <!-- START MAIN CONTENT -->
    	<div class="container content">
        	 	<h2>Manage Appointments</h2>
				
		<div id = "canceldialog" style="display:none">
		<p>Are you sure Do you want to cancel ? </p>
		<br>
		<center><input type="button" value="Yes" onclick="deleteAppointmentsOnYesPress()" /> &nbsp; &nbsp; <input type="button" value="No" onclick="deleteAppointmentsOnNoPress()" /></center>
		</div>
		<div class="reviewsdiv" style="display:block">
		
		
		
		
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
   	<script>
 

</body>
</html>