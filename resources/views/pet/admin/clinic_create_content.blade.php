<div id="content-page" class="content group">

{{ csrf_field() }}
				            <div class="hentry group">

{!! Form::open(['url' => (isset($clinic->id)) ? route('admin.clinics.update',['clinics'=>$clinic->id]) : route('admin.clinics.store'),'class'=>'contact-form','method'=>'POST','enctype'=>'multipart/form-data']) !!}
    
	<ul>
		<li class="text-field">
			<label for="name-contact-us">
				<span class="label">Название клиники:</span>
			</label>
			<div class="input-prepend"><span class="add-on"><i class="icon-user"></i></span>
			{!! Form::text('title',isset($clinic->title) ? $clinic->title  : old('title'), ['placeholder'=>'Введите название клиники']) !!}
			 </div>
		 </li>
		 
		 <li class="text-field">
			<label for="name-contact-us">
				<span class="label">Адрес:</span>
			</label>
			<div class="input-prepend"><span class="add-on"><i class="icon-user"></i></span>
			{!! Form::text('address', isset($clinic->address) ? $clinic->address  : old('address'), ['placeholder'=>'Введите адрес']) !!}
			 </div>
		 </li>
		 
		 <li class="text-field">
			<label for="name-contact-us">
				<span class="label">Email:</span>
		
				
			</label>
			<div class="input-prepend"><span class="add-on"><i class="icon-user"></i></span>
			{!! Form::text('email', isset($clinic->email) ? $clinic->email  : old('email'), ['placeholder'=>'Введите email']) !!}
			 </div>
		 </li>
		  <li class="text-field">
			<label for="name-contact-us">
				<span class="label">Телефон:</span>
		
				
			</label>
			<div class="input-prepend"><span class="add-on"><i class="icon-user"></i></span>
			{!! Form::text('phone', isset($clinic->phone) ? $clinic->phone  : old('phone'), ['placeholder'=>'Введите телефон']) !!}
			 </div>
		 </li>
		 <li class="text-field">
			<label for="name-contact-us">
				<span class="label">Руководитель:</span>
				<br />
				
			</label>
			<div class="input-prepend"><span class="add-on"><i class="icon-user"></i></span>
			{!! Form::text('leader', isset($clinic->leader) ? $clinic->leader  : old('leader'), ['placeholder'=>'Введите ФИО Руководителя']) !!}
			 </div>
		 </li>
		 <li class="text-field">
			<label for="name-contact-us">
				<span class="label">Регион:</span>
			</label>
			<div class="input-prepend"><span class="add-on"><i class="icon-user"></i></span>
			{!! Form::text('region',isset($clinic->region) ? $clinic->region  : old('region'), ['placeholder'=>'Введите Региона']) !!}
			 </div>
		 </li>
		 
		
		
		
		
		
		@if(isset($clinic->id))
			<input type="hidden" name="_method" value="PUT">		
			
		@endif

		<li class="submit-button"> 
			{!! Form::button('Сохранить', ['class' => 'btn btn-the-salmon-dance-3','type'=>'submit']) !!}			
		</li>
		 
	</ul>
	
    
    
    
    
{!! Form::close() !!}

 <script>
	CKEDITOR.replace( 'editor' );
	CKEDITOR.replace( 'editor2' );
</script>
</div>
</div>