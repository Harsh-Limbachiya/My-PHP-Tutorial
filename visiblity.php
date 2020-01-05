<!DOCTYPE html>
<html>
<head>
 <title>Visibility of properties and method</title>
</head>
<body>
 <?php
 class Automobile
   {
   public $fuel;
   protected $engine;
   private $transmission;
   }

  class Car extends Automobile
   {
   public function __construct(){
    echo 'The class "' . __CLASS__ . '" is initiated. "<br>"';
      }
    }
  $automobile = new Automobile;
  
  $automobile->fuel = "Petrol";
  $automobile->engine = "200cc";
  $automobile->transmission = "Manual";
  
   $car =new Car;

  $car->fuel = "Diesel";
  $car ->engine = "2200cc";
  $car ->transmission = "Automatic";
 ?>
</body>
</html>