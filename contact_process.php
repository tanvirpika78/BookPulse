<?php
require_once 'db.php';
require_once 'form_validation.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['send'])) {
    // Sanitize user input
    $name = htmlspecialchars($_POST['name']);
    $number = htmlspecialchars($_POST['number']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['msg']);

    // Validate the form data
    $errors = validateForm($name, $number, $email, $message);

    if (!empty($errors)) {
        $error_message = implode(", ", $errors);
        header("Location: contact.php?status=error&message=" . urlencode($error_message));
        exit();
    }

    try {
        // Get the database connection
        $conn = getDatabaseConnection();

        // Prepare and execute SQL statement
        $sql = "INSERT INTO contacts (name, number, email, message) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$name, $number, $email, $message]);

        // Redirect back to the contact page with success message
        header("Location: contact.php?status=success");
        exit();
    } catch(PDOException $e) {
        // Redirect back to the contact page with error message
        header("Location: contact.php?status=error&message=" . urlencode($e->getMessage()));
        exit();
    } finally {
        // Close the connection
        $conn = null;
    }
}
?>
