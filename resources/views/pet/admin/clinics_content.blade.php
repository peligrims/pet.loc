@if($clinics)
	<div id="content-page" class="content group">
				            <div class="hentry group">
				                <h2>Редактирование таблици Клиник</h2>
				                <div class="short-table white">
				                    <table style="width: 100%" cellspacing="0" cellpadding="0">
				                        <thead>
				                            <tr>
				                                
				                                <th>N</th>
				                                <th>Название</th>
				                                <th>Адрес</th>
				                                <th>Тел</th>
				                                <th>Email</th>
				                                <th>Руководитель</th>
												<th>Регион</th>
												
				                            </tr>
				                        </thead>
				                        <tbody>
				                            
											@foreach($clinics as $clinic)
											<tr>
				                                <td class="align-left">{{$clinic->id}}</td>
				                                <td class="align-left">{{$clinic->title}}</td>
				                                <td class="align-left">{{$clinic->address}}</td>
												<td class="align-left">{{$clinic->phone}}</td>
												<td class="align-left">{{$clinic->email}}</td>
												<td class="align-left">{{$clinic->leader}}</td>
												<td class="align-left">{{$clinic->region}}</td>
												
												
				                                <td>
												{!! Form::open(['url' => route('admin.clinics.destroy',['clinics'=>$clinic->alias]),'class'=>'form-horizontal','method'=>'POST']) !!}
												    {{ method_field('DELETE') }}
												    {!! Form::button('Удалить', ['class' => 'btn btn-french-5','type'=>'submit']) !!}
												{!! Form::close() !!}
												</td>
											 </tr>	
											@endforeach	
				                           
				                        </tbody>
				                    </table>
				                </div>
								
								{!! Html::link(route('admin.clinics.create'),'Добавить  материал',['class' => 'btn btn-the-salmon-dance-3']) !!}
                                
				                
				            </div>
				            <!-- START COMMENTS -->
				            <div id="comments">
				            </div>
				            <!-- END COMMENTS -->
				        </div>
@endif