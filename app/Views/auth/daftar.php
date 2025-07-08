<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - StudySpace</title>
  <link rel="stylesheet" href="<?= base_url('css/login.css') ?>">
</head>
<body>
  <div class="login-container">
    <div class="left-side">
      <h1 class="logo">StudySpace</h1>
      <h2 class="welcome-text">Selamat datang Kembali !</h2>
      <p class="subtext">Akses semua fitur keren setelah login!</p>
      <p class="question">Belum punya akun?</p>
      <a href="register.html" class="btn-outline">Daftar</a>
      <img src="https://www.jotform.com/blog/wp-content/uploads/2025/04/image-64.png" class="illustration" alt="Ilustrasi">
    </div>
    <div class="right-side">
      <div class="form-box">
        <h2 class="form-title">Login</h2>
        <form>
          <div class="input-wrapper">
            <span class="icon">👤</span>
            <input type="text" placeholder="Username">
          </div>
          <div class="input-wrapper">
            <span class="icon">🔒</span>
            <input type="password" placeholder="Password">
          </div>
          <button type="submit" class="btn-filled">Login</button>
        </form>
      </div>
    </div>
  </div>
</body>
</html>
