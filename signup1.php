<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <style>
   body{
    background: url("img/whitebg.jpg");
    margin: 0px;
    padding: 0px;
    color: black;
    background-size: cover;
    position: absolute;
   }
   body{
    background: url("img/whitebg.jpg");
    margin: 0px;
    padding: 0px;
    color: black;
    background-size: cover;
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
        .work{
            font-weight: bold;
    background-color: #d7d2d2;
    opacity: 0.8;
    border: 2px solid black;
    text-align: center;
    width: 610px;
    height: 520px;
    margin: -569px 850px;
    border-radius: 44px;
    font-size: 17px;

        }
        #element3{ 
            display: flex;
            flex-direction:right;
            /* border: 2px solid green; */
    margin: 23px 34px ;
    text-align: right;
    font-size: 24px;
    font-weight: bold;

        }
    </style>
</head>
<body>
    <!-- <h1>Registration </h1> -->
    <nav  >
        <ul class="h1" >
         <li id="element1"  onclick="location.href='page.php'">Home</li>
         <li id="element2"  onclick="location.href='contact.php'"> Contact us  </li>
         <!-- <li id="element3"  onclick="location.href='contact.php'"> Donor  </li> -->
        
        </ul>
   <div class="form1">
    
    <form action="register.php" method="post"  class="form">
        <h3 class="h3">REGISTRATION</h3>
        <div>  Name of Donor:- <input type="text" id="text" name="name" placeholder="Enter Name"></div>
        <div> Username :-<input type="text" id="text" name="username" placeholder="Enter Username"></div>
        <div> Password:-<input type="password" id="number" name="pass" placeholder="Enter Password"></div>
        <div> Confirm Password:-<input type="password" id="number" name="conpass" placeholder="Confirm Password"></div>
 <!-- <div> Comment:-<input type="text" id="feedback" placeholder="Enter your Feed-Back"></div> -->
        <!-- <div class="text2">
         If you don't have account
        
        </div> -->
        <!-- <button class="button">Click here</button> -->
   <div>
       <input type="submit"  name="submit" id="btn" value="Register">
   </div>
       </form>
<!-- <div class="work">
    <h3>HOW IT WORKS ?</h3>
    <div>
        step-1 :-Register / login as donor</div>
        <span style='font-size:50px;  margin: 2px 100px;'>&#8595;</span>
        <div>step-2. Fill in the required details </div>
        <span style='font-size:50px;  margin: 2px 100px;'>&#8595;</span>
<div>step-3. Check wheather the medicines to be donated meet the required details or not by ticking the checklist</div>
<span style='font-size:50px;  margin: 2px 100px;'>&#8595;</span>
<div>step-4. Enter the details of the medicines to be donated by clicking " add medicine"</div>
<span style='font-size:50px;  margin: 2px 100px;'>&#8595;</span>
<div>step-5. Click "donate now" to complete the process</div>
<span style='font-size:50px;  margin: 2px 100px;'>&#8595;</span>
<div>step-6. Wait for the NPOs to accept the medicine and proceed further</div> -->
    </div>
</div>
   </div>
    <!-- <button id="btn">Register </button> -->
</body>
</html>