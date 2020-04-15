<?php
/*
    1. Выполнить задания из теоретической части.
    2. Определить существует ли файл?
    3. Определить доступен ли файл для чтения?
    4. Определить доступен ли фал для записи?
    5. Определить размер файла в байтах?
    6. Вывести данную информацию на страницу.
    7. Прочитать из файла информацию. Вывести на экран
    8. Записать в файл информацию.
    9. Удалить одну строку из файла (на выбор преподавателя).
*/
$fileName = "file.txt";

if (file_exists($fileName)){
    echo "Файл $fileName существует";
    echo "<br/>";
    if (is_readable($fileName)) 
        echo "Файл доступен для чтения";
    else
        echo "Файл недоступен для чтения";
    echo "<br/>";
    if (is_writable($fileName)) 
        echo "Файл доступен для записи";
    else
        echo "Файл недоступен для записи";
    echo "<br/>";
    $size = filesize($fileName);
    echo "Размер файла: " . $size . " байт";
    $handle = fopen($fileName,'a+');
    $fileContent = file_get_contents($fileName); // читает содержимое файла в строку
    echo"<br/> Содержимое файла: <br/>" . $fileContent;
    fwrite($handle, "Новая строка. Новая строка."); // записывает содержимое string в файловый поток handle
    $idStr = 0; 
    $fileContentArr = file($fileName); // читает содержимое файла в массив
    unset($fileContentArr[$idStr]); // удалить строку из массива 
    file_put_contents($fileName,$fileContentArr); // записать в файл остаток
    fclose($handle);
}    
else
    echo "Файл $fileName не существует";
?>