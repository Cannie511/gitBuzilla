<?php
include "dangBai.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Trang Cá Nhân</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f8f9fa;
    }

    .profile-header {
      background-color: #4267B2;
      color: #fff;
      padding: 20px;
      text-align: center;
    }

    .profile-img {
      border-radius: 50%;
      width: 120px;
      height: 120px;
      object-fit: cover;
    }

    .profile-content {
      max-width: 600px;
      margin: 20px auto;
      background-color: #fff;
      border: 1px solid #ddd;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      padding: 20px;
    }

    .post-container {
      max-width: 600px;
      width: 100%;
      margin: 20px auto;
      background-color: #fff;
      border: 1px solid #ddd;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      padding: 20px;
    }

    .post-container img {
      width: 100%;
      height: auto;
      border-radius: 8px;
      margin-bottom: 15px;
    }

    /* Style for modal content */
    .modal-content img {
      max-width: 100%;
      height: auto;
      border-radius: 8px;
    }

    textarea {
      width: 90%;
      height: auto;
      border-radius: 10px;
      padding: 5px;
    }
  </style>
</head>

<body>

  <!-- Profile Header -->
  <div class="profile-header">
    <h1><?php echo $_SESSION['ten_dang_nhap']?></h1>
    <img src="https://placekitten.com/120/120" alt="Ảnh hồ sơ" class="profile-img">
    <button class="btn btn-primary ml-2" data-bs-toggle="modal" data-bs-target="#taoMoi">Tạo Bài Viết Mới
      &nbsp;&nbsp;<ion-icon name="add-circle"></ion-icon></button>
  </div>


  <div class="container mt-4 profile-content">

    <h2>Bài Viết Mới Nhất</h2>
    <?php include "loadBlogsUser.php";?>


  </div>
  <div class="modal fade" id="taoMoi" tabindex="-1" aria-labelledby="postModal1Label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">

          <h5 class="modal-title" id="postModal1Label">Thông tin bài viết 1</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="personal.php" method="post" enctype="multipart/form-data">
        <div class="modal-body">
          <h5 class="mt-3">John Doe</h5>
          <textarea name="noiDungBaiViet" placeholder="Viết nội dung ở đây..."  id="" cols="30" rows="10"></textarea>
          <input type="file" name="fileAnh" id="">
          <button type="submit" name="btndang" class="btn btn-primary ml-2">Đăng</button>
          </form>
        </div>

      </div>
    </div>
  </div>
  </div>
  <!-- Bootstrap JS và Popper.js -->
  <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</body>

</html>