<!DOCTYPE html>
<html>
<head>
<title>read the content from file</title>
<body>
<?php
 if(file_exists("data.txt")){
   $handle = fopen("data.txt","r")or die("ERROR file does not exists.");
    
   $Content = fread($handle,"66");
   
    fclose($handle);
 

  echo $Content;
   }else{
  echo "ERROR file does not exists";
   }
 ?>
</body>
</html>
