<?php
$x = 5;
$y = 8;
$a=($x-$y)/sqrt(abs($x-$y));
$k = (pow($a,2)-pow($x,2))/($x*$y);
echo "a = " . $a . "<br />";
echo "k = " . $k;
?>
