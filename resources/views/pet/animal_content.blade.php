<div id="content-page" class="content group">
				                        
				                        <div class="portfolios hentry work group">
										
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

											</div>
				                            
											
											
											
											
											<div class="work-description">
												<h2> Поиск по номеру идентификационного чипа</h2>
				                <div class="one-third ">
				                    <style>
									img {border: 3px solid #00a8e1;}
									</style>
									
									<div class="image-wrap">
				                        <img src="{{ asset(env('THEME')) }}/images/animals/{{ $animal->image->path}}"  />        
				                    </div>
				                </div>
				                <div class="one-third ">
				                   <h1>Инфо о владельце:</h1>
												
												<p><b>Имя владельца1: </b> {{$owner->name }}</p>
												<p><b>Псевдоним: </b> {{$owner->nick }}</p>
												<p><b>Телефон: </b> {{$owner->phone1 }}</p>
												<p><b>Моб телефон:</b> {{$owner->phone2 }}</p>
												<p><b>Email: </b> {{$owner->email }}</p>
												<p><b>Страна: </b> {{$owner->country }}</p>
												<p><b>Город: </b> {{$owner->city }}</p>
				                </div>
				                <div class="one-third last">
				                    <h1>О животном</h1>									
												<p><b>Кличка животного: </b> {{$animal->nick }}</p>
				                                <p><b>Номер чипа: </b> {{$animal->chip }}</p>
											
												<p><b>Окрас животного</b> {{$animal->color}}</p>
												
												<p><b>Дата рождения</b> {{$animal->birthday }}</p>
												@if ($animal->sex == '1')
												  <p><b>Пол животного</b> Самка</p>
													@else
												  <p><b>Пол животного</b> Самец</p>
												@endif
				                </div>
				                <div class="clear space"></div>
				                <div class="clear line"></div>
												
												
											
				                                <div class="clear"></div>
				                                <div class="work-skillsdate">
				                                    
				                                </div>
				                            </div>
				                            <div class="clear"></div>
				                        </div>
				                        
				                        
				                        
				                        
				            
</div>