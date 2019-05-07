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
        用户应用系统管理界面
    </div>
    <table width="100%" border="1">
        <thead>
            <tr>
                <th>编号</th>
                <th>姓名</th>
                <th>密码</th>
                <th>管理员权限</th>
            </tr>
        </thead>
        <tbody>
            <?php
                // 连接数据库
                $conn = mysqli_connect('127.0.0.1','root','','dangdang',3306);
                // 提交SQL语句
                $sql = "SET NAMES UTF8";
                mysqli_query($conn,$sql);
                $sql = "SELECT * FROM user_info";
                $result = mysqli_query($conn,$sql);
                // 查看执行结果
                if($result){
                    while(($b = mysqli_fetch_assoc($result))!==null){
                        echo '<tr>';
                        echo "<td>$b[bid]</td>";
                        echo "<td>$b[userName]</td>";
                        echo "<td>$b[userPassword]</td>";
                        echo "<td>$b[isAdmin]</td>";
                        echo '<td>';
                        echo "<a href='user_del.php?bid=$b[bid]'>删除</a>";
                        echo '&nbsp;'; 
                        echo "<a href='user_select_for_update.php?bid=$b[bid]'>修改</a>";
                        echo '</td>';
                        echo '</tr>';
                    }   
                }else{

                }
            ?>
        </tbody>
    </table>
    <a href="user_add.html">增加人员</a>
</body>
</html>