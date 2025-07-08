<?= $this->section('style') ?>
    <link rel="stylesheet" href="<?= base_url('css/beranda.css') ?>">
<?= $this->endSection() ?>

<?= $this->extend('layout/template')?>

<?= $this->section('content')?>
<div class="container mt-4">
    <div class="row">
        <!-- sidebar -->
        <div class="col-md-3 mb-4">
            <div class="card p-3">
                <h6 class="fw-bold mb-3">Kategori</h6>
                <ul class="list-unstyled sidebar-subjects">
                    <li>Semua Mata Pelajaran</li>
                    <li>📘 Matematika</li>
                    <li>🧬 Biologi</li>
                    <li>📚 IPS</li>
                    <li>⚖️ PPKN</li>
                    <li>🏺 Sejarah</li>
                    <li>🧪 Fisika</li>
                    <li>🧠 Antropologi</li>
                    <li>🎨 Seni</li>
                    <li>📝 Bahasa Indonesia</li>
                    <li>🗣️ Bahasa Inggris</li>
                    <li>🌐 Bahasa Asing</li>
                    <li>☪️ PAI</li>
                </ul>
            </div>
        </div>

        <!-- postingan -->
        <div class="col-md-9">
            <a href="detail" class="text-decoration-none text-dark">
                <div class="card mb-4 p-3 post-card-hoverable">
                    <div class="d-flex justify-content-between align-items-start">
                        <div class="d-flex align-items-center gap-2">
                            <img src="<?= base_url('asset/no-image.png') ?>" alt="avatar" class="rounded-circle" width="40" height="40">
                            <div>
                                <div class="fw-semibold">Amanda</div>
                                <div class="text-muted small">Matematika</div>
                            </div>
                        </div>
                        <span class="badge bg-primary">25 Poin</span>
                    </div>

                    <!-- Isi Postingan -->
                    <p class="mt-3 mb-2 text-decoration-underline">Ini tes satu dua</p>
                    <hr>

                    <!-- Reaksi -->
                    <div class="d-flex gap-3 text-muted fs-6">
                        <span>❤️ 12</span>
                        <span>💬 6</span>
                    </div>
                </div>
            </a>

            <a href="detail" class="text-decoration-none text-dark">
                <div class="card mb-4 p-3 post-card-hoverable">
                    <div class="d-flex justify-content-between align-items-start">
                        <div class="d-flex align-items-center gap-2">
                            <img src="<?= base_url('asset/no-image.png') ?>" alt="avatar" class="rounded-circle" width="40" height="40">
                            <div>
                                <div class="fw-semibold">Amanda</div>
                                <div class="text-muted small">Matematika</div>
                            </div>
                        </div>
                        <span class="badge bg-primary">25 Poin</span>
                    </div>

                    <!-- Isi Postingan -->
                    <p class="mt-3 mb-2 text-decoration-underline">Ini tes satu dua</p>
                    <div class="text-center mb-3">
                        <img src="<?= base_url('asset/no-image.png') ?>" class="img-fluid rounded soal-gambar" alt="gambar soal">
                    </div>
                    <hr>

                    <!-- Reaksi -->
                    <div class="d-flex gap-3 text-muted fs-6">
                        <span>❤️ 12</span>
                        <span>💬 6</span>
                    </div>
                </div>
            </a>

        </div>
        
    </div>
</div>
<?= $this->endSection()?>