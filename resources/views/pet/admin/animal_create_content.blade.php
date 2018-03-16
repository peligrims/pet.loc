<div id="content-page" class="content group">

{{ csrf_field() }}
				            <div class="hentry group">

{!! Form::open(['url' => (isset($animal->chip)) ? route('admin.animals.update',['animals'=>$animal->chip]) : route('admin.animals.store'),'class'=>'contact-form','method'=>'POST','enctype'=>'multipart/form-data']) !!}
    
	<ul>
		<li class="text-field">
			<label for="name-contact-us">
				<span class="label">Чип:</span>
				<br />
				
			</label>
			<div class="input-prepend"><span class="add-on"><i class="icon-user"></i></span>
			{!! Form::text('chip', isset($animal->chip) ? $animal->chip  : old('chip'), ['placeholder'=>'Введите название страницы']) !!}
			 </div>
		 </li>
		<li class="text-field">
			<label for="name-contact-us">
				<span class="label">Кличка:</span>
			</label>
			<div class="input-prepend"><span class="add-on"><i class="icon-user"></i></span>
			{!! Form::text('nick',isset($animal->nick) ? $animal->nick  : old('nick'), ['placeholder'=>'Введите кличку животного']) !!}
			 </div>
		 </li>
		 <li class="text-field">
			<label for="name-contact-us">
				<span class="label">Дата Рождения:</span>
			</label>
			<div class="input-prepend"><span class="add-on"><i class="icon-user"></i></span>
			{!! Form::text('birthday',isset($animal->birthday) ? $animal->birthday  : old('birthday'), ['placeholder'=>'Дата рождения']) !!}
			 </div>
		 </li>
		 <li class="text-field">
			<label for="name-contact-us">
				<span class="label">Место чипирования:</span>
				<br />
				
			</label>
			<div class="input-prepend"><span class="add-on"><i class="icon-user"></i></span>
          {{ Form::select('clinic', [\Corp\Animal::all()->pluck('clinic')->toArray()], null,['class'=>'form-control']) }}			
			</div>
		 </li>
		 
		 <li class="text-field">
			<label for="name-contact-us">
				<span class="label">Вид:</span>
				<br />
				
			</label>
			<div class="input-prepend"><span class="add-on"><i class="icon-user"></i></span>
			{!! Form::select('kind',    ['1' => 'Собака','2' => 'Кошка','3' => 'Прицы','4' => 'Лошади','5' => 'Земноводные','6' => 'Рептилии','7' => 'Грызуны','8' => 'Рыбы','9' => 'Хорьки','10' => 'СХ Животные'])!!}
			 </div>
		 </li>
		 <li class="text-field">
			<label for="name-contact-us">
				<span class="label">Порода:</span>
				<br />
				
			</label>
			<div class="input-prepend"><span class="add-on"><i class="icon-user"></i></span>
			
			{{ Form::select('breed', \Corp\Animal::all()->pluck('breed')->toArray(), null,['class'=>'form-control']) }}
			
		 </li>
		 
		 <li class="text-field">
			<label for="name-contact-us">
				<span class="label">Окрас:</span>
				<br />
				
			</label>
			<div class="input-prepend"><span class="add-on"><i class="icon-user"></i></span>
			{!! Form::text('color', isset($animal->color) ? $animal->color  : old('color'), ['placeholder'=>'Введите псевдоним страницы']) !!}
			 </div>
		 </li>
		 
		 <li class="text-field">
			<label for="message-contact-us">
				 <span class="label">Пол:</span>
			</label>
			<div class="input-prepend"><span class="add-on"><i class="icon-pencil"></i></span>
			{!!  Form::select('sex',    ['1' => 'Самец','2' => 'Самка'])!!}
			</div>
			<div class="msg-error"></div>
		</li>
		
		
		
		
		<li class="text-field">
			<label for="name-contact-us">
				<span class="label">Фотография питомца:</span>
				<br />
				
			</label>
			<div class="input-prepend">
				{!! Form::file('image', ['class' => 'filestyle','data-buttonText'=>'Выберите изображение','data-buttonName'=>"btn-primary",'data-placeholder'=>"Файла нет"]) !!}
			 </div>
			 
		</li>
		
		 
		
		@if(isset($animal->id))
			<input type="hidden" name="_method" value="PUT">		
			
		@endif

		<li class="submit-button"> 
			{!! Form::button('Сохранить', ['class' => 'btn btn-the-salmon-dance-3','type'=>'submit']) !!}			
		</li>
		 
	</ul>
	
    
    
    
    
{!! Form::close() !!}

 <script>
	
</script>
</div>
</div>