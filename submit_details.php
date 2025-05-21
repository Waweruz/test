<?php
// Database connection
$servername = "localhost";  // Database server
$username = "root";         // Database username
$password = "";             // Database password (leave empty for XAMPP)
$dbname = "land_estate";    // Database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Collect the form data
$name = $_POST['name'];
$idno = $_POST['idno'];
$order_no = $_POST['order_no'];
$country = $_POST['country'];
$ownership = $_POST['ownership'];

// Insert the data into the database
$sql = "INSERT INTO user_details (name, idno, order_no, country, ownership)
        VALUES ('$name', '$idno', '$order_no', '$country', '$ownership')";

if ($conn->query($sql) === TRUE) {
    echo "Details submitted successfully.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
