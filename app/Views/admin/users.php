<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

<div class="container mt-4">
    <h2>Manajemen User</h2>

    <?php if (session()->getFlashdata('success')) : ?>
        <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
    <?php endif ?>

    <table class="table table-striped table-bordered mt-3">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Username</th>
                <th>Email</th>
                <th>Gender</th>
                <th>Role</th>
                <th>Points</th>
                <th>Daftar Sejak</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; foreach ($users as $user): ?>
                <tr>
                    <td><?= $i++ ?></td>
                    <td><?= esc($user['username']) ?></td>
                    <td><?= esc($user['email']) ?></td>
                    <td><?= esc($user['gender']) ?></td>
                    <td><?= esc($user['role']) ?></td>
                    <td><?= esc($user['points']) ?></td>
                    <td><?= date('d M Y', strtotime($user['created_at'])) ?></td>
                    <td>
                        <?php if ($user['role'] !== 'admin'): ?>
                            <a href="<?= base_url('user/delete/' . $user['id']) ?>"
                               class="btn btn-sm btn-danger"
                               onclick="return confirm('Yakin mau hapus user ini?')">
                               Hapus
                            </a>
                        <?php else: ?>
                            <span class="text-muted">Admin</span>
                        <?php endif; ?>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>

<?= $this->endSection() ?>
