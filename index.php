<?php 
session_start();
//session_destroy();
$_SESSION['token'] = sha1(uniqid()); 
var_dump($_SESSION);
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

<script src="http://code.jquery.com/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/lib.js"></script>

</head>

<body>
<div id="wrapper">
	<div id="header">
		<!-- yellow bar -->
		<div id="yellow-bar">
			<div class="container_12">
				<!-- logo -->
				<h1 class="grid_2">Pet Magick</h1>
				
				<!-- form login  -->
				<!--IF QUE SE FIJA Q SI ESTA LOGUEADO CARGUE EL MENU DE USUARIO EN VEZ DEL LOGIN --> 
				<?php 
					//session_destroy();

					if(isset($_SESSION['token']) && isset($_SESSION['email']))
					{
						include_once 'templates/userMenu.html';
					}
					else
					{
						include_once 'templates/userLogin.html';
					}
				?>
				
				<!-- END form login -->
			</div>
		</div>
		<!-- END yellow bar -->

		<!-- navbar -->
		<div id="nav-bar">
			<div class="container_12 clearfix">
				<ul class="grid_10 btn-group">
						<li class="btn btn-small btn-danger"><a href="profiles.html">Profiles</a></li>
						<li class="btn btn-small btn-danger"><a href="#">Formums</a></li>
						<li class="btn btn-small btn-danger"><a href="antics.html">Animal Antics</a></li>
						<li class="btn btn-small btn-danger"><a href="vet-talk.html">Vet Talk</a></li>
						<li class="btn btn-small btn-danger"><a href="projects.html">Projects</a></li>
						<li class="btn btn-small btn-danger"><a href="organizations.html">Organizations</a></li>
						<li class="btn btn-small btn-danger"><a href="pet-loss.html">Pet Loss</a></li>
						<li class="btn btn-small btn-danger"><a href="#">Forum</a></li>
						<li class="btn btn-small btn-danger"><a href="#">Blog</a></li>
						<li class="btn btn-small btn-danger">
							<a href="#" class="btn dropdown-toggle btn-small btn-danger" id="dd" data-toggle="dropdown">Groups <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="#">Perro</a></li>
								<li><a href="#">Gato con botas</a></li>
								<li><a href="#">Lazarillo</a></li>
							</ul>
						</li>
				</ul>
				<form class="grid_2">
					<input type="text" placeholder="Find pet lovers" />
				</form>
			</div>
		</div>
		<!-- END navbar -->
	</div>
	<!-- END header -->

	<!-- site content -->
	<div class="container_12" id="content">
		<!-- left wrapper -->
		<div class="grid_7" id="left-wrapper">
			<!-- profiles module -->
			<div class="mod profiles-mod">
				<div class="mod-header">
					<h2>Connect with other pet lovers</h2>
					<span>Connect with other pet lovers in your area, age group, or pet type</span>
				</div>
				<ul class="grid-thumbs clearfix mod-content">
					<!-- user -->
					<li>
						<a href="#">
							<img src="img/users/thumb/1.jpg" class="thumb-mid"/>
							<dl class="hidden">
								<dt>Anna Simpson</dt>
								<dd>Mt Maunganui, New Zealand</dd>
								<dd><strong>Pets: </strong>Dog Cat</dd>
							</dl>
						</a>
					</li>
					<!-- END user -->

					<!-- user -->
					<li>
						<a href="#">
							<img src="img/users/thumb/1.jpg" class="thumb-mid"/>
							<dl class="hidden">
								<dt>Anna Simpson</dt>
								<dd>Rotorua, New Zealand</dd>
								<dd><strong>Pets: </strong>Dog Cat</dd>
							</dl>
						</a>
					</li>
					<!-- END user -->

					<!-- user -->
					<li>
						<a href="#">
							<img src="img/users/thumb/1.jpg" class="thumb-mid"/>
							<dl class="hidden">
								<dt>Anna Simpson</dt>
								<dd>Rotorua, New Zealand</dd>
								<dd><strong>Pets: </strong>Dog Cat</dd>
							</dl>
						</a>
					</li>
					<!-- END user -->

					<!-- user -->
					<li>
						<a href="#">
							<img src="img/users/thumb/1.jpg" class="thumb-mid"/>
							<dl class="hidden">
								<dt>Anna Simpson</dt>
								<dd>Rotorua, New Zealand</dd>
								<dd><strong>Pets: </strong>Dog Cat</dd>
							</dl>
						</a>
					</li>
					<!-- END user -->

					<!-- user -->
					<li>
						<a href="#">
							<img src="img/users/thumb/1.jpg" class="thumb-mid"/>
							<dl class="hidden">
								<dt>Anna Simpson</dt>
								<dd>Rotorua, New Zealand</dd>
								<dd><strong>Pets: </strong>Dog Cat</dd>
							</dl>
						</a>
					</li>
					<!-- END user -->

					<!-- user -->
					<li>
						<a href="#">
							<img src="img/users/thumb/1.jpg" class="thumb-mid"/>
							<dl class="hidden">
								<dt>Anna Simpson</dt>
								<dd>Rotorua, New Zealand</dd>
								<dd><strong>Pets: </strong>Dog Cat</dd>
							</dl>
						</a>
					</li>
					<!-- END user -->

					<!-- user -->
					<li>
						<a href="#">
							<img src="img/users/thumb/1.jpg" class="thumb-mid"/>
							<dl class="hidden">
								<dt>Anna Simpson</dt>
								<dd>Rotorua, New Zealand</dd>
								<dd><strong>Pets: </strong>Dog Cat</dd>
							</dl>
						</a>
					</li>
					<!-- END user -->

					<!-- user -->
					<li>
						<a href="#">
							<img src="img/users/thumb/1.jpg" class="thumb-mid"/>
							<dl class="hidden">
								<dt>Anna Simpson</dt>
								<dd>Rotorua, New Zealand</dd>
								<dd><strong>Pets: </strong>Dog Cat</dd>
							</dl>
						</a>
					</li>
					<!-- END user -->

					<!-- user -->
					<li>
						<a href="#">
							<img src="img/users/thumb/1.jpg" class="thumb-mid"/>
							<dl class="hidden">
								<dt>Anna Simpson</dt>
								<dd>Rotorua, New Zealand</dd>
								<dd><strong>Pets: </strong>Dog Cat</dd>
							</dl>
						</a>
					</li>
					<!-- END user -->

					<!-- user -->
					<li>
						<a href="#">
							<img src="img/users/thumb/1.jpg" class="thumb-mid"/>
							<dl class="hidden">
								<dt>Anna Simpson</dt>
								<dd>Rotorua, New Zealand</dd>
								<dd><strong>Pets: </strong>Dog Cat</dd>
							</dl>
						</a>
					</li>
					<!-- END user -->

					<!-- user -->
					<li>
						<a href="#">
							<img src="img/users/thumb/1.jpg" class="thumb-mid"/>
							<dl class="hidden">
								<dt>Anna Simpson</dt>
								<dd>Rotorua, New Zealand</dd>
								<dd><strong>Pets: </strong>Dog Cat</dd>
							</dl>
						</a>
					</li>
					<!-- END user -->

					<!-- user -->
					<li>
						<a href="#">
							<img src="img/users/thumb/1.jpg" class="thumb-mid"/>
							<dl class="hidden">
								<dt>Anna Simpson</dt>
								<dd>Rotorua, New Zealand</dd>
								<dd><strong>Pets: </strong>Dog Cat</dd>
							</dl>
						</a>
					</li>
					<!-- END user -->

				</ul>
			</div>
			<!-- END profiles module -->

			<!-- projects module -->
			<div class="projects-mod mod">
				<div class="mod-header">
					<h2>Current projects</h2>
					<span>Make a positive contribution to this community</span>
				</div>
				<ul class="mod-content projects-mod-list">
					<li class="clearfix">
						<img src="img/projects/thumb/1.jpg" class="thumb-small side-img"/>
						<div class="content-description bg-txt">
							<h3>Looking for pet owners to visit people in...</h3>
							<!-- a estos <p> habria q ponerle un limite de caracteres desde la consulta sql y un "seguir leyendo" o algo asi. Yo lo hice en el home de induser, por si queres ver a q me refiero... -->
							<p>asdlk aslkd lakdlakd dsk skdsld skdk dslkdkdf kfdlfdk fdfkdlfk ldkf dfñsdfkwoer sdl spdlfld fsñfdk sñf</p>
							<a href="#">View project</a>
						</div>
					</li>
					<li class="clearfix">
						<img src="img/projects/thumb/1.jpg" class="thumb-small side-img"/>
						<div class="content-description bg-txt">
							<h3>Looking for pet owners to visit people in...</h3>
							<p>asdlk aslkd lakdlakd dsk skdsld skdk dslkdkdf kfdlfdk fdfkdlfk ldkf dfñsdfkwoer sdl spdlfld fsñfdk sñf</p>
							<a href="#">View project</a>
						</div>
					</li>
					<li class="clearfix">
						<img src="img/projects/thumb/1.jpg" class="thumb-small side-img"/>
						<div class="content-description bg-txt">
							<h3>Looking for pet owners to visit people in...</h3>
							<p>asdlk aslkd lakdlakd dsk skdsld skdk dslkdkdf kfdlfdk fdfkdlfk ldkf dfñsdfkwoer sdl spdlfld fsñfdk sñf</p>
							<a href="#">View project</a>
						</div>
					</li>
				</ul>
			</div>
			<!-- END projects module -->

		</div>
		<!-- END left wrapper -->

		<!-- right wrapper -->
		<div class="grid_5">
			
			<!-- animal antics module -->
			<div class="mod animal-antics-mod  clearfix"> <!-- animal-antics-mod lo converti de id a class para q sea como profiles-mod ya q compartian algunas cosas -->
				<div class="mod-header">
					<h2>Laugh with other pet lovers</h2>
					<span>Upload those videos of your pet doing crazy funny things!</span>
				</div>
				
				<div class='video mod-content'>
					<!--Puse un div provisorio asi no llorisqueas jajaj. Cuando sepamos como vamos a tomar los valores con js y como mostrar el video lo acomodamos como corresponde. Q opinas? -->
					<div class='wrapper-play'>
						<div class="play"></div>
						<img src="" class="thumb-big video-thumb"/>
					</div>

					<div class="video-last-caption">
						<h3>Hey! let me pass - <span>2:12</span></h3>
						<span><strong>By: </strong> Petter Putter</span>
					</div>
					
				</div>

			</div>
			<!-- END animal antics module -->

			<!-- pet loss module -->
			<div class="mod pet-loss-mod">
				<div class="mod-header">
					<h2>Visit wall of rememerance</h2>
					<span>Leave a message of support for other pet lovers</span>
				</div>
				<ul class="mod-content pet-loss-mod-list">
					<li class="clearfix">
						<img src="img/pet-loss/thumb/1.jpg" class="thumb-small side-img"/>
						<div class="content-description bg-txt corregir">
							<h3>We will mis you</h3>
							<p>asdlk aslkd lakdlakd dsk skdsld skdk dslkdkdf kfdlfdk fdfkdlfk ldkf dfñsdfkwoer sdl spdlfld fsñfdk sñf</p>
							<!-- <a href="#">Suppor this fellow</a> -->
						</div>
					</li>
					<li class="clearfix">
						<img src="img/projects/thumb/1.jpg" class="thumb-small side-img"/>
						<div class="content-description bg-txt corregir">
							<h3>Forever</h3>
							<p>asdlk aslkd lakdlakd dsk skdsld skdk dslkdkdf kfdlfdk fdfkdlfk ldkf dfñsdfkwoer sdl spdlfld fsñfdk sñf</p>
							<!-- <a href="#">Suppor this fellow</a> -->
						</div>
					</li>
					<li class="clearfix">
						<img src="img/projects/thumb/1.jpg" class="thumb-small side-img"/>
						<div class="content-description bg-txt corregir">
							<h3>Coco</h3>
							<p>asdlk aslkd lakdlakd dsk skdsld skdk dslkdkdf kfdlfdk fdfkdlfk ldkf dfñsdfkwoer sdl spdlfld fsñfdk sñf</p>
							<!-- <a href="#">Suppor this fellow</a> -->
						</div>
					</li>
					<li class="clearfix">
						<img src="img/projects/thumb/1.jpg" class="thumb-small side-img"/>
						<div class="content-description bg-txt corregir">
							<h3>Coco</h3>
							<p>asdlk aslkd lakdlakd dsk skdsld skdk dslkdkdf kfdlfdk fdfkdlfk ldkf dfñsdfkwoer sdl spdlfld fsñfdk sñf</p>
							<!-- <a href="#">Suppor this fellow</a> -->
						</div>
					</li>
				</ul>
			</div>
			<!-- END pet loss module -->
			
		</div>
		<!-- END right wrapper -->
		
	</div>
	<!-- END site content -->

	<!-- footer -->
	<div id="footer">
		<div class="container_12 clearfix">
			<div class="grid_11">
				<span class="copyright">Copyright All rights reserved</span>
				<ul class="clearfix">
					<li><a href="#">About Pet Magick</a></li>
					<li><a href="#">Terms and conditions</a></li>
					<li><a href="#">Privacy</a></li>
				</ul>
			</div>
			<div id="dsg" class="grid_1">
				Design
			</div>
		</div>
	</div>
	<!-- END footer -->
</div>
<!-- END wrapper-->

</body>
</html>
