<?php 
$shop = array(
	"banana" => 25,
	"bread" => 36,
	"milk" => 78
);
$shop["cherry"] = 120; // добавление элементов в конец
$shop["cheese"] = 240;
$shop = array("apple" => 56, "vine" =>560) + $shop; 
$kol = 0;
$sum = 0;
foreach ($shop as $key => $value){
	echo $key . " - " . $value . "<br/>";
	$kol++;
	$sum += $value;
}
echo "Общее колличество товаров: " . $kol . "<br/>";
echo "Суммарная стоимость: " . $sum . "<br/>";
echo "<br/>Отсортированный массив: <br/>";
ksort($shop);
foreach ($shop as $key => $value){
	echo $key . " - " . $value . "<br/>";
}
?>