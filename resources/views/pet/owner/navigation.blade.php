	<!-- START menu-top NAVIGATION -->	
		<header>
	    <div class="first-screen">
	        <header class="header  view-port">
	            <div class="header__left">
	            <a href="/" title="Pets Idetity"><img src=   "{{ asset(env('THEME')) }}/owner/img/logo1.jpg" title="Pet loc" alt="Pet loc"></a>
	            </div>

	                <div class="header__right">
	                   
	                    <div class="widget">
	                       <div class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
												{{ Auth::guard('web_owner')->user()->name }} <span class="caret"></span>
												</a>
												<ul class="dropdown-menu" role="menu">
													<div>
														
														<button  class="ui-button ui-widget ui-corner-all ui-button-icon-only" href="{{ url('/owner_logout') }}"
															onclick="event.preventDefault();
																	 document.getElementById('logout-form').submit();">ВЫХОД</button>
															<form id="logout-form" action="{{ url('/owner_logout') }}" method="POST" style="display: none;">
																{{ csrf_field() }}
															</form>
													</div>
												</ul>
							</div>
	                    </div>
	                    <h3 class="header__subtitle">“Зарегистрируйте своего любимца для жизни”</h3>
	                </div>
	        </header>
	    </div>
	<!-- Конец menu-top NAVIGATION -->