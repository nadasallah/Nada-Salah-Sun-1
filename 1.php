<?php

/* 	1 - you have an array of numbers. write a script to find minimum and maximum numbers in the array. */



$numbers=[1,2,3,4,5];
$min = $numbers[0];  
$max = $numbers[0];  
foreach ($numbers as $value) {  
    if ($value < $min) {  
        $min = $value;  
    }  
    if ($value > $max) {  
        $max = $value;  
    }  
}
echo $min;
echo "<br>";
echo $max;
echo "<hr>";
echo min($numbers) . "<br>"; 
echo max($numbers) . "<hr>"; 


echo "<br>";
echo "<br>";
//or 
$array = array(1, 2, 3, 4, 5); 
echo(max($array)); 
echo("<br>"); 
echo(min($array)); 





?>