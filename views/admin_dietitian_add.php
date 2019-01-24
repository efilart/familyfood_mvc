<!DOCTYPE html>
<html class="no-js before-run" lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<meta name="description" content="bootstrap admin template">
<meta name="author" content="">
<title>Add Dietitian | Dashboard Template</title>
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
<h1 class="page-title">Add Dietitian</h1>
<div class="page-header-actions"> <a href="dietitian" role="button" class="btn btn-danger btn-block btn-round"><i class="icon wb-plus" aria-hidden="true"></i>VIEW / MANAGE DIETITIAN</a>
</div>
</div>

<div class="panel">
<div class="panel-body">

<div class="col-md-6">
<form class="form-horizontal fv-form fv-form-bootstrap" method="GET" id="exampleStandardForm" autocomplete="off" novalidate>
<button type="submit" class="fv-hidden-submit" style="display: none; width: 0px; height: 0px;"></button>
<div class="form-group">

<label class="col-sm-3 control-label">First name</label>
<div class="col-sm-9">
<input type="text" class="form-control" name="dt_fname" id="dt_fname" data-fv-field="dt_fname">
<small class="help-block" data-fv-validator="notEmpty" data-fv-for="dt_fname" data-fv-result="INVALID" style="">The first name is required and cannot be empty</small>
</div>
</div>

<div class="form-group">
<label class="col-sm-3 control-label">Last name</label>
<div class="col-sm-9">
<input type="text" class="form-control" name="dt_lname" id="dt_lname" data-fv-field="dt_lname">
<small class="help-block" data-fv-validator="notEmpty" data-fv-for="dt_lname" data-fv-result="NOT_VALIDATED" style="display: none;">Your last name is required and cannot be empty</small>
</div>
</div>

<div class="form-group">
<label class="col-sm-3 control-label">Alias</label>
<div class="col-sm-6">
<input type="text" class="form-control" name="dt_alias" id="dt_alias" data-fv-field="dt_alias">
<small class="help-block" data-fv-validator="notEmpty" data-fv-for="dt_alias" data-fv-result="NOT_VALIDATED" style="display: none;">Your alias name is required</small>
</div>
</div>

<div class="form-group has-error">
<label class="col-sm-3 control-label">Email</label>
<div class="col-sm-9">
<input type="text" class="form-control" name="dt_email" id="dt_email" data-fv-field="dt_email">
<small class="help-block" data-fv-validator="notEmpty" data-fv-for="dt_email" data-fv-result="INVALID" style="">The email address is required and cannot be empty</small><small class="help-block" data-fv-validator="emailAddress" data-fv-for="dt_email" data-fv-result="VALID" style="display: none;">The email address is not valid</small></div>
</div>

<div class="form-group">
<label class="col-sm-3 control-label">Cellphone</label>
<div class="col-sm-9">
<input type="text" class="form-control" name="dt_phone" id="dt_phone" data-plugin="formatter" data-pattern="([[999]]) [[999]]-[[9999]]">
<p class="help-block">(123) 123-1234</p>
</div>
</div>

<div class="form-group">
<label class="col-sm-3 control-label">&nbsp;</label>
<div class="col-sm-9">
<div class="checkbox-custom checkbox-primary">
<input type="checkbox" id="inputUnchecked" name="showPhonenumberToCustomer">
<label for="inputUnchecked"><small>Display your phone number to customers scheduling appointments online</small></label>
</div>
</div>
</div>

<div class="text-right">
<button type="submit" class="btn btn-primary disabled" id="validateButton2" disabled="disabled">Submit</button>
</div>
</form>
</div>
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
<script src="../assets/assets/vendor/formvalidation/formValidation.min.js"></script>
<script src="../assets/assets/vendor/formvalidation/framework/bootstrap.min.js"></script>
<script src="../assets/assets/vendor/formatter-js/jquery.formatter.js"></script>

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
<script src="../assets/assets/js/components/formatter-js.js"></script>
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

    //functions
    var dietitianOut = <?php print_r( json_encode( $dietitianOut ) ); ?>;
    if( dietitianOut != "" ){
      alert( dietitianOut );
    }

    // function addDietitian(){
    //   var fname = $( '#dt_fname' ).val();
    //   var lname = $( '#dt_lname' ).val();
    //   var alias = $( '#dt_alias' ).val();
    //   var email = $( '#dt_email' ).val();
    //   var phone = $( '#dt_phone' ).val();
    //   var phone_stat = "No"
    //   if( $( '#inputUnchecked' ).is( ':checked' ) ){
    //     phone_stat = "Yes";
    //   }
    //   $.ajax({
    //     type: 'POST',
    //     datatype: 'JSON',
    //     url: 'saveDietitianMember',
    //     data: { 
    //       'sfirstname': fname,
    //       'slastname': lname,
    //       'salias': alias,
    //       'semail': email,
    //       'smobile': phone,
    //       'smobilenotificationtextmsg': phone_stat,
    //     },
    //     success: function( data ){
    //       alert( data );
    //     },
    //   });
    // }
</script>
<script>
    (function(document, window, $) {
      'use strict';
      var Site = window.Site;
      $(document).ready(function($) {
        Site.run();
      });

      // Example Validataion Full
      // ------------------------
      (function() {
        $('#exampleFullForm').formValidation({
          framework: "bootstrap",
          button: {
            selector: '#validateButton1',
            disabled: 'disabled'
          },
          icon: null,
          fields: {
            username: {
              validators: {
                notEmpty: {
                  message: 'The username is required'
                },
                stringLength: {
                  min: 6,
                  max: 30
                },
                regexp: {
                  regexp: /^[a-zA-Z0-9]+$/
                }
              }
            },
            email: {
              validators: {
                notEmpty: {
                  message: 'The username is required'
                },
                emailAddress: {
                  message: 'The email address is not valid'
                }
              }
            },
            password: {
              validators: {
                notEmpty: {
                  message: 'The password is required'
                },
                stringLength: {
                  min: 8
                }
              }
            },
            birthday: {
              validators: {
                notEmpty: {
                  message: 'The birthday is required'
                },
                date: {
                  format: 'YYYY/MM/DD'
                }
              }
            },
            github: {
              validators: {
                url: {
                  message: 'The url is not valid'
                }
              }
            },
            skills: {
              validators: {
                notEmpty: {
                  message: 'The skills is required'
                },
                stringLength: {
                  max: 300
                }
              }
            },
            porto_is: {
              validators: {
                notEmpty: {
                  message: 'Please specify at least one'
                }
              }
            },
            'for[]': {
              validators: {
                notEmpty: {
                  message: 'Please specify at least one'
                }
              }
            },
            company: {
              validators: {
                notEmpty: {
                  message: 'Please company'
                }
              }
            },
            browsers: {
              validators: {
                notEmpty: {
                  message: 'Please specify at least one browser you use daily for development'
                }
              }
            }
          }
        });
      })();

      // Example Validataion Constraints
      // -------------------------------
      (function() {
        $('#exampleConstraintsForm, #exampleConstraintsFormTypes').formValidation({
          framework: "bootstrap",
          icon: null,
          fields: {
            type_email: {
              validators: {
                emailAddress: {
                  message: 'The email address is not valid'
                }
              }
            },
            type_url: {
              validators: {
                url: {
                  message: 'The url is not valid'
                }
              }
            },
            type_digits: {
              validators: {
                digits: {
                  message: 'The value is not digits'
                }
              }
            },
            type_numberic: {
              validators: {
                integer: {
                  message: 'The value is not an number'
                }
              }
            },
            type_phone: {
              validators: {
                phone: {
                  message: 'The value is not an phone(US)'
                }
              }
            },
            type_credit_card: {
              validators: {
                creditCard: {
                  message: 'The credit card number is not valid'
                }
              }
            },
            type_date: {
              validators: {
                date: {
                  format: 'YYYY/MM/DD'
                }
              }
            },
            type_color: {
              validators: {
                color: {
                  type: ['hex', 'hsl', 'hsla', 'keyword', 'rgb',
                    'rgba'
                  ], // The default value for type
                  message: 'The value is not valid color'
                }
              }
            },
            type_ip: {
              validators: {
                ip: {
                  ipv4: true,
                  ipv6: true,
                  message: 'The value is not valid ip(v4 or v6)'
                }
              }
            }
          }
        });
      })();

      // Example Validataion Standard Mode
      // ---------------------------------
      (function() {
        $('#exampleStandardForm').formValidation({
          framework: "bootstrap",
          button: {
            selector: '#validateButton2',
            disabled: 'disabled'
          },
          icon: null,
          fields: {
            dt_fname: {
              validators: {
                notEmpty: {
                  message: 'Your first name is required and cannot be empty'
                }
              }
            },
												dt_lname: {
              validators: {
                notEmpty: {
                  message: 'Your last name is required and cannot be empty'
                }
              }
            },
												dt_alias: {
              validators: {
                notEmpty: {
                  message: 'Your alias is required'
                }
              }
            },
            dt_email: {
              validators: {
                notEmpty: {
                  message: 'The email address is required and cannot be empty'
                },
                emailAddress: {
                  message: 'The email address is not valid'
                }
              }
            },
            standard_content: {
              validators: {
                notEmpty: {
                  message: 'The content is required and cannot be empty'
                },
                stringLength: {
                  max: 500,
                  message: 'The content must be less than 500 characters long'
                }
              }
            }
          }
        });
      })();

      // Example Validataion Summary Mode
      // -------------------------------
      (function() {
        $('.summary-errors').hide();

        $('#exampleSummaryForm').formValidation({
          framework: "bootstrap",
          button: {
            selector: '#validateButton3',
            disabled: 'disabled'
          },
          icon: null,
          fields: {
            summary_fullName: {
              validators: {
                notEmpty: {
                  message: 'The full name is required and cannot be empty'
                }
              }
            },
            summary_email: {
              validators: {
                notEmpty: {
                  message: 'The email address is required and cannot be empty'
                },
                emailAddress: {
                  message: 'The email address is not valid'
                }
              }
            },
            summary_content: {
              validators: {
                notEmpty: {
                  message: 'The content is required and cannot be empty'
                },
                stringLength: {
                  max: 500,
                  message: 'The content must be less than 500 characters long'
                }
              }
            }
          }
        })

        .on('success.form.fv', function(e) {
          // Reset the message element when the form is valid
          $('.summary-errors').html('');
        })

        .on('err.field.fv', function(e, data) {
          // data.fv     --> The FormValidation instance
          // data.field  --> The field name
          // data.element --> The field element
          $('.summary-errors').show();

          // Get the messages of field
          var messages = data.fv.getMessages(data.element);

          // Remove the field messages if they're already available
          $('.summary-errors').find('li[data-field="' + data.field +
            '"]').remove();

          // Loop over the messages
          for (var i in messages) {
            // Create new 'li' element to show the message
            $('<li/>')
              .attr('data-field', data.field)
              .wrapInner(
                $('<a/>')
                .attr('href', 'javascript: void(0);')
                // .addClass('alert alert-danger alert-dismissible')
                .html(messages[i])
                .on('click', function(e) {
                  // Focus on the invalid field
                  data.element.focus();
                })
              ).appendTo('.summary-errors > ul');
          }

          // Hide the default message
          // $field.data('fv.messages') returns the default element containing the messages
          data.element
            .data('fv.messages')
            .find('.help-block[data-fv-for="' + data.field + '"]')
            .hide();
        })

        .on('success.field.fv', function(e, data) {
          // Remove the field messages
          $('.summary-errors > ul').find('li[data-field="' + data.field +
            '"]').remove();
          if ($('#exampleSummaryForm').data('formValidation').isValid()) {
            $('.summary-errors').hide();
          }
        });
      })();
    })(document, window, jQuery);
  </script>

</body>
</html>