<?php
    include_once '../Model/Cours.php';
    include_once '../Controller/CoursC.php';

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
            $CoursC->ModifierCours($Cours, $_POST["IdC"]);
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
			
		<?php
			if (isset($_POST['IdC'])){
				$Cours = $CoursC->RecupererCours($_POST['IdC']);
				
		?>
        
        <form action="" method="POST">
            <table border="1" align="center">
                <tr>
                    <td>
                        <label for="IdC">Id:
                        </label>
                    </td>
                    <td><input type="text" name="IdC" id="IdC" value="<?php echo $Cours['IdC']; ?>" maxlength="20"></td>
                </tr>
				<tr>
                    <td>
                        <label for="NomC">NomC:
                        </label>
                    </td>
                    <td><input type="text" name="NomC" id="NomC" value="<?php echo $Cours['NomC']; ?>" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="Matiere">Matiere:
                        </label>
                    </td>
                    <td><input type="text" name="Matiere" id="Matiere" value="<?php echo $Cours['Matiere']; ?>" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="Contenu">Contenu:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="Contenu" value="<?php echo $Cours['Contenu']; ?>" id="Contenu">
                    </td>
                </tr>
                <tr>

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

