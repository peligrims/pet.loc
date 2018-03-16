	
@if($ownerp)
	<div id="content-page" class="content group">
		<div class="hentry group">
			
			<h2>Личный кабинет владельца{{$ownerp->name}}</h2>
			<div class="short-table white">
				<table style="width: 100%" cellspacing="0" cellpadding="0">
					<div class="one-third ">
					<h1>Мои настройки:</h1>
						<p><b>ID: </b> {{$ownerp->id }}</p>
						<p><b>Имя владельца: </b> {{$ownerp->name }}</p>
						<p><b>Псевдоним: </b> {{$ownerp->nick }}</p>
						<p><b>Телефон: </b> {{$ownerp->phone1 }}</p>
						<p><b>Моб телефон:</b> {{$ownerp->phone2 }}</p>
						<p><b>Email: </b> {{$ownerp->email }}</p>
						<p><b>Страна: </b> {{$ownerp->country }}</p>
						<p><b>Город: </b> {{$ownerp->city }}</p>
					</div>

				</table>
			</div>                 
                 {!! Html::link(route('home.ownerp.edit',['ownerp'=>$ownerp->id]),'Редактировать личные данные',['class' => 'btn btn-the-salmon-dance-3']) !!}
				               
				                                    
		</div>
			@else
			

			
		@endif	       	            
		</div>
