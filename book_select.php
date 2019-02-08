<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table width="100%" border="1">
        <thead>
            <tr>
                <th>编号</th>
                <th>名称</th>
                <th>单价</th>
                <th>日期</th>
                <th>特价</th>
                <th>操作</th>
            </tr>
        </thead>
        <tbody>
            <?php
                // 连接数据库
                $conn = mysqli_connect('127.0.0.1','root','','dangdang',3306);
                // 提交SQL语句
                $sql = "SET NAMES UTF8";
                mysqli_query($conn,$sql);
                $sql = "SELECT * FROM dd_book";
                $result = mysqli_query($conn,$sql);
                // 查看执行结果
                if($result){
                    while(($b = mysqli_fetch_assoc($result))!==null){
                        echo '<tr>';
                        echo "<td>$b[bid]</td>";
                        echo "<td>$b[name]</td>";
                        // 如果引图片的话，执行以下操作。
                        // echo "<td><img src='$b[pic]' width='100px'></td>";
                        echo "<td>$b[price]</td>";
                        echo "<td>$b[birthday]</td>";
                        $os = $b['isOnsale']?'是':'否';
                        echo "<td>$os</td>";
                        echo '<td>';
                        echo "<a href='book_del.php?bid=$b[bid]'>删除</a>";
                        echo '&nbsp;'; 
                        echo "<a href='book_select_for_update.php?bid=$b[bid]'>修改</a>";
                        echo '</td>';
                        echo '</tr>';
                    }   
                }else{

                }
            ?>
        </tbody>
    </table>
    <a href="book_add.html">增加书籍</a>
</body>
</html>