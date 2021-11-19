<?php
//Connecting to sql db.
$connect = mysqli_connect("localhost", "root", "", "projet") ;
//Sending form data to sql db.

function modifierUser($User, $id){
    try {
        $db = config::getConnexion();
        $query = $db->prepare(
            'UPDATE user SET 
                firstname = :firstname, 
                lastname = :lastname,
                username = :username,
                email = :email,
                pass = :pass,
                gender = :gender,
                phone = :phone
            WHERE id = :id'
        );
        $query->execute([
            'firstname' => $User->getFirstname(),
            'lastname' => $User->getLastname(),
            'username' => $User->getUsername(),
            'email' => $User->getEmail(),
            'pass' => $User->getPass(),
            'gender' => $User->getGender(),
            'phone' => $User->getPhone(),
            'id' => $id
        ]);
        echo $query->rowCount() . " records UPDATED successfully <br>";
    } catch (PDOException $e) {
        $e->getMessage();
    }
}
?>