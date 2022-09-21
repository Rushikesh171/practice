<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        h1{
            text-align: center;
            background-color: grey;
            color: white;
            padding: 13px;


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
            height: 240px;
            width: 600px;
            /* margin: 20px 285px; */
            margin: 81px auto;
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
            margin: 10px 245px;
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
            border: 2px solid black;
    margin: 20px 10px;
    height: 25px;
    width: 467px;
    background: transparent;
        }
        #number{
            border: 2px solid black;
    margin: 20px 12px;
    height: 25px;
    width: 467px;
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
            background-color: transparent;
            border: none;
            width: 120px;
            display: inline-block;
            margin: -40px 367px;
            padding: 5px;
            cursor: pointer;
            font-size: 23px;
            color: black;
            font-weight: bold;
            
        }
        .text2{
            text-align: center;
            font-size: 30px;
           color: blue;
           /* border: 2px solid red ; */
           font-weight: bold;
           margin: 5px 0px;
           width: 360px;
        }
        .button:hover{
            background-color: blue;
            color: white;
            text-decoration: underline;

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
.h3{
            text-align: center;
            font-size: 35px;
            font-weight: bold;
            margin: -3px;
        }
h5{
        /* display: flex; */
    /* flex-direction: row; */
    align-items: right;
    margin: auto;
    text-align: center;
    /* border: 2px solid red; */
    font-size: 35px;
    font-weight: bold;
    margin: 2px 3px;
    margin-top: 12px;
}
    </style>
</head>
<body>
    <!-- <h1>Already Registered</h1> -->
    <nav  >
        <ul class="h1" >
         <li id="element1"  onclick="location.href='page.php'">Home</li>
         <li id="element2"  onclick="location.href='contact.php'"> Contact us  </li>
        
        </ul>
        <h5>For Donor</h5>
   <div class="form1">
    <form action="signin.php" method="post"  class="form">
        <h3 class="h3">Already Registered</h3>
        <div> Username :-<input type="text" name="username"id="text" placeholder="Enter Username" required ></div>
        <div> Password :-<input type="password"  name="pass" id="number" placeholder="Enter Password"></div>
        <div><input type="submit"  id="btn" value="Login"></div>
        <!-- <div class="text2">
            Don't have an account yet ?
        
        </div>
        <input type="button" class="button" onclick="location.href='signup1.php'" value="click here"> -->
   
    </form>
        <!-- <div> Comment:-<input type="text" id="feedback" placeholder="Enter your Feed-Back"></div> -->
        <!-- <div class="text2">
            Don't have an account yet ?
        
        </div>
        <button class="button" onclick="location.href='signup1.html'">Click here</button> -->
   

   </div>
    <!-- <button id="btn" >Login </button> -->
</body>

</html>
