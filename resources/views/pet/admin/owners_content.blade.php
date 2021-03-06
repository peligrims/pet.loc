@if($owners)
	<div id="content-page" class="content group">
				            <div class="hentry group">
				                <h2>Редактирование таблицы владельцев</h2>
				                <div class="short-table white">
				                    <table style="width: 100%" cellspacing="0" cellpadding="0">
				                        <thead>
				                            <tr>
				                                
				                                <th>N</th>
				                                <th>ФИО</th>
				                                <th>Псевдоним</th>
				                                <th>Телефон</th>
				                                <th>Телефон моб</th>
				                                <th>Email</th>
												<th>Страна</th>
												<th>Город</th>
				                            </tr>
				                        </thead>
				                        <tbody>
				                            
											@foreach($owners as $owner)
											<tr>
				                                
				                                <td class="align-left">{!! Html::link(route('admin.owners.edit',['owners'=>$owner->id]),$owner->id) !!}</td>
												<td class="align-left">{{$owner->name}}</td>
				                                <td class="align-left">{{$owner->nick}}</td>
												<td class="align-left">{{$owner->phone1}}</td>
												<td class="align-left">{{$owner->phone2}}</td>
												<td class="align-left">{{$owner->email}}</td>
												<td class="align-left">{{$owner->country}}</td>
												<td class="align-left">{{$owner->city}}</td>
												
				                                <td>
												{!! Form::open(['url' => route('admin.owners.destroy',['owners'=>$owner->id]),'class'=>'form-horizontal','method'=>'POST']) !!}
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
				            
											@if($owners->lastPage() > 1) 
												
												@if($owners->currentPage() !== 1)
													<a href="{{ $owners->url(($owners->currentPage() - 1)) }}">{{ Lang::get('pagination.previous') }}</a>
												@endif
												
												
												
												@if($owners->currentPage() !== $owners->lastPage())
													<a href="{{ $owners->url(($owners->currentPage() + 1)) }}">{{ Lang::get('pagination.next') }}</a>
												@endif
												
											
											@endif
								</div>
								{!! Html::link(route('admin.owners.create'),'Добавить  материал',['class' => 'btn btn-the-salmon-dance-3']) !!}
                                
				                
				            </div>
				            <!-- START COMMENTS -->
				            <div id="comments">
				            </div>
				            <!-- END COMMENTS -->
				        </div>
@endif