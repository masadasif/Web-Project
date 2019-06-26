<?php
include("includes/db.php");
include("includes/website_functions.php");
session_start();
?>

<!DOCTYPE html>
<html lang="en">
    
    
    <title> techPlanet </title>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    
        <meta name="description" content="Login and Registration Form with HTML5 and CSS3" />
        <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="images/ico/favicon.ico">
        <link rel="stylesheet" type="text/css" href="css/login/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/login/style.css" />
		<link rel="stylesheet" type="text/css" href="css/login/animate-custom.css" />
    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link href="css/mystyle.css" rel="stylesheet">
          
    
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
    
    
   
</head><!--/head-->

<body class="homepage">

    <header id="header">
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-xs-4">
                        <div class="top-number"><p><i class="fa fa-phone-square"></i>  +92 306 484 11 11</p></div>
                    </div>
                    <div class="col-sm-6 col-xs-8">
                       <div class="social">
                            <ul class="social-share">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li> 
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-skype"></i></a></li>
                            </ul>
                            <div class="search">
                                <form role="form" action="results.php">
                                    <input type="text" name="user_query" class="search-form" autocomplete="off" placeholder="Search"/>
                                    
                                    <i class="fa fa-search"></i>
                                </form>
                           </div>
                       </div>
                    </div>
                </div>
            </div><!--/.container-->
        </div><!--/.top-bar-->

        <div class="main_area">
        <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand"><img src="images/logo.png" alt="logo"></a>
                </div>
				
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li ><a href="index.php">Home</a></li>
                        
                            
               <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">BRANDS <span class="caret"></span></a>
          <ul class="dropdown-menu">
              
                            <?php
                            get_brands_menu();
                            ?>
              
           
         
          </ul>
        </li>
                        <li><a href="about.html">About Us</a></li>
                        <li><a href="contact.html">Contact Us</a></li>
                        <li ><a href="login.php">Login</a></li>
                        <li class="active"><a href="admin_login.php">Admin Panal</a></li>
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
        </div>
    </header><!--/header-->


        <div class="container">
            <!-- Codrops top bar -->
            
         <header>
                
            </header>
            <section>				
                <div id="container_demo" >
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                             <form method="post" action="admin_login.php" enctype="multipart/form-data">
                                 
                                <h1>Admin Log in</h1>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <p> 
                                    <label for="username" class="uname" data-icon="u" > Your username </label>
                                    <input id="username" name="username" required="required" type="text" placeholder="eg. myusername"/>
                                </p>
                                <p> 
                                    <label for="password" class="youpasswd" data-icon="p"> Your password </label>
                                    <input id="password" name="password" required="required" type="password" placeholder="eg. X8df!90EO" /> 
                                </p>
                                <p class="keeplogin"> 
									<input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" /> 
									<label for="loginkeeping">Keep me logged in</label>
								</p>
                                <p class="login button"> 
                                    <input type="submit" value="Login" name="login" /> 
								</p>
                                <p>You will be blocked after 3 Unsuccessful Attempts</p>
                            </form>
                        </div>

                        </div>
						
                    </div>
             
            </section>
        </div>
<footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2017 <a target="_blank" href="#" title="Pakistan's Top Online mobile shop"> WWW.TechPlanet.Com </a> All Rights Reserved.
                </div>
                <div class="col-sm-6">
                    <ul class="pull-right">
                        <li><a href="#">Home</a></li>
                        <li><a href="about.html">About Us</a></li>
                        <li><a href="contact.html">Contact Us</a></li>
                        <li><a href="admin/admin.php">Admin Panal</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->

</body>
</html>



<?php

    // Start the session

    // Defines username and password. Retrieve however you like,
if (isset($_POST['login'])){
    
         
         $username = $_POST['username'];
         $password = $_POST['password'];

}
   

    // Error message
    $error = "";

    // Checks to see if the user is already logged in. If so, refirect to correct page.
    if (isset($_SESSION['logged']) && $_SESSION['logged'] == true) {
        $error = "success";
     echo " <script type='text/javascript'>
            window.location.href = 'admin/admin.php';
          </script> ";
    } 
        
    // Checks to see if the username and password have been entered.
    // If so and are equal to the username and password defined above, log them in.
    if (isset($_POST['username']) && isset($_POST['password'])) {
        if ($username == 'admin' && $password == 'root') {
            $_SESSION['logged'] = true;
            echo " <script type='text/javascript'>
            window.location.href = 'admin/admin.php';
          </script> ";
            
        } else {
            $_SESSION['logged'] = false;
            echo "<script> alert ('Invalid username and password!')</script>";
        }
    }
?>