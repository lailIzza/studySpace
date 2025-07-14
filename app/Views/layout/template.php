<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" 
    crossorigin="anonymous">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <title><?= $title ?? '' ?></title>
    <link rel="stylesheet" href="/css/template.css">
    <?= $this->renderSection('style') ?>
</head>

<body>

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-custom px-3 py-2">
        <div class="container">
            <a class="navbar-brand fw-bold" href="/">StudySpace</a>

            <!-- tombol burger untuk responsif web -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" 
                aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-between" id="navbarContent">
                <form class="d-flex mx-auto my-2 my-lg-0" action="<?= base_url('search') ?>" method="get" style="width: 50%;">
                    <input name="q" class="form-control rounded-start-pill" type="search" placeholder="Cari pertanyaan..." aria-label="Search">
                    <button class="btn btn-outline-secondary rounded-end-pill ms-2" type="submit">
                        <i class="bx bx-search"></i>
                    </button>
                </form>
                
                <?php if (session()->get('isLoggedIn')): ?>
                <?php if (session()->get('role') === 'admin'): ?>
                    <!-- Menu khusus Admin -->
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('dashboard') ?>">Dashboard Admin</a>
                        </li>
                    </ul>
                <?php else: ?>
                    <!-- Menu untuk user biasa -->
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('buat') ?>">Ajukan Pertanyaan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('pengumuman') ?>">Pengumuman</a>
                        </li>
                    </ul>
                <?php endif; ?>

                <!-- Profile & Logout -->
                <div class="d-flex gap-2">
                    <a href="<?= base_url('profil') ?>" class="d-flex align-items-center text-decoration-none gap-2">
                        <div class="avatar-circle" style="background-color: <?= session()->get('avatar_color') ?? '#6c757d' ?>;">
                            <?= strtoupper(substr(session()->get('username'), 0, 1)) ?>
                        </div>
                        <span class="fw-semibold text-dark"><?= session()->get('username') ?></span>
                    </a>
                    <a href="<?= base_url('logout') ?>" class="btn btn-danger">Keluar</a>
                </div>
                <?php else: ?>
                    <!-- Belum login -->
                    <div class="d-flex gap-2">
                        <a href="<?= base_url('daftar') ?>" class="btn btn-daftar">Daftar</a>
                        <a href="<?= base_url('login') ?>" class="btn btn-login">Login</a>
                    </div>
                <?php endif; ?>

            </div>
        </div>
        </div>
    </nav>


    <?= $this->renderSection('content') ?>

    <!-- js boostrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>