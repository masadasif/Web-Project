<?php
include("db.php");


    
// function for top menu brands

 function get_brands_menu(){
global $con;

 $get_brands = "select * from brand";
   $run_brands = mysqli_query($con, $get_brands);
        
while($row_brands = mysqli_fetch_array($run_brands))
{   $brand_id =$row_brands['brand_id'];
    $brand_title = $row_brands['brand_title'];
    $upper = strtoupper($brand_title);
     
 echo "<li><a href='index.php?brand=$brand_id'>$upper</a></li>";
 echo "";

}
} 




//function for getting product on base of brand_id

function get_devices_through_brand_id(){
    global $con;

    if(!isset($_GET['brand'])){
    
    
    $get_products = "select * from devices order by rand() Limit 0,18";
    
        
    $run_products = mysqli_query($con,$get_products);
 
        
    while ($row_products=mysqli_fetch_array($run_products)){
        
        $image = $row_products['img1'];
        $device_id = $row_products['device_id'];
        $device_name = $row_products['name'];
        $price = $row_products['price'];
        
    echo "<div id='single_device'>
    <div id='device_image'>
     <img src='admin/admin_img/image_front/$image' width='160' height='212' alt=''>
     </div>
        <h2> $device_name  </h2>
        <p>$price.Pkr</p>   
    <div class='row'>
    <div class='col-sm-6'>
      <p> <a href='details.php?device_id=$device_id' class='btn btn-primary' role='button'>Details</a></p>
    </div>
    <div class='col-sm-5'>
      <p> <a href='index.php?add_cart=$device_id' class='btn btn-primary' role='button'><span class='glyphicon glyphicon-shopping-cart'></a></p>
     </div>
  </div> 
        </div> ";
   
                
   }
        cart();
       }
         
        
            
            
    
            
            if(isset($_GET['brand'])){
    
                $brand_id = $_GET['brand'];
                
    $get_products = "select * from devices where brand_id = '$brand_id'";
    $run_products = mysqli_query($con,$get_products);
    while ($row_products=mysqli_fetch_array($run_products)){
        
        $image = $row_products['img1'];
        $device_id = $row_products['device_id'];
        $device_name = $row_products['name'];
        $price = $row_products['price'];
        
    echo "<div id='single_device'>
    <div id='device_image'>
     <img src='admin/admin_img/image_front/$image' width='160' height='212' alt=''>
     </div>
        <h2> $device_name  </h2>
        <p>$price.Pkr</p>
         <div class='row'>
    <div class='col-sm-6'>
      <p> <a href='details.php?device_id=$device_id' class='btn btn-primary' role='button'>Details</a></p>
    </div>
    <div class='col-sm-5'>
      <p> <a href='index.php?add_cart=$device_id' class='btn btn-primary' role='button'><span class='glyphicon glyphicon-shopping-cart'></a></p>
     </div>
  </div>
  </div>";
        
       
       }
            }
    cart();
    
}



function brand_id(){
    global $con;
    
    if(isset($_GET['brand'])){
    $brand_id = $_GET['brand'];
    $sql = "select * from brand INNER JOIN devices on brand.brand_id = '$brand_id'";
        $result = mysqli_query($con,$sql);
        
       if(mysqli_num_rows($result)>0){
        
        while($run =mysqli_fetch_array($result)){
        $brand_name=$run['brand_title'];
        $product_name=$run['name'];
               }
           $upper = strtoupper($brand_name);
           echo "<h1>$upper</h1>" ;
}}}


function details(){
    global $con;
            if(isset($_GET['device_id'])){
    
                $device_id = $_GET['device_id'];
                
    $get_products = "select * from devices where device_id = '$device_id'";
    $run_products = mysqli_query($con,$get_products);
    while ($row_products=mysqli_fetch_array($run_products)){
        
         $brand = $row_products['brand_id'];
         $year = $row_products['year_id'];
         $os = $row_products['os_id'];
         $port = $row_products['port_id'];
         $name = $row_products['name'];
         $image1 =$row_products['img1'];
         $image2 =$row_products['img2'];
         $processor = $row_products['processor'];
         $ram = $row_products['ram'];
         $memory = $row_products['internal_memory'];
         $screen = $row_products['screen'];
         $back_cam = $row_products['cam_back'];
         $front_cam = $row_products['cam_front'];
         $battery =$row_products['battery'];
         $weight = $row_products['weight'];
         $descr = $row_products['descr'];
         $price = $row_products['price'];
         $link_1 = $row_products['link1'];
         $link_2 = $row_products['link2'];
         $link_3 = $row_products['link3'];
         $link_4 = $row_products['link4'];
        
    $get_brand = "select * from brand where brand_id = '$brand'";
    $run_brand = mysqli_query($con, $get_brand);
    $row_brand = mysqli_fetch_array($run_brand);
    $brand_edit = $row_brand['brand_title'];
    $upper = strtoupper($brand_edit);
        
     $get_year = "select * from year where year_id = '$year'";
    $run_year = mysqli_query($con, $get_year);
    $row_year = mysqli_fetch_array($run_year);
    $year_dt = $row_year['year'];
    
    
    $get_os = "select * from os where os_id = '$os'";
    $run_os = mysqli_query($con, $get_os);
    $row_os = mysqli_fetch_array($run_os);
    $os_dt = $row_os['os'];
    
    
    $get_port = "select * from port where port_id = '$port'";
    $run_port = mysqli_query($con, $get_port);
    $row_port = mysqli_fetch_array($run_port);
    $port_dt = $row_port['port'];
        
        
    echo "<div id='single_device'>
          <div id='device_image'>
   
     
     
      <table width='980px' align'center' border='2' BORDERCOLOR=#069 >
       
       
       
       
        <tr align='center' class='hide_all' >
           <td colspan='2'>
                      
         <img src='admin/admin_img/image_front/$image1' width='220' height='296' alt='' img style='margin: 30px 50px'>
     <img src='admin/admin_img/image_back/$image2' width='220' height='296' alt='' img style='margin: 30px 50px'>
           
           </td>
       </tr>
       
       <tr align='center'>
           <td colspan='2'><h1 style='color:#069'>Specifications</h1></td>
       </tr>
            
            
         <tr align='left'>
                <td><h2 style='color:#069'>Device Name</h2></td>
                <td> <h2 style='color:#069'> $name  </h2> </td>
         </tr>
         
         <tr align='left'>
                <td><h2 style='color:#069'>Brand</h2></td>
                <td> <h2 style='color:green'> $upper  </h2> </td>
         </tr>
         
         <tr align='left'>
                <td><h2 style='color:#069'>Price</h2></td>
                <td> <h2 style='color:red'> $price Pkr </h2> </td>
         </tr>
         
          <tr align='left'>
                <td><h2 style='color:#069'>Released In</h2></td>
                <td> <h2> $year_dt  </h2> </td>
         </tr>
         
         
         <tr align='left'>
                <td><h2 style='color:#069'>Operating System</h2></td>
                <td> <h2> $os_dt  </h2> </td>
                
         <tr align='left'>
                <td><h2 style='color:#069'>Connection Port</h2></td>
                <td> <h2> $port_dt  </h2> </td>
         </tr>
         
         <tr align='left'>
                <td><h2 style='color:#069'>Processor</h2></td>
                <td> <h2> $processor  </h2> </td>
         </tr>
         
         <tr align='left'>
                <td><h2 style='color:#069'>RAM</h2></td>
                <td> <h2> $ram GB </h2> </td>
         </tr>
         
         <tr align='left'>
                <td><h2 style='color:#069'>Memory</h2></td>
                <td> <h2> $memory GB </h2> </td>
         </tr>
         
         <tr align='left'>
                <td><h2 style='color:#069'>Screen Scize</h2></td>
                <td> <h2> $screen inch   </h2> </td>
         </tr>
         
         <tr align='left'>
                <td><h2 style='color:#069'>Back Camera</h2></td>
                <td> <h2> $back_cam MP </h2> </td>
         </tr>
         
         <tr align='left'>
                <td><h2 style='color:#069'>Front Camera</h2></td>
                <td> <h2> $front_cam MP </h2> </td>
         </tr>
         
         <tr align='left'>
                <td><h2 style='color:#069'>Battery</h2></td>
                <td> <h2> $battery mAh  </h2> </td>
         </tr>
         
         <tr align='left'>
                <td><h2 style='color:#069'>Weight</h2></td>
                <td> <h2> $weight g  </h2> </td>
         </tr>
         
          <tr align='centre'>
                <td colspan='2'><h2 style='color:#069'> Device Description</h2></td>
                
         </tr>
         <tr align='left'>
               
                <td colspan='2'> $descr </td>
         </tr>
         
         </tr>
         <tr align='centre' >
                <td >  <a href='$link_1' style='font-size:30px' target='$link_1'> <b> www.Daraz.PK </b> </a>  </td>
                <td>   <a href='$link_2' style='font-size:30px' target='$link_2'> <b> www.HomeShoping.PK </b> </a> </td>
         </tr>
         
         <tr align='centre'>
                <td>  <a href='$link_3' style='font-size:30px' target='$link_3'> <b> www.Shophive.Com </b> </a>  </td>
                <td>  <a href='$link_4' style='font-size:30px' target='$link_4'> <b> www.Telemaret.Pk </b> </a>  </td>
         </tr>
         
         
       </table>
       </div>
       
      </div> ";
       
       }
            }
    
    
}


function getip()
{
    if(!empty($_SERVER['HTTP_CLIENT_IP'])){
        
        $ip = $_SERVER['HTTP_CLIENT_IP'];
         }
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    else {
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}



function cart(){
    
    if(isset($_GET['add_cart'])){
        
        global $con;
        
        $ip = getip();
        $p_id = $_GET['add_cart'];
        $qty= 0;
        $check_pro = "SELECT * FROM cart WHERE ip='$ip' AND p_id = '$p_id'";
        $run_check = mysqli_query($con,$check_pro);
        
        if(mysqli_num_rows($run_check)>0){
            
            echo "";
        }
        else {
            $q = "INSERT INTO cart (p_id,ip,qty) VALUES ('$p_id','$ip','$qty')";
            $run_q = mysqli_query($con,$q);
             echo "<script> alert ('Item added to CART')</script>";
             echo "<script>window.open('index.php','_self')</script>";
        }
    }
    
    
}

function total(){
    
          $ip = getip();
          global $con;
          $total = 0;
     $query = "SELECT * FROM cart WHERE ip = '$ip'";
     $run_price = mysqli_query($con,$query);
     while ($record=mysqli_fetch_array($run_price)){
         
         $device_id = $record['p_id'];
         
         $price = "SELECT * FROM devices WHERE device_id = '$device_id'";
         $run_device_price = mysqli_query($con,$price);
         
         while($device_price=mysqli_fetch_array($run_device_price)){
             
             $total_price = array($device_price['price']);
             $values = array_sum($total_price);
             $total += $values;
             
         }
     }
   // echo "total price =".$total;
    }
?>