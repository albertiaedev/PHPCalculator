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