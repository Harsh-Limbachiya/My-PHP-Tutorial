<!DOCTYPE html>
 <html>
   <head>
     <title>PHP file System</title>
   </head>
   <body>
 	<?php
//checking if file ids present usinf file_exists().
   		$file= "data.txt";
   		if(file_exists($file)){
		echo "The file $file exists";
   		$handle = fopen($file , "r");
    		}else{
	   		echo "ERROR file does not exists";
	     	     }
		echo "<br>";
		
// open file in php using fopen().

		  $handle = fopen("data.txt", "r") or die("ERROR: cannot open file.");
		 if($handle){
		 echo "file opened successfully.";
//close fle in php by using fclose().
      		fclose($handle);
		   }

	?>
    </body>
 </html>