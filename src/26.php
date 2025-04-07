<?php
// This PHP script is designed to demonstrate how to display the current date and time.
// It also includes some basic configuration options.

date_default_timezone_set('UTC'); // Set the default timezone to UTC

// Get the current day of the year
$currentYear = date('Y');
$currentMonth = date('m');
$currentDay = date('d');

echo "Today is: $currentYear$currentMonth$currentDay\n";
?>
