<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Contact Us</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style.css">
</head>
<body>
   
<header class="header">
   <section class="flex">
      <a href="home.html" class="logo">Your Book is here😋</a>
      <nav class="navbar">
         <a href="index2.php">Home</a>
         <a href="about.php">About</a>
         <a href="latest.php">Latest</a>
         <a href="reviews.php">Reviews</a>
         <a href="contact.php">Contact</a>
      </nav>
      <div class="icons">
         <a href="library_Project" class="fas fa-user" id="user-btn"></a>
      </div>
   </section>
</header>

<div class="heading">
   <h3>contact us</h3>
   <p><a href="index2.php">Home </a> <span> / Contact</span></p>
</div>

<section class="contact">
   <div class="row">
      <div class="image">
         <img src="images/contact-img.svg" alt="">
      </div>
      <form action="contact_process.php" method="post">
         <h3>tell us something!</h3>
         <?php
         if (isset($_GET['status']) && $_GET['status'] == 'success') {
            echo "<p style='color: green;'>Message sent successfully!</p>";
         } elseif (isset($_GET['status']) && $_GET['status'] == 'error') {
            echo "<p style='color: red;'>Message failed: " . htmlspecialchars($_GET['message']) . "</p>";
         }
         ?>
         <input type="text" name="name" required placeholder="enter your name" maxlength="50" class="box">
        
         

         <input type="tel" id="phone" name="number" pattern="^0[0-9]{10}$" placeholder="phone number (* 11 digit only)" required class="box">

         <input type="email" name="email" required placeholder="enter your email" maxlength="50" class="box">
         <textarea name="msg" placeholder="enter your message" required class="box" cols="30" rows="10" maxlength="500"></textarea>
         <input type="submit" value="send message" class="btn" name="send">
      </form>
   </div>
</section>




<section class="contacts">

   <h1 class="title">Our contacts</h1>

   

   </div>

</section>

<footer class="footer">

   <section class="box-container">

      <div class="box">
         <img src="images/email-icon.png" alt="">
         <h3>our email</h3>
         <a href="mailto:shaikhanas@gmail.com">bookpulse@gmail.com</a>
       
      </div>

      <div class="box">
         <img src="images/clock-icon.png" alt="">
         <h3>opening hours</h3>
         <p>00:08am to 00:6pm </p>
      </div>

      <div class="box">
         <img src="images/map-icon.png" alt="">
         <h3>our address</h3>
         <a href="https://www.google.com/maps">Dhaka- 400104</a>
      </div>

      <div class="box">
         <img src="images/phone-icon.png" alt="">
         <h3>Cell No</h3>
         <a href="tel:1234567890">+019xxxxxxxx</a>
       
      </div>

   </section>

   <div class="credit">&copy; Easily find your book here.</span> |Enjoy READING!</div>

</footer>
</body>
</html>
