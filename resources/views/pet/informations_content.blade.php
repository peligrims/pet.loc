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
				                
				                @if($informations)

				                <div id="portfolio" class="portfolio-big-image">
				                    
				                   @foreach($informations as $information) 
				                   
				                   	<div class="hentry work group">
				                        <div class="work-thumbnail">
				                            <div class="nozoom">
				                                <img src="{{ asset(env('THEME')) }}/images/projects/{{ $information->img->max }}" alt="0061" title="0061" />							
				                                <div class="overlay">
				                                    <a class="overlay_img" href="{{ asset(env('THEME')) }}/images/projects/{{ $information->img->path }}" rel="lightbox" title="{{ $information->title }}"></a>
				                                    <a class="overlay_project" href=""></a>
				                                    <span class="overlay_title">{{ $information->title }}</span>
				                                </div>
				                            </div>
				                        </div>
				                        <div class="work-description">
				                            <h3>{{ $information->title }}</h3>
				                            <p>{{ $information->text }}</p>
				                            <div class="clear"></div>
				                            <div class="work-skillsdate">
				                               
				                                <p class="workdate"><span class="label">Customer:</span>{{ $information->customer }}</p>
				
												@if($information->created_at)
													<p class="workdate"><span class="label">Year:</span>{{$information->created_at->format('Y')}}</p>
																				
												@endif
												
				                            </div>
				                          <a class="read-more" href="">View Project</a>        
				                        </div>
				                        <div class="clear"></div>
				                    </div>
				                   
				                   @endforeach
				                   
				                   
				                   <div class="general-pagination group">
						            @if ($informations->lastPage() > 1)
										<ul class="pagination">
										    
										    @if ($informations->currentPage() !== 1)
										    	<a  href="{{ $informations->url(($informations->currentPage()-1)) }}">{{ Lang::get('pagination.previous')}}</a>
										    @endif
										    @for ($i = 1; $i <= $informations->lastPage(); $i++)
										        
										         @if ($informations->currentPage() == $i)
										         <a class="selected disabled">{{ $i }}</a>
										         @else
										         <a href="{{ $informations->url($i) }}">{{ $i }}</a>
										         @endif
										            
										        
										    @endfor
										    
										    @if ($informations->currentPage() !== $informations->lastPage())
										    
										        <a href="{{ $informations->url($informations->currentPage()+1) }}" >{{ Lang::get('pagination.next')}}</a>
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