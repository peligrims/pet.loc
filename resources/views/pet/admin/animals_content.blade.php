@if($animals)
	<div id="content-page" class="content group">
				            <div class="hentry group">
				                <h2>Редактирование таблици Животных</h2>
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
												<th>Клиника</th>
												<th>Дата рождения</th>
				                            </tr>
				                        </thead>
				                        <tbody>
				                            
											@foreach($animals as $animal)
											<tr>
				                                <td class="align-left">{{$animal->id}}</td>
				                                <td class="align-left">{{$animal->chip}}</td>
				                                <td class="align-left">{{$animal->nick}}</td>
												<td @if ($animal->sex == '1')
												  <p> Самка</p>
													@else
												  <p> Самец</p>
												@endif</td>
												<td class="align-left">{{$animal->kinds->title}}</td>
												<td class="align-left">{{$animal->breeds->title}}</td>
												<td class="align-left">{{$animal->clinics->title}}</td>
												<td class="align-left">{{$animal->birthday}}</td>
												
				                                <td>
												{!! Form::open(['url' => route('admin.animals.destroy',['animals'=>$animal->id]),'class'=>'form-horizontal','method'=>'POST']) !!}
												    {{ method_field('DELETE') }}
												    {!! Form::button('Удалить', ['class' => 'btn btn-french-5','type'=>'submit']) !!}
												{!! Form::close() !!}
												</td>
											 </tr>	
											@endforeach	
				                           
				                        </tbody>
				                    </table>
				                </div>
								
								{!! Html::link(route('admin.animals.create'),'Добавить  материал',['class' => 'btn btn-the-salmon-dance-3']) !!}
                                
				                
				            </div>
				            <!-- START COMMENTS -->
				            <div id="comments">
				            </div>
				            <!-- END COMMENTS -->
				        </div>
@endif