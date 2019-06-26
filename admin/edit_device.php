<?php


$user = 'root';
$pass = '';
$db = 'mydatabase';


$con = new mysqli('localhost',$user,$pass,$db) or die("unable to connect") ;
 
if($con){
    
    echo "CONNECTED to Data Base";
}

if(isset($_GET['edit_device'])){
    
    $edit_id = $_GET['edit_device'];
    
    $get_edit = "select * from devices where device_id = '$edit_id'";
    $run_edit = mysqli_query($con, $get_edit);
    $row_edit = mysqli_fetch_array($run_edit);
    
     $update_id = $row_edit['device_id'];
    
         $brand_edt = $row_edit['brand_id'];
         $year_edt = $row_edit['year_id'];
         $os_edt = $row_edit['os_id'];
         $port_edt = $row_edit['port_id'];
         $name_edt = $row_edit['name'];
         $image1_edt =$row_edit['img1'];
         $image2_edt =$row_edit['img2'];
         $processor_edt = $row_edit['processor'];
         $ram_edt = $row_edit['ram'];
         $memory_edt = $row_edit['internal_memory'];
         $screen_edt = $row_edit['screen'];
         $back_cam_edt = $row_edit['cam_back'];
         $front_cam_edt = $row_edit['cam_front'];
         $battery_edt = $row_edit['battery'];
         $weight_edt = $row_edit['weight'];
         $descr_edt = $row_edit['descr'];
         $price_edt = $row_edit['price'];
         $keywords_edt = $row_edit['key_words'];
         $link_1_edt = $row_edit['link1'];
         $link_2_edt = $row_edit['link2'];
         $link_3_edt = $row_edit['link3'];
         $link_4_edt = $row_edit['link4'];
       
    
    $get_brand = "select * from brand where brand_id = '$brand_edt'";
    $run_brand = mysqli_query($con, $get_brand);
    $row_brand = mysqli_fetch_array($run_brand);
    $brand_edit = $row_brand['brand_title'];
    $upper = strtoupper($brand_edit);
    
    $get_year = "select * from year where year_id = '$year_edt'";
    $run_year = mysqli_query($con, $get_year);
    $row_year = mysqli_fetch_array($run_year);
    $year_edit = $row_year['year'];
    
    
    $get_os = "select * from os where os_id = '$os_edt'";
    $run_os = mysqli_query($con, $get_os);
    $row_os = mysqli_fetch_array($run_os);
    $os_edit = $row_os['os'];
    
    
    $get_port = "select * from port where port_id = '$port_edt'";
    $run_port = mysqli_query($con, $get_port);
    $row_port = mysqli_fetch_array($run_port);
    $port_edit = $row_port['port'];
    
    
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
                    <li>
                        <a href="charts.html"><i class="fa fa-fw fa-desktop"></i> Brands</a>
                    </li>
                    
                    <li>
                        <a href="charts.html"><i class="fa fa-fw fa-edit"></i>Edit Brands</a>
                    </li>
                    <li>
                        <a href="insert_brand.php"><i class="fa fa-fw fa-wrench"></i> Insert Brands</a>
                    </li>
                    <li>
                        <a href="view_device.php"><i class="fa fa-fw fa-desktop"></i> Devices</a>
                    </li>
                    <li class="active">
                        <a href="edit_device.php"><i class="fa fa-fw fa-edit"></i>Edit Devices </a>
                    </li>
                    <li >
                        <a href="insert_device.php"><i class="fa fa-fw fa-wrench"></i> Insert Devices</a>
                    </li>
                    <li >
                        <a href="reg_users.php"><i class="fa fa-fw fa-wrench"></i>Registered Users</a>
                    </li>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

   <div id='text'>
        <form method="post" action="" enctype="multipart/form-data">
         <div class="design">
        <table width="90%" align="center" border='0px'>
       
       <tr align="center">
           <td colspan="2"><h2>Edit Device</h2></td>
       </tr>
            
            
         <tr>
                <td><b>Device Name:</b></td>
            <td><input type="text" name="name" value="<?php echo $name_edt; ?>"/></td>
       </tr>
            
             
       <tr>
           <td>  <b>Device Brand:</b></td>
            <td>
                
                <select name="device_brand">
                <option value="<?php echo $brand_edt; ?>"> <?php echo $upper; ?></option>

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
                <option value="<?php echo $year_edt; ?>"> <?php echo $year_edit; ?></option>

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
                <option value="<?php echo $os_edt; ?>"> <?php echo $os_edit; ?></option>

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
                <option value="<?php echo $port_edt; ?>"> <?php echo $port_edit; ?></option>

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
            <td><input type="file" name="image1"/><img src="admin_img/image_front/<?php echo $image1_edt;  ?>" width='70' height='100' img style="margin: 7px 0px"/></td>
       </tr>
             <tr>
                 <td><b>Device Image Back</b></td>
            <td><input type="file" name="image2"/> <img src="admin_img/image_back/<?php echo $image2_edt;  ?>" width='70' height='100' img style="margin: 7px 0px"></td>
       </tr>
              <tr>
                <td><b>Processsor:</b></td>
            <td><input type="text" name="processor" value="<?php echo $processor_edt; ?>"/></td>
       </tr>
              <tr>
                <td><b>RAM:</b></td>
            <td><input type="text" name="ram" value="<?php echo $ram_edt; ?>"/></td>
       </tr>
             <tr>
                <td><b>Internal Memory:</b></td>
            <td><input type="text" name="memory" value="<?php echo $memory_edt; ?>"/></td>
       </tr>
           <tr>
                <td><b>Screen Size:</b></td>
            <td><input type="text" name="screen" value="<?php echo $screen_edt; ?>"/></td>
       </tr>
           <tr>
                <td><b>Back Camera:</b></td>
            <td><input type="text" name="back_cam" value="<?php echo $back_cam_edt; ?>"/></td>
       </tr>
              <tr>
                <td><b>Front Camera:</b></td>
            <td><input type="text" name="front_cam" value="<?php echo $front_cam_edt; ?>"/></td>
       </tr>
            <tr>
                <td><b>Battery:</b></td>
            <td><input type="text" name="battery" value="<?php echo $battery_edt; ?>"/></td>
       </tr>
             <tr>
                <td><b>Weight:</b></td>
            <td><input type="text" name="weight" value="<?php echo $weight_edt; ?>"/></td>
       </tr>
             <tr>
                <td><b>Device Description</b></td>
            <td><textarea name="descr" cols="100" rows="10"> <?php echo $descr_edt; ?></textarea></td>
       </tr>
            <tr>
                <td><b>Price</b></td>
            <td><input type="text" name="price" value="<?php echo $price_edt; ?>"/></td>
       </tr>
            <tr>
                <td><b>Keywords:</b></td>
            <td><input type="text" name="keywords" value="<?php echo $keywords_edt; ?>"/></td>
       </tr>
            <tr>
                <td><b>Daraz.Pk :</b></td>
            <td><input type="text" name="link_1" value="<?php echo $link_1_edt; ?>"/></td>
       </tr>
            <tr>
                <td><b>Homeshoping.Pk :</b></td>
            <td><input type="text" name="link_2" value="<?php echo $link_2_edt; ?>"/></td>
       </tr>
            <tr>
                <td><b>Shophive.Com :</b></td>
            <td><input type="text" name="link_3" value="<?php echo $link_3_edt; ?>"/></td>
       </tr>
            <tr>
                <td><b>Telemart.Pk :</b></td>
            <td><input type="text" name="link_4" value="<?php echo $link_4_edt; ?>"/></td>
       </tr>
           
                    
              <tr align="center">
            <td colspan="2"><input type="Submit" name="update_device" value="Update Device"/></td>
                  
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

if (isset($_POST['update_device'])){
    
         
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
    
       $sql ="UPDATE devices SET name = '$name', brand_id = '$brand', year_id = ' $year', os_id = '$os', port_id = '$port', img1 = '$image1', img2 = '$image2',
       price = '$price', descr = '$descr', ram = '$ram', processor = '$processor', internal_memory = '$memory', screen = '', battery = '', cam_back = '$back_cam', cam_front = '$front_cam', weight = '$weight', key_words = '$keywords', date = NOW(), link1 = '$link_1', link2 = '$link_2', link3 = '$link_3', link4 = '$link_4' where device_id = '$update_id'";
       
       $query=mysqli_query($con,$sql);
        
        if($query){
        echo "<script> alert ('Device Updated successfully')</script>";
            
        }
        else { echo "<script> alert ('Device NOT Updated following error occured !!!!')</script>"."Error: " . $sql . "<br>" . mysqli_error($con);  }
       
       echo " <script type='text/javascript'>
            window.location.href = 'view_device.php';
          </script> ";
}  



?>
