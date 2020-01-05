<!DOCTYPE html>
<html>
<head>
<title>Inheritance</title>
</head>
<body>
	<?php
	 require "classesandobjects.php";
	 class Square extends Rectangle{
		public function isSquare(){
		 if($obj->length == $obj->width){
		 return True;
		 }else{
		  return False;
		  }
 		}
	    }

 	$obj =new Square;
	
	$obj->length=20;
 	$obj->width=20;
	
	if($obj->isSquare()){
	 echo "The area of Square is:" . "<br>";
	  }else{
	 echo "The area of Rectangle is:" . "<br>";
	 }
	
 	echo $obj->Area();
	?>
</body>
</html>

		 
	