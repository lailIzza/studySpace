<form class="d-flex mx-auto my-2 my-lg-0" action="<?= base_url('admin/search') ?>" method="get" style="width: 50%;">
    <input name="q" class="form-control rounded-start-pill" type="search" placeholder="Cari manajemen..." aria-label="Search Admin">
    <button class="btn btn-outline-secondary rounded-end-pill ms-2" type="submit">
        <i class="bx bx-search"></i>
    </button>
</form>

<ul class="navbar-nav me-auto mb-2 mb-lg-0">
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('users') ?>">Manajemen User</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('kategori') ?>">Tambah Kategori</a>
    </li>
</ul>