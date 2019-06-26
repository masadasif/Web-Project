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
    <meta name="description" content="">
    <meta name="author" content="">
    
	
	<!-- core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link href="css/contact.css" rel="stylesheet">
          
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
                        <li class="active"><a href="contact.html">Contact Us</a></li>
                        <li><a href="login.php">Login</a></li>
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

        <div class="contact">
        
        <div id="text">Phone Numbers</div>
            <br>
                <span class="glyphicon glyphicon-earphone"></span>
                <br> <b>Feel free to call between 9 AM to 12PM Monday to Friday </b>
                <br> <b>Mobile +92-345-6193935,+92-305-9794902  </b>
                <br> <b>Landline +92-42-38505666, Fax +92-42-424861424</b>
                <br> <b> </b> 
        </div>
            </div>
        <hr>
        <div class="container">
        <div class="contact">
           
        <div id="text">Email Address</div>
            <br>
                <span class="glyphicon glyphicon-envelope"></span> 
                <br> <b>masadasif@gmail.com (Beckend Developer) </b>
                <br> <b>(techplanet.pk@gmail.com)Offical Email </b>
                <br> <b>Usama Iqbal (bscs-fa13-021@tuf.edu.pk) </b>    
        </div> 
        </div>
        <hr>
            <div class="container">
        <div class="contact">
        
        <div id="text">Head Office Address</div>
            <br>
                <span class="glyphicon glyphicon-home"></span> 
                <br> <b>House No. 467, Phase 2 </b>
                <br> <b>DHA Lahore </b>
                <br> <b>Pakistan, POBOX No. 1457548, Lahore </b>    
        </div> 
            </div>
    
<hr>
 <br>
    <br>
    
     <section id="contact-page">
        <div class="container">
            <div class="center">   
                
                <h2><div id="tex">Drop Your Message</div></h2>
                <p class="lead" style="color:#069"><b>Feel free to leave messages anytime regarding our website.</b></p>
                
            </div> 
            <div class="row contact-wrap"> 
                <div class="status alert alert-success" style="display: none"></div>
                <form id="contact-form" class="contact-form" name="contact-form" method="post" action="contact.php">
                    <div class="col-sm-5 col-sm-offset-1">
                        <div class="form-group">
                            <label> <div class="lab">Name *</div></label>
                            <input type="text" name="name" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label><div class="lab">Email *</div></label>
                            <input type="email" name="email" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label><div class="lab">Phone </div></label>
                            <input type="number" class="form-control" name="phone">
                        </div>
                        <div class="form-group">
                            <button type="submit" name="submit_msg" class="btn btn-primary btn-lg" required="required">Submit Message</button>
                        </div>                        
                    </div>
                    <div class="col-sm-5">
                        <div class="form-group">
                            <label><div class="lab">Subject *</div></label>
                            <input type="text" name="subject" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label><div class="lab">Message *</div></label>
                            <textarea name="message" id="message" required="required" class="form-control" rows="8"></textarea>
                        </div>      
                        <p style="color: red">fields with * are compulsory </p>
                    </div>
                    
    <script>
      var form = document.querySelector('#contact-form');
        document.querySelector('a').addEventListner('click',function(e){
                e.preventDefault();
        form.reset();
       },false);
    </script>
                </form> 
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#contact-page-->
    
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

<?php
if (isset($_POST['submit_msg'])){
    
         
         $name = $_POST['name'];
         $email = $_POST['email'];
         $subject = $_POST['subject'];
         $msg = $_POST['message'];
         $phone = $_POST['phone'];
         
    
     $sql ="INSERT INTO msg (name,number,email,subject,detail) VALUES ('$name','$phone','$email','$subject','$msg')";
       $query=mysqli_query($con,$sql);
        
        if($query){
        echo "<script> alert ('Message sent successfully')</script>";
            
        }
        else { echo "<script> alert ('Message NOT sent following error occured !!!!')</script>"."Error: " . $sql . "<br>" . mysqli_error($con);  }
       

}

?>