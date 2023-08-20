/*
This file contains the PHP code for processing the form input from `index.php` and 
performing the calculation based on the selected operation. It starts by checking if 
the numbers and operation fields are set, and then uses the `explode()` function to
convert the comma-separated list of numbers into an array. It then uses a switch 
statement to perform the selected operation on the array of numbers, and stores the 
result in the `$result`variable. If the operation is a division, it also checks if 
any of the numbers are zero, to avoid division by zero errors. If there are no errors,
it displays the result in a paragraph element. If there are errors, it displays an
error message instead.
*/

<!DOCTYPE html>
<html>
<head>
	<title>Basic Calculator</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="calculator">
		<h2>Basic Calculator</h2>
		<?php
		if (isset($_POST['numbers']) && isset($_POST['operation'])) {
			$numbers = explode(',', $_POST['numbers']);
			$operation = $_POST['operation'];
			$result = 0;
			switch ($operation) {
				case 'add':
					$result = array_sum($numbers);
					break;
				case 'subtract':
					$result = $numbers[0];
					for ($i = 1; $i < count($numbers); $i++) {
						$result -= $numbers[$i];
					}
					break;
				case 'multiply':
					$result = $numbers[0];
					for ($i = 1; $i < count($numbers); $i++) {
						$result *= $numbers[$i];
					}
					break;
				case 'divide':
					$result = $numbers[0];
					for ($i = 1; $i < count($numbers); $i++) {
						if ($numbers[$i] != 0) {
							$result /= $numbers[$i];
						} else {
							echo '<p class="error">Division by zero!</p>';
							break 2;
						}
					}
					break;
				default:
					echo '<p class="error">Invalid operation!</p>';
					break
