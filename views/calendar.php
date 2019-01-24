<html>
<head>
	<script src="<?php echo base_url() ?>js/jquery-1.10.2.min.js"></script>
	<script src="<?php echo base_url() ?>js/bootstrap.min.js"></script>
	<link href="<?php echo base_url() ?>css/settings_new.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>css/family_gen.css" rel="stylesheet">
	<link rel="stylesheet" href="http://code.jquery.com/ui/1.8.18/themes/base/jquery-ui.css" type="text/css" media="all" />
	<script src="http://code.jquery.com/ui/1.8.18/jquery-ui.min.js"></script>
	<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js'></script>
	<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/jquery-ui.min.js'></script>
	<script type='text/javascript' src='<?php echo base_url(); ?>js/jquery.weekcalendar.js'></script>
	<script type='text/javascript' src='<?php echo base_url(); ?>js/settings.js'></script>

</head>
<style>
.wc-header tbody tr td:hover{
cursor:pointer;
background-color: #FC980D;
border-radius:5px;
}
.wc-today{
background-color: #FC980D;
border-radius:5px;
}
.activedate{
background-color: #FC980D;
border-radius:5px;
}
.calendarbreak {
    background-color: #3D89CD;
    clear: both;
    height: 4px;
    overflow: hidden;
}
.wc-grid-timeslot-header div{
	padding:5px;
	background-color: #F0F7FC;
}
div.wc-hour-header{
	border-bottom:1px dotted #000000;	
}
div.wc-time-header-cell-empty{
	background-color:#A6D3FD;
	height:30px;
	width:79px;
	text-overflow:ellipsis;
	display: inline-block;
    overflow: hidden;
    white-space: nowrap;
	padding:5px;
}

div.wc-time-header-cell-empty1{
	background-color:#A6D3FD;
	height:30px;
	width:600px;
	display: inline-block;
    overflow: hidden;
    white-space: nowrap;
	padding:5px;
}
div.time_data{
	height:40px;
	padding:5px;
    background-color: #D6E8E3;

}


div.appointment_show{
	/*height:auto;*/
	font-size: 12px;
	/*padding:0px;*/
	background-color: #3DA9CD;
}
</style>
<script>
var calender={
	display:function(data,name_company){
		//console.log(data);
		        $('.wc-time-slots tbody tr td.wc-grid-timeslot-header').html('<div class="wc-time-header-cell-empty"></div><div class="wc-hour-header wc-business-hours"><div class="wc-time-header-cell" style="height: 29px; padding: 5px;">7:00 AM</div></div><div class="wc-hour-header wc-business-hours"><div class="wc-time-header-cell" style="height: 29px; padding: 5px;">8:00 AM</div></div><div class="wc-hour-header wc-business-hours"><div class="wc-time-header-cell" style="height: 29px; padding: 5px;">9:00 AM</div></div><div class="wc-hour-header wc-business-hours"><div class="wc-time-header-cell" style="height: 29px; padding: 5px;">10:00 AM</div></div><div class="wc-hour-header wc-business-hours"><div class="wc-time-header-cell" style="height: 29px; padding: 5px;">11:00 AM</div></div><div class="wc-hour-header wc-business-hours"><div class="wc-time-header-cell" style="height: 29px; padding: 5px;">12:00 PM</div></div><div class="wc-hour-header wc-business-hours"><div class="wc-time-header-cell" style="height: 29px; padding: 5px;">1:00 PM</div></div><div class="wc-hour-header wc-business-hours"><div class="wc-time-header-cell" style="height: 29px; padding: 5px;">2:00 PM</div></div><div class="wc-hour-header wc-business-hours"><div class="wc-time-header-cell" style="height: 29px; padding: 5px;">3:00 PM</div></div><div class="wc-hour-header wc-business-hours"><div class="wc-time-header-cell" style="height: 29px; padding: 5px;">4:00 PM</div></div><div class="wc-hour-header wc-business-hours"><div class="wc-time-header-cell" style="height: 29px; padding: 5px;">5:00 PM</div></div><div class="wc-hour-header wc-business-hours"><div class="wc-time-header-cell" style="height: 29px; padding: 5px;">6:00 PM</div></div><div class="wc-hour-header wc-business-hours"><div class="wc-time-header-cell" style="height: 29px; padding: 5px;">7:00 PM</div></div><div class="wc-hour-header wc-business-hours"><div class="wc-time-header-cell" style="height: 29px; padding: 5px;">8:00 PM</div></div><div class="wc-hour-header wc-business-hours"><div class="wc-time-header-cell" style="height: 29px; padding: 5px;">9:00 PM</div></div>');
				$('.wc-time-slots tbody tr td.wc-grid-timeslot-header1').remove();
				var col=1;
				var id_col=0;
				$.each(data,function(k,v){
					//console.log(id_col,k);
					//console.log("----------"+k);
					if(parseInt(id_col)!==parseInt(k)){
					var div_tags=$('<div id="row7am_col'+col+'" class="time_data">&nbsp;</div>\
									<div id="row8am_col'+col+'" class="time_data">&nbsp;</div>\
									<div id="row9am_col'+col+'" class="time_data">&nbsp;</div>\
									<div id="row10am_col'+col+'" class="time_data">&nbsp;</div>\
									<div id="row11am_col'+col+'" class="time_data">&nbsp;</div>\
									<div id="row12pm_col'+col+'" class="time_data">&nbsp;</div>\
									<div id="row1pm_col'+col+'" class="time_data">&nbsp;</div>\
									<div id="row2pm_col'+col+'" class="time_data">&nbsp;</div>\
									<div id="row3pm_col'+col+'" class="time_data">&nbsp;</div>\
									<div id="row4pm_col'+col+'" class="time_data">&nbsp;</div>\
									<div id="row5pm_col'+col+'" class="time_data">&nbsp;</div>\
									<div id="row6pm_col'+col+'" class="time_data">&nbsp;</div>\
									<div id="row7pm_col'+col+'" class="time_data">&nbsp;</div>\
									<div id="row8pm_col'+col+'" class="time_data">&nbsp;</div>\
									<div id="row9pm_col'+col+'" class="time_data">&nbsp;</div>\
									');
									id_col=k;
					}else{
						id_col=k;
					}
					$.each(v,function(key,value){
						if((value.address2!=='')&&(value.address2!=='undefined')){
							if(parseInt(key)==0){
							//console.log(k+"---dfdfd");
							$('.wc-time-slots tbody tr').append("<td id='newcol"+col+"' class='wc-grid-timeslot-header1'><div title='"+value.address2+"' class='wc-time-header-cell-empty1'>"+name_company+":"+value.address2+"</div></td>");
							}
							if(parseInt(key)==0){
							$('td#newcol'+col).append(div_tags);
							}
							if(parseInt(value.appointment_time)){
							
							var appttimings = value.appointment_time.split(" ");
						    if (appttimings.length == 2) {
							    if (appttimings[1] == "AM") {
								$('div#row'+parseInt(value.appointment_time)+'am_col'+col).append("Name:&nbsp;"+value.firstname+"&nbsp;"+value.lastname+", Service:"+value.service_name+",&nbsp; Time:&nbsp;"+value.appointment_time+"&nbsp;,&nbsp;Conference:&nbsp;"+value.conf_room +"<br>&nbsp;");
								$('div#row'+parseInt(value.appointment_time)+'am_col'+col).addClass("appointment_show");
								}
								if (appttimings[1] == "PM") {
								$('div#row'+parseInt(value.appointment_time)+'pm_col'+col).append("Name:&nbsp;"+value.firstname+"&nbsp;"+value.lastname+", Service:"+value.service_name+",&nbsp; Time:&nbsp;"+value.appointment_time+"&nbsp;,&nbsp;Conference:&nbsp;"+value.conf_room +"<br>&nbsp;");
								$('div#row'+parseInt(value.appointment_time)+'pm_col'+col).addClass("appointment_show");
								
								}
							}
							}
							if(parseInt(key)==0){
							$('td#newcol'+col).append(div_tags);
							}
						}
					});
					col++;
				});
	},
	Ajax_request:function(){
		
		var company_name=$('#company').val();
		var name_company=$('#company').find('option[value='+company_name+']').attr('rel');
		if($('.wc-header tbody tr td').hasClass('activedate')){
			//console.log($('.wc-header tbody tr td.activedate').find('span').html());
			var company_date=$('.wc-header tbody tr td.activedate').find('span').html();
		}
		var locationid = $("#locationid").val();
		var confroom = $("#confroom").val();
		$.ajax({
				url:'getlocationbycompany',
				type:'get',
				data:{'company':company_name,'com_date':company_date,'locationid':locationid,'confroom':confroom},
				success:function(res){
					//console.log(res);
					var res=$.parseJSON(res);
					calender.display(res,name_company);
				}
			});
	}
};

/*Initialising*/
var site_url='<?php echo base_url(); ?>';
var default_company='<?php echo addslashes($company_data);?>';
var default_company_name='<?php echo $company_name;?>';
default_company=$.parseJSON(default_company);

/*Calendar adding/removing class*/
$('.wc-header tbody tr td').live('click',function(){

	$('.wc-header tbody tr td').removeClass('wc-today');
	$('.wc-header tbody tr td').removeClass('activedate');
	$(this).addClass('activedate');
	displayCalendar();
	//calender.Ajax_request();
});

/*Company's drop down initialising*/
$(document).ready(function(){
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

	var company_drop='<?php echo addslashes($company_names);?>';
	var company_allLocations = '<?php echo addslashes($company_alllocations) ;?>';
	var company_locationsconfrooms = '<?php echo addslashes($company_locationconfrooms) ;?>';
	company_drop=$.parseJSON(company_drop);
	company_allLocations = $.parseJSON(company_allLocations);
	company_locationsconfrooms = $.parseJSON(company_locationsconfrooms);
	var select_d=$('<select class="form-control" id="company" style="margin-left:75px;margin-top:11px;width:15%;"></select>');
	$.each(company_drop,function(k,v){
		$('<option value="'+v.company_id+'"  rel="'+v.company_name+'">'+v.company_name+'</option>').appendTo(select_d);
	});
	
	$('.company_names').append(select_d);
	var location_d = $(' &nbsp; &nbsp; <select class="form-control" id="locationid" onchange="changeConferences()" style="margin-left:300px;margin-top:-35px;width:15%;"></select>');
	$.each(company_allLocations,function(k,v){
		$('<option value="'+v.location_id+'"  rel="'+v.city+'">'+v.address2+'</option>').appendTo(location_d);
	});
	$('.company_names').append(location_d);
	var confroom_d = $(' &nbsp; &nbsp; <select class="form-control" id="confroom" style="margin-left:520px;margin-top:-35px;width:15%;"></select>');
	$.each(company_locationsconfrooms,function(k,v){
		$('<option value="'+v.conference_id+'"  rel="'+v.conf_room+'">'+v.conf_room+'</option>').appendTo(confroom_d);
	});
	$('.company_names').append(confroom_d);
	
	$('.company_names').append('<input type="button" class="btn btn-primary" onclick="displayCalendar()" name="submit" value="submit" style="margin-left:920px;margin-top:-55px;width:5%;"/> <br>');
	
	$('.company_names').append('<div class="calendarbreak" style="width:100%;"></div>');

	$('#calSelect').datepicker({buttonImage: 'http://familyfoodllc.com/service/images/dpicker.png',dateFormat: 'yy/mm/dd', beforeShowDay: $.datepicker.noWeekends,showOn: 'both' });
	$('#ui-datepicker-div').removeClass('ui-helper-hidden-accessible');

	$("#calSelect").change(function() {
		var newVal = $(this).val();
		var date = new Date(newVal);

		var monthString = month[ date.getMonth() ];
		var day = date.getDate() < 10 ? '0' + date.getDate() : '' + date.getDate();
		var year = date.getFullYear();
		var newDate = monthString+' '+day+", "+year;

		$('.wc-header tbody tr td');
		$('.wc-header td.activedate').removeClass('activedate');
		$('.wc-header td.wc-today').removeClass('wc-today');
		$('.wc-header tbody tr td').each(function(){
			var col = $(this).find('span');
			if( col.length > 0 ){
				if( col.eq(0).text() == newDate ){
					$(this).addClass('activedate');
				}
			}
		});
		displayCalendar();
	});
});


/* Dropdown change function*/
$('#company').live('change',function(){
	var company_name=$(this).val();
	var name_company=$(this).find('option[value='+company_name+']').attr('rel');
	if($('.wc-header tbody tr td').hasClass('activedate')){
		//console.log($('.wc-header tbody tr td.activedate').find('span').html());
		var company_date=$('.wc-header tbody tr td.activedate').find('span').html();
	}
	
	$.ajax({
			url:'getLocationsForCorporateClient',
			type:'get',
			 dataType: 'json',
			data:{'company_id':company_name},
			success:setLocations,
			fail:setLocations
		});
});

function setLocations(data) {
if(typeof data != 'undefined'){
	var jsonObj= data;
	if (jsonObj.length != 0 ) {
	var innerHtml = '';
	for (i=0;i < jsonObj.length;i++) {
	   if(i == 0) {
	   $.ajax({
			url:'getAllConferenceNames',
			type:'get',
			 dataType: 'json',
			data:{'location_id':jsonObj[i].location_id},
			success:setConfrences,
			fail:setConfrences
		});
	   }
       innerHtml = innerHtml + '<option value="'+jsonObj[i].location_id+'"  rel="'+jsonObj[i].address2+'">'+jsonObj[i].address2+'</option>';
	}
	$("#locationid").html(innerHtml);
	
	
  }
}
}

function changeConferences() {
 $.ajax({
			url:'getAllConferenceNames',
			type:'get',
			 dataType: 'json',
			data:{'location_id':$("#locationid").val()},
			success:setConfrences,
			fail:setConfrences
		});
}


function setConfrences(data) {
if(typeof data != 'undefined'){
	var jsonObj= data;
	if (jsonObj.length != 0 ) {
	var innerHtml = '';
	for (i=0;i < jsonObj.length;i++) {

		innerHtml = innerHtml + '<option value="'+jsonObj[i].conference_id+'"  rel="'+jsonObj[i].conf_room+'">'+jsonObj[i].conf_room+'</option>';
	}
	$("#confroom").html(innerHtml);
  }
  displayCalendar();
}
}

function displayCalendar() {
var company_date=$('.wc-header tbody tr td.activedate').find('span').html();	
var company_id = $("#company").val();
var company_name = $('#company option[value='+company_id+']').html();
var locationid = $("#locationid").val();
var confroom = $("#confroom").val();

$.ajax({
			url:'getlocationbycompany',
			type:'get',
			data:{'company':company_id,'com_date':company_date,'locationid':locationid,'confroom':confroom},
			success:function(res){
				//console.log(res);
				//console.log("--------sdfsdfsdf-sdf-sdf-sd-fsd");
				var res=$.parseJSON(res);

				calender.display(res,company_name);
			}
		});



}
</script>
<body class="dashboard site-menubar-unfold" data-auto-menubar="false">
<header>
	<div class="container">
    	<h1 class="logo"><a href="#"> <img alt="Family Food, LLC" src="<?php echo base_url() ?>images/family-food-logo.png" /> </a></h1>
        <nav class="pull-right">
        	<ul class="nav nav-pills">
            	<li><a href="company">Company</a></li>
                        <li><a href="service">Service</a></li>
                        <li><a href="dietitian">Dietitian</a></li>
						<li><a href="reviews">Reviews</a></li>
						<li><a href="appointments">Appointments</a></li>
					   <li><a href="calendar">Calendar</a></li>

						<li><a href="inbox">Inbox</a></li>
						<li><a href="customers">Customers</a></li>
                <li class="dropdown">
                	<a class="dropdown-toggle" data-toggle="dropdown" href="#">
                		<?php echo $data['userid'] ?>  <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="signout">Sign Out</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</header>

<div class="container content">
   <?php if($results == 'Yes') { ?>
	<div id='calendar'><input type="hidden" class="calSelect" name="calSelect" value="" id="calSelect"></div>
<?php } else { ?>
<div id='noresults'>No Appointments are found</div>
<?php } ?>
</div>
<footer>
	<div class="container">
    	<p>? 2013 Family Food, LLC. All Rights Reserved.</p>
    </div>    
 </footer>

</body>
</html>