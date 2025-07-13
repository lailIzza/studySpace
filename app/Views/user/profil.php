<?= $this->extend('layout/template') ?>
<?= $this->section('style') ?>
<link rel="stylesheet" href="<?= base_url('css/profil.css') ?>">
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="container mt-5">
    <?php if (session()->getFlashdata('success')): ?>
        <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
    <?php endif ?>


    <div class="row">
        <!-- Avatar Sidebar -->
        <div class="col-md-4 text-center mb-4">
            <img src="<?= base_url('uploads/avatar/' . ($user['avatar'] ?? 'default.png')) ?>" alt="Avatar"
                class="img-fluid rounded-circle border border-3" width="150">
            <h4 class="mt-3"><?= esc($user['username']) ?></h4>
            <p class="text-muted"><?= esc($user['email']) ?></p>
        </div>

        <!-- Informasi Detail -->
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title mb-3">Informasi Profil</h5>
                    <table class="table table-borderless">
                        <tr>
                            <th scope="row">Jenis Kelamin</th>
                            <td>: <?= esc($user['gender']) ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Bergabung Sejak</th>
                            <td>: <?= date('d F Y', strtotime($user['created_at'])) ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Poin</th>
                            <td>: <?= esc($user['points']) ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Pertanyaan Diajukan</th>
                            <td>: <?= $user['post_asked'] ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Jawaban Diberikan</th>
                            <td>: <?= $user['comments'] ?? '0' ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Lencana Terbaru</th>
                            <td>: <?= esc($user['lencana'] ?? 'Belum ada') ?></td>
                        </tr>

                    </table>

                    <a href="<?= base_url('user/edit') ?>" class="btn btn-primary mt-3">Edit Profil</a>
                    <a href="<?= base_url('logout') ?>" class="btn btn-outline-danger mt-3 ms-2">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Pengumuman -->
    <?php if (!empty($announcements)): ?>
        <div class="mt-4">
            <h5>Pengumuman untuk Anda</h5>
            <ul class="list-group">
                <?php foreach ($announcements as $announce): ?>
                    <li class="list-group-item">
                        <strong><?= esc($announce['title']) ?></strong><br>
                        <small class="text-muted"><?= date('d M Y, H:i', strtotime($announce['created_at'])) ?></small>
                        <p class="mb-1"><?= esc($announce['content']) ?></p>
                    </li>
                <?php endforeach ?>
            </ul>
        </div>
    <?php endif ?>
</div>
<?= $this->endSection() ?>