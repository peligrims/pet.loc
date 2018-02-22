@if($partners)
	<div id="content-page" class="content group">
				            <div class="hentry group">
				                <h2>Редактирование таблици Партнеров</h2>
				                <div class="short-table white">
				                    <table style="width: 100%" cellspacing="0" cellpadding="0">
				                        <thead>
				                            <tr>
				                                
				                                <th>N</th>
				                                <th>Заголовок</th>
				                                <th>Ссылка</th>
				                                <th>Текст</th>
				                                <th>Клиент</th>
				                                <th>Статус</th>
												<th>Дата создания</th>
												<th>Изображение</th>
				                            </tr>
				                        </thead>
				                        <tbody>
				                            
											@foreach($partners as $partner)
											<tr>
				                                <td class="align-left">{{$partner->id}}</td>
				                                <td class="align-left">{{$partner->title}}</td>
				                                <td class="align-left">{{$partner->url}}</td>
												<td class="align-left">{{$partner->text}}</td>
												<td class="align-left">{{$partner->customer}}</td>
												<td class="align-left">{{$partner->status}}</td>
												<td class="align-left">{{$partner->created_at}}</td>
												
												
				                              <td>
												{!! Form::open(['url' => route('admin.partners.destroy',['animals'=>$partner->alias]),'class'=>'form-horizontal','method'=>'POST']) !!}
												    {{ method_field('DELETE') }}
												    {!! Form::button('Удалить', ['class' => 'btn btn-french-5','type'=>'submit']) !!}
												{!! Form::close() !!}
												</td>
											 </tr>	
											@endforeach	
				                           
				                        </tbody>
				                    </table>
				                </div>
								
								{!! Html::link(route('admin.partners.create'),'Добавить  материал',['class' => 'btn btn-the-salmon-dance-3']) !!}
                                
				                
				            </div>
				            <!-- START COMMENTS -->
				            <div id="comments">
				            </div>
				            <!-- END COMMENTS -->
				        </div>
@endif