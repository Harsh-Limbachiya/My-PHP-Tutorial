<!DOCTYPE html>
<html>
<head>
<title>Regrular Expresions</title>
</head>
<body>
<?php

//using preg_match() in regular expresion

 	echo strtoupper("output of preg_match() in regular expresion") . 		"<br>";
 	$pattern = "/ ca[kf]e /";
	$text = "He was eating cake in the cafe";
	if(preg_match($pattern, $text)){
	echo "match found" ;
	}else{
	echo 'match not found';
	}
	echo "<br>";
	

//using preg_match_all() in regular expresion
	
	echo "<br>";
	echo strtoupper("output of preg_match() in regular expresion") . 		"<br>";
	$pattern = "/ ca[kf]e /";
	$text = "He was eating a cake in the cafe.";
	$matches = preg_match_all($pattern, $text, $array);
	echo $matches . " matches were found" . "<br>";
	echo "<br>";

//using preg_replace in regular expresion
	
	echo "<br>";
	echo strtoupper("output of preg_replace() in regular expresion") . 		"<br>";
	$pattern = "/\s/";
	$text = "Planet Earth revolves around\nthe\tSun";
	$replacement = "-";
	echo preg_replace($pattern, $replacement, $text);
	echo "<br>";
	echo str_replace(" ","-",$text);
	echo "<br>";


//using preg_split() in regular expression

	echo "<br>";
	echo strtoupper("output of preg_replace() in regular expresion") . 		"<br>";
	$pattern = "/[\s,]/";
	$text = "My Favourite colors are Red,Green and Blue.";
	$parts = preg_split($pattern, $text);
	foreach($parts as $part){
	 echo $part . "<br>";
	} 
	echo "<br>";
	
//using preg_match_all() with i modifier
	
	echo "<br>";
	echo strtoupper("output of preg_match_all() with i modifier") . 		"<br>";
	$pattern = "/color/i";
	$text = "Color Red is more visible then color blue during daylight.";
	$matche = preg_match_all($pattern, $text, $array);
	echo $matche . " matches were found";
	echo "<br>";

//using preg_grep() in regular expression

	echo "<br>";
	echo strtoupper("output of preg_grep() in regular expresion") . 		"<br>";
	$pattern = "/^J/";
	$names = array("John Carter","Johny","Ross Mirinda","Allen Sharma");
	$matches = preg_grep($pattern, $names);
	foreach($matches as $match){
	echo $match . "<br>";
 	}
	echo "<br>";

//using preg_match_all() with m modifier

	echo "<br>";
	echo strtoupper("output of preg_match_all() with i modifier") . 		"<br>";
	
	$pattern = "/^color/im";
	$text = "Color red is more visible than \ncolor blue in daylight.";
	$matches = preg_match_all($pattern, $text, $array);
	echo $matches . " matches were found.";
	echo "<br>";
	
//word boundaries in regular expression

	echo "<br>";
	echo strtoupper("output of word boundaries in regular expression") . 	"<br>";
	$pattern = '/\bcar\w*/';
	$replacement = '<b>$0</b>';
	$text = "Word that start with car are cart,carrot,cartoon. \nWord 	that end with car are:scar,oscar,supercar.";
	echo preg_replace($pattern,$replacement,$text);
	
?>
</body>
</html>
