<?php
    include_once '../Model/Adherent.php';
    include_once '../Controller/AdherentC.php';

    $error = "";

    // create adherent
    $user = null;

    // create an instance of the controller
    $adherentC = new AdherentC();
    if (
        isset($_POST["id"]) &&
		isset($_POST["firstname"]) &&		
        isset($_POST["lastname"]) &&
		isset($_POST["username"]) && 
        isset($_POST["email"]) && 
        isset($_POST["pass"]) && 
        isset($_POST["gender"]) && 
        isset($_POST["phone"])
    ) {
        if (
            !empty($_POST["id"]) && 
			!empty($_POST['firstname']) &&
            !empty($_POST["lastname"]) && 
			!empty($_POST["username"]) && 
            !empty($_POST["email"]) && 
            !empty($_POST["pass"]) && 
            !empty($_POST["gender"]) && 
            !empty($_POST["phone"])
        ) {
            $user = new user(
                $_POST['id'],
				$_POST['firstname'],
                $_POST['lastname'], 
				$_POST['username'],
                $_POST['email'],
                $_POST['pass'],
                $_POST['gender'],
                $_POST['phone']
            );
            $adherentC->ajouteradherent($user);
            header('Location:afficherListeAdherents.php');
        }
        else
            $error = "Missing information";
    }

    
?>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Favicon -->
  <link href="../assets/images/favicon.png" rel="icon" type="image/png">

  <!-- Basic Page Needs
        ================================================== -->
  <title>Concur</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
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
        <button><a href="afficherListeAdherents.php">Retour à la liste des utilisateurs</a></button>
        <hr>
        
        <div id="error">
            <?php echo $error; ?>
        </div>
        
        <form action="" method="POST">
            <table border="1" align="center">
                <tr>
                    <td>
                        <label for="id">id:
                        </label>
                    </td>
                    <td><input type="text" name="id" id="id" maxlength="20"></td>
                </tr>
				<tr>
                    <td>
                        <label for="firstname">First Name:
                        </label>
                    </td>
                    <td><input type="text" name="firstname" id="firstname" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="lastname">last Name:
                        </label>
                    </td>
                    <td><input type="text" name="lastname" id="lastname" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="username">User Name:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="username" id="username">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="email">Adresse mail:
                        </label>
                    </td>
                    <td>
                        <input type="email" name="email" id="email">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="pass">Password:
                        </label>
                    </td>
                    <td>
                        <input type="password" name="pass" id="pass">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="gender">Gender:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="gender" id="gender">
                    </td>
                </tr>
                <tr>
                    
                    <td>
                    <label class="mb-0" for="phone"> Phone: optional  </label>
                        </label>
                    </td>
                    <td>
                        <input type="text" name="phone" id="phone" class="bg-gray-100 h-12 mt-2 px-3 rounded-md w-full">
                    </td>
                        
                </tr>              
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Envoyer"> 
                    </td>
                    <td>
                        <input type="reset" value="Annuler" >
                    </td>
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