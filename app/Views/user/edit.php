<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

<div class="container mt-4">
    <h2>Edit Profil</h2>

    <?php if (session()->getFlashdata('validation')): ?>
        <div class="alert alert-danger">
            <?= session()->getFlashdata('validation')->listErrors() ?>
        </div>
    <?php endif ?>

    <form action="<?= base_url('user/update') ?>" method="post">
        <div class="mb-3">
            <label for="username">Username</label>
            <input type="text" name="username" class="form-control" value="<?= esc($user['username']) ?>">
        </div>
        <div class="mb-3">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" value="<?= esc($user['email']) ?>">
        </div>
        <div class="mb-3">
            <label for="gender">Jenis Kelamin</label>
            <select name="gender" class="form-control">
                <option value="male" <?= $user['gender'] === 'male' ? 'selected' : '' ?>>Laki-laki</option>
                <option value="female" <?= $user['gender'] === 'female' ? 'selected' : '' ?>>Perempuan</option>
            </select>
        </div>
        <form action="<?= base_url('user/update') ?>" method="post" enctype="multipart/form-data">
    <?= csrf_field() ?>

    <!-- input avatar -->

    <div class="mb-3">
        <label for="avatar">Ganti Avatar (jpg/png)</label>
        <input type="file" name="avatar" class="form-control">
    </div>

   



        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        <a href="<?= base_url('user/profil') ?>" class="btn btn-secondary ms-2">Batal</a>
    </form>
</div>

<?= $this->endSection() ?>
