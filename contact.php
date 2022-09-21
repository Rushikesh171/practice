<!DOCTYPE html>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>  Contact Us </title>
    <link rel="stylesheet" href="style.css">
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <div class="content">
      <div class="left-side">
        <div class="address details">
          <i class="fas fa-map-marker-alt"></i>
          <div class="topic">Address</div>
          <div class="text-one">XYZ</div>
          <div class="text-two"></div>
        </div>
        <div class="phone details">
          <i class="fas fa-phone-alt"></i>
          <div class="topic">Phone</div>
          <div class="text-one"></div>
          <div class="text-two"></div>
        </div>
        <div class="email details">
          <i class="fas fa-envelope"></i>
          <div class="topic">Email</div>
          <div class="text-one">abc@gmail.com</div>
          <div class="text-two"></div>
        </div>
      </div>
      <div class="right-side">
        <div class="topic-text">Contact Us</div>
        <!-- <p>If you have any work from me or any types of quries related to my Websites, you can send me message from here. It's my pleasure to help you.</p> -->
      <form action="contact1.php" method="post">
        <div class="input-box">
          <input type="text" name='name' placeholder="Enter your name">
        </div>
        <div class="input-box">
          <input type="text" name='email' placeholder="Enter your email">
        </div>
        <div class="input-box">
          <input type="number"  name='number'placeholder="Enter your number">
        </div>
        <div class="input-box message-box">
          <textarea name='message' placeholder="Enter your query"></textarea>
        </div>
        <div class="button">
          <input type="button" value="Send Now" >
        </div>
      </form>
    </div>
    </div>
  </div>

</body>
</html>
