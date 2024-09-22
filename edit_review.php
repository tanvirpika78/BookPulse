<?php
session_start();

try {
    $conn = new PDO("mysql:host=localhost;dbname=library_managment", "root", "");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

// Check if ID is provided in the URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Fetch the review details based on the ID
    $select_review = $conn->prepare("SELECT email, rating, message, pass FROM reviews WHERE id = ?");
    $select_review->execute([$id]);

    if ($select_review->rowCount() > 0) {
        $review = $select_review->fetch(PDO::FETCH_ASSOC);
    } else {
        $_SESSION['error_msg'] = 'Review not found!';
        header('Location: reviews.php');
        exit();
    }
} else {
    $_SESSION['error_msg'] = 'Invalid request!';
    header('Location: reviews.php');
    exit();
}

// Check if the form is submitted for updating review
if (isset($_POST['update_review'])) {
    $email = $_POST['email'];
    $rating = $_POST['rating'];
    $message = $_POST['message'];
    $password = $_POST['password']; // Password entered by the user

    // Fetch the user's ID based on the provided email
    $fetch_user_id = $conn->prepare("SELECT id FROM userdata WHERE email = ?");
    $fetch_user_id->execute([$email]);

    if ($fetch_user_id->rowCount() > 0) {
        $user_data = $fetch_user_id->fetch(PDO::FETCH_ASSOC);
        $user_id = $user_data['id'];

        // Check if the provided password matches the stored password for this review
        $check_pass = $conn->prepare("SELECT id FROM userdata WHERE id = ? AND pass = ?");
        $check_pass->execute([$user_id, $password]);

        if ($check_pass->rowCount() > 0) {
            // Password matches, proceed to update the review
            $update_review = $conn->prepare("UPDATE reviews SET email = ?, rating = ?, message = ? WHERE id = ?");
            $update_review->execute([$email, $rating, $message, $id]);

            $_SESSION['success_msg'] = 'Review updated successfully!';
            header('Location: reviews.php');
            exit();
        } else {
            // Password does not match
            $_SESSION['error_msg'] = 'Incorrect password!';
            header("Location: edit_review.php?id=$id");
            exit();
        }
    } else {
        // Email not found in userdata
        $_SESSION['error_msg'] = 'Email not found!';
        header("Location: edit_review.php?id=$id");
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
   <title>Edit Review</title>
   <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet">
   <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
   <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
   <link rel="stylesheet" href="css/style.css">
</head>
<body>
<section class="account-form">
<div class="container">
    <div class="row">
        <div class="col-md-6 mx-auto">
            <?php if (isset($_SESSION['error_msg'])): ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $_SESSION['error_msg']; ?>
                </div>
                <?php unset($_SESSION['error_msg']); ?>
            <?php endif; ?>
            <form action="edit_review.php?id=<?= $id; ?>" method="post">
            <h3>Edit Review</h3>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" value="<?= htmlspecialchars($review['email']); ?>" required>
                </div>
                <div class="form-group">
                    <label for="rating">Rating</label>
                    <input type="number" class="form-control" name="rating" value="<?= htmlspecialchars($review['rating']); ?>" min="1" max="5" required>
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea class="form-control" name="message" rows="4" required><?= htmlspecialchars($review['message']); ?></textarea>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" required>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" name="update_review" value="Update Review">
                </div>
            </form>
        </div>
    </div>
</div>
</section>

</body>
</html>
