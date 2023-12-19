<?php
include("ketnoi.php");

if (isset($_POST['btnDangKy'])) {
    $name = $_POST['username'];
    $matKhau = $_POST['password'];
    $NmatKhau = $_POST['confirmPassword'];
    $ngaySinh = $_POST['dob'];
    $gioiTinh = $_POST['gender'];
    $tmp = -1;
    if ($matKhau == $NmatKhau) {
        if ($gioiTinh == "male") {
            $tmp = 0;
            $sql = "INSERT INTO nguoi_dung (nguoi_dung.ten_dang_nhap,nguoi_dung.mat_khau,nguoi_dung.ngay_sinh,nguoi_dung.gioi_tinh,nguoi_dung.anh_dai_dien)
             VALUES('$name','$matKhau','$ngaySinh','$tmp','img/avtNam.jpg')";
            $stm = $conn->prepare($sql);
            $stm->execute();
            echo "<div class='toast-container position-fixed bottom-0 end-0 p-3' >
                <div id='liveToast'style='background-color: green;' class='toast fade show' role='alert' aria-live='ssertive' aria-atomic='true'>
                    <div class='toast-header'>
                        <strong class='me-auto'>Thông báo</strong>
                        <button type='button' class='btn-close' data-bs-dismiss='toast' aria-label='Close'></button>
                    </div>
                    <div class='toast-body' style=' color: white'>
                        Tạo tài khoản thành công, tiếp tục <a href = 'Login.php'>Đăng nhập</a>.
                    </div>
                </div>
            </div>";
        } else {
            $tmp = 1;
            $sql = "INSERT INTO nguoi_dung (nguoi_dung.ten_dang_nhap,nguoi_dung.mat_khau,nguoi_dung.ngay_sinh,nguoi_dung.gioi_tinh,nguoi_dung.anh_dai_dien)
            VALUES('$name','$matKhau','$ngaySinh','$tmp','img/avtNu.jpg')";
            $stm = $conn->prepare($sql);
            $stm->execute();
            echo "<div class='toast-container position-fixed bottom-0 end-0 p-3' >
            <div id='liveToast'style='background-color: green;' class='toast fade show' role='alert' aria-live='ssertive' aria-atomic='true'>
                <div class='toast-header'>
                    <strong class='me-auto'>Thông báo</strong>
                    <button type='button' class='btn-close' data-bs-dismiss='toast' aria-label='Close'></button>
                </div>
                <div class='toast-body' style=' color: white'>
                    Tạo tài khoản thành công, tiếp tục <a href = 'Login.php'>Đăng nhập</a>.
                </div>
            </div>
        </div>";
        }
    } else {
        echo "<div class='toast-container position-fixed bottom-0 end-0 p-3' >
        <div id='liveToast'style='background-color: red;' class='toast fade show' role='alert' aria-live='ssertive' aria-atomic='true'>
            <div class='toast-header'>
                <strong class='me-auto'>Thông báo</strong>
                <button type='button' class='btn-close' data-bs-dismiss='toast' aria-label='Close'></button>
            </div>
            <div class='toast-body' style=' color: white'>
               Mật khẩu không trùng khớp.
            </div>
        </div>
    </div>";
    }
}



?>