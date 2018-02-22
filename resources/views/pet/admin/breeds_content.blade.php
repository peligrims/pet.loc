@if($breeds)
	<div id="content-page" class="content group">
				            <div class="hentry group">
				                <h2>Породы животных</h2>
				                <div class="short-table white">
				                    <table style="width: 100%" cellspacing="0" cellpadding="0">
				                        <thead>
				                            <tr>
				                                
				                                <th>N</th>
				                                <th>Вид</th>
				                                <th>Порода</th>
				                                
				                        </thead>
				                        <tbody>
				                            
											@foreach($breeds as $breed)
											<tr>
				                                <td class="align-left">{{$breed->id}}</td>
				                                <td class="align-left">{{$breed->kind}}</td>
				                                <td class="align-left">{{$breed->title}}</td>
											<td>
												{!! Form::open(['url' => route('admin.breeds.destroy',['breed'=>$breed->alias]),'class'=>'form-horizontal','method'=>'POST']) !!}
												    {{ method_field('DELETE') }}
												    {!! Form::button('Удалить', ['class' => 'btn btn-french-5','type'=>'submit']) !!}
												{!! Form::close() !!}
												</td>
											 </tr>	
											@endforeach	
				                           
				                        </tbody>
				                    </table>
				                </div>
								
								{!! Html::link(route('admin.breeds.create'),'Добавить  материал',['class' => 'btn btn-the-salmon-dance-3']) !!}
                                
				                
				            </div>
				            <!-- START COMMENTS -->
				            <div id="comments">
				            </div>
				            <!-- END COMMENTS -->
				        </div>
@endif