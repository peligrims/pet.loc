	<!-- START menu-top NAVIGATION -->
		<div class="menu-top">			
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				<a class="navbar-brand" href="/" title="Pets Idetity"><img src="{{ asset(env('THEME')) }}/owner/images/logo1.jpg" title="Pet loc" alt="Pet loc" /></a>	
	  			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	   			 <span class="navbar-toggler-icon"></span>
	 			</button>
	  				<div class="collapse navbar-collapse" id="navbarSupportedContent">     
		    			
						
						
						
						<div class="achip">
							<form action="{{route('searchSimple')}}" method="GET" class="form-inline my-2 my-lg-0">
								<div class="row">
									<div class="col-xs-10">
										<div class="form-group">
											<div class="col-12 col-md-9 mb-2 mb-md-0">
											<input type="text" class="form-control" name="q" value="{{ old('q') }}" required>
											</div>
										</div>
									</div>
									<div class="col-xs-2">
										<div class="form-group">
											<button class="btn btn-secondary btn-lg" type="submit">ПОИСК </button>
										</div>
									</div>
								</div>
							</form>							    

						</div>
						
						
						
						
						
						
						
						
						
						<!-- <form class="form-inline my-2 my-lg-0">
		      				 <input class="form-control mr-sm-2" type="search" placeholder="Номер чипа" aria-label="Search">
		      				<button class="btn btn-secondary btn-lg" type="submit">ПОИСК </button>
		    			 </form> -->   				
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
		</div>
	<!-- Конец menu-top NAVIGATION -->