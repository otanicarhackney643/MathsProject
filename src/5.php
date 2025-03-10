  <?php

$mathsProject = new MathsProject();

// Define an array of numbers to work with
$numbers = [34, 56, 23, 87, 100];

// Define a function to calculate the average of a list of numbers
function average($numbers) {
    return array_sum($numbers) / count($numbers);
}

// Calculate the average of the numbers
$average = average($numbers);

// Print the result
echo "The average is $average";

?>