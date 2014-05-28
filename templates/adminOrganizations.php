								
								<?php
									if(isset($_POST['u']))
										$idUsr = $_POST['u'];
									elseif(isset($_GET['u']))
										$idUsr = $_GET['u'];
								?>
								
								

								<div class="scrollable-list-sections" id="adminOrg">
									<ul class='mod-content pet-loss-mod-list'>	
									
										<?php
										$list = $org->getOrgListByUser($idUsr);
										//var_dump($list); exit;
										$anchor = 'organizations.php?s=0&p=';

										if($list)
										{
											for($i=0; $i<sizeof($list); $i++)
											{

												$name = htmlspecialchars($list[$i]['NAME']);
												$desc = $list[$i]['DESCRIPTION'];

												if(isset($list[$i]['Albums']['Pics'][0]['PIC'])){

													$img = 'img/organizations/thumb/'.$list[$i]['Albums']['Pics'][0]['PIC'];

												}else{

													$img = 'img/users/thumb/default.jpg';
												}
									?>
											<li class="clearfix">
												<img src= <?php echo $img; ?> class="thumb-small side-img"/>
												<div class="content-description bg-txt adm-space">
													<h3><?php echo $name;
													if(strlen($name) == 65) echo '...';?></h3>
													<p><?php echo $desc; 
													if(strlen($desc)== 125) echo '...';?></p>
													<a href=<?php echo $anchor.$list[$i]['ID_ORGANIZATION']; ?> class='linkToModule'>View organization</a>

													<input type="button" value="Edit" name="<?php echo $list[$i]['ID_ORGANIZATION'] ?>" class="btn edit-organization" />
													<input type="button" value="Delete" name="<?php echo $list[$i]['ID_ORGANIZATION']; ?>" class="btn btn-danger delete-org" />
													<!-- <a href=<?php //echo '"#'.$list[$i]['ID_ORGANIZATION'].'"'?> class="btn btn-danger delete-org">Delete</a> -->
												</div>
											</li>
									<?php
											}//end for
										}//end if
									?>
									</ul>
								</div>

								<input type="button" class="btn btn-admin" id="upload-organization" value="Create a new organization" name="<?php echo $idUsr; ?>" /> 
								<!--<a href=<?php //echo '"#'.$idUsr.'"' ?> class="btn" id="upload-organization">Create a new organization</a> -->
<?php
	if(isset($_SESSION['id'])){
?>
			<script type="text/javascript">
			    	uploadOrganization();
			    	editOrganization();
					deleteOrganization();
			</script>
<?php
	}
?>
			<script type="text/javascript">
				start_scroll_profile('adminOrg', false);
			</script>
								