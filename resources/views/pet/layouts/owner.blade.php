<!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" class="ie" dir="ltr" lang="en-US">
<![endif]-->
<!--[if IE 7]>
<html id="ie7" class="ie" dir="ltr" lang="en-US">
<![endif]-->
<!--[if IE 8]>
<html id="ie8" class="ie" dir="ltr" lang="en-US">
<![endif]-->
<!--[if IE 9]>
<html id="ie9" class="ie" dir="ltr" lang="en-US">
<![endif]-->
<!--[if gt IE 9]>
<html class="ie" dir="ltr" lang="en-US">
<![endif]-->
<!--[if !IE]>
<html dir="ltr" lang="en-US">
<![endif]-->
    
<!-- START HEAD -->
<head>        
	<title>Чипирование животных</title>
	<meta charset="UTF-8" />
	<meta name="csrf-token" content="{{ csrf_token() }}">  
	<meta name="description" content="Чипирование животных" />
	<!-- Поддержка эксплорера -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<!-- Поддержка адаптивного дизайна -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<!-- [favicon] Начало -->
	<link rel="shortcut icon" type="image/x-icon" href="{{ asset(env('THEME')) }}/images/favicon.ico" />
	<link rel="icon" type="image/x-icon" href="{{ asset(env('THEME')) }}/images/favicon.ico" />

	<!-- CSSs -->
	<!-- Подключение Бутстрапа -->
	<link rel="stylesheet" href="{{ asset(env('THEME')) }}/css/bootstrap/bootstrap-grid.css" />
	<!-- Подключение Карусели -->
	<link rel="stylesheet" href="{{ asset(env('THEME')) }}/css/owl-carousel/owl.carousel.min.css" />
	<!-- Подключение Счетчикобратного отсчета -->
	<link rel="stylesheet" href="{{ asset(env('THEME')) }}/css/countdown/jquery.countdown.css" />	
	<link rel="stylesheet" href="{{ asset(env('THEME')) }}/css/fonts.css" />
	<link rel="stylesheet" href="{{ asset(env('THEME')) }}/css/main.css" />
	<link rel="stylesheet" href="{{ asset(env('THEME')) }}/css/media.css" />
	<!-- Подключение Иконок font-awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
	<!-- Подключение менеджера попап окон -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.css" />

	<!-- CSSs Plugin -->
	<link rel="stylesheet" id="thickbox-css" href="{{ asset(env('THEME')) }}/css/thickbox.css" type="text/css" media="all" />
	<link rel="stylesheet" id="styles-minified-css" href="{{ asset(env('THEME')) }}/css/style-minifield.css" type="text/css" media="all" />
	<link rel="stylesheet" id="buttons" href="{{ asset(env('THEME')) }}/css/buttons.css" type="text/css" media="all" />
	<link rel="stylesheet" id="cache-custom-css" href="{{ asset(env('THEME')) }}/css/cache-custom.css" type="text/css" media="all" />
	<link rel="stylesheet" id="custom-css" href="{{ asset(env('THEME')) }}/css/custom.css" type="text/css" media="all" />

	<!-- FONTs -->

	<link rel="stylesheet" id="google-fonts-css" href="http://fonts.googleapis.com/css?family=Oswald%7CDroid+Sans%7CPlayfair+Display%7COpen+Sans+Condensed%3A300%7CRokkitt%7CShadows+Into+Light%7CAbel%7CDamion%7CMontez&amp;ver=3.4.2" type="text/css" media="all" />
	<link rel='stylesheet' href="{{ asset(env('THEME')) }}/css/font-awesome.css" type='text/css' media='all' />
	<link rel='stylesheet' href="{{ asset(env('THEME')) }}/css/fonts.css" />

	<!-- JAVASCRIPTs -->

	<script type="text/javascript" src="{{ asset(env('THEME')) }}/js/comment-reply.js"></script>
	<script type="text/javascript" src="{{ asset(env('THEME')) }}/js/jquery.quicksand.js"></script>
	<script type="text/javascript" src="{{ asset(env('THEME')) }}/js/jquery.tipsy.js"></script>
	<script type="text/javascript" src="{{ asset(env('THEME')) }}/js/jquery.prettyPhoto.js"></script>
	<script type="text/javascript" src="{{ asset(env('THEME')) }}/js/jquery.cycle.min.js"></script>
	<script type="text/javascript" src="{{ asset(env('THEME')) }}/js/jquery.anythingslider.js"></script>
	<script type="text/javascript" src="{{ asset(env('THEME')) }}/js/jquery.eislideshow.js"></script>
	<script type="text/javascript" src="{{ asset(env('THEME')) }}/js/jquery.easing.js"></script>
	<script type="text/javascript" src="{{ asset(env('THEME')) }}/js/jquery.flexslider-min.js"></script>
	<script type="text/javascript" src="{{ asset(env('THEME')) }}/js/jquery.aw-showcase.js"></script>
	<script type="text/javascript" src="{{ asset(env('THEME')) }}/js/layerslider.kreaturamedia.jquery-min.js"></script>
	<script type="text/javascript" src="{{ asset(env('THEME')) }}/js/shortcodes.js"></script>
	<script type="text/javascript" src="{{ asset(env('THEME')) }}/js/jquery.colorbox-min.js"></script> <!-- nav -->
	<script type="text/javascript" src="{{ asset(env('THEME')) }}/js/jquery.tweetable.js"></script>
	<script type="text/javascript" src="{{ asset(env('THEME')) }}/js/ckeditor/ckeditor.js"></script>
	<script type="text/javascript" src="{{ asset(env('THEME')) }}/js/jquery-ui.js"></script>
	<script type="text/javascript" src="{{ asset(env('THEME')) }}/js/myscripts.js"></script>
	<script type="text/javascript" src="{{ asset(env('THEME')) }}/js/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
	
</head>
<!-- END HEAD -->    


<!-- START BODY -->
  
<!-- START BG SHADOW -->
	<div class="bg-shadow">            
	<!-- START WRAPPER -->
		<div id="wrapper" class="group">                
			<!-- START HEADER -->
			<div id="header" class="group">
				<div class="group inner">                        												
				<!-- START LOGIN -->
				<div class="header_topline">
					<div class="container">
						<div class="col-md-12">
							<div class="row">
								<button class="auth_buttons hidden-md hidden-lg hidden-sm"><i class="fa fa-user"></i></button>
								<div class="top_links">
									
									@if (Auth::guard('web_owner')->guest()) 
									<a  href="{{ url('/owner_login') }}" target="_blank"> Вход /a>
									<a  href="{{ url('/owner_register') }}" target="_blank"> Регистрация </a>	
									@else
									<div class="dropdown">
										
										<ul class="dropdown-menu" role="menu">
											<div>
												<a class="btn btn-secondary btn-lg" href="{{ url('/owner_logout') }}"
													onclick="event.preventDefault();
															 document.getElementById('logout-form').submit();">Выход</a>
													<form id="logout-form" action="{{ url('/owner_logout') }}" method="POST" style="display: none;">
														{{ csrf_field() }}
													</form>
											</div>
										</ul>
									</div>
									@endif
								</div>
								<div class="soc_buttons">
									<a href="//vk.com" target="_blank"><i class="fa fa-vk"></i></a>
									<a href="//w.facebook.com" target="_blank"><i class="fa fa-facebook-square"></i></a>
									<a href="//twitter.com" target="_blank"><i class="fa fa-twitter"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>				
				<!-- END LOGIN -->
				<!-- START LOGO -->
					<div class="container">
						
						
								
								<!-- START MAIN NAVIGATION -->
								<nav class="maian_mnu clearfix">
									<button class="main_mnu_button hidden-md hidden-lg"><i class="fa fa-bars"></i></button>										
									@yield('navigation')	
								</nav>
								<!-- END MAIN NAVIGATION -->  
							
								
							
						
						</div>
					</div>
				<!-- END LOGO -->			               
			<!-- END HEADER --> 												
							<!-- START CONTENT -->
								@yield('content')
							<!-- END CONTENT -->
										
							<!-- START SIDEBAR -->
								@yield('bar')
							<!-- END SIDEBAR -->
																																			
							<!-- START COPYRIGHT -->						
								@yield('footer')						
							<!-- END COPYRIGHT -->
			</div>
			<!-- END WRAPPER -->
		</div>
<!-- END BG SHADOW -->

<script type="text/javascript" src="{{ asset(env('THEME')) }}/js/jquery.custom.js"></script>
<script type="text/javascript" src="{{ asset(env('THEME')) }}/js/contact.js"></script>
<script type="text/javascript" src="{{ asset(env('THEME')) }}/js/jquery.mobilemenu.js"></script> 

</body>
    <!-- END BODY -->
</html>