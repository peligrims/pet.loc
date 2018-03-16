@if($informations)
	<div id="content-page" class="content group">
				            <div class="hentry group">
				                <h2>Новости портала</h2>
				                <div class="short-table white">
				                    <table style="width: 100%" cellspacing="0" cellpadding="0">
				                        <thead>
				                            <tr>
				                                
				                                <th>N</th>
				                                <th>Заголовок</th>
				                                <th>Текст</th>
				                                <th>Ссылка</th>			
												<th>Дата создания</th>
												<th>Изображение</th>
				                            </tr>
				                        </thead>
				                        <tbody>
				                            
											@foreach($informations as $information)
											<tr>
				                                
												<td class="align-left">{!! Html::link(route('admin.informations.edit',['informations'=>$information->id]),$information->id) !!}</td>				                           
				                                <td class="align-left">{{$information->title}}</td>
												<td class="align-left">{{$information->text}}</td>
												<td class="align-left">{{$information->url}}</td>
												<td class="align-left">{{$information->created_at}}</td>												
												<td>												
													@if(isset($information->image->mini))
													{!! Html::image(asset(env('THEME')).'/images/projects/'.$information->image->mini) !!}																									  
													@endif
												</td>
												
												
												<td>
												{!! Form::open(['url' => route('admin.informations.destroy',['partners'=>$information->id]),'class'=>'form-horizontal','method'=>'POST']) !!}
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
				            
											
								</div>
								
								{!! Html::link(route('admin.informations.create'),'Добавить новость',['class' => 'btn btn-the-salmon-dance-3']) !!}
                                
				                
				            </div>
				            <!-- START COMMENTS -->
				            <div id="comments">
				            </div>
				            <!-- END COMMENTS -->
				        </div>
@endif