<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = " ";
$database = "customer";
// Create connection
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Retrieve data from the form
$name = $_POST['name'];
$email = $_POST['email'];
// SQL query to insert data into the table
$sql = "INSERT INTO users (name, email) VALUES ('$name', '$email')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
// Close the connection
$conn->close();
?>
