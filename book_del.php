<?php
    $bid = $_REQUEST['bid'];
    $conn = mysqli_connect('127.0.0.1','root','','dangdang',3306);
    $sql = 'SET NAMES UTF8';
    mysqli_query($conn,$sql);
    $sql = "DELETE FROM dd_book WHERE bid=$bid";
    $result = mysqli_query($conn,$sql);
    if($result){
        echo '<h1>操作成功</h1>';
        echo '当前操作影响行数：'.mysqli_affected_rows($conn);
    }else{
        echo '<h1>操作失败</h1>';
        echo '请查看您的SQL语句:'.$sql; 
    }
    echo '<br>';
    echo "<a href='book_select.php'>查看书籍目录</a>";
?>