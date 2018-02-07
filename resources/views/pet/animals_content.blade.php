	<div id="primary" class="sidebar-no">  
				    <div class="inner group">
				        <!-- START CONTENT -->
				        <div id="content-page" class="content group">
				            <h2>Поиск по номеру чипа</h2>
				            <div class="hentry group">
				                <p>Зарегистрируйтесь на сайте, зарегистрируйте карту принадлежащего Вам идентифицированного животного.
Теперь Вы имеете возможность дополнить учетные сведения дополнительной информацией: особые приметы, контактные данные, фотографии. Также имеется возможность открепления учетной карты, в случае продажи животного или смены владельца. Учетные данные карты, вносимые в клинике при регистрации, остаются неизменными.

О всех пожеланиях по улучшению работы Базы Данных Pet.loc просим сообщать на электронный адрес: info@pet.loc</p>
				             <div class="achip">
												<form action="{{route('searchSimple')}}" method="GET" class="search-simple">
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
																<input class="btn   btn-beetle-bus-goes-jamba-juice-4 btn-more-link"  type="submit" value="Искать по номеру чипа"</a> 
															</div>
														</div>
													</div>
												</form>							    


								<!--<input class="s-chip" name="c-chip" type="text" value="Введите номер микрочипа">-->   
				             </div>
							</div>
				            
				        </div>
				        <!-- END CONTENT -->
				        
				    </div>
	</div>