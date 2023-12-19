<?php 
include("ketnoi.php");

if(isset($_POST['btnDangNhap']))
{
    $user = $_POST['user1'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM `nguoi_dung` WHERE mat_khau = '$password' AND ten_dang_nhap = '$user'";
    $stm = $conn->prepare($sql);
    $stm->execute();
    $data = $stm->fetchAll(PDO::FETCH_ASSOC);
    if(count($data) >0)
    {
        session_start();
        echo "dang nhap thanh cong";
        $_SESSION['ten_dang_nhap '] = $user;
        var_dump ($_SESSION);
    }
    else
    {
        echo "sai ten dang nhap";
    }
     
}


?>