<div id="content-page" class="content group">
		 <h2>Добавление нового животного</h2>		            
							<div class="hentry group">

{!! Form::open(['url' => (isset($animal->id)) ? route('lk.animals.update',['animals'=>$animal->id]) :route('admin.lk.store'),'class'=>'contact-form','method'=>'POST','enctype'=>'multipart/form-data']) !!}
    
	<ul>
		<li class="text-field">
			<label for="name-contact-us">
				<span class="label">Номер чипа:</span>
				
			</label>
			<div class="input-prepend"><span class="add-on"><i class="icon-animal"></i></span>
			{!! Form::text('chip',isset($animal->chip) ? kind  : old('chip'), ['placeholder'=>'Номер чипа животного']) !!}
			 </div>
		</li>
		
		
		 
		<li class="text-field">
			<label for="name-contact-us">
				<span class="label">Пол животного:</span>
				
			</label>
			<div class="input-prepend"><span class="add-on"><i class="icon-animal"></i></span>
			{!! Form::text('sex',isset($animal->sex) ? sex  : old('sex'), ['placeholder'=>'Пол животного']) !!}
			 </div>
		</li>
		
		<li class="text-field">
			<label for="name-contact-us">
				<span class="label">Вид животного:</span>
				
			<div class="input-prepend"><span class="add-on"><i class="icon-animal"></i></span>
			{!! Form::text('kind',isset($animal->kind) ? kind  : old('kind'), ['placeholder'=>'Введите Вид животного']) !!}
			 </div>
		</li>
		 
		<li class="text-field">
			<label for="name-contact-us">
				<span class="label">Порода животного:</span>
				
			</label>
			<div class="input-prepend"><span class="add-on"><i class="icon-animal"></i></span>
			{!! Form::text('breed',isset($animal->breed) ? kind  : old('breed'), ['placeholder'=>'Введите породу животного']) !!}
			 </div>
		</li>
		
		<li class="text-field">
			<label for="name-contact-us">
				<span class="label">Окрас животного:</span>
				
			</label>
			<div class="input-prepend"><span class="add-on"><i class="icon-animal"></i></span>
			{!! Form::text('color',isset($animal->color) ? color  : old('color'), ['placeholder'=>'Введите Окрас животного']) !!}
			 </div>
		</li>
		
		<li class="textarea-field">
			<label for="message-contact-us">
				 <span class="label">Краткое описание:</span>
			</label>
			<div class="input-prepend"><span class="add-on"><i class="icon-pencil"></i></span>
			{!! Form::textarea('desc', isset($animal->o_desc) ? $article->o_desc  : old('o_desc'), ['id'=>'editor','class' => 'form-control','placeholder'=>'Введите описание']) !!}
			</div>
			<div class="msg-error"></div>
		</li>
		
		@if(isset($animal->image->path))
			<li class="textarea-field">
				
				<label>
					 <span class="label">Изображения материала:</span>
				</label>
				
				{{ Html::image(asset(env('THEME')).'/images/animals/'.$animal->image->path,'',['style'=>'width:400px']) }}
				{!! Form::hidden('old_image',$animal->image->path) !!}
			
				</li>
		@endif
		
		
		<li class="text-field">
			<label for="name-contact-us">
				<span class="label">Изображение:</span>
				
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

</div>
</div>