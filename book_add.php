<?php
    $name = $_REQUEST['name'];
    $price = $_REQUEST['price'];
    $birthday = $_REQUEST['birthday'];
    $isOnsale = $_REQUEST['isOnsale'];
    //连接数据库
    $conn = mysqli_connect('127.0.0.1','root','','dangdang',3306);
    //var_dump($conn);
    //提交sql命令
    $sql = "SET NAMES UTF8";
    mysqli_query($conn,$sql);
    $sql = "INSERT INTO dd_book VALUES(NULL,'$name','$price','$birthday','$isOnsale')";
    $result = mysqli_query($conn,$sql);
    //查看执行结果
    if($result){
        echo '<h1>执行成功</h1>';
        echo '新插入的数据在数据库的编号为：'.mysqli_insert_id($conn); 
        echo "<a href='book_select.php'>查看书籍列表</a>";
    }else{
        echo '<h1>执行失败请查看SQL语句'.$sql.'</h1>';
    }
?>