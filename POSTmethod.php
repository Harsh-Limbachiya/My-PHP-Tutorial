<!DOCTTPE html>
<html>
 <head>
  <title>Example of POST method</title>
 </head>
 <body>
  	<?php
	 if(isset($_POST["name"])){
	   echo "<p>Hi, " . $_POST["name"] . "</p>";
            }
	?>
    <form method = "post" action = "<?php echo $_SERVER["PHP_SELF"] ?>"
      <label for = "firstname">Name : </label>
      <input type = "text" name = "name" id = "firstname">
      <input type = "submit">
    </form>
  </body>
</html>

