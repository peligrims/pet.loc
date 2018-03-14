
				            
				            
				            <div class="widget-first widget recent-posts">
				            
				            @if($animals)
				             	<h3>{{ trans('ru.latest_projects') }}</h3>
				             	<div class="recent-post group">
				            	
				            		@foreach($animals  as $animal)
				            			<div class="hentry-post group">
				            							            			
										
										

										<div class="thumb-img"><img src="{{asset(env('THEME'))}}/images/animals/{{ $animal->image->mini}}"  /><br />
										<a href="{{ route('animals.show',['chip'=>$animal->chip]) }}" title="Section shortcodes &amp; sticky posts!" class="title">Чип: {{ $animal->chip }}</a><br />
										<a href="{{ route('animals.show',['chip'=>$animal->chip]) }}" title="Section shortcodes &amp; sticky posts!" class="title">Кличка:{{ $animal->nick }}</a>
										
										</div>
										
										<br />
																				
										<div class="text">
					                    </div>
										


										</div>
				            			
				            		@endforeach
				            	
				            	</div>
				            @endif

				            <div class="widget-last widget text-image">
							</div>
				            
				        