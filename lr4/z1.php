<?php
$link = mysqli_connect('localhost', 'root', 'root', 'lr4ORVP');
if(mysqli_connect_errno()) die('Ошибка соединения:'.mysqli_connect_error());
echo '<table border="2">';
    echo '<thead>';
        echo '<tr>';
            echo '<th>id</th>';
            echo '<th>Название</th>';
            echo '<th>Телефон</th>';
            echo '<th>Колличество сотрудников</th>';
        echo '</tr>';
    echo '</thead>';
echo '<tbody>';
$sql = "SELECT * FROM hospital";
$res = mysqli_query($link, $sql);
if($res) {
    while($row = mysqli_fetch_assoc($res)) {
        echo '<tr>';
            echo '<td>' . $row['ID'] . '</td>';
            echo '<td>' . $row['NAME'] . '</td>';
            echo '<td>' . $row['PHONE'] . '</td>';
            echo '<td>' . $row['Number_of_employees'] . '</td>';
        echo '</tr>';
    }
    echo '</tbody>';
    echo '</table>';
    mysqli_free_result($res); //очищаем занятую память 
}
mysqli_close($link);
?>