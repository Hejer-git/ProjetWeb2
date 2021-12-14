<?php
	include '../config.php';
	include_once '../Model/Categorie.php';
	class CategorieC {
		function AfficherCategorie(){
			$sql="SELECT * FROM categorie";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
		}
		function SupprimerCategorie($IdCat){
			$sql="DELETE FROM categorie WHERE IdCat=:IdCat";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':IdCat', $IdCat);
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
		}
		function AjouterCategorie($Categorie){
			$sql="INSERT INTO categorie (IdCat, NomCat) 
			VALUES (:IdCat,:NomCat)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					'IdCat' => $Categorie->getIdCat(),
					'NomCat' => $Categorie->getNomCat()
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		function RecupererCategorie($IdCat){
			$sql="SELECT * from categorie where IdCat=$IdCat";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$Categorie=$query->fetch();
				return $Categorie;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
		function ModifierCategorie($Categorie, $IdCat){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE categorie SET 
						NomCat= :NomCat
					WHERE IdCat= :IdCat'
				);
				$query->execute([
					'NomCat' => $Categorie->getNomCat(),
					'IdCat' => $IdCat
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
		function RechercherCategorie($NomCat)
	   {   
		   $db = config::getConnexion(); 
		   $sql="SELECT * FROM categorie where NomCat LIKE '$NomCat%' ";
			
		   try{
			$listeCategorie = $db->query($sql);
			return $listeCategorie;
		}
		   catch (Exception $e)
		   {
			   die('Erreur:'.$e->getMessage());
		   }
	   }

	}
?>