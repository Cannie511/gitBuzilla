<?php
function loadcmt($n){
    include("ketnoi.php");
    $sql = "SELECT * FROM `cmt` WHERE ma = '$n'";
    $stm = $conn->prepare($sql);
    $stm->execute();
    $data = $stm->fetchAll(PDO::FETCH_ASSOC);
    foreach ($data as $key => $cmt) {
        echo "
        <div class='comment'>
        <img src='https://placekitten.com/30/30' alt='Hình ảnh người dùng'>
        <strong>" . $data[$key]['ten_dang_nhap'] . "</strong>
        <p>" . $data[$key]['binh_luan'] . "</p>
        </div>
        ";
    }
}
?>