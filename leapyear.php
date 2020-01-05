<!DOCTYPE html>
	<html>
		<head>
		<title>leap year </title>
		</head>
		<body>
			<?php
			$year = 2020;
			if(($year % 400 == 0) || (($year % 100 != 0) && ($year % 4 == 0))){
 			   echo '2020 is a leap year.';
			   }
			   else{
			   echo '2020 is not a leap year.';
			}
                        ?>
		</body>
	</html>
