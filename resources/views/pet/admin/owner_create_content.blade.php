<div id="content-page" class="content group">

{{ csrf_field() }}
				            <div class="hentry group">

{!! Form::open(['url' => (isset($owner->id)) ? route('admin.owners.update',['owners'=>$owner->id]) : route('admin.owners.store'),'class'=>'contact-form','method'=>'POST','enctype'=>'multipart/form-data']) !!}
    
	<ul>
		<li class="text-field">
			<label for="name-contact-us">
				<span class="label">ФИО:</span>
				<br />
				
			</label>
			<div class="input-prepend"><span class="add-on"><i class="icon-user"></i></span>
			{!! Form::text('name',isset($owner->name) ? $owner->name  : old('name'), ['placeholder'=>'Введите ФИО владельца']) !!}
			 </div>
		 </li>
		 
		 <li class="text-field">
			<label for="name-contact-us">
				<span class="label">Псевдоним:</span>
				<br />
				
			</label>
			<div class="input-prepend"><span class="add-on"><i class="icon-user"></i></span>
			{!! Form::text('nick', isset($owner->nick) ? $owner->nick  : old('nick'), ['placeholder'=>'Введите псевдоним']) !!}
			 </div>
		 </li>
		 
		 
		 
		 <li class="text-field">
			<label for="name-contact-us">
				<span class="label">Телефон:</span>
				<br />
				
			</label>
			<div class="input-prepend"><span class="add-on"><i class="icon-user"></i></span>
			{!! Form::text('phone1', isset($owner->phone1) ? $owner->phone1  : old('phone1'), ['placeholder'=>'Введите телефон']) !!}
			 </div>
		 </li>
		 <li class="text-field">
			<label for="name-contact-us">
				<span class="label">Телефон моб:</span>
				<br />
				
			</label>
			<div class="input-prepend"><span class="add-on"><i class="icon-user"></i></span>
			{!! Form::text('phone2', isset($owner->phone2) ? $owner->phone2  : old('phone2'), ['placeholder'=>'Введите телефон моб']) !!}
			 </div>
		 </li>
		 
		 <li class="textarea-field">
			<label for="message-contact-us">
				 <span class="label">Email:</span>
			</label>
			<div class="input-prepend"><span class="add-on"><i class="icon-pencil"></i></span>
			{!! Form::text('email', isset($owner->email) ? $owner->email  : old('email'), ['placeholder'=>'E-Mail Адрес']) !!}
			</div>
			<div class="msg-error"></div>
		</li>
		
		<li class="textarea-field">
			<label for="message-contact-us">
				 <span class="label">Город:</span>
			</label>
			<div class="input-prepend"><span class="add-on"><i class="icon-pencil"></i></span>
			{!! Form::text('city', isset($owner->city) ? $owner->city  : old('city'), ['placeholder'=>'Город']) !!}
			</div>
			<div class="msg-error"></div>
		</li>
		<li class="textarea-field">
			<label for="message-contact-us">
				 <span class="label">Страна:</span>
			</label>
			<div class="input-prepend"><span class="add-on"><i class="icon-pencil"></i></span>
			{!! Form::text('country', isset($owner->country) ? $owner->country  : old('country'), ['placeholder'=>'Страна']) !!}
			</div>
			<div class="msg-error"></div>
		</li>
		
		
		
		 
		
		@if(isset($owner->id))
			<input type="hidden" name="_method" value="PUT">		
			
		@endif

		<li class="submit-button"> 
			{!! Form::button('Сохранить', ['class' => 'btn btn-the-salmon-dance-3','type'=>'submit']) !!}			
		</li>
		 
	</ul>
	
    
    
    
    
{!! Form::close() !!}

 
</div>
</div>