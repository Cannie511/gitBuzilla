<?php
include "loadCmt.php";
include("ketnoi.php");

$sql = "SELECT * FROM `blogs`";
$stm = $conn->prepare($sql);
$stm->execute();
$data = $stm->fetchAll(PDO::FETCH_ASSOC);
foreach ($data as $key => $blogs) {
    echo "
    <div class='post-container post' data-bs-toggle='modal' data-bs-target='#post".$data[$key]['ma']."'>
    <h5 class='mb-3'>".$data[$key]['ngay_dang']."</h5>
    <img src='".$data[$key]['anh']."' alt='Ảnh bài viết' data-ma='".$data[$key]['ma']."'>
    <h5 class='mb-3'>".$data[$key]['ten_dang_nhap']."</h5>
    <p>".$data[$key]['bai_viet']."</p>
</div>
    ";
    echo "
    <div class='modal fade' id='post".$data[$key]['ma']."' tabindex='-1' aria-labelledby='postModal1Label' aria-hidden='true'>
        <div class='modal-dialog modal-dialog-centered'>
            <div class='modal-content'>
                <div class='modal-header'>
                    <h5 class='modal-title' id='postModal1Label'>bài viết của ".$data[$key]['ten_dang_nhap']."</h5>
                    <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                </div>
                
                <div class='modal-body'>
                    <img src='".$data[$key]['anh']."' alt='Ảnh bài viết 1'>
                    <div class='user-info mt-3'>
                        <div class='user-card'>
                            <img src='https://placekitten.com/40/40' alt='Hình ảnh người dùng'>
                            <h5 class='ml-2'>".$data[$key]['ten_dang_nhap']."</h5>
                        </div>
                    </div>
                    <p class='mt-3'>".$data[$key]['bai_viet']."</p>
                    <div class='comments-section'>";
                    loadcmt($data[$key]['ma']);
                    echo "</div>
                    <form action='index-logined.php' method='post' enctype='multipart/form-data'>
                    <!-- Write Comment Section -->
                    <div class='form-group d-flex'>
                        <input type='text' class='form-control mb-2' placeholder='Viết bình luận' name='comment'>
                        <button class='btn type='submit' name='btncmt' btn-primary ml-2'><ion-icon name='send'></ion-icon></button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div> 
    ";
}
?>