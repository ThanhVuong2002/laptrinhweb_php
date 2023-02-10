<!DOCTYPE html>
<html>
<head>
    <title>Hình chữ nhật</title>
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
    $rong = $_POST['rộng'];
    $dai = $_POST['dài'];
    $dientich = $rong*$dai;
    $nhanxet="";
    if($dientich==200){
        $nhanxet=" xây village";
    }
    elseif($dientich==150){
        $nhanxet="xây biệt thự";
    }
    elseif($dientich==100){
        $nhanxet="xây nhà tầng";
    }
    else{
        $nhanxet="xây nhà cấp 4";
    }
    
?>
    <form action="" method="post">
        <table>
            <tr class="center">
                <td colspan="2">
                    HÌNH CHỮ NHẬT
                </td>
            </tr>
            <tr>
                <td>
                    Chiều rộng
                </td>
                <td>
                    <input type="text" name="rộng">
                </td>
            </tr>
            <tr>
                <td>
                    Chiều dài
                </td>
                <td>
                    <input type="text" name="dài">
                </td>
            </tr>
            <tr>
                <td>
                    Diện tích
                </td>
                <td>
                    <input type="text" name="diện tích" value="<?php echo $dientich ?>">
                </td>
            </tr>
            <tr class="center1">
                <td colspan="2">
                    <button type="submit">TÍNH</button>
                </td>
            </tr>
            <tr class="center">
                <td>
                    Nhận xét
                </td>
                <td>
                    <input type="text" name="nhạn xét" value="<?php echo $nhanxet ?>">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
