<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Ajukan Pertanyaan - Study Space</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />

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

        .form-section {
            background-color: #ffffff;
            border-radius: 1rem;
            padding: 24px;
        }

        .form-control,
        .form-select {
            background-color: #eadcf8;
            border: none;
            border-radius: 10px;
            resize: none;
        }

        .form-control::placeholder {
            color: #6a6a6a;
        }

        .btn-outline-dark,
        .btn-dark {
            border-radius: 10px;
        }

        .image-upload {
            border: 2px dashed #ccc;
            border-radius: 12px;
            height: 140px;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #fafafa;
            overflow: hidden;
            position: relative;
        }

        .image-upload img {
            max-height: 100%;
            max-width: 100%;
        }

        .info-box {
            background-color: #ffffff;
            border-radius: 16px;
            box-shadow: 0px 0px 4px rgba(0, 0, 0, 0.1);
            padding: 24px;
            font-size: 20px;
        }

        .info-box strong {
            color: #7a27c8;
        }

        .footer-text {
            text-align: center;
            margin-top: 40px;
            color: #888;
            font-size: 14px;
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

        label {
            font-weight: 500;
            margin-bottom: 6px;
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

    <!-- Konten Form -->
    <div class="container mt-5">
        <h6 class="mb-4"><i class="bi bi-chevron-left"></i> Ajukan pertanyaan</h6>
        <div class="row">
            <!-- Formulir -->
            <div class="col-md-8">
                <div class="form-section">
                    <form enctype="multipart/form-data" id="formPertanyaan">

                        <div class="mb-3">
                            <label for="pertanyaan">Pertanyaan :</label>
                            <textarea id="pertanyaan" rows="4" class="form-control" placeholder="Tanyakan pertanyaan apapun...."></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="kategori">Kategori Mata Pelajaran :</label>
                            <select id="kategori" class="form-select">
                                <option selected disabled>Pilih mata pelajaran</option>
                                <option>Matematika</option>
                                <option>Bahasa Indonesia</option>
                                <option>IPA</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label>Tambah Gambar :</label><br>
                            <input type="file" id="gambar" accept="image/*" class="d-none" onchange="previewGambar(event)">
                            <button type="button" class="btn btn-light border mb-2" onclick="document.getElementById('gambar').click()">Pilih gambar</button>

                            <!-- Area preview -->
                            <div class="image-upload" id="preview-area">
                                <i class="bi bi-image fs-1 text-secondary" id="icon-placeholder"></i>
                                <img id="img-preview" src="#" alt="Preview" class="img-fluid rounded d-none" />
                            </div>
                        </div>

                        <div class="mb-4">
                            <label for="reward">Poin Reward</label>
                            <select id="reward" class="form-select">
                                <option>25 poin</option>
                                <option>50 poin</option>
                                <option>100 poin</option>
                            </select>
                        </div>

                        <div class="d-flex gap-2">
                            <button type="submit" class="btn btn-dark">Tanyakan pertanyaanmu</button>
                            <button type="reset" class="btn btn-secondary">Batal</button>
                        </div>

                    </form>
                </div>
            </div>

            <!-- Info Box -->
            <div class="col-md-4 mt-4 mt-md-0">
                <div class="info-box">
                    <strong>80%</strong> jawaban <br> diberikan dalam <br> <strong>10 menit</strong>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="footer-text">Cr.@StudySpace2025</div>

    <!-- Script Bootstrap & Preview -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function previewGambar(event) {
            const input = event.target;
            const file = input.files[0];
            const previewImg = document.getElementById('img-preview');
            const placeholderIcon = document.getElementById('icon-placeholder');

            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    previewImg.src = e.target.result;
                    previewImg.classList.remove('d-none');
                    placeholderIcon.classList.add('d-none');
                };
                reader.readAsDataURL(file);
            }
        }
    </script>
</body>

</html>