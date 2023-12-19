<?php 
include("ketnoi.php");

if(isset($_POST['btnDangKy']))
{
    $name = $_POST['username'];
    $matKhau = $_POST['password'];
    $NmatKhau = $_POST['confirmPassword'];
    $ngaySinh = $_POST['dob'];
    $gioiTinh = $_POST['gender'];
    $tmp = -1;
    if($matKhau == $NmatKhau)
    {
        if($gioiTinh == "male")
        {
            $tmp = 0;
            $sql = "INSERT INTO nguoi_dung (nguoi_dung.ten_dang_nhap,nguoi_dung.mat_khau,nguoi_dung.ngay_sinh,nguoi_dung.gioi_tinh,nguoi_dung.anh_dai_dien)
             VALUES('$name','$matKhau','$ngaySinh','$tmp','avtNam.jpg')";
               $stm = $conn->prepare($sql);
               $stm->execute();
                echo "THÊM THÀNH CÔNG";
        }
        else
        {
            $tmp = 1;
            $sql = "INSERT INTO nguoi_dung (nguoi_dung.ten_dang_nhap,nguoi_dung.mat_khau,nguoi_dung.ngay_sinh,nguoi_dung.gioi_tinh,nguoi_dung.anh_dai_dien)
            VALUES('$name','$matKhau','$ngaySinh','$tmp','avtNu.jpg.jpg')";
              $stm = $conn->prepare($sql);
              $stm->execute();
               echo "THÊM THÀNH CÔNG";
        }
    }
    else
    {
        echo "Mat khau khong trung";
    }
}



?>