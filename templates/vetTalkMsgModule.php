		<div class="mod grid_12 vet-talk-mod list">
			<div class="mod-header clearfix">
				<h2>Question time?</h2>
				
				<div id='what' class='ask-qa'> <!-- invertir clase y id aca -->
					<span id="leave-comment">Ask a Question</span>
						<div id='pop-up-click' class='mod'>

							<?php
							if(isset($_SESSION['id']))
							{
							?>
							<form class="form" >  
						        <textarea id="comment-txt" placeholder="Your comment..." ></textarea>  
							    <input type="button" id="send-comment" value="Submit" class="btn" />  
						    	<input type="hidden" id="tr-id" value=<?php //echo '"'.$_GET['t'].'"'; ?> />
						    </form> 
							<?php 
							}
							else
							{
							?>
								<p>You must be logged in to comment</p>
							<?php
							}
							?>
							<div class="arrow-top"></div>
						</div>
						
				</div>
			</div>
			<div class="scrollable-list" id="vetTalkMsgList">
				<ul class="mod-content pet-loss-mod-list qa-list" id="comments-wrapper">
					<?php 
						for($i = 0; $i<sizeof($aq); $i++)
						{						
							//$date =  $time->FormatDisplayDate($aq[$i]['DATE']);
							$dNewDate = strtotime($aq[$i]['DATE']);
						    $date= date('l jS F Y', $dNewDate);

					?>

							<li class="clearfix">
								<ul>
									<li class="vet-q clearfix">
										<a href=<?php echo '"user-profile.php?u='.$aq[$i]['Users']['ID_USER'] .'"' ?> ><img src=<?php echo '"'.$aq[$i]['Users']['Pics']['THUMB'] .'"';?> class="thumb-small side-img"/></a>
										<div class="content-description bg-txt">
											<h3><a href=<?php echo '"user-profile.php?u='.$aq[$i]['Users']['ID_USER'] .'&active=10"' ?>><?php echo  htmlspecialchars($aq[$i]['Users']['NAME'].' '.$aq[$i]['Users']['LASTNAME']); ?></a></h3>
											<p><?php echo  nl2br($aq[$i]['QUESTION']) ?></p>
											<span class="gray_date"><small><?php echo $date; ?></small></span>
										</div>
									</li>
									<li class="vet-a clearfix">
										
											<?php 
											

											

											if(!empty($aq[$i]['Answers']))
											{
												//$date =  $time->FormatDisplayDate($aq[$i]['Answers']['DATE']);
												$dNewDate = strtotime($aq[$i]['Answers']['DATE']);
						    					$date= date('l jS F Y', $dNewDate);
											?>
												<a href=<?php echo '"user-profile.php?u='. htmlspecialchars($aq[$i]['Answers']['Users']['ID_USER']) .'"' ?> ><img src=<?php echo '"'.$aq[$i]['Answers']['Users']['Pics']['THUMB'] .'"'?> class="thumb-small side-img"/></a>
												<div class="content-description bg-txt">
													<h3><a href=<?php echo '"user-profile.php?u='.$aq[$i]['Answers']['Users']['ID_USER'] .'"' ?>><?php echo  htmlspecialchars($aq[$i]['Answers']['Users']['NAME'].' '.$aq[$i]['Answers']['Users']['LASTNAME']) ?></a></h3>
													<p><?php echo  nl2br($aq[$i]['Answers']['ANSWER']) ?></p>
													<span class="gray_date"><small><?php echo $date; ?></small></span>
												</div>
												

											<?php
											}
											else
											{
												echo '<p>This question has not been answered yet</p>';
											}
											?>
										
									</li>
								</ul>
							</li>

					<?php 
						}//end for
					?>

				</ul>
			</div><!-- scrollable -->
		</div>
		<script type="text/javascript">


		$("#vetTalkMsgList").mCustomScrollbar(
		{
			scrollButtons:
			{
				enable: false 
			},

			advanced:
			{
				updateOnContentResize: true,
				horizontalSrcoll: false
			},

			theme:"light-thin"
		});
		</script>
