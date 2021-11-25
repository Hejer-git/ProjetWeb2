<?php
	class user{
		private $id=null;
		private $firstname=null;
		private $lastname=null;
		private $username=null;
		private $email=null;
		private $pass=null;
		private $gender=null;
		private $phone=null;
	
		
		
		function __construct($id, $firstname, $lastname, $username, $email, $pass, $gender, $phone){
			$this->id=$id;
			$this->firstname=$firstname;
			$this->lastname=$lastname;
			$this->username=$username;
			$this->email=$email;
			$this->pass=$pass;
			$this->gender=$gender;
			$this->phone=$phone;
		}
		function getid(){
			return $this->id;
		}
		function getfirstname(){
			return $this->firstname;
		}
		function getlastname(){
			return $this->lastname;
		}
		function getusername(){
			return $this->username;
		}
		function getemail(){
			return $this->email;
		}
		function getpass(){
			return $this->pass;
		}
		function getgender(){
			return $this->gender;
		}
		function getphone(){
			return $this->phone;
		}
		function setfirstname(string $firstname){
			$this->firstname=$firstname;
		}
		function setlastname(string $lastname){
			$this->lastname=$lastname;
		}
		function setusername(string $username){
			$this->username=$username;
		}
		function setemail(string $email){
			$this->email=$email;
		}
		function setpass(string $pass){
			$this->pass=$pass;
		}
		function setgender(string $gender){
			$this->gender=$gender;
		}
		function setphone(string $phone){
			$this->phone=$phone;
		}
		
	}


?>