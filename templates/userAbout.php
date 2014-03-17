		<?php
		    
			$u = new BOUsers;
			
			if(isset($_GET['u']))
				$userId = $_GET['u'];
			elseif(isset($_POST['u']))
				$userId = $_POST['u'];
			
			$u->getUserData($userId);
		?>
		<!-- about module -->
		<!--<div class="mod grid_12 profiles-mod nogrid-mod" id="user-about">-->
			<?php
				if($u->isOwn())
				{
					echo '<a href="#'.$userId.'" class="btn btn-edit" id="edit-user-info">Edit</a>';	
				}
			?>	
			<div class="mod-header">
				<h2>
					<strong class="nickname">
						<?php 
							$nick = $u->getNickname();
							if(empty($nick))
								echo $u->getName();
							else
								echo $nick;
						?>
					</strong>About me
				</h2>

				<?php

					if(isset($_SESSION['id'])){

							if(!$u->isOwn()){

									$favorites = $f->getFavorite($_SESSION['id']);
									$t = sizeof($favorites);
									$flag = false;

								if($t > 0){

									for ($i=0; $i < $t; $i++) { 
										

										if($favorites[$i]['ID_USER_FAVORITE'] ==  $_GET['u']){

											$flag = true;
											echo "<div class='myFav alert alert-success' ><span>favorite</span></div>";
											break;

										}
									}

									if($flag == false){
									?>
										<a id='addFavorite' href="<?php echo '#'.$_GET['u']; ?>" class='btn'>Add favorite</a>
										
									<?php
									}

								}else{

									?>
										<a id='addFavorite' href="<?php echo '#'.$_GET['u']; ?>" class='btn'>Add favorite</a>
										
									<?php
								}
							}
						}
					?>
			</div>
			<div class="mod-content clearfix">
				<div class="pic-caption">
					
					<a class='link-img'  href= <?php echo '"'.$u->getProfilePic().'"'; ?> >
						<img src=<?php echo '"'. $u->getThumb() .'"'; ?> class="thumb-mid"/>
					</a>
					<h3><?php echo $u->getNameComp(); ?></h3>
					<span><?php echo $u->getLocation(); ?></span>
				</div>


				<div class="blind">
					<div class="scrollable-text" id="aboutText">
						<div class="bg-txt-featured-modules">
							
							<p>
								<?php 
									$about = $u->getAbout();
									if(empty($about))
										echo 'The user has not entered any description yet';
									else
										echo $about;
								?>
							</p>

						</div>
					</div>
				</div>


				
				<!--
				<div id="user-extra">
					<ul>
						<li><a href="#">Send me a message</a></li>
						<li><a href="#">My projects</a></li>
						<li><a href="#">My tributes</a></li>
					</ul>
				</div>
				-->
			</div>
		<!--</div>-->
		
		<script type="text/javascript">
			editUserProfile();
			
			start_scroll('scrollable-text', false);
		</script>
		<!-- END about module -->