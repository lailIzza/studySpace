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
                    <li>
                        <a href="<?= base_url('/') ?>" class="<?= !isset($selected) ? 'active' : '' ?>">Semua Mata Pelajaran</a>
                    </li>
                    <?php foreach ($subjects as $subject): ?>
                        <li>
                        <a href="<?= base_url('kategori/' . $subject['id']) ?>"
                            class="<?= (isset($selected) && $selected == $subject['name']) ? 'active' : '' ?>">
                            <?= $subject['name'] ?>
                        </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>

        <!-- postingan -->
        <div class="col-md-9">

            <!-- notif jika postingan berhasil dibuat -->
            <?php if (session()->getFlashdata('success')): ?>
                <div class="alert alert-success">
                    <?= session()->getFlashdata('success') ?>
                </div>
                <?php endif; ?>

                <?php if (session()->getFlashdata('error')): ?>
                <div class="alert alert-danger">
                    <?= session()->getFlashdata('error') ?>
                </div>
            <?php endif; ?>

            <!-- judul kontekstual -->
            <?php if (isset($selected)): ?>
                <h5 class="mb-3"><?= $mode === 'kategori' ? 'Kategori: ' : '' ?><?= $selected ?></h5>
            <?php endif; ?>

            <!-- notif jika kosong -->
            <?php if (empty($posts)): ?>
                <div class="alert alert-warning">
                    <?php if ($mode === 'kategori'): ?>
                        Tidak ada postingan dalam kategori <strong><?= $selected ?></strong>.
                    <?php elseif ($mode === 'search'): ?>
                        Tidak ada hasil untuk pencarian <strong><?= $selected ?></strong>.
                    <?php else: ?>
                        Tidak ada postingan ditemukan.
                    <?php endif; ?>
                </div>
            <?php endif; ?>`

            <?php foreach ($posts as $post): ?>
                <a href="<?= base_url('detail/' . $post['id']) ?>" class="text-decoration-none text-dark">
                    <div class="card mb-4 p-3 post-card-hoverable">
                        <div class="d-flex justify-content-between align-items-start">
                            <div class="d-flex align-items-center gap-2">
                                <div style="width: 40px; height: 40px; border-radius: 50%; background-color: <?= $post['avatar_color'] ?? '#6c757d' ?>; color: white; display: flex; justify-content: center; align-items: center; font-weight: bold;">
                                    <?= strtoupper(substr($post['username'], 0, 1)) ?>
                                </div>
                                <div>
                                    <div class="fw-semibold"><?= $post['username'] ?></div>
                                    <div class="text-muted small"><?= $post['subject_name'] ?></div>
                                </div>
                            </div>
                            <span class="badge bg-primary"><?= $post['reward_point'] ?> Poin</span>
                        </div>

                        <p class="mt-3 mb-2 text-decoration-underline"><?= esc($post['content']) ?></p>

                        <?php if (!empty($post['image'])): ?>
                            <div class="text-center mb-3">
                                <img src="<?= base_url('upload/' . $post['image']) ?>" class="img-fluid rounded soal-gambar" alt="gambar soal">
                            </div>
                        <?php endif; ?>

                        <hr>
                        <div class="d-flex gap-3 text-muted fs-6">
                            <span>❤️ 0</span>
                            <span>💬 0</span>
                        </div>
                    </div>
                </a>
            <?php endforeach; ?>

        </div>
        
    </div>
</div>
<?= $this->endSection()?>