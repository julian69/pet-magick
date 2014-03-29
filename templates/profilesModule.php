<?php
	include 'php/classes/BOUsers.php';
	$u = new BOUsers;
	$totalRec = $u->totalRecords('*');
	$totalPag = ceil($totalRec/28);

	$totalPag--;
	$firstPag = rand(0, $totalPag);
	$r = $u->searchUsers('*',$firstPag*28);

if($r)
{
	shuffle($r);
	for($i = 0; $i < sizeof($r); $i++)
	{
		if(isset($r[$i]['Pics']))
		{
			$thumb = 'img/users/thumb/'.$r[$i]['Pics']['PIC'];
		}
		else
		{
			$thumb = 'img/users/thumb/default.jpg';	
		}
		?>
			<li>
				<a href="<?php echo "user-profile.php?u=".$r[$i]['ID_USER']; ?>" >
					<img src= "<?php  echo $thumb ?>" class='thumb-mid'/>
					<dl class='hidden'>
						<dt><?php echo $r[$i]['NAME']." ".$r[$i]['LASTNAME']; ?> </dt>
						<dd><?php echo  $r[$i]['Cities']['City'].", ".$r[$i]['Countries']['Country']; ?></dd>
					<!-- <dd><strong>Pets: </strong>Dog Cat</dd> -->
					</dl>
				</a>
			</li>
		<?php 
	}
}

	
<<<<<<< HEAD
=======
	for($i=0; $i < $limit; $i++){

		$usersList = $p->getUserList();

		if(isset($noRepeat) && in_array( $usersList['ID_USER'], $noRepeat)){
			
			$i--;

		}else{

			$name = $usersList['NAME'];
			$lastName = $usersList['LASTNAME'];
			$userId = $usersList['ID_USER'];

			if(!isset($usersList['Pics']['PIC'])){ $srcImg = 'img/users/thumb/default.jpg'; }
			else{ $srcImg = 'img/users/thumb/'.$usersList['Pics']['PIC']; }
			if(!isset($usersList['Cities']['City'])){ $city = '?'; }
			else{ $city = $usersList['Cities']['City']; }
			if(!isset( $usersList['Countries']['Country'])){ $country =  '?'; }
			else{ $country =  $usersList['Countries']['Country']; }

			array_push($noRepeat, $userId);
		
?>

	<li>
		<a href= <?php echo "user-profile.php?u=".$userId; ?> >
			<img src= <?php  echo $srcImg; ?> class='thumb-mid'/>
			<dl class='hidden'>
				<dt><?php echo $name." ".$lastName; ?> </dt>
				<dd><?php echo  $city.", ".$country; ?></dd>
			<!-- <dd><strong>Pets: </strong>Dog Cat</dd> -->
			</dl>
		</a>
	</li>
<?php
	}// end else		
		}// end for
		//var_dump($usersList);
>>>>>>> FETCH_HEAD
?>








