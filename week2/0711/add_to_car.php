<?php
//取得表單資料
$book_no = $_GET["book_no"];
$book_name = $_GET["book_name"];
$price = $_GET["price"];
$quantity = $_POST["quantity"];
if(empty($quantity)) $quantity=1;

//若購物車沒有任何項目，則直接加入產品資料
if(empty($_COOKIE["book_no_list"])){
    setcookie("book_no_list",$book_no);
    setcookie("book_name_list",$book_name);
    setcookie("price_list",$price);
    setcookie("quantity_list",$quantity);
}else{
    //取得購物車資訊
    $book_no_array = explode(", ",$_COOKIE["book_no_list"]);
    $book_name_array = explode(", ",$_COOKIE["book_name_list"]);
    $price_array = explode(", ",$_COOKIE["price_list"]);
    $quantity_array = explode(", ",$_COOKIE["quantity_list"]);

    //判斷選擇的物品是否在購物車
    if(in_array($book_no, $book_no_array)){
        //有則變更數量即可
        $key = array_search($book_no, $book_no_array);
        $quantity_array[$key] += $quantity;
    }else{
        //無應加入物品資料
        $book_no_array[] = $book_no;
        $book_name_array[] = $book_name;
        $price_array[] = $price;
        $quantity_array[] = $quantity;
    }
    //儲存購物車資訊
    setcookie("book_no_list",implode(", ",$book_no_array));
    setcookie("book_name_list",implode(", ",$book_name_array));
    setcookie("price_list",implode(", ",$price_array));
    setcookie("quantity_list",implode(", ",$quantity_array));
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--<p align="center"><img src="" width="200"></p>-->
    <p align="center">您所選的產品及數量已成功加入購物車!</p>
    <p align="center"><a href="catalog.php">繼續購物</a></p>
</body>
</html>