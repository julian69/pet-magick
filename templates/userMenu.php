				
				<!-- user menu -->
				<ul class="grid_4 push_6 clearfix" id="user-menu">
					<li>
						<a href="#" id="logout">Log out</a>
					</li>
					<li>
						<a href="#">My profile</a>
					</li>
					<li>
						<img src="img/users/thumb/1.jpg" />
						<span><?php echo $_SESSION['name'].' '.$_SESSION['lastname'] ?></span>
					</li>
				</ul>
				<!-- END user menu -->
				

				<script type="text/javascript" id="jslogout">

					byid('logout').onclick = function() {
						//EJECUTO ajax sin callback y sin variables
						ajax('POST', 'ajax/logout.php', redirect, false, true);
					}

				</script>