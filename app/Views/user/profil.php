<?= $this->extend('layouts/template') ?>
<?= $this->section('content') ?>

<div class="container mt-5">
    <div class="row">
        <link rel="stylesheet" href="css/style.css">
        <div class="col-md-4 text-center mb-4">
            <img src="<?= base_url('uploads/avatar/' . ($user['avatar'] ?? 'default.png')) ?>" class="img-fluid rounded-circle border border-3" width="150" alt="Avatar">
            <h4 class="mt-3"><?= esc($user['username']) ?></h4>
            <p class="text-muted"><?= esc($user['email']) ?></p>
        </div>

        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title mb-3">Informasi Profil</h5>
                    <table class="table table-borderless">
                        <tr>
                            <th scope="row">Jenis Kelamin</th>
                            <td>: <?= esc($user['jenis_kelamin']) ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Bergabung Sejak</th>
                            <td>: <?= date('d F Y', strtotime($user['created_at'])) ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Poin</th>
                            <td>: <?= $user['poin'] ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Pertanyaan Diajukan</th>
                            <td>: <?= $user['questions_asked'] ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Jawaban Diberikan</th>
                            <td>: <?= $user['answers_given'] ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Lencana Terbaru</th>
                            <td>: <?= esc($user['lencana'] ?? 'Belum ada') ?></td>
                        </tr>
                    </table>
                    <a href="<?= base_url('user/edit') ?>" class="btn btn-primary mt-3">Edit Profil</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->section('style') ?>
<?= $this->endSection() ?>
