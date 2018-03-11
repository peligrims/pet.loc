	
@if($persons)
	<div id="content-page" class="content group">
		<div class="hentry group">
			<h1>Личный кабинет владельц:{{$persons->name}}</h1>
				<h2>Персональные данные владельца{{$persons->name}}</h2>
				<div class="short-table white">
					<table style="width: 100%" cellspacing="0" cellpadding="0">
					   <thead>							
							<ul>
								<li>{{$persons->id}}</li>
								<li>{{$persons->name}}</li>	
								<li>{{$persons->nick}}</li>								
								<li>{{$persons->email}}</li>								
								<li>{{$persons->sex}}</li>								
								<li>{{$persons->password}}</li>								
								<li>{{$persons->country}}</li>								
								<li>{{$persons->city}}</li>								
								<li>{{$persons->birthday}}</li>								
							</ul>							
						</thead>
	

	
						
					</table>
				</div>
                                
				                
				            </div>
			@else
			

			
		@endif	       	            
		</div>
