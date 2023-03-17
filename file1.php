<?php
$filename = 'ndfile.txt';
$content = file($filename);

echo "<div style='text-align: center;'>"; // định dạng căn giữa
foreach ($content as $key => $value) {
    $value = trim($value); // loại bỏ khoảng trắng ở đầu và cuối dòng
    if ($key % 8 == 0 && $key != 0) {
        echo "<br>"; // xuống dòng sau mỗi 8 dòng
    }
    echo $value . "<br>"; // xuất dòng
}
echo "</div>"; // kết thúc định dạng căn giữa
?>


