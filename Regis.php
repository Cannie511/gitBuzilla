<?php
include "dangKy.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link đến Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Trang Web Của Bạn</title>
    <style>
        html,
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background-color: #f8f9fa;
        }

        .center-container {
            min-height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            /* Đặt độ mờ và màu của đổ bóng */
        }

        .custom-container {
            background-color: #fff;
            /* Màu nền của container */
            padding: 20px;
            border-radius: 8px;
            /* Làm tròn góc của container */
        }

        .form-container {
            min-width: 400px;
            width: 100%;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            background-color: #fff;
        }
    </style>
</head>

<body>
    <div class="form-container">
        <div class="center-container">
            <div class="custom-container">
                <div class="container mt-5">
                    <h2 class="mb-4">Đăng Ký</h2>
                    <form method="post" action="Regis.php">
                        <div class="form-group">
                            <label for="username">Tên Tài Khoản:</label>
                            <input type="text" class="form-control" id="username" name="username" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Mật Khẩu:</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <div class="form-group">
                            <label for="confirmPassword">Nhập Lại Mật Khẩu:</label>
                            <input type="password" class="form-control" id="confirmPassword" name="confirmPassword"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="dob">Ngày Sinh:</label>
                            <input type="date" class="form-control" id="dob" name="dob" required>
                        </div>
                        <div class="form-group d-flex">
                            <label>Giới Tính:</label>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" id="male" name="gender" value="male"
                                    required>
                                <label class="form-check-label" for="male">Nam</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" id="female" name="gender" value="female"
                                    required>
                                <label class="form-check-label" for="female">Nữ</label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary" name="btnDangKy">Đăng Ký</button>
                    </form>
                </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Link đến Bootstrap JS và Popper.js (đối với dropdown và các chức năng khác) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>

    </script>
</body>

</html>