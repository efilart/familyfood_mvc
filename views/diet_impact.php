<!DOCTYPE html>
<html class="no-js before-run" lang="en"><head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<meta name="description" content="bootstrap admin template">
<meta name="author" content="">
<title>Dietitian - View Appointments | Familyfood Dashboard</title>
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
<link rel="stylesheet" href="../assets/assets/vendor/bootstrap-sweetalert/sweet-alert.css">
<!--link rel="stylesheet" href="../assets/assets/vendor/raty/jquery.raty.css"-->
<!-- Page -->
<link rel="stylesheet" href="../assets/assets/css/dashboard/v2.css">
<!-- Fonts -->
<script src="https://use.fontawesome.com/286c52578e.js"></script>
<link rel="stylesheet" href="../assets/assets/fonts/web-icons/web-icons.min.css">
<link rel="stylesheet" href="../assets/assets/fonts/brand-icons/brand-icons.min.css">
<link rel="stylesheet" href="../assets/assets/fonts/material-design/material-design.min.css?v4.0.2">
<link rel='stylesheet' href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic">
<!--link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"-->
<!--[if lt IE 9]>
<script src="../assets/assets/vendor/html5shiv/html5shiv.min.js"></script>
<![endif]-->
<!--[if lt IE 10]>
<script src="../assets/assets/vendor/media-match/media.match.min.js"></script>
<script src="../assets/assets/vendor/respond/respond.min.js"></script>
<![endif]-->
<!-- Scripts -->
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="../assets/assets/vendor/modernizr/modernizr.js"></script>
<script src="../assets/assets/vendor/breakpoints/breakpoints.js"></script>
<script>
Breakpoints();
</script>
<script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
<!--script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script-->
<!-- First get JQuery -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<!-- Then get JQuery UI -->
<script src="http://code.jquery.com/ui/1.8.18/jquery-ui.min.js"></script>
</head>
<body class="dashboard site-menubar-unfold" data-auto-menubar="false">
<?php include("inc_dietitian_menu_header.php"); ?>
<?php include("inc_dietitian_left_menu.php"); ?>
<?php

$rd_impact_list = "";

if( !empty( $impact_details ) ){

	foreach( $impact_details as $details ){

		if( $details->di_created_by > 0 ){

			$by = $details->first_name.' '.$details->last_name;

		}else{

			$by = 'Admin';

		}

		

		if( $details->di_status == 1 ){

			$status = '<a href="javascript:void(0)" onclick="updateStatus('.$details->di_id.', 0 )" id="di_'.$details->di_id.'" ><i class="icon wb-eye" aria-hidden="true"></i></a>';

		}else{

			$status = '<a href="javascript:void(0)" onclick="updateStatus('.$details->di_id.', 1)" id="di_'.$details->di_id.'"><i class="icon wb-eye-close" aria-hidden="true"></i></a>';

		}
		$red_heart = '';
		if( $details->my_like > 0 ){
		    $red_heart = 'red-600';
		}

		$rd_impact_list .= "<tr>";
		$rd_impact_list .= "<td style='white-space: nowrap'>".$by."</td>";
		//$rd_impact_list .= "<td>".$details->di_title."</td>";
		$rd_impact_list .= "<td>".$details->di_details."</td>";
		$rd_impact_list .= "<td><a href='javascript:void(0)' onclick='showLikers(".$details->di_id.")'>
                    <i class='icon md-favorite-outline' aria-hidden='true'></i>
                    <span id='impact_".$details->di_id."' class='badge badge-pill up badge-danger liked'>".$details->like_cnts."</a>
                  </span></td>";
		if( $dietitian_id == 0 ){
		    $rd_impact_list .= "<td style='text-align:center'>".$status."</td>";
		}
		if( $dietitian_id > 0 ){
            $rd_impact_list .= "<td style='white-space: nowrap; text-align: center'>
		<button onclick='like(".$dietitian_id.", $details->di_id)' type='button' class='btn btn-sm btn-icon btn-flat' data-toggle='tooltip' data-original-title='Like this Impact'>
  <i class='icon ".$red_heart." wb wb-heart' id='impact_heart_".$details->di_id."' aria-hidden='true'></i>
</button>
</td>";		    
		}
		
		$rd_impact_list .= "</tr>";	

	}

	

}

?>
<div class="page animsition">
<div class="page-content">
<div class="page-header">
<h1 class="page-title">RD Impact</h1>
<div class="page-header-actions"> <a href="impactList" role="button" class="btn btn-primary btn-block btn-round"><i class="icon wb-plus" aria-hidden="true"></i>MY IMPACT LIST</a> </div>

<!-- Modal -->

<div class="modal fade" id="insertImpact" aria-hidden="false" aria-labelledby="impactLabel"

		role="dialog" tabindex="-1">
<div class="modal-dialog">
<form class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true"><i class="icon wb-close" aria-hidden="true"></i></span> </button>
<h4 class="modal-title" id="impactLabel">Add RD Impact</h4>
</div>
<div class="modal-body">
<div class="row">
<div class="col-lg-6 form-group">
<input type="text" class="form-control" id="di_title" name="firstName" placeholder="First Name">
</div>
<div class="col-lg-6 form-group">
<div class="checkbox-custom checkbox-danger">
<input name="inputCheckboxes" id="di_status" type="checkbox">
<label>Make Public</label>
</div>
</div>

<?php
if( $dietitian_id == 0 ){
	$dietitians_option = "";
	foreach( $dietitian_list as $dietitians ){
		$dietitians_option .= "<option value='".$dietitians->dietitian_id."'>".$dietitians->first_name." ".$dietitians->last_name."</option>";
	}
	echo <<< EOT
	<div class="col-lg-12 form-group">
	<select name="dietitian_select" id="dietitian_select">
	{$dietitians_option}
	</select>
	</div>
EOT;
}
?>
<div class="col-lg-12 form-group">
<textarea class="form-control" id="di_details" rows="5" placeholder="Type your details"></textarea>
</div>
<div class="col-sm-12 pull-right">
<button class="btn btn-primary" id="insertData" type="button">Save</button>
</div>
</div>
</div>
</form>
</div>
</div>

<!-- End Modal --> 

</div>
<div class="panel">
<div class="panel-body">

<div class="example table-responsive">
<table class="table table-striped">
<thead>
<tr>
<!--th>Title</th-->
<th style="text-transform: uppercase;">Entry By</th>
<th style="text-transform: uppercase;">Details</th>
<th style="text-transform: uppercase;">Likes</th>
<?php
if( $dietitian_id == 0 ){
    echo '<th style="white-space: nowrap;text-transform: uppercase; text-align: center">View Status</th>';
}

if( $dietitian_id > 0 ){
    echo '<th style="white-space: nowrap;text-transform: uppercase; text-align: center">Like this Impact</th>';
}
?>
</tr>
</thead>
<tbody>
<?php echo $rd_impact_list; ?>
</tbody>
</table>
</div>

</div>
</div>
</div>
</div>

<!-- End Page --> 

<!-- start footer -->

<?php include("inc_footer.php"); ?>

<!-- end footer --> 
<div class="modal" id="likers_modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <div class='pull-left'><i class='icon red-600 wb wb-heart' aria-hidden='true'></i></div>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table id="likers" class="table">
            <tbody></tbody>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
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
<script src="../assets/assets/js/components/panel.js"></script> 
<script src="../assets/assets/js/components/switchery.js"></script> 
<script src="../assets/assets/js/components/bootstrap-sweetalert.js"></script> 
<script src="../assets/assets/js/components/panel.min.js"></script>
<script src="../assets/assets/js/components/panel-actions.min.js"></script> 
<script>
    (function(document, window, $) {
      'use strict';

      var Site = window.Site;
      $(document).ready(function() {
        Site.run();
      });
    })(document, window, jQuery);
</script>
<script>
    function like( diet_id, impact_id ){
        $.ajax({
           type: 'GET',
           datatype: 'JSON',
           url: 'saveImpactLike',
           data: {
               'dietitian_id': diet_id,
               'impact_id': impact_id
           },
           success: function( data ){
               var result = JSON.parse( data );
               if( jQuery.isEmptyObject( result ) == false ){
                   $( '#impact_'+impact_id ).html( result.updated_cnt );
                   if( result.res > 0 ){
                       $( '#impact_heart_'+impact_id ).addClass('red-600');
                   }else{
                       $( '#impact_heart_'+impact_id ).removeClass('red-600');
                   }
               } else {
                   alert( 'Something went wrong please try again or reload page' );
               }
           }
        });
    }
    
    function showLikers( impact_id ){
        $('#likers tbody').html( '' );
        $.ajax({
           type: 'GET',
           datatype: 'JSON',
           url: 'getLikers',
           data: {
               'impact_id': impact_id
           },
           success: function( data ){
               var result = JSON.parse( data );
               if( jQuery.isEmptyObject( result ) == false ){
                   var dietitian_list_html = '';
                   $.each( result, function( key, value ){
                       dietitian_list_html += "<tr><td>"+value.first_name+" "+value.last_name+"</td></tr>";
                   });
                   $('#likers tbody').html( dietitian_list_html );
                   $( '#likers_modal' ).modal( 'show' );
               } else {
                   alert('No likes Received');
               }
           }
        });
    }

	function updateStatus( id, status ){

		$.ajax({ 

			type: 'GET',

			datatype: 'JSON',

			//async: false,

			url: 'updateImpactStatus',

			data: { 

				'di_id': id,

	    		'di_status' : status

			},

			success: function( data ){

				if( data == 1 ){

		          	swal("Saved!",

		                "RD Impact Saved!",

		                "success");

		          	if( status == 1 ){

		          		$( '#di_'+id ).html( '<i class="icon wb-eye" aria-hidden="true">' );

		          		$( '#di_'+id ).on( 'click', function(){

		          			updateStatus( id, 0 );

		          		});

		          	}else{

		          		$( '#di_'+id ).html( '<i class="icon wb-eye-close" aria-hidden="true">' );

		          		$( '#di_'+id ).on( 'click', function(){

		          			updateStatus( id, 1 );

		          		});

		          	}

		        }else{

		          	swal("Error", "Something went wrong, please try again.", "error");

		        }

			}

		});

	}

	

	// Modal script

	function showInsertModal(){

		var dietitian_id = "<?php echo $dietitian_id;?>";
		if( dietitian_id == 0 ){
			dietitian_id = $( '#dietitian_select' ).val();
			
			$( '#dietitian_select' ).unbind( 'channge' );

			$( '#dietitian_select' ).on( 'change', function(){
				dietitian_id = $( this ).val();
			});
		}

		$( '#insertImpact' ).modal( 'show' );

		$( '#di_title' ).val( '' );

	    $( '#di_details' ).val( '' );

	    $( '#di_status' ).prop( 'checked', false );

	    $( '#insertData' ).unbind( 'click' );



	    $( '#insertData' ).on( 'click', function(){

		    var status = 0;

		    if( $( '#di_status' ).is( ':checked' ) === true ){

		    	status = 1;

		    }

		    if( $( '#di_title' ).val() != "" && $( '#di_details' ).val() != "" ){

		    	$.ajax({ 

					type: 'GET',

					datatype: 'JSON',

					//async: false,

					url: 'saveimpact',

					data: { 

						'dietitian_id': dietitian_id,

						'di_title': $( '#di_title' ).val(),

						'di_details': $( '#di_details' ).val(),

			    		'di_status' : status,

			    		'by': "<?php echo $user;?>",

					},

					success: function( data ){

						if( data == 1 ){

				          	swal("Saved!",

				                "RD Impact Saved!",

				                "success");

				          	$( '#insertImpact' ).modal( 'hide' );

				          	location.reload();

				        }else{

				          	swal("Error", "Something went wrong, please try again.", "error");

				        }

					}

				});

		    }else{

		    	alert( 'Please fill up the Title and Details' );

		    }

	    });

	}

</script>
</html>