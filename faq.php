<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ</title>
    <style>
             body{
           
           /* border: 2px solid green; */
           background: url("img/whitebg.jpg");
      
           
           margin: 0px;
           padding: 0px;
           /* width: 100vw;
           height: 100vh; */
           color: black;
           background-size: cover;
          position: absolute;
          /* background:fixed; */
             }
        .upper {
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

        .p {
            text-align: center;
            align-items: center;
            font-size: 35px;
        }

        #a {
            font-size: 25px;
            align-items: center;
            text-align: left;

        }

        #b {
            font-size: 33px;
            font-weight: bold;
        }

        #c {
            text-decoration: underline;
            font-size: 30px;
        }

        #d {
            font-size: 25px;
            text-decoration: underline;
        }

        .container {
            border: 2px solid red;
            width: 70%;
        }

        #element1 {
            /* border: 2px solid green; */
            margin: 23px 34px;
            font-size: 24px;
            font-weight: bold;
            /* background-color: white; */
            /* color: black; */

        }

        #element2 {
            /* border: 2px solid green; */
            margin: 23px 34px;
            text-align: right;
            font-size: 24px;
            font-weight: bold;
            /* background-color: white; */
            /* color: black; */
        }

        #element1:hover {
            cursor: pointer;
            color: blue;
            text-decoration: underline;
        }

        #element2:hover {
            cursor: pointer;
            color: blue;
            text-decoration: underline;
        }
      
        #element3{
            border: 2px solid red;
            font-size: 24px;
            margin-left: 20px;
            align-items: left;
            width: 200px;
            text-align: left;
        }
    </style>
</head>

<body>
    <nav>
        <ul class="upper">
            <!-- <li id="element3" >MEDonate</li> -->
            <li id="element1" onclick="location.href='page.php'">Home</li>
            <li id="element2" onclick="location.href='contact.php'"> Contact us </li>

        </ul>
    </nav>
    <div class="container">
        <img src="" alt="" srcset="">
        <div class="p">How to Donate Unused Medicine ?

            <div id="a">
                <div id="b">Step :- 1</div>
                <div id="c">Determine if the medicine is eligible for donation:-</div>
                <div id="d"> Is unexpired:-</div>
                Some organizations also require the medicine not expire in the near future.<br>
                Is unopened and in tamper-evident packaging.<br> “Tamper-evident” means the packaging leaves visual
                evidence
                once opened (such as a plastic seal). Unit-dose systems, like blister packs, are an example of
                tamper-evident packaging. Amber vials are not tamper-evident and therefore ineligible for donation.<br>
                <div id="d">Does not require refrigeration :-</div> Some medications require cold storage, such as
                insulins, injections and
                eye
                drops. These are not eligible for donation.
                <br>
                <div id="d">Is not a controlled substance :-</div> Controlled substances are drugs that are regulated
                under federal law
                and can
                cause physical and mental dependence. Some examples include opioids like Vicodin and anti-anxiety
                medications like Xanax.
            </div>
        </div>
        <br>
        <div id="a">
            <div id="b">Step 2 :-</div>
            <div id="c">Fill out the required forms:- </div>
            Be prepared to include some general information, like your name and contact information, the date of the
            donation, your signature, etc. You may also need to add details about each medication you are donating.
        </div>
        <br>
        <div id="a">
            <div id="b">Step 3 :-</div>
            <div id="c">Remove any personal information from the packaging :-</div>
            Cover any personal information on the prescription label,
            like the patient’s name or the prescription number, using a permanent marker.
        </div>
        <br>
        <div id="a">
            <div id="b">Step 4 :-</div>
            <div id="c">Coordinate shipping or drop-off of the medication:-
            </div>
            Follow the specific programs instructions to either drop off the medicines to the respective NPO's or wait
            for a volunteer from the organization for pickup.
        </div>
    </div>


</body>

</html>