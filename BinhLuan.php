<?php 
include("ketnoi.php");
if(isset($_POST['btncmt'])){
    $ma = $_POST['ma'];
    $cmt = $_POST['comment'];
    $user = $_SESSION['ten_dang_nhap'];

    $sql = "INSERT INTO cmt (ngay_CMT,ten_dang_nhap,ma,binh_luan) VALUES(CURDATE(),'$user','$ma','$cmt')";
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
                Thêm Bình Luận Thành Công!
            </div>
        </div>
    </div>
        ";
    }
    else
    {
        echo "lỗi";
    }
}
?>