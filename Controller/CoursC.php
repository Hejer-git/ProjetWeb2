<?php
	include '../config.php';
	include_once '../Model/Cours.php';
	class CoursC {
		function AfficherCours(){
			$sql="SELECT * FROM cours";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
		}
		function SupprimerCours($IdC){
			$sql="DELETE FROM Cours WHERE IdC=:IdC";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':IdC', $IdC);
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
		}
		function AjouterCours($Cours){
			$sql="INSERT INTO cours (IdC, NomC, Matiere, Contenu) 
			VALUES (:IdC,:NomC,:Matiere, :Contenu)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					'IdC' => $Cours->getIdC(),
					'NomC' => $Cours->getNomC(),
					'Matiere' => $Cours->getMatiere(),
					'Contenu' => $Cours->getContenu()
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		function RecupererCours($IdC){
			$sql="SELECT * from cours where IdC=$IdC";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$Cours=$query->fetch();
				return $Cours;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
		function ModifierCours($Cours, $IdC){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE cours SET 
						NomC= :NomC, 
						Matiere= :Matiere, 
						Contenu= :Contenu
					WHERE IdC= :IdC'
				);
				$query->execute([
					'NomC' => $Cours->getNomC(),
					'Matiere' => $Cours->getMatiere(),
					'Contenu' => $Cours->getContenu(),
					'IdC' => $IdC
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}

		function RechercherCours($NomC)
	   {   
		   $db = config::getConnexion(); 
		   $sql="SELECT * FROM cours where NomC LIKE '$NomC%' ";
			
		   try{
			$listeCours = $db->query($sql);
			return $listeCours;
		}
		   catch (Exception $e)
		   {
			   die('Erreur:'.$e->getMessage());
		   }
	   }
	   function TriCours(){
		$db = config::getConnexion();
		$sql="SELECT * FROM cours ORDER BY `NomC` ASC ";
	
		try{
			$liste = $db->query($sql);
			return $liste;
		}
		catch(Exception $e){
			die('Erreur:'. $e->getMessage());
		}
	}
	}


?>