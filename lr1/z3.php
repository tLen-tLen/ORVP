<?php
/*
	Дано слово длиной 5 символов. Определить есть ли в нем буква М или буква Н
*/
$str = "Слово М";
$resultM = stristr($str, 'М');
$resultN = stristr($str, 'N');
if($resultM)
	echo "В строке \"". $str . "\" есть буква M <br/>";
if($resultN)
	echo "В строке \"". $str . "\" есть буква Н <br/>";
if(!$resultN && !$resultM)
	echo "В строке \"". $str . "\" нет ни М, ни Н <br/>";
?>