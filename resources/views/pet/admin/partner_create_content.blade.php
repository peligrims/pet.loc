<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>jQuery UI Datepicker - Display month &amp; year menus</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker({
      changeMonth: true,
      changeYear: true
    });
  } );
  </script>
</head>

</html>
<div id="content-page" class="content group">

{{ csrf_field() }}
				            <div class="hentry group">

{!! Form::open(['url' => (isset($partner->id)) ? route('admin.partners.update',['partners'=>$partner->id]) : route('admin.partners.store'),'class'=>'contact-form','method'=>'POST','enctype'=>'multipart/form-data']) !!}
    
	<ul>
		<li class="text-field">
			<label for="name-contact-us">
				<span class="label">Название:</span>
				<br />
				
			</label>
			<div class="input-prepend"><span class="add-on"><i class="icon-user"></i></span>
			{!! Form::text('title',isset($partner->title) ? $partner->title  : old('title'), ['placeholder'=>'Введите название партнера']) !!}
			 </div>
		 </li>
		 
		 <li class="text-field">
			<label for="name-contact-us">
				<span class="label">Ссылка:</span>
				<br />
				
			</label>
			<div class="input-prepend"><span class="add-on"><i class="icon-user"></i></span>
			{!! Form::text('url', isset($partner->url) ? $partner->url  : old('url'), ['placeholder'=>'Введите ссылку']) !!}
			 </div>
		 </li>
		 
		 
		 
		 <li class="text-field">
			<label for="name-contact-us">
				<span class="label">Статус:</span>
				<br />
				
			</label>
			<div class="input-prepend"><span class="add-on"><i class="icon-user"></i></span>
			{!! Form::text('status', isset($partner->status) ? $partner->status  : old('status'), ['placeholder'=>'Введите статус партнера']) !!}
			 </div>
		 </li>
		 
		 <li class="textarea-field">
			<label for="message-contact-us">
				 <span class="label">Дата создания:</span>
			</label>
			<div class="input-prepend"><span class="add-on"><i class="icon-pencil"></i></span>
				<p>Date: <input type="text" id="datepicker"></p>  
			</div>
			<div class="msg-error"></div>
		</li>
		
		<li class="textarea-field">
			<label for="message-contact-us">
				 <span class="label">Описание партнерской программы:</span>
			</label>
			<div class="input-prepend"><span class="add-on"><i class="icon-pencil"></i></span>
			{!! Form::textarea('text', isset($partner->text) ? $partner->text  : old('text'), ['id'=>'editor','class' => 'form-control','placeholder'=>'Введите текст страницы']) !!}
			</div>
			<div class="msg-error"></div>
		</li>
		
		@if(isset($partner->img->path))
			<li class="textarea-field">
				
				<label>
					 <span class="label">Изображение:</span>
				</label>
				
				{{ Html::image(asset(env('THEME')).'/images/partners/'.$partner->img->path,'',['style'=>'width:400px']) }}
				{!! Form::hidden('old_image',$partner->img->path) !!}
			
				</li>
		@endif
		
		
		<li class="text-field">
			<label for="name-contact-us">
				<span class="label">Изображение:</span>
				<br />
				<span class="sublabel">Изображение</span><br />
			</label>
			<div class="input-prepend">
				{!! Form::file('image', ['class' => 'filestyle','data-buttonText'=>'Выберите изображение','data-buttonName'=>"btn-primary",'data-placeholder'=>"Файла нет"]) !!}
			 </div>
			 
		</li>
		
		 
		
		@if(isset($partner->id))
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