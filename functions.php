<?php 

// **** Function with no paremeters */

function displayWelcomeMessage($dogName, $age)
{
echo "<h3>Welcome to the function demestration</h3>" . 
$dogName . "age: " . $age;

 $nextVisit = "March";
//  if no return it won't override 
 return $nextVisit;
}  

?>