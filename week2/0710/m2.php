<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $author = $_POST["author"];
    $subject = $_POST["subject"];
    $content = $_POST["content"];
    $current_time = date("Y-m-d H:i:s");

    $conn = mysqli_connect('localhost', 'root', '', 'message');
    // 檢查連接是否成功
    if (!$conn) {
        die('無法連接到資料庫：' . mysqli_connect_error());
    }
    $sql = "INSERT INTO guest(user, title, content, date)
            VALUES ('$author','$subject','$content','$current_time')";
    if($conn->query($sql) === TRUE){
        echo "1";
    }
    //重新導向到message.php
    header("location:message.php");
    exit;
    }
?>