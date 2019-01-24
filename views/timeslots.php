<script src="<?php echo base_url() ?>js/jquery-1.10.2.min.js"></script>


<script src="<?php echo base_url() ?>js/bootstrap.min.js"></script>





<link href="<?php echo base_url() ?>css/settings_new.css" rel="stylesheet" />


<link href="<?php echo base_url() ?>css/family_gen.css" rel="stylesheet" />


<link href="<?php echo base_url() ?>css/usmap/jqvmap.css" rel="stylesheet" />


<link href="<?php echo base_url() ?>css/bootstrap.css" rel="stylesheet" />





 <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">


<script src="http://code.jquery.com/jquery-1.9.1.js"></script>


<script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>





<link href="<?php echo base_url() ?>css/bootstrap.css" rel="stylesheet" />


<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">


<link href="<?php echo base_url() ?>css/common.css" rel="stylesheet" />





<link href="<?php echo base_url() ?>css/timeslots.css" rel="stylesheet">


		


<script src="<?php echo base_url() ?>js/usmap/jquery.vmap.js"></script>


<script src="<?php echo base_url() ?>js/usmap/maps/jquery.vmap.usa.js"></script>


<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">


<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>








<script type="text/javascript">

// edited : added global timeslots available list
var currDateSelected = '';
var previousDate = '';
var timeSlotsAvailable_count = 0;
var arr_key_datePlotted = 0;
var last = false;
var solveLoopingNext = 0;
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


	


	var days = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"];


	 var days1 = ["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"];





var unavailableDates = []; // yyyy/MM/dd

var removeDates = [];

var unavailableDays = ["Saturday","Sunday"];


$(document).ready(function() {


var mydate2 = new Date();


$.ajax({


                url:'getSessiondetails' ,


				type :'POST',


                success: displayServicesList,


                failure: displayServicesList,


                dataType: 'json',


                cache: true


								


            });


			


$.ajax({


                url:'getCustomerServiceDetails' ,


				type :'POST',


                success: getCustomerServiceDetails,


                failure: getCustomerServiceDetails,


                dataType: 'json',


                cache: true


								


            });





			//alert(mydate2.getFullYear()+"-"+zeromonthprecession+"-"+zeroprecession);


			//blockTimeSlots(mydate2.getFullYear()+"-"+zeromonthprecession+"-"+zeroprecession);


			



			


});





function getLocationHolidays(data) {


if(typeof data != 'undefined'){




	var checkDate = new Date();
	var once = true;
	var checkMonth = ("0"+(checkDate.getMonth()+1)).slice(-2);
	var checkDay =  checkDate.getDate();
	var checkYear = checkDate.getFullYear();


	var jsonObj = data;
	if (jsonObj.length != 0 ) { 


	  for(i=0;i<jsonObj.length;i++) {


	    if(jsonObj[i].loc_available_from === jsonObj[i].loc_available_to) {
	    	
	    	if( jQuery.inArray( jsonObj[i].loc_available_from, unavailableDates ) == -1 &&
	    	jQuery.inArray( jsonObj[i].loc_available_from, removeDates ) == -1 ){

	    		unavailableDates.push(jsonObj[i].loc_available_from);
	    	}
			var dateBreakdown = jsonObj[i].loc_available_from.split("-");
			//if((getAvailableMonth[1] == testCurrentMonth) && (eval(getAvailableMonth[2]) > eval(currentdate)) && ( eval(getAvailableMonth[0]) == currentYear ) ) {
			var dateCheck = checkYear+"/"+checkMonth+"/"+checkDay;
			// alert( dateCheck +"<"+ ( dateBreakdown[0]+"/"+dateBreakdown[1]+"/"+dateBreakdown[2] ) );
			if( once && Date.parse( dateCheck ) < Date.parse( (dateBreakdown[0]+"/"+dateBreakdown[1]+"/"+dateBreakdown[2]) ) ){

				$("#businesshourfrom").val(jsonObj[i].loc_time_from);

				$("#businesshourto").val(jsonObj[i].loc_time_to);
				once = false;
			}


		 }


	   }

	   

    }


	//alert(unavailableDates[0]);


	var currdate = new Date();


	var currentmonth = currdate.getMonth() +1;


	//$('#datepicker').datepicker();


	var dpicker = jQuery.datepicker;


	


    //$('#datepicker').datepicker({minDate:(1), maxDate:new Date(currdate.getFullYear(),eval(currentmonth+6),eval(currdate.getDate())), beforeShowDay: unavailable,dateFormat: 'mm/dd/yy' }).datepicker('setDate', '04/25/2014');


	if($("#timeslotsdates").val() != "") {
		

	    //alert("sdfsdff..");


		var datePlotted = $("#timeslotsdates").val();


		var datePlotted = datePlotted.split("-");


		//$('#datepicker').datepicker({minDate:(1), maxDate:new Date(currdate.getFullYear(),eval(currentmonth+6),eval(currdate.getDate())), beforeShowDay: unavailable,dateFormat: 'mm/dd/yy' }).datepicker('setDate', datePlotted[1]+"/"+datePlotted[2]+"/"+datePlotted[0]);
		if( unavailableDates.length > 0 ){
			var minDate1 = unavailableDates[0].split("-");
			var maxDate1 = unavailableDates[unavailableDates.length-1].split("-");
			var limitDate = maxDate1[1]+"/"+maxDate1[2]+"/"+maxDate1[0];
			var firstDate = minDate1[1]+"/"+minDate1[2]+"/"+minDate1[0];
			$('#datepicker').datepicker({minDate:firstDate,maxDate:limitDate, beforeShowDay: unavailable,dateFormat: 'mm/dd/yy' }).datepicker('setDate', datePlotted[1]+"/"+datePlotted[2]+"/"+datePlotted[0]);
		}else{
			$(".col-lg-6").append("No Dates Available For reservation");
		}
		//debug
		// $("#dates" ).text( JSON.stringify( unavailableDates ) );
		removeDates.push( currDateSelected );
		$.each( removeDates, function( key, dateRemove ){
			unavailableDates = jQuery.grep(unavailableDates, function(value) {
			  	return value != dateRemove;
			});
		});
		//debug
 		// $("#dates" ).text( JSON.stringify( unavailableDates ) );
		var date1 = unavailableDates[ eval( arr_key_datePlotted ) ];

		var date = date1.split("-");
		var newDate = date[1]+"/"+date[2]+"/"+date[0];
		$( "#datepicker" ).datepicker( "setDate" , newDate );
		var mydate = new Date();
		
		setDatePlotted(date[0]+"-"+date[1]+"-"+date[2],mydate);
		plotingTimeSlots(availableLocationDatesServiceid,date[0]+"-"+date[1]+"-"+date[2]);
	} else {


	if (jsonObj.length != 0 ) { 


	    //alert("COMING..."+unavailableDates[0]);


	    var mydate = new Date();


		 for(j=0;j<jsonObj.length;j++) {


		 


		 var tomorrow = getNextDate();


		 var dateplotted = "";


		 var currentDateMonth = currdate.getMonth();
		 var currentdate =  mydate.getDate();
		 var currentYear = mydate.getFullYear();
		 var currDateToday = currentYear+"-"+currentDateMonth+"-"+currentdate;


		 var today = mydate.getFullYear() + "-" + ("0"+(mydate.getMonth()+1)).slice(-2) + "-" + ("0"+mydate.getDate()).slice(-2);
		 

		 if((unavailableDates[j] != today)  ){ //&& (unavailableDates[j] != tomorrow)){


		     var getAvailableMonth = unavailableDates[j].split("-");


			// alert(tomorrow +"------------"+
			// edited: added && (eval(getAvailableMonth[0]) == currentYear)
		    if( currDateToday < unavailableDates[j] ) {


			    //edited : get j
			    arr_key_datePlotted = j;
			    
				dateplotted = unavailableDates[j];


				break;


			}


			//break;


		 }


			


	     }


		// edited : moved plottingTimeSlots to check first dateplotted if empty if yes move to next month
		if( dateplotted != "" ){
	     // edited : move to function to be called again
			setDatePlotted(dateplotted,mydate);
			plotingTimeSlots(availableLocationDatesServiceid,dateplotted);
		}else{
			var todayDate = new Date();

			var currentDateMonth = currdate.getMonth();
			var currentdate =  mydate.getDate();
			var currentYear = mydate.getFullYear();
			var currDateToday = currentYear+"-"+currentDateMonth+"-"+currentdate;

			if( unavailableDates.length > 0 ){
				for( i=0; i<unavailableDates.length; i++ ){
					
					if( currDateToday < unavailableDates[i] ){
						
						arr_key_datePlotted = i;
			    
						dateplotted = unavailableDates[i];
						
						break;
					}
				}

				setDatePlotted(dateplotted,mydate);
				plotingTimeSlots(availableLocationDatesServiceid,dateplotted);
			}
		}


	 


	} else {


	//$('#datepicker').datepicker({minDate:(1), maxDate:new Date(currdate.getFullYear(),eval(currentmonth+6),eval(currdate.getDate())), beforeShowDay: unavailable });
		if( unavailableDates.length > 0 ){
			var minDate1 = unavailableDates[0].split("-");
			var maxDate1 = unavailableDates[unavailableDates.length-1].split("-");
			var limitDate = maxDate1[1]+"/"+maxDate1[2]+"/"+maxDate1[0];
			var firstDate = minDate1[1]+"/"+minDate1[2]+"/"+minDate1[0];
			$('#datepicker').datepicker({minDate:firstDate,maxDate:limitDate,beforeShowDay: unavailable });
		}else{
			$(".col-lg-6").append("No Dates Available For reservation");
		}


	 // plotingTimeSlots(availableLocationDatesServiceid,"");


	}


					


	}

	datePickerNext();

}



}


function setDatePlotted( dateplotted, mydate ){
		var nextsplit = dateplotted.split("-");

		
		mydate.setFullYear(nextsplit[0],eval(nextsplit[1] -1),nextsplit[2]);


		if(nextsplit.length >1) {


	    $(".setCalendarDate").html(weekday[mydate.getDay()]+','+month[mydate.getMonth()]+' '+mydate.getDate());


		} else {


		 $(".setCalendarDate").html('');


		}


		$("#timeslotsdates").val(dateplotted);


		$("#selectCalendarDate").val(dateplotted);


		var datePlottedFormat = dateplotted;


		datePlottedFormat = datePlottedFormat.split("-");

		//$('#datepicker').datepicker({minDate:(1), maxDate:new Date(currdate.getFullYear(),eval(currentmonth+6),eval(currdate.getDate())), beforeShowDay: unavailable,dateFormat: 'mm/dd/yy' }).datepicker('setDate', datePlottedFormat[1]+"/"+datePlottedFormat[2]+"/"+datePlottedFormat[0]);

		// tagged : selected available date
		if( unavailableDates.length > 0 ){
			var minDate1 = unavailableDates[0].split("-");
			var maxDate1 = unavailableDates[unavailableDates.length-1].split("-");
			var limitDate = maxDate1[1]+"/"+maxDate1[2]+"/"+maxDate1[0];
			var firstDate = minDate1[1]+"/"+minDate1[2]+"/"+minDate1[0];
			$('#datepicker').datepicker({minDate:firstDate,maxDate: limitDate, beforeShowDay: unavailable,dateFormat: 'mm/dd/yy' }).datepicker('setDate', datePlottedFormat[1]+"/"+datePlottedFormat[2]+"/"+datePlottedFormat[0]);
		}else{
			$(".col-lg-6").append("No Dates Available For reservation");
		}
}


function checkForDietitianAvailableOnConferenceBased(data) {
if(typeof data != 'undefined'){
	var jsonObj = data;
	if (jsonObj.length == 0 ) {
	var innerHtml = "Please contact Family Food at <a href='javascript:void(0)' ><?php echo CONTACTSERVICEID ?></a> or <?php echo CONTACTSERVICENUMBER ?>";
		    $(".Morning").html(innerHtml);
			$(".Afternoon").html("");
			$(".Evening").html("");
		datePickerNext();
 	} else {
 		displayTimeSlots(plottimeObject) ;
 	}
}








}


//edited : next and prev function
function datePickerNext(){
	$('.ui-datepicker-next').click( function(){
		// alert(unavailableDates[unavailableDates.length-1]+"=="+unavailableDates[arr_key_datePlotted+1]);
		if( unavailableDates.length > ( arr_key_datePlotted+1 ) ){
			arr_key_datePlotted = ( arr_key_datePlotted+1 );
			// var nextDate = unavailableDates[arr_key_datePlotted];
			// var date = nextDate.split('-');
			// var newDate = date[1]+"/"+date[2]+"/"+date[0];
			
			var date1 = moveNextMonth();
			var date = date1.split("-");
			var newDate = date[1]+"/"+date[2]+"/"+date[0];
			$( "#datepicker" ).datepicker( "setDate" , newDate );
			datePickerNext();
		}
	});
	$('.ui-datepicker-prev').click( function(){
		if( ( arr_key_datePlotted ) > 0 ){
			arr_key_datePlotted = ( arr_key_datePlotted-1 );
			// var nextDate = unavailableDates[arr_key_datePlotted];
			// var date = nextDate.split('-');
			// var newDate = date[1]+"/"+date[2]+"/"+date[0];
			var date1 = movePrevMonth();
			var date = date1.split("-");
			var newDate = date[1]+"/"+date[2]+"/"+date[0];
			$( "#datepicker" ).datepicker( "setDate" , newDate );
			datePickerNext();
		}
	});

}

function moveNextMonth(){
	var prevDate = unavailableDates[eval(arr_key_datePlotted-1)].split("-");
	for( arr_key_datePlotted; arr_key_datePlotted<unavailableDates.length; arr_key_datePlotted++ ){
		var date1 = unavailableDates[arr_key_datePlotted];
		var date = date1.split('-');
		if( date[1] > prevDate[1] ){
			return date1;
			break;
		}
	}
}

function movePrevMonth(){
	if( arr_key_datePlotted > 0 ){
		var prevDate = unavailableDates[eval(arr_key_datePlotted+1)].split("-");
		for( arr_key_datePlotted; eval(arr_key_datePlotted+1) > 0; arr_key_datePlotted-- ){
			var date1 = unavailableDates[arr_key_datePlotted];
			var date = date1.split('-');
			if( date[1] < prevDate[1]){
				return date1;
				break;
			}
		}
	}else{
		var date1 = unavailableDates[arr_key_datePlotted];
		return date1;
	}
}
///////end


function getCustomerServiceDetails(data) {


if(typeof data != 'undefined'){


	var jsonObj = data;


	if (jsonObj.length != 0 ) {


	$("#customerServiceId").val(jsonObj[0].userid);


	$("#customerServiceNumber").val(jsonObj[0].phonenumber);


 }


}


}





var externaldate = ""


function blockTimeSlots(date) {


externaldate = date;


var checkdietianfollowup = "<?php echo $fdietitian ; ?>";


var user = "";


if(checkdietianfollowup != "") {


user = "<?php echo $fuserid ?>";


} else {


user = "<?php echo $cuser ?>";


}





$.ajax({


                url:'blockOnLocationBasedHolidays' ,


				type :'POST',


				data: "locationid="+$("#timeslotslocationid").val()+"&date="+date,


                success: blockOnLocationBasedHolidays,


                failure: blockOnLocationBasedHolidays,


                dataType: 'json',


                cache: true


								


            });


			


			//blockingTimeSlotsBasedOnLocationServiceConfRoomAndDietitian();








if( user != "") {





$.ajax({


                url:'blockAlreadyBookedTimes' ,


				type :'POST',


				data: "user_id="+user+"&appointmentdate="+date,


                success: blockAlreadyBookedTimes,


                failure: blockAlreadyBookedTimes,


                dataType: 'json',


                cache: true


								


            });


			


			$.ajax({


                url:'blockAlreadyBookedTimesWithoutLogin' ,


				type :'POST',


				data: "location_id="+$("#timeslotslocationid").val()+"&appointmentdate="+date,


				//data: "service_id="+$("#timeslotsserviceid").val()+"&appointmentdate="+date,


                success: blockAlreadyBookedTimesWithoutLogin,


                failure: blockAlreadyBookedTimesWithoutLogin,


                dataType: 'json',


                cache: true


								


            });


			


} else {





$.ajax({


                url:'blockAlreadyBookedTimesWithoutLogin' ,


				type :'POST',


				data: "location_id="+$("#timeslotslocationid").val()+"&appointmentdate="+date,


				//data: "service_id="+$("#timeslotsserviceid").val()+"&appointmentdate="+date,


                success: blockAlreadyBookedTimesWithoutLogin,


                failure: blockAlreadyBookedTimesWithoutLogin,


                dataType: 'json',


                cache: true


								


            });








}


}








function blockOnLocationBasedHolidays(data) {


if(typeof data != 'undefined'){


	var jsonObj = data;


	var innerhtml = '';


	if(jsonObj.length == 0) {


	   var innerHtml = "Please contact Family Food at <a href='javascript:void(0)' ><?php echo CONTACTSERVICEID ?></a> or <?php echo CONTACTSERVICENUMBER ?>";


		    $(".Morning").html(innerHtml);


			$(".Afternoon").html("");


			$(".Evening").html("");


	}

	
	$("#businesshourfrom").val(jsonObj[0].loc_time_from);

	$("#businesshourto").val(jsonObj[0].loc_time_to);


}


}





function blockAlreadyBookedTimesWithoutLogin(data) {


if(typeof data != 'undefined'){


	var jsonObj = data;


	var innerhtml = '';


	for (i=0;i < jsonObj.length;i++)


	{


	  var dates  = jsonObj[i].appointment_date.split("-");


	  var times = jsonObj[i].appointment_time.split(" ");


	  var times1 = times[0].split(":");


	  //alert(dates[1]+dates[2]+dates[0]+times[0]+times[1]);


	   //alert($("#"+dates[1]+dates[2]+dates[0]+times1[0]+times1[1]+times[1]).html());


	   if(jsonObj[i].status == "block") {


		   var text = $("#"+dates[1]+dates[2]+dates[0]+times1[0]+times1[1]+times[1]).text();

		   // edited : instead of changing the html of the list remove the list
		   $("#"+dates[1]+dates[2]+dates[0]+times1[0]+times1[1]+times[1]).remove();


		   // $("#"+dates[1]+dates[2]+dates[0]+times1[0]+times1[1]+times[1]).addClass("active");


	       // $("#"+dates[1]+dates[2]+dates[0]+times1[0]+times1[1]+times[1]).html(text);


	  


	  }





	}


	var  activeTimeSlots = [];


$('.col-lg-6.date-time li').each(function(n,v){


    if(($(this).text() != "Morning") && ($(this).text() != "Afternoon") && ($(this).text() != "Evening") && ($(this).text() != "") ) {


        if ($(this).hasClass("active")) {


		} else {


		activeTimeSlots.push($(this).text());


		}


	}





});

// add count of available time slots
timeSlotsAvailable_count = activeTimeSlots.length;
if( timeSlotsAvailable_count < 1 ){

	previousDate = $("#timeslotsdates").val();
	$("#timeslotsdates").val( unavailableDates[arr_key_datePlotted+1 ] );
	// delete unavailableDates[arr_key_datePlotted ];
	var todayDate = new Date();
	todayDate = todayDate.getFullYear() + "-" + ("0"+(todayDate.getMonth()+1)).slice(-2) + "-" + ("0"+todayDate.getDate()).slice(-2);
	
	$.ajax({


                url:'getLocationHolidays' ,


				type :'POST',


				data: "locationid="+availableLocationDatesLocationid+"&today="+todayDate,


                success: getLocationHolidays,


                failure: getLocationHolidays,


                dataType: 'json',


                cache: true


								


            });
}

$.ajax({


                url:'externalBlockingTimeslots' ,


				type :'POST',


				data: "locationid="+$("#timeslotslocationid").val()+"&appointmentdate="+externaldate+"&serviceid="+$("#seviceidcheck").val()+"&activeTimes="+activeTimeSlots,


				//data: "service_id="+$("#timeslotsserviceid").val()+"&appointmentdate="+date,


                success: blockAlreadyBookedTimesWithoutLogin1,


                failure: blockAlreadyBookedTimesWithoutLogin1,


                dataType: 'json',


                cache: true


								


            });


}











}





function blockAlreadyBookedTimesWithoutLogin1(data) {





if(typeof data != 'undefined'){


	var jsonObj = data;


	var innerhtml = '';


	for (i=0;i < jsonObj.length;i++)


	{


	  var dates  = jsonObj[i].appointment_date.split("-");


	  var times = jsonObj[i].appointment_time.split(" ");


	  var times1 = times[0].split(":");


	  //alert(dates[1]+dates[2]+dates[0]+times[0]+times[1]);


	   //alert($("#"+dates[1]+dates[2]+dates[0]+times1[0]+times1[1]+times[1]).html());


	   if(jsonObj[i].status == "block") {


		   var text = $("#"+dates[1]+dates[2]+dates[0]+times1[0]+times1[1]+times[1]).text();

		   // edited : instead of changing the html of the list remove the list
		   $("#"+dates[1]+dates[2]+dates[0]+times1[0]+times1[1]+times[1]).remove();


		   // $("#"+dates[1]+dates[2]+dates[0]+times1[0]+times1[1]+times[1]).addClass("active");


	       // $("#"+dates[1]+dates[2]+dates[0]+times1[0]+times1[1]+times[1]).html(text);


	  


	  }





	}


	}


}





function blockingTimeSlotsBasedOnLocationServiceConfRoomAndDietitian() {





$.ajax({


                url:'checkForDietitianAvailableOnConferenceBased' ,


				type :'POST',


				data: "locationid="+$("#timeslotslocationid").val()+"&date="+$("#timeslotsdates").val()+"&serviceid="+$("#timeslotsserviceid").val(),


                success: checkForDietitianAvailableOnConferenceBased,


                failure: checkForDietitianAvailableOnConferenceBased,


                dataType: 'json',


                cache: true


								


            });

















}





var availableLocationDatesServiceid = "";


var availableLocationDatesLocationid = "";





function blockHolidaysOnDatePicker(locationid,serviceid) {





availableLocationDatesServiceid = serviceid;


availableLocationDatesLocationid = locationid;


//alert(serviceid);



var todayDate = new Date();
todayDate = todayDate.getFullYear() + "-" + ("0"+(todayDate.getMonth()+1)).slice(-2) + "-" + ("0"+todayDate.getDate()).slice(-2);

$.ajax({


                url:'getLocationHolidays' ,


				type :'POST',


				data: "locationid="+locationid+"&today="+todayDate,


                success: getLocationHolidays,


                failure: getLocationHolidays,


                dataType: 'json',


                cache: true


								


            });








}



function getCurrentdate() {





var mydate2 = new Date();


				var zeromonthprecession = "0";


				var zeroprecession = "0";


			


				if(eval(mydate2.getMonth() +1) < 10 ) {


				  zeromonthprecession = zeromonthprecession + eval(mydate2.getMonth() +1) ;


				} else {


				zeromonthprecession = eval(mydate2.getMonth() +1) ;


				}


				


				if(mydate2.getDate() < 10) {


				


				zeroprecession = zeroprecession + mydate2.getDate() ;


				} else {


				zeroprecession = mydate2.getDate() ;


				}


 return  mydate2.getFullYear()+"-"+zeromonthprecession+"-"+zeroprecession;





}





function increseDay(date) {


var dates = date.split("-");


var mydate2 = new Date();


mydate2.setFullYear(dates[0],dates[1],dates[2]);


var zeromonthprecession = "0";


				var zeroprecession = "0";


			


				if(eval(mydate2.getMonth() +1) < 10 ) {


				  zeromonthprecession = zeromonthprecession + eval(mydate2.getMonth()) ;


				} else {


				zeromonthprecession = eval(mydate2.getMonth()) ;


				}


				


				if(mydate2.getDate() < 10) {


				


				zeroprecession = zeroprecession + eval(mydate2.getDate() + 1) ;


				} else {


				zeroprecession = eval(mydate2.getDate() + 1) ;


				}


 return  mydate2.getFullYear()+"-"+zeromonthprecession+"-"+zeroprecession;


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




//not needed anymore
function getLocationDetails(locationid) {





$.ajax({


                url:'getLocationDetails' ,


				data: "location_id="+locationid,


                success: displayLocationDetails,


                failure: displayLocationDetails,


                dataType: 'json',


                cache: true


								


            });	











}





function displayLocationDetails(data) {


if(typeof data != 'undefined'){


var jsonObj = data;


if(jsonObj.length > 0) {


// $("#businesshourfrom").val(jsonObj[0].business_hours_start);


// $("#businesshourto").val(jsonObj[0].business_hours_end);


//alert(jsonObj[0].business_hours_start+"-----------------"+jsonObj[0].business_hours_end);


}


}


}





function displayServicesList(data) {





if(typeof data != 'undefined'){


		var jsonObj = data;


		if (jsonObj.length != 0 ) {


		


				$("#servicename").html(jsonObj.servicename);


				$("#timeslotsserviceid").val(jsonObj.service_id);


				$("#timeslotslocationid").val(jsonObj.location_id);


				// getLocationDetails(jsonObj.location_id);


				//alert(jsonObj.service_id);


				


				


				


				var currentdate = getCurrentdate();


				var nextdate = getNextDate();


				if(jsonObj.service_id != "") {


				$("#seviceidcheck").val(jsonObj.service_id);


				} else {


				$("#seviceidcheck").val("");


				}


				blockHolidaysOnDatePicker($("#timeslotslocationid").val(),$("#seviceidcheck").val());


				if(jsonObj.calenderdate != "") {


				$("#timeslotsdates").val(jsonObj.calenderdate);


				$(".setCalendarDate").html(jsonObj.calendarday);


				$("#selectCalendarDate").val(jsonObj.calenderdate);


				//plotingTimeSlots(jsonObj.service_id,jsonObj.calenderdate)


				} else {


				


				}


				


				$.ajax({


		                url:'getTimeZones' ,


						type :'POST',


						data: "location_id="+jsonObj.location_id,


		                success: displayZones,


		                failure: displayZones,


		                dataType: 'json',


		                cache: true


								


				});


					


		}


}





}





function displayZones(data){


	if(typeof data != 'undefined'){


			var jsonObj = data;


			if (jsonObj.length != 0 ) {





				$("#selectTimeZone").val(jsonObj[0].timezone);


				$(".setTimeZone").html("Time Zone <font color='blue' >"+jsonObj[0].timezone+"</font>");


			}


	}


}





function plotingTimeSlots(serviceid,date) {





$.ajax({


		                url:'getServiceDetailsForTimeSlots' ,


						type :'POST',


						data: "service_id="+serviceid+"&currentdate="+date,


		                success: checkBeforeTimeSlotsPlotting,


		                failure: checkBeforeTimeSlotsPlotting,


		                dataType: 'json',


		                cache: true


								


				});

















}





var checkForAvailable = 0;


var plottimeObject = "";





function checkBeforeTimeSlotsPlotting(data) {


plottimeObject = data;


var jsonObj = data;


if (jsonObj.length != 0 ) {


blockingTimeSlotsBasedOnLocationServiceConfRoomAndDietitian();


} else {


//alert("comsf..");


var innerHtml = "Please contact Family Food at <a href='javascript:void(0)' ><?php echo CONTACTSERVICEID ?></a> or <?php echo CONTACTSERVICENUMBER ?>";


$(".Morning").html(innerHtml);


$(".Afternoon").html('');


$(".Evening").html('');


}





}





function storetime(hour,min,timestatus) {





$.ajax({


		                url:'setTimingsForService' ,


						type :'POST',


						data: "hour="+hour+"&minutes="+min+"&timestatus="+timestatus+"&day="+$(".setCalendarDate").html()+"&selectCalendarDate="+$("#timeslotsdates").val()+"&timezone="+$("#selectTimeZone").val(),


		                success: setTimingsForService,


		                failure: setTimingsForService,


		                dataType: 'text',


		                cache: true


								


				});














}


function setTimingsForService(data) {


	if(data == "success") {

			//edited for redirection
			// window.location.href = "<?php echo base_url() ;?>login/insuranceinfo";
			window.location.href = "<?php echo base_url() ;?>login/insuranceinfo";


	} 


}


function displayTimeSlots(data) {


        $(".Morning").html("");


		 $(".Afternoon").html("");


		 $(".Evening").html("");


		 var bStartHour = "";


		 var bStartMin = "";


		 var bEndHour = "";


		 var bEndMin = "";


		 var businesshourfrom = $("#businesshourfrom").val().split(":");;


		 var businesshourto = $("#businesshourto").val().split(":");;


		// alert(businesshourfrom+"------------------------------"+businesshourto);


		 if ((businesshourfrom.length != 2) && (businesshourto.length != 2) ) { 




		 } else {


		 bStartHour = parseInt(businesshourfrom[0]);


		 bStartMin = parseInt(businesshourfrom[1]);


		 bEndHour = parseInt(businesshourto[0]);


		 bEndMin = parseInt(businesshourto[1]);


		 


       // alert(getNextDate());


		var jsonObj = data;


		var displayhour= parseInt(bStartHour);


		var displaytimein12format = "YES";


		var displaymin = 0;


		var timestart = eval(eval(bStartHour * 60) + parseInt(bStartMin));


		var timeends = eval(eval(eval(bEndHour + 13) * 60) + parseInt(bEndMin));


		var timestatus = "AM";


		var changetonormaltime = "";


		//alert(timestart +"------------"+timeends);


		if (jsonObj.length != 0 ) {


		 min = eval(jsonObj[0].duration);


		 $("#selectedServiceDuration").val(jsonObj[0].duration);


		 displaymin = 0;


		 var morninginnerhtml = '';


		 var afternooninnerhtml = '';


		 var eveninginnerhtml = '';


        if ($("#timeslotsserviceid").val() != "") {


		morninginnerhtml = morninginnerhtml + '<li class="title">Morning</li>';


		afternooninnerhtml = afternooninnerhtml +'<li class="title">Afternoon</li>';


		eveninginnerhtml = eveninginnerhtml +'<li class="title">Evening</li>';


		var checkfirst = 0;


		 for (;;) {


		


		if(checkfirst == 0) {


		var myDate1 = $("#timeslotsdates").val();


		 var myDate1array = myDate1.split("-");


	     $("#dateSelected").val(myDate1array[1]+""+myDate1array[2]+""+myDate1array[0]);
	     // alert( "2.)"+myDate1array[1]+""+myDate1array[2]+""+myDate1array[0] )
	     currDateSelected = myDate1array[0]+"-"+myDate1array[1]+"-"+myDate1array[2]

		


		 var minwithprecedingzeros = "0";


		 if(displaymin < 10) {


		 minwithprecedingzeros = minwithprecedingzeros + ""+displaymin;


		 } else {


		 minwithprecedingzeros = displaymin;


		 }


		 var sNextDate = getNextDate();


		 //alert(sNextDate+"--------------"+myDate1);


		 if (sNextDate == myDate1 ) {


		// alert("commmmm...");


		 var currentdatetime = new Date();


		 var currenttime = eval(eval(currentdatetime.getHours() * 60) + currentdatetime.getMinutes());


		 var plotingtimes = eval(eval(displayhour * 60) + displaymin);

		 
		if (plotingtimes <= currenttime) {


								// morninginnerhtml =  morninginnerhtml + '<li id = "'+$("#dateSelected").val()+parseInt(eval(timestart / 60))+'00'+''+timestatus+'" class="active">'+parseInt(eval(timestart / 60))+':00'+' '+timestatus+'</li>'; 


								} else {


								morninginnerhtml = morninginnerhtml + '<li id = "'+$("#dateSelected").val()+parseInt(eval(timestart / 60))+'00'+''+timestatus+'"><a href="javascript:void(0)"  onclick="storetime(\''+parseInt(eval(timestart / 60))+'\', \'00\', \''+timestatus+'\')">'+parseInt(eval(timestart / 60))+':00'+' '+timestatus+'</a></li>'; 


								}


       


	   } else {

	   		var currentdatetime = new Date();
	   		var currenttime = eval(eval(currentdatetime.getHours() * 60) + currentdatetime.getMinutes());


		 	var plotingtimes = eval(eval(displayhour * 60) + displaymin);

		 	if( plotingtimes <= currentdatetime ){

		 		morninginnerhtml = morninginnerhtml + '<li id = "'+$("#dateSelected").val()+parseInt(eval(timestart / 60))+'00'+''+timestatus+'"><a href="javascript:void(0)"  onclick="storetime(\''+parseInt(eval(timestart / 60))+'\', \'00\', \''+timestatus+'\')">'+parseInt(eval(timestart / 60))+':00'+' '+timestatus+'</a></li>'; 

		 	}


	   


	   }


		checkfirst = 1;


		} else {


		 displaymin = eval(displaymin + min);


		 timestart = eval(timestart +min);
		 

		 displayhour = parseInt(eval(timestart / 60));


		 displaymin = eval(timestart % 60);
		 

		 if (displayhour >= 12 ) {


		 timestatus = "PM";


		 changetonormaltime = eval(displayhour - 12);


		 }


		 


		 


		 var myDate1 = $("#timeslotsdates").val();


		 var myDate1array = myDate1.split("-");


	     $("#dateSelected").val(myDate1array[1]+""+myDate1array[2]+""+myDate1array[0]);


		


		 var minwithprecedingzeros = "0";


		 if(displaymin < 10) {


		 minwithprecedingzeros = minwithprecedingzeros + ""+displaymin;


		 } else {


		 minwithprecedingzeros = displaymin;


		 }


		 var sNextDate = getNextDate();


		 //alert(sNextDate+"--------------"+myDate1);


		 var checktimeforexit = eval(parseInt(eval(displayhour * 60)) + parseInt(minwithprecedingzeros));


		 //alert(checktimeforexit +"---------"+timeends+"-----------"+parseInt($("#selectedServiceDuration").val()));
		 

		 if (eval(timeends - checktimeforexit) < parseInt($("#selectedServiceDuration").val())) {
		 	

		  break;


		  }


		 if (sNextDate == myDate1 ) {


		// alert("commmmm...");


		 var currentdatetime = new Date();


		 var currenttime = eval(eval(currentdatetime.getHours() * 60) + currentdatetime.getMinutes());


		 var plotingtimes = eval(eval(displayhour * 60) + displaymin);


					 if (displayhour <12 ) {


						//morninginnerhtml = morninginnerhtml + '<li id = "'+$("#dateSelected").val()+displayhour+''+ minwithprecedingzeros+''+timestatus+'"><a href="javascript:void(0)"  onclick="storetime(\''+displayhour+'\', \''+minwithprecedingzeros+'\', \''+timestatus+'\')">'+displayhour+':'+ minwithprecedingzeros+' '+timestatus+'</a></li>'; 


						if (plotingtimes <= currenttime) {

						//edited : time slot available is less than 24 hr do not show
						//morninginnerhtml = morninginnerhtml + '<li id = "'+$("#dateSelected").val()+displayhour+''+ minwithprecedingzeros+''+timestatus+'" class="active">'+displayhour+':'+ minwithprecedingzeros+' '+timestatus+'</li>'; 


						} else {

							var currentdatetime = new Date();
					   		var currenttime = eval(eval(currentdatetime.getHours() * 60) + currentdatetime.getMinutes());


						 	var plotingtimes = eval(eval(displayhour * 60) + displaymin);

						 	if( plotingtimes <= currentdatetime ){
								morninginnerhtml = morninginnerhtml + '<li id = "'+$("#dateSelected").val()+displayhour+''+ minwithprecedingzeros+''+timestatus+'"><a href="javascript:void(0)"  onclick="storetime(\''+displayhour+'\', \''+minwithprecedingzeros+'\', \''+timestatus+'\')">'+displayhour+':'+ minwithprecedingzeros+' '+timestatus+'</a></li>'; 
							}


						}


					 }


					 


					 if ((displayhour >= 12 ) && (displayhour < 15) ) {


						//afternooninnerhtml = afternooninnerhtml + '<li id = "'+$("#dateSelected").val()+displayhour+''+ minwithprecedingzeros+''+timestatus+'"><a href="javascript:void(0)"  onclick="storetime(\''+displayhour+'\', \''+minwithprecedingzeros+'\', \''+timestatus+'\')">'+displayhour+':'+ minwithprecedingzeros+' '+timestatus+'</a></li>'; 


						if (changetonormaltime > 0) {


						if (plotingtimes > currenttime) {


afternooninnerhtml = afternooninnerhtml + '<li id = "'+$("#dateSelected").val()+parseInt(changetonormaltime)+''+ minwithprecedingzeros+''+timestatus+'"><a href="javascript:void(0)"  onclick="storetime(\''+parseInt(changetonormaltime)+'\', \''+minwithprecedingzeros+'\', \''+timestatus+'\')">'+parseInt(changetonormaltime)+':'+ minwithprecedingzeros+' '+timestatus+'</a></li>'; 		 


						} else {

//edited : time slot available is less than 24 hr do not show
//afternooninnerhtml = afternooninnerhtml + '<li id = "'+$("#dateSelected").val()+parseInt(changetonormaltime)+''+ minwithprecedingzeros+''+timestatus+'" class="active">'+changetonormaltime+':'+ minwithprecedingzeros+' '+timestatus+'</li>'; 





						}	


					  } else {


					  if (plotingtimes > currenttime) {


afternooninnerhtml = afternooninnerhtml + '<li id = "'+$("#dateSelected").val()+displayhour+''+ minwithprecedingzeros+''+timestatus+'"><a href="javascript:void(0)"  onclick="storetime(\''+displayhour+'\', \''+minwithprecedingzeros+'\', \''+timestatus+'\')">'+displayhour+':'+ minwithprecedingzeros+' '+timestatus+'</a></li>'; 		 


						} else {

//edited : time slot available is less than 24 hr do not show
// afternooninnerhtml = afternooninnerhtml + '<li id = "'+$("#dateSelected").val()+displayhour+''+ minwithprecedingzeros+''+timestatus+'" class="active">'+displayhour+':'+ minwithprecedingzeros+' '+timestatus+'</li>'; 


					  


					  }


					 }


					 }


					 


					 if (displayhour >= 15) {


						//eveninginnerhtml = eveninginnerhtml +'<li id = "'+$("#dateSelected").val()+displayhour+''+ minwithprecedingzeros+''+timestatus+'"><a href="javascript:void(0)"  onclick="storetime(\''+displayhour+'\', \''+minwithprecedingzeros+'\', \''+timestatus+'\')">'+displayhour+':'+ minwithprecedingzeros+' '+timestatus+'</a></li>'; 


if (plotingtimes > currenttime) {


eveninginnerhtml = eveninginnerhtml +'<li id = "'+$("#dateSelected").val()+parseInt(changetonormaltime)+''+ minwithprecedingzeros+''+timestatus+'"><a href="javascript:void(0)"  onclick="storetime(\''+parseInt(changetonormaltime)+'\', \''+minwithprecedingzeros+'\', \''+timestatus+'\')">'+parseInt(changetonormaltime)+':'+ minwithprecedingzeros+' '+timestatus+'</a></li>'; 


} else {

//edited : time slot available is less than 24 hr do not show
// eveninginnerhtml = eveninginnerhtml +'<li id = "'+$("#dateSelected").val()+parseInt(changetonormaltime)+''+ minwithprecedingzeros+''+timestatus+'" class="active">'+parseInt(changetonormaltime)+':'+ minwithprecedingzeros+' '+timestatus+'</li>'; 





}			


					 }


		  


}		  else {


		   if (displayhour <12 ) {


						//morninginnerhtml = morninginnerhtml + '<li id = "'+$("#dateSelected").val()+displayhour+''+ minwithprecedingzeros+''+timestatus+'"><a href="javascript:void(0)"  onclick="storetime(\''+displayhour+'\', \''+minwithprecedingzeros+'\', \''+timestatus+'\')">'+displayhour+':'+ minwithprecedingzeros+' '+timestatus+'</a></li>'; 


						morninginnerhtml = morninginnerhtml + '<li id = "'+$("#dateSelected").val()+displayhour+''+ minwithprecedingzeros+''+timestatus+'"><a href="javascript:void(0)"  onclick="storetime(\''+displayhour+'\', \''+minwithprecedingzeros+'\', \''+timestatus+'\')">'+displayhour+':'+ minwithprecedingzeros+' '+timestatus+'</a></li>'; 


					 }


					 


					 if ((displayhour >= 12 ) && (displayhour < 15) ) {


						//afternooninnerhtml = afternooninnerhtml + '<li id = "'+$("#dateSelected").val()+displayhour+''+ minwithprecedingzeros+''+timestatus+'"><a href="javascript:void(0)"  onclick="storetime(\''+displayhour+'\', \''+minwithprecedingzeros+'\', \''+timestatus+'\')">'+displayhour+':'+ minwithprecedingzeros+' '+timestatus+'</a></li>'; 


						if (changetonormaltime > 0) {


afternooninnerhtml = afternooninnerhtml + '<li id = "'+$("#dateSelected").val()+parseInt(changetonormaltime)+''+ minwithprecedingzeros+''+timestatus+'"><a href="javascript:void(0)"  onclick="storetime(\''+changetonormaltime+'\', \''+minwithprecedingzeros+'\', \''+timestatus+'\')">'+parseInt(changetonormaltime)+':'+ minwithprecedingzeros+' '+timestatus+'</a></li>'; 	


} else {


afternooninnerhtml = afternooninnerhtml + '<li id = "'+$("#dateSelected").val()+displayhour+''+ minwithprecedingzeros+''+timestatus+'"><a href="javascript:void(0)"  onclick="storetime(\''+displayhour+'\', \''+minwithprecedingzeros+'\', \''+timestatus+'\')">'+displayhour+':'+ minwithprecedingzeros+' '+timestatus+'</a></li>'; 	


}	 			


					 }


					 


					 if (displayhour >= 15) {


						//eveninginnerhtml = eveninginnerhtml +'<li id = "'+$("#dateSelected").val()+displayhour+''+ minwithprecedingzeros+''+timestatus+'"><a href="javascript:void(0)"  onclick="storetime(\''+displayhour+'\', \''+minwithprecedingzeros+'\', \''+timestatus+'\')">'+displayhour+':'+ minwithprecedingzeros+' '+timestatus+'</a></li>'; 





eveninginnerhtml = eveninginnerhtml +'<li id = "'+$("#dateSelected").val()+parseInt(changetonormaltime)+''+ minwithprecedingzeros+''+timestatus+'"><a href="javascript:void(0)"  onclick="storetime(\''+parseInt(changetonormaltime)+'\', \''+minwithprecedingzeros+'\', \''+timestatus+'\')">'+parseInt(changetonormaltime)+':'+ minwithprecedingzeros+' '+timestatus+'</a></li>'; 


					}


		  


		  }


		  


		// console.log(displayhour+":"+ displaymin+" "+timestatus+"<br>");


		//break;


         }


		 }


		 }


		 $(".Morning").html(morninginnerhtml);


		 $(".Afternoon").html(afternooninnerhtml);


		 $(".Evening").html(eveninginnerhtml);


		 





		} else {


		   if($("#seviceidcheck").val() != "") {


		   


		  // $("#customerServiceId").val(jsonObj[0].userid);


	      // $("#customerServiceNumber").val(jsonObj[0].phonenumber);


		   var innerHtml = "Please contact Family Food at <a href='javascript:void(0)' ><?php echo CONTACTSERVICEID ?></a> or <?php echo CONTACTSERVICENUMBER ?>";


		    $(".Morning").html(innerHtml);


		   } else {


			$(".Morning").html("Please select service");


		   }


		}


		/*var mydate2 = new Date();


		var zeromonthprecession = "0";


			var zeroprecession = "0";


			


			if(eval(mydate2.getMonth() +1) < 10 ) {


			  zeromonthprecession = zeromonthprecession + eval(mydate2.getMonth() +1) ;


			} else {


			zeromonthprecession = eval(mydate2.getMonth() +1) ;


			}


			


			if(mydate2.getDate() < 10) {


			


			zeroprecession = zeroprecession + mydate2.getDate() ;


			} else {


			zeroprecession = mydate2.getDate() ;


			}*/


			var currentdate = getCurrentdate();


			//alert($("#timeslotsdates").val());


		 blockTimeSlots($("#timeslotsdates").val());


		 }
	if( solveLoopingNext > 0 ){
		datePickerNext();
	}
	
	solveLoopingNext += 1;
	
	}


function blockAlreadyBookedTimes(data) {


if(typeof data != 'undefined'){


	var jsonObj = data;


	var innerhtml = '';


	for (i=0;i < jsonObj.length;i++)


	{


	  var dates  = jsonObj[i].appointment_date.split("-");


	  var times = jsonObj[i].appointment_time.split(" ");


	  var times1 = times[0].split(":");


	  //alert(dates[1]+dates[2]+dates[0]+times[0]+times[1]);


	   //alert($("#"+dates[1]+dates[2]+dates[0]+times1[0]+times1[1]+times[1]).html());


	   var text = $("#"+dates[1]+dates[2]+dates[0]+times1[0]+times1[1]+times[1]).text();

	   // edited : instead of changing the html of the list remove the list
	   $("#"+dates[1]+dates[2]+dates[0]+times1[0]+times1[1]+times[1]).remove();


	   // $("#"+dates[1]+dates[2]+dates[0]+times1[0]+times1[1]+times[1]).addClass("active");


       // $("#"+dates[1]+dates[2]+dates[0]+times1[0]+times1[1]+times[1]).html(text);





	}


}





}











/*function resetids(clickeddate) {


		var displayhour= 9;


		var displaytimein12format = "YES";


		var displaymin = 0;


		var timestart = 540;


		var timeends = 1140;


		var timestatus = "AM";


		 min = eval($("#selectedServiceDuration").val());


		// $("#selectedServiceDuration").val(jsonObj[0].duration);


		 displaymin = 0;


		 var morninginnerhtml = '';


		 var afternooninnerhtml = '';


		 var eveninginnerhtml = '';


        if (($("#timeslotsserviceid").val() != "") && ($("#selectedServiceDuration").val() != "") ) {


		morninginnerhtml = morninginnerhtml + '<li class="title">Morning</li>';


		afternooninnerhtml = afternooninnerhtml +'<li class="title">Afternoon</li>';


		eveninginnerhtml = eveninginnerhtml +'<li class="title">Evening</li>';


		 for (;;) {


		


		 displaymin = eval(displaymin + min);


		 timestart = eval(timestart +min);


		 displayhour = parseInt(eval(timestart / 60));


		 displaymin = eval(timestart % 60);


		 if (displayhour >= 12 ) {


		 timestatus = "PM";


		 }


		 


	      var minwithprecedingzeros = "0";


		 if(displaymin < 10) {


		 minwithprecedingzeros = minwithprecedingzeros + ""+displaymin;


		 } else {


		 minwithprecedingzeros = displaymin;


		 }


		 


		 if (displayhour <12 ) {


			morninginnerhtml = morninginnerhtml + '<li id = "'+$("#dateSelected").val()+displayhour+''+ minwithprecedingzeros+''+timestatus+'"><a href="javascript:void(0)"  onclick="storetime(\''+displayhour+'\', \''+minwithprecedingzeros+'\', \''+timestatus+'\')">'+displayhour+':'+ minwithprecedingzeros+' '+timestatus+'</a></li>'; 


		 }


		 


		 if ((displayhour >= 12 ) && (displayhour < 15) ) {


			afternooninnerhtml = afternooninnerhtml + '<li id = "'+$("#dateSelected").val()+displayhour+''+ minwithprecedingzeros+''+timestatus+'"><a href="javascript:void(0)"  onclick="storetime(\''+displayhour+'\', \''+minwithprecedingzeros+'\', \''+timestatus+'\')">'+displayhour+':'+ minwithprecedingzeros+' '+timestatus+'</a></li>'; 		 


		 }


		 


		 if (displayhour >= 15) {


			eveninginnerhtml = eveninginnerhtml +'<li id = "'+$("#dateSelected").val()+displayhour+''+ minwithprecedingzeros+''+timestatus+'"><a href="javascript:void(0)"  onclick="storetime(\''+displayhour+'\', \''+minwithprecedingzeros+'\', \''+timestatus+'\')">'+displayhour+':'+ minwithprecedingzeros+' '+timestatus+'</a></li>'; 		 


		 }


		  if (displayhour > 18) {


		  break;


		  }


		// console.log(displayhour+":"+ displaymin+" "+timestatus+"<br>");


		//break;


         }


		   $(".Morning").html(morninginnerhtml);


		 $(".Afternoon").html(afternooninnerhtml);


		 $(".Evening").html(eveninginnerhtml);


		  blockTimeSlots(clickeddate);


		 } else {


		 $(".Morning").html("We don't have Dietitians for this service for this date");


		}


		 


 


  





} */








function removeSession() {





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





	





function unavailable(date) {


    ymd = date.getFullYear() + "-" + ("0"+(date.getMonth()+1)).slice(-2) + "-" + ("0"+date.getDate()).slice(-2);


    day = new Date(ymd).getDay();


	//alert(unavailableDates);


    /*if ($.inArray(ymd, unavailableDates) < 0 && $.inArray(days[day], unavailableDays) < 0) {


        return [true, "enabled", "Book Now"];


    } else {


        return [false,"disabled","Booked Out"];


    }*/


	//alert(ymd +"---------------+"+$.inArray(ymd, unavailableDates)+"----------"+unavailableDates);


   // alert(unavailableDates);

   	//edited : added && (ymd != '' && previousDate != ymd ) set date to disabled if it has no time more time slots available
	if ($.inArray(ymd, unavailableDates) >= 0 && ($.inArray(days[day], unavailableDays) < 0 || $.inArray(days1[day], unavailableDays) < 0) && (ymd !== "" && previousDate != ymd )  ) {

		
	    //alert("coming here...");


        return [true, "enabled", "Book Now"];


    } else {


        return [false,"disabled","Booked Out"];


    }


}





</script>


<body class="dashboard site-menubar-unfold" data-auto-menubar="false">


<header>


    		<div class="container">


            	<h1 class="logo"><a href="#"> <img alt="Family Food, LLC" src="<?php echo base_url() ?>images/family-food-logo.png" /> </a></h1>


                <nav class="pull-right">


                	<ul class="nav nav-pills">


                    	<li><a href="searchdietitian">New Appointment</a></li>


						<?php if($fdietitian != "") { ?>


						 <li><a href="viewappointments">View Appointments</a></li>


						<?php } ?>


                        <?php if($fdietitian == "") { ?>


                        <li><a href="manageappointments">Manage Appointments</a></li>


					


						<li><a href="userreviews">Reviews</a></li>


							<?php } ?>


                       <?php if (($cuser != "") || ($cservice != "") || ($fdietitian != "")) { ?>


                        <li class="dropdown">


							<?php if($cservice == "") { ?>


							<a class="dropdown-toggle" data-toggle="dropdown" href="#">


							   <?php if($cuser != "") { ?>


                        		<?php echo $cuser ; ?> <span class="caret"></span>


								<?php } ?>


								<?php if($fdietitian != "") { ?>


								<?php echo $fdietitian ; ?> <span class="caret"></span>


								<?php } ?>


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


        	<h2>Make new appointment</h2>
        	<p id="dates"></p>

             <ol class="breadcrumb">


                    


				 <li ><a href="searchdietitian">Search</a></li>


                 <li> <a href="selectservice">Select Service</a></li>


                  <li class="active">Available Timeslots</li>


                  <li><a href="javascript:void(0)" disabled style="background-color:silver" >Insurance Information</a></li>


                  <li><a href="javascript:void(0)" disabled style="background-color:silver" >Appointment Confirmation</a></li>


                  <li><a href="javascript:void(0)" disabled style="background-color:silver"  >Appointment Summary</a></li>


              </ol>


			   <h3>Available Timeslots</h3>


              <div class="alert alert-warning">


              	<span id="servicename" class="pull-left"></span>


				<input type="hidden" value="" id="timeslotsserviceid" />


				<input type="hidden" value="" id="timeslotslocationid" />


                <a href="javascript:void(0)" class="btn btn-sm btn-warning pull-right" onclick ="removeSession()" >Change</a>


              </div>


              <div class="col-lg-6 ">


              		<div id="datepicker"></div>


              </div>


			  <input type="hidden" id="dateSelected" value ="" />


			  <input type="hidden" id="selectedServiceDuration" value="" />


			  <input type="hidden" id="customerServiceId" value="" />


			  <input type="hidden" id="customerServiceNumber" value="" />


			  <input type="hidden" id="businesshourfrom" value="" />


			  <input type="hidden" id="businesshourto" value="" />


			  


              <div class="col-lg-6 date-time">


              		<h3 class="setCalendarDate"></h3><input type="hidden" id="selectCalendarDate" value="" />


					<h3 class="setTimeZone"></h3><input type="hidden" id="selectTimeZone" value="" />


					<input type="hidden" id="timeslotsdates" value="" />


					<input type="hidden" id="seviceidcheck" value="" />


                    <ul class = "Morning" > 


                    </ul>


                    <ul class = "Afternoon"> 


                    	


                    </ul>


                    <ul class = "Evening"> 


                    	


                       


                    </ul>


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


	


  $(function() {


  


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


   // $( "#datepicker" ).datepicker();


   


	var myDate=new Date();


	


	


	var myDate1=new Date();	


	//$(".setCalendarDate").html(weekday[myDate.getDay()]+','+month[myDate.getMonth()]+' '+eval(myDate.getDate() +1));


	//$("#selectCalendarDate").val(myDate.getFullYear()+"-"+eval(myDate.getMonth()+1)+"-"+eval(myDate.getDate() + 1));


	//$("#timeslotsdates").val(getNextDate());


	var currdate = new Date();


	var currentmonth = currdate.getMonth() +1;


	











    //$('#datepicker').datepicker({minDate:(1), maxDate:new Date(currdate.getFullYear(),eval(currentmonth+6),eval(currdate.getDate())), beforeShowDay: unavailable });


	


	


	


	


	//$("#datepicker").datepicker({minDate:(1), maxDate:new Date(currdate.getFullYear(),eval(currentmonth+6),eval(currdate.getDate())), beforeShowDay: $.datepicker.noWeekends });


	//alert(jQuery.datepicker.noWeekends(currdate));


	


	var zeroprecession = "0";


	var zeromonthprecession = "0";


	if (eval(myDate1.getMonth() +1) < 10) {


	zeromonthprecession = zeromonthprecession + eval(myDate1.getMonth() +1); 


	} else {


	zeromonthprecession = eval(myDate1.getMonth() +1); 


	}


	if(myDate1.getDate() < 10) {


	zeroprecession = zeroprecession + myDate1.getDate() ;


	} else {


	zeroprecession = myDate1.getDate() ;


	}


	$("#dateSelected").val(zeromonthprecession+""+zeroprecession+""+myDate1.getFullYear());
	// alert( "1.)"+zeromonthprecession+""+zeroprecession+""+myDate1.getFullYear() );

	$("#datepicker").change(function() {


	var dates = $(this).val().split("/");

    var myDate=new Date();

    var monthvalue = dates[0];

	dates[0] = eval(dates[0] -1);


	


   //alert(dates[2]+'---'+dates[0]+'---'+dates[1]);


	myDate.setFullYear(dates[2],dates[0],dates[1]);


	$("#dateSelected").val(""+monthvalue+""+dates[1]+""+dates[2]);
	currDateSelected = dates[2]+"-"+monthvalue+"-"+dates[1];

	if(jQuery.datepicker.noWeekends(myDate)) {


	     plotingTimeSlots($("#timeslotsserviceid").val(),dates[2]+"-"+monthvalue+"-"+dates[1])


	}


	//resetids(dates[2]+"-"+monthvalue+"-"+dates[1]);	


	$(".setCalendarDate").html(weekday[myDate.getDay()]+','+month[myDate.getMonth()]+' '+myDate.getDate());


	//$("#selectCalendarDate").val(weekday[myDate.getDay()]+','+month[myDate.getMonth()]+' '+myDate.getDate()+","+myDat.getFullYear());


	$("#selectCalendarDate").val(myDate.getFullYear()+"-"+eval(myDate.getMonth() +1)+"-"+myDate.getDate());


	$("#timeslotsdates").val(dates[2]+"-"+monthvalue+"-"+dates[1]);


		


	//resetids();	


   //	blockTimeSlots(dates[2]+"-"+eval(dates[0] + 1)+"-"+dates[1]);


			


	//$(this).find('.ui-state-highlight.ui-state-hover').removeClass('ui-state-highlight ui-state-hover')      


	


	


	});


	//


		


  });


  </script>





</body>


</html>


