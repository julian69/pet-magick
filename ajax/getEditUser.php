<?php
session_start();
include_once "../php/classes/BOProfiles.php";
include_once('../php/classes/BOLocation.php');

$p = new BOProfiles($_SESSION['id']);

$location = new BOLocation;
$countries = $location->countryList();


include_once '../templates/editUser.php';


?>