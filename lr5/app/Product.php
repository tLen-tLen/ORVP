<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class Product extends Model
{
   public static function getAllProduct()
   {
       $arrResult = array();
       if (Cache::has('select')) {
           $arrResult = Cache::get('select');
           $arrResult['CACHE'] = "Это взялось из кэша";
       } else {  
           $link = mysqli_connect('db', 'root', 'root', 'lrphp');
           if(mysqli_connect_errno()) die('Ошибка соединения:'.mysqli_connect_error());
           $sql = "SELECT * FROM products";
           $res = mysqli_query($link, $sql);
           $i = 0;
           if($res) {
                while($row = mysqli_fetch_assoc($res)) {
                $arrResult["PRODUCTS"][$i]['ident'] = $row['id'];
                $arrResult["PRODUCTS"][$i]['name'] = $row['name'];
                $arrResult["PRODUCTS"][$i]['description'] = $row['description'];
                $arrResult["PRODUCTS"][$i]['photo'] = $row['photo'];
                $arrResult["PRODUCTS"][$i]['price'] = $row['price'];
                $i++;
                }
           }
           mysqli_close($link);
           Cache::put('select', $arrResult, 150);
           $arrResult['CACHE'] = "Обновили кэш";
       }
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
