<?php

$servername ="localhost:3307";
$username ="root";
$password ="";
$database_name ="medonate";

$conn=mysqli_connect($servername,$username,$password,$database_name);


if(isset($_POST['username'])){
    $user=$_POST['username'];
    $pass =$_POST['pass'];

    $sql="select * from register1 where username='".$user."'AND password='".$pass."' 
    limit 1";

    $result=mysqli_query($conn,$sql);

    if(mysqli_num_rows($result)==1){
        echo "<script> alert('You have successfully login '); window.location='checkbox.php'  </script>";
      
        exit();

    }
    else{
        echo " You Have Entered incorrect password";
        exit();
    }

}
?>