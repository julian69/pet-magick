<?php

	include_once "php/classes/BOVideos.php";
	$v = new BOVideos;

	$videosList = $v->getVideosList();
	$t = sizeof($videosList);

	for($i=0; $i<$t; $i++){

		$title = $videosList[$i]['TITLE'];
		$caption = $videosList[$i]['CAPTION'];
		$srcImg = $videosList[$i]['THUMBNAIL'];
		$srcVideo = $videosList[$i]['VIDEO']; 
?>

	<li>
		<a class="petVideo" href= <?php  echo 'video/'.$srcVideo; ?> >
			<img src= <?php  echo 'video/'.$srcImg; ?> class='thumb-mid'/>
			<dl class='hidden'>
				<dt><?php echo $title; ?> </dt>
				<dd><?php echo  $caption; ?></dd>
			<!-- <dd><strong>Videos: </strong>Dog Cat</dd> -->
			</dl>
		</a>
	</li>

<?php

	}

