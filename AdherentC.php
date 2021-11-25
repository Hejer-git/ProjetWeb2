<?php
	include '../config.php';
	include_once '../Model/Adherent.php';
	class AdherentC {
		function afficheradherents(){
			$sql="SELECT * FROM user";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}
		function supprimeradherent($id){
			$sql="DELETE FROM user WHERE id=:id";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id', $id);
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}
		function ajouteradherent($user){
			$sql="INSERT INTO user (id, firstname, lastname, username, email, pass, gender, phone) 
			VALUES (:id,:firstname,:lastname, :username,:email, :pass, :gender, :phone)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					'id' => $user->getid(),
					'firstname' => $user->getfirstname(),
					'lastname' => $user->getlastname(),
					'username' => $user->getusername(),
					'email' => $user->getemail(),
					'pass' => $user->getpass(),
					'gender' => $user->getgender(),
					'phone' => $user->getphone()
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		function recupereradherent($id){
			$sql="SELECT * from user where id=$id";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$user=$query->fetch();
				return $user;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
		function modifieradherent($user, $id){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE user SET 
						firstname= :firstname, 
						lastname= :lastname, 
						username= :username, 
						email= :email, 
						pass= :pass,
						gender= :gender,
						phone= :phone
					WHERE id= :id'
				);
				$query->execute([
					'id' => $user->getid(),
					'firstname' => $user->getfirstname(),
					'lastname' => $user->getlastname(),
					'username' => $user->getusername(),
					'email' => $user->getemail(),
					'pass' => $user->getpass(),
					'gender' => $user->getgender(),
					'phone' => $user->getphone(),
					'id' => $id
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
		function connexionUser($email,$pass){
            $sql="SELECT * FROM user WHERE email='" . $email . "' and Pass = '". $pass."'";
            $db = config::getConnexion();
            try{
                $query=$db->prepare($sql);
                $query->execute();
                $count=$query->rowCount();
                if($count==0) {
                    $message = "pseudo ou le mot de passe est incorrect";
                } else {
                    $x=$query->fetch();
                    $message = $x['role'];
                }
            }
            catch (Exception $e){
                    $message= " ".$e->getMessage();
            }
          return $message;
        }

	}



?>