<?php
// Error handler function
function custom($errno, $errstr){
    echo "<b>Error:</b> [$errno] $errstr";
}
 
// Set error handler
set_error_handler("custom");
 
// Trigger error
echo($test);
echo "<br>";

//Trigger error



function calcDivision($dividend, $divisor){
    if($divisor == 0){
        trigger_error("The divisor cannot be zero", E_USER_WARNING);
        return false;
    } else{
        return($dividend / $divisor);
    }
}
 
// Calling the function
echo calcDivision(10, 0);

?>
