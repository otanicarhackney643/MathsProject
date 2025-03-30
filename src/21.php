<?php
// Define some variables
$student_name = "John Doe";
$password = "secretpassword1234";

// Connect to a database (replace with your actual connection details)
$conn = mysqli_connect("localhost", "username", "password", "database");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Perform some operations
echo "Hello, $student_name! You are logged in as $password.";

// Close the database connection
mysqli_close($conn);
?>
