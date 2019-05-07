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
        $conn = mysqli_connect('127.0.0.1','root','','dangdang',3306);
        $sql = "SET NAMES UTF8";
        mysqli_query($conn,$sql);
        $sql = "UPDATE dd_book SET userName='$userName',userPassword='$userPassword',isAdmin='$isAdmin' WHERE bid='$bid'";
        $result = mysqli_query($conn,$sql);
        if($result){
            echo '<h1>执行成功</h1>';
            echo '<h3>影响操作为：'.mysqli_affected_rows($conn).'行</h3>';
        }else{
            echo '<h1>执行失败</h1>';
            echo '请查看您的SQL语句:'.$sql;
        }
        echo '<br>';
        echo "<a href='user_select_admin.php'>查询用户列表 </a>";
    ?>
</body>
</html>
