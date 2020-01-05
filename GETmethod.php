<!DOCTYPE html>
<html>
 <head>
   <title>Example of php get method</title>
 </head>
  <body>
     <?php
       if(isset($_GET["name"])){
  	 echo "<p>Hi, " . $_GET["name"] . "</p>";
	   }
	?>
  <form method = "GET" action ="<?php echo $_SERVER["PHP_SELF"]; ?>" >
   <label for ="firstName">Name :</label>
   <input type = "text" name = "name" id = "firstName" >
   <input type = "submit">
  </form>
 </body>
</html>
	  