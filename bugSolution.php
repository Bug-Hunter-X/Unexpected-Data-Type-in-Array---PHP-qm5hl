function calculateSum(numbers) {
  if (!is_array(numbers)) {
    return 'Invalid input: numbers must be an array.';
  }

  $sum = 0;
  foreach ($numbers as $number) {
    if (!is_numeric($number)) {
      return 'Invalid input: Array elements must be numbers.';
    }
    $sum += $number;
  }

  return $sum;
}

$numbers = [1, 2, 3, 'a', 5];
$sum = calculateSum($numbers);

if (is_numeric($sum)) {
  echo "Sum: " . $sum;
} else {
  echo $sum; //Handles error and displays the error message
}
