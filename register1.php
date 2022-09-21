<?php
 //error_reporting(0);
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


    $na = $_POST['name'];
    $user =$_POST['username'];
    $pass =$_POST['pass'];
    $conpass=$_POST['conpass'];
    $files= $_FILES['myfile']['tmp_name'];
   


    $query = "INSERT INTO register1 (name,username,password,confirm,file) VALUES ('$na','$user','$pass','$conpass','$files')";

    $data =  mysqli_query($conn,$query);
   
    
    if($data){
        echo "<script> alert('Data submitted successfully');window.location='login2.php'  </script>";
    //    header ("location:login1.php");
    }
    
    else{
        echo "<script> alert('Error');window.location='signup1.php'   </script>";
    }

  ?>
