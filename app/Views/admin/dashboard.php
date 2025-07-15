<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>
<div class="container mt-4">
    <h2 class="mb-4">Dashboard Admin</h2>

    <div class="row g-3">
        <div class="col-md-4">
            <div class="card border-0 shadow-sm bg-primary text-white">
                <div class="card-body">
                    <h5 class="card-title">Total User</h5>
                    <p class="card-text fs-2 fw-bold"><?= esc($totalUsers) ?></p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card border-0 shadow-sm bg-success text-white">
                <div class="card-body">
                    <h5 class="card-title">Pertanyaan Hari Ini</h5>
                    <p class="card-text fs-2 fw-bold"><?= esc($todayQuestions) ?></p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card border-0 shadow-sm bg-warning text-dark">
                <div class="card-body">
                    <h5 class="card-title">Jawaban Hari Ini</h5>
                    <p class="card-text fs-2 fw-bold"><?= esc($todayAnswers) ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
