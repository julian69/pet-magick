<?php

session_start();
include_once "../php/classes/BOUsers.php";
$user = new BOUsers;

if($user->autoComplete($_POST['user']))
	$rta =  $user->getComplete();
	
$searchTool = 'searchTool.php';
//file_put_contents($GLOBALS['searchTool'], serialize($rta));
//echo unserialize(file_get_contents($GLOBALS['searchTool']));
file_put_contents($GLOBALS['searchTool'], $rta);
echo file_get_contents($searchTool);



