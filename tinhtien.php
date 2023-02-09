<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Form Validation in PHP</title>
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
    /*// Error messages
    $nameEmptyErr = "";
    $emailEmptyErr = "";
    $educationEmptyErr = "";
    $genderEmptyErr = "";
    $hobyEmptyErr = "";
    $commentEmptyErr = ""; 
    $nameErr = "";
    $emailErr = "";
    if(isset($_POST["submit"])) {
        // Set form variables
        $name           = checkInput($_POST["name"]);
        $email          = checkInput($_POST["email"]);
        $education      = checkInput($_POST["education"]);
        $gender         = checkInput($_POST["gender"]);
        $hoby           = $_POST["hoby"];
        $comment        = checkInput($_POST["comment"]);
        // Name validation
        if(empty($name)){
            $nameEmptyErr = '<div class="error">
                Name can not be left blank.
            </div>';
        } // Allow letters and white space 
        else if(!preg_match("/^[a-zA-Z ]*$/", $name)) {
            $nameErr = '<div class="error">
                Only letters and white space allowed.
            </div>';
        } else {
            echo $name . '<br>';
        }
        // Email validation
        if(empty($email)){
            $emailEmptyErr = '<div class="error">
                Email can not be left blank.
            </div>';
        } // E-mail format validation
        else if (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $email)){
            $emailErr = '<div class="error">
                    Email format is not valid.
            </div>';
        } else {
            echo $email . '<br>';
        }

        // Select option validation
        if(empty($education)){
            $educationEmptyErr = '<div class="error">
                Tell us about your education.
            </div>';
        } else {
            echo $education . '<br>';
        }

        // Radio button validation
        if(empty($gender)){
            $genderEmptyErr = '<div class="error">
                Specify your gender.
            </div>';
        } else {
            echo $gender . '<br>';
        }

        // Checkbox validation
        if(!empty($hoby)){                
            foreach($_POST['hoby'] as $val){
                echo $val . '<br>';
            }
        } else {
            $hobyEmptyErr = '<div class="error">
                What are your hobbies.
            </div>';
        }
        // Text-area validation
        if(empty($comment)){
            $commentEmptyErr = '<div class="error">
                This field is required.
            </div>';
        } else {
            echo $comment . '<br>';
        }
    }  
    function checkInput($input) {
        $input = trim($input);
        $input = stripslashes($input);
        $input = htmlspecialchars($input);
        return $input;
    } */   
?>
  <form action="" method="post">
    <h2> Tính Tiền</h2>
    <div class="form-group row">
        <label class="col-sm-4 col-form-label">Loại phòng:</label>
        <div class="col-sm-4"> <select class="form-control"> 
        <option value="none" selected=""></option> 
        <option value="A">A</option> 
        <option value="B">B</option>
        <option value="other">khác</option> 
        </select> 
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-4 col-form-label">Check in:</label>
        <div class="col-sm-8">
            <input type="email" name="email" class="form-control" >
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-4 col-form-label">Check out:</label>
        <div class="col-sm-8">
            <input type="email" name="email" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-4 col-form-label">Tiền ăn:</label>
        <div class="col-sm-8">
            <input type="email" name="email" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-4">Dịch vụ:</div>
        <div class="col-sm-8">
            <div class="custom-control custom-checkbox custom-control-inline">
                <input type="checkbox" name="hoby[]" value="Giặt là" class="custom-control-input" id="Giặt là ">
                <label class="custom-control-label" for="Giặt là">Giặt là </label>
            </div>
            <div class="custom-control custom-checkbox custom-control-inline">
                <input type="checkbox" name="hoby[]" value="Ăn sáng" class="custom-control-input" id="Ăn sáng">
                <label class="custom-control-label" for="Ăn sáng">Ăn sáng</label>
            </div>
            <div class="custom-control custom-checkbox custom-control-inline">
                <input type="checkbox" name="hoby[]" value="Tắm hơi" class="custom-control-input" id="Tắm hơi">
                <label class="custom-control-label" for="Tắm hơi">Tắm hơi</label>
            </div>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-6 mt-4">
            <button type="OK" name="OK" class="btn btn-primary btn-block">OK</button>
        </div>
        <div class="col-sm-6 mt-4">
        <button type="Cancle" class="btn btn-danger">Cancle</button>
        </div>
    </div>
</form>
</body>
</html>