<?php
	include 'C:\xampp\htdocs\2A12\CRUD 3\Front\Controller\CoursC.php';
	$CoursC=new CoursC();
	$CoursC->SupprimerCours($_GET["IdC"]);
	header('Location:AfficherCours.php');
?>