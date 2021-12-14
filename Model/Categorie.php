<?php
	class Categorie{
		private $IdCat=null;
		private $NomCat=null;
		
		function __construct($IdCat, $NomCat){
			$this->IdCat=$IdCat;
			$this->NomCat=$NomCat;
		}
		function getIdCat(){
			return $this->IdCat;
		}
		function getNomCat(){
			return $this->NomCat;
		}
	
		function setNomCat(string $NomCat){
			$this->NomCat=$NomCat;
		}
		
	}


?>