<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>catalog</title>
</head>
<body bgcolor="lightyellow" align="center">
    <?php
    $conn = mysqli_connect('localhost', 'root', '', 'message');
    // 檢查連接是否成功
    if (!$conn) {
        die('無法連接到資料庫：' . mysqli_connect_error());
    }
    $sql = "SELECT * FROM book";
    $result = mysqli_query($conn,$sql);
    $total_records = mysqli_num_rows($result);

    echo "<table width='800px'>";
    echo "<tr align='center' bgcolor='#ACACFF'>
        <td>書號</td>
        <td>書名</td>
        <td>定價</td>
        <td>輸入數量</td>
        <td>進行訂購</td>
        </tr>";
    for($i = 0; $i < $total_records; $i++){
        $row = mysqli_fetch_assoc($result);
        echo "<form method='post' action='add_to_car.php?book_no=".
        $row["book_no"]."&book_name=".urlencode($row["book_name"]).
        "&price=".$row["price"]."'>";
        echo "<tr align='center' bgcolor='#EDEAB1'>";
        echo "<td>".$row["book_no"]."</td>";
        echo "<td>".$row["book_name"]."</td>";
        echo "<td>$".$row["price"]."</td>";
        echo "<td><input type='number' name='quantity' size='5' value='1'></td>";
        echo "<td><input type='submit' value='放入購物車'></td>";
        echo "</tr>";  
        echo "</form>";
    }
    echo "</table>";
    mysqli_free_result($result);
    mysqli_close($conn);
    ?>
</body>
</html>