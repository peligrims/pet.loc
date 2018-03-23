	
@if($animalp)
		<div id="content-page" class="content group">
				            <div class="hentry group">
				                <h1>Личный кабинет владельц</h1>
								<h2>Зарегистрированные животные владельца</h2>
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
				                            
											
											<tr>
				                                <td class="align-left">{{$animalp->id}}</td>
				                               <td class="align-left">{!! Html::link(route('home.animalp.edit',['owner'=>$animalp->chip]),$animalp->chip) !!}</td>										
				                                <td class="align-left">{{$animalp->nick}}</td>
												<td @if ($animalp->sex == '1')
												  <p> Самка</p>
													@else
												  <p> Самец</p>
												@endif</td>
												<td class="align-left">{{$animalp->kind}}</td>
												<td class="align-left">{{$animalp->breed}}</td>
												<td class="align-left">{!! Form::date('name', \Carbon\Carbon::now());!!}</td>
												<td>
													@if(isset($animalp->image->mini))
													{!! Html::image(asset(env('THEME')).'/images/animals/'.$animalp->image->mini) !!}
													
													@endif
												</td>
												
				                                <td>
												{!! Form::open(['url' => route('home.animalp.destroy',['animals'=>$animalp->chip]),'class'=>'form-horizontal','method'=>'POST']) !!}
												    {{ method_field('DELETE') }}
												    {!! Form::button('Удалить', ['class' => 'btn btn-french-5','type'=>'submit']) !!}
												{!! Form::close() !!}
												</td>
											 </tr>	
																			   
				                        </tbody>
				                    </table>
				                </div>
				                {!! Html::link(route('home.animalp.create'),'Добавить  питомца',['class' => 'btn btn-the-salmon-dance-3']) !!}
				            </div>
			@else
			
			{!! Lang::get('ru.articles_no') !!}
			
		@endif	       	            
		</div>
