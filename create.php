
<?php
//Connecting to sql db.
$connect = mysqli_connect("localhost","root","","projet");
//Sending form data to sql db.
mysqli_query($connect,"INSERT INTO user (firstname, lastname, username, email, pass, gender, phone)
VALUES ( '$_POST[firstname]', '$_POST[lastname]', '$_POST[username]', '$_POST[email]', '$_POST[pass]', '$_POST[gender]', '$_POST[phone]')");
?>