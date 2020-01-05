<!DOCTYPE hhtml>
<html>
<head>
  <title>Magic Constant</title>
</head>
<body>
   namespace MyNamespace;
  <?php
     
// code for __LINE__ constant
 
  echo strtoupper("o/p of __LINE__ constant"). "<br>";
  echo "Line number : " . __LINE__ ."<br>";
  echo "Line number : " . __LINE__ ."<br>";
  echo "<br>";

// code for __FILE__ constant
 
   echo strtoupper("o/p of __FILE__ constant"). "<br>";
   echo "Name of the file is : " .__FILE__. "<br>";
     echo "<br>";

// code for __DIR__ constant

    echo strtoupper("o/p of __DIR__ constant"). "<br>";
    echo "Name of directory is : " .__DIR__. "<br>";
     echo "<br>";
// code for __FUNCTION__ constant
  
  echo strtoupper("o/p of __FUNCTION__ constant"). "<br>";
  function MyFunction(){
   echo "Name of the function is :" .__FUNCTION__. "<br>";
    }
   MyFunction();
  echo "<br>";

//code for __CLASS__ constant
  
    echo strtoupper("o/p of __CLASS__ constant"). "<br>";
    class MyClass
    {
      public function getClassName(){
        echo "Name of the Class is : " . __CLASS__ ."<br>";
           }
        }
   $obj = new MyClass;
   $obj -> getClassName();
    echo "<br>";

//code for __METHOD__ constant
  
    echo strtoupper("o/p of __CLASS__ constant"). "<br>";
    class Sample
     {
      public function getMethodName(){
	echo "Method used id: " . __METHOD__ . "<br>";
   	  }
       }
      $obj1 = new Sample();
      $obj1 ->getMethodName();   
       echo "<br>";

//code for __NAMESPACING__ constant

        
	echo strtoupper("o/p of __NAMESPACE__ constant"). "<br>";    
      class MyClass2
      {
        public function getNamespace(){
          return __NAMESPACE__;
            }
	}
    $obj2 = new MyClass2;
    $obj2 ->getNamespace();
    
   
  ?>
