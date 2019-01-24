<!DOCTYPE html>

<html class="no-js before-run" lang="en">

<head>

<meta charset="utf-8">

<meta http-equiv="X-UA-Compatible" content="IE=edge">

<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">

<meta name="description" content="bootstrap admin template">

<meta name="author" content="">

<title>Form Advanced Elements | Remark Admin Template</title>

<link rel="apple-touch-icon" href="../assets/images/apple-touch-icon.png">

<link rel="shortcut icon" href="../assets/images/favicon.ico">



<!-- Favicon -->

<link rel="icon" type="image/ico" href="favicon.ico"/>

<link rel="apple-touch-icon" sizes="57x57" href="apple-icon-57x57.png">

<link rel="apple-touch-icon" sizes="60x60" href="apple-icon-60x60.png">

<link rel="apple-touch-icon" sizes="72x72" href="apple-icon-72x72.png">

<link rel="apple-touch-icon" sizes="76x76" href="apple-icon-76x76.png">

<link rel="apple-touch-icon" sizes="114x114" href="apple-icon-114x114.png">

<link rel="apple-touch-icon" sizes="120x120" href="apple-icon-120x120.png">

<link rel="apple-touch-icon" sizes="144x144" href="apple-icon-144x144.png">

<link rel="apple-touch-icon" sizes="152x152" href="apple-icon-152x152.png">

<link rel="apple-touch-icon" sizes="180x180" href="apple-icon-180x180.png">

<link rel="icon" type="image/png" sizes="192x192"  href="android-icon-192x192.png">

<link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">

<link rel="icon" type="image/png" sizes="96x96" href="favicon-96x96.png">

<link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">





<!-- Stylesheets -->

<link rel="stylesheet" href="../assets/css/bootstrap.min.css">

<link rel="stylesheet" href="../assets/css/bootstrap-extend.min.css">

<link rel="stylesheet" href="../assets/css/site.min.css">

<link rel="stylesheet" href="../assets/vendor/animsition/animsition.css">

<link rel="stylesheet" href="../assets/vendor/asscrollable/asScrollable.css">

<link rel="stylesheet" href="../assets/vendor/switchery/switchery.css">

<link rel="stylesheet" href="../assets/vendor/intro-js/introjs.css">

<link rel="stylesheet" href="../assets/vendor/slidepanel/slidePanel.css">

<link rel="stylesheet" href="../assets/vendor/flag-icon-css/flag-icon.css">



<!-- Plugin -->

<link rel="stylesheet" href="../assets/vendor/select2/select2.css">

<link rel="stylesheet" href="../assets/vendor/bootstrap-tokenfield/bootstrap-tokenfield.css">

<link rel="stylesheet" href="../assets/vendor/bootstrap-tagsinput/bootstrap-tagsinput.css">

<link rel="stylesheet" href="../assets/vendor/bootstrap-select/bootstrap-select.css">

<link rel="stylesheet" href="../assets/vendor/icheck/icheck.css">

<link rel="stylesheet" href="../assets/vendor/switchery/switchery.css">

<link rel="stylesheet" href="../assets/vendor/asrange/asRange.css">

<link rel="stylesheet" href="../assets/vendor/asspinner/asSpinner.css">

<link rel="stylesheet" href="../assets/vendor/clockpicker/clockpicker.css">

<link rel="stylesheet" href="../assets/vendor/ascolorpicker/asColorPicker.css">

<link rel="stylesheet" href="../assets/vendor/bootstrap-touchspin/bootstrap-touchspin.css">

<link rel="stylesheet" href="../assets/vendor/card/card.css">

<link rel="stylesheet" href="../assets/vendor/jquery-labelauty/jquery-labelauty.css">

<link rel="stylesheet" href="../assets/vendor/bootstrap-datepicker/bootstrap-datepicker.css">

<link rel="stylesheet" href="../assets/vendor/bootstrap-maxlength/bootstrap-maxlength.css">

<link rel="stylesheet" href="../assets/vendor/jt-timepicker/jquery-timepicker.css">

<link rel="stylesheet" href="../assets/vendor/jquery-strength/jquery-strength.css">

<link rel="stylesheet" href="../assets/vendor/multi-select/multi-select.css">

<link rel="stylesheet" href="../assets/vendor/typeahead-js/typeahead.css">



<!-- Fonts -->

<link rel="stylesheet" href="../assets/fonts/web-icons/web-icons.min.css">

<link rel="stylesheet" href="../assets/fonts/brand-icons/brand-icons.min.css">

<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>



<!-- Inline -->

<style>

.bootstrap-select {

	width: 100% !important;

}

.datepair-wrap {

	position: relative;

	overflow: hidden;

}

.input-daterange-wrap {

	float: left;

}

.input-daterange-to {

	float: left;

	width: 40px;

	height: 40px;

	line-height: 40px;

	text-align: center;

}



@media (max-width: 1360px) {

.input-daterange-wrap, .input-daterange-to {

	display: block;

	float: none;

}

}

</style>



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



<!-- Page -->

<div class="page animsition">

<div class="page-header">

<h1 class="page-title">Form Advanced Elements</h1>

<ol class="breadcrumb">

<li><a href="../index.html">Home</a></li>

<li><a href="javascript:void(0)">Forms</a></li>

<li class="active">Advanced</li>

</ol>

<div class="page-header-actions">

<button type="button" class="btn btn-sm btn-icon btn-default btn-outline btn-round"

        data-toggle="tooltip" data-original-title="Edit"> <i class="icon wb-pencil" aria-hidden="true"></i> </button>

<button type="button" class="btn btn-sm btn-icon btn-default btn-outline btn-round"

        data-toggle="tooltip" data-original-title="Refresh"> <i class="icon wb-refresh" aria-hidden="true"></i> </button>

<button type="button" class="btn btn-sm btn-icon btn-default btn-outline btn-round"

        data-toggle="tooltip" data-original-title="Setting"> <i class="icon wb-settings" aria-hidden="true"></i> </button>

</div>

</div>

<div class="page-content container-fluid"> 



<!-- Panel Date Picker -->

<div class="panel">

<div class="panel-body">

<div class="example-wrap">

<div class="example datepair-wrap" data-plugin="datepair">

<div class="input-daterange-wrap">

<div class="input-daterange">

<div class="input-group"><span class="input-group-addon"><i class="icon wb-calendar" aria-hidden="true"></i></span>

<input type="text" class="form-control datepair-date datepair-start" data-plugin="datepicker">

</div>

<div class="input-group"> <span class="input-group-addon"><i class="icon wb-time" aria-hidden="true"></i></span>

<input type="text" class="form-control datepair-time datepair-start" data-plugin="timepicker" />

</div>

</div>

</div>

<div class="input-daterange-to">to</div>

<div class="input-daterange-wrap">

<div class="input-daterange">

<div class="input-group"> <span class="input-group-addon"> <i class="icon wb-calendar" aria-hidden="true"></i></span>

<input type="text" class="form-control datepair-date datepair-end" name="end" data-plugin="datepicker">

</div>

<div class="input-group"><span class="input-group-addon"> <i class="icon wb-time" aria-hidden="true"></i></span>

<input type="text" class="form-control datepair-time datepair-end" data-plugin="timepicker" />

</div>

</div>

</div>

</div>

</div>

</div>

</div>

<!-- End Panel Date Picker --> 



<!-- Panel Color Picker --> 

<!-- End Panel Color Picker --><!-- Panel Jquery Knob --><!-- End Panel Jquery Knob --></div>

</div>

<!-- End Page --> 





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

<script src="../assets/assets/vendor/select2/select2.min.js"></script> 

<script src="../assets/assets/vendor/bootstrap-tokenfield/bootstrap-tokenfield.min.js"></script> 

<script src="../assets/assets/vendor/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script> 

<script src="../assets/assets/vendor/bootstrap-select/bootstrap-select.js"></script> 

<script src="../assets/assets/vendor/icheck/icheck.min.js"></script> 

<script src="../assets/assets/vendor/switchery/switchery.min.js"></script> 

<script src="../assets/assets/vendor/asrange/jquery-asRange.min.js"></script> 

<script src="../assets/assets/vendor/asspinner/jquery-asSpinner.min.js"></script> 

<script src="../assets/assets/vendor/clockpicker/bootstrap-clockpicker.min.js"></script> 

<script src="../assets/assets/vendor/ascolor/jquery-asColor.min.js"></script> 

<script src="../assets/assets/vendor/asgradient/jquery-asGradient.min.js"></script> 

<script src="../assets/assets/vendor/ascolorpicker/jquery-asColorPicker.min.js"></script> 

<script src="../assets/assets/vendor/bootstrap-maxlength/bootstrap-maxlength.min.js"></script> 

<script src="../assets/assets/vendor/jquery-knob/jquery.knob.js"></script> 

<script src="../assets/assets/vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script> 

<script src="../assets/assets/vendor/card/jquery.card.js"></script> 

<script src="../assets/assets/vendor/jquery-labelauty/jquery-labelauty.js"></script> 

<script src="../assets/assets/vendor/bootstrap-datepicker/bootstrap-datepicker.js"></script> 

<script src="../assets/assets/vendor/jt-timepicker/jquery.timepicker.min.js"></script> 

<script src="../assets/assets/vendor/datepair-js/datepair.min.js"></script> 

<script src="../assets/assets/vendor/datepair-js/jquery.datepair.min.js"></script> 

<script src="../assets/assets/vendor/jquery-strength/jquery-strength.min.js"></script> 

<script src="../assets/assets/vendor/multi-select/jquery.multi-select.js"></script> 

<script src="../assets/assets/vendor/typeahead-js/bloodhound.min.js"></script> 

<script src="../assets/assets/vendor/typeahead-js/typeahead.jquery.min.js"></script> 

<script src="../assets/assets/vendor/jquery-placeholder/jquery.placeholder.js"></script> 



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

<script src="../assets/assets/js/components/select2.js"></script> 

<script src="../assets/assets/js/components/bootstrap-tokenfield.js"></script> 

<script src="../assets/assets/js/components/bootstrap-tagsinput.js"></script> 

<script src="../assets/assets/js/components/bootstrap-select.js"></script> 

<script src="../assets/assets/js/components/icheck.js"></script> 

<script src="../assets/assets/js/components/switchery.js"></script> 

<script src="../assets/assets/js/components/asrange.js"></script> 

<script src="../assets/assets/js/components/asspinner.js"></script> 

<script src="../assets/assets/js/components/clockpicker.js"></script> 

<script src="../assets/assets/js/components/ascolorpicker.js"></script> 

<script src="../assets/assets/js/components/bootstrap-maxlength.js"></script> 

<script src="../assets/assets/js/components/jquery-knob.js"></script> 

<script src="../assets/assets/js/components/bootstrap-touchspin.js"></script> 

<script src="../assets/assets/js/components/card.js"></script> 

<script src="../assets/assets/js/components/jquery-labelauty.js"></script> 

<script src="../assets/assets/js/components/bootstrap-datepicker.js"></script> 

<script src="../assets/assets/js/components/jt-timepicker.js"></script> 

<script src="../assets/assets/js/components/datepair-js.js"></script> 

<script src="../assets/assets/js/components/jquery-strength.js"></script> 

<script src="../assets/assets/js/components/multi-select.js"></script> 

<script src="../assets/assets/js/components/jquery-placeholder.js"></script> 

<script>

    (function(document, window, $) {

      'use strict';

      var Site = window.Site;

      $(document).ready(function($) {

        Site.run();

      });



      // Example Reset Current

      // ---------------------

      (function() {

        // Reset Current

        $('#exampleTimeButton').on('click', function() {

          $('#inputTextCurrent').timepicker('setTime', new Date());

        });

      })();



      // Example inline datepicker

      // ---------------------

      (function() {

        // Reset Current

        $('#inlineDatepicker').datepicker();

        $("#inlineDatepicker").on("changeDate", function(event) {

          $("#inputHiddenInline").val(

            $("#inlineDatepicker").datepicker('getFormattedDate')

          );

        });

      })();



      // Example Tokenfield With Typeahead

      // ---------------------------------

      (function() {

        var engine = new Bloodhound({

          local: [{

            value: 'red'

          }, {

            value: 'blue'

          }, {

            value: 'green'

          }, {

            value: 'yellow'

          }, {

            value: 'violet'

          }, {

            value: 'brown'

          }, {

            value: 'purple'

          }, {

            value: 'black'

          }, {

            value: 'white'

          }],

          datumTokenizer: Bloodhound.tokenizers.obj.whitespace(

            'value'),

          queryTokenizer: Bloodhound.tokenizers.whitespace

        });



        // engine.initialize();



        $('#inputTokenfieldTypeahead').tokenfield({

          typeahead: [null, {

            name: 'engine',

            displayKey: 'value',

            source: engine.ttAdapter()

          }]

        });

      })();



      // Example Tokenfield Events

      // -------------------------

      (function() {

        $('#inputTokenfieldEvents')

          .on('tokenfield:createtoken', function(e) {

            var data = e.attrs.value.split('|');

            e.attrs.value = data[1] || data[0];

            e.attrs.label = data[1] ? data[0] + ' (' + data[1] + ')' :

              data[0];

          })

          .on('tokenfield:createdtoken', function(e) {

            // Über-simplistic e-mail validation

            var re = /\S+@\S+\.\S+/;

            var valid = re.test(e.attrs.value);

            if (!valid) {

              $(e.relatedTarget).addClass('invalid');

            }

          })

          .on('tokenfield:edittoken', function(e) {

            if (e.attrs.label !== e.attrs.value) {

              var label = e.attrs.label.split(' (');

              e.attrs.value = label[0] + '|' + e.attrs.value;

            }

          })

          .on('tokenfield:removedtoken', function(e) {

            if (e.attrs.length > 1) {

              var values = $.map(e.attrs, function(attrs) {

                return attrs.value;

              });

              alert(e.attrs.length +

                ' tokens removed! Token values were: ' + values.join(

                  ', '));

            } else {

              alert('Token removed! Token value was: ' + e.attrs.value);

            }

          })

          .tokenfield();

      })();



      // Example Tags Input Objects as tags

      // ----------------------------------

      (function() {

        var cities = new Bloodhound({

          datumTokenizer: Bloodhound.tokenizers.obj.whitespace('text'),

          queryTokenizer: Bloodhound.tokenizers.whitespace,

          prefetch: '../assets/data/cities.json'

        });

        cities.initialize();



        var options = $.extend(true, {}, $.components.getDefaults(

          "tagsinput"), {

          itemValue: 'value',

          itemText: 'text',

          typeaheadjs: [{

            hint: true,

            highlight: true,

            minLength: 1

          }, {

            name: 'cities',

            displayKey: 'text',

            source: cities.ttAdapter()

          }]

        });



        var $input = $('#inputTagsObject');

        $input.tagsinput(options);



        $input.tagsinput('add', {

          "value": 1,

          "text": "Amsterdam",

          "continent": "Europe"

        });

        $input.tagsinput('add', {

          "value": 4,

          "text": "Washington",

          "continent": "America"

        });

        $input.tagsinput('add', {

          "value": 7,

          "text": "Sydney",

          "continent": "Australia"

        });

        $input.tagsinput('add', {

          "value": 10,

          "text": "Beijing",

          "continent": "Asia"

        });

        $input.tagsinput('add', {

          "value": 13,

          "text": "Cairo",

          "continent": "Africa"

        });

      })();



      // Example Tags Input Categorizing

      // -------------------------------

      (function() {

        var cities = new Bloodhound({

          datumTokenizer: Bloodhound.tokenizers.obj.whitespace('text'),

          queryTokenizer: Bloodhound.tokenizers.whitespace,

          prefetch: '../assets/data/cities.json'

        });

        cities.initialize();



        var options = $.extend(true, {}, $.components.getDefaults(

          "tagsinput"), {

          tagClass: function(item) {

            switch (item.continent) {

              case 'Europe':

                return 'label label-primary';

              case 'America':

                return 'label label-danger';

              case 'Australia':

                return 'label label-success';

              case 'Africa':

                return 'label label-default';

              case 'Asia':

                return 'label label-warning';

            }

          },

          itemValue: 'value',

          itemText: 'text',

          typeaheadjs: [{

            hint: true,

            highlight: true,

            minLength: 1

          }, {

            name: 'cities',

            displayKey: 'text',

            source: cities.ttAdapter()

          }]

        });

        var $input = $('#inputTagsCategorizing');



        $input.tagsinput(options);



        $input.tagsinput('add', {

          "value": 1,

          "text": "Amsterdam",

          "continent": "Europe"

        });

        $input.tagsinput('add', {

          "value": 4,

          "text": "Washington",

          "continent": "America"

        });

        $input.tagsinput('add', {

          "value": 7,

          "text": "Sydney",

          "continent": "Australia"

        });

        $input.tagsinput('add', {

          "value": 10,

          "text": "Beijing",

          "continent": "Asia"

        });

        $input.tagsinput('add', {

          "value": 13,

          "text": "Cairo",

          "continent": "Africa"

        });



      })();



      // Example AsSpinner

      // -----------------

      (function() {

        // Custom Format

        var options = $.extend({}, $.components.getDefaults("asSpinner"), {

          format: function(value) {

            return value + '%';

          }

        });



        $('#inputSpinnerCustomFormat').asSpinner(options);

      })();



      // Example Multi-Select

      // --------------------

      (function() {

        // for multi-select public methods example

        $('.multi-select-methods').multiSelect();

        $('#buttonSelectAll').click(function() {

          $('.multi-select-methods').multiSelect('select_all');

          return false;

        });

        $('#buttonDeselectAll').click(function() {

          $('.multi-select-methods').multiSelect('deselect_all');

          return false;

        });

        $('#buttonSelectSome').click(function() {

          $('.multi-select-methods').multiSelect('select', ['Idaho',

            'Montana', 'Arkansas'

          ]);

          return false;

        });

        $('#buttonDeselectSome').click(function() {

          $('.multi-select-methods').multiSelect('select', ['Idaho',

            'Montana', 'Arkansas'

          ]);

          return false;

        });

        $('#buttonRefresh').on('click', function() {

          $('.multi-select-methods').multiSelect('refresh');

          return false;

        });

        $('#buttonAdd').on('click', function() {

          $('.multi-select-methods').multiSelect('addOption', {

            value: 42,

            text: 'test 42',

            index: 0

          });

          return false;

        });

      })();



      // Example Typeahead

      // -----------------

      (function() {

        var states = ['Alabama', 'Alaska', 'Arizona', 'Arkansas',

          'California',

          'Colorado', 'Connecticut', 'Delaware', 'Florida', 'Georgia',

          'Hawaii',

          'Idaho', 'Illinois', 'Indiana', 'Iowa', 'Kansas', 'Kentucky',

          'Louisiana',

          'Maine', 'Maryland', 'Massachusetts', 'Michigan', 'Minnesota',

          'Mississippi', 'Missouri', 'Montana', 'Nebraska', 'Nevada',

          'New Hampshire',

          'New Jersey', 'New Mexico', 'New York', 'North Carolina',

          'North Dakota',

          'Ohio', 'Oklahoma', 'Oregon', 'Pennsylvania', 'Rhode Island',

          'South Carolina', 'South Dakota', 'Tennessee', 'Texas',

          'Utah', 'Vermont',

          'Virginia', 'Washington', 'West Virginia', 'Wisconsin',

          'Wyoming'

        ];



        // basic & Styled

        // --------------

        (function() {

          var substringMatcher = function(strs) {

            return function findMatches(q, cb) {

              var matches, substrRegex;



              // an array that will be populated with substring matches

              matches = [];



              // regex used to determine if a string contains the substring `q`

              substrRegex = new RegExp(q, 'i');



              // iterate through the pool of strings and for any string that

              // contains the substring `q`, add it to the `matches` array

              $.each(strs, function(i, str) {

                if (substrRegex.test(str)) {

                  matches.push(str);

                }

              });



              cb(matches);

            };

          };



          $('#exampleTypeaheadBasic, #exampleTypeaheadStyle').typeahead({

            hint: true,

            highlight: true,

            minLength: 1

          }, {

            name: 'states',

            source: substringMatcher(states)

          });

        })();



        // bloodhound

        // ----------

        (function() {

          var states = ['Alabama', 'Alaska', 'Arizona', 'Arkansas',

            'California',

            'Colorado', 'Connecticut', 'Delaware', 'Florida',

            'Georgia', 'Hawaii',

            'Idaho', 'Illinois', 'Indiana', 'Iowa', 'Kansas',

            'Kentucky', 'Louisiana',

            'Maine', 'Maryland', 'Massachusetts', 'Michigan',

            'Minnesota',

            'Mississippi', 'Missouri', 'Montana', 'Nebraska',

            'Nevada', 'New Hampshire',

            'New Jersey', 'New Mexico', 'New York', 'North Carolina',

            'North Dakota',

            'Ohio', 'Oklahoma', 'Oregon', 'Pennsylvania',

            'Rhode Island',

            'South Carolina', 'South Dakota', 'Tennessee', 'Texas',

            'Utah', 'Vermont',

            'Virginia', 'Washington', 'West Virginia', 'Wisconsin',

            'Wyoming'

          ];

          // constructs the suggestion engine

          var state = new Bloodhound({

            datumTokenizer: Bloodhound.tokenizers.whitespace,

            queryTokenizer: Bloodhound.tokenizers.whitespace,

            // `states` is an array of state names defined in "The Basics"

            local: states

          });



          $('#exampleTypeaheadBloodhound').typeahead({

            hint: true,

            highlight: true,

            minLength: 1

          }, {

            name: 'states',

            source: state

          });

        })();



        // Prefetch typeahead

        // ----------------

        (function() {

          var countries = new Bloodhound({

            datumTokenizer: Bloodhound.tokenizers.whitespace,

            queryTokenizer: Bloodhound.tokenizers.whitespace,

            // url points to a json file that contains an array of country names, see

            // https://github.com/twitter/typeahead.js/blob/gh-pages/data/countries.json

            prefetch: '../assets/data/countries.json'

          });



          // passing in `null` for the `options` arguments will result in the default

          // options being used

          $('#exampleTypeaheadPrefetch').typeahead(null, {

            name: 'countries',

            source: countries

          });

        })();



      })();

    })(document, window, jQuery);

  </script>

</body>

</html>