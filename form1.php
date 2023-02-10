<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    table{
            width: 500px;
            margin: auto;
            background: #ffca97;
        }
        td{
            padding: 10px;
        }
        .center{
            text-align: center;
            font-weight: bold;
            background: #ffa500;
            color: #ffffff;
        }
        .center1{
            text-align: center;
        }
        input{
            width: 300px;
        }
        button{
            background: #34a853;
            border: none;
            padding: 10px 20px;
            font-weight: bold;
        }
        button:hover{
            cursor: pointer;
        }
        </style>
</head>
<body>

<?php
    ini_set('display_errors',0);
    $so_1 = $_POST['số1'];
    $so_2 = $_POST['số2']; 
    function tong($so_1,$so_2)
    {
        return $so_1 + $so_2;
    }
    ?>
<form action="" method="post">
        <table>
            <tr class="center">
                <td colspan="2">
                    Tính
                </td>
            </tr>
            <tr>
                <td>
                    Số thứ nhất:
                </td>
                <td>
                    <input type="text" name="số1" >
                </td>
            </tr>
            <tr>
                <td>
                    Số thứ hai:
                </td>
                <td>
                    <input type="text" name="số2" >
                </td>
            </tr>
            <tr>
                <td>
                    Tổng:
                </td>
                <td>
                    <input type="text" name="tong" value="<?php echo tong($so_1,$so_2);?>">
                </td>
                
            </tr>
            <tr class="center1">
                <td colspan="2">
                    <button type="submit">TÍNH</button>
                </td>
            </tr>
    </body>
</html>