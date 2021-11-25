<?php
session_start();
include_once '../model/Adherent.php';
include_once '../controller/AdherentC.php';
$message="";
$adherentC = new AdherentC();
if (isset($_POST["email"]) &&
    isset($_POST["pass"])) {
    if (!empty($_POST["email"]) &&
        !empty($_POST["pass"]))
    {   $message=$adherentC->connexionuser($_POST["email"],$_POST["pass"]);
         $_SESSION['e'] = $_POST["email"];// on stocke dans le tableau une colonne ayant comme nom "e",
        //  avec l'email à l'intérieur
        if($message!='pseudo ou le mot de passe est incorrect'){
           header('Location:ProfilUser.php');}
        else{
            $message='pseudo ou le mot de passe est incorrect';
        }}
    else
        $message = "Missing information";}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Favicon -->
  <link href="../assets/images/favicon.png" rel="icon" type="image/png">

  <!-- Basic Page Needs
        ================================================== -->
  <title>Concur</title>  
  <meta name="description" content="Courseplus is - Professional A unique and beautiful collection of UI elements">

  <!-- icons
    ================================================== -->
  <link rel="stylesheet" href="../assets/css/icons.css">

  <!-- CSS
    ================================================== -->
  <link rel="stylesheet" href="../assets/css/uikit.css">
  <link rel="stylesheet" href="../assets/css/style.css">
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

  <style>
    input , .bootstrap-select.btn-group button{
        background-color: #f3f4f6  !important;
        height: 44px  !important;
        box-shadow: none  !important; 
    }
  </style>

</head>
<body>
<div id="wrapper" class="flex flex-col justify-between h-screen">

<!-- header-->
<div class="bg-white py-4 shadow dark:bg-gray-800">
    <div class="max-w-6xl mx-auto">


        <div class="flex items-center lg:justify-between justify-around">

            <a href="index.html">
                <img src="../assets/images/logo.png" alt="" class="w-32">
            </a>

            <div class="capitalize flex font-semibold hidden lg:block my-2 space-x-3 text-center text-sm">
                <a href="form-login.html" class="py-3 px-4">Login</a>
                <a href="form-register.html" class="bg-purple-500 purple-500 px-6 py-3 rounded-md shadow text-white">Register</a>
            </div>

        </div>


    </div>
</div>
<form name="frmUser" method="post" action="">
   <div class="message">
      <?php if($message!="") { echo $message; } ?>
    </div>
    <table border="0" cellpadding="10" cellspacing="1" width="500" align="center" class="tblLogin">
        <tr class="tableheader">
            <td align="center" colspan="2">Authentification</td>
        </tr>
        <tr class="tablerow">
            <td>
                <label for="email">Email:</label>
            </td>
            <td>
                <input type="text" name="email" placeholder="Email" class="login-input">
            </td>
        </tr>
        <tr class="tablerow">
            <td>
                <label for="pass">Password:</label>
            </td>
            <td>
                <input type="pass" name="pass" placeholder="Password" class="login-input"></td>
        </tr>
        <tr class="tableheader">
            <td align="center" colspan="2"><input type="submit" name="submit" value="Submit" class="btnSubmit"></td>
        </tr>
    </table>
</form>
<!-- Footer -->
<div class="lg:mb-5 py-3 uk-link-reset">
          <div class="flex flex-col items-center justify-between lg:flex-row max-w-6xl mx-auto lg:space-y-0 space-y-3">
              <div class="flex space-x-2 text-gray-700 uppercase">
                  <a href="#"> About</a>
                  <a href="#"> Help</a>
                  <a href="#"> Terms</a>
                  <a href="#"> Privacy</a>
              </div>
              <p class="capitalize"> © copyright 2021 by Concur</p>
          </div>
      </div>

  </div>



<!-- Javascript
================================================== -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.7.6/dist/js/uikit.min.js"></script>
    <script src="../assets/js/uikit.js"></script>
<script src="../assets/js/tippy.all.min.js"></script>
<script src="../assets/js/simplebar.js"></script>
<script src="../assets/js/custom.js"></script>
<script src="../assets/js/bootstrap-select.min.js"></script>
<script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script>

</body>
</html>