<?php


$user = 'root';
$pass = '';
$db = 'mydatabase';


$con = new mysqli('localhost',$user,$pass,$db) or die("unable to connect") ;
 


if(isset($_GET['delete_os'])){
    
    $delete_id = $_GET['delete_os'];
    
    $get_delete = "delete from os where os_id = '$delete_id'";
    $run_delete = mysqli_query($con, $get_delete);
    
    if($run_delete){
                     echo "<script> alert ('Operating System Deleted')</script>";
         echo " <script type='text/javascript'>
            window.location.href = 'view_brands.php';
          </script> ";
        
    }
}