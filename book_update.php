<?php
    $bid = $_REQUEST['bid'];
    $name = $_REQUEST['name'];
    $price = $_REQUEST['price'];
    $birthday = $_REQUEST['birthday'];
    $isOnsale = $_REQUEST['isOnsale'];
    $conn = mysqli_connect('127.0.0.1','root','','dangdang',3306);
    $sql = "SET NAMES UTF8";
    mysqli_query($conn,$sql);
    $sql = "UPDATE dd_book SET name='$name',price='$price',birthday='$birthday',isOnsale='$isOnsale' WHERE bid='$bid'";
    $result = mysqli_query($conn,$sql);
    if($result){
        echo '<h1>执行成功</h1>';
        echo '影响操作为：'.mysqli_affected_rows($conn).'行';
    }else{
        echo '<h1>执行失败</h1>';
        echo '请查看您的SQL语句:'.$sql;
    }
    echo '<br>';
    echo "<a href='book_select.php'>查询书籍列表 </a>";
?>