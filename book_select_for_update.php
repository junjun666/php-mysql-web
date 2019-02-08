<?php
    // 接收客户端待修改的数据
    $bid = $_REQUEST['bid'];
    // 连接数据库
    $conn = mysqli_connect('127.0.0.1','root','','dangdang',3306);
    //提交sql语句
    $sql = "SET NAMES UTF8";
    mysqli_query($conn,$sql);
    // 查询当前编号所在行
    $sql = "SELECT * FROM dd_book WHERE bid=$bid";
    $result = mysqli_query($conn,$sql);
    // var_dump($result);
    $b = mysqli_fetch_assoc($result);
    // var_dump($b);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="book_update.php">
        <input type="hidden" name="bid" value="<?php echo $b['bid']?>">
        书名：<input type="text" name="name" value="<?php echo $b['name']?>">
        单价：<input type="text" name="price" value="<?php echo $b['price']?>">
        日期：<input type="text" name="birthday" value="<?php echo $b['birthday']?>">
        特价：<input type="text" name="isOnsale" value="<?php echo $b['isOnsale']?>">
        <input type="submit" value="提交">
    </form>
</body>
</html>