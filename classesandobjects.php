<!DOCTYPE html>
<html>
<head>
 <title>class and objects</title>
</head>
<body>
 <?php
	class Rectangle{
	 public $length = 0;
	 public $width = 0;
	 public function Perimeter(){
	 	return (2 *($this -> length + $this -> width));
		}
	public function Area(){
		return($this -> length * $this -> width);
		}
	}
?>
</body>
</html>

