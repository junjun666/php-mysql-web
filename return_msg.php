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
        $bid1 = $_REQUEST['bid1'];
        $date = date('Y-m-d');

        $conn = mysqli_connect('127.0.0.1','root','','dangdang',3306);
        $sql = 'SET NAMES UTF8';
        mysqli_query($conn,$sql);
        $sql = "UPDATE borrow SET return_date='$date' WHERE book_bid='$bid' and user_bid='$bid1'";
        $result = mysqli_query($conn,$sql);
        if($result){
            echo '<h1>恭喜你还书成功</h1>';
        }else{
            echo '<h1>还书失败</h1>';
        }
        echo '<br>';
        echo "<a href='borrow_book.php?bid1=$bid1'>返回借书界面</a>";
    ?>
</body>
</html>
