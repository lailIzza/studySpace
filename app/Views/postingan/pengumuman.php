<?= $this->section('style') ?>
    <link rel="stylesheet" href="<?= base_url('css/pengumuman.css') ?>">
<?= $this->endSection() ?>

<?= $this->extend('layout/template')?>

<?= $this->section('content')?>
<div class="container mt-3">
    <h6 class="mb-3"><i class="bi bi-chevron-left"></i> Pengumuman</h6>

    <?php foreach ($pengumuman as $item): ?>
        <div class="announcement-card card-<?= esc($item['type']) ?>">
            <div class="tag tag-<?= esc($item['type']) ?>"><?= ucfirst($item['type']) ?></div>
            <div class="fw-semibold"><?= esc($item['title']) ?></div>
            <div class="text-muted small">Dikirim oleh: <?= esc($item['username']) ?></div>
            <div><?= esc($item['message']) ?></div>
        </div>

    <?php endforeach; ?>

    <?php if (empty($pengumuman)): ?>
        <div class="alert alert-info mt-3">Belum ada pengumuman.</div>
    <?php endif; ?>

</div>
<?= $this->endSection()?>