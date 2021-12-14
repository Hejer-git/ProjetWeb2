<?php
	include '../Controller/CoursC.php';
	$CoursC=new CoursC();
	$listeCours=$CoursC->AfficherCours(); 
	$liste=$CoursC->TriCours();
	if (isset($_POST['search']))
    {
        $listeCours=$CoursC->RechercherCours($_POST['search']); 
    }
?>
<html>
	<head></head>
	<body>
	    <button><a href="AjouterCours.php">Ajouter un cours</a></button>
		<center><h1>Liste des cours</h1></center>
		<table border="1" align="center">
			<tr>
				<th>IdC</th>
				<th>NomC</th>
				<th>Matiere</th>
				<th>Contenu</th>
				<th>Modifier</th>
				<th>Supprimer</th>
			</tr>
			<?php
				foreach($listeCours as $Cours){
			?>
			<tr>
				<td><?php echo $Cours['IdC']; ?></td>
				<td><?php echo $Cours['NomC']; ?></td>
				<td><?php echo $Cours['Matiere']; ?></td>
				<td><?php echo $Cours['Contenu']; ?></td>
				<td>

				<form method="post">
<label>Search</label>
<input type="text" name="search">
<!--<input type="submit" name="submit">-->
<input type="submit" value="Rechercher">

	
					<form method="POST" action="ModifierCours.php">
						<input type="submit" name="Modifier" value="Modifier">
						<input type="hidden" value=<?PHP echo $Cours['IdC']; ?> name="IdC">
					</form>
				</td>
				<td>
					<a href="SupprimerCours.php?IdC=<?php echo $Cours['IdC']; ?>">Supprimer</a>
				</td>
			</tr>
			<?php
				}
			?>
		</table>
		<form method="POST">
						<input type="submit" name="Tri" value="Tri">
						<input type="hidden" value=<?PHP echo $Cours['NomC']; ?> name="NomC">
					</form>
	</body>
</html>
