
<!DOCTYPE html>
<html>
 <head>
   <title>basic function</title>
 </head>
  <body>
	<?php

		function whatIsToday(){
			echo "today is".date('l', mktime());
		  }
 		whatIsToday();
  echo "<br>";
  echo strtoupper("output of parameter with function")."<br>";

         
                function getSum($num1, $num2){
                   $sum = $num1 + $num2;
		   echo "sum of two number $num1 and $num2 is : $sum";                  
		  }
	 
           getSum(10,20);
  echo "<br>";
   echo strtoupper("output of optional parameters or default value(eg size = 1.5) with function")."<br>";

               function customFont($font , $size =1.5){
           echo"<p style=\"font-family : $font; font-size : {$size}em\">Hello-World</p>";
                  }
 
       customFont("arial", 2);
        customFont("moderntimes", 3);
        customFont("courier");
  echo strtoupper("output of return a value to function")."<br>";
        function getTotal($num1, $num2){
                   $total = $num1 + $num2;
    		    return $total;
			}		
	echo getTotal(10,5);
     echo "<br>";
   echo strtoupper("output of return a value  by refrence to function")."<br>";
      		function selfMultiply(&$number){
	    		$number *= $number;
			return $number;
			}
         $myNum = 5;
		 echo $myNum."<br>";
        selfMultiply($myNum);
	       echo $myNum;

	?>
  </body>
</html>
