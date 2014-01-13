		<?php
			$u = new BOUsers;
			$u->getUserData($_GET['u']);
		?>
		<!-- about module -->
		<div class="mod grid_12 profiles-mod nogrid-mod" id="user-about">
			<?php
				if($u->isOwn())
				{
					echo '<a href="#" class="btn btn-edit" id="edit-user-info">Edit</a>';	
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
			</div>
			<div class="mod-content clearfix">
				<div class="pic-caption">
					<a href= <?php echo '"'.$u->getProfilePic().'"'; ?> ><img src=<?php echo '"'. $u->getThumb() .'"'; ?> class="thumb-mid"/></a>
					<h3><?php echo $u->getNameComp() ?></h3>
					<span><?php echo $u->getLocation() ?></span>
				</div>
				<div class="bg-txt">
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
				<div id="user-extra">
					<ul>
						<li><a href="#">Send me a message</a></li>
						<li><a href="#">My projects</a></li>
						<li><a href="#">My tributes</a></li>
					</ul>
				</div>
			</div>
		</div>
		<!-- END about module -->