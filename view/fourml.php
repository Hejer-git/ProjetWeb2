<?php
$x=dirname(__DIR__);
require("$x/config/connexion.php");
require("$x/controllers/login/logout.php"); 
require("$x/controllers/login/Model.php"); 





?>
<!DOCTYPE html>
<html lang="en">

<head> 

    <!-- Basic Page Needs
    ================================================== -->
    <title>Courseplus Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Courseplus is - Professional A unique and beautiful collection of UI elements">

    <!-- Favicon -->
    <link href="../assets/images/favicon.png" rel="icon" type="image/png">

    <!-- icons
    ================================================== -->
    <link rel="stylesheet" href="../assets/css/icons.css">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="../assets/css/uikit.css">
    <link rel="stylesheet" href="../assets/css/style.css"> 
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../assets/public/css/font-awesome/css/font-awesome.min.css">

</head>

<body>

    <div id="wrapper" class="is-verticle">

        <!--  Header  -->
       <?php require("head.php");  ?>
        <!-- Main Contents -->
        <div class="main_content">
            <div class="container">

                <div class="text-2xl font-semibold"> Forums </div>
                <nav class="cd-secondary-nav border-b md:m-0 nav-small">
                    <ul>
                        <li class="active"><a href="#" class="lg:px-2"> Popular </a></li>
                        <li><a href="#" class="lg:px-2"> Featured </a></li>
                        <li><a href="#" class="lg:px-2"> Recent </a></li>
                        <li><a href="com.php" class="lg:px-2"> ADD </a></li>
                    </ul>
                </nav>

                <div class="lg:flex lg:space-x-12 mt-5">
                    
                    <div class="lg:w-2/3 flex-shirink-0">
                    
                        <ul class="card divide-y divide-gray-100 sm:m-0 -mx-5">
                        <?php 
//kel boucle or   bch nbadel lesm 
                        if($forums) {
                        foreach ($forums as $emp) {
                            $i=0;
                            foreach ($notifarray as $na)
                            {
                                if ($emp[0]== $na[3])
                                    $i++;
                            }
                            
                            
                            ?> 
                          <li> 
                                <div class="flex items-start space-x-5 p-7">
                                <?php 
                                 // die ($forlogin[0][0].'        '.$emp[3]);
                                if ($forlogin[0][0]==$emp[3]) {
                                  
                                ?>
                                 <a href="com_edit.php?id=<?= ($emp[0]); ?>"><i class="fa fa-edit"></i></a>
                                <a href="<?php $_SERVER['PHP_SELF'] ?>?del=<?= ($emp[0]); ?>"><i class="fa fa-trash"></i></a>
                                <?php } ?>
                                   <img src="../assets/images/avatars/avatar-2.jpg" alt="" class="w-12 h-12 rounded-full">
                                    <div class="flex-1">
                                        <a href="reponse.php?id=<?= ($emp[0]); ?>" class="text-lg font-semibold line-clamp-1 mb-1"><?= strtoupper($emp[1]); ?> </a>
                                        <p class="text-sm text-gray-400 mb-2"> Posted By: <span data-href="%40tag-dev.html"><?= strtoupper($emp[2]); ?> </p>
                                      <p class="leading-6 line-clamp-2 mt-3"><?= ($emp[4]); ?></p>
                                    </div>
                                    <div class="sm:flex items-center space-x-4 hidden">
                                        <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 5a2 2 0 012-2h7a2 2 0 012 2v4a2 2 0 01-2 2H9l-3 3v-3H4a2 2 0 01-2-2V5z"></path><path d="M15 7v2a4 4 0 01-4 4H9.828l-1.766 1.767c.28.149.599.233.938.233h2l3 3v-3h2a2 2 0 002-2V9a2 2 0 00-2-2h-1z"></path></svg>
                                        <span class="text-xl"> <?= ($i); ?> </span>
                                    </div>
                                </div>
                            </li>
                            <?php } }else {

                        echo '<li class="list-group-item"><div class="alert alert-info">Tableau est vide !</div></li>';
                            }
                        ?>                            
                        </ul>

                        
                      
                    </div>
  
                  
                      
                </div>

            </div>

            <!-- footer -->
           
            
        </div>
 
        <!-- sidebar -->
        <div class="sidebar">
            <div class="sidebar_inner" data-simplebar>
                
                <ul class="side-colored">
                    <li><a href="explore.html">
                            <ion-icon name="compass" class="side-icon"> </ion-icon>
                            <span> Explore</span>
                        </a>
                    </li>
                    <li><a href="courses.html">
                            <ion-icon name="play-circle" class="side-icon"> </ion-icon>
                            <span> Courses</span>
                        </a>
                    </li>
                    <li><a href="categories.html">
                            <ion-icon name="albums" class="side-icon"> </ion-icon>
                            <span> Categories </span>
                        </a>
                    </li>
                    <li><a href="episodes.html">
                            <ion-icon name="film" class="side-icon">  </ion-icon>
                            <span> Episodes </span>
                        </a>
                    </li>
                    <li><a href="books.html">
                            <ion-icon name="book" class="side-icon"> </ion-icon>
                            <span> Books </span>
                        </a>
                    </li>
                    <li><a href="blogs.html">
                            <ion-icon name="newspaper" class="side-icon">  </ion-icon>
                            <span> Articles</span>
                        </a>
                    </li>
                </ul> 

                <ul class="side_links" data-sub-title="Pages">
                    <li><a href="page-pricing.html"> <ion-icon name="card-outline" class="side-icon"></ion-icon> Pricing  </a></li>
                    <li><a href="page-help.html"> <ion-icon name="information-circle-outline" class="side-icon"></ion-icon> Help </a></li>
                    <li><a href="page-faq.html"> <ion-icon name="albums-outline" class="side-icon"></ion-icon> Faq </a></li>
                    <li class="active"><a href="page-forum.html"> <ion-icon name="chatbubble-ellipses-outline" class="side-icon"></ion-icon> Forum <span class="soon">new</span> </a></li>
                    <li><a href="pages-cart.html"> <ion-icon name="receipt-outline" class="side-icon"></ion-icon> Cart list </a></li>
                    <li><a href="pages-account-info.html"> <ion-icon name="reader-outline" class="side-icon"></ion-icon> Billing </a></li>
                    <li><a href="pages-payment-info.html"> <ion-icon name="wallet-outline" class="side-icon"></ion-icon> Payments</a></li>
                    <li><a href="page-term.html"> <ion-icon name="document-outline" class="side-icon"></ion-icon> Term </a></li>
                    <li><a href="page-privacy.html"> <ion-icon name="document-text-outline" class="side-icon"></ion-icon> Privacy </a></li> 
                    <li><a href="page-setting.html"> <ion-icon name="settings-outline" class="side-icon"></ion-icon> Setting </a></li> 
                    <li><a href="#"> Development  </a> 
                        <ul>
                            <li><a href="development-elements.html"> Elements  </a></li>
                            <li><a href="development-components.html"> Compounents </a></li>
                            <li><a href="development-plugins.html"> Plugins </a></li>
                            <li><a href="development-icons.html"> Icons </a></li>
                        </ul>
                    </li>
                    <li><a href="#"> Authentication  </a> 
                        <ul>
                            <li><a href="form-login.html">form login </a></li>
                            <li><a href="form-register.html">form register</a></li> 
                        </ul>
                    </li>
                </ul>

                <div class="side_foot_links">
                    <a href="#">About</a>
                    <a href="#">Blog </a>
                    <a href="#">Careers</a>
                    <a href="#">Support</a>
                    <a href="#">Contact Us </a>
                    <a href="#">Developer</a>
                    <a href="#">Terms of service</a>
                </div>

            </div>

            <div class="side_overly" uk-toggle="target: #wrapper ; cls: is-collapse is-active"></div>
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
    <script>
function mynotif() {
  document.getElementById("notiff").innerHTML = "0";
}
</script>

</body>

</html>
