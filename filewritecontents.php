<!DOCTYPE>
<html>
<head>
  <title>write into file using fwrite() function </title>
</head>
<body>
<?php
//write the content of file usinfg fwrite() function

	 echo strtoupper("o/p of fwrite() function ") . "<br>";
 	$file = "data.txt";
 	$data = "I made the changes very well";
 	$handle = fopen($file , "w") or die("ERROR : CANNOT OPEN FILE");
 	fwrite($handle , $data) or die("cannot write into file");
 	fclose($handle);
 	echo "data written successfully";
 	echo "<br>";

//write the content of file using file_put_cpontents() function

	echo "<br>";
 	echo strtoupper("o/p of file_put_contents()") . "<br>";
 	$file = "data.txt";
 	$data = "My name is Harsh and I am making some changes.";
 	if(file_exists($file)){
		echo "file is present" . "<br>";
	  		if(file_put_contents($file,$data)){
	     		echo "written successfully" . "<br>";
	      		 }else{
	       		echo "cannot write into file". "<br>";
	        	 }
	}else{
	 echo "file is not present" ."<br>";
	    }
        echo  "<br>";
//write the content of file using file_put_cpontents() function and and FILE_APPEND flag;
echo strtoupper("o/p of file_put_contents()") . "<br>";
 	$file = "data.txt";
 	$data = "So i can understand PHP Language perfectly.";
 	if(file_exists($file)){
		echo "file is present" ."<br>";
	  		if(file_put_contents($file,$data,FILE_APPEND)){
	     		echo "written successfully" . "<br>";
	      		 }else{
	       		echo "cannot write into file". "<br>";
	        	 }
	}else{
	 echo "file is not present" . "<br>";
	   echo  "<br>";
	    }
        echo  "<br>";


	  
 ?>
</body>
</html>