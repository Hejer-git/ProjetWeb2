<?php

if(isset($_POST['btn_logout'])){
	session_destroy();
    header('Location: ../');
}

if(!($_SESSION['mat'])){
	session_destroy();
	header('Location: ../');
}

$req = "SELECT fullname,username FROM login where username='".$_SESSION['mat']."' " ;
$res2 = mysqli_query($con, $req) or die('Requette incorrecte'. $res2);
$forlogin = mysqli_fetch_all($res2);


?>