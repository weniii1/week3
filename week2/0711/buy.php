<?php
    $user = $_POST["user"];
    setcookie("name", $user);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>buy</title>
</head>
<body bgcolor="lightyellow" align="center">
    <form action="">
        <h1 align='center'>可憐賣書網</h1>
        <iframe src="show_link.html" frameborder="0" height="50px" width="300px"></iframe>
        <h2>hello!</h2>
        <iframe src="catalog.php" name="bottom" frameborder="0" height="500px" width="850px"></iframe>
    </form>
</body>
</html>