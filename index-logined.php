<?php 
session_start();
// echo  $_SESSION['ten_dang_nhap'];
include "BinhLuan.php";
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Trang Chủ</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            padding-top: 56px;
            /* Adjust the top padding to accommodate the fixed navbar */
        }

        .navbar {
            background-color: #4267B2;
            color: #fff;
        }

        .navbar-brand img {
            border-radius: 50%;
            width: 40px;
            height: 40px;
            object-fit: cover;
        }

        .user-card {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }

        .user-card img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            /* Làm tròn hình ảnh */
        }

        .user-card h5 {
            margin-left: 10px;
        }

        .post-container {
            cursor: pointer;
            max-width: 900px;
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

        .sidebar {
            background-color: #333;
            color: #fff;
            height: 100vh;
        }

        .sidebar a {
            color: #fff;
        }

        .modal-content img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
        }

        .navbar-form .form-control {
            width: 1000px;
        }

    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container-flex">
            <!-- Use an image for the navbar brand -->
            <a class="navbar-brand" href="personal.php"><img src="https://placekitten.com/40/40" alt="Logo"></a>
            <!-- Add other navigation links or elements here -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">IT BLog</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="Login.php">Đăng xuất</a>
                    </li>
                </ul>
                <!-- Search Form -->
                <form class="d-flex navbar-form">
                    <input class="form-control me-2" type="search" placeholder="Tìm kiếm" aria-label="Search">
                    <button class="btn btn-outline-light" type="submit"><ion-icon name="search"></ion-icon></button>
                </form>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container mt-4">
        <?php include "loadBlogs.php";?>
    </div>

    <!-- Modal 1 -->
    <div class="modal fade" id="postModal1" tabindex="-1" aria-labelledby="postModal1Label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="postModal1Label">Thông tin bài viết 1</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="https://placekitten.com/600/300" alt="Ảnh bài viết 1">
                    <div class="user-info mt-3">
                        <div class="user-card">
                            <img src="https://placekitten.com/40/40" alt="Hình ảnh người dùng">
                            <h5 class="ml-2">Nguyễn Thanh Nam</h5>
                        </div>
                    </div>
                    <p class="mt-3">Cuối tuần này nộp đồ án nha mấy ní</p>

                    <!-- Comments Section -->
                    <div class="comments-section">
                        <div class="comment">
                            <img src="https://placekitten.com/30/30" alt="Hình ảnh người dùng">
                            <strong>Người dùng 1</strong>
                            <p> Bài viết hay quá!</p>
                        </div>
                        <div class="comment">
                            <img src="https://placekitten.com/30/30" alt="Hình ảnh người dùng">
                            <strong>Người dùng 2</strong>
                            <p> Cảm ơn bạn đã chia sẻ!</p>
                        </div>
                    </div>

                    <!-- Write Comment Section -->
                    <div class="form-group d-flex">
                       

                        <form action="BinhLuan.php" method="post">
                        <input type="hidden" id="ma_input" name="ma" value="">
                        <input type="text" class="form-control mb-2" placeholder="Viết bình luận" name="comment">
                        <button class="btn btn-primary ml-2"><ion-icon name="send"></ion-icon></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 2 -->
    <div class="modal fade" id="postModal2" tabindex="-1" aria-labelledby="postModal2Label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="postModal2Label">Thông tin bài viết 2</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="https://placekitten.com/600/301" alt="Ảnh bài viết 2">
                    <div class="user-info mt-3">
                        <div class="user-card">
                            <img src="https://placekitten.com/40/40" alt="Hình ảnh người dùng">
                            <h5 class="ml-2">Nguyễn Văn Hoàng</h5>
                        </div>
                    </div>
                    <p class="mt-3">Buồn quá hôm nay mới rớt Mobile</p>

                    <!-- Comments Section -->
                    <div class="comments-section">
                        <div class="comment">
                            <img src="https://placekitten.com/30/30" alt="Hình ảnh người dùng">
                            <strong>Người dùng 3</strong>
                            <p>Bạn làm tốt quá!</p>
                        </div>
                        <div class="comment">
                            <img src="https://placekitten.com/30/30" alt="Hình ảnh người dùng">
                            <strong>Người dùng 4</strong>
                            <p> Hình ảnh đẹp quá!</p>
                        </div>
                    </div>

                    <!-- Write Comment Section -->
                    <div class="write-comment">
                        <div class="form-group d-flex">
                            <input type="text" class="form-control mb-2" placeholder="Viết bình luận" name="comment">
                            <button class="btn btn-primary ml-2"><ion-icon name="send"></ion-icon></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Bootstrap JS và Popper.js -->
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
    <script>
    document.addEventListener('DOMContentLoaded', function () {
        var postContainers = document.querySelectorAll('.post-container');
        var maInput = document.getElementById('ma_input');

        postContainers.forEach(function (container) {
            container.addEventListener('click', function () {
                var maValue = container.querySelector('img').dataset.ma;
                console.log('Clicked post ma:', maValue);

                
                maInput.value = maValue;

               
            });
        });
    });
</script>

</body>

</html>