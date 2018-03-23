<div id="content-page" class="content group">

{{ csrf_field() }}
				            <div class="hentry group">

{!! Form::open(['url' => (isset($ownerp->id)) ? route('home.ownerp.update',['ownerps'=>$ownerp->id]) : route('home.ownerp.store'),'class'=>'contact-form','method'=>'POST','enctype'=>'multipart/form-data']) !!}
    
	<ul>
		<li class="text-field">
			<label for="name-contact-us">
				<span class="label">Ваше имя:</span>
				
				
			</label>
			<div class="input-prepend"><span class="add-on"><i class="icon-user"></i></span>
			{!! Form::text('name',isset($ownerp->name) ? $ownerp->name  : old('name'), ['placeholder'=>'Введите ФИО владельца']) !!}
			 </div>
		 </li>
		 
		 <li class="text-field">
			<label for="name-contact-us">
				<span class="label">Псевдоним:</span>
				<br />
				
			</label>
			<div class="input-prepend"><span class="add-on"><i class="icon-user"></i></span>
			{!! Form::text('nick', isset($ownerp->nick) ? $ownerp->nick  : old('nick'), ['placeholder'=>'Введите псевдоним']) !!}
			 </div>
		 </li>
		 
		 
		 
		 <li class="text-field">
			<label for="name-contact-us">
				<span class="label">Телефон:</span>
				<br />
				
			</label>
			<div class="input-prepend"><span class="add-on"><i class="icon-user"></i></span>
			{!! Form::text('phone1', isset($ownerp->phone1) ? $ownerp->phone1  : old('phone1'), ['placeholder'=>'Введите телефон']) !!}
			 </div>
		 </li>
		 <li class="text-field">
			<label for="name-contact-us">
				<span class="label">Телефон моб:</span>
				<br />
				
			</label>
			<div class="input-prepend"><span class="add-on"><i class="icon-user"></i></span>
			{!! Form::text('phone2', isset($ownerp->phone2) ? $ownerp->phone2  : old('phone2'), ['placeholder'=>'Введите телефон моб']) !!}
			 </div>
		 </li>
		 
		 <li class="textarea-field">
			<label for="message-contact-us">
				 <span class="label">Email:</span>
			</label>
			<div class="input-prepend"><span class="add-on"><i class="icon-pencil"></i></span>
			{!! Form::text('email', isset($ownerp->email) ? $ownerp->email  : old('email'), ['placeholder'=>'E-Mail Адрес']) !!}
			</div>
			<div class="msg-error"></div>
		</li>
		
		<li class="textarea-field">
			<label for="message-contact-us">
				 <span class="label">Город:</span>
			</label>
			<div class="input-prepend"><span class="add-on"><i class="icon-pencil"></i></span>
			{!! Form::text('city', isset($ownerp->city) ? $ownerp->city  : old('city'), ['placeholder'=>'Город']) !!}
			</div>
			<div class="msg-error"></div>
		</li>
		<li class="textarea-field">
			<label for="message-contact-us">
				 <span class="label">Страна:</span>
			</label>
			<div class="input-prepend"><span class="add-on"><i class="icon-pencil"></i></span>
			{!! Form::text('country', isset($ownerp->country) ? $ownerp->country  : old('country'), ['placeholder'=>'Страна']) !!}
			</div>
			<div class="msg-error"></div>
		</li>
		<li class="text-field">
			<label for="name-contact-us">
				<span class="label">Пароль:</span>
				<br />
				
			</label>
			<div class="input-prepend"><span class="add-on"><i class="icon-user"></i></span>
			{!! Form::password('password') !!}
			 </div>
		 </li>
		 
		 <li class="text-field">
			<label for="name-contact-us">
				<span class="label">Повтор пароля:</span>
				<br />
				
			</label>
			<div class="input-prepend"><span class="add-on"><i class="icon-user"></i></span>
			{!! Form::password('password_confirmation') !!}
			 </div>
		 </li>
		
		
		 
		
		@if(isset($ownerp->id))
			<input type="hidden" name="_method" value="PUT">		
			
		@endif

		<li class="submit-button"> 
			{!! Form::button('Сохранить', ['class' => 'btn btn-the-salmon-dance-3','type'=>'submit']) !!}			
		</li>
		 
	</ul>
	
    
    
    
    
{!! Form::close() !!}

 
</div>
</div>