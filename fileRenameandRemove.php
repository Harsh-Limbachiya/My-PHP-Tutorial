<!DOCTYPE html>
<html>
<head>
  <title>rename the existing file and remove the file</title>
</head>
 <body>


	 <?php
//rename a file using rename() function.
          echo strtoupper("o/p of rename() function") . "<br>";
 	  $file = "simple.txt";
 	  if(rename($file,"data.txt")){
    	    echo "file renamed successfully";
  	 } else{
             echo "unable to rename file";
            }
 		echo "<br>";
//remove a file using unlink() function.

         echo strtoupper("o/p of rename() function") . "<br>";
	$file ="data1.txt";
	if(file_exists($file)){
	  if(unlink($file)){
 	   echo "file removed successfully" ."<br>";
	     }else{
		echo "file not found" ."<br>";
		 }
	}else{
	  echo "file does not exists" ."<br>";
	   }
	 ?>
 </body>
</html>