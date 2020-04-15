<?php
$a = array(1, 23, 434, 34, 42, -9, 45, 31, 3, 9, -9, 234);
$b = array(45, 32, 12, -8, 45, 23, 12, 4, 5, 64);
$bsum = array_sum($a);
$s1=$a[0]/$bsum;
$sumDlaS2=0;
foreach ($a as $key => $value){
	$sumDlaS2 += ($value-$b[4]);
}
$s2=$b[0]/$sumDlaS2;
echo "s1 = " . $s1 . "<br />";
echo "s2 = " . $s2 . "<br />";
?>