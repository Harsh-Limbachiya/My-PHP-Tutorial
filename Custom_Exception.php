<!DOCTYPE html>
<html>
<head>
<title>Custom Exception</title>
</head>
<body>

<?php
//code for Custom Exception 
 
 	echo strtoupper("output of custom exception") . "<br>";
	class EmptyEmailException extends Exception{};
	class InvalidEmailException extends Exception{};
	
	$email = "harsh@gmail.com";
	try{
	
	if($email  == ""){
	 throw new EmptyEmailException("<p>Please enter your email address! 	<p>");
	 }
	if(filter_var($email, FILTER_VALIDATE_EMAIL) === FALSE){
	 throw new InvalidEmailException("<p><b>$email</b> is not a valid 	 email address!</p>");
	}
	echo "<p>Email entered success and validated</p>";
	}catch(Exception $e){
	 echo $e->getMessage();
	 }catch(Exception $e){
	 echo $e->getMessage();
	 }
?>
</body>
</html>