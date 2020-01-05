<!DOCTYPE html>
<html lang="en">
<head>
<title>json Parsing</title>
</head>
<body>
   <?php
//encoding Associative-Array into Json
        echo strtoupper("o/p of encoding Associative-Array into Json") 	."<br>";
	echo "<br>" ; 
  	$marks = array("Peter"=>65,"Harry"=>80,"John"=>78,"Clark"=>90);
   
   	echo json_encode($marks);
	echo "<br>" ; 
////encoding Indexed-Array into Json 
	echo "<br>" ;
	echo strtoupper("encoding Indexed-Array into Json")."<br>";
	echo "<br>" ; 
        $colors = array("Red","Green","Blue","Yellow");
        echo json_encode($colors);
	echo "<br>" ;
//to Get o/p in Object using JSON_FORCE_OBJECT
	echo "<br>";
	echo strtoupper("encoding Indexed-Array into Json to get o/p in 	Object using JSON_FORCE_OBJECT")."<br>";
	echo "<br>" ; 
        $colors = array("Red","Green","Blue","Yellow");
        echo json_encode($colors, JSON_FORCE_OBJECT);
	echo "<br>" ;

//decode Json Data into Object
	echo "<br>";
	echo strtoupper("decode Json data into Object") ."<br>";
	$json = '{"Peter":65,"harry":80,"John":78,"Clark":90}';
	var_dump(json_decode($json));
	echo "<br>";

//decode Json into Associative array using assoc() function True
	echo "<br>";
	echo strtoupper("decode Json into Associative array using assoc() 		function True") ."<br>";
	$json = '{"Peter":65,"harry":80,"John":78,"Clark":90}';
	var_dump(json_decode($json, true));
	echo "<br>";

//decode Json data and access individual data
	
 	echo "<br>";
	echo strtoupper("decode Json data and access individual data") 	."<br>";
	$json = '{"Peter":65,"harry":80,"John":78,"Clark":90}';
	$arr = json_decode($json, true);
	echo $arr["Peter"] . "<br>";
	echo $arr["harry"] . "<br>";
	echo $arr["John"] . "<br>";
	echo $arr["Clark"] . "<br>";
	
	echo "<hr>"; 
	
	$obj = json_decode($json);
	echo $obj->Peter . "<br>";
	echo $obj->harry . "<br>";
	echo $obj->John . "<br>";
	echo $obj->Clark . "<br>";

//loop through the decoding data using foreach() loop
	 	
	echo "<br>";
	echo strtoupper("loop through the decoding data using foreach() 	loop"). "<br>";
	$json = '{"Peter":65,"harry":80,"John":78,"Clark":90}';
	$array = json_decode($json, true);
	foreach($array as $key=>$value){
	echo $key . " => " . $value . "<br>";
	}
	echo "<hr>";
	$obj = json_decode($json);
	foreach($obj as $key=>$value){
	echo  $key . " => " . $value . "<br>";
	}

   ?>
</body>
</html>
