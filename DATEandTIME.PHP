<!DOCTYPE html>
<html>
 <head>
  <title>date and time function of php</title>
 </head>
 <body>
	<?php 
 	  $today = date("d.m.y");
// PHP date() function

	   echo strtoupper("o/p of date() function" . "<br>");
  	   echo $today;
	   echo "<br>";  

// PHP date() related formatting
		
		  echo "<br>";  
	    echo strtoupper("o/p of date() related formatting" . "<br>");
	     echo date("d-m-y") .  "<br>";
	     echo date("D-M-Y") .  "<br>";
	     echo date("d/m/y") .  "<br>";
	     echo date("d.M.Y") .  "<br>";
		  echo "<br>";  

// PHP time() related formatting

	   	 echo strtoupper("o/p of time() related formatting" . "<br>");
		 echo date("h:i:s") .  "<br>";
		 echo date("H:i:s") .  "<br>";
		 echo date("F d, Y h:i:s A") .  "<br>";
		 echo date("h:i a") .  "<br>";
		  echo "<br>";  

// PHP time() function

		echo strtoupper("o/p of PHP time() function" . "<br>");
		$timestamp =time();
		echo $timestamp;
		  echo "<br>";  

//convert to human readble form
		
			  echo "<br>";  
		echo strtoupper("o/p of PHP time() function converted to  human readable form" . "<br>");
                echo(date( "F d, Y h:i:s", $timestamp));
		  echo "<br>";  

//PHP mktime() function 

		echo strtoupper("o/p of PHP mktime() function" . "<br>");
		echo mktime(13,50,45,11,20,2019);
		echo "<br>";
//PHP mktime() used to find weekday

		echo "<br>";
		echo strtoupper("o/p of mktime() used to find weekday"). "<br>";
		echo date('l', mktime(13,50,45,11,20,2019));
		echo "<br>";	

//PHP mktime() used to find future date

		echo "<br>";
		echo strtoupper("o/p of mktime() used to find future date"). "<br>";
		$futureDate = mktime(14,12,20,date("d"),date("m"),date("Y"));
		echo date("d/m/Y" , $futureDate);
		echo "<br>";
		
			
 	?>
 </body>
 </html>
   