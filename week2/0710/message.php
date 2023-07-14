<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>留言板</title>

</head>
<body>
    <?php
    //require_once 'message.php';

    $conn = mysqli_connect('localhost', 'root', '', 'message');
                // 檢查連接是否成功
    if (!$conn) {
        die('無法連接到資料庫：' . mysqli_connect_error());
    }
    $sql = "SELECT * FROM guest";
    $result = mysqli_query($conn,$sql);
    

    //顯示紀錄
    echo "<table border='0' width='800' align='center'>";
    while($row = mysqli_fetch_assoc($result)){
        echo "<tr bgcolor=!".'lightblue'."'>";
        echo "<td style='background-color:#B6D6E4'>作者：".$row["user"]."<br>";
        echo "主題：".$row["title"]."<br>";
        echo $row["content"]."<br>";
        echo "時間：".$row["date"]."<hr>";
    }
    echo "</table>";

    //釋放記憶體空間
    mysqli_free_result($result);
    mysqli_close($conn);
    ?>
    <form method="post" action="m2.php">
        <div>
        <table border='0' width='800' align='center'>
            <caption style="background-color:#44546A; color:#FFFFFF">請輸入新的留言</caption>
            <tr>
                <td style="background-color:#B6D6E4">作者：<input type="text" name="author" size=80></td>  
            </tr>
            <tr>
                <td style="background-color:#B6D6E4">主題：<input type="text" name="subject" size=80></td>  
            </tr>
            <tr>
                <td style="background-color:#B6D6E4">內容：<textarea name="content" cols="75" rows="5"></textarea> </td>
            </tr>
            <tr>
                <td style="background-color:#B6D6E4; text-align:center"><input type="submit" value="發送">
                <input type="reset" value="重新輸入"></td>
            </tr>
        </table >
        </div>
    </form>
</body>
</html>