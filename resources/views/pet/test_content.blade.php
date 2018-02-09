@if($animals)
	<div id="content-page" class="content group">
				            <div class="hentry group">
				                <h2>Редактирование таблици Животных</h2>
				                <div class="short-table white">
				                    <table style="width: 100%" cellspacing="0" cellpadding="0">
				                        <thead>
				                            <tr>
				                                
				                                <th>N</th>
				                                <th>N чипа</th>
				                                
				                            </tr>
				                        </thead>
				                        <tbody>
				                            
											@foreach($animals as $article)
											<tr>
				                                <td class="align-left">{{$article->id}}</td>
				                                <td class="align-left">{{$article->chip}}</td>
				                                
												
				                                
											@endforeach	
				                           
				                        </tbody>
				                    </table>
				                </div>
								
                                
				                
				            </div>
				            <!-- START COMMENTS -->
				            
				            <!-- END COMMENTS -->
				        </div>
@endif