<!DOCTYPE html>
<html>
 <head>
  <title>math operator in php</title>
 </head>
 <body>
 <?php
echo "o/p of diff type of math operator"."<br>";
echo 7 + 3 . "<br>";
echo 7 - 3 . "<br>";	
echo 7 * 2 . "<br>";
echo 7 / 2 . "<br>";
echo 7 % 2 . "<br>";
echo "<br>";

echo "o/p of precedence of operator"."<br>";
echo 5 + 4 * 10 . "<br>";
echo (5 + 4) *10 . "<br>";
echo 5 + 4 * 10 / 2 . "<br>";
echo 8 * 10 / 4 - 2 . "<br>";
echo 8 * 10 / (4 - 2) . "<br>";
echo 8 + 10 / 4 - 2 . "<br>";
echo (8 + 10) / (4 - 2) . "<br>";
echo "<br>";

echo "o/p of absolute value of number"."<br>";
echo abs(5) . "<br>";
echo abs(-5) . "<br>";
echo abs(4.2) . "<br>";
echo abs(-4.2) . "<br>";
echo "<br>";

echo "o/p of round a fractional number"."<br>";

//ROUND FRACTION UP
echo ceil(4.2) . "<br>";
echo ceil(9.99) . "<br>";
echo ceil(-5.18) . "<br>";

//ROUND FRACTION DOWN
echo floor(4.2) . "<br>";
echo floor(9.99) . "<br>";
echo floor(-5.18) . "<br>";
echo "<br>";

echo "o/p of SQUAREROOT OF NUMBER"."<br>";

echo sqrt(9) . "<br>";
echo sqrt(25) . "<br>";
echo sqrt(10) . "<br>";
echo sqrt(-16) . "<br>";
echo "<br>";

echo "o/p of GENERATE A RANDOM NUMBER"."<br>";
echo rand() . "<br>";
echo rand() . "<br>"; 
 
 echo rand(1,10) ."<br>";
echo rand(1,10) ."<br>";
echo "<br>";

echo "o/p of DECIMAL TO BINARY AND VICE VERSA"."<br>";
echo decbin(2) . "<br>";
echo decbin(12) . "<br>";
echo decbin(100) . "<br>";

echo bindec(10) . "<br>";
echo bindec(100) . "<br>";
echo bindec(1100100) . "<br>";
echo "<br>";

echo "o/p of decimal to hexadecimal and viceversa"."<br>";

echo dechex(225) . "<br>";
echo dechex(196) . "<br>";
echo dechex(0) . "<br>";

echo hexdec('ff') . "<br>";
echo hexdec('c4') . "<br>";
echo hexdec('0') . "<br>";
echo "<br>";

echo "o/p of DECIMAL TO OCTAL AND VICE VERSA"."<br>";

echo decoct(12) . "<br>";
echo decoct(256) . "<br>";
echo decoct(77) . "<br>";

echo octdec('14') . "<br>";
echo octdec('400') . "<br>";
echo octdec('115') . "<br>";
echo "<br>";

echo "o/p of BASE CONVERSION AND VICE VERSA"."<br>";

echo base_convert('12', 10, 2) . "<br>";
echo base_convert('1100', 2, 10) . "<br>";
echo base_convert('10889592', 10, 16) . "<br>";
echo base_convert('a62978', 16, 10) . "<br>";
echo base_convert('82', 10, 8) . "<br>";
 ?>
 </body>
</html>
 