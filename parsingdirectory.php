<!DOCTYPE html>
<html>
<head>
<title>parsing data</title>
</head>
<body>
  <?php
//code to copy a file from another file
	echo strtoupper("o/p of copy() function ") . "<br>";
    $file = "data.txt";
    $newfile = "example.txt";
    if(file_exists($file)){
	if(copy($file, $newfile)){
	  echo "file copied successfully." . "<br>";
	  }else{
	    echo "file not copied" . "<br>";
 	  	}
     }else{
      echo "file does not exists" . "<br>";
  }
  echo "<br>";



//code to list all file in directory
         
 
	 echo strtoupper("o/p of scandir() function") . "<br>";
 
// Define a function to output files in a directory
	function outputFiles($path){
    // Check directory exists or not
    if(file_exists($path) && is_dir($path)){
        // Scan the files in this directory
        $result = scandir($path);
        
        // Filter out the current (.) and parent (..) directories
        $files = array_diff($result, array('.', '..'));
        
        if(count($files) > 0){
            // Loop through retuned array
            foreach($files as $file){
                if(is_file("$path/$file")){
                    	// Display filename
                    	echo $file . "<br>";
                	} else if(is_dir("$path/$file")){
                   	 // Recursively call the function if directories found
                   	outputFiles("$path/$file");
                	}
            	}
        	} else{
            		echo "ERROR: No files found in the directory.";
        	}
    		} else {
        	echo "ERROR: The directory does not exist.";
    		}
	}
		  
	  outputFiles("mydir");

			  echo "<br>";


//listing all file of certain type using glob()
    echo "<br>";
  	echo strtoupper("o/p of glob() function") . "<br>";
 
 		foreach(glob("mydir/*.txt") as $file){
    		echo basename($file) . " (size: " . filesize($file) . " bytes)" . "<br>";
		   }
		  echo "<br>";


//glob() function to list all file and subdirectory

	echo strtoupper("o/p of glob() function") . "<br>";
	function subFiles($path){

	 if(file_exists($path) && is_dir($path)){
  		$files = glob($path . "/*.txt");
  		if(count($files) > 0){
    		 foreach($files as $file){
     		   if(is_file("$file")){
     			 echo basename($file) . "<br>";
        	 }else if(is_dir("$file")){
          		subFiles("$file");
           		}
     		}	
   	   }else{
   	 echo "no files in directory";
  	}
 	}else{
 	echo "directory does not exists";
      }
    }
       subFiles("mydir");
?>

 
</body>
</html>
	