							<?php
								if(isset($_POST['u']))
									$uId = $_POST['u'];
								if(isset($_GET['u']))
									$uId = $_GET['u'];

								if($u->isOwn())
								{
									echo '<a href="#'.$uId.'" class="btn btn-edit" id="edit-user-album">Edit Album</a>';	
								}
							?>	
							<div class="mod-header">
								<h2>My album</h2>
							</div>

							<div class="scrollable-list" id="albumModule">
							<?php
								$aId = $u->getAlbumId();
								if($aId)
								{
							?>
									<ul class="grid-thumbs clearfix mod-content">
							<?php
									$a = $u->getAlbum($aId);
									for($i = 0; $i<sizeof($a); $i++)
									{
							?>
										<li>
											<a class='link-img' href=<?php echo '"'.$a[$i]['PIC'].'"'; ?> >
												<img  class="thumb-mid" src=<?php echo '"'.$a[$i]['THUMB'].'"';?> alt="<?php echo htmlspecialchars($a[$i]['CAPTION'])?>"/>
														<dl class='hidden'>
															<dt>
																<?php 

																	$caption =  htmlspecialchars($a[$i]['CAPTION']);
																	if(strlen($caption) > 33) echo substr($caption , 0, 33).'...';
																	else echo $caption ;
																?>
															</dt>
														<!-- <dd><strong>Pets: </strong>Dog Cat</dd> -->
														</dl>
											</a>
										</li>
							<?php
									}//END FOR
							?>
									</ul>
								
							<?php
								}//END IF								
							?>
							</div>
<?php
	if(isset($_SESSION['id'])){
?>
			<script type="text/javascript">
			   editUserAlbum();
			</script>

<?php
	}
?>
		<script type="text/javascript">
			
			show_img_up("#user-album");
			start_scroll_profile('albumModule', false);

		</script>