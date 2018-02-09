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
				                            
											@foreach($animals as $article)
											<tr>
				                                <td class="align-left">{{$article->id}}</td>
				                                <td class="align-left">{{$article->chip}}</td>
				                                <td class="align-left">{{$article->nick}}</td>
												<td class="align-left">{{$article->sex}}</td>
												<td class="align-left">{{$article->kind}}</td>
												<td class="align-left">{{$article->breed}}</td>
												<td class="align-left">{{$article->clinic->title}}</td>
												<td class="align-left">{{$article->birthday}}</td>
												
				                                <td>
												{!! Form::open(['url' => route('admin.animals.destroy',['animals'=>$article->alias]),'class'=>'form-horizontal','method'=>'POST']) !!}
												    {{ method_field('DELETE') }}
												    {!! Form::button('Удалить', ['class' => 'btn btn-french-5','type'=>'submit']) !!}
												{!! Form::close() !!}
												</td>
											 </tr>	
											@endforeach	
				                           
				                        </tbody>
				                    </table>
				                </div>
								
								{!! HTML::link(route('admin.animals.create'),'Добавить  материал',['class' => 'btn btn-the-salmon-dance-3']) !!}
                                
				                
				            </div>
				            <!-- START COMMENTS -->
				            <div id="comments">
				            </div>
				            <!-- END COMMENTS -->
				        </div>
@endif