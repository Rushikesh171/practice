<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unused Medical Donation Portal</title>
</head>
<link href="https://fonts.googleapis.com/css2?family=Ubuntu+Condensed&family=Ubuntu:wght@300&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">

<style>
       body{
           
     /* border: 2px solid green; */
     background: url("img/whitebg.jpg");

     
     margin: 0px;
     padding: 0px;+
     /* width: 100vw;
     height: 100vh; */
     color: black;
     background-size: cover;
	position: absolute;
    /* background:fixed; */
       }
       /* .img{
           opacity: 0.5;
       }
      */
     
       
    .navbar{
       /* border: 2px solid red; */
        text-align: center;
        padding: 23px 34px;
        margin: -40px;
        font-family: 'Ubuntu', sans-serif;
        font-size: 33px;
        font-weight: bolder;
       
    }
    .heading{
        display: flex;
        list-style: none;
        font-size: 30px;
        /* border: 2px solid black; */
        margin: 30px 20px;
        align-items: center;
        justify-content: center;
      
    }
.box1{
    border: 2px solid red;
    background-color: #d7d2d2;
            opacity: 0.8;
    border-radius: 30px;
        padding: 23px 34px;
        margin: 23px 30px;
        height: 200px;
        width: 200px;
        font-weight: bold;
        text-align: center;
        align-items: center;
        justify-content: space-between;
}
.box2{
    border: 2px solid red;
    border-radius: 30px;
    background-color: #d7d2d2;
            opacity: 0.8;
    padding: 23px 45px;
        margin: 23px 30px;
        font-weight: bold;
        height: 200px;
        width: 190px;
        text-align: center;
        
        align-items: center;
        justify-content: center;
}
.box3{
    border: 2px solid red;
    border-radius: 30px;
    background-color: #d7d2d2;
            opacity: 0.8;
        padding: 23px 34px;
        margin: 23px 30px;
        font-weight: bold;
        height: 200px;
        width: 200px;
        text-align: center;
        align-items: center;
        justify-content: center;
}
.btn1{
    background-color:white;
    padding: 5px 6px ;
    font-size: 20px;
    margin: 12px;
    border-radius: 10px;
    font-weight: bold;
    cursor: pointer;
}
.btn2{
    background-color:white;
    padding: 5px 6px ;
    font-size: 20px;
    border-radius: 10px;
    font-weight: bold;
    cursor: pointer;
}
/* .box1:hover{
    cursor: pointer;
    background-color: grey;
 
    text-decoration: underline;
    color: blue;


} */
.btn1:hover{
    background-color: blue;
    text-decoration: underline;
    cursor: pointer;
}
.btn2:hover{
    background-color: blue;
    text-decoration: underline;
    cursor: pointer;
}
/* .box2:hover{

    cursor: pointer;
    background-color: grey;
    overflow: hidden;
    /* background: transparent; */
    text-decoration: underline;
    color: blue;
} */
.box3:hover{
    cursor: pointer;
    background-color: grey;
    text-decoration: underline;
    color: blue;
}
.footer{
    text-align: center;
    margin: 83px 55px;
    padding: 9px;
    font-size: 24px;
    font-family: 'Lobster', cursive;
    color: black;
} 
.upper{
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
.para{
    font-size: 40px;
    margin: 12px ;
}
/* .img{
    border: 2px solid red;
    height: 80px;
    width: 100px;
    margin: 10px;
} */
.heading{
    /* border: 2px solid red; */
}
.h3{
    /* border: 2px solid red; */
    margin: -20px;
    font-weight: bold;
    align-content: center;
    font-size: 30px;
}
#feedback{
    font-size: 20px;
    font-weight: bold;
}


</style>
<body>
    <!-- <button onclick="location.href = 'home.html';" id="myButton" class="float-left submit-button" >Home</button> -->
    <nav  >
        <ul class="upper" >
         <li id="element1"  onclick="location.href='page.php'">Home</li>
         <li id="element2"  onclick="location.href='contact.php'"> Contact us  </li>



        
        </ul>
    </nav>
      <header>
          <!-- <img class="img" src="img/symbol.png" alt=""> -->
         <nav class="navbar">
             <h2 class="head2">
                 ONLINE  &nbsp;MEDICINE &nbsp;MANAGEMENT&nbsp; SYSTEM 
             </h2>
         </nav>
     </header>
     <section>
         <ul class="heading">
             <li class="box1" >
                 <p class="para">Donor</p>
                 <input type="button"   onclick="location.href='signup1.php'" class="btn1" value="New User">
                 <input type="button"   onclick="location.href='login1.php'" class="btn2" value="Already Registered">
             </li>
          
       
                <li class="box2" >
                    <p class="para">NPOs</p>
                    <input type="button"  onclick="location.href='signup2.php'"  class="btn1" value="New User">
                    <input type="button"   onclick="location.href='login2.php'"  class="btn2" value="Already Registered">
                </li>
          
             <!-- <li class="box3" onclick="location.href='code.html'">ABOUT US</li> -->
         </ul>
     </section>
     <footer class="footer">
         <!-- <h3 >Medicine Is Not A Book </h3>
         <h3>But Mind, Not A  Business But Life -->
         </h3>
         
        
         <!-- <h3 class="h3">
             Always Laugh When You Can , It is cheap Medicine....
         </h3> -->
     </footer> 
</body>
</html> 