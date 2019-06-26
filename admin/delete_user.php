<?php


$user = 'root';
$pass = '';
$db = 'mydatabase';


$con = new mysqli('localhost',$user,$pass,$db) or die("unable to connect") ;
 


if(isset($_GET['delete_user'])){
    
    $delete_id = $_GET['delete_user'];
    
    $get_delete = "delete from users where id = '$delete_id'";
    $run_delete = mysqli_query($con, $get_delete);
    
    if($run_delete){
                     echo "<script> alert ('User Deleted')</script>";
         echo " <script type='text/javascript'>
            window.location.href = 'reg_users.php';
          </script> ";
        
    }
}