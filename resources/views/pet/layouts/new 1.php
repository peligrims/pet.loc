@if (Route::has('login'))
									<div class="top-right links">
									@auth
										
										<a class="btn btn-secondary btn-lg" href="{{ route('logout') }}">Выход</a>
									@else
									<a class="btn btn-secondary btn-lg" href="{{ route('login') }}">Вход</a>
									<a class="btn btn-secondary btn-lg" href="{{ route('register') }}">Регистрация</a>
									@endauth
									</div>
							@endif
							
							
							if(Gate::allows('VIEW_ADMIN_ARTICLES')) {
				$menu->add('Мои Животные',  array('route'  => 'admin.animals.index'));
			
			}