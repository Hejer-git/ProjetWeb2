<?php
//Connecting to sql db.
$connect = mysqli_connect("localhost", "root", "", "projet") ;
//Sending form data to sql db.

function supprimer($id)
{
	
		$req=$access->prepare("DELETE FROM user WHERE id=?");

		$req->execute(array($id));

		$req->closeCursor();
}
?>