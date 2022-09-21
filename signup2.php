<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <style>
   .body{
       background:url("img/whitebg.jpg");
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

      
        body{
            background: url("img/whitebg.jpg");
            /* background-color: ; */
            margin: 0px;
     padding: 0px;
     /* width: 100vw;
     height: 100vh; */
     color: black;
     background-size: cover;
	position: absolute;
        }
        .form{
            background-color: #d7d2d2;
            opacity: 0.8;
            border: 2px solid black;
             border-radius: 30px;
            display: flex;
         /* background-color: grey; */
            flex-direction: column;
            /* justify-content: spac; */
            height: 415px;
            width: 650px;
            /* margin: 20px 285px; */
            margin: 60px auto;
            padding: 43px 33px;
            font-weight: bold;
            font-size: 20px;
        color: black;
        font-display: inherit;
           
          
            

        }
        .form1{
            /* background-color: #d7d2d2;
            opacity: 0.8;
            border: 2px solid black;
             border-radius: 30px;
             height: 250px;
            width: 900px;
            margin: 20px 285px;
            padding: 43px 33px;
            font-display: initial; */

        }
        #btn{
            align-items: center;
            display: flex;
            flex-direction: column;
            margin: 0px 250px;
            padding: 7px 34px;
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
            width: 625px;
            background: transparent;
            
        }
        #number{
            border:2px solid black;
            margin: 20px 10px;
            height: 25px;
            width: 625px;
            background: transparent;
        }
        #feedback{
            border:2px solid black;
            margin: 20px 10px;
            height: 170px;
            width: 845px;
            background: transparent;
        }
        #btn:hover{
            background-color: blue;
            color: black;
            text-decoration: underline;
        }
        .button{
            width: 120px;
            display: inline-block;
            margin: 10px 400px;
            padding: 7px;
            cursor: pointer;
            font-size: 20px;
            font-weight: bold;
            
        }
        .text2{
            text-align: center;
        }
        .button:hover{
            background-color: blue;
            text-decoration: underline;

        }
        .h3{
            text-align: center;
            font-size: 35px;
            font-weight: bold;
            margin: -3px;
        }
    </style>
</head>
<body>
    <!-- <h1>Registration </h1> -->
    <nav  >
        <ul class="h1" >
         <li id="element1"  onclick="location.href='page.php'">Home</li>
         <li id="element2"  onclick="location.href='contact.php'"> Contact us  </li>
        
        </ul>
   <div class="form1">
    <form action="register1.php" method="post"  class="form" enctype="multipart/form-data">
        <h3 class="h3">REGISTRATION</h3>
        <div>  Name of NPOs:- <input type="text" id="text" name="name"placeholder="Enter Name"></div>
        <div> Username :-<input type="text" id="text" name="username"placeholder="Enter Username"></div>
        <div> Password:-<input type="password" id="number" name="pass"placeholder="Enter Password"></div>
        <div> Confirm Password:-<input type="password" id="number" name="conpass" placeholder="Confirm Password"></div>
       <div>  <label for="myfile">Select a file:</label>
  <input type="file" id="myfile" name="myfile"><br><br>
</div>
        <!-- <div> Comment:-<input type="text" id="feedback" placeholder="Enter your Feed-Back"></div> -->
        <!-- <div class="text2">
         If you don't have account
        
        </div> -->
        <!-- <button class="button">Click here</button> -->
   <div>
       <input type="submit"  name="submit" id="btn" value="Register">
   </div>
       </form>

   </div>
    <!-- <button id="btn">Register </button> -->
</body>
</html>