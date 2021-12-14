<?php
	include '../Controller/CategorieC.php';
	$CoursC=new CategorieC();
	$CoursC->SupprimerCategorie($_GET["IdCat"]);
	header('Location:AfficherCategorie.php');
?>