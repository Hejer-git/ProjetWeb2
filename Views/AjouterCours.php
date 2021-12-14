<?php
    include_once 'C:\xampp\htdocs\2A12\CRUD 3\Front\Model\Cours.php';
    include_once 'C:\xampp\htdocs\2A12\CRUD 3\Front\Controller\CoursC.php';

    $error = "";

    // create adherent
    $Cours = null;

    // create an instance of the controller
    $CoursC = new CoursC();
    if (
        isset($_POST["IdC"]) &&
		isset($_POST["NomC"]) &&		
        isset($_POST["Matiere"]) &&
		isset($_POST["Contenu"])  
    ) {
        if (
            !empty($_POST["IdC"]) && 
			!empty($_POST['NomC']) &&
            !empty($_POST["Matiere"]) && 
			!empty($_POST["Contenu"]) 
        ) {
            $Cours = new Cours(
                $_POST['IdC'],
				$_POST['NomC'],
                $_POST['Matiere'], 
				$_POST['Contenu']
            );
            $CoursC->AjouterCours($Cours);
            header('Location:AfficherCours.php');
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
        <button><a href="AfficherCours.php">Retour à la liste des cours</a></button>
        <hr>
        
        <div id="error">
            <?php echo $error; ?>
        </div>
        
        <form action="" method="POST">
            <table border="1" align="center">
                <tr>
                    <td>
                        <label for="IdC">Id:
                        </label>
                    </td>
                    <td><input type="text" name="IdC" id="IdC" maxlength="20"></td>
                </tr>
				<tr>
                    <td>
                        <label for="NomC">NomC:
                        </label>
                    </td>
                    <td><input type="text" name="NomC" id="NomC" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="Matiere">Matiere:
                        </label>
                    </td>
                    <td><input type="text" name="Matiere" id="Matiere" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="Contenu">Contenu:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="Contenu" id="Contenu">
                    </td>
                </tr>
                <tr>
                    
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Envoyer"> 
                    </td>
                    <td>
                        <input type="reset" value="Annuler" >
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>