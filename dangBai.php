<?php 
        include("ketnoi.php");
        session_start();
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
            echo "Thêm dữ liệu thành công!";
        }
        else
        {
            echo "lỗi";
        }
           



?>