<?php

// Function to calculate the factorial of a number
function factorial($n) {
    if ($n == 0) {
        return 1;
    } else {
        return $n * factorial($n - 1);
    }
}

// Driver Code
$num = 5;
echo "Factorial of " . $num . ": " . factorial($num);

?>