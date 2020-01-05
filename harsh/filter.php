<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Filter</title>
</head>
<body>
   <?php
 //validate and sanitize data with filter
	echo "<br>";
	echo "o/p of validate and sanitize data with filter" ."<BR>";
	$comment = "<h1> Hey there! How are you doing today?</h1>";
        
	$sanitizeComment = filter_var($comment, FILTER_SANITIZE_STRING);
	echo $sanitizeComment;
	echo "<br>";
 
//validate integer values
	echo "<br>";
	echo "o/p of validate integer values"."<BR>";
	$int = 20;
	if(filter_var($int, FILTER_VALIDATE_INT)){
	echo "the <b>$int</b> is a valid integer number";
	}else{
	echo "the <b>$int</b> is not a valid integer number.";
	}
	echo "<br>"; 

//validate integer value for 0 
	echo "<br>";
	echo "o/p of validate integer value for 0 "."<BR>"; 
	$int = 0;
	if(filter_var($int, FILTER_VALIDATE_INT) === 0 ){
	echo "the <b>$int</b> is a valid integer number";
	}else{
	echo "the <b>$int</b> is not a valid integer number.";
	} 
	echo "<br>";

//validate IP address
	echo "<br>";	
	echo"o/p of validate IP address"."<BR>";
	$ip = "172.16.254.1";
	if(filter_var($ip, FILTER_VALIDATE_IP)){
	echo " the <b>$ip</b> is a valid IP address";
	}else{
	echo "the<b>$ip</b> is not a valid IP address.";
	}
	echo "<br>";

//validation for IPV4 and IPV6 flaG
	echo "<br>";
	echo "o/p of validation for IPV4 and IPV6 flag"."<BR>";
	$ip = "172.16.254.1";
	if(filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6)){
	echo " the <b>$ip</b> is a valid IPV6 address";
	}else{
	echo "the<b>$ip</b> is not a valid IPV6 address.";
	}
	echo "<br>";

//Sanitize and Validate E-Mail
	echo "<br>";
	echo "o/p of Sanitize and Validate E-Mail" . "<br>";
	$email = "harshlimbachiya98@gmail.com";
	$email = filter_var($email, FILTER_SANITIZE_EMAIL);
	if(filter_var($email, FILTER_VALIDATE_EMAIL)){
	echo "the <b>$email</b> is a valid email address.";
	}else{
	echo "the <b>$email</b> is not a valid email address.";
	}
	echo "<br>";
	
//Sanitize and Validate URL
	echo "<br>";
	echo "o/p of Sanitize and Validate URL" . "<>";
	$url = "http://www.google.com";
	$url = filter_var($url, FILTER_SANITIZE_URL);
	if(filter_var($url, FILTER_VALIDATE_URL)){
	echo "the <b>$url</b> is a valid url.";
	}else{
	echo "the <b>$url</b> is not a valid url.";
	}
	echo "<br>";
	
//Validate Integer in Range

	echo "<br>";
	echo "o/p of Validate Integer in Range". "<br>";
	$int = 12;
	if(filter_var($int, FILTER_VALIDATE_INT, array("options" => array("min_range" => 0, "max_range" => 100)))){
	echo "The <b>$int</b> is a valide integer number.";
	}else{
	echo "The <b>$int</b> is not a valide integer number.";
	}
	echo "<br>";
?>
</body>
</html>
