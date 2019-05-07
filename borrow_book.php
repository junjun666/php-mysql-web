<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        html,body{
            width:100%;
            height:100%;
        }
        body{
            background-image:url("./image2/library.jpg");
            background-size:100% 100%;
        }
        th,td,a{
            color:white;
        }
        div{
            text-align:center;
            font-size:30px;
            color:white;
            padding:10px  0 10px 0;
        }
        
    </style>
</head>
<body>
    <div>
        图书借阅系统管理界面
    </div>
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
                $bid1 = $_REQUEST['bid1'];
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
                        echo "<a href='borrow_msg.php?bid=$b[bid]&bid1=$bid1'>借阅</a>";
                        echo "&nbsp &nbsp &nbsp";
                        echo "<a href='return_msg.php?bid=$b[bid]&bid1=$bid1'>还书</a>";
                        echo '</td>';
                        echo '</tr>';
                    }   
                }else{

                }
            ?>
        </tbody>
    </table>
</body>
</html>