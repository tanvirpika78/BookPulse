<?php
session_start(); // Start session for storing messages

try {
    $conn = new PDO("mysql:host=localhost;dbname=library_managment", "root", "");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

if (isset($_POST['submit_review'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $rating = $_POST['rating'];
    $message = $_POST['message'];
    $date = date('Y-m-d');

    // Check if email and name exist in userdata
    $check_user = $conn->prepare("SELECT id FROM userdata WHERE email = ? AND name = ?");
    $check_user->execute([$email, $name]);

    if ($check_user->rowCount() > 0) {
        // Email and name exist, now check if password matches
        $user_data = $check_user->fetch(PDO::FETCH_ASSOC);
        $user_id = $user_data['id'];

        $check_pass = $conn->prepare("SELECT id FROM userdata WHERE id = ? AND pass = ?");
        $check_pass->execute([$user_id, $pass]);

        if ($check_pass->rowCount() > 0) {
            // Password matches, proceed to insert review
            $insert_review = $conn->prepare("INSERT INTO reviews (name, email, rating, message, date, pass) VALUES (?, ?, ?, ?, ?, ?)");
            $insert_review->execute([$name, $email, $rating, $message, $date, $pass]);

            $_SESSION['success_msg'] = 'Review added successfully!';
            header('Location:review.php'); // Redirect to all_posts.php after adding review
            exit();
        } else {
            // Password does not match
            $_SESSION['error_msg'] = 'Incorrect password!';
            header('Location: add_review.php'); // Redirect back to add_review.php or another page
            exit();
        }
    } else {
        // Email or name does not exist in userdata
        $_SESSION['error_msg'] = 'Email or name not found in user database!';
        header('Location: add_review.php'); // Redirect back to add_review.php or another page
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Add Review</title>
   <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet">
   <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
   <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
   <link rel="stylesheet" href="css/style.css">
</head>
<body>
<section class="account-form">
    <?php if (isset($_SESSION['error_msg'])): ?>
        <div class="alert alert-danger" role="alert">
            <?php echo $_SESSION['error_msg']; ?>
            <?php unset($_SESSION['error_msg']); ?>
        </div>
    <?php endif; ?>
    <form action="add_review.php" method="post">
        <h3>Post your review</h3>
        <p class="placeholder">Name <span>*</span></p>
        <input type="text" name="name" required maxlength="50" placeholder="Enter your name" class="box">
        <p class="placeholder">Email <span>*</span></p>
        <input type="text" name="email" required maxlength="50" placeholder="Enter your email" class="box">
        <p class="placeholder">Password <span>*</span></p>
        <input type="password" name="pass" required maxlength="50" placeholder="Enter your password" class="box">
        <p class="placeholder">Review description</p>
        <textarea name="message" class="box" placeholder="Enter your review" maxlength="1000" cols="30" rows="10"></textarea>
        <p class="placeholder">Review rating <span>*</span></p>
        <select name="rating" class="box" required>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>
        <input type="submit" value="Submit review" name="submit_review" class="btn">
        <a href="reviews.php" class="option-btn">Go back</a>
        
    </form>
</section>
</body>
</html>
