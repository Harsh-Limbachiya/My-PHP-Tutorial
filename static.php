<!DOCTYPE html>
<html>
<head>
 <title>static method</title>
</head>
<body>
 <?php 
 class HelloClass
  {
   
  public static $greeting = "Hello World!";
  public static function SayHello(){
    echo self :: $greeting;
    }
   }
echo HelloClass :: $greeting;
HelloClass :: SayHello();

 $hello =new HelloClass;
 echo $hello->SayHello();
?>
</body>
</html>