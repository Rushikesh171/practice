<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>
    <style>
        h1{
            text-align: center;
            background-color: grey;
            color: white;
            padding: 13px;


        }
        body{
            background: url("img/medicine.png");
            /* background-color: ; */
        }
        .form{
            
            border: 2px solid black;
             border-radius: 30px;
            display: flex;
         /* background-color: grey; */
            flex-direction: column;
            /* justify-content: spac; */
            height: 430px;
            width: 900px;
            /* margin: 20px 285px; */
            margin: -44px -36px;
            padding: 43px 33px;
            font-weight: bold;
            font-size: 20px;
        color: black;
        font-display: inherit;
           
          
            

        }
        .form1{
            background-color: #d7d2d2;
            opacity: 0.8;
            border: 2px solid black;
             border-radius: 30px;
             height: 430px;
            width: 900px;
            margin: 20px 285px;
            padding: 43px 33px;
            font-display: initial;

        }
        .btn{
            align-items: center;
            display: flex;
            flex-direction: column;
            margin: 0px 410px;
            padding: 10px 45px;
            cursor: pointer;
            border: 2px solid black;
            background-color: white
            color: black;
        
            font-size: 17px;
         font-weight: bold;
            border-radius: 7px;
            
        }
        #text{
            border:2px solid black;
            margin: 20px 10px;
            height: 25px;
            width: 845px;
            background: transparent;
            
        }
        #number{
            border:2px solid black;
            margin: 20px 10px;
            height: 25px;
            width: 845px;
            background: transparent;
        }
        #feedback{
            border:2px solid black;
            margin: 20px 10px;
            height: 170px;
            width: 845px;
            background: transparent;
        }
        .btn:hover{
            background-color: blue;
            color: black;
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h1>Feedback</h1>
   <div class="form1">
    <form action="feedback.php" method="post" class="form">
        <div> Name :-<input type="text" id="text" name="name" placeholder="Enter Name"></div>
        <div> Contact Number:-<input type="number" id="number" name="number" placeholder="Enter your phone number"></div>
        <div> Comment:-<input type="text" id="feedback" name="Comment" placeholder="Enter your Feed-Back"></div>
        <input  class="btn"  type="submit" name="submit"   value="submit">
       </form>

   </div>
    <!-- <button id="btn" name="submit ">Submit </button> -->
    </body>

</html>
<!-- <?php
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
   
   
    if($data)
    {
          echo " Data submitted successfully";
    }
    
    else{
        echo "Error";
    }





  ?> -->