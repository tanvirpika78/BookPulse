<?php /*
session_start();

try {
    $conn = new PDO("mysql:host=localhost;dbname=library_managment", "root", "");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $delete_review = $conn->prepare("DELETE FROM reviews WHERE id = ?");
    $delete_review->execute([$id]);

    if ($delete_review->rowCount() > 0) {
        $_SESSION['success_msg'] = 'Review deleted successfully!';
    } else {
        $_SESSION['error_msg'] = 'Failed to delete review. Please try again.';
    }
    header('Location: reviews.php');
    exit();
} else {
    $_SESSION['error_msg'] = 'Invalid review ID!';
    header('Location: reviews.php');
    exit();
}
?>
*/




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

// Check if the form is submitted for deleting review
if (isset($_POST['delete_review'])) {
    $password = $_POST['password']; // Password entered by the user

    // Fetch the user's ID based on the provided email
    $fetch_user_id = $conn->prepare("SELECT id FROM userdata WHERE email = ?");
    $fetch_user_id->execute([$review['email']]);

    if ($fetch_user_id->rowCount() > 0) {
        $user_data = $fetch_user_id->fetch(PDO::FETCH_ASSOC);
        $user_id = $user_data['id'];

        // Check if the provided password matches the stored password for this review
        $check_pass = $conn->prepare("SELECT id FROM userdata WHERE id = ? AND pass = ?");
        $check_pass->execute([$user_id, $password]);

        if ($check_pass->rowCount() > 0) {
            // Password matches, proceed to delete the review
            $delete_review = $conn->prepare("DELETE FROM reviews WHERE id = ?");
            $delete_review->execute([$id]);

            if ($delete_review->rowCount() > 0) {
                $_SESSION['success_msg'] = 'Review deleted successfully!';
                header('Location: reviews.php');
                exit();
            } else {
                $_SESSION['error_msg'] = 'Failed to delete review. Please try again.';
                header("Location: delete_review.php?id=$id");
                exit();
            }
        } else {
            // Password does not match
            $_SESSION['error_msg'] = 'Incorrect password!';
            header("Location: delete_review.php?id=$id");
            exit();
        }
    } else {
        // Email not found in userdata
        $_SESSION['error_msg'] = 'User not found!';
        header("Location: delete_review.php?id=$id");
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
   <title>Delete Review</title>
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
            <form action="delete_review.php?id=<?= $id; ?>" method="post">
                <h3>Delete Review</h3>
                <p>Email: <?= htmlspecialchars($review['email']); ?></p>
                <p>Rating: <?= htmlspecialchars($review['rating']); ?></p>
                <p>Message: <?= htmlspecialchars($review['message']); ?></p>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" required>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-danger" name="delete_review" value="Delete Review">
                </div>
            </form>
        </div>
    </div>
</div>
</section>

</body>
</html>
