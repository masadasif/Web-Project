<?php


$user = 'root';
$pass = '';
$db = 'mydatabase';


$con = new mysqli('localhost',$user,$pass,$db) or die("unable to connect") ;
 


if(isset($_GET['delete_msg'])){
    
    $delete_id = $_GET['delete_msg'];
    
    $get_delete = "delete from msg where msg_id = '$delete_id'";
    $run_delete = mysqli_query($con, $get_delete);
    
    if($run_delete){
                     echo "<script> alert ('Message Deleted')</script>";
         echo " <script type='text/javascript'>
            window.location.href = 'user_msg.php';
          </script> ";
        
    }
}