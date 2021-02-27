<?php
$x = 3 ; $y=$x++;
$y+= ++$x;

/*
$x=3;
$y=x++;
    >>$y=3; $x=4; 
$y+=++$x; 
   >> --$y=$y+(++$x); 
   ---------- $y=3+(5)
  ----------------  $x=5; $y=8;
*/
 
if ($y == 7) {
    $x++;
    echo $x ."<br>";
} else if ($y == 8){   // $y==8 >>>> decrament 1 from $x 
    $x--; 
    echo $x ."<hr>"; //  $x = ((4))  
} else if ($y == 9) {
   $x+=2;
   echo $x ."<br>";
} else { 
   $x= 0;
   echo $x ."<br>";
}
//  result  $y=8; $x=4;

?>