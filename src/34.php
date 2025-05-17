<?php
// Assuming you have a database connection established with $conn
$query = "SELECT * FROM your_table_name WHERE condition";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    // Fetch each row of the result set and output it as JSON for demonstration purposes
    while ($row = mysqli_fetch_assoc($result)) {
        echo json_encode($row, JSON_UNESCAPED_UNICODE);
    }
} else {
    echo "No results found.";
}

// Close the database connection when done
mysqli_close($conn);
?>
