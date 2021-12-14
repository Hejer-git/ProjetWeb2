<?php
	class Cours{
		private $IdC=null;
		private $NomC=null;
		private $Matiere=null;
		private $Contenu=null;
		
		function __construct($IdC, $NomC, $Matiere, $Contenu){
			$this->IdC=$IdC;
			$this->NomC=$NomC;
			$this->Matiere=$Matiere;
			$this->Contenu=$Contenu;
		}
		function getIdC(){
			return $this->IdC;
		}
		function getNomC(){
			return $this->NomC;
		}
		function getMatiere(){
			return $this->Matiere;
		}
		function getContenu(){
			return $this->Contenu;
		}
        
		function setNomC(string $NomC){
			$this->NomC=$NomC;
		}
		function setMatiere(string $Matiere){
			$this->Matiere=$Matiere;
		}
		function setContenu(string $Contenu){
			$this->Contenu=$Contenu;
		}
	}


?>