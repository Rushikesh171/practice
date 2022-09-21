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


    
    $files= $_FILES['myfile'];
    $filepath=$_FILES['tmp_name'];
    $fileerror=$_FILES['error'];
    if($fileerror == 0)
    {
        $destfile= 'upload/'.$files;
        move_uploaded_file($filepath,$destfile);
    }


    $query = "INSERT INTO image (image) VALUES ('$files')";

    $data =  mysqli_query($conn,$query);
   
    
    if($data){
        echo "<script> alert('Data submitted successfully');window.location='login2.php'  </script>";
    //    header ("location:login1.php");
    }
    
    else{
        echo "<script> alert('Error');window.location='signup1.php'   </script>";
    }

  ?>
