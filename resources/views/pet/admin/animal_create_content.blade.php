<div id="content-page" class="content group">

{{ csrf_field() }}
				            <div class="hentry group">

{!! Form::open(['url' => (isset($animal->id)) ? route('admin.animals.update',['animals'=>$animal->alias]) : route('admin.animals.store'),'class'=>'contact-form','method'=>'POST','enctype'=>'multipart/form-data']) !!}
    
	<ul>
		<li class="text-field">
			<label for="name-contact-us">
				<span class="label">Название:</span>
				<br />
				
			</label>
			<div class="input-prepend"><span class="add-on"><i class="icon-user"></i></span>
			{!! Form::text('title',isset($animal->title) ? $animal->title  : old('title'), ['placeholder'=>'Введите название страницы']) !!}
			 </div>
		 </li>
		 
		 <li class="text-field">
			<label for="name-contact-us">
				<span class="label">Ключевые слова:</span>
				<br />
				
			</label>
			<div class="input-prepend"><span class="add-on"><i class="icon-user"></i></span>
			{!! Form::text('keywords', isset($animal->keywords) ? $animal->keywords  : old('keywords'), ['placeholder'=>'Введите название страницы']) !!}
			 </div>
		 </li>
		 
		 <li class="text-field">
			<label for="name-contact-us">
				<span class="label">Мета описание:</span>
				<br />
				
			</label>
			<div class="input-prepend"><span class="add-on"><i class="icon-user"></i></span>
			{!! Form::text('meta_desc', isset($animal->meta_desc) ? $animal->meta_desc  : old('meta_desc'), ['placeholder'=>'Введите название страницы']) !!}
			 </div>
		 </li>
		 
		 <li class="text-field">
			<label for="name-contact-us">
				<span class="label">Псевдоним:</span>
				<br />
				
			</label>
			<div class="input-prepend"><span class="add-on"><i class="icon-user"></i></span>
			{!! Form::text('alias', isset($animal->alias) ? $animal->alias  : old('alias'), ['placeholder'=>'Введите псевдоним страницы']) !!}
			 </div>
		 </li>
		 
		 <li class="textarea-field">
			<label for="message-contact-us">
				 <span class="label">Краткое описание:</span>
			</label>
			<div class="input-prepend"><span class="add-on"><i class="icon-pencil"></i></span>
			{!! Form::textarea('desc', isset($animal->desc) ? $animal->desc  : old('desc'), ['id'=>'editor','class' => 'form-control','placeholder'=>'Введите текст страницы']) !!}
			</div>
			<div class="msg-error"></div>
		</li>
		
		<li class="textarea-field">
			<label for="message-contact-us">
				 <span class="label">Описание:</span>
			</label>
			<div class="input-prepend"><span class="add-on"><i class="icon-pencil"></i></span>
			{!! Form::textarea('text', isset($animal->text) ? $animal->text  : old('text'), ['id'=>'editor2','class' => 'form-control','placeholder'=>'Введите текст страницы']) !!}
			</div>
			<div class="msg-error"></div>
		</li>
		
		@if(isset($animal->img->path))
			<li class="textarea-field">
				
				<label>
					 <span class="label">Изображения материала:</span>
				</label>
				
				{{ Html::image(asset(env('THEME')).'/images/animals/'.$animal->img->path,'',['style'=>'width:400px']) }}
				{!! Form::hidden('old_image',$animal->img->path) !!}
			
				</li>
		@endif
		
		
		<li class="text-field">
			<label for="name-contact-us">
				<span class="label">Изображение:</span>
				<br />
				<span class="sublabel">Изображение материала</span><br />
			</label>
			<div class="input-prepend">
				{!! Form::file('image', ['class' => 'filestyle','data-buttonText'=>'Выберите изображение','data-buttonName'=>"btn-primary",'data-placeholder'=>"Файла нет"]) !!}
			 </div>
			 
		</li>
		
		<li class="text-field">
			<label for="name-contact-us">
				<span class="label">Категория:</span>
				<br />
				<span class="sublabel">Категория материала</span><br />
			</label>
			
			 
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
	CKEDITOR.replace( 'editor' );
	CKEDITOR.replace( 'editor2' );
</script>
</div>
</div>