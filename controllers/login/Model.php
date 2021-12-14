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

function notif()
{
	$req = "SELECT COUNT(vu) FROM reponse,forum WHERE  reponse.idq=forum.id and forum.idqest='".$_SESSION['iduser']."'";
$result = mysqli_query($con, $req) or die('COUNT'. $result);
$notif=mysqli_fetch_array($result);

 return $notif;
}

?>