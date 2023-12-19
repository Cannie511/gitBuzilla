<?php
include("ketnoi.php");

$sql = "SELECT * FROM `blogs`";
$stm = $conn->prepare($sql);
$stm->execute();
$data = $stm->fetchAll(PDO::FETCH_ASSOC);
foreach ($data as $key => $blogs) {
    echo "
    <div class='post-container post' data-bs-toggle='modal' data-bs-target='#postModal1'>
    <img src='".$data[$key]['anh']."' alt='Ảnh bài viết'>
    <h5 class='mb-3'>".$data[$key]['ten_dang_nhap']."</h5>
    <p>".$data[$key]['bai_viet']."</p>
</div>
    ";
}
?>