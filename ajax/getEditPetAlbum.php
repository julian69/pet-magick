<?php
session_start();
include_once "../php/classes/BOPets.php";


$p = new BOPets;
//Llega por get el id de la mascota
$p->getPetData($_GET['p']);

include_once '../templates/editPetAlbum.php';


?>