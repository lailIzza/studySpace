<!-- <?= $this->extend('layouts/template') ?>
<?= $this->section('content') ?>

<div class="container mt-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-light px-3 py-2 rounded">
            <li class="breadcrumb-item"><a href="/">Beranda</a></li>
            <li class="breadcrumb-item"><a href="#">Kategori <?= esc($pertanyaan['nama_kategori']) ?></a></li>
            <li class="breadcrumb-item active" aria-current="page"><?= esc($pertanyaan['judul']) ?></li>
        </ol>
    </nav>

    <div class="card shadow-sm mb-4">
        <div class="card-body">
            <div class="d-flex align-items-center mb-3">
                <img src="<?= base_url('uploads/avatar/' . ($pertanyaan['avatar'] ?? 'default.png')) ?>" class="rounded-circle me-3" width="45">
                <div>
                    <div class="fw-bold"><?= esc($pertanyaan['username']) ?></div>
                    <div class="small text-muted">Ditanyakan pada <?= date('d F Y, H:i', strtotime($pertanyaan['created_at'])) ?></div>
                </div>
            </div>

            <h4><?= esc($pertanyaan['judul']) ?></h4>
            <p><?= nl2br(esc($pertanyaan['isi'])) ?></p>

            <?php if ($pertanyaan['gambar']) : ?>
                <img src="<?= base_url('uploads/gambar/' . $pertanyaan['gambar']) ?>" class="img-fluid rounded mt-2">
            <?php endif; ?>

            <hr>
            <div class="d-flex justify-content-between small text-muted">
                <div><i class="bi bi-eye"></i> <?= $pertanyaan['views'] ?> views</div>
                <div><i class="bi bi-coin"></i> Poin reward: <?= $pertanyaan['poin_reward'] ?></div>
            </div>
        </div>
    </div>

    <h5>Komentar / Jawaban (<?= count($jawaban) ?>)</h5>
    <?php foreach ($jawaban as $row) : ?>
        <div class="card mb-3">
            <div class="card-body d-flex">
                <img src="<?= base_url('uploads/avatar/' . ($row['avatar'] ?? 'default.png')) ?>" width="40" class="rounded-circle me-3">
                <div>
                    <div class="fw-semibold"><?= esc($row['username']) ?></div>
                    <div class="text-muted small mb-1"><?= date('d M Y, H:i', strtotime($row['created_at'])) ?></div>
                    <div><?= nl2br(esc($row['isi'])) ?></div>
                </div>
            </div>
        </div>
    <?php endforeach ?>
</div>

<?= $this->endSection() ?> -->
