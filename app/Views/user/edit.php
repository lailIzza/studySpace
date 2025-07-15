<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

<div class="container mt-4">
    <h2>Edit Profil</h2>


    <form action="/user/update" method="post" enctype="multipart/form-data">
    <?= csrf_field() ?>

    <div class="mb-3">
        <label>Username</label>
        <input type="text" name="username" value="<?= esc($user['username']) ?>" required class="form-control">
    </div>

    <div class="mb-3">
        <label>Email</label>
        <input type="email" name="email" value="<?= esc($user['email']) ?>" required class="form-control">
    </div>

    <div class="mb-3">
        <label>Gender</label>
        <select name="gender" class="form-control">
            <option value="male" <?= $user['gender'] == 'male' ? 'selected' : '' ?>>Laki-laki</option>
            <option value="female" <?= $user['gender'] == 'female' ? 'selected' : '' ?>>Perempuan</option>
        </select>
    </div>

    <div class="mb-3">
        <label>Avatar</label><br>
        
        <!-- PREVIEW GAMBAR -->
        <img id="avatar-preview" src="<?= base_url('img/avatar/' . esc($user['avatar'])) ?>" alt="Avatar" width="120" class="img-thumbnail mb-2"><br>

        <input type="file" name="avatar" accept="image/*" onchange="previewAvatar(event)" class="form-control">
    </div>
        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        <a href="<?= base_url('user/profil') ?>" class="btn btn-secondary ms-2">Batal</a>
    </form>
</div>

<?= $this->endSection() ?>
