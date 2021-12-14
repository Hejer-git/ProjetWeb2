<?php
    include_once 'C:\xampp\htdocs\2A12\CRUD 3\Front\Model\Categorie.php';
    include_once 'C:\xampp\htdocs\2A12\CRUD 3\Front\Controller\CategorieC.php';

    $error = "";

    // create adherent
    $Categorie = null;

    // create an instance of the controller
    $CategorieC = new CategorieC();
    if (
        isset($_POST["IdCat"]) &&
		isset($_POST["NomCat"]) 	
    ) {
        if (
            !empty($_POST["IdCat"]) && 
			!empty($_POST['NomCat']) 
        ) {
            $Categorie = new Categorie(
                $_POST['IdCat'],
				$_POST['NomCat']
            );
            $CategorieC->ModifierCategorie($Categorie, $_POST["IdCat"]);
            header('Location:AfficherCategorie.php');
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
        <button><a href="afficherListeAdherents.php">Retour à la liste des categories</a></button>
        <hr>
        
        <div id="error">
            <?php echo $error; ?>
        </div>
			
		<?php
			if (isset($_POST['IdCat'])){
				$Categorie = $CategorieC->RecupererCategorie($_POST['IdCat']);
				
		?>
        
        <form action="" method="POST">
            <table border="1" align="center">
                <tr>
                    <td>
                        <label for="IdCat">IdCat:
                        </label>
                    </td>
                    <td><input type="text" name="IdCat" id="IdCat" value="<?php echo $Categorie['IdCat']; ?>" maxlength="20"></td>
                </tr>
				<tr>
                    <td>
                        <label for="NomCat">NomCat:
                        </label>
                    </td>
                    <td><input type="text" name="NomCat" id="NomCat" value="<?php echo $Categorie['NomCat']; ?>" maxlength="20"></td>
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