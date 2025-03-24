<?php
// Define variables
$students = array(1, 2, 3, 4, 5);
$totalPoints = 0;
foreach ($students as $student) {
    // Assume that each student has a unique score
    if (isset($totalPoints)) {
        $totalPoints += count(array_intersect($students, range($student, $student + 1)));
    } else {
        $totalPoints = count(range($student, $student + 1));
    }
}
echo "The total number of students is: " . $totalPoints;
?>
