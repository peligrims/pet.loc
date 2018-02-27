<div id="content-page" class="content group">

{{ csrf_field() }}
				            <div class="hentry group">

{!! Form::open(['url' => (isset($breed->id)) ? route('admin.breeds.update',['breeds'=>$breed->id]) : route('admin.breeds.store'),'class'=>'contact-form','method'=>'POST','enctype'=>'multipart/form-data']) !!}
    
	<ul>
		<li class="text-field">
			<label for="name-contact-us">
				<span class="label">Название:</span>
				
				
			</label>
			<div class="input-prepend"><span class="add-on"><i class="icon-user"></i></span>
			{!! Form::text('title',isset($breed->title) ? $breed->title  : old('title'), ['placeholder'=>'Введите название породы']) !!}
			 </div>
		 </li>
		 
		 
		 <li class="text-field">
			<label for="name-contact-us">
				<span class="label">Вид животного:</span>
			</label>
			<div class="input-prepend">
			
				{!!  Form::select('kind',    ['1' => 'Собака','2' => 'Кошка','3' => 'Прицы','4' => 'Лошади','5' => 'Земноводные','6' => 'Рептилии','7' => 'Грызуны','8' => 'Рыбы','9' => 'Хорьки','10' => 'СХ Животные'])!!}
			 </div>
			 
		</li>
		 
		 
		 
		 
		@if(isset($breed->id))
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