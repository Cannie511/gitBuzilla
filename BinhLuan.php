<?php 
include("ketnoi.php");
session_start();

$ma = $_POST['ma'];
$cmt = $_POST['comment'];
$user = $_SESSION['ten_dang_nhap'];

$sql = "INSERT INTO cmt (ngay_CMT,ten_dang_nhap,ma,binh_luan) VALUES(CURDATE(),'$user','$ma','$cmt')";
$stm = $conn->prepare($sql);
if ($stm->execute()) {
    // Câu truy vấn đã được thực hiện thành công
    echo "Thêm dữ liệu thành công!";
}
else
{
    echo "lỗi";
}
?>