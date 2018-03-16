<div id="content-page" class="content group">
{{ csrf_field() }}
<div class="hentry group">

{!! Form::open(['url' => (isset($equipment->id)) ? route('admin.equipments.update',['equipments'=>$equipment->id]) : route('admin.equipments.store'),'class'=>'contact-form','method'=>'POST','enctype'=>'multipart/form-data']) !!}
    
	<ul>
		<li class="text-field">
			<label for="name-contact-us">
				<span class="label">Название:</span>
				<br />
				
			</label>
			<div class="input-prepend"><span class="add-on"><i class="icon-user"></i></span>
			{!! Form::text('title',isset($equipment->title) ? $equipment->title  : old('title'), ['placeholder'=>'Введите название оборудования']) !!}
			 </div>
		</li>
		
		<li class="textarea-field">
			<label for="message-contact-us">
				 <span class="label">Описание:</span>
			</label>
			<div class="input-prepend"><span class="add-on"><i class="icon-pencil"></i></span>
			{!! Form::textarea('text', isset($equipment->text) ? $equipment->text  : old('text'), ['id'=>'editor2','class' => 'form-control','placeholder'=>'Введите текст страницы']) !!}
			</div>
			<div class="msg-error"></div>
		</li>
		
		@if(isset($equipment->img->path))
			<li class="textarea-field">
				
				<label>
					 <span class="label">Изображения материала:</span>
				</label>
				
				{{ Html::image(asset(env('THEME')).'/images/equipments/'.$equipment->img->path,'',['style'=>'width:400px']) }}
				{!! Form::hidden('old_image',$equipment->img->path) !!}
			
				</li>
		@endif
		
		
		<li class="text-field">
			<label for="name-contact-us">
				<span class="label">Изображение:</span>
				<br />
				<span class="sublabel">Изображение материала</span><br />
			</label>
			<div class="input-prepend">
				{!! Form::file('img', ['class' => 'filestyle','data-buttonText'=>'Выберите изображение','data-buttonName'=>"btn-primary",'data-placeholder'=>"Файла нет"]) !!}
			 </div>
			 
		</li>
		
		
		
		
		@if(isset($equipment->id))
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