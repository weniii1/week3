<?php
if(empty($_COOKIE["book_no_list"])){
    echo "<script type='text/javascript'>";
    echo "alert('您尚未選購任何產品');";
    echo "history.back();";
    echo "</script>";
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
    <h3>注意事項</h3>
    <ol type="1">
        <li>
            訂購方法一：請填妥信用卡傳用訂購單後裝訂，免貼郵票，直接投郵即可，亦可放大傳真至02-23695588。
        </li>
        <li>
            訂購方法二：請利用郵局劃撥單，填妥姓名、戶名、書名、數量、電話，直接至郵局劃撥付款。帳號：12345678戶名：快樂書城
        </li>
        <li>
            寄書與補書：您將於付款之後的3-5天收到書籍，若沒有收到，請來電洽詢 025-135724601。
        </li>
    </ol>
    <hr>
    <table border="1" bgcolor="white" rules="cols" align="center" cellpadding="5">
        <tr height="25">
            <td colspan="4" align="center" bgcolor="#CCCC00">個人資料</td>
        </tr>
        <tr height="25">
            <td colspan="4">
                姓名：<u><?php echo $_COOKIE["name"]?><?php for($i = 0; $i <= 100-2*strlen($_COOKIE["name"]); $i++) echo "&nbsp"; ?></u>
            </td>
        </tr>
        <tr height="25">
            <td colspan="4">
                支付總金額：<u><?php for($i = 0; $i <= 89; $i++) echo "&nbsp;"; ?></u>
            </td>
        </tr>
        <tr height="25">
            <td colspan="4">
                開立發票：口 二聯式&nbsp;&nbsp;&nbsp;&nbsp;口 三聯式
            </td>
        </tr>
        <tr height="25">
            <td colspan="4">
                發票地址：<u><?php for($i = 0; $i <= 93; $i++) echo "&nbsp;"; ?></u>
            </td>
        </tr>
        <tr height="25">
            <td colspan="4">
                統一編號：<u><?php for($i = 0; $i <= 93; $i++) echo "&nbsp;"; ?></u>
            </td>
        </tr>
        <tr height="25">
            <td colspan="5" align="center" bgcolor="#CCCC00">訂單細目</td>
        </tr>
        <tr height="25" align="center" bgcolor="#FFFF99">
            <td>編號</td>
            <td>書名</td>
            <td>定價</td>
            <td>小計</td>
        </tr>
        <?php
        $book_no_array = explode(", ",$_COOKIE["book_no_list"]);
        $book_name_array = explode(", ",$_COOKIE["book_name_list"]);
        $price_array = explode(", ",$_COOKIE["price_list"]);
        $quantity_array = explode(", ",$_COOKIE["quantity_list"]);
        $book_no=$_COOKIE["book_no_list"];
        $book_name=$_COOKIE["book_name_list"];
        $quantity=$_COOKIE["quantity_list"];
        $total=0;

        //顯示購物車內容
        $tatol = 0;
        for($i = 0; $i < count($book_name_array); $i++){
            //小計
            $sub_total = $price_array[$i]*$quantity_array[$i];
            //總計
            $total = $total+$sub_total;
            $subTotal_array[$i]=$sub_total;

            //顯示個欄位資訊
            echo "<form method='post' action='change.php?book_no=".$book_no_array[$i]."'>";
            echo "<tr align='center' bgcolor='#EDEAB1'>";
            echo "<td>".$book_no_array[$i]."</td>";
            echo "<td>".$book_name_array[$i]."</td>";
            echo "<td>$".$price_array[$i]."</td>";
            echo "<td>$".$sub_total."</td>";
            echo "</tr></form>";
        }
        $subTotal=implode(", ",$subTotal_array);
        echo "<tr align='center' bgcolor='#CCCC00'>";
        echo "<td colspan='4'>總金額 $ ".$total."</td>";
        echo "</tr>";
        echo "</table>";
        echo "<form method='post' action='order.php'>";
        echo "<input type='hidden' name='book_no' value='$book_no'>";
        echo "<input type='hidden' name='book_name' value='$book_name'>";
        echo "<input type='hidden' name='quantity' value='$quantity'>";
        echo "<input type='hidden' name='price' value='$subTotal'>";
        echo "<input type='hidden' name='total_price' value='$total'>";
        echo "<input type='submit' value='送出訂單'>";
        echo "</form>";
        ?>
    </table>
</body>
</html>