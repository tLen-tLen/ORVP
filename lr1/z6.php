<?php
/*
	Даны массивы G1-7, H1-10. Заменить отрицательные Gi на Hmax.
*/
$G = array(342, 3, -557, 354, 23, 12, -85);
$H = array(45, 32, 12, -8, 45, 23, 12, 4, 5, 64);
echo "Исходный массив: <br />";
foreach($G as $value)
{
  echo $value."  ";
}
echo "<br/>";
$Hmax = max($H);
foreach ($G as  $key => $value){
	if($value<0)
		$G[$key] = $Hmax;
}
echo "Итоговый массив: <br />";
foreach($G as $value)
{
  echo $value."  ";
}
?>