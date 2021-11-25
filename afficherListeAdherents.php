<?php
	include '../Controller/AdherentC.php';
	$adherentC=new AdherentC();
	$listeAdherents=$adherentC->afficheradherents(); 
?>
<html>
	<head></head>
	<body>
	    <button><a href="ajouterAdherent.php">Ajouter un utilisateur</a></button>
		<center><h1>Liste des utilisateurs</h1></center>
		<table border="1" align="center">
			<tr>
				<th>id</th>
				<th>firstname</th>
				<th>lastname</th>
				<th>username</th>
				<th>email</th>
				<th>pass</th>
				<th>gender</th>
				<th>phone</th>
				<th>Modifier</th>
				<th>Supprimer</th>
			</tr>
			<?php
				foreach($listeAdherents as $user){
			?>
			<tr>
				<td><?php echo $user['id']; ?></td>
				<td><?php echo $user['firstname']; ?></td>
				<td><?php echo $user['lastname']; ?></td>
				<td><?php echo $user['username']; ?></td>
				<td><?php echo $user['email']; ?></td>
				<td><?php echo $user['pass']; ?></td>
				<td><?php echo $user['gender']; ?></td>
				<td><?php echo $user['phone']; ?></td>
				<td>
					<form method="POST" action="modifieradherent.php">
						<input type="submit" name="Modifier" value="Modifier">
						<input type="hidden" value=<?PHP echo $user['id']; ?> name="id">
					</form>
				</td>
				<td>
					<a href="supprimeradherent.php?id=<?php echo $user['id']; ?>">Supprimer</a>
				</td>
			</tr>
			<?php
				}
			?>
		</table>
	</body>
</html>
