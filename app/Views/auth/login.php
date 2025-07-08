<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Login - StudySpace</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
  <link rel="stylesheet" href="<?= base_url('css/login.css') ?>">
</head>
<body>
  <div class="d-flex vh-100">
    <!-- Kiri -->
    <div class="left-side d-flex flex-column justify-content-start p-5" style="flex: 1; background-color: #d8c8f8; color: #2d1460; position: relative;">
      <h1 class="logo fw-bold fs-3 mb-4">StudySpace</h1>
      <h2 class="fw-bold fs-4 mb-2">Selamat Datang Kembali!</h2>
      <p class="text-muted small mb-4" style="max-width: 300px;">Satu langkah ke depan buat masa depan cerah. Yuk login, dan jadi versi terbaik dari dirimu</p>
      <p class="small mb-2">Belum punya akun?</p>
      <a href="<?= base_url('daftar') ?>" class="btn-outline-custom">Daftar</a>

      <div class="mt-auto align-self-end">
        <img src="https://www.jotform.com/blog/wp-content/uploads/2025/04/image-64.png" alt="Ilustrasi" class="img-fluid" style="max-width: 320px;" />
      </div>
    </div>

    <!-- Kanan -->
    <div class="right-side d-flex align-items-center justify-content-center" style="flex: 2.55; background-color: #ffffff;">
      <div class="form-box bg-white p-5 rounded shadow" style="max-width: 600px; width: 100%;">
        <h2 class="text-center fw-bold mb-4" style="color: #2d1460;">Login</h2>
        <form>
          <div class="input-wrapper d-flex align-items-center bg-light p-2 rounded mb-3">
            <i class='bx bx-user me-2' style="color: #3f2d7c;"></i>
            <input type="text" class="form-control border-0 bg-transparent" placeholder="Username" required />
          </div>

          <div class="input-wrapper d-flex align-items-center bg-light p-2 rounded mb-4">
            <i class='bx bx-lock-alt me-2' style="color: #3f2d7c;"></i>
            <input type="password" class="form-control border-0 bg-transparent" placeholder="Password" required />
          </div>

          <button type="submit" class="btn-filled-custom">Login</button>
        </form>
      </div>
    </div>
  </div>
</body>
</html>
