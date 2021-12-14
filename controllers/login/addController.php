<?php
	
	if(isset($_POST['add'])){

		$user=$_POST['user'];
		$sujet=$_POST['sujet'];
		$msg=$_POST['msg'];
		$idreq=	$_SESSION['iduser'];
		$req = "INSERT INTO forum(sujet,idqest,user,msg) 
				VALUES ('$sujet','$idreq','$user','$msg')";

		$result=mysqli_query ($con ,$req) or die("hey");


	}

	if(isset($_POST['addrep'])){
		$idq=$_GET['id'];
		$idr=$_SESSION['iduser'];
		$com=$_POST['com'];

		$req = "INSERT INTO reponse(idq,idr,com) 
				VALUES ('$idq','$idr','$com')";

		$result=mysqli_query ($con ,$req) or die("Insertion incorrecte");


	}

	if(isset($_POST['editrep'])){
		$idq=$_GET['id'];
		$sujet=$_POST['sujet'];
		$msg=$_POST['msg'];


		$req = "UPDATE forum SET sujet='$sujet', 
							msg='$msg' 
							WHERE id='$idq' "; 

		$result=mysqli_query ($con ,$req) or die("Insertion incorrecte");
		header('Location: fourml.php');

	}



	
?>