<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Daftar - StudySpace</title>
  <link rel="stylesheet" href="<?= base_url('css/daftar.css') ?>">
</head>
<body>
  <div class="login-container">
    <div class="left-side">
      <h1 class="logo">StudySpace</h1>
      <h2 class="welcome-text">Halo, Selamat datang!</h2>
      <p class="subtext">Gabung dan mulai petualangan belajarmu bareng StudySpace!</p>
      <p class="question">Sudah punya akun?</p>
      <a href="login.html" class="btn-outline">Login</a>
      <img src="https://www.apexwebdesigner.com/wp-content/uploads/2023/01/ExpertWebServices_02.png" class="illustration" alt="Ilustrasi" />
    </div>
    <div class="right-side">
      <div class="form-box">
        <h2 class="form-title">Daftar</h2>
        <form>
          <div class="input-wrapper">
            <span class="icon">👤</span>
            <input type="text" placeholder="Username" />
          </div>
          <div class="input-wrapper">
            <span class="icon">👤</span>
            <input type="email" placeholder="E-mail" />
          </div>
          <div class="input-wrapper">
            <span class="icon">🔒</span>
            <input type="password" placeholder="Password" />
          </div>
          <button type="submit" class="btn-filled">Daftar</button>
        </form>
      </div>
    </div>
  </div>
</body>
</html>
