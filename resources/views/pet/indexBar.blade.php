
				            
				            
				            <div class="widget-first widget recent-posts">
				            
				            @if($animals)
				             	<h3>{{ trans('ru.latest_projects') }}</h3>
				             	<div class="recent-post group">
				            	
				            		@foreach($animals  as $animal)
				            			<div class="hentry-post group">
				            							            			
										
										

										<div class="thumb-img"><img src="{{asset(env('THEME'))}}/images/animals/{{ $animal->image->max}}"  />
										<a href="{{ route('animals.show',['chip'=>$animal->chip]) }}" title="Section shortcodes &amp; sticky posts!" class="title">{{ $animal->chip }}</a>
										<a href="{{ route('animals.show',['chip'=>$animal->chip]) }}" title="Section shortcodes &amp; sticky posts!" class="title">{{ $animal->o_name  }}</a>
										
										</div>
										
										<br />
										
										

										
										<p> {{ $animal->nick }}</p>
										
										<div class="text">
					                    </div>
										


										</div>
				            			
				            		@endforeach
				            	
				            	</div>
				            @endif

				            <div class="widget-last widget text-image">
							</div>
				            
				        