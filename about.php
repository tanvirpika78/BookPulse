<?php
session_start(); // Start session for storing messages

try {
    $conn = new PDO("mysql:host=localhost;dbname=library_managment", "root", "");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about us</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="./style.css">

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
       
      <a href="library_Project" class="fas fa-user"></a>

       
      </div>


   </section>

</header>

<div class="heading">
   <h3>about us</h3>
   <p><a href="index2.php">Home </a> <span> / About</span></p>
</div>

<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/about.png" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>Our Library Management System offers an intuitive interface, seamless integration, and powerful features like real-time tracking and automated notifications. With top-notch security and dedicated support, we ensure efficient, reliable, and effective library management.</p>
        <!-- <a href="menu.html" class="btn">our menu</a> -->
      </div>

   </div>

</section>

<section class="steps">

   <h1 class="title">3 simple steps</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/account.png" alt="">
         <h3>Log In</h3>
         <p>To get book you need at first log in.</p>
      </div>

      <div class="box">
         <img src="images/step-1.png" alt="">
         <h3>Select & Request</h3>
         <p>Request for your book.</p>
      </div>

      <div class="box">
         <img src="images/step7.png" alt="">
         <h3>enjoy reading!</h3>
         <p>Now you can get and read books.</p>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">customer's reviews</h1>

   <div class="swiper reviews-slider">

      <div class="swiper-wrapper">

        
   <?php
   if (isset($_SESSION['success_msg'])) {
      echo '<p class="success">' . $_SESSION['success_msg'] . '</p>';
      unset($_SESSION['success_msg']);
   }
   ?>
   <?php
      $select_reviews = $conn->prepare("SELECT id, name, rating, message, date FROM reviews");
      $select_reviews->execute();
      if($select_reviews->rowCount() > 0){
         while($fetch_review = $select_reviews->fetch(PDO::FETCH_ASSOC)){
   ?>
   <div class="swiper-slide slide">
         
      <div class="user"><i class="fas fa-user" style="font-size:5rem;color: red;"></i> 
       
      </div>
      <p ><?= htmlspecialchars($fetch_review['message']); ?></p>
    
      <div class="stars">
         <?php
            $rating = intval($fetch_review['rating']); // Convert rating to integer
            for ($i = 1; $i <= 5; $i++) {
               if ($i <= $rating) {
                  echo '<i class="fas fa-star"></i>'; // Display full star
               } else {
                  echo '<i class="far fa-star"></i>'; // Display empty star
               }
            }
         ?>
         <span style="font-size:2.5rem;color: red;">(<?= htmlspecialchars($fetch_review['rating']); ?>)</span>
      </div>
      <h3><?= htmlspecialchars($fetch_review['name']); ?></h3> 
   </div>
   <?php
      }
   } else {
      echo '<p class="empty">No reviews added yet!</p>';
   }
   ?>
      
      </div>
      <div class="swiper-pagination"></div>

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
         <a href="mailto:anasbhai@gmail.com">book213@gmail.com</a>
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
         <h3>our number</h3>
         <a href="tel:1234567890">+019xxxxxxxx</a>
         <a href="tel:1112223333">+17xxxxxxxxx</a>
      </div>

   </section>

   <div class="credit">&copy; Easily find your book here.</span> |Enjoy READING!</div>

</footer>





<!-- <div class="loader">
   <img src="images/loader.gif" alt="">
</div>
  -->  


<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".reviews-slider", {
   loop:true,
   grabCursor:true,
            spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
   },
   breakpoints: {
      550: {
        slidesPerView: 1,
      },
      768: {
        slidesPerView: 2,
      },
      1024: {
        slidesPerView: 3,
      },
   },
});

</script>

</body>
</html>