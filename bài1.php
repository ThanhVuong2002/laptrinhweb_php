<!DOCTYPE HTML>  
<html>
<head>
  <title>Tạo form đăng ký</title>
  <style>
	h2{
		color: #FF4500;
		text-align: center;
	}
    .error {color: #FF0000;}
    button{
            background: #FF4500;
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
$workemailErr = $firstnameErr = $lastnameErr = $passwordErr=  "";
$workemail = $firstname = $lastname = $password=   "";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {

		if (empty($_POST["workemail"])) {
			$workemailErr = "Email is required";
		} else {
			$workemail = test_input($_POST["workemail"]);
		}

	if (empty($_POST["firstname"])) {
		$firstnameErr = "fisrtname is required";
	} else {
		$firstname = test_input($_POST["firstname"]);
	}
	
	if (empty($_POST["lastname"])) {
		$lastnameErr = "lastname is required";
	} else {
		$lastname = test_input($_POST["lastname"]);
	}

	if (empty($_POST["password"])) {
		$passwordErr = "password is required";
	} else {
		$password = test_input($_POST["password"]);
	}

	}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>Đăng ký</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		Workemail: <input type="text" name="workemail">
		<span class="error">* <?php echo $workemailErr;?></span>
		<br><br>
	firstName: <input type="text" name="firstname">
		<span class="error">* <?php echo $firstnameErr;?></span>
		<br><br>
	LastName: <input type="text" name="lastname">
		<span class="error">* <?php echo $lastnameErr;?></span>
		<br><br>
	Password: <input type="text" name="password">
		<span class="error">* <?php echo $passwordErr;?></span>
		<br><br>
        <button type="submit" name="submit" value="Submit">Signup</button>
            </tr>
        </table>
		</form>
</body>
</html>
    









