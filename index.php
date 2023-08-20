/*
This file contains the HTML code for the basic calculator user interface. It includes
a form with two input fields: one for the nubers to be calculated and another for the 
operation to be performed (addition, substraction, multiplication, or division). It 
also includes a link to the `style.css` file, which contains the CSS code for styling 
the calculator.
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
		<form method="post" action="calculate.php">
			<label>Enter numbers separated by commas:</label>
			<input type="text" name="numbers" required>
			<br>
			<label>Select operation:</label>
			<select name="operation" required>
				<option value="">Select an operation</option>
				<option value="add">Addition</option>
				<option value="subtract">Subtraction</option>
				<option value="multiply">Multiplication</option>
				<option value="divide">Division</option>
			</select>
			<br>
			<input type="submit" value="Calculate">
		</form>
	</div>
</body>
</html>
