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
                      

  