<?php 
	session_start();
	//session_destroy();
	$_SESSION['token'] = sha1(uniqid()); 
	//var_dump($_SESSION);
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Pet Magick</title>

<link rel="stylesheet" href="css/reset.css" type="text/css" />
<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
<link rel="stylesheet" href="css/960_12_col.css" type="text/css" />
<link rel="stylesheet" href="css/layout.css" type="text/css" />

<script type="text/javascript" src="js/lib.js"></script>


</head>

<body>

<div id="wrapper">
	

	<?php 
		include_once 'templates/header.php'; 
	?>


	<!-- site content -->

	<div id="content" class="mod container_12" >

	<div id='what' >
		<a href="#"><p>What is animal antics ?</p></a>
		<div class='active'>
			<div id='pop-up' class='mod grid_4 '>

				<p> 
					It's time to make your pet a star. Show the rest of the world those moments your pet has done those "amazing...zany...pull your hair out" things that only pets can do and you've managed to capture on video. 
				</p>

			</div>
			<div class=' arrow-top'></div>
		</div>
	</div>
		
		
		<!-- lastest videos -->
		<div id="lastest-video-mod" class="mod grid_9">
			
			<div class="mod-header">
				<h2>Latest videos</h2>
			</div>
			
			<ul class='mod-content clearfix'>

				<li class='video'>
					<!--Puse un div provisorio asi no llorisqueas jajaj. Cuando sepamos como vamos a tomar los valores con js y como mostrar el video lo acomodamos como corresponde. Q opinas? -->
					<div class='wrapper-play'>
						<div class="play"></div>
						<img src="" class="thumb-big video-thumb"/>
					</div>

					<div class="video-last-caption">
						<h3>Hey! let me pass - <span>2:12</span></h3>
						<span><strong>By: </strong> Petter Putter</span>
					</div>
					
				</li>


				<li class='video'>
					<!--Puse un div provisorio asi no llorisqueas jajaj. Cuando sepamos como vamos a tomar los valores con js y como mostrar el video lo acomodamos como corresponde. Q opinas? -->
					<div class='wrapper-play'>
						<div class="play"></div>
						<img src="" class="thumb-big video-thumb"/>
					</div>

					<div class="video-last-caption">
						<h3>Hey! let me pass - <span>2:12</span></h3>
						<span><strong>By: </strong> Petter Putter</span>
					</div>
					
				</li>

			</ul>

		</div>
		<!-- End lastest videos -->

		<!-- advertisement -->
		<div id="publi" class="mod grid_3">
		</div>


		
		<!-- videos module -->
		<div class="mod profiles-mod animal-antics-mod grid_12">
			<?php 
						
				include_once 'templates/modHeader.php'; 
			?>
			
			<ul class='grid-thumbs clearfix mod-content' id='ModulesByPet'> 
					<?php 
						
						include_once 'templates/anticsModule.php'; 
					?>
				</ul>	
		</div>
		<!-- END video module -->

	</div>
	<!-- END site content -->

	<?php 
		include_once 'templates/footer.php'; 
	?>

</div>
<!-- END wrapper-->


	<?php 
		include_once 'templates/player.php'; 
	?>


</body>
</html>
