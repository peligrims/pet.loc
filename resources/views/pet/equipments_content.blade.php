 <div id="content-page" class="content group">
				            <div class="hentry group">
				                <!--<script>
				                    jQuery(document).ready(function($){
				                    	$('.sidebar').remove();
				                    	
				                    	if( !$('#primary').hasClass('sidebar-no') ) {
				                    		$('#primary').removeClass().addClass('sidebar-no');
				                    	}
				                    	
				                    });
				                </script>-->
				                
				                @if($equipments)

				                <div id="portfolio" class="portfolio-big-image">
				                    
				                   @foreach($equipments as $equipment) 
				                   
				                   	<div class="hentry work group">
				                        <div class="work-thumbnail">
				                            <div class="nozoom">
				                                <img src="{{ asset(env('THEME')) }}/images/equipment/{{ $equipment->img->max }}" alt="0061" title="0061" />							
				                                <div class="overlay">
				                                    <a class="overlay_img" href="{{ asset(env('THEME')) }}/images/equipment/{{ $equipment->img->path }}" rel="lightbox" title="{{ $equipment->title }}"></a>
				                                    <span class="overlay_title">{{ $equipment->title }}</span>
				                                </div>
				                            </div>
				                        </div>
				                        <div class="work-description">
				                            <h3>{{ $equipment->title }}</h3>
				                            <p>{{ $equipment->text }}</p>
				                            <div class="clear"></div>
				                            <div class="work-skillsdate">
				                                <p class="workdate"><span class="label">Customer:</span>{{ $equipment->customer }}</p>
				
												@if($equipment->created_at)
													<p class="workdate"><span class="label">Year:</span>{{$equipment->created_at->format('Y')}}</p>
																				
												@endif
												
				                            </div>
				                        </div>
				                        <div class="clear"></div>
				                    </div>
				                   
				                   @endforeach
				                   
				                   
				                   <div class="general-pagination group">
						            @if ($equipments->lastPage() > 1)
										<ul class="pagination">
										    
										    @if ($equipments->currentPage() !== 1)
										    	<a  href="{{ $equipments->url(($equipments->currentPage()-1)) }}">{{ Lang::get('pagination.previous')}}</a>
										    @endif
										    @for ($i = 1; $i <= $equipments->lastPage(); $i++)
										        
										         @if ($equipments->currentPage() == $i)
										         <a class="selected disabled">{{ $i }}</a>
										         @else
										         <a href="{{ $equipments->url($i) }}">{{ $i }}</a>
										         @endif
										            
										        
										    @endfor
										    
										    @if ($equipments->currentPage() !== $equipments->lastPage())
										    
										        <a href="{{ $equipments->url($equipments->currentPage()+1) }}" >{{ Lang::get('pagination.next')}}</a>
										    @endif
										</ul>
		@endif
						            
						            
						            </div>
				                   

				                </div>
				                
				                @endif
				                <div class="clear"></div>
				            </div>
				            <!-- START COMMENTS -->
				            <div id="comments">
				            </div>
				            <!-- END COMMENTS -->
				        </div>