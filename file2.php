<!DOCTYPE html>
<html>
<head>
	<title>Tạo ghi đọc có định dạng</title>
	<link rel="stylesheet" type="text/css" href="style.css">
    <style>
        * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }

    .container {
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
    }

    h1 {
        text-align: center;
        margin-bottom: 20px;
        background-color: #FFD700;
    }

    form {
        display: flex;
        flex-wrap: wrap;
        background-color: #FFD700;
    }

    label {
        width: 100%;
        max-width: 150px;
        margin-right: 10px;
        font-weight: bold;
    }

    input[type="text"],
    input[type="number"],
    input[type="submit"] {
        padding: 10px;
        border-radius: 5px;
        border: none;
        margin-bottom: 10px;
    }

    input[type="submit"] {
        background-color: #4CAF50;
        color: white;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #3e8e41;
    }

    .table-container {
        margin-top: 20px;
    }

    table {
        border-collapse: collapse;
        width: 100%;
    }

    th, td {
        text-align: center;
        padding: 8px;
        border-bottom: 1px solid #ddd;
    }

    th {
        background-color: #4CAF50;
        color: white;
    }

    </style>
</head>
<body>
	<div class="container">
		<h1>Tạo ghi đọc trong PHP</h1>
		<form method="post">
            <label>Tên file:</label>
			<input type="text" name="ten_file"><br><br>
			<label>Tên hàng:</label>
			<input type="text" name="ten_hang"><br><br>
			<label>Số lượng:</label>
			<input type="number" name="so_luong"><br><br>
			<label>Đơn giá:</label>
			<input type="number" name="don_gia"><br><br>
			<input type="submit" name="submit" value="Tạo ghi đọc">
		</form>
		<?php
			if(isset($_POST['submit'])){
                $ten_file = $_POST['ten_file'];
				$ten_hang = $_POST['ten_hang'];
				$so_luong = $_POST['so_luong'];
				$don_gia = $_POST['don_gia'];
				$tong_tien = $so_luong * $don_gia;
				echo "<div class='table-container'>";
				echo "<h2>Bảng nội dung</h2>";
				echo "<table>";
				echo "<tr><th>Tên file</th><th>Tên hàng</th><th>Số lượng</th><th>Đơn giá</th><th>Tổng tiền</th></tr>";
				echo "<tr><td>$ten_file</td><td>$ten_hang</td><td>$so_luong</td><td>$don_gia</td><td>$tong_tien</td></tr>";
				echo "</table>";
				echo "</div>";
			}
		?>
	</div>
</body>
</html>
