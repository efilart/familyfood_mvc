<script src="<?php echo base_url() ?>js/jquery-1.10.2.min.js"></script>
<script src="<?php echo base_url() ?>js/bootstrap.min.js"></script>
<link href="<?php echo base_url() ?>css/settings_new.css" rel="stylesheet">
<link href="<?php echo base_url() ?>css/family_gen.css" rel="stylesheet">


<link rel="stylesheet" href="http://code.jquery.com/ui/1.8.18/themes/base/jquery-ui.css" type="text/css" media="all" />

<!-- First get JQuery -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<!-- Then get JQuery UI -->
<script src="http://code.jquery.com/ui/1.8.18/jquery-ui.min.js"></script>
<script>
$(document).ready(function() {
$("#canceldialog").dialog({bgiframe: true,autoOpen: false,height: 150,width: 350,modal: true,resizable: true});
getCustomerListOnLoad();
});


function getCustomerListOnLoad(){
$.ajax({
                url:'getCustomerList' ,
				type :'POST',				
                success: displayCustomers,
                failure: displayCustomers,
                dataType: 'json',
                cache: true								
            });
			}
function displayCustomers(data){
 if(typeof data != 'undefined'){
    var jsonObj = data;
	if (jsonObj.length != 0 ) {
	var innerHtml = '<table class="table1" summary="This Table About customers">';           		
  	innerHtml = innerHtml+'<th>Name</th><th>&nbsp;</th><th>Phone Number</th>';
	for (i=0;i < jsonObj.length;i++)
	{
	innerHtml=innerHtml+'<tr class="tr1"><td class="td1" scope="row"><a href="javascript:void(0)" onclick="displayCustomerDetails(\''+jsonObj[i].userid+'\')">'+jsonObj[i].firstname+' <span class="td2">'+jsonObj[i].lastname+'</span></a></td><td>&nbsp</td><td class="td2">'+jsonObj[i].phonenumber+'</td></tr><tr class="tr2"><td>'+jsonObj[i].userid+'</td></tr><tr><td>&nbsp;</td></tr>';	
	}    
	innerHtml =innerHtml + '</table>';
	$(".customerslist").html(innerHtml);
   
   }else {
   
   $(".customerslist").html(" No customers are found.");
   }
   }
   }
  
	function displayCustomerDetails(id){
	var uid =id;
	$.ajax({
                url:'displayCustomerDetails' ,
				type :'POST',	
				data : "userId="+uid,
                success: displayalldetails,
                failure: displayalldetails,
                dataType: 'json',
                cache: true								
            });
			}
	function displayalldetails(data){
	if(typeof data != 'undefined'){
	var jsonObj= data;
	if (jsonObj.length != 0 ) {
	
	for (i=0;i < jsonObj.length;i++)
	{
	    
		var innerHtml = '<table class="table2" summary="This Table About customer details">';		
		for(j=0;j < jsonObj[i].userdetails.length;j++)
				{	

				innerHtml = innerHtml+'<tr><th class="title-th" scope="col">'+jsonObj[i].userdetails[j].firstname+'&nbsp&nbsp'+jsonObj[i].userdetails[j].lastname+'</th></tr><tbody>';
				innerHtml=innerHtml+'<tr><td scope="row">Phone</td><td scope="row">'+jsonObj[i].userdetails[j].phonenumber+'</td></tr><tr><td  scope="row">Email</td><td scope="row"><a href="javascript:void(0)" >'+jsonObj[i].userdetails[j].userid+'</a></td></tr><tr><td scope="row">Address</td><td  scope="row">'+jsonObj[i].userdetails[j].address+'</td></tr>';			

				} 
		//alert(innerHtml);	
		var innerHtml1 = "";
		var hiddenInnerHtml = "";
		if(jsonObj[i].appointmentdetails.length > 0) {
		
		innerHtml1 = innerHtml1 + '<b><div id="appointmentsDivision" class="appointmentsDivision" style=""><div class="appointmentsTitle">Recent appointments</div></div></b><table class="table" summary="This Table About customer appointments"><thead>';
		innerHtml1 = innerHtml1 + '<tr><th class="title-th1" scope="col">Dietitian</th><th class="title-th1" scope="col">Appointment Date</th><th class="title-th1" scope="col">ServiceName</th><th class="title-th1" scope="col">Location</th class="title-th1" scope="col"><th>&nbsp;</th><th>&nbsp;</th></tr></thead><tbody>';
			
			for(k=0;k < jsonObj[i].appointmentdetails.length;k++){
				innerHtml1=innerHtml1+'<tr><td class="title" scope="row">'+jsonObj[i].appointmentdetails[k].first_name+' '+jsonObj[i].appointmentdetails[k].last_name+'</td><td class="title" scope="row">'+jsonObj[i].appointmentdetails[k].appointment_date+' '+jsonObj[i].appointmentdetails[k].appointment_time+'</td><td class="title" scope="row">'+jsonObj[i].appointmentdetails[k].name+'</td><td class="title" scope="row">'+jsonObj[i].appointmentdetails[k].address2+'</td><td class="title" scope="row"><a href="javascript:void(0);" onclick="editAppointmentDetails(\''+jsonObj[i].appointmentdetails[k].confirmation_number+'\', \''+jsonObj[i].appointmentdetails[k].userid+'\')">Edit Appointments</a></td><td class="title" scope="row"><a href="javascript:void(0);" onclick="showCancelDialog(\''+jsonObj[i].appointmentdetails[k].confirmation_number+'\', \''+jsonObj[i].appointmentdetails[k].userid+'\')">Cancel Appointment</a></td></tr>';
				
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
	$(".UserDetails").html(innerHtml);
	$(".UserDetails").html(hiddenInnerHtml);
    innerHtml1 =innerHtml1 + '</tbody></table>';
	$(".AppointmentDetails").html(innerHtml1);
      }
	  else {
   
   $(".UserDetails").html(" No Details are found.");
   $(".AppointmentDetails").html(" No Details are found.");
   }
   }
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

function filterCustomersBasedOnSearchValue(id) {

if($("#"+id).val() != "") {
					$.ajax({
					                url:'getCustomerListByName' ,
									type :'POST',
									data : "searchValue="+$("#"+id).val(),
					                success: displayCustomers,
					                failure: displayCustomers,
					                dataType: 'json',
					                cache: true								
					            });
} else {
	
alert("Please fill customer name");
}
			
			}
			
function resetFilter() {
$("#searchFilter").val('');
$(".UserDetails").html('');
$(".AppointmentDetails").html('');
getCustomerListOnLoad();
}

var deleteconfirmationid = "";
var useridOnCancel = "";
function showCancelDialog( confirmation_number, userid ){
	deleteconfirmationid = confirmation_number;
	useridOnCancel = userid;
	$("#canceldialog").dialog('option', 'title', 'Cancel Appointment');
	$("#canceldialog").css('display','block');
	$("#canceldialog").dialog('open');
}

function deleteAppointmentsOnNoPress() {
	$("#canceldialog").dialog('close');
}

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
					  displayCustomerDetails( useridOnCancel );
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
                url:'setSessionForEditAppointment' ,
				type :'POST',
				data: "serachlocation="+serachlocation+"&company_name="+company_name+"&location_id="+location_id+"&service_id="+service_id+"&servicename="+servicename+"&hour="+hour+"&minutes="+minutes+"&timestatus="+timestatus+"&calenderdate="+calenderdate+"&locationname="+locationname+"&appointConfNum="+appointmentConfNumber+"&calendarday="+calendarday+"&customerID="+customerID,
                success: function(msg){
					if(msg == "success") {
					  window.location.href="<?php echo base_url() ;?>login/searchdietitian";
					}
				},
                failure: function(msg){ },
                cache: true
								
            });







}
</script>

<header>
<div class="container">
                
            	<h1 class="logo"><a href="#"> <img alt="Family Food, LLC" src="<?php echo base_url() ?>images/family-food-logo.png" /> </a></h1>
                <nav class="pull-right">
                	<ul class="nav nav-pills">
                    	<li><a href="company">Company</a></li>
                        <li><a href="service">Service</a></li>
                        <li><a href="dietitian">Dietitian</a></li>
						<li><a href="reviews">Reviews</a></li>
						<li><a href="Appointments">Appointments</a></li>
						<li><a href="calendar">Calendar</a></li>
						<li><a href="inbox">Inbox</a></li>
						<li><a href="customers">Customers</a></li>
                        <li class="dropdown">
                        	<a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        		<?php echo $userid ?>  <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
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
       	<!-- CANCEL DIALOG START -->
       	<div id = "canceldialog" style="display:none">
		<p>Are you sure Do you want to cancel ? </p>
		<br>
		<center><input type="button" value="Yes" onclick="deleteAppointmentsOnYesPress()" /> &nbsp; &nbsp; <input type="button" value="No" onclick="deleteAppointmentsOnNoPress()" /></center>
		</div>
       	<!-- CANCEL DIALOG END -->
		<div class="col-lg-4">
		    <h2>Customers</h2>
			<br>
			<td width="31%" colspan="10" align="right" class="filter" style="border-right: solid 20px #2A64A7;">
                                
                               <!-- <input id="filterBoxOne" value="" maxlength="20" size="20" type="text" /> -->
								<input id="searchFilter" type="text" style="width:100px;margin-left:3px;">
								<input id="btnSearchFilter" onclick="filterCustomersBasedOnSearchValue('searchFilter')"  type="button" style="margin-left:7px;" value="Search">
								<input id="btnResetFilter" onclick="resetFilter()" type="button" style="margin-left:7px;" value="Reset">
                            </td>
							<br>
							<br>
			<div class="customerslist" style="display:block;">
			
			</div>
			
			
		</div>
		
		<div class="col-lg-6 reg" >
		<div class="detailssummary" >
		<div class ="UserDetails" style="display:block;">									
		 
		</div>	
			   
        <div class="AppointmentDetails" style="display:block">
		
		</div>
		</div>
		
    </div>
	
	</div>
    <!-- END MAIN CONTENT -->



    
    <!-- START FOOTER TAG  --> 
    <footer>
		<div class="container">
        	<p>?2013 Family Food, LLC. All Rights Reserved.</p>
        </div>    
    </footer>	
    <!-- END FOOTER TAG -->
    
	 <!-- Bootstrap core JavaScript
    ================================================== -->
    <!--<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>-->
   	<script>
 

</body>
</html>