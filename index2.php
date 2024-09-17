<?php
session_start(); // Start session for storing messages

$servername = "localhost";
$username = "root"; // your database username
$password = ""; // your database password
$dbname = "library_managment";

// Create connection with PDO
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

// Initialize books array
$latest_books = [];
$all_books = [];

try {
    // Fetch latest 10 books
    $stmt_latest = $conn->prepare("SELECT id, bookname, bookpic, bookauthor, bookquantity, bookprice FROM book ORDER BY id DESC LIMIT 6");
    $stmt_latest->execute();
    $latest_books = $stmt_latest->fetchAll(PDO::FETCH_ASSOC);

    // Fetch all books
    $stmt_all = $conn->prepare("SELECT id, bookname, bookpic, bookauthor, bookquantity, bookprice FROM book ORDER BY id DESC");
    $stmt_all->execute();
    $all_books = $stmt_all->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Cover Page</title>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<link rel="stylesheet" href="./style2.css"/>
<link rel="stylesheet" href="./style3.css"/>
<!-- Link Swiper's CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>
<body>

<div class="loader-con">
  <img src ="image/loader1.gif" alt="">
</div>
<header class="header">
<div class="header-2">
     <p>Navigate Worlds Through Words</p>
</div>
<div class="header-1">
   <a href="#" class="logo" style="font-size:4rem;">
      <i class="fas fa-book" style="font-size:4rem;color: yellow;background-color:black;"></i> BookPulse 
   </a>
   <form action="search.php" method="GET" class="search-form">  
       <input type="search" name="search" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" class="form-control" placeholder="Search Book">
       <button class="btn" type="submit" for="search-box"><i class="fas fa-search"></i></button>
   </form>
   <div class="icons">
     <div id="search-btn" class="fas fa-search"></div>
     <a href="library_Project" class="fa-solid fa-circle-user"></a>
     <a href="reviews.php" class="fas fa-star"></a>
     <a href="about.php" class="fa-solid fa-circle-info"></a>
     <a href="contact.php" class="fa-solid fa-phone"></a>
     <a href="latest.php" class="fa-solid fa-list"></a>
 
   
   </div>
</div>
<div class="header-3">
<section class="slider_container">
    <div class="container">
        <div class="swiper card_slider">
            <div class="swiper-wrapper">
                <?php 
                try {
                    $stmt = $conn->prepare("SELECT * FROM book WHERE bookquantity >= 100");
                    $stmt->execute();
                    if ($stmt->rowCount() > 0) { 
                        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { 
                            $imageURL = './library_Project/uploads/'.$row["bookpic"]; 
                ?>
                <div class="swiper-slide">
                    <div class="img_box">
                        <img src="<?php echo htmlspecialchars($imageURL); ?>" alt="" />
                        <h6><?php echo htmlspecialchars($row["bookname"]); ?></h6>
                    </div>
                </div>
                <?php 
                        } 
                    } else {
                        echo "<p>No books found in the database.</p>";
                    }
                } catch (PDOException $e) {
                    echo "Error: " . $e->getMessage();
                }
                ?>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>
</div>


<div class="header-4"  style="background-color: white;">
<section class="steps" >

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
</div>






<section class="products">
      <h1 class="title">Latest Books</h1>
      <div class="box-container">
         <?php if (!empty($latest_books)): ?>
            <?php foreach($latest_books as $book): ?>
               <form accept="" method="post" class="box">
                  <a ?id=<?= htmlspecialchars($book['id'], ENT_QUOTES, 'UTF-8'); ?>" class="fas fa-eye"></a>
                  <img src="./library_Project/uploads/<?= htmlspecialchars($book['bookpic'], ENT_QUOTES, 'UTF-8'); ?>" alt="<?= htmlspecialchars($book['bookname'], ENT_QUOTES, 'UTF-8'); ?>">
                  <a href="category.html" class="cat">Book</a>
                  <div class="name"><?= htmlspecialchars($book['bookname'], ENT_QUOTES, 'UTF-8'); ?></div>
                  <div class="flex">
                     <div class="price"><span>$</span><?= htmlspecialchars($book['bookprice'], ENT_QUOTES, 'UTF-8'); ?><span>/-</span></div>
                     <div class="qty"><?= htmlspecialchars($book['bookquantity'], ENT_QUOTES, 'UTF-8'); ?>  </div>
                  </div>
               </form>
            <?php endforeach; ?>
         <?php else: ?>
            <p>No books found.</p>
         <?php endif; ?>
      </div>
      <div class="more-btn">
      <a href="latest.php" class="btn">view all</a>
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
        try {
            $select_reviews = $conn->prepare("SELECT id, name, rating, message, date FROM reviews");
            $select_reviews->execute();
            if ($select_reviews->rowCount() > 0) {
                while ($fetch_review = $select_reviews->fetch(PDO::FETCH_ASSOC)) {
        ?>
        <div class="swiper-slide slide">
            <div class="user"><i class="fas fa-user" style="font-size:5rem;;color: red;"></i></div>
            <p><?= htmlspecialchars($fetch_review['message']); ?></p>
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
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        ?>
      </div>
      <div class="swiper-pagination"></div>
   </div>
 

</section>

<section class="contacts">
   <h1 class="title">Our contacts</h1>
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
         <h3>our number</h3>
         <a href="tel:1234567890">+019xxxxxxxx</a>
         <a href="tel:1112223333">+017xxxxxxxx</a>
      </div>
   </section>
   <div class="credit">&copy; Easily find your book here. Enjoy READING!</div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
<script src="script.js"></script>

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
