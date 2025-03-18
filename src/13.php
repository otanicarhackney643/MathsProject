<?php
function calculate_pi($radius) {
  $area = pi() * pow($radius, 2);
  return $area;
}

$radius = 10; // replace with actual radius value
$pi = calculate_pi($radius);
echo "The area of the circle is: " . $pi;
?>
