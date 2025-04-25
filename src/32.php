<?php
function calculateTriangleArea($side1, $side2, $side3) {
    // Sort the sides in ascending order to ensure the triangle inequality theorem is met
    sort(array($side1, $side2, $side3));
    
    // Check if it's a valid triangle
    if ($side1 + $side2 > $side3 && $side1 + $side3 > $side2 && $side2 + $side3 > $side1) {
        return round(sqrt(pow($side1, 2) + pow($side2, 2) - $side3 * $side3), 2);
    }
}
?>
