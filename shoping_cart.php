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
    <meta name="description" content="">
    <meta name="author" content="">
    
	
	<!-- core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link href="css/shoping_cart.css" rel="stylesheet">
          
    <link rel="shortcut icon" href="images/ico/favicon.ico">
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
                        <div class="top-number">  
                         <div class="name_c">
                            <?php 
                            if (isset($_SESSION['loggedIn']) == true) {
                                
                                $name = $_SESSION['loggedIn'];
                                
                                echo "<span class='glyphicon glyphicon-user'>&nbsp;<b>$name</b></span>";
                            }
                            
                            else {
                                 echo "<i class='fa fa-phone-square'>+92-306-4841111</i> ";
                                 }
                           
                            
                            ?>
                            </div> </div> </div>
                
                    <div class="col-sm-6 col-xs-8">
                       
                        <div class="social">
                            <ul class="social-share">
                                
                                <li><div class="top-number"><b>&nbsp;Total Items&nbsp;:&nbsp;</b></div></li>
                                <li><a href="cart.php"><?php 
                                    if(isset($GET['add_cart'])){
                                    global $con;
                                    $get_items = "SELECT * FROM cart WHERE ip = '::1'";
                                    $run_items = mysqli_query($con,$get_items);
                                    $count_items = mysqli_num_rows($run_items);
                                    echo "$count_items";
                                    }
                                    else{
                                        global $con;
                                    $get_items = "SELECT * FROM cart WHERE ip = '::1'";
                                    $run_items = mysqli_query($con,$get_items);
                                    $count_items = mysqli_num_rows($run_items);
                                    echo "$count_items";
                                        
                                    }
                                    
                                    
                                    ?></a></li>
                                <li><a href="cart.php"><span class='glyphicon glyphicon-shopping-cart'></a></li>
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
        </div>
    
    <!--/.top-bar-->

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
                        <li><a href="index.php">Home</a></li>
                        
                            
               <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">BRANDS <span class="caret"></span></a>
          <ul class="dropdown-menu">
              
                            <?php
                            get_brands_menu();
                            ?>
              
           
         
          </ul>
        </li>
                        <li><a href="about.html">About Us</a></li>
                        <li><a href="contact.php">Contact Us</a></li>
                        <?php
                        if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == true) {
                        $error = "success";
                        echo "<li><a href='login.php'>Log Out</a></li>";
                        
                        }
                        else {
                            echo "<li><a href='login.php'>Log In</a></li>";
                            
                        }
                        
                        
                        ?>
                        
                        <li><a href="admin_login.php">Admin Panal</a></li>
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
        </div>
    </header><!--/header-->
    

     <section id="partner">
        <div class="container">
            <div class="center wow fadeInDown">
                <h2>Our Purpose</h2>
                <p class="lead">Providing cellular and computer techonology at cheapest prices in Pakistan <br> Also one of the biggest online hub of Tech Info</p>
            </div>    

            <div class="partners">
                <ul>
                    <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms" src="images/partners/partner1.png"></a></li>
                    <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms" src="images/partners/partner2.png"></a></li>
                    <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms" src="images/partners/partner3.png"></a></li>
                    <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1200ms" src="images/partners/partner4.png"></a></li>
                    <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1500ms" src="images/partners/partner5.png"></a></li>
                </ul>
            </div>        
        </div>
    </section> 
    
    <div class="form clearfix">
  <div class="header">
    <img src="http://josh-ruther4d.com/wp-content/uploads/2013/05/shopping-cart.png" alt="shopping cart" />
    My Shopping Cart
  </div>
  
  <ul>
    <li></li>
    <li>Img</li>
    <li>Product Name</li>
    <li>Model</li>
    <li>Quantity</li>
    <li>Unit Price</li>
    <li>Total</li>
  </ul>
  
  <ul>
    <li>x</li>
    <li><img src="http://josh-ruther4d.com/wp-content/uploads/2013/05/item_1.png" alt="htc one" /></li>
    <li>HTC One X</li>
    <li>RJ445X</li>
    <li>
      <input type="text" value="1" />
      <div class="controls">
      <div class="up button">+</div>
      <div class="down button">-</div></div>
    </li>
    <li>$550</li>
    <li>$550</li>
  </ul>
  
   <ul>
    <li>x</li>
    <li><img src="http://josh-ruther4d.com/wp-content/uploads/2013/05/item_2.png" alt="flip case" /></li>
    <li>HTC One X Flip Case</li>
    <li>RU469D</li>
    <li>
      <input type="text" value="2" />
      <div class="controls">
      <div class="up button2">+</div>
      <div class="down down2">-</div></div>
    </li>
    <li>$10</li>
    <li>$10</li>
  </ul>
  
  <div class="total">
    Subtotal: $560 <br />
    Total: $560
  </div>
  
  <div>
    &lt;- Continue Shopping
  
  <input type="submit" value="Checkout -&gt;" />  </div>

  
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
                        <li><a href= "admin_login.php">Admin Panal</a></li>
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