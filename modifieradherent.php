<?php
    include_once '../Model/Adherent.php';
    include_once '../Controller/AdherentC.php';

    $error = "";

    // create adherent
    $user = null;

    // create an instance of the controller
    $adherentC = new AdherentC();
    if (
        isset($_POST["id"]) &&
		isset($_POST["firstname"]) &&		
        isset($_POST["lastname"]) &&
		isset($_POST["username"]) && 
        isset($_POST["email"]) && 
        isset($_POST["pass"]) && 
        isset($_POST["gender"]) && 
        isset($_POST["phone"])
    ) {
        if (
            !empty($_POST["id"]) && 
			!empty($_POST['firstname']) &&
            !empty($_POST["lastname"]) && 
			!empty($_POST["username"]) && 
            !empty($_POST["email"]) && 
            !empty($_POST["pass"]) && 
            !empty($_POST["gender"]) && 
            !empty($_POST["phone"])
        ) {
            $user = new user(
                $_POST['id'],
				$_POST['firstname'],
                $_POST['lastname'], 
				$_POST['username'],
                $_POST['email'],
                $_POST['pass'],
                $_POST['gender'],
                $_POST['phone']
            );
            $adherentC->modifieradherent($user, $_POST["id"]);
            header('Location:afficherListeAdherents.php');
        }
        else
            $error = "Missing information";
    }    
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Display</title>
</head>
    <body>
        <button><a href="afficherListeAdherents.php">Retour à la liste des utilisateurs</a></button>
        <hr>
        
        <div id="error">
            <?php echo $error; ?>
        </div>
			
		<?php
			if (isset($_POST['id'])){
				$user = $adherentC->recupereradherent($_POST['id']);
				
		?>
        
        <form action="" method="POST">
            <table border="1" align="center">
                <tr>
                    <td>
                        <label for="id">id:
                        </label>
                    </td>
                    <td><input type="text" name="id" id="id" value="<?php echo $user['id']; ?>" maxlength="20"></td>
                </tr>
				<tr>
                    <td>
                        <label for="firstname">First Name:
                        </label>
                    </td>
                    <td><input type="text" name="firstname" id="firstname" value="<?php echo $user['firstname']; ?>" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="lastname">Last Name:
                        </label>
                    </td>
                    <td><input type="text" name="lastname" id="lastname" value="<?php echo $user['lastname']; ?>" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="username">User Name:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="username" value="<?php echo $user['username']; ?>" id="username">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="email">Adresse mail:
                        </label>
                    </td>
                    <td>
                        <input type="email" name="email" id="email" value="<?php echo $user['email']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="pass">Password:
                        </label>
                    </td>
                    <td>
                        <input type="password" name="pass" id="pass" value="<?php echo $user['pass']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="gender">Gender:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="gender" id="gender" value="<?php echo $user['gender']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="phone">Phone:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="phone" id="phone" value="<?php echo $user['phone']; ?>">
                    </td>
                </tr>              
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Modifier"> 
                    </td>
                    <td>
                        <input type="reset" value="Annuler" >
                    </td>
                </tr>
            </table>
        </form>
		<?php
		}
		?>
    </body>
</html>