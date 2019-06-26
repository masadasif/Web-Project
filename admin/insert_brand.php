<?php


$user = 'root';
$pass = '';
$db = 'mydatabase';


$con = new mysqli('localhost',$user,$pass,$db) or die("unable to connect") ;
 
if($con){
    
    echo "CONNECTED to Data Base";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>TechPlanet Admin Panal</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/sb-admin.css" rel="stylesheet">
    <link href="css/plugins/morris.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="css1/styles.css" rel="stylesheet">
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">TechPlanet Admin Panal</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu message-dropdown">
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>Asad Asif</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>Usama Iqbal</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                       
                        <li class="message-footer">
                            <a href="#">Read All New Messages</a>
                        </li>
                    </ul>
                </li>
               
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>  <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            
        <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li >
                        <a href="admin.php"><i class="fa fa-fw fa-table"></i> Dashboard</a>
                    </li>
                    <li >
                        <a href="view_brands.php"><i class="fa fa-fw fa-desktop"></i> Brands</a>
                    </li>
                    
                    <li >
                        <a href="insert_news.php"><i class="fa fa-fw fa-edit"></i>Insert News</a>
                    </li>
                    <li >
                        <a href="view_news.php"><i class="fa fa-fw fa-edit"></i>View News </a>
                    </li >
                    <li class="active">
                        <a href="insert_brand.php"><i class="fa fa-fw fa-wrench"></i> Insert Brands</a>
                    </li>
                    <li  >
                        <a href="view_device.php"><i class="fa fa-fw fa-desktop"></i> Devices</a>
                    </li>
                    
                    <li >
                        <a href="insert_device.php"><i class="fa fa-fw fa-wrench"></i> Insert Devices</a>
                    </li>
                     <li >
                        <a href="reg_users.php"><i class="fa fa-fw fa-wrench"></i>Registered Users</a>
                    </li>
                      <li >
                        <a href="user_msg.php"><i class="fa fa-fw fa-wrench"></i> User Messages</a>
                    </li> 
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

 
        
        <div id='text'>
        <form method="post" action="" enctype="multipart/form-data">
         <div class="design">
        <table width="980" align="center" border='0'>
       
       <tr align="left">
           <td colspan="3"><h2>Insert New Brand, Operation System, Year, Port</h2></td>
       </tr>
            
            
         <tr>
            <td><b>Enter Brand:</b></td>
            <td ><input type="text" name="brand"/></td>
            <td><input type="Submit" name="insert_brand" value="Insert Brand"/></td>
          </tr>
            
    <!--    <tr>
            <td><b>Enter Year:</b></td>
            <td ><input type="text" name="year"/></td>
            <td><input type="Submit" name="insert_year" value="Insert Year"/></td>
          </tr>
        
        <tr>
            <td><b>Enter Port:</b></td>
            <td ><input type="text" name="port"/></td>
            <td><input type="Submit" name="insert_port" value="Insert Port"/></td>
          </tr> -->
        
        <tr>     
            <td><b>Enter Operation System:</b></td>
            <td ><input type="text" name="os"/></td>
            <td><input type="Submit" name="insert_os" value="Insert OS"/></td>
       </tr>
    
             </table>
            </div>
            </form>
        </div>
        
        
        <?php
        
        if (isset($_POST['insert_brand'])){
            
            $brand = $_POST['brand'];
            
       $sql ="INSERT INTO brand (brand_title) VALUES ('$brand')";
       $query=mysqli_query($con,$sql);
        
        if($query){
        echo "<script> alert ('Brand inserted successfully')</script>";
            
        }
        else { echo "<script> alert ('Brand NOT Inserted following error occured !!!!')</script>"."Error: " . $sql . "<br>" . mysqli_error($con);  }
            
        }
        
       
        
        if (isset($_POST['insert_os'])){
            
            $os = $_POST['os'];
            
       $sql ="INSERT INTO os (os) VALUES ('$os')";
       $query=mysqli_query($con,$sql);
        
        if($query){
        echo "<script> alert ('Operating System inserted successfully')</script>";
            
        }
        else { echo "<script> alert ('Operating System NOT Inserted following error occured !!!!')</script>"."Error: " . $sql . "<br>" . mysqli_error($con);  }
            
        }
        
        if (isset($_POST['insert_year'])){
            
            $year = $_POST['year'];
            
       $sql ="INSERT INTO year (year) VALUES ('$year')";
       $query=mysqli_query($con,$sql);
        
        if($query){
        echo "<script> alert ('Year inserted successfully')</script>";
            
        }
        else { echo "<script> alert ('Year NOT Inserted following error occured !!!!')</script>"."Error: " . $sql . "<br>" . mysqli_error($con);  }
            
        }
        
        if (isset($_POST['insert_port'])){
            
            $port = $_POST['port'];
            
       $sql ="INSERT INTO port (port) VALUES ('$port')";
       $query=mysqli_query($con,$sql);
        
        if($query){
        echo "<script> alert ('Port inserted successfully')</script>";
            
        }
        else { echo "<script> alert ('Port NOT Inserted following error occured !!!!')</script>"."Error: " . $sql . "<br>" . mysqli_error($con);  }
            
        }
        
        ?>

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>


