<?php 
session_start();
        include("ketnoi.php");
        
        if(isset($_POST['btndang'])){
        $baiViet = $_POST['noiDungBaiViet'];
        $nameAnh = $_FILES['fileAnh']['name'];
        $anh_tmp = $_FILES['fileAnh']['tmp_name'];
        $targetDir1 = "img/${nameAnh}";//nơi lưu
        $user = $_SESSION['ten_dang_nhap'];
        move_uploaded_file($anh_tmp,$targetDir1);
         $sql = "INSERT INTO blogs (anh,bai_viet,ngay_dang,ten_dang_nhap) VALUES('$targetDir1','$baiViet',CURDATE(),'$user');";
        $stm = $conn->prepare($sql);
        if ($stm->execute()) {
            // Câu truy vấn đã được thực hiện thành công
            echo "
            <div class='toast-container position-fixed bottom-0 end-0 p-3' >
                <div id='liveToast'style='background-color: green;' class='toast fade show' role='alert' aria-live='ssertive' aria-atomic='true'>
                    <div class='toast-header'>
                        <strong class='me-auto'>Thông báo</strong>
                        <button type='button' class='btn-close' data-bs-dismiss='toast' aria-label='Close'></button>
                    </div>
                    <div class='toast-body' style=' color: white'>
                        Tạo bài viết mới thành công!
                    </div>
                </div>
            </div>
            ";
        }
        else
        {
            echo "
            <div class='toast-container position-fixed bottom-0 end-0 p-3' >
            <div id='liveToast'style='background-color: red;' class='toast fade show' role='alert' aria-live='ssertive' aria-atomic='true'>
                <div class='toast-header'>
                    <strong class='me-auto'>Thông báo</strong>
                    <button type='button' class='btn-close' data-bs-dismiss='toast' aria-label='Close'></button>
                </div>
                <div class='toast-body' style=' color: white'>
                    Có lỗi khi tạo, vui lòng thử lại
                </div>
            </div>
        </div>
            ";
        }
    }
?>