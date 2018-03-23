@if($animals)
		<div id="content-page" class="content group">
				            <div class="hentry group">
				                <h2>Таблица Животных</h2>
				                <div class="short-table white">
				                    <table style="width: 100%" cellspacing="0" cellpadding="0">
				                        <thead>
				                            <tr>
				                                
				                                <th>N</th>
				                                <th>N чипа</th>
				                                <th>Кличка</th>
				                                <th>Пол</th>
				                                <th>Вид животного</th>
				                                <th>Порода</th>
												<th>Дата рождения</th>
												<th>Изображение</th>
				                            </tr>
				                        </thead>
				                        <tbody>
				                            
											@foreach($animals as $animal)
											<tr>
				                                <td class="align-left">{{$animal->id}}</td>
												<td class="align-left">{!! Html::link(route('admin.animals.edit',['animals'=>$animal->chip]),$animal->chip) !!}</td>
												
				                                <td class="align-left">{{$animal->nick}}</td>
												<td @if ($animal->sex == '1')
												  <p> Самка</p>
													@else
												  <p> Самец</p>
												@endif
												</td>
												<td class="align-left">{{$animal->kinds->title}}</td>
												<td class="align-left">{{$animal->breed}}</td>
												<td class="align-left">{{$animal->birthday}}</td>
												
												<td>
													@if(isset($animal->image->mini))
													{!! Html::image(asset(env('THEME')).'/images/animals/'.$animal->image->mini) !!}
													
												  
													@endif
												</td>
												
				                                <td>
												{!! Form::open(['url' => route('admin.animals.destroy',['animals'=>$animal->chip]),'class'=>'form-horizontal','method'=>'POST']) !!}
												    {{ method_field('DELETE') }}
												    {!! Form::button('Удалить', ['class' => 'btn btn-french-5','type'=>'submit']) !!}
												{!! Form::close() !!}
												</td>
											 </tr>	
											@endforeach	
										

										
				                           
				                        </tbody>
				                    </table>
				                </div>
								<div class="general-pagination group">
				            
											@if($animals->lastPage() > 1) 
												
												@if($animals->currentPage() !== 1)
													<a href="{{ $animals->url(($animals->currentPage() - 1)) }}">{{ Lang::get('pagination.previous') }}</a>
												@endif
												@for($i = 1; $i <= $animals->lastPage(); $i++)
													@if($animals->currentPage() == $i)
														<a class="selected disabled">{{ $i }}</a>
													@else
													<a href="{{ $animals->url($i) }}">{{ $i }}</a>
													@endif		
												@endfor
												@if($animals->currentPage() !== $animals->lastPage())
													<a href="{{ $animals->url(($animals->currentPage() + 1)) }}">{{ Lang::get('pagination.next') }}</a>
												@endif
												
											
											@endif
								</div>
								{!! Html::link(route('admin.animals.create'),'Добавить  материал',['class' => 'btn btn-the-salmon-dance-3']) !!}
                                
				                
				            </div>
			@else
			
			{!! Lang::get('ru.articles_no') !!}
			
		@endif	       	            
		</div>
