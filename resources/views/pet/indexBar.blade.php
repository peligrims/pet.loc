
				            
				            
				            <div class="widget-first widget recent-posts">
				            
				            @if($animals)
				             	<h3>{{ trans('ru.latest_projects') }}</h3>
				             	<div class="recent-post group">
				            	
				            		@foreach($animals  as $animal)
				            			<div class="hentry-post group">
				            							            			
										


										<div class="text">
										<a href="{{ route('articles.show',['chip'=>$animal->chip]) }}" title="Section shortcodes &amp; sticky posts!" class="title">{{ $animal->chip }}</a>
										<a href="{{ route('articles.show',['chip'=>$animal->chip]) }}" title="Section shortcodes &amp; sticky posts!" class="title">{{ $animal->o_name  }}</a>

										
										<p> {{ $animal->nick }}</p>
										
										
					                             </div>
										


										</div>
				            			
				            		@endforeach
				            	
				            	</div>
				            @endif

				            <div class="widget-last widget text-image">
							</div>
				            
				        