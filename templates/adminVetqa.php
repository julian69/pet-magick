			<div class="scrollable-list-sections tab-pane " id="vtquestions">

						<?php
							include_once "php/classes/BOQuestions.php";
							$ques = new BOQuestions;
							$aq = $ques->getNewQuestions();
						?>	

						<ul class="mod-content pet-loss-mod-list qa-list">
									
						<?php 
							if(sizeof($aq) > 0)
							{
								for($i = 0; $i<sizeof($aq); $i++)
								{						

									$dNewDate = strtotime($aq[$i]['DATE']);
        						    $date= date('l jS F Y', $dNewDate);
						?>					

											<li class="clearfix">
												<ul>
													<li class="vet-q clearfix">
														<img src= <?php echo '"img/users/thumb/'.$aq[$i]['Users']['Pics']['PIC'] .'"'?> class="thumb-small side-img"/>
														<div class="content-description bg-txt clearfix">														
															<h3><a href=<?php echo '"user-profile.php?u='.$aq[$i]['Users']['ID_USER'] .'"' ?>><?php echo htmlspecialchars($aq[$i]['Users']['NAME'].' '.$aq[$i]['Users']['LASTNAME']); ?></a></h3>
															<p><?php echo htmlspecialchars($aq[$i]['QUESTION']); ?></p>
															<span class="gray_date"><small><?php echo $date; ?></small></span>
														</div>
													</li>
													<li class="vet-a clearfix">
														<div class="q-textarea-cont">
															<span>Write your answer</span>
															<textarea></textarea>
															<input type="hidden" value=<?php echo '"'.$aq[$i]['ID_QUESTION'].'"'?>/>
															<input type="button" value="Submit" class="submit-answer btn-admin btn"/>
														</div>
													</li>
												</ul>
											</li>
									<?php 
											}//end for
										}//end if
										else
										{
											echo "<li>There are no unanswered questions</li>";
										}
									?>

								</ul>
							</div>

							<script type="text/javascript">
									start_scroll_profile('vtquestions', false);
									vetTalkAnswer();
									
							</script>