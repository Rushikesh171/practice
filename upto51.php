<?php
error_reporting(0);
$servername ="localhost:3307";
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


    $name = $_POST['name'];
    $number =$_POST['number'];
    $add =$_POST['address1'];
    $add1 =$_POST['address2'];
    $pin =$_POST['pincode'];
    $med =$_POST['medicine'];
    $date =$_POST['date'];
    $cat =$_POST['category'];
    $quantity =$_POST['quantity'];
    $files= $_FILES['file'];
    $filepath=$_FILES['tmp_name']
    $fileerror=$_FILES['error'];
    if($fileerror == 0)
    {
        $destfile= 'upload/'.$files;
        move_uploaded_file($filepath,$destfile);
    }


    $query = "INSERT INTO donor11 (Name,Number,Address1,Address2,Pincode,Medicine,Date,Category,Quantity,file) VALUES ('$name','$number','$add','$add1','$pin','$med','$date','$cat','$quantity','$files')";

    $data =  mysqli_query($conn,$query);
   
   
    if($data){
     echo "<script> alert('Data submitted successfully');window.location='upto5.php'  </script>";
    }
    
    else{
        echo "<script> alert('Error');window.location='upto5.php'   </script>";
    }





  ?>
