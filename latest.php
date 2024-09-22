<?php
// Database connection
$servername = "localhost";
$username = "root"; // your database username
$password = ""; // your database password
$dbname = "library_managment";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Initialize books array
$latest_books = [];
$all_books = [];

// Fetch latest 10 books
$sql_latest = "SELECT id, bookname, bookpic, bookauthor, bookquantity, bookprice FROM book ORDER BY id DESC LIMIT 9";
if ($result_latest = $conn->query($sql_latest)) {
    if ($result_latest->num_rows > 0) {
        while($row = $result_latest->fetch_assoc()) {
            $latest_books[] = $row;
        }
    } else {
        echo "No books found in the database.";
    }
    $result_latest->free();
} else {
    echo "Error: " . $conn->error;
}

// Fetch all books
$sql_all = "SELECT id, bookname, bookpic, bookauthor, bookquantity, bookprice FROM book ORDER BY id DESC";
if ($result_all = $conn->query($sql_all)) {
    if ($result_all->num_rows > 0) {
        while($row = $result_all->fetch_assoc()) {
            $all_books[] = $row;
        }
    } else {
        echo "No books found in the database.";
    }
    $result_all->free();
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Latest Books</title>

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
      <h3>Our Books</h3>
      <p><a href="index2.php">Home</a> <span> / Latest</span></p>
   </div>

   <section class="products">
      <h1 class="title">Latest Books</h1>
      <div class="box-container">
         <?php if (!empty($latest_books)): ?>
            <?php foreach($latest_books as $book): ?>
               <form accept="" method="post" class="box">
                  <a id=<?= htmlspecialchars($book['id'], ENT_QUOTES, 'UTF-8'); ?> class="fas fa-eye"></a>
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
   </section>

   <section class="products">
   <h1 class="title" style="text-shadow: 1px 2px black;">All Books</h1>

      <div class="box-container">
         <?php if (!empty($all_books)): ?>
            <?php foreach($all_books as $book): ?>
               <form accept="" method="post" class="box">
                  <a ?id=<?= htmlspecialchars($book['id'], ENT_QUOTES, 'UTF-8'); ?>class="fas fa-eye"></a>
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

   <script src="js/script.js"></script>
</body>
</html>
