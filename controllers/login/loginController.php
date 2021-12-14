<?php
	
	if(isset($_POST['login-submit'])){
		
		$username= $_POST['username'];
		$password=$_POST['password'];

		$req="SELECT * FROM login WHERE username='$username' AND password='$password'";

		$res=mysqli_query($con, $req);


		if (mysqli_num_rows($res) > 0){
		
			$result = mysqli_fetch_row($res);

			$mat = $result[0];			
			$_SESSION['iduser'] = $mat;
			$mat = $result[1];
			$_SESSION['mat'] = $mat;
			header('Location: view/fourml.php');

		}
	}


	
?>