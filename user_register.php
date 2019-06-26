<?php
include("includes/db.php");
include("includes/website_functions.php");

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
                        <li class="active"><a href="login.php">Login</a></li>
                        <li><a href= "admin_login.php">Admin Panal</a></li>
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
        </div>
    </header><!--/header-->


        <div class="container">
            <!-- Codrops top bar -->
            
            <header>
                <h1>Login Or Register with <br> <span> TechPlanet</span></h1>
            </header>
            <br>
             <br>
             <br>
            
            <section>				
                <div id="container_demo" >
                    <div id="wrapper">
                       
        
                            <form method="post" action="user_register.php" enctype="multipart/form-data"> 
                                <table width="600%" align="center" border='0'>
                                    <tr>
                                    <td>
                                        <h1 align="center">Sign Up</h1>
                                        </td>
                                    </tr>
                               
                                    <tr>
                                        <td>
                                <p> 
                                    <label for="usernamesignup" class="uname" data-icon="u">Your username</label>
                                    <input id="usernamesignup" name="username" required="required" type="text" placeholder="mysuperusername690" />
                                </p>
                                            </td>
                                    </tr>
                                    <tr>
                                    
                                        <td>
                                        
                                <p> 
                                    <label for="usernamesignup" class="uname" data-icon="u">Full Name</label>
                                    <input id="usernamesignup" name="fullname" required="required" type="text" placeholder="firstlastname" />
                                </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                          
                                <p> 
                                    <label for="usernamesignup" class="uname" data-icon="u">Phone Number</label>
                                    <input id="usernamesignup" name="phone_no" required="required" type="text" placeholder="xxxx-xxxxxxx" />
                                </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                <p> 
                                    <label for="emailsignup" class="youmail" data-icon="e" > Your email</label>
                                    <input id="emailsignup" name="email" required="required" type="email" placeholder="mysupermail@mail.com"/> 
                                </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                <p> 
                                    <label for="passwordsignup" class="youpasswd" data-icon="p">Your password </label>
                                    <input id="passwordsignup" name="pass" required="required" type="password" placeholder="eg. X8df!90EO"/>
                                </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                <p> 
                                    <label for="passwordsignup_confirm" class="youpasswd" data-icon="p">Please confirm your password </label>
                                    <input id="passwordsignup_confirm" name="pass_c" required="required" type="password" placeholder="eg. X8df!90EO"/>
                                </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                <p> 
                                    <label for="usernamesignup" class="uname"  data-icon="e" > City</label>
                                    <input id="usernamesignup" name="city" required="required" type="text" placeholder="mycity"/> 
                                </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>             
                                <p> 
                                    <br>
                                    <label for="usernamesignup" class="uname"  > Complete Address</label> 
                                    <br>
                                    <textarea name="address" id="usernamesignup" value="return add()" placeholder="house No, Street, block" rows="4" cols="50"></textarea>
                                </p>
                                            <br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                <p class="signin button"> 
									<input type="submit" value="Sign up" name="insert_user"/> 
								</p>
                                        </td>
                                    </tr>
                                    
                    
                                    <tr>
                                        <td>
                                            <br>
                                <p class="change_link">  
									Already a member ?
									<a href="login.php" class="to_register"> Go and log in </a>
								</p>
                                        </td>
                                    </tr>
                                    
                                    
                                </table>
                            </form>
                        
                                   
                                    
                        </div>
						
                    </div>
             
            </section>
        </div>
         <br> <br><br><br><br> <br><br><br><br> 
    <br> <br><br><br><br> <br><br><br><br>
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

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>

</body>
</html>

<?php 

if (isset($_POST['insert_user'])){
    
         
         $username = $_POST['username'];
         $fullname = $_POST['fullname'];
         $phone_no = $_POST['phone_no'];
         $email    = $_POST['email'];
         $password     = $_POST['pass'];
         $password_c   = $_POST['pass_c'];
         $city     = $_POST['city'];
         $address  = $_POST['address'];
         $ip       = getip();
    if ($password == $password_c){
        
$key = 'pass1234word68';
$string = $password;

$iv = mcrypt_create_iv(
    mcrypt_get_iv_size(MCRYPT_RIJNDAEL_128, MCRYPT_MODE_CBC),
    MCRYPT_DEV_URANDOM
);

$encrypted = base64_encode(
    $iv .
    mcrypt_encrypt(
        MCRYPT_RIJNDAEL_128,
        hash('sha256', $key, true),
        $string,
        MCRYPT_MODE_CBC,
        $iv
    )
);
      $pass= $encrypted;
$query = mysqli_query($con,"SELECT username FROM Users WHERE email='$email'");

  if (mysqli_num_rows($query) != 0)
  {
          
    echo "<script> alert ('User With This Email Already Exists')</script>";
    echo " <script type='text/javascript'>
            window.location.href = 'user_register.php';
          </script> "; 
    
}
else { 

       $sql ="INSERT INTO users (username,name,phone_no,email,address,city,password,ip) VALUES ('$username','$fullname','$phone_no','$email','$address','$city','$pass','$ip')";
       $query=mysqli_query($con,$sql);
        
        if($query){
        echo "<script> alert ('You have Registered Successfully')</script>";
            
        }
        else { echo "<script> alert ('User NOT Inserted following error occured !!!!')</script>"."Error: " . $sql . "<br>" . mysqli_error($con);  }
       // echo " <script type='text/javascript'> window.location.href = 'login.php'; </script> ";
   }
}  
else {
    echo "<script> alert ('Password Do NOT Match')</script>";
}


    
}

?>
