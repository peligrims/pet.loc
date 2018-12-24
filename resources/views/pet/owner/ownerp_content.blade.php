@if($ownerp)
	<div id="content" class="content">
		<div class="hent group">
			
			
			<div class="main_content">

					<div class="one">
					
					<table class="table-personal" border="0" cellspacing="0">	
					<tr>
                        <td width="300" rowspan="10">
							<div id="imageOwner" >								 
								<img id="photo" src="{{ asset(env('THEME')) }}/images/No_image/No_image1.jpg" class="personal_image" alt='Нет фото пользователя' />                      
							</div>						
						</td>
					</tr>				
					<tr>
						<td >ID: </td> 
						<td>
						{{$ownerp->id }}
						</td>
						<td></td>
					</tr>
					<tr>
                        <td><label for="name" class="personal_text">Имя:  </label></td>
                        
						<td >
                        	{!! Form::text('name',isset($ownerp->name) ? $ownerp->name  : old('name'), ['placeholder'=>'Введите ФИО владельца']) !!}							
                        </td>
                        <td></td>
					</tr>
					<tr>
                        <td><label for="name" class="personal_text">Ник </label></td>
                        
						<td>
                        	{!! Form::text('nick', isset($ownerp->nick) ? $ownerp->nick  : old('nick'), ['placeholder'=>'Введите псевдоним']) !!}						
                        </td>
                        <td></td>
					</tr>
					
					
					
					<tr>
                        <td><label for="name" class="personal_text">Телефон: </label></td>
                        
						<td>
                        	{!! Form::text('phone1', isset($ownerp->phone1) ? $ownerp->phone1  : old('phone1'), ['placeholder'=>'Введите телефон']) !!}							
                        </td>
                        <td></td>
					</tr>
					<tr>
                        <td><label for="name" class="personal_text">Моб телефон:</label></td>
                       
						<td>
                        	{!! Form::text('phone2', isset($ownerp->phone2) ? $ownerp->phone2  : old('phone2'), ['placeholder'=>'Введите телефон моб']) !!}						
                        </td>
                        <td></td>
					</tr>
					<tr>
                        <td><label for="name" class="personal_text">Email:  </label></td>
                        
						<td>
                        	{!! Form::email('email', isset($ownerp->email) ? $ownerp->email  : old('email'), ['placeholder'=>'E-Mail Адрес']) !!}						
                        </td>
                        
					</tr>
					<tr>
                        <td><label for="name" class="personal_text">Страна: </label></td>
                        
						<td>
                        	{!! Form::text('country', isset($ownerp->country) ? $ownerp->country  : old('country'), ['placeholder'=>'Страна']) !!}						
                        </td>
                        
					</tr>
					<tr>
                        <td><label for="name" class="personal_text"> Город: </label></td>
                       
						<td>
                        	{!! Form::text('city', isset($ownerp->city) ? $ownerp->city  : old('city'), ['placeholder'=>'Город']) !!}						
                        </td>
                        
					</tr>
					
					
					
					</table>	
					
					</div>

				
			</div>                 
                 {!! Html::link(route('home.ownerp.edit',['ownerp'=>$ownerp->id]),'Обновить личные данные',['class' => 'btn btn-the-salmon-dance-3']) !!}				               				                                    
		</div>
			@else						
@endif	       	            
	</div>
