<?php
$b1 = 235;
$b2 = 14;
$b3 = 34;
$bmin=min($b1,$b2,$b3);
$a1=abs($b1-$b2)*$bmin;
$a2=($b1-$b2)*sqrt(abs($b1+$b3));
$amax=max($a1,$a2);
if($amax == $a1) 
	$k=1; 
else 
	$k=2;
$c=$k*$amax;
echo "a1 = " . $a1 . "<br />";
echo "a2 = " . $a2 . "<br />";
echo "c = " . $c . "<br />";
?>
