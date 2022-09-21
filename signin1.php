<?php
error_reporting(0);
$servername ="localhost:3307";
$username ="root";
$password ="";
$database_name ="medonate";

$conn = mysqli_connect($servername,$username,$password,$database_name);

if($conn) 
{
    //  echo "Connection ok";

}
else{
    echo "connection failed";
}
$user =$_POST['username'];
$pass =$_POST['pass'];

$sql ="SELECT * FROM register1 WHERE username='$user' AND password='$pass'";

    $result = mysqli_query($conn,$sql);
     if(mysqli_num_rows($result) > 0)
   {
       while($row =mysqli_fetch_assoc($result))
       {
           $id =$row['id'];
           $user =$row['username'];
           session_start();
           $_SESSION['id'] =$id;
           $_SESSION['username']=$user;

       }
   }
   
    
    if($data){
     echo " Data submitted successfully";
       header ("location:login1.php");
    }
    
    else
    {
        echo"<script> alert('Login Successfully');window.location='npo2.php' </script> ";
    }
        
    
    ?>
  