<!DOCTYPE html>
<html>
 <head>
    <title>Basic Objects </title>
 </head>
 <body>
  <?php
   class greeting{
     public $str="hello world!";
     function show_greeting(){
       return $this->str;
         }
       }
   $message = new greeting;
    var_dump($message); 
   ?>
 </body>
</html>

       