<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Tính Tiền</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
  <style>
    h2{
        text-align: center;
        font-weight: bold;
    }
    
        .container {
        max-width: 700px;
        margin: 50px auto;
    }
    form {
        border: 1px solid #D87093;
        background: #D87093;
        padding: 40px 50px 45px;
        width: 500px;
        margin: auto;
    }
    .form-control:focus {
        border-color: #000;
        box-shadow: none;
    }
    .error {
        color: red;
        font-weight: 400;
        display: block;
        padding: 6px 0;
        font-size: 14px;
    }
    .form-control.error {
        border-color: red;
        padding: .375rem .75rem;
    }
  </style>
</head>
<body>
<?php
    ini_set('display_errors',0);
    $giat_la = $_POST["giat_la"];
    $an_sang = $_POST["an_sang"];
    $tam_hoi = $_POST["tam_hoi"];
    $tien_an = $_POST["tien_an"];
    $loai_phong =$_POST["loai_phong"];
    $check_in = strtotime( $_POST["check_in"]);
    $check_out = strtotime($_POST["check_out"]); 
    $date = abs($check_out- $check_in)  ;
    $ngay_tra = floor($date / (60*60*24)) * $loai_phong;
    $dich_vu = $giat_la + $an_sang + $tam_hoi;
    $total = $tien_an + $dich_vu + $loai_phong + $ngay_tra ;
?>
  <form action="" method="post">
    <h2> Tính Tiền</h2>
    <div class="form-group row">
        <label class="col-sm-4 col-form-label">Loại phòng:</label>
        <div class="col-sm-4"> <select class="form-control" name ="loai_phong"> 
        <option value="100">A</option> 
        <option value="200">B</option> 
        </select> 
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-4 col-form-label">Check in:</label>
        <div class="col-sm-8">
            <input type="date" name="check_in" class="form-control" value="" >
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-4 col-form-label">Check out:</label>
        <div class="col-sm-8">
            <input type="date" name="check_out" class="form-control" value="">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-4 col-form-label">Tiền ăn:</label>
        <div class="col-sm-8">
            <input type="text" name="tien_an" class="form-control" value="">
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-4">Dịch vụ:</div>
        <div class="col-sm-8">
        <div class="custom-control custom-checkbox custom-control-inline">
                <input type="checkbox" name="giat_la" value="100" class="custom-control-input" id="giat_la">
                <label class="custom-control-label" for="giat_la">Giặt là</label>
            </div>
            <div class="custom-control custom-checkbox custom-control-inline">
                <input type="checkbox" name="an_sang" value="200" class="custom-control-input" id="an_sang">
                <label class="custom-control-label" for="an_sang">Ăn sáng</label>
            </div>
            <div class="custom-control custom-checkbox custom-control-inline">
                <input type="checkbox" name="tam_hoi" value="500" class="custom-control-input" id="tam_hoi">
                <label class="custom-control-label" for="tam_hoi">Tắm hơi</label>
            </div>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-6 mt-4">
            <button type="submit" name="OK" class="btn btn-primary btn-block">OK</button>
        </div>
        <div class="col-sm-6 mt-4">
        <button type="Cancle" class="btn btn-danger">Cancle</button>
        </div>
    </div>
</form>
<h2>BILL</h2>
    <form action="" style="margin-left: 540px;" method="post">
        TypeRoom:
                <input type="text" value="<?php echo $loai_phong; ?>"> <br> <br>
        Rental hours: 
                <input type="text" value="<?php echo $ngay_tra;?>"> <br> <br>
        Money for meals: 
                <input type="text" value="<?php echo $tien_an; ?>"> <br> <br>
        Money for service: 
                <input type="text" value="<?php echo $dich_vu; ?>"> <br> <br>
        Total: 
                <input type="text" value="<?php echo $total;?>"> <br> <br>
    </form>
</body>
</html>