<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Đăng nhập</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
      background-color: #f8f9fa;
    }
    .form-container {
      max-width: 400px;
      width: 100%;
      padding: 20px;
      border: 1px solid #ddd;
      border-radius: 8px;
      background-color: #fff;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
  </style>
</head>

<body>

  <div class="form-container">
    <h2 class="text-center mb-4">Đăng Nhập</h2>
    <form>
      <div class="mb-3">
        <label for="email" class="form-label">Tài khoản</label>
        <input type="text" class="form-control" id="email" required>
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Mật khẩu:</label>
        <input type="password" class="form-control" id="password" required>
      </div>
      <div class="mb-3">
        <strong>Bạn chưa có tài khoản ? <a href="">Đăng ký</a> tại đây. </strong>
      </div>
      <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="remember">
        <label class="form-check-label" for="remember">Ghi nhớ đăng nhập</label>
      </div>
      <button onclick="login()" class="btn btn-primary position-relative">Đăng Nhập</button>
    </form>
  </div>

  <!-- Bootstrap JS và Popper.js -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
  <script>
  </script>
</body>

</html>