<?php
// nhan dữ liệu từ form
$ht= $_POST['hoten'];
$masv= $_POST['masv'];
$lop= $_POST['lop'];

// ket nối csdl
require_once 'ketnoi.php';
// viết lệnh sql them du lieu
$themsql="INSERT INTO sinhvien
(masv, hoten, lop) VALUES ('$masv', '$ht', '$lop')";
//echo $themsql; exit;
// thực hiện câu lệnh thêm
if(mysqli_query($conn, $themsql)){
// in thông báo thành công
// tro ve trang liet ke
header("location: hienthi.php");
};
?>


