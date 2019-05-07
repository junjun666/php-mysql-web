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
        h1,h3,a{
            color:white;
        }
        div{
            text-align:center;
            font-size:30px;
            color:white;
            padding:10px 0 10px 0;
        }
        a{
            display:block;
        }
    </style>
</head>
<body>
    <?php
        $bid = $_REQUEST['bid'];
        $userName = $_REQUEST['userName'];
        $userPassword = $_REQUEST['userPassword'];
        $isAdmin = $_REQUEST['isAdmin'];
        //连接数据库
        $conn = mysqli_connect('127.0.0.1','root','','dangdang',3306);
        //var_dump($conn);
        //提交sql命令
        $sql = "SET NAMES UTF8";
        mysqli_query($conn,$sql);
        $sql = "INSERT INTO user_info VALUES('$bid','$userName','$userPassword','$isAdmin')";
        $result = mysqli_query($conn,$sql);
        
        //查看执行结果
        if($result){
            echo '<h1>执行成功</h1>';
            echo '<h3>新插入的数据在数据库的编号为：'.mysqli_insert_id($conn).'</h3>'; 
            echo "<a href='user_manage.php'>查看用户列表</a>";
        }else{
            echo '<h1>执行失败请查看SQL语句'.$sql.'</h1>';
        }
    ?>
</body>
</html>
