<?php
function validateForm($name, $number, $email, $message) {
    $errors = [];

    if (empty($name) || strlen($name) > 50) {
        $errors[] = "Invalid name.";
    }
    if (!preg_match("/^0[0-9]{10}$/", $number)) {
        $errors[] = "Invalid phone number.";
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL) || strlen($email) > 50) {
        $errors[] = "Invalid email.";
    }
    if (empty($message) || strlen($message) > 500) {
        $errors[] = "Invalid message.";
    }

    return $errors;
}
?>
