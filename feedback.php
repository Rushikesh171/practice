<?php
error_reporting(0);
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


    $na = $_POST['name'];
    $numb =$_POST['number'];
    $com =$_POST['Comment'];


    $query = "INSERT INTO feedback (name,number,Comment) VALUES ('$na','$numb','$com')";

    $data =  mysqli_query($conn,$query);
   
   
    if($data){
     echo " Data submitted successfully";
    }
    
    else{
        echo "Error";
    }





  ?>


