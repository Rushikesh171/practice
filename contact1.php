<?php
// error_reporting(0);
$servername ="localhost";
$username ="root";
$password ="";
$database_name ="medonate";

$conn = mysqli_connect($servername,$username,$password,$database_name);

if($conn) 
{
    // echo "Connection ok";

}
else{
    echo "connection failed";
}
if(isset($_POST['submit'])){



    $na = $_POST['name'];
    $numb =$_POST['email'];
    $nam=$_POST['number'];
    $com =$_POST['message'];


    $query = "INSERT INTO contact (name,email,number,message) VALUES ('$na','$numb','$nam','$com')";

    $data =  mysqli_query($conn,$query);
   
   
    if($data){
     echo " Data submitted successfully";
    }
    
    else{
        echo "Error";
    }



}

  ?>