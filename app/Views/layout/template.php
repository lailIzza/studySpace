<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css"
        rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT"
        crossorigin="anonymous">
    <title><?= $title ?? '' ?></title>
    <link rel="stylesheet" href="/css/template.css">
    <?= $this->renderSection('style') ?>
</head>

<body>

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-custom px-3 py-2">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold" href="/">StudySpace</a>

            <div class="collapse navbar-collapse" id="navbarContent">
                <!-- Tombol Cari -->
                <form class="d-flex mx-auto my-2 my-lg-0" style="width: 50%;">
                    <input class="form-control me-2 rounded-pill" type="search" placeholder="Cari pertanyaan..." aria-label="Search">
                </form>
                <!-- Menu -->
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="buat">Ajukan Pertanyaan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pengumuman">Pengumuman</a>
                    </li>
                </ul>
                <!-- Tombol -->
                <div class="d-flex gap-2">
                    <a href="daftar" class="btn btn-daftar">Daftar</a>
                    <a href="login" class="btn btn-login">Login</a>
                </div>
            </div>
        </div>
    </nav>


    <?= $this->renderSection('content') ?>


</body>

</html>