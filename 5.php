


<?php
/*5-write a script that removes any duplicates from an array. */

$input = array(4, "4", "3", 4, 3, "3");
$result = array_unique($input);
var_dump($result);

echo "<br>";
//anther solution 
$a=array("a"=>"red","b"=>"green","c"=>"red");
print_r(array_unique($a));

?>


