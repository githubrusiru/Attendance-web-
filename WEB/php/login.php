<?php
// Database credentials
$servername = "localhost"; // Change if your database is hosted elsewhere
$username = "root"; // Change to your MySQL username
$password = ""; // Change to your MySQL password
$dbname = "web app"; // Change to the name of your database

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get username and password from form submission
$username = $_POST["username"];
$password = $_POST["password"];

// Hash the password for security (you should always hash passwords before storing them)
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Insert user data into the database
$sql = "INSERT INTO users (username, password) VALUES ('$username', '$hashed_password')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>
