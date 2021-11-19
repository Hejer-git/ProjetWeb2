<?php
//Connecting to sql db.
$connect = mysqli_connect("localhost", "root", "", "projet") ;
//Sending form data to sql db.

function afficher()
{
		$req=$access->prepare("SELECT * FROM user ORDER BY id DESC");

        $req->execute();

        $data = $req->fetchAll(PDO::FETCH_OBJ);

        return $data;

        $req->closeCursor();
	}
?>