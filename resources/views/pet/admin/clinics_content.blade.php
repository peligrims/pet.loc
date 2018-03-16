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
				                                <td class="align-left">{!! Html::link(route('admin.clinics.edit',['clinic'=>$clinic->id]),$clinic->id) !!}</td>	
												<td class="align-left">{{$clinic->title}}</td>
				                                <td class="align-left">{{$clinic->address}}</td>
												<td class="align-left">{{$clinic->phone}}</td>
												<td class="align-left">{{$clinic->email}}</td>
												<td class="align-left">{{$clinic->leader}}</td>
												<td class="align-left">{{$clinic->region}}</td>
												
												
				                                <td>
												{!! Form::open(['url' => route('admin.clinics.destroy',['clinics'=>$clinic->id]),'class'=>'form-horizontal','method'=>'POST']) !!}
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
				            
											@if($clinics->lastPage() > 1) 
												
												@if($clinics->currentPage() !== 1)
													<a href="{{ $clinics->url(($clinics->currentPage() - 1)) }}">{{ Lang::get('pagination.previous') }}</a>
												@endif
												
												
												
												@if($clinics->currentPage() !== $clinics->lastPage())
													<a href="{{ $clinics->url(($clinics->currentPage() + 1)) }}">{{ Lang::get('pagination.next') }}</a>
												@endif
												
											
											@endif
								</div>
								{!! Html::link(route('admin.clinics.create'),'Добавить  материал',['class' => 'btn btn-the-salmon-dance-3']) !!}
                                
				                
				            </div>
				           
				        </div>
@endif