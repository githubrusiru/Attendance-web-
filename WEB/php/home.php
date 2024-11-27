<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database credentials
    $servername = "localhost";
    $username = "Rusiru";
    $password = "1234";
    $dbname = "web app";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Get username and password from form submission
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Query to check if username and password match
    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);

    // If a row is found, login is successful
    if ($result->num_rows > 0) {
        // Redirect to home page
        header("Location: home.php");
        exit();
    } else {
        // If no rows found, show error message
        echo "Invalid username or password";
    }

    // Close connection
    $conn->close();
}
?>
