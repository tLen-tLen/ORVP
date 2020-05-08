<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
   public static function getAllProduct()
   {
       $arrResult = array();
       $link = mysqli_connect('db', 'root', 'root', 'lrphp');
       if(mysqli_connect_errno()) die('Ошибка соединения:'.mysqli_connect_error());
       $sql = "SELECT * FROM products";
       $res = mysqli_query($link, $sql);
       $i = 0;
       if($res) {
            while($row = mysqli_fetch_assoc($res)) {
            $arrResult[$i]['ident'] = $row['id'];
            $arrResult[$i]['name'] = $row['name'];
            $arrResult[$i]['description'] = $row['description'];
            $arrResult[$i]['photo'] = $row['photo'];
            $arrResult[$i]['price'] = $row['price'];
            $i++;
            }
       }
       mysqli_close($link);
       return $arrResult;
   }
   
   public static function destroy($id)
   {
       $link = mysqli_connect('db', 'root', 'root', 'lrphp');
       if(mysqli_connect_errno()) die('Ошибка соединения:'.mysqli_connect_error());
       $sql = "DELETE FROM products WHERE id=" . $id;
       $res = mysqli_query($link, $sql);
       mysqli_close($link);
   }
   
   public static function create($name, $description, $price, $photo) {
       $intPrice = (int)$price;
       $link = mysqli_connect('db', 'root', 'root', 'lrphp');
       if(mysqli_connect_errno()) die('Ошибка соединения:'.mysqli_connect_error());
       $sql = "INSERT INTO products (`name`, `description`, `price`, `photo`) 
                VALUES ('" . $name ."', '" . $description . "', " . $intPrice. ", ' " . $photo . "')";
       $res = mysqli_query($link, $sql);
       mysqli_close($link);
       
   }
}
