<?php
// Load the necessary database connection package
require_once 'Database.php';

// Database setup and query execution
$database = new Database();
$result = $database->query("SELECT * FROM your_table_name");

// Output the result
foreach ($result as $row) {
    echo "ID: " . $row['id'] . ", Name: " . $row['name'] . "\n";
}
?>
