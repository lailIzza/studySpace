<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

<div class="container mt-4">

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

    <!-- Breadcrumb
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-light px-3 py-2 rounded">
            <li class="breadcrumb-item"><a href="<?= base_url('/') ?>">Beranda</a></li>
            <li class="breadcrumb-item">
                <a href="<?= base_url('kategori/' . $post['subject_id']) ?>">
                    Kategori <?= esc($post['subject_name']) ?>
                </a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Detail Pertanyaan</li>
        </ol>
    </nav> -->

    <!-- Detail Postingan -->
    <div class="card shadow-sm mb-4">
        <div class="card-body">
            <!-- Avatar dan Info User -->
            <div class="d-flex align-items-center mb-3">
                <div style="width: 45px; height: 45px; border-radius: 50%; background-color: <?= esc($post['avatar_color'] ?? '#6c757d') ?>; color: white; display: flex; justify-content: center; align-items: center; font-weight: bold;" class="me-3">
                    <?= strtoupper(substr($post['username'], 0, 1)) ?>
                </div>
                <div>
                    <div class="fw-bold"><?= esc($post['username']) ?></div>
                    <div class="small text-muted">Ditanyakan pada <?= date('d F Y, H:i', strtotime($post['created_at'])) ?></div>
                </div>
            </div>

            <!-- Isi Pertanyaan -->
            <p class="mb-3"><?= nl2br(esc($post['content'])) ?></p>

            <!-- Gambar Jika Ada -->
            <?php if ($post['image']): ?>
                <img src="<?= base_url('upload/' . $post['image']) ?>" class="img-fluid rounded mb-3">
            <?php endif; ?>

            <hr>
            <div class="d-flex justify-content-between small text-muted">
                <div><i class="bi bi-coin"></i> Poin reward: <?= $post['reward_point'] ?> Poin</div>
                <!-- <div><i class="bi bi-eye"></i> 123 views</div> --> <!-- (optional view count) -->
            </div>
        </div>
    </div>

    <!-- Komentar -->
    <h5>Komentar / Jawaban (<?= count($jawaban) ?>)</h5>
    <!-- like -->
    <div class="mb-3">
        <?php if (session()->get('isLoggedIn')): ?>
            <!-- TOMBOL Like Jika Sudah Login -->
            <form action="<?= base_url('like/toggle') ?>" method="post" class="d-inline">
                <input type="hidden" name="post_id" value="<?= $post['id'] ?>">
                <button type="submit" class="btn btn-sm <?= $liked ? 'btn-danger' : 'btn-outline-danger' ?>">
                    ❤️ <?= $liked ? 'Disukai' : 'Suka' ?> (<?= $likeCount ?>)
                </button>
            </form>
        <?php else: ?>
            <!-- TAMPILAN Like Kalau Belum Login (gak ada tombol) -->
            <span class="text-muted">
                ❤️ <strong><?= $likeCount ?></strong> suka
                <span class="ms-2"><a href="<?= base_url('login') ?>">Login untuk menyukai</a></span>
            </span>
        <?php endif; ?>
    </div>

    <?php if (session()->get('isLoggedIn')): ?>
        <div class="card mt-4">
            <div class="card-body">
                <form action="<?= base_url('komentar/simpan') ?>" method="post">
                    <input type="hidden" name="post_id" value="<?= $post['id'] ?>">

                    <div class="mb-3">
                        <label for="content" class="form-label">Tulis Komentar:</label>
                        <textarea class="form-control" name="content" id="content" rows="3" required></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Kirim</button>
                </form>
            </div>
        </div>
    <?php else: ?>
        <div class="alert alert-warning mt-4">
            <a href="<?= base_url('login') ?>">Login</a> untuk menulis komentar.
        </div>
    <?php endif; ?>

    <!-- komentar pengguna lain -->
    <?php if (!empty($jawaban)): ?>
    <?php foreach ($jawaban as $row): ?>
        <div class="card mt-3">
            <div class="card-body d-flex">
                <!-- Avatar -->
                <div style="width: 40px; height: 40px; border-radius: 50%; background-color: <?= esc($row['avatar_color'] ?? '#6c757d') ?>; color: white; display: flex; justify-content: center; align-items: center; font-weight: bold;" class="me-3">
                    <?= strtoupper(substr($row['username'], 0, 1)) ?>
                </div>

                <!-- Isi komentar -->
                <div>
                    <div class="fw-semibold"><?= esc($row['username']) ?></div>
                    <div class="text-muted small mb-1"><?= date('d M Y, H:i', strtotime($row['created_at'])) ?></div>
                    <div><?= nl2br(esc($row['content'])) ?></div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
    <?php else: ?>
        <div class="alert alert-info mt-3">Belum ada komentar untuk pertanyaan ini.</div>
    <?php endif; ?>

</div>

<?= $this->endSection() ?>
