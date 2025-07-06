<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Study Space - Pengumuman</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fc;
            font-family: 'Inter', sans-serif;
        }

        .navbar {
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.04);
            padding: 1rem 2rem;
        }

        .search-bar {
            max-width: 400px;
            border-radius: 12px;
            background-color: #f3f3f3;
            border: none;
        }

        .announcement-card {
            border-radius: 1rem;
            padding: 16px 20px;
            margin-bottom: 16px;
        }

        .tag {
            font-weight: 600;
            font-size: 12px;
            padding: 4px 12px;
            border-radius: 12px;
            display: inline-block;
            margin-bottom: 6px;
        }

        .tag-point {
            background-color: #d6c3f7;
            color: #4b2991;
        }

        .tag-jawaban {
            background-color: #c6e5f7;
            color: #115d8c;
        }

        .tag-sistem {
            background-color: #b2ebc2;
            color: #116644;
        }

        .card-point {
            background-color: #ebdafe;
        }

        .card-jawaban {
            background-color: #d6f0ff;
        }

        .card-sistem {
            background-color: #d8f9e5;
        }

        .footer-text {
            text-align: center;
            margin-top: 40px;
            color: #999;
            font-size: 14px;
        }

        .btn-outline-dark {
            border-radius: 8px;
        }

        .profile-icon {
            width: 32px;
            height: 32px;
            background-color: #f1f1f1;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid d-flex justify-content-between align-items-center">
            <a class="navbar-brand fw-bold" href="#">Study Space</a>
            <form class="d-none d-md-block mx-auto w-50">
                <input class="form-control search-bar" type="search" placeholder="Cari jawaban untuk pertanyaan apapun..." />
            </form>
            <div class="d-flex align-items-center gap-3">
                <a class="nav-link fw-medium" href="#">Ajukan Pertanyaan</a>
                <a class="nav-link fw-medium" href="#">Pengumuman</a>
                <button class="btn btn-outline-dark btn-sm">Keluar</button>
                <div class="profile-icon">
                    <i class="bi bi-person"></i>
                </div>
            </div>
        </div>
    </nav>

    <!-- Konten Pengumuman -->
    <div class="container mt-4">
        <h6 class="mb-3"><i class="bi bi-chevron-left"></i> Pengumuman</h6>

        <!-- Pengumuman 1 -->
        <div class="announcement-card card-point">
            <div class="tag tag-point">Poin</div>
            <div class="fw-semibold">Poin baru didapatkan!</div>
            <div>Selamat, poin sebesar 50 telah ditambahkan ke akun anda. Cek secara berkala dan dapatkan bonus tambahan yang menarik.</div>
        </div>

        <!-- Pengumuman Jawaban -->
        <div class="announcement-card card-jawaban">
            <div class="tag tag-jawaban">Jawaban</div>
            <div class="fw-semibold">Jawaban pertanyaan</div>
            <div>Selamat, pertanyaanmu telah dijawab oleh @XX_Bahrh9. Segera cek dan jangan lupa berikan apresiasi ke penjawab.</div>
        </div>

        <!-- Pengumuman 2 -->
        <div class="announcement-card card-point">
            <div class="tag tag-point">Poin</div>
            <div class="fw-semibold">Poin baru didapatkan!</div>
            <div>Selamat, poin sebesar 50 telah ditambahkan ke akun anda. Cek secara berkala dan dapatkan bonus tambahan yang menarik.</div>
        </div>

        <!-- Pengumuman 3 -->
        <div class="announcement-card card-point">
            <div class="tag tag-point">Poin</div>
            <div class="fw-semibold">Poin baru didapatkan!</div>
            <div>Selamat, poin sebesar 50 telah ditambahkan ke akun anda. Cek secara berkala dan dapatkan bonus tambahan yang menarik.</div>
        </div>

        <!-- Sistem -->
        <div class="announcement-card card-sistem">
            <div class="tag tag-sistem">Sistem</div>
            <div class="fw-semibold">Selamat datang di StudySpace!!</div>
            <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</div>
        </div>
    </div>

    <!-- Footer -->
    <div class="footer-text">C:/StudySpace2025</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>