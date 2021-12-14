<?php
	include 'C:\xampp\htdocs\2A12\CRUD 3\Front\Controller\CategorieC.php';
	$CategorieC=new CategorieC();
	$listeCategorie=$CategorieC->AfficherCategorie(); 
	if (isset($_POST['search']))
    {
        $listeCategorie=$CategorieC->RechercherCategorie($_POST['search']); 
    }
?>
<html>
	<head></head>
	<body>
	    <button><a href="AjouterCategorie.php">Ajouter une categorie</a></button>
		<center><h1>Liste des adherents</h1></center>
		<table border="1" align="center">
			<tr>
				<th>IdCat</th>
				<th>NomCat</th>
				<th>Modifier</th>
				<th>Supprimer</th>
			</tr>
			<?php
				foreach($listeCategorie as $Categorie){
			?>
			<tr>
				<td><?php echo $Categorie['IdCat']; ?></td>
				<td><?php echo $Categorie['NomCat']; ?></td>
				<td>
				<form method="post">
<label>Search</label>
<input type="text" name="search">
<!--<input type="submit" name="submit">-->
<input type="submit" value="Rechercher">
					<form method="POST" action="ModifierCategorie.php">
						<input type="submit" name="Modifier" value="Modifier">
						<input type="hidden" value=<?PHP echo $Categorie['IdCat']; ?> name="IdCat">
					</form>
				</td>
				<td>
					<a href="SupprimerCategorie.php?IdCat=<?php echo $Categorie['IdCat']; ?>">Supprimer</a>
				</td>
			</tr>
			<?php
				}
			?>
		</table>
	</body>
</html>
