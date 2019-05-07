<?php
    // 接收客户端待修改的数据
    $bid = $_REQUEST['bid'];
    // 连接数据库
    $conn = mysqli_connect('127.0.0.1','root','','dangdang',3306);
    //提交sql语句
    $sql = "SET NAMES UTF8";
    mysqli_query($conn,$sql);
    // 查询当前编号所在行
    $sql = "SELECT * FROM user_info WHERE bid=$bid";
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
    <style>
        html,body{
            width:100%;
            height:100%;
        }
        body{
            background-image:url("./image2/library.jpg");
            background-size:100% 100%;
        }
        span{
            color:white;
        }
        div{
            text-align:center;
            font-size:30px;
            color:white;
            padding:10px 0 10px 0;
        }
    </style>
</head>
<body>
    <form action="user_update.php">
        <input type="hidden" name="bid" value="<?php echo $b['bid']?>">
        <span>姓名：</span><input type="text" name="userName" value="<?php echo $b['userName']?>">
        <span>密码:</span><input type="text" name="userPassword" value="<?php echo $b['userPassword']?>">
        <span>管理员权限：</span><input type="text" name="isAdmin" value="<?php echo $b['isAdmin']?>">
        <input type="submit" value="提交">
    </form>
</body>
</html>