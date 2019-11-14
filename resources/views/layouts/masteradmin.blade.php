<!DOCTYPE html>
<!--[if IE 8]>    <html class="no-js ie8 ie" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="no-js ie9 ie" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<title>SpeedWin | Admin Backend</title>
		<meta name="description" content="">
		<meta name="author" content="Walking Pixels | www.walkingpixels.com">
		<meta name="robots" content="index, follow">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- jQuery TagsInput Styles -->
		<link rel='stylesheet' type='text/css' href="{{asset('assets/css/plugins/jquery.tagsinput.css')}}" >

		<!-- jQuery jWYSIWYG Styles -->
		<link rel='stylesheet' type='text/css' href="{{asset('assets/css/plugins/jquery.jwysiwyg.css')}}">

		<!-- Bootstrap wysihtml5 Styles -->
		<link rel='stylesheet' type='text/css' href="{{asset('assets/css/plugins/bootstrap-wysihtml5.css')}}">

		<!-- Date range picker Styles -->
		<link rel='stylesheet' type='text/css' href="{{asset('assets/css/plugins/daterangepicker.css')}}">

		<!-- Timepicker picker Styles -->
		<link rel='stylesheet' type='text/css' href="{{asset('assets/css/plugins/timepicker.css')}}">

		<!-- Switch button Styles -->
		<link rel='stylesheet' type='text/css' href="{{asset('assets/css/plugins/switch.css')}}">

		<!-- Styles -->
		<link rel='stylesheet' type='text/css' href="{{asset('assets/css/chromatron-dark.css')}}">

		<!-- Fav and touch icons -->
		<link rel="shortcut icon" href="favicon.ico">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/iimg/icons/apple-touch-icon-114-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/iimg/icons/apple-touch-icon-72-precomposed.png">
		<link rel="apple-touch-icon-precomposed" href="assets/img/icons/apple-touch-icon-57-precomposed.png">

		<!-- JS Libs -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
	 <script>window.jQuery || document.write('<script src="assets/js/libs/jquery.js"><\/script>')</script>
		<script src="{{asset('assets/js/libs/modernizr.js')}}"></script>
		<script src="{{asset('assets/js/libs/selectivizr.js')}}"></script>

		<script>
			$(document).ready(function(){

				// Tooltips for widgets
				$('.widget [title]').tooltip({
					placement: 'right',
					container: 'body'
				});

				// Tooltips for brand & nav toggle button
				$('.nav-toggle, .brand').tooltip({
					placement: 'bottom',
					container: 'body'
				});

				// Tooltips
				$('[title]').tooltip({
					placement: 'top',
					container: 'body'
				});

				// Close button for widgets
				$('.widget').alert();

				// Remove tooltip when widget is closed
				$('.widget').bind('close', function () {
					$(this).find('.close').tooltip('destroy');
				})

				// Tabs
				$('.demoTabs a').click(function (e) {
					e.preventDefault();
					$(this).tab('show');
				})

			});
		</script>


		<style type="text/css">
#st1{
background-color:#e6e6e6;
}
</style>
	</head>
	<body class="fixed-layout">

		<!-- Main page container -->
		<div class="container">

			<!-- Navigation block toggle button -->
			<a href="#" class="nav-toggle" title="On/Off navigation-block"><span class="awe-chevron-left"></span></a>

			<!-- Left (navigation) side -->
			<section class="navigation-block" id="st1">

				<!-- Main page header -->
				<header>

					<!-- Main page logo -->
					<h1><a class="brand" href="login.html">SpeedWin Admin office </a></h1>

					<!-- Main page headline -->
					<p>Uxo Digital 360° Communication </p>

				</header>
				<!-- /Main page header -->

				<!-- User profile -->
				<section class="user-profile" id="st1">

						<img alt="John Pixel avatar" src="assets/img/ogo.png">
						<figcaption>
							<strong><a href="#" class="">SpeedWin</a></strong>
							<em>Administrateur</em>
							<ul>
								<li><a class="btn btn-primary btn-flat" href="#" title="">Site Web</a></li>
								<li><a class="btn btn-primary btn-flat" href="#" title="">Deconnecter</a></li>
							</ul>
						</figcaption>

				</section>
				<!-- /User profile -->

				<!-- Responsive navigation -->
				<a href="#" class="btn btn-navbar btn-large" data-toggle="collapse" data-target=".nav-collapse"><span class="fam-application-form"></span> Forms</a>

				<!-- Main navigation -->
				<nav class="main-navigation nav-collapse" role="navigation" id="st1">
					<ul>

						<li class="current"><a href="{{url('homeadmin')}}" class="no-submenu"><span class="fam-application-form"></span>Acceuil</a></li>
						<li class="current"><a href="{{url('recrutadmin')}}" class="no-submenu"><span class="fam-application-form"></span>Recrutement </a></li>
						<li class="current"><a href="{{url('newsletter')}}" class="no-submenu"><span class="fam-application-form"></span>NewsLetters</a></li>
						<li class="current"><a href="{{url('contact')}}" class="no-submenu"><span class="fam-application-form"></span>Contact</a></li>




						<li><a href="{{url('login')}}" class="no-submenu"><span class="fam-door-in"></span>page Login </a></li>


					</ul>
				</nav>
				<!-- /Main navigation -->

				<!-- Side note -->

				<!-- /Side note -->

				<!-- Side note with separator -->

				<!-- /Side note with separator -->

			</section>
			<!-- /Left (navigation) side -->



@yield('content1')





    		</div>
    		<!-- /Main page container -->

    		<!-- Scripts -->
    		<script src="{{asset('assets/js/navigation.js')}}"></script>

    		<!-- Bootstrap scripts -->
    		<!--
    		<script src="js/bootstrap/bootstrap-tooltip.js"></script>
    		<script src="js/bootstrap/bootstrap-dropdown.js"></script>
    		<script src="js/bootstrap/bootstrap-tab.js"></script>
    		<script src="js/bootstrap/bootstrap-button.js"></script>
    		<script src="js/bootstrap/bootstrap-alert.js"></script>
    		<script src="js/bootstrap/bootstrap-popover.js"></script>
    		<script src="js/bootstrap/bootstrap-collapse.js"></script>
    		<script src="js/bootstrap/bootstrap-transition.js"></script>
    		-->
    		<script src="{{asset('assets/js/bootstrap/bootstrap.min.js')}}"></script>

    		<!-- Fileupload and Inputmask plugin -->
    		<script src="{{asset('assets/js/plugins/fileupload/bootstrap-fileupload.js')}}"></script>
    		<script src="{{asset('assets/js/plugins/inputmask/bootstrap-inputmask.js')}}"></script>

    		<!-- jQuery TagsInput -->
    		<script src="{{asset('assets/js/plugins/tagsInput/jquery.tagsinput.min.js')}}"></script>
    		<script>
    			$(document).ready(function() {

    				$('.tagsinput').tagsInput();

    			});
    		</script>

    		<!-- jQuery jWYSIWYG -->
    		<script src="{{asset('assets/js/plugins/jWYSIWYG/jquery.wysiwyg.js')}}"></script>
    		<script>
    			$(document).ready(function() {

    				$('.wysiwyg').wysiwyg({
    					controls: {
    						bold          : { visible : true },
    						italic        : { visible : true },
    						underline     : { visible : true },
    						strikeThrough : { visible : true },

    						justifyLeft   : { visible : true },
    						justifyCenter : { visible : true },
    						justifyRight  : { visible : true },
    						justifyFull   : { visible : true },

    						indent  : { visible : true },
    						outdent : { visible : true },

    						subscript   : { visible : true },
    						superscript : { visible : true },

    						undo : { visible : true },
    						redo : { visible : true },

    						insertOrderedList    : { visible : true },
    						insertUnorderedList  : { visible : true },
    						insertHorizontalRule : { visible : true },

    						cut   : { visible : true },
    						copy  : { visible : true },
    						paste : { visible : true }
    					},
    					events: {
    						click: function(event) {
    							if ($("#click-inform:checked").length > 0) {
    								event.preventDefault();
    								alert("You have clicked jWysiwyg content!");
    							}
    						}
    					}
    				});

    			});
    		</script>

    		<!-- Wysihtml5 -->
    		<script src="{{asset('assets/js/plugins/wysihtml5/wysihtml5-0.3.0.js')}}"></script>
    		<script src="{{asset('assets/js/plugins/wysihtml5/bootstrap-wysihtml5.js')}}"></script>
    		<script>
    			$(document).ready(function() {

    				$('.wysihtml5').wysihtml5();

    			});
    		</script>

    		<!-- Button switch -->
    		<script src="{{asset('assets/js/plugins/switch/bootstrapSwitch.js')}}"></script>

    		<!-- Colorpicker -->
    		<script src="{{asset('assets/js/plugins/colorpicker/bootstrap-colorpicker.js')}}"></script>
    		<script>
    			$(document).ready(function() {

    				var preview = $('.colorpicker-preview')[0].style;
    				$('.colorpicker').colorpicker().on('changeColor', function(ev){
    					preview.backgroundColor = ev.color.toHex();
    				});

    			});
    		</script>

    		<!-- Datepicker -->
    		<script src="{{asset('assets/js/plugins/datepicker/bootstrap-datepicker.js')}}"></script>
    		<script>
    			$(document).ready(function() {

    				$('.datepicker').datepicker({
    					"autoclose": true
    				});

    			});
    		</script>

    		<!-- Date range picker -->
    		<script type="text/javascript" src="{{asset('assets/js/plugins/dateRangePicker/date.js')}}"></script>
    		<script type="text/javascript" src="{{asset('assets/js/plugins/dateRangePicker/daterangepicker.js')}}"></script>
    		<script type="text/javascript">
    			$(document).ready(function() {

    				$('#demoDaterangePicker').daterangepicker();

    			});
    		</script>

    		<!-- Timepicker -->
    		<script src="{{asset('assets/js/plugins/timepicker/bootstrap-timepicker.min.js')}}"></script>
    		<script>
    			$(document).ready(function() {

    				$('#demoTimepicker').timepicker({
    					minuteStep: 5,
    					showInputs: false,
    					disableFocus: true
    				});

    			});
    		</script>

    		<!-- Form validation -->
    		<script src="{{asset('assets/js/plugins/validation/jqBootstrapValidation.min.js')}}"></script>
    		<script>
    			$(document).ready(function() {

    				$("#demoValidation input").jqBootstrapValidation({
    					submitSuccess: function($form, event) {
    						event.preventDefault();
    					}
    				});

    			});
    		</script>

    	</body>
    </html>
