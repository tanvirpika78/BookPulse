<?php

ob_start();

class db{
protected $connection;

function setconnection(){
    try{
        $this->connection=new PDO("mysql:host=localhost; dbname=library_managment","root","");
        // echo "Done";
    }catch(PDOException $e){
        echo "Error";
        //die();

    }
}

}

?>

<?php
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "library_managment";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>




<?php

$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "library_managment";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Initialize books array
$books = [];

// Fetch latest 10 books
$sql = "SELECT id, bookname, bookpic, bookauthor, bookquantity, bookprice FROM book ORDER BY id DESC LIMIT 10";
if ($result = $conn->query($sql)) {
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $books[] = $row;
        }
    }
    $result->free();
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>


<?php
function getDatabaseConnection() {
    $servername = "localhost";
    $username = "root"; 
    $password = ""; 
    $dbname = "library_managment";
    
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch(PDOException $e) {
        die("Connection failed: " . $e->getMessage());
    }
}
?>
