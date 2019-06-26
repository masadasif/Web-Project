<?php


$user = 'root';
$pass = '';
$db = 'mydatabase';


$con = new mysqli('localhost',$user,$pass,$db) or die("unable to connect") ;
 


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
    <link href="css1/new.css" rel="stylesheet">
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
                    <li class="active">
                        <a href="view_brands.php"><i class="fa fa-fw fa-desktop"></i> Brands</a>
                    </li>
                    
                    <li >
                        <a href="insert_news.php"><i class="fa fa-fw fa-edit"></i>Insert News</a>
                    </li>
                    <li >
                        <a href="view_news.php"><i class="fa fa-fw fa-edit"></i>View News </a>
                    </li >
                    <li >
                        <a href="insert_brand.php"><i class="fa fa-fw fa-wrench"></i> Insert Brands</a>
                    </li>
                    <li >
                        <a href="view_device.php"><i class="fa fa-fw fa-desktop"></i> Devices</a>
                    </li>
                    
                    <li>
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

 
        
        <form method="post" action="view_brands.php" enctype="multipart/form-data">
         <div class="design">
             
         
             
        <table width="1180" align="center" border='2'>
       
       <tr align = "center">
           <td colspan="7"> <h2 style="color: #0e56af"> All Brands in DATABASE </h2></td>
            
            </tr>
            
            
            <tr align = "center">
            <td style="background-color: #0e56af"><b>Brand No.</b></td>
            <td style="background-color: #0e56af"><b>Brand</b></td>
            <td style="background-color: #0e56af"><b>Delete</b></td>
            
            </tr>
            
            <?php
            
            
            $i = 0;
        $get_brand = "select * from brand";
        $run_brand = mysqli_query($con, $get_brand);
            while($row_brand = mysqli_fetch_array($run_brand)){
                
                $brand_id = $row_brand['brand_id'];
                $brand_name = $row_brand['brand_title'];
                $i++;
                
        
   
        
            ?>
            
            <tr align = "center">
                
            <td><b><?php echo $i;  ?></b></td>
            <td><b><?php echo $brand_name;  ?></b></td>
            <td><b><a href='delete_brand.php?delete_brand=<?php echo $brand_id ?>'> Delete </a> </b></td>
            
            </tr>
             <?php  }  ?>
            
             </table>
            
             
              <table width="90%" align="center" border='2'>
       
       <tr align = "center">
           <td colspan="7"> <h2 style="color: #0e56af"> All Operating Systems in DATABASE </h2></td>
            
            </tr>
            
            
            <tr align = "center">
            <td style="background-color: #0e56af"><b>Operating System No.</b></td>
            <td style="background-color: #0e56af"><b>Operating System</b></td>
            <td style="background-color: #0e56af"><b>Delete</b></td>
            
            </tr>
            
            <?php
            
            
            $i = 0;
        $get_os = "select * from os";
        $run_os = mysqli_query($con, $get_os);
            while($row_os = mysqli_fetch_array($run_os)){
                
                $os_id = $row_os['os_id'];
                $os_name = $row_os['os'];
                $i++;
                
        
   
        
            ?>
            
            <tr align = "center">
                
            <td><b><?php echo $i;  ?></b></td>
            <td><b><?php echo $os_name;  ?></b></td>
            <td><b><a href='delete_os.php?delete_os=<?php echo $os_id ?>'> Delete </a> </b></td>
            
            </tr>
             <?php  }  ?>
            
             </table>
            </div>
            </form>
        
        
       
        

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


