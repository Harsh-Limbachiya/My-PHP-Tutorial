<!DOCTYPE html>
<html lang="en">
<head>
    <title>HTML Download Links</title>
	<style>
 		 image-box{
			text-align : center;
		 	display :inline-block;
			margin : 0 15px;
         		   }
  	</style>
</head>
<body>
//download files
    <p><a href="download/test.zip">DOWNLOAD ZIP FILE</a></p>
    <p><a href="download/download.pdf">DOWNLOAD PDF FILE</a></p>
    <p><a href="download/download.txt">DOWNLOAD TEXT FILE</a></p>
    <p><a href="download/rusty.jpg">DOWNLOAD JPG FILE</a></p>
    <br>


//forcing to download using readfile() function
  <?php
   
    $images = array("charmendar.jpg", "rusty.jpg");
     foreach($images as $image){
        echo '<div class="image-box">';
	 echo '<img src="download/Images/' . $image . '" width="200" alt="' . pathinfo($image, PATHINFO_FILENAME). '">';
         echo '<p><a href="download/Images/' . urlencode($image) . '">download</a></p>';
        echo '</div>';
        }

//code to force any type of file
  if(isset($_REQUEST["file"])){
    // Get parameters
    $file = urldecode($_REQUEST["file"]); 
// Decode URL-encoded string
    $filepath = "Images/" . $file;
    
    // Process download
    if(file_exists($filepath)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="'.basename($filepath).'"');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($filepath));
        flush(); // Flush system output buffer
        readfile($filepath);
        exit;
    }
}
//set a cookie 
  
 setcookie("username", "harsh", time()+30*24*60*60);

//retrive the value
       if(isset($_COOKIE["username"])){
       
 	 echo "Hi " . $_COOKIE["username"];
	}else{
	 echo "Welcome Guest";
           }
		echo "<br>";
//start a session
  
 	session_start();
 
//add data to session

	$_SESSION["firstname"] = "Harsh";
	$_SESSION["lastname"]  = "Limbachiya";

//access the data in session using $_SESSION[] key.
  
   	echo "Hi " . $_SESSION["firstname"] . ' ' . $_SESSION["lastname"];

//destroy an session by unset and $_SESSION key
	
 	   
	if(isset($_SESSION["lastname"])){
    		unset($_SESSION["lastname"]);
	 }
//destroy a session completely
  
	session_destroy();
    ?>
</body>
</html>                            