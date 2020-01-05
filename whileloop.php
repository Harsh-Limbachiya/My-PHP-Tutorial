<!DOCTYPE html>
<html>
 <head>
   <title>PHP loop</title>
  </head>
  <body>
	<?php
//code for WHILE loop
     echo strtoupper('output of while loop')."<br>";    	
                $i= 1;
 		while( $i <= 3){
   			$i++;
   			echo "the number is" .$i."<br>";
  			 }
//code for DO ...WHILE loop
    echo strtoupper('output for do ...while loop')."<br>";
   		
    		 $j= 1;
		 do{
			$j++;
			echo "the number is ".$j."<br>";
			}
			while($j <= 3);
//code  for FOR loop
   echo strtoupper("output of FOR loop")."<br>";

		for($k= 1;$k <= 3;$k++){
		echo "the number is".$k. "<br>";
		}
//code  for FOReach loop
   echo strtoupper("output of foreach loop"). "<br>";
  		  $colors= array("red","green","blue");
   			 foreach($colors as $value){
 				 echo $value ."<br>"; 
			    }
//code for FOReach loop it's extension of first
   echo strtoupper('output of foreach loop by using key and value /associative array')."<br>";
    		
    		 $Superhero = array(
        		"name" => "superman",
			"e-mail" => "@gmail.com",
			"age" => 25
		   );

		foreach($Superhero as $key => $value){
     			echo $key .":". $value."<br>";
		   } 
	?>
  </body>
</html>