<!DOCTYPE html>
<html>
<head>
<title>Exception Handling</title>
</head>
<body>
<?php

//Example of throw,try...catch exception handling

	
	echo strtoupper("output of throw,try...catch exception handling") . 	"<br>";
	function division($divident, $divisor){
	 if($divisor == 0){
		throw new Exception("divided by zero");
		}else{
		$quotient = $divident/$divisor;
		echo "<p>$divident/$divisor = $quotient</p>";
		}
	}
	
	try{
	division(10, 2);
	division(30, -4);
	division(10, 0);
	echo "<p> All division performed successfully.</p>";
	}catch(Exception $e){
	echo "<p>Caught exception:" . $e->getmessage() . "</p>";
	}
	echo "<p>Hello World</p>";

?>
</body>
</html>	
 
