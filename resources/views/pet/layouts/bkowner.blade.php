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

</head>
<body>
	<header>
			<!-- START menu-top NAVIGATION -->
		<div class="menu-top">			
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				<a class="navbar-brand" href="/" title="Pets Idetity"><img src="{{ asset(env('THEME')) }}/owner/images/logo1.jpg" title="Pet loc" alt="Pet loc" /></a>	
	  			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	   			 <span class="navbar-toggler-icon"></span>
	 			</button>
	  				<div class="collapse navbar-collapse" id="navbarSupportedContent">     
		    			<form class="form-inline my-2 my-lg-0">
		      				<input class="form-control mr-sm-2" type="search" placeholder="Номер чипа" aria-label="Search">
		      				<button class="btn btn-secondary btn-lg" type="submit">ПОИСК </button>
		    			</form>   				
	    				<ul class="nav navbar-nav navbar-right">								
							<div class="widget-first widget yit_text_quote">
								<div class="text-quote-quote">
									
									@if (Auth::guard('web_owner')->guest()) 
										<a class="btn btn-secondary btn-lg" href="{{ url('/owner_login') }}">  Вход для владельцев     </a>
										<a class="btn btn-secondary btn-lg" href="{{ url('/owner_register') }}">Регистрация для владельцев</a>	
										
										@else
											<div class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
												{{ Auth::guard('web_owner')->user()->name }} <span class="caret"></span>
												</a>
												<ul class="dropdown-menu" role="menu">
													<div>
														<a class="btn btn-secondary btn-lg" href="{{ url('/owner_logout') }}"
															onclick="event.preventDefault();
																	 document.getElementById('logout-form').submit();">
															ВЫХОД
														</a>
															<form id="logout-form" action="{{ url('/owner_logout') }}" method="POST" style="display: none;">
																{{ csrf_field() }}
															</form>
													</div>
												</ul>
											</div>
										@endif
									
								</div>							
								<!-- END LOGIN -->								
							</div>								
						</ul>					   
    				</div>	  				
			</nav>
		</div><!-- Конец menu-top NAVIGATION -->
	</header>	
		<section class="main-content"><!--rb -->
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-xs-6">
					<div class="row">
						<div class="content">							
							<div class="col-md-3  ">
								<div class="sidebar">
									<div class="row">
										<div class="col-xs-3 ">
											<div class="col-sm-3">
												<div class="row">
													<div class="person">
														<div class="person-favorites">
															<span class="glyphicon glyphicon-heart"></span>
														
															<h3>Профиль </h3>
															<div class="person-img img-circle">
																<a href="#"><img src="{{ asset(env('THEME')) }}/owner/img/No_image1.jpg" alt="FOTO"></a>
															</div><!-- /.product-img -->
															
															<div class="person-desc">
																<p>Владелец</p>
																<span>Иванов Иван Иванович</span>
															</div>
														</div>
													</div><!-- /.person -->
												</div>
											</div>
										</div>
										<div class="col-xs-6 col-md-12">
											<div class="row">
												<div class="widget">
													<h3>Настройки</h3>
													<ul>
														<li><a href="#">Ваши питомцы</a></li>
														<li><a href="#">Настройки</a></li>
														<li><a href="#">Местоположение</a></li>
														<li><a href="#">Техическая помощь</a></li>
														<li><a href="#">Приложения</a></li>
														<li><a href="#">Клиники</a></li>										
													</ul>
												</div><!-- .widget -->
											
												<div class="about">
													<h3>О нас</h3>
													<p>Lorem ipsum dolor Решением проблемы безответственного содержания животных в 
													</p>
												</div>
											
											</div>
										</div>
									</div>	
									
								</div> <!-- /.sidebar -->
							</div>
								
						</div>

					</div>					
				</div>
				<div class="col-md-6">
					<h3>Персональные данные</h3>
					<table class="table-personal"  width="25"><!-- Таблица персональных данных -->
						<tr><!-- Строка заглавие -->
							<td width="50"><!-- Первая ячейка -->
							<p>Фамилия</p>
							</td>
							<td width="50"><!-- Вторая ячейка -->
							<input name ="name" type="text" value="Иванов">
							</td>
							<td><!-- Третья ячейка -->
					
							</td>
							<td ><!-- Четвертая ячейка -->
							Пол:
							</td>
							<td><!-- Пятая ячейка -->
							
							</td>
						</tr>
						<tr>
							<td><!-- Первая ячейка -->
							<p>Имя</p>
							</td>
							<td><!-- Вторая ячейка -->
							<input name ="name" type="text" value="Иван">
							</td>
							<td><!--  Третья ячейка -->
							
							</td>
							<td><!-- Четвертая ячейка -->
							Мужской
							</td>
							<td><!--  Пятая ячейка-->
							<input name ="radiobtn0" type="radio" >
							</td>
						</tr>
						<tr>
							<td><!-- Первая ячейка -->
							<p>Отчество</p>
							</td>
							<td><!-- Вторая ячейка -->
							<input name ="name" type="text" value="Иванович">
							</td>
							<td><!--  Третья ячейка-->
							
							</td>
							<td><!-- Четвертая ячейка -->
							Женский
							</td>

							<td><!-- Пятая ячейка -->
							<input name ="radiobtn1" type="radio" >
							</td>
						</tr>
						<tr>
							<td><!-- Первая ячейка -->
							<p>Дата рождения (ДД/ММ/ГГ)</p>	
							</td>
							<td><!-- Вторая ячейка -->
							<p><input type="text" id="datepicker"></p>
							</td>
							<td><!--  Третья ячейка-->
							
							</td>
							<td><!-- Четвертая ячейка -->
						
							</td>
							<td><!-- Пятая ячейка -->
								
							</td>
						</tr>
						<tr>
							<td><!-- Первая ячейка -->
							<p>Электронный адрес</p>
							</td>
							<td><!-- Вторая ячейка -->
							<input  class ="field" name ="email_adress" type="email" value="ivavov@mail.ru">
							</td>
							<td><!--  Третья ячейка-->
					
							</td>
							<td><!-- Четвертая ячейка -->
					
							</td>
							<td><!-- Пятая ячейка -->
					
							</td>
						</tr>
						<tr>
							<td><!-- Первая ячейка -->
								Страна
							</td>
							<td><!-- Вторая ячейка -->
								
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Россия</a>
																		
							</td>
							<td><!--  Третья ячейка-->
								Город
							</td>
							<td><!-- Четвертая ячейка -->
								
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Москва</a>
											
							</td>
							<td><!-- Пятая ячейка -->
					
							</td>
						</tr>
						<tr>
						 	<td width="100"><!-- Первая ячейка -->
							<p>Телефон (без 8,"-")</p>
							</td>
							<td><!-- Вторая ячейка -->
							<input name ="tel" type="text">
							</td>
							<td><!--  Третья ячейка-->
							
							</td>
							<td><!-- Четвертая ячейка -->
						
							</td>
							<td><!-- Пятая ячейка -->
						
							</td>
						</tr>
						<tr>
						 	<td><!-- Первая ячейка -->
							<p>Адрес</p>
							</td>
							<td><!-- Вторая ячейка -->
							
							</td>
							<td><!--  Третья ячейка-->
							
							</td>
							<td><!-- Четвертая ячейка -->
						
							</td>
							<td><!-- Пятая ячейка -->
						
							</td>
						</tr>
						<tr>
						 	
							<td><!-- Вторая ячейка -->
							<p>Улица:<p>
							</td>
							<td><!--  Третья ячейка-->
							<input name ="ulica" type="text">
							</td>
							<td><!-- Четвертая ячейка -->
							<p>Дом:<p>
							</td>
							<td><!-- Пятая ячейка -->
							<input name ="dom" type="text" id="domInput">
							</td>
							<td><!-- Первая ячейка -->							
							</td>
						</tr>
						<tr>
						 	
							<td><!-- Вторая ячейка -->
							<p>Строение/Корпус<p>
							</td>
							<td><!--  Третья ячейка-->
							<input name ="str" type="text">
							</td>
							<td><!-- Четвертая ячейка -->
							<p>Квартира:<p>
							</td>
							<td><!-- Пятая ячейка -->
							<input name ="kv" type="text" Id="kvInput">
							</td>
							<td><!-- Первая ячейка -->							
							</td>
						</tr>
						
					</table><!-- Конец таблиц персональных данных -->
					<div class="info">
						<p>Дополнительная информация<p>
						<textarea name="notes" cols="60" rows="3"></textarea><br>
						<input name ="checkbox" type="checkbox"> Я принимаю условия лицензионного соглашения<br>
						<a href="#">Текст лицензионоого соглашения</a>
												
					</div>		
				</div>
				<div class="col-md-3">
					<div class="row">
						<div class="news">
							<h3>Новости</h3>
							<h5><a href="#">Чипирование животных:</a></h5>
							<p>Миниатюрная электронная радиометка, которую вводят под кожу домашнему животному называется чипом. В России установка чипа не обязательна.В большинстве зоотехнических организаций основным способом идентификации остается клеймо. Но при выезде заграницу или для участия международных племенных программах чип понадобится обязательно. </p>
							<h5><a href="#">Тюменские зоозащитники предлагают бесплатно чипировать домашних животных</a></h5>
							<p>Решением проблемы безответственного содержания животных в Тюмени может стать чипирование собак и кошек. Такой выход из положения общественники, зоозащитники и волонтеры предложили властям и депутатам Тюменской городской думы. </p>
							<h5><a href="#">Тюменские зоозащитники предлагают бесплатно чипировать домашних животных</a></h5>
							<p>Решением проблемы безответственного содержания животных в Тюмени может стать чипирование собак и кошек. Такой выход из положения общественники, зоозащитники и волонтеры предложили властям и депутатам Тюменской городской думы. </p>
						</div>
					</div>
				</div>		
			</div>
		</div>
	</section><!-- /.section -->
	<footer>
		<div class="footer-copyright">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<p>&copy; 2018, Pet.loc Материалы, представленные на сайте.</p>
					</div>
					<div class="col-md-8 text-right ">
						<a href="#"><img src="{{ asset(env('THEME')) }}/owner/img/fb.jpg" alt=""></a>
						<a href="#"><img src="{{ asset(env('THEME')) }}/owner/img/tw.jpg" alt=""></a>
						<a href="#"><img src="{{ asset(env('THEME')) }}/owner/img/fl.jpg" alt=""></a>
						
                            
						
					</div>
				</div>
			</div>
		</div><!-- /.footer-copyright -->
	</footer>

	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script src="{{ asset(env('THEME')) }}/owner/js/bootstrap.min.js"></script>
	<script>
		$( "#datepicker" ).datepicker();
	</script>
</body>
</html>