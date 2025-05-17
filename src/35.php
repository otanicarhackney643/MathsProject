<?php
// Define a function to calculate the area of a rectangle
function calculate_rectangle_area($width, $height) {
    return $width * $height;
}

// Example usage: calculate the area of a square with side length 5
$square_area = calculate_rectangle_area(5, 5);
echo "The area of the square is: " . $square_area;
?>
