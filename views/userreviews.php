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

$( document ).ready(function() {
reviewsList();

/*$.ajax({
                url:'getAppointmentsForReviewPost' ,
				type:'POST',
				data: "userid=<?php echo $cuser ?>&date="+getCurrentdate(),
                success: getAppointmentsForReviewPost,
                failure: getAppointmentsForReviewPost,
                dataType: 'json',
                cache: true
								
            });	*/

});

function getAppointmentsForReviewPost(data) {

if(typeof data != 'undefined'){
	var jsonObj = data;
	var innerhtml ="<select id='reviewServiceid'>";
	if(jsonObj.length > 0) {
	$("#loggedinuser").val("<?php echo $cuser ?>");
	for (i=0;i < jsonObj.length;i++)
	{
		innerhtml = innerhtml + '<option value="'+jsonObj[i].confirmation_number+'">'+jsonObj[i].name+'</option>';
	}
	innerhtml = innerhtml+'</select>';
	$(".selectReviewService").html(innerhtml);
	$("#reviewform").css('display','block');
	
	}
  }



}
function reviewsList() {
$.ajax({
                url:'displayPublishedReviews' ,
                success: displayReviewsList,
                failure: displayReviewsList,
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

function getListOfAppointmentReviewsTobePosted() {
$.ajax({
                url:'listAllAppointmentsReviewsTobePosted' ,
                success: listAllAppointmentsReviewsTobePosted,
                failure: listAllAppointmentsReviewsTobePosted,
                dataType: 'json',
                cache: true
								
            });	
}

function listAllAppointmentsReviewsTobePosted() {
if(typeof data != 'undefined'){
	var jsonObj = data;
	var innerhtml ="";
	for (i=0;i < jsonObj.length;i++)
	{
		innerhtml = innerhtml + '<option value=""></option>';



	}
  }

}

function displayReviewsList(data) {
$(".reviewsdiv").css('display','block');
if(typeof data != 'undefined'){
	var jsonObj = data;
	var innerhtml = ' <table border="0" width="100%" id="reviewstable"><tr height="25" style="background: none repeat scroll 0 0 #96C0E4;" class="bordersreview"><th width="15%">Published</th><th width="10%">Customer</th><th width="10%">Rating</th><th width="50%">Review</th width="10%"><th>&nbsp;</th></tr>';
	for (i=0;i < jsonObj.length;i++)
	{
	  var innerhtml1 = "";
	  var total = 5;
	  total = total - jsonObj[i].rating;
	  for(j=0; j< jsonObj[i].rating; j++) {
	    innerhtml1 = innerhtml1+'<img src="<?php echo base_url(); ?>images/review_star_on_12.png" />&nbsp;';
	  }
	  
	  for(k=0;k<total; k++) {
	   innerhtml1 = innerhtml1+'<img src="<?php echo base_url(); ?>images/review_star_off_12.png" />&nbsp;';
	  }
	  var publish = "<td>&nbsp;</td>";
	  if(jsonObj[i].publish_status == "No"){
	  	publish = "<td><a href='javascript:void(0)' onclick='publishThis("+jsonObj[i].review_id+")'>Approve for publishing</a></td>";
	  }
	 innerhtml = innerhtml + '<tr height="25" class="bordersreview" id="reviewrowid_'+jsonObj[i].review_id+'"><td>'+jsonObj[i].recieved_date+'</td><td>'+jsonObj[i].posted_by+'</td><td>'+innerhtml1+'</td><td>'+jsonObj[i].review+'<a href="javascript:void(0)" onclick= "displayDescription('+jsonObj[i].review_id+', \''+escape(jsonObj[i].description)+'\')" ><font size=2> &nbsp;Read more</font></a></td>'+publish+'</tr>';
	}
	innerhtml = innerhtml+'</table> <br><br>';
	$(".reviewsdiv").html(innerhtml);

}

}
var readmore = [];
function displayDescription(reviewrow,description) {

if(readmore.indexOf(reviewrow) == -1) {
	var html = '<tr class="bordersreview" id="detailreviewrowid_'+reviewrow+'"><td></td><td></td><td></td><td>'+unescape(description)+'<a href="javascript:void(0)" onclick= "hideDetails('+reviewrow+')" > <font size=2>Hide Details</font></a></td><td>&nbsp;</td></tr>';
	$("tr#reviewrowid_"+reviewrow).after(html);
	readmore.push(reviewrow);
}

}
function hideDetails(reviewrow) {

$("tr#detailreviewrowid_"+reviewrow).remove();
readmore.pop(reviewrow);
}
//edited added function
function publishThis( reviewID ){
	$.ajax({
                url: 'publishThis' ,
				data: "reviewID="+reviewID,
				type :'POST',
                success: function(msg) {
				     alert(msg);
				     reviewsList();
				},
                failure: function(msg) {
                	alert(msg)
               	},
								
	});
}

function exportReviewsInCSV( reviewID ){
	document.location = "exportReviewsInCSV";
}
//end
function ratingsTab(id) {

var ratingvalue = 1;
if($("#"+id).attr("src").indexOf("review_star_off_12") > 0) {
	
	 
     var url = "<?php echo base_url() ; ?>images/review_star_on_12.png";
	 var limit = parseInt($("#"+id).attr("alt"));
	 var imgid = "star";
	 for(var i=1;i<=limit;i++){
     $("#star"+i).attr("src",url);
	 $("#ratingValues").val(limit);
	 }
	 
} else  {
	
     var url = "<?php echo base_url() ; ?>images/review_star_off_12.png";
	 var limit = parseInt($("#"+id).attr("alt"));
	 var imgid = "star";
	 for(var i=5;i>limit;i--){
      $("#star"+i).attr("src",url);
	 $("#ratingValues").val(limit);
	 }
	 
	 }
}

function submitreviewform() {

if (($("#loggedinuser").val() != "") && ($("#headline").val() != "") && ($("#comment").val() != "")) {
if(($("#headline").val().split(" ").length <= 10) && ($("#comment").val().length >= 100)) {
$.ajax({
                url: 'submitReviews' ,
				data: "bookedby="+$("#loggedinuser").val()+"&rating="+$("#ratingValues").val()+"&reviewtitle="+$("#headline").val()+"&reviewdiscription="+$("#comment").val(),
				type :'POST',
                success: function(msg) {
				     alert(msg);
				  },
                failure: function(msg) {alert(msg)},
                cache: true
								
            });	
			
	resetReviewForm();
} else {
   alert(" Make sure Review title and Review discription lengths should match to given criteria");
}
} else {
alert("please fill details");

}
}

function resetReviewForm() {


     var url = "<?php echo base_url() ; ?>images/review_star_off_12.png";
	 var imgid = "star";
	 for(var i=1;i<=5;i++){
      $("#star"+i).attr("src",url);
	 $("#ratingValues").val("0");
	 }
	 $("#loggedinuser").val("");
	 $("#headline").val("");
	 $("#comment").val("");

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
        	 	<h2>Reviews</h2>
		<br>
		<a href="javascript:void(0);" onclick="exportReviewsInCSV()">download</a>
		<div id="reviewform" style="display:none">
			<table id="reviewTable">
                                        <tbody>
                                            <tr>
                                                <td valign="top" class="writeReviewfield">Service Rating</td>
                                                <td valign="top" style="cursor:pointer"class="writeReviewStars">
													<input type="hidden" id="ratingValues" value="0" class="ratingValues" name="ratingValues">
                                                    <img alt="1" onclick = "ratingsTab(this.id)" src="<?php echo base_url() ; ?>images/review_star_off_12.png" id="star1">
                                                    <img alt="2" onclick = "ratingsTab(this.id)" src="<?php echo base_url() ; ?>images/review_star_off_12.png" id="star2">
                                                    <img alt="3" onclick = "ratingsTab(this.id)" src="<?php echo base_url() ; ?>images/review_star_off_12.png" id="star3">
                                                    <img alt="4" onclick = "ratingsTab(this.id)" src="<?php echo base_url() ; ?>images/review_star_off_12.png" id="star4">
                                                    <img alt="5" onclick = "ratingsTab(this.id)" src="<?php echo base_url() ; ?>images/review_star_off_12.png" id="star5">
                                                </td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td valign="top" class="writeReviewfield">Author name</td>
                                                <td valign="top" class="writeReviewInput"><input id="loggedinuser" type="text" value=""></input></td>
                                                <td valign="top" id="writeReviewOtherName">
<input type="text" style="display: none;" id="displayNameOther" value="" name="displayNameOther" class="displayNameOther writeReviewFormMsg" disabled="disabled">
                                                </td>
                                            </tr>
											
											
											 <tr>
                                                <td valign="top" class="writeReviewfield">Service Name</td>
                                                <td valign="top" class="selectReviewService"></td>
                                                <td valign="top" id="selectReviewServicename"></td>
                                            </tr>
											
                                            <tr>
                                                <td valign="top" class="writeReviewfield">Review title</td>
                                                <td valign="top" class="writeReviewInput"><input type="text" maxlength="100" id="headline" value="" name="headline" class="headline">

                                                </td><td valign="top"><p class="writeReviewFormMsg">Please limit to 10 words</p></td>
                                            </tr>
                                            <tr id="writeReviewLargeRow">
                                                <td valign="top" class="writeReviewfield">Review body</td>
                                                <td valign="top" class="writeReviewInput"><textarea id="comment" name="comment" value="" class="comment"></textarea>

                                                </td><td valign="top"><p id="commentMessage" class="writeReviewFormMsg">Minimum 100 characters required.<br>100 characters remaining.</p></td>

                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td><span class="submit"><button onclick="submitreviewform()">Submit</button></span></td>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                    </table>
			
			
			
			
			</div>
  <br><br>
		<div class="reviewsdiv" style="display:none">
		
		
		
		
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