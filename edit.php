<?php
        // lay d can sua
        $id= $_GET['sid'];
        // ket noi
        require_once 'ketnoi.php';
        // lay thong tin  sv có id=$id
        $edit_sql="SELECT * FROM sinhvien WHERE id= $id";
        $result= mysqli_query($conn, $edit_sql);
        $row = mysqli_fetch_assoc($result);
        // hien thi thong tin form
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Sửa sinh viên</title>
</head>
<body>
    <div class="container">
        <h1>Form sửa sinh viên</h1>
        <form action="update.php" method="post">
        <input type="hidden" name="sid" value="<?php echo $id;?> "id="">
            <div class="form-group">
                <label for="hoten"></label>Họ tên<input type="text" id="hoten" class="form-control" name="hoten" value="<?php echo $row['hoten']?>"></div>
            <div class="form-group">
                <label for="masv"></label>Mã sinh viên<input type="text" id="masv" class="form-control" name="masv" value="<?php echo $row['masv']?>"></div>
            <div class="form-group">
                <label for="lop"></label>Lớp<input type="text" id="lop" class="form-control" name="lop" value="<?php echo $row['lop']?>"></div>
                <button class="btn btn-success">Sửa thông tin</button>
        </form>
    </div>
</body>
</html>


