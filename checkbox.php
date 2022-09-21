<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Points</title>
    <style>
        
        body{
            background: url("img/whitebg.jpg");
            background-size: cover;
            margin: 0px;
            padding: 0px;
            position: absolute;
        }
        .form{
            margin: 85px 66px;
        }
        header{
            background-color: grey;
            color: white;
            text-align: center;
            font-weight: bold;
            font-size: 37px;
            padding: 26px;
        }
        h3{
            text-align: center;
            text-decoration: underline;
            font-size: 33px;
            margin-top: 65px;

        }
        .point{
            margin: 40px 396px;
    font-size: 30px;

        }
        .btn{
            align-items: center;
    justify-content: center;
    margin: -42px 645px;
    padding: 10px 25px;
    border-radius: 10px;
    font-size: 20px;
    border: 2px solid;
    cursor: pointer;
    font-weight: bold;
}
.btn:hover{
    background-color: blue;
    cursor: pointer;
    text-decoration: underline;
    color: white;
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
.h3{
    font-size: 45px;
    font-weight: bolder;
}
#checkbox1{
  width:20px;
  height:21px;
}
#checkbox2{
  width:20px;
  height:21px;
}
#checkbox3{
  width:20px;
  height:21px;
}
#checkbox4{
  width:20px;
  height:21px;
}
input.larger {
        width: 50px;
        height: 50px;
}
    </style>
</head>
<body>
    <nav  >
        <ul class="h1" >
         <li id="element1"  onclick="location.href='page.php'">Home</li>
         <li id="element2"  onclick="location.href='contact.php'"> Contact us  </li>
         <li id="element3"  onclick="location.href='login1.php'"> Logout </li>
        
        </ul>

    <div class="container">
        <h3 class="h3">
        Donated medicine must meet ALL of these criteria
        </h3>
        <form action="form1" class="form">
            <div class="point">
                <input type="checkbox"  id="checkbox1"  checkboxObject.required>&nbsp;Is not a controlled substance (no narcotics)
            </div>
            <div class="point">
                <input type="checkbox"  id="checkbox2" checkboxObject.required >&nbsp;Is in sealed packaging
            </div>
            <div class="point">
                <input type="checkbox"  id="checkbox3" checkboxObject.required >&nbsp;Will not expire for at least 5 months
            </div>
            <div class="point">
                <input type="checkbox"  id="checkbox4" checkboxObject.required >&nbsp;Does not require refrigeration
            </div>
        </form>
    </div>
    <button onclick="location.href='upto5.php'"   class="btn">
        Proceed
    </button>
</body>
</html>