<?PHP
	class user{
		private ?int $id = null;
		private ?string $firstname = null;
		private ?string $lastname = null;
		private ?string $username = null;
		private ?string $email = null;
		private ?string $pass = null;
		private ?string $gender = null;
		private ?string $phone = null;
		
		function __construct(string $firstname, string $lastname, string $username, string $email, string $pass, $gender, $phone){
			
			$this->firstname=$firstname;
			$this->lastname=$lastname;
			$this->username=$username;
			$this->email=$email;
			$this->pass=$pass;
			$this->gender=$gender;
			$this->phone=$phone;
		}
		
		function getFirstname(): string{
			return $this->firstname;
		}
		function getLastname(): string{
			return $this->lastname;
		}
		function getUsername(): string{
			return $this->username;
		}
		function getEmail(): string{
			return $this->Email;
		}
		function getPass(): string{
			return $this->pass;
		}
		function getGender(): string{
			return $this->gender;
		}
		function getPhone(): Int{
			return $this->phone;
		}

		function setFirtname(string $firstname): void{
			$this->firstname=$firstname;
		}
		function setLastname(string $lastname): void{
			$this->lastname;
		}
		function setUsername(string $username): void{
			$this->username=$username;
		}
		function setEmail(string $email): void{
			$this->email=$email;
		}
		function setPass(string $pass): void{
			$this->pass=$pass;
		}
		function setGender(string $gender): void{
			$this->gender=$gender;
		}
		function setPhone(string $phone): void{
			$this->phone=$phone;
		}
	}
?>