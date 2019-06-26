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
    
    
           
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="admin_img/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="admin_img/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="admin_img/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="admin_img/ico/apple-touch-icon-57-precomposed.png">
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
                <a class="navbar-brand" href="admin.php">techPlanet Admin Panal</a>
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
                    <li >
                        <a href="insert_brand.php"><i class="fa fa-fw fa-wrench"></i> Insert Brands</a>
                    </li>
                    <li  >
                        <a href="view_device.php"><i class="fa fa-fw fa-desktop"></i> Devices</a>
                    </li>
                    
                    <li class="active">
                        <a href="insert_device.php"><i class="fa fa-fw fa-wrench"></i> Insert Devices</a>
                    </li>
                    <li >
                        <a href="reg_users.php"><i class="fa fa-fw fa-wrench"></i>Registered Users</a>
                    </li>
                    <li>
                        <a href="user_msg.php"><i class="fa fa-fw fa-wrench"></i> User Messages</a>
                    </li>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

   <div id='text'>
        <form method="post" action="insert_device.php" enctype="multipart/form-data">
         <div class="design">
        <table width="90%" align="center" border='2'>
       
       <tr align="center">
           <td colspan="2"><h2>Insert New Device</h2></td>
       </tr>
            
            
         <tr>
                <td><b>Device Name:</b></td>
            <td><input type="text" name="name"/></td>
       </tr>
            
             
       <tr>
           <td>  <b>Device Brand:</b></td>
            <td>
                
                <select name="device_brand">
                <option>Select a Brand</option>

                    <?php

$get_brands = "select * from brand";
$run_brands = mysqli_query($con, $get_brands);
        
while($row_brands = mysqli_fetch_array($run_brands))
{   $brand_id =$row_brands['brand_id'];
    $brand_title = $row_brands['brand_title'];
    $upper = strtoupper($brand_title);
    echo "<option value='$brand_id'>$upper</option>";
}

?>
</select>
           
        </td>
       </tr> 
            
             <tr>
           <td>  <b>Release Year:</b></td>
            <td>
                
                <select name="release_year">
                <option>Select a Year</option>

                    <?php

$get_years = "select * from year";
$run_years = mysqli_query($con, $get_years);
        
while($row_years = mysqli_fetch_array($run_years))
{   $year_id =$row_years['year_id'];
    $year = $row_years['year'];
    echo "<option value='$year_id'>$year</option>";
}

?>
</select>
           
        </td>
       </tr> 
            
              <tr>
           <td>  <b>Operating System:</b></td>
            <td>
                
                <select name="os">
                <option>Select an Operating System</option>

                    <?php

$get_os = "select * from os";
$run_os = mysqli_query($con, $get_os);
        
while($row_os = mysqli_fetch_array($run_os))
{   $os_id =$row_os['os_id'];
    $os = $row_os['os'];
    echo "<option value='$os_id'>$os</option>";
}

?>
</select>
           
        </td>
       </tr> 
            
            
                 <tr>
           <td>  <b>Port Type:</b></td>
            <td>
                
                <select name="port">
                <option>Select a Port</option>

                    <?php

$get_ports = "select * from port";
$run_ports = mysqli_query($con, $get_ports);
        
while($row_ports = mysqli_fetch_array($run_ports))
{   $port_id =$row_ports['port_id'];
    $port = $row_ports['port'];
    echo "<option value='$port_id'>$port</option>";
}
?>
</select>
           
        </td>
       </tr> 
             <tr>
                 <td><b>Device Image Front</b></td>
            <td><input type="file" name="image1"/></td>
       </tr>
             <tr>
                 <td><b>Device Image Back</b></td>
            <td><input type="file" name="image2"/></td>
       </tr>
              <tr>
                <td><b>Processsor:</b></td>
            <td><input type="text" name="processor"/></td>
       </tr>
              <tr>
                <td><b>RAM:</b></td>
            <td><input type="text" name="ram"/></td>
       </tr>
             <tr>
                <td><b>Internal Memory:</b></td>
            <td><input type="text" name="memory"/></td>
       </tr>
           <tr>
                <td><b>Screen Size:</b></td>
            <td><input type="text" name="screen"/></td>
       </tr>
           <tr>
                <td><b>Back Camera:</b></td>
            <td><input type="text" name="back_cam"/></td>
       </tr>
              <tr>
                <td><b>Front Camera:</b></td>
            <td><input type="text" name="front_cam"/></td>
       </tr>
            <tr>
                <td><b>Battery:</b></td>
            <td><input type="text" name="battery"/></td>
       </tr>
             <tr>
                <td><b>Weight:</b></td>
            <td><input type="text" name="weight"/></td>
       </tr>
             <tr>
                <td><b>Device Description</b></td>
            <td><textarea name="descr" cols="100" rows="10"></textarea></td>
       </tr>
            <tr>
                <td><b>Price</b></td>
            <td><input type="text" name="price"/></td>
       </tr>
            <tr>
                <td><b>Keywords:</b></td>
            <td><input type="text" name="keywords"/></td>
       </tr>
            <tr>
                <td><b> Daraz.Pk :</b></td>
            <td><input type="text" name="link_1"/></td>
       </tr>
            <tr>
                <td><b> Homeshoping.Pk :</b></td>
            <td><input type="text" name="link_2"/></td>
       </tr>
            <tr>
                <td><b> Shophive.Com :</b></td>
            <td><input type="text" name="link_3"/></td>
       </tr>
            <tr>
                <td><b> Telemart.Pk :</b></td>
            <td><input type="text" name="link_4"/></td>
       </tr>
            
                    
              <tr align="center">
            <td colspan="2"><input type="Submit" name="insert_device" value="Insert Device"/></td>
                  
       </tr>
        
        </table>
       </div>
        </form> 
       </div>

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

<?php 

if (isset($_POST['insert_device'])){
    
         
         $brand = $_POST['device_brand'];
         $year = $_POST['release_year'];
         $os = $_POST['os'];
         $port = $_POST['port'];
         $name = $_POST['name'];
         $processor = $_POST['processor'];
         $ram = $_POST['ram'];
         $memory = $_POST['memory'];
         $screen = $_POST['screen'];
         $back_cam = $_POST['back_cam'];
         $front_cam = $_POST['front_cam'];
         $battery = $_POST['battery'];
         $weight = $_POST['weight'];
         $descr = $_POST['descr'];
         $price = $_POST['price'];
         $keywords = $_POST['keywords'];
         $link_1 = $_POST['link_1'];
         $link_2 = $_POST['link_2'];
         $link_3 = $_POST['link_3'];
         $link_4 = $_POST['link_4'];
    
        
    
    
    $target = "admin_img/image_front/".basename($_FILES['image1']['name']);
    $image1 = $_FILES['image1']['name'];
    $move=move_uploaded_file($_FILES['image1']['tmp_name'], $target);
    
    $target = "admin_img/image_back/".basename($_FILES['image2']['name']);
    $image2 = $_FILES['image2']['name'];
    $move=move_uploaded_file($_FILES['image2']['tmp_name'], $target); 
    
       $sql ="INSERT INTO devices (brand_id,year_id,os_id,port_id,name,img1,img2,price,descr,ram,processor,internal_memory,screen,battery,cam_back,cam_front,weight,key_words,date,link1,link2,link3,link4) VALUES ('$brand','$year','$os','$port','$name','$image1','$image2','$price','$descr','$ram','$processor','$memory','$screen','$battery','$back_cam','$front_cam','$weight','$keywords',NOW(),'$link_1','$link_2','$link_3','$link_4')";
       $query=mysqli_query($con,$sql);
        
        if($query){
        echo "<script> alert ('Device inserted successfully')</script>";
            
        }
        else { echo "<script> alert ('Device NOT Inserted following error occured !!!!')</script>"."Error: " . $sql . "<br>" . mysqli_error($con);  }
       
   
}  



?>
