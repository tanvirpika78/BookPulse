<?php
include("data_class.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $bookname = $_POST['bookname'];
    $author = $_POST['author'];
    $genre = $_POST['genre'];
    $description = $_POST['description'];
    session_start();
    $userid = $_SESSION["userid"];

    $u = new data;
    $u->setconnection();
    $u->recommendbook($bookname, $author, $genre, $description, $userid);
}
?>
