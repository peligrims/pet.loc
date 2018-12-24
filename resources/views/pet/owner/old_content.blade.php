<div class="col-md-6">
	<h3>Персональные данные</h3>
	{!! Form::open(['url' => (isset($owner->id)) ? route('home.ownerp.update',['owner'=>$owner->id]) : route('home.ownerp.store'),'class'=>'contact-form','method'=>'POST','enctype'=>'multipart/form-data']) !!}
	<table class="table-personal"  width="25"><!-- Таблица персональных данных -->
		<tr><!-- Строка заглавие -->
			<td width="50"><!-- Первая ячейка -->
			<p>Фамилия</p>
			</td>
			<td width="50"><!-- Вторая ячейка ФИО -->
			{!! Form::text('name',isset($owner->name) ? $owner->name  : old('name'), ['placeholder'=>'Введите ФИО владельца']) !!}
			
			</td>
			<td><!-- Третья ячейка -->
	
			</td>
			<td ><!-- Четвертая ячейка -->
			Пол:
			</td>
			<td><!-- Пятая ячейка -->
			
			</td>
		</tr>
		<tr>
			<td><!-- Первая ячейка -->
			
			</td>
			<td><!-- Вторая ячейка -->
			
			</td>
			<td><!--  Третья ячейка -->
			
			</td>
			<td><!-- Четвертая ячейка -->
			Мужской
			</td>
			<td><!--  Пятая ячейка-->
			{{ Form::radio('sex', 'M', $owner->sex == '1') }}
				
			</td>
		</tr>
		<tr>
			<td><!-- Первая ячейка -->
			<p>Псевдоним</p>
			</td>
			<td><!-- Вторая ячейка -->
			{!! Form::text('nick',isset($owner->nick) ? $owner->nick  : old('nick'), ['placeholder'=>'Псевдоним']) !!}
			</td>
			<td><!--  Третья ячейка-->
			
			</td>
			<td><!-- Четвертая ячейка -->
			Женский
			</td>

			<td><!-- Пятая ячейка -->
			{{ Form::radio('sex', 'F', $owner->sex == '0') }}
		
			</td>
		</tr>
		<tr>
			<td><!-- Первая ячейка -->
			<p>Дата рождения (ДД/ММ/ГГ)</p>	
			</td>
			<td><!-- Вторая ячейка -->
			<p><input type="text" id="datepicker"></p>
			</td>
			<td><!--  Третья ячейка-->
			
			</td>
			<td><!-- Четвертая ячейка -->
				
			</td>
			<td><!-- Пятая ячейка -->
				
			</td>
		</tr>
		<tr>
			<td><!-- Первая ячейка -->
			<p>Электронный адрес</p>
			</td>
			<td><!-- Вторая ячейка -->
			{!! Form::text('email', isset($owner->email) ? $owner->email  : old('email'), ['placeholder'=>'E-Mail Адрес']) !!}
			</td>
			<td><!--  Третья ячейка-->
	
			</td>
			<td><!-- Четвертая ячейка -->
	
			</td>
			<td><!-- Пятая ячейка -->
	
			</td>
		</tr>
		<tr>
			<td><!-- Первая ячейка -->
				Страна
			</td>
			<td><!-- Вторая ячейка -->
				
			{!! Form::text('country', isset($owner->country) ? $owner->country  : old('country'), ['placeholder'=>'Страна']) !!}
														
			</td>
			<td><!--  Третья ячейка-->
				Город
			</td>
			<td><!-- Четвертая ячейка -->
				
			{!! Form::text('city', isset($owner->city) ? $owner->city  : old('city'), ['placeholder'=>'Город']) !!}
							
			</td>
			<td><!-- Пятая ячейка -->
	
			</td>
		</tr>
		<tr>
			<td width="100"><!-- Первая ячейка -->
			<p>Телефон </p>
			</td>
			<td><!-- Вторая ячейка -->
			{!! Form::text('phone1', isset($owner->phone1) ? $owner->phone1  : old('phone1'), ['placeholder'=>'Введите телефон ']) !!}
			</td>
			<td><!--  Третья ячейка-->
			

			</td>
			<td><!-- Четвертая ячейка -->
		
			</td>
			<td><!-- Пятая ячейка -->
		
			</td>
		</tr>
		<tr>
			<td><!-- Первая ячейка -->
			<p>Телефон моб </p>
			</td>
			<td><!-- Вторая ячейка -->
			{!! Form::text('phone2', isset($owner->phone2) ? $owner->phone2  : old('phone2'), ['placeholder'=>'Введите телефон моб']) !!}
			</td>
			<td><!--  Третья ячейка-->
			
			</td>
			<td><!-- Четвертая ячейка -->
		
			</td>
			<td><!-- Пятая ячейка -->
		
			</td>
		</tr>
		<tr>
			
			<td><!-- Вторая ячейка -->
			<p>Пароль:<p>
			</td>
			<td><!--  Третья ячейка-->
			{!! Form::password('password') !!}
			</td>
			<td><!-- Четвертая ячейка -->
			<p>Повтор пароля:<p>
			</td>
			<td><!-- Пятая ячейка -->
			{!! Form::password('password_confirmation') !!}
			</td>
			<td><!-- Первая ячейка -->							
			</td>
		</tr>
		<tr>
			
			<td><!-- Вторая ячейка -->
			
			</td>
			<td><!--  Третья ячейка-->
			
			</td>
			<td><!-- Четвертая ячейка -->
			
			<td><!-- Пятая ячейка -->
			
			</td>
			<td><!-- Первая ячейка -->							
			</td>
		</tr>
		
		
	</table><!-- Конец таблиц персональных данных -->
	<div class="info">
		<p>Дополнительная информация<p>
		{!! Form::textarea('hobbies', isset($owner->hobbies) ? $owner->hobbies  : old('hobbies'), ['size' => '80x5']) !!}<br>
		
		<input name ="checkbox" type="checkbox"> Я принимаю условия лицензионного соглашения<br>
		<a href="#">Текст лицензионоого соглашения</a>
		
		
		@if(isset($owner->id))
			<input type="hidden" name="_method" value="PUT">		
			
		@endif

		<p class="submit-button"> 
			{!! Form::button('Сохранить профиль', ['class' => 'btn btn-the-salmon-dance-3','type'=>'submit']) !!}			
		</p>
{!! Form::close() !!}		
	</div>		
</div>