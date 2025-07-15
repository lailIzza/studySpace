<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

<div class="container mt-4">
    <h2>Tambah Kategori Pelajaran</h2>

    <?php if (session()->getFlashdata('success')) : ?>
        <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
    <?php endif ?>
    <?php if (session()->getFlashdata('error')) : ?>
        <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
    <?php endif ?>


    <form action="<?= base_url('admin/addcategory') ?>" method="post" class="mb-4">
        <?= csrf_field() ?>
        <div class="input-group">
            <input type="text" name="name" class="form-control" placeholder="Nama kategori..." required>
            <button type="submit" class="btn btn-primary">Tambah</button>
        </div>
    </form>

    <h4>Kategori Tersedia:</h4>
    <ul class="list-group">
        <?php foreach ($subjects as $subject): ?>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <?= esc($subject['name']) ?>
                <a href="<?= base_url('admin/deletecategory/' . $subject['id']) ?>" 
                class="btn btn-sm btn-danger"
                onclick="return confirm('Yakin ingin menghapus kategori ini?')">
                Hapus
                </a>
            </li>
        <?php endforeach ?>
    </ul>

</div>

<?= $this->endSection() ?>
