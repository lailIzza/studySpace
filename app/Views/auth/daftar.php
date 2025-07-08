<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Daftar - StudySpace</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
  <link rel="stylesheet" href="<?= base_url('css/daftar.css') ?>">
</head>
<body>
  <div class="d-flex vh-100">
    <!-- Kiri-->
    <div class="left-side d-flex flex-column justify-content-start p-5" style="flex: 1; background-color: #d8c8f8; color: #2d1460; position: relative;">
      <h1 class="logo fw-bold fs-3 mb-4">StudySpace</h1>
      <h2 class="fw-bold fs-4 mb-2">Halo, Selamat datang!</h2>
      <p class="text-muted small mb-4" style="max-width: 300px;">Gabung dan mulai petualangan belajarmu bareng StudySpace!</p>
      <p class="small mb-2">Sudah punya akun?</p>
      <a href="<?= base_url('login') ?>" class="btn-outline-custom">Login</a>

      <div class="mt-auto align-self-end">
        <img src="<?= base_url('asset/ilustrasi_daftar.png') ?>" alt="Ilustrasi" class="img-fluid" />
      </div>
    </div>

    <!-- Kanan-->
    <div class="right-side d-flex align-items-center justify-content-center" style="flex: 2.55; background-color: #ffffff;">
      <div class="form-box bg-white p-5 rounded shadow" style="max-width: 600px; width: 100%;">
        <h2 class="text-center fw-bold mb-4" style="color: #2d1460;">Daftar</h2>
        <form action="<?= base_url('register/process') ?>" method="post">

          <div class="input-wrapper d-flex align-items-center bg-light p-2 rounded mb-3">
            <i class='bx bx-user me-2' style="color: #3f2d7c;"></i>
            <input type="text" name="username" class="form-control border-0 bg-transparent" placeholder="Username" />
          </div>

          <div class="input-wrapper d-flex align-items-center bg-light p-2 rounded mb-3">
            <i class='bx bx-envelope me-2' style="color: #3f2d7c;"></i>
            <input type="email" name="email" class="form-control border-0 bg-transparent" placeholder="E-mail" required/>
          </div>

          <div class="mb-3">
            <div class="input-wrapper d-flex align-items-center bg-light p-2 rounded">
              <i class='bx bx-user me-2' style="color: #3f2d7c;"></i>
              <select class="form-select border-0 bg-transparent shadow-none" style="font-size: 13px; font-weight: 500; color: #3f2d7c;" name="gender" required>
                <option value="" disabled selected>Pilih Jenis Kelamin</option>
                <option value="male">Laki-laki</option>
                <option value="female">Perempuan</option>
              </select>
            </div>
          </div>


          <div class="input-wrapper d-flex align-items-center bg-light p-2 rounded mb-4">
            <i class='bx bx-lock-alt me-2' style="color: #3f2d7c;"></i>
            <input type="password" name="password" class="form-control border-0 bg-transparent" placeholder="Password" />
          </div>

         <button type="submit" class="btn-filled-custom">Daftar</button>
        </form>
      </div>
    </div>
  </div>
</body>
</html>
