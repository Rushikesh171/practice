<?php
            $servername ="localhost";
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
            
            $query= "SELECT * FROM donor1";
            $data = mysqli_query($conn,$query);
            $total = mysqli_num_rows($data);
            $result = mysqli_fetch_assoc($data);
            // echo "$total";
            echo $result['sr no']." ".$result['Name']." ".$result['Number']." ".$result['Address1']." ".$result['Address2']." ".$result['Pincode']." ".$result['Medicine']." ".$result['Date']." ".$result['Category']." ".$result['Quantity'];
            ?>