<?php
$book_no = $_POST["book_no"];
$book_name = $_POST["book_name"];
$price = $_POST["price"];
$quantity = $_POST["quantity"];
$subTotal = $_POST["price"];
$total = $_POST["total_price"];

$conn = mysqli_connect('localhost', 'root', '', 'message');
// 檢查連接是否成功
if (!$conn) {
    die('無法連接到資料庫：' . mysqli_connect_error());
}
$sql = "INSERT INTO `order`(`book_no`, `book_name`, `quantity`, `subTotal`, `total_price`)
        VALUES('$book_no', '$book_name', '$quantity', '$subTotal', '$total')";
mysqli_query($conn,$sql);
mysqli_close($conn);

header("location:show_order.php");
exit();
?>