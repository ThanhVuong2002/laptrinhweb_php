<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .tb1 {
        border: 1px solid #D87093;
        background: #D87093;
        padding: 40px 50px 45px;
        width: 500px;
        margin: auto; 
    }   
    </style>
</head>
<body>
    <?php 
        session_start();
        $check=0;
        if(!empty($_POST['name']&& !empty($_POST['email']) && !empty($_POST['nameDN']) &&!empty($_POST['password']))){
            $name=$_POST['name'];
            $nameDN=$_POST['nameDN'];
            $check=1;
            $gop="Tên:".$_POST['name']." , Email: ". $_POST['email']." , Tên ĐN: ". $_POST['nameDN']." , MK:". $_POST['password'];
            setcookie('khachhang',$gop,time() +60);
        };
    ?>
    <center>
    <div>THÔNG TIN ĐĂNG NHẬP</div>
    <form action="" method="post">
        <table id="tb1">
        <tr>
            <td>Họ và tên:</td>
            <td><input type="text" name="name"></td>
        </tr>
        <tr>
            <td>Email:</td>
            <td><input type="text" name="email"></td>
        </tr>
        <tr>
            <td>Tên đăng nhập:</td>
            <td><input type="text" name="nameDN"></td>
        </tr>
        <tr>
            <td>Mật khẩu:</td>
            <td><input type="text" name="password"></td>
        </tr>
        <tr>
            <td></td>
            <td> <input type="submit"></td>
        </tr>
        </table>

    </form>
    <div>
        <font color="blue">
        <?php 
            if($check==1){
        ?>
            <table id="tb2">
                <tr>
                    <td>Thông tin khách hàng</td>
                </tr>
                <tr> <td><?php echo $_COOKIE['khachhang'] ?></td> <br></tr>
                <tr><td><a href="cook-doc.php">Click here!</td></tr>
            </table>
        <?php
        }
        ?>
        </font>

    </div>
    </center>
</body>
</html>

