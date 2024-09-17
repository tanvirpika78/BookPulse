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
   <title>All Reviews</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="./style.css">
   <style>
      .ratings .fas.fa-star {
         color: gold; /* Default color for filled star */
         font-size:2.5rem;
      }
      .ratings .far.fa-star {
         color: #ccc; /* Default color for empty star */
         transition: color 0.3s ease-in-out; /* Smooth transition for color change */
         font-size:1.5rem;
      }








      
.btn,
.delete-btn,
.option-btn{
   display: block;
   width: 100%;
}

.inline-btn,
.inline-delete-btn,
.inline-option-btn{
   display: inline-block;
}

.btn,
.delete-btn,
.option-btn,
.inline-btn,
.inline-delete-btn,
.inline-option-btn{
   margin-top: 1rem;
   text-align: center;
   padding: 1rem 3rem;
   font-size: 1.8rem;
   border-radius: .5rem;
   border: var(--border);
   color: var(--white);
   cursor: pointer;
   text-transform: capitalize;
}

.btn,
.inline-btn{
   background-color: #0f570f ;
}

.delete-btn,
.inline-delete-btn{
   background-color: #c31313;
}

.option-btn,
.inline-option-btn{
   background-color: #0f570f;
}

.btn:hover,
.delete-btn:hover,
.option-btn:hover,
.inline-btn:hover,
.inline-delete-btn:hover,
.inline-option-btn:hover{
   background-color: var(--black);
}

.flex-btn{
   display: flex;
   align-items: center;
   column-gap: 1.5rem;
   justify-content: space-between;
   flex-wrap: wrap;
}


      .reviews-container .box-container{
   display: grid;
   row-gap: 3rem;
   background-color: var(--white);
   box-shadow: var(--box-shadow);
   border: var(--border);
   border-radius: .5rem;
   padding: 2rem;
}

.reviews-container .box-container .box{
   border-bottom: var(--border);
   overflow-x: hidden;
   padding-bottom: 1.5rem;
   position: relative;
}

.reviews-container .box-container .box .user{
   display: flex;
   align-items: center;
   gap: 1.5rem;
   margin-bottom: 1rem;
}

.reviews-container .box-container .box .user img{
   height: 6rem;
   width: 6rem;
   border-radius: 50%;
   object-fit: cover;
}

.reviews-container .box-container .box .user h3{
   font-size: 2.5rem;
   height: 6rem;
   width: 6rem;
   border-radius: 50%;
   background-color: var(--light-bg);
   text-transform: uppercase;
   text-align: center;
   line-height: 6.5rem;   
}

.reviews-container .box-container .box .user p{
   font-size: 1.8rem;
   color: var(--black);
   text-overflow: ellipsis;
   overflow-x: hidden;
   padding-bottom: .3rem;
}

.reviews-container .box-container .box .user span{
   color: var(--light-color);
   font-size: 1.5rem;
}

.reviews-container .box-container .box .ratings{
   position: absolute;
   top: 0; right: 0;
   z-index: 10;
}

.reviews-container .box-container .box .ratings p{
   border-radius: .5rem;
   color: var(--white);
   padding: .5rem 1rem;
}

.reviews-container .box-container .box .ratings p span{
   font-size: 2rem;
}

.reviews-container .box-container .box .ratings p i{
   font-size: 1.5rem;
}

.reviews-container .box-container .box .title{
   font-size: 2rem;
   color: var(--black);
   padding: .5rem 0;
}

.reviews-container .box-container .box .description{
   font-size: 1.6rem;
   white-space: pre-line;
   color: var(--light-color);
   line-height: 1.5;
}






   </style>

</head>
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
   <h3>Review & ratings</h3>
   <p><a href="index2.php">Home </a> <span> /Reviews</span></p>
</div>

<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/about.png" alt="">
      </div>
      <div class="content">
         <h3>why choose us?</h3>
         <p>Our Library Management System offers an intuitive interface, seamless integration, and powerful features like real-time tracking and automated notifications. With top-notch security and dedicated support, we ensure efficient, reliable, and effective library management.</p>
         <title>Add Review Button</title>
<style>
    .btnn {
        padding: 1.6rem 1rem;
        display: inline-block;
        margin-top: 1rem;
        padding: 1.3rem 3rem;
        cursor: pointer;
        font-size: 2rem;
        text-transform: capitalize;
        background-color: #92e3a9;
        color: black;
        transition: background-color 0.3s, color 0.3s; /* Smooth transition */
        text-decoration: none; /* Remove underline from link */
    }

    .btnn:hover {
        background-color: #043504; /* New background color on hover */
        color: white; /* New text color on hover */
    }
</style>
 <a href="add_review.php" class="btnn">Add Review</a>
      </div>

   </div>

</section>


<section class="contacts">

   <h1 class="title">User's Reviews</h1>

   

   </div>

</section>
<section class="reviews-container">
<div class="swiper reviews-slider">

<div class="swiper-wrapper">

   <div class="swiper-slide slide">


<div class="box-container">

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
   <div class="box">
      <div class="user"><i class="fas fa-user" style="font-size:2rem;color: red;"></i> 
         <p><?= htmlspecialchars($fetch_review['name']); ?></p> 
      </div>
      <span class="date" style="font-size:1rem;color: black;"><?= htmlspecialchars($fetch_review['date']); ?></span>
      <div class="ratings">
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
      <p class="description"><?= htmlspecialchars($fetch_review['message']); ?></p>
      <form action="" method="post" class="flex-btn">
    <a href="edit_review.php?id=<?= $fetch_review['id']; ?>" class="inline-option-btn">Edit Review</a>
    <a href="delete_review.php?id=<?= $fetch_review['id']; ?>" class="inline-delete-btn">Delete Review</a>
</form>

   </div>
   <?php
      }
   } else {
      echo '<p class="empty">No reviews added yet!</p>';
   }
   ?>
</div>
</div></div></div>

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
         <a href="tel:1112223333">+017xxxxxxxx</a>
      </div>

   </section>

   <div class="credit">&copy; Easily find your book here.</span> |Enjoy READING!</div>

</footer>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<script src="js/script.js"></script>


</body>
</html>