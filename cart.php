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
    <link href="css/cart.css" rel="stylesheet">
          
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
     <div class="container">
    <div class="box">
        <h1>Your Shopping Cart</h1>
        <br><br>
          <form method="post" action="cart.php" enctype="multipart/form-data">
         <!--<div class="table"> 
         <table width="90%" align="center" border='2' cellpadding="10"> -->
             <div class="panel panel-default">
             <table class="table table-hover table-responsive table-bordered">
            <tr align="center" style="bgcolor:#a19f9e">
                <td> <b>NO.</b></td>
                <td> <b>REMOVE</b> </td>
                <td> <b>PRODUCT</b> </td>
                <td> <b>QUANTITY</b> </td>
                <td> <b>PRICE</b> </td>
            
            </tr>
                 <?php 
                 
                 $ip = getip();
          $total = 0;
                 $i=0;
     $query = "SELECT * FROM cart WHERE ip = '$ip'";
     $run_price = mysqli_query($con,$query);
                 
     while ($record=mysqli_fetch_array($run_price)){
         
         $device_id = $record['p_id'];
         $i++;
         $price = "SELECT * FROM devices WHERE device_id = '$device_id'";
         $run_device_price = mysqli_query($con,$price);
         
         while($device_price=mysqli_fetch_array($run_device_price)){
             
             $total_price = array($device_price['price']);
             $price =  $device_price['price'];
             $device_name = $device_price['name'];
             $device_img1 = $device_price['img1'];
             $values = array_sum($total_price);
             $total += $values;
             
            
                 
                 ?>
                 
                 
            <tr align="center">
                <td> <p style="margin: 51px 0px"><b><?php echo $i?></b></p></td>
                <td> <input type="checkbox" name="removee[]" style="margin: 55px 0px" value="<?php echo $device_id ; ?>"> </td>
                <td> <?php echo $device_name; ?><br><img src="admin/admin_img/image_front/<?php echo $device_img1;?>" height="100" width="75"></td>
                <td> <input type="number" name="qty" value="" style="width:50px;margin: 44px 0px"/> </td>
                
                <?php 
             global $con;
             if(isset($_POST['update'])){
                 $ip = getip();
                 $qty = $_POST['qty'];
                 $insert_qty = "UPDATE cart SET qty = '$qty' WHERE ip = '$ip'";
                 $query = mysqli_query($con,$insert_qty);
                 $total = $total * $qty;
                 
                 
                 
             }
             
             
                ?>
                
                <td> <p style="margin: 50px 0px"><b><?php echo $price; ?> Pkr</b></p> </td>
            
            </tr>
               
                 <?php }} ?>
                   <tr align="center">
                       <td colspan="2"><button type="submit" name="remove" class="btn btn-danger">Remove All</button></td>
                       
                     <td><b>Total Items&nbsp;:&nbsp; <?php echo $i; ?> </b></td>
                       <td colspan="2"><b><b>Total Price&nbsp;:&nbsp;&nbsp;</b><?php echo $total; ?> Pkr</b></td>
                 </tr>
                 
                 <tr align="center">
                     <td></td>
                     <td></td>
                     <td><a href="index.php"><button type="button" class="btn btn-primary">Continue Shopping</button></a></td>
                     <td><button type="submit" name="update" class="btn btn-primary">Update Cart</button></td>
                     <td colspan="1"><a href="checkout.php"><button type="button" class="btn btn-primary">Checkout</button></a></td>
                 </tr>
                 
                 </table>
              </div>
              </form>
         </div>
      
    </div>
   <?php 
         function update(){   
             global $con;
         if(isset($_POST['remove'])){
            $delete_pro ="DELETE FROM cart";
            $run_delete = mysqli_query($con,$delete_pro);
            if($run_detele){
        
                echo "<script> window.open('cart.php','_self') </script>";
            }
             else{
                 echo "<script> window.open('cart.php','_self') </script>";
             }
            }
         
                           
                          
    
    if(isset($_POST['update'])){
        foreach($_POST['removee'] as $remove_id ){
            
            $delete_pro ="DELETE FROM cart WHERE p_id = '$remove_id'";
            $run_delete = mysqli_query($con,$delete_pro);
            
            if($run_detele){
                
                echo "<script> window.open('cart.php','_self') </script>";
            }
            else{
                 echo "<script> window.open('cart.php','_self') </script>";
             }
            }
        }
         }
    
    echo @$run = update();

    
    ?>
    
   
    <div class="last">
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
    </div>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>

</body>
</html>
