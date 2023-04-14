<?php
// nhan dữ liệu từ form
$ht= $_POST['hoten'];
$masv= $_POST['masv'];
$lop= $_POST['lop'];
$id= $_POST['sid'];

// ket nối csdl
require_once 'ketnoi.php';
// viết lệnh sql them du lieu
$updatesql="UPDATE  sinhvien SET masv='$masv', hoten='$ht', lop='$lop' WHERE id= $id";
//echo $updatesql; exit;
// thực hiện câu lệnh thêm
if(mysqli_query($conn, $updatesql)){
// in thông báo thành công
// tro ve trang liet ke
header("location: hienthi.php");
};
?>