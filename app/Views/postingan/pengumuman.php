<?= $this->section('style') ?>
    <link rel="stylesheet" href="<?= base_url('css/pengumuman.css') ?>">
<?= $this->endSection() ?>

<?= $this->extend('layout/template')?>

<?= $this->section('content')?>
<div class="container mt-3">
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
<?= $this->endSection()?>