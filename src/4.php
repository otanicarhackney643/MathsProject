$number = 4;
$numbers = array(1, 2, 3, 4, 5);

function sum($numbers) {
  $total = 0;
  foreach ($numbers as $number) {
    $total += $number;
  }
  return $total;
}

$sum = sum($numbers);
echo "The sum of the numbers is: $sum";
