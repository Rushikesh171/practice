<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medicines</title>
    <style>
        body {
            background: url("img/whitebg.jpg");
            background-size: cover;
            margin: 0px;
            padding: 0px;
            position: absolute;

        }
        .h1{
            position: fixed;
            top:0;
            z-index: 100;

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
.form{
    background-color: #d7d2d2;
    opacity: 0.8;
    border: 2px solid black;
    display: flex;
    flex-direction: column;
    text-align: center;
    width: 810px;
    height: 700px;
    margin: 200px 350px;
    font-size: 22px;
    font-weight: bold;
    border-radius: 45px;

}
.div{
    margin: 10px 3px;
    padding: 5px 3px;

}
.btn{
    background-color: white;
    font-size: 20px;
    margin: 25px 361px;
    width: 90px;
    color: black;
    border-radius: 12px;
    padding: 5px 10px;
}
.btn:hover{
    background-color: blue;
    cursor: pointer;
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
.para{
    border: 2px solid black;
    border-radius:5px;
    padding: 5px;
    margin: 15px 0px;
    font-size: 16px;
    text-align: center;
    width: 400px;
}
.para1{
    /* border:2px solid green; */
    margin-right: 37px;
    margin-top: 45px;
}
.para3{
    /* border:2px solid green; */
    margin-right: 43px;
}
.para4{
    /* border:2px solid green; */
  margin-right: 67px;
}
.para5{
    /* border:2px solid green; */
    margin-right: 54px;
}
.para6{
    /* border:2px solid green; */
    margin-right: -11px;
}
.paraa{
    border: 2px solid black;
    border-radius:5px;
    padding: 5px;
    margin: 15px 0px;
    font-size: 18px;
    text-align: center;
    width: 400px;
    margin-left: -115px;
}
        .para7{
            margin-right: 115px;



        }
        .para8{
            /* border:2px solid green; */
    margin-right: -25px;
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
     
        <div>
            <form action="upto51.php"  method="post" class="form" enctype="multipart/form-data">
                <div class="para1">
                    <label for="">Name of Donor:-</label>
                    <input type="text" class="para" name="name" placeholder="Enter Name">
                </div>
                <div class="para2">
                    <label for="">Mobile No :-</label>
                    <input type="number"class="para" name="number" id="para1"  placeholder="Enter Number">
                </div>
                <div class="para3">
                    <label for="">Address Line 1 :-</label>
                    <input type="text"class="para" name="address1" placeholder="Enter Address">
                </div>
                <div class="para3">
                    <label for="">Address Line 2: -</label>
                    <input type="text"class="para" name="address2" placeholder="Enter Address">
                </div>
                <div class="para8">
                    <label for="">Pincode :-</label>
                    <input type="number"class="para" name="pincode" placeholder="Enter pincode">
                </div>
                <div class="para4">
                    <label for="">Name of Medicine :-</label>
                    <input type="text" class="para" name="medicine" placeholder="Enter Medicine Name">
                </div>
                <div class="para5">
                    <label for="">Date OF Expiry :-</label>
                    <input type="date" class="para" name="date" placeholder="Enter Date">
                </div>
                <div class="para7">
                    <label  for ="" class="para7">Category of Medicine :- </label>
                  <select   name="category" class="paraa">
                  <option value="" selected hidden class="para" name="category" >Select category</option>
                      <option value="Strip" class="para">strip</option>
                      <option value="Tablets" class="para">Tablets</option>
                      <option value="Liquid" class="para">Liquid</option>
                  </select>
                </div>
                <div class="para6">
                    <label for="">Quantity :-</label>
                    <input type="number"class="para" name="quantity"  placeholder="Enter Number">
                </div>
                <div>  <label for="myfile">Select a file:</label>
              <input type="file" id="myfile" name="file"><br><br>
            </div>
            <div>     
<input type="submit" class="btn" value="Donate">
</div>
            </form>
        </div>
</body>

</html>

