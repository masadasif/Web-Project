<?php


$user = 'root';
$pass = '';
$db = 'mydatabase';


$con = new mysqli('localhost',$user,$pass,$db) or die("unable to connect") ;
 


if(isset($_GET['delete_device'])){
    
    $delete_id = $_GET['delete_device'];
    
    $get_delete = "delete from devices where device_id = '$delete_id'";
    $run_delete = mysqli_query($con, $get_delete);
    
    if($run_delete){
                     echo "<script> alert ('Device Deleted')</script>";
         echo " <script type='text/javascript'>
            window.location.href = 'view_device.php';
          </script> ";
        
    }
}