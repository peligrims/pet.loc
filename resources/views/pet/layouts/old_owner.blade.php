<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">        
	

	<!-- [favicon] begin -->
	<link rel="shortcut icon" type="image/x-icon" href="{{ asset(env('THEME')) }}/owner/images/favicon.ico" />
	<link rel="icon" type="image/x-icon" href="{{ asset(env('THEME')) }}/owner/images/favicon.ico" />
	<!-- CSSs -->
	<title>Личный кабинет</title>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:700,400&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
	<link href="{{ asset(env('THEME')) }}/owner/css/bootstrap.min.css" rel="stylesheet">
	<link href="{{ asset(env('THEME')) }}/owner/css/style.css" rel="stylesheet">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	
	
	<!-- JAVASCRIPTs -->
	
	<script type ="text/javascript">
		$function() {
	$(".datepicker").datepicker()
			};	
	</script>
	
	
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<!-- START HEAD -->
	</head>
<!-- END HEAD -->
<!-- START BODY -->
<body>
	<header>
		<!-- START MAIN NAVIGATION -->
					@yield('navigation')
		<!-- END MAIN NAVIGATION -->
	</header>	
	<section class="main-content"><!--rb -->
		<div class="container">
			<div class="row">
				<!-- START SideBar -->
					@yield('sideBar')
				<!-- END SideBar -->	
				
				<!-- START CONTENT -->
					@yield('content')
				<!-- END CONTENT -->
				
				<!-- START RightBar -->
				@yield('rightBar')
				<!-- END RightBar -->		
			</div>
		</div>
	</section><!-- /.section -->
		
	<!-- START COPYRIGHT -->	
		@yield('footer')	
	<!-- END COPYRIGHT -->
	
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script src="{{ asset(env('THEME')) }}/owner/js/bootstrap.min.js"></script>
	<script>
		$( "#datepicker" ).datepicker();
	</script>
</body>
 <!-- END BODY -->
</html>