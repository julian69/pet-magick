<?php

	include '../php/classes/BOVettalk.php';
	include '../php/classes/BOLocation.php';
	$vetTalk = new BOVettalk;
	$time = new BOLocation;

	$allArticles = $vetTalk->getAllArticles($_POST['q'],$_POST['from'],10);
	//var_dump($allArticles);
	$t = sizeof($allArticles);
	if($t==0)
	{
		echo '<li><h3>We couldn\'t find what you\'re looking for</h3></li>';
	}
	//$noRepeat = array();
	
	for($i=0; $i<$t; $i++){

		//$j = mt_rand(0, $t -1);
		
		//if(isset($noRepeat) && in_array($j, $noRepeat) ){
			
			//$i--;

		//}else{

			$articleId = $allArticles[$i]["ID_VET_TALK"];

			if(!isset($allArticles[$i]['Pics']['THUMB'])){ $srcImg = 'img/vetTalk/thumb/default.jpg'; }
			else{ $srcImg = 'img/vetTalk/thumb/'.$allArticles[$i]['Pics']['THUMB']; }
			if(!isset($allArticles[$i]['TITLE'])){ $title = '?'; }
			else{ $title =  htmlspecialchars($allArticles[$i]['TITLE']); }
			if(!isset( $allArticles[$i]['CONTENT'])){ $content =  '?'; }
			else{ $content =   htmlspecialchars($allArticles[$i]['CONTENT']); }

			//array_push($noRepeat, $j);
			$date =  $time->FormatDisplayDate($allArticles[$i]['DATE']);
?>
	
				<li class="clearfix">
					<img src= <?php echo $srcImg ?> class="thumb-small side-img"/>
					<div class="content-description bg-txt ">
						<h3><?php echo $title; if(strlen($title)==65) echo '...'?></h3>
						<p><?php echo $content; if(strlen($content)==80) echo '...'; ?></p>
					<p class="gray_date"><small><?php echo $date; ?></small></p>

						<span id="<?php echo $articleId; ?>" class='linkToModule'>View post</span>
						<!-- <a href=<?php //echo '#'.$articleId ?> class='linkToModule'>View post</a> -->
					</div>
				</li>
				
<?php
	////}// end else		
		}// end for



?>