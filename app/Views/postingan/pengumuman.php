<?= $this->section('style') ?>
    <link rel="stylesheet" href="<?= base_url('css/pengumuman.css') ?>">
<?= $this->endSection() ?>

<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>
<div class="container mt-3">
    <h6 class="mb-3"><i class="bi bi-chevron-left"></i> Pengumuman</h6>

    <?php foreach ($pengumuman as $item): ?>
        <?php
            $type = esc($item['type']);
            $icon = [
                'point'   => 'bi-coin',
                'jawaban'=> 'bi-chat-dots',
                'sistem' => 'bi-info-circle'
            ][$type] ?? 'bi-bell';
        ?>
        <div class="announcement-card card-<?= $type ?> mb-3 p-3 rounded shadow-sm">
            <div class="d-flex align-items-center mb-2">
                <div class="tag tag-<?= $type ?> me-2"><?= ucfirst($type) ?></div>
                <div class="fw-semibold">
                    <i class="bi <?= $icon ?> me-1"></i>
                    <?= esc($item['title']) ?>
                </div>
            </div>
            <div class="text-muted small mb-1">
                Dikirim oleh: sistem • 
                <?= date('d M Y H:i', strtotime($item['created_at'])) ?>
            </div>
            <div><?= esc($item['content']) ?></div>
        </div>
    <?php endforeach; ?>

    <?php if (empty($pengumuman)): ?>
        <div class="alert alert-info mt-3">Belum ada pengumuman.</div>
    <?php endif; ?>
</div>
<?= $this->endSection() ?>
