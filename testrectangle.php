<?php
 require "classesandobjects.php";
   $obj = new Rectangle;
  

 echo $obj-> length . "<br>";
 echo $obj-> width. "<br>";

 $obj->length = 30;
 $obj->width = 20;

 echo $obj->length. "<br>";
 echo $obj->width. "<br>";
 
 echo $obj->Perimeter(). "<br>";
 echo $obj->Area(). "<br>";

 
// Create multiple objects from the Rectangle class
$obj1 = new Rectangle;
$obj2 = new Rectangle;
 
// Call the methods of both the objects
echo $obj1->Area(). "<br>"; // Output: 0
echo $obj2->Area(). "<br>"; // Output: 0
 
// Set $obj1 properties values
$obj1->length = 30;
$obj1->width = 20;
 
// Set $obj2 properties values
$obj2->length = 35;
$obj2->width = 50;
 
// Call the methods of both the objects again
echo $obj1->Area(). "<br>"; // Output: 600
echo $obj2->Area(). "<br>"; // Output: 1750

?>
 
 

 