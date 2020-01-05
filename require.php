<?php
// Including file
require "my_functions.php";
// Calling the function
multiplySelf(2); // Output: 4
echo "<br>";
 
// Including file once again
require "my_functions.php";
// Calling the function
multiplySelf(5); // Doesn't execute
?>