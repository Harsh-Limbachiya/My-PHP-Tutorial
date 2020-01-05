<!DOCTYPE html>
<html>
<head>
  <title>read the entire content in file</title>
</head>
<body>
	<?php
//code to read entire file using readfile()

		echo strtoupper("o/p of readfile().") . "<br>";
 		$file = "data.txt";
		if(file_exists($file)){
 		readfile($file) or die("ERROR : cannot open file");
 		}else{
   		echo "file does not exists.";
     		}
		echo "<br>";

//code to read entire file using file _get_contents().
		
		echo "<br>";
		echo strtoupper("o/p of file_get_contents()". "<br>");
		$file = "data.txt";
		if(file_exists($file)){
		$content = file_get_contents($file) or die("ERROR  cannot open file");
		echo $content;
		}
		else {
		echo "file does not exists";
		}
		echo "<br>";
//code to read entire data using fle() function;
		
		echo "<br>";
		echo strtoupper("o/p of file() function"). "<br>";
		if(file_exists($file)){
		$arr = file($file) or die("ERROR : cannot open file");
		foreach ($arr as $line){
		echo $line;
		 }
		}else{
		echo "file does not exists";
		}  
 	?>
</body>
</html>
     