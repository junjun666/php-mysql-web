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
            background-image:url("./image2/index.jpg");
            background-size:cover;
            background-position:center;
        }
        div{
            position:absolute;
            left:50%;
            top:50%;
            transform:translate(-50%,-50%);
            width:300px;
            height:300px;
        }
        a{
            display:block;
            text-decoration:none;
            border:1px solid black;
            text-align:center;
            padding:5px 0px 0px 5px;
        }
        a:hover{
            font-size:18px;
        }
        h1{
            height:60px;
            line-height:60px;
            color:white;
            text-align:center;
        }
    </style>
</head>
<body>
    <?php
        $userName = $_REQUEST['textfield'];
        $userPassword = $_REQUEST['textfield2'];
        //连接数据库
        $conn = mysqli_connect('127.0.0.1','root','','dangdang',3306);
        //var_dump($conn);
        //提交sql命令
        $sql = "SET NAMES UTF8";
        mysqli_query($conn,$sql);
        $sql = "SELECT * FROM user_info WHERE userName=\"$userName\" and userPassword=\"$userPassword\"";
        $result = mysqli_query($conn,$sql);
        $num_users=$result->num_rows;

        $sql = "SELECT * FROM user_info WHERE userName=\"$userName\" and userPassword=\"$userPassword\"";
        $query = mysqli_query($conn,$sql);
        $result3 = mysqli_fetch_assoc($query);
        $bid1 = $result3['bid'];

        $sql2 = "SELECT * FROM user_info WHERE isAdmin = 'true' and userName=\"$userName\" and userPassword=\"$userPassword\"";
        $result2 = mysqli_query($conn,$sql2);
        $num_users2=$result2->num_rows;
        //查看执行结果
        if($num_users!=0 && $num_users2!=0){
            echo '<div>';
            echo '<h1>管理员登录成功</h1>';
            echo "<a href='book_select_admin.php'>图书管理界面</a>";
            echo "<a href='user_manage.php'>用户管理界面</a>";
            echo "<a href='info_borrow.php'>用户借用书籍信息界面</a>";
            echo "<a href='signup.html'>返回登录界面</a>";
            echo '</div>';
        }else if($num_users!=0 && $num_users2==0){
            echo '<div>';
            echo '<h1>用户登录成功</h1>';
            echo "<a href='borrow_book.php?bid1=$bid1'>图书借阅界面</a>";
            echo "<a href='signup.html'>返回登录界面</a>";
            echo '</div>';
        }else{
            echo '<div>';
            echo '<h1>登录失败</h1>';
            echo "<a href='signup.html'>返回登录界面</a>";
            echo '</div>';
        }
    ?>
</body>
</html>







