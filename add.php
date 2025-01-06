<?php
// Get the numbers from the form
$num1 = $_POST['tb1'];
$num2 = $_POST['tb2'];

// Calculate the sum
$sum = $num1 + $num2;
$sub = $num1 - $num2;
$mul = $num1 * $num2;
$div = $num1 / $num2;

// Display the result
echo "The sum of $num1 and $num2 is: " . $sum;
echo "The substraction of $num1 and $num2 is: " . $sub;
echo "The product of $num1 and $num2 is: " . $mul;
echo "The division of $num1 and $num2 is: " . $div;
?>