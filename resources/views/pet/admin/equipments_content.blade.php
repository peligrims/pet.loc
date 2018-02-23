@if($equipments)
	<div id="content-page" class="content group">
				            <div class="hentry group">
				                <h2>Оборудование</h2>
				                <div class="short-table white">
				                    <table style="width: 100%" cellspacing="0" cellpadding="0">
				                        <thead>
				                            <tr>
				                                <th class="align-left">ID</th>
				                                <th>Заголовок</th>	
												 <th>Текст</th>
												<th>Изображение</th>		                               
				                                <th></th>
				                            </tr>
				                        </thead>
				                        <tbody>
				                            
											@foreach($equipments as $equipment)
											<tr>
				                                <td class="align-left">{{$equipment->id}}</td>
				                                <td class="align-left">{!! Html::link(route('admin.equipments.edit',['equipments'=>$equipment->alias]),$equipment->title) !!}</td>
				                                <td class="align-left">{{str_limit($equipment->text,200)}}</td>
				                                <td>
													@if(isset($equipment->img->mini))
													{!! Html::image(asset(env('THEME')).'/images/equipment/'.$equipment->img->mini) !!}
													@endif
												</td>
				                                
				                                <td>
												{!! Form::open(['url' => route('admin.equipments.destroy',['equipments'=>$equipment->alias]),'class'=>'form-horizontal','method'=>'POST']) !!}
												    {{ method_field('DELETE') }}
												    {!! Form::button('Удалить', ['class' => 'btn btn-french-5','type'=>'submit']) !!}
												{!! Form::close() !!}
												</td>
											 </tr>	
											@endforeach	
				                           
				                        </tbody>
				                    </table>
				                </div>
								
								{!! HTML::link(route('admin.equipments.create'),'Добавить  материал',['class' => 'btn btn-the-salmon-dance-3']) !!}
                                
				                
				            </div>
				            <!-- START COMMENTS -->
				            <div id="comments">
				            </div>
				            <!-- END COMMENTS -->
				        </div>
@endif