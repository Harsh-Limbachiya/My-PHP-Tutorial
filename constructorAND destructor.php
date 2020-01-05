<!DOCTYPE html>
<html>
<head>
<title>Contructor and Destructor</title>
</head>
<body>
<?php
//basic __construct() and __destruct() function
	
	echo "basic __construct() and __destruct() function" . "<br>";
	
	class MyClass{
	
 	public function __construct(){
	 echo 'The class "' . __CLASS__ . '" was initiated . "<br>"';
		}
 	public function __destruct(){
	 echo 'The class "' . __CLASS__ . '" was destroyed . "<br>"';
		}
	}

	$obj =new MyClass;
	echo 'This is the end of the file . "<br>" ';
	echo "<br>";

//destroying the object using unset() function

	echo "<br>";
	echo "destroying the object using unset() function". "<br>";
	class Class1
	{
	 public function __construct(){
	 echo 'The class "'. __CLASS__ .'" was initiated . "<br>"';
		}
	 public function __destruct(){
	 echo 'The class "'. __CLASS__ .'" was destroyed . "<br>"';
		}
	}
	 $obj =new Class1;
 	unset($obj);
 	echo "this is the end of the file. ";
?>

</body>
</html>	