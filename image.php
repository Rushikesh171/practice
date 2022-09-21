<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NPOs</title>
</head>
<style> body {
            background: url("img/whitebg.jpg");
            background-size: cover;
            margin: 0px;
            padding: 0px;
            position: absolute;

        }
          .h1{
           
    display: flex;
   /* border: 2px solid red; */
   background-color: grey;
   justify-content: center;
    /* margin: 23px 34px ; */
    margin: 5px 8px;
font-size: 20px;
font-weight: bold;
    padding: 8px 9px;
    width: 1500px;
    color: white;
    list-style: none;
    text-align: center;
        }
    .table{
        text-align:center;
    }
    td{
        text-align:center;
        font-size:20px;
    }
    th{
        width:200px;
    } 
    #element3{
    /* border: 2px solid green; */
    margin: 23px 34px ;
    text-align: right;
    font-size: 24px;
    font-weight: bold;
    /* background-color: white; */
    /* color: black; */
}
#element3:hover{
    cursor: pointer;
    color: blue;
    text-decoration: underline;
}
#element1{
    /* border: 2px solid green; */
    margin: 23px 34px ;
    font-size: 24px;
    font-weight: bold;
    /* background-color: white; */
    /* color: black; */

}
#element2{
    /* border: 2px solid green; */
    margin: 23px 34px ;
    text-align: right;
    font-size: 24px;
    font-weight: bold;
    /* background-color: white; */
    /* color: black; */
}
#element1:hover{
    cursor: pointer;
    color: blue;
    text-decoration: underline;
}
#element2:hover{
    cursor: pointer;
    color: blue;
    text-decoration: underline;
}
h3{
    font-size:30px;
    font-weight:bold;
    text-align:center;
    text-decoration:underline;
}
</style>
<body>
<nav  >
        <ul class="h1" >
         <li id="element1"  onclick="location.href='page.php'">Home</li>
         <li id="element2"  onclick="location.href='contact.php'"> Contact us  </li>
         <li id="element3"  onclick="location.href='login1.php'"> Logout </li>
        </ul>
</nav>
        <h3>Medicine Available To Pick Up</h3>
    <table border="2">
        <tr class="table">
            <th >Sr No</th>
            <th>Name</th>
            <th>Mobile No</th>
            <th>Address Line 1</th>
            <th >Address Line 2</th>
            <th>Pincode</th>
            <th>Name of Medicine</th>
            <th>Date of Expiry</th>
            <th>Category</th>
            <th>Qantity</th>
            <th>Action</th>
      






<?php
            $servername ="localhost:3307";
            $username ="root";
            $password ="";
            $database_name ="medonate";
            
            $conn = mysqli_connect($servername,$username,$password,$database_name);
            
            // if($conn) 
            // {
            //      echo "Connection ok";
            
            // }
            // else{
            //     echo "connection failed";
            
            $query= "SELECT * FROM donor11";
            $data = mysqli_query($conn,$query);
            $total = mysqli_num_rows($data);
            ?>

            <?php
           
            if($total !=0){
                while($result = mysqli_fetch_assoc($data))
                {
                    ?>
                   
                   <tr>
                    <td> <?php echo $result['id']; ?></td>
                    <td> <?php echo $result['Name']; ?></td>
                    <td> <?php echo $result['Address1']; ?></td>
                    <td> <?php echo $result['Address2']; ?></td>
                    <td> <?php echo $result['Pincode']; ?></td>
                    <td> <?php echo $result['Medicine']; ?></td>
                    <td> <?php echo $result['Date']; ?></td>
                    <td> <?php echo $result['Category']; ?></td>
                    <td> <?php echo $result['Quantity']; ?></td>
                    <td>
                       <img src="    <?php echo $result['file']; ?>" height="100px" width="70px">
                    </td>
                    

                    </tr>
                    <?php
                }
            }
                else
                {
                 ?>
                    <tr><td>No record found</td></tr>
                    <?php
                }
                ?>
                      

            </table>
            
            </body>
            </html>
       