@if($partners && count($partners) > 0)
	<div id="content-home" class="content group">
				            <div class="hentry group">
				                <div class="section portfolio">
				                    
				                    <h3 class="title">{{trans('ru.ower_partners') }}</h3>
				                    
				                    @foreach($partners as $k=>$item)
				                    
				                    	@if($k==0)
				                    	
				                    		<div class="hentry work group portfolio-sticky portfolio-full-description">
						                        <div class="work-thumbnail">
												
						                            <a class="thumb"><img src="{{ asset(env('THEME')) }}/images/partners/{{ $item->img->path }}" alt="0061" title="0061" /></a>
						                            <div class="work-overlay">
													<div class="overlay">
													<a class="work-overlay" href="{{ $item->url }}"></a>
													</div>		
													
						                            </div>
						                        </div>
						                        
						                    </div>
						                    
						                    <div class="clear"></div>
				                    	
				                    		@continue
				                    	@endif
				                    
				                    
				                    
				                    
				                    @if($k == 1)
				                    	<div class="portfolio-projects">
				                    @endif
				                        
				                        <div class="related_project {{ ($k==4) ? ' related_project_last' : ''}}">
				                            <div class="overlay_a related_img">
				                                <div class="overlay_wrapper">
				                                    <img src="{{ asset(env('THEME')) }}/images/partners/{{ $item->img->mini }}" alt="0061" title="0061" />						
				                                    <div class="overlay">
				                                        <a class="overlay_img" href="{{ asset(env('THEME')) }}/images/partners/{{ $item->img->path}}" rel="lightbox" title=""></a>
				                                        <a class="overlay_project" href="{{ $item->url }}"></a>
				                                        <span class="overlay_title">{{ $item->title }}</span>
				                                    </div>
				                                </div>
				                            </div>
				                            <!--<h4><a href="{{ route('portfolios.show',['alias' => $item->alias])}}">{{ $item->title }}</a></h4>-->
				                            <p>{{ str_limit($item->text,200) }}</p>
				                        </div>
				                        
				                        
				                       @endforeach 
				                    </div>
				                </div>
				                <div class="clear"></div>
				            </div>
				            <!-- START COMMENTS -->
				            <div id="comments">
				            </div>
				            <!-- END COMMENTS -->
				        </div>
@else
<p>Нет</p>				        
@endif

