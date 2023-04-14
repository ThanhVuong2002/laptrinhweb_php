<?php
//lay du lieu id cần xóa
$svid= $_GET['sid'];
//echo $id;
// ket noi
require_once 'ketnoi.php';
// cau lenh sql
$xoa_sql = "DELETE FROM sinhvien WHERE id=$svid";

mysqli_query($conn, $xoa_sql);
//echo "<h1> xoa thanh cong </h1>";
// tro ve trang liet ke
header("location: hienthi.php");
?>