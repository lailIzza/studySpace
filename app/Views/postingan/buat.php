<?= $this->section('style') ?>
    <link rel="stylesheet" href="<?= base_url('css/buat.css') ?>">
<?= $this->endSection() ?>

<?= $this->extend('layout/template')?>

<?= $this->section('content')?>
<div class="container mt-3">
    <h6 class="mb-4"><i class="bi bi-chevron-left"></i> Ajukan pertanyaan</h5>
    <div class="row">
        <!-- Formulir -->
        <div class="col-md-8">
            <div class="form-section">
                <form enctype="multipart/form-data" id="formPertanyaan">

                    <div class="mb-3">
                        <label for="pertanyaan">Pertanyaan :</label>
                        <textarea id="pertanyaan" rows="4" class="form-control" placeholder="Tanyakan pertanyaan apapun...."></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="kategori">Kategori Mata Pelajaran :</label>
                        <select id="kategori" class="form-select">
                            <option selected disabled>Pilih mata pelajaran</option>
                            <option>Matematika</option>
                            <option>Bahasa Indonesia</option>
                            <option>IPA</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label>Tambah Gambar :</label><br>
                        <input type="file" id="gambar" accept="image/*" class="d-none" onchange="previewGambar(event)">
                        <button type="button" class="btn btn-light border mb-2" onclick="document.getElementById('gambar').click()">Pilih gambar</button>

                        <!-- Area preview -->
                        <div class="image-upload" id="preview-area">
                            <i class="bi bi-image fs-1 text-secondary" id="icon-placeholder"></i>
                            <img id="img-preview" src="#" alt="Preview" class="img-fluid rounded d-none" />
                        </div>
                    </div>

                    <div class="mb-4">
                        <label for="reward">Poin Reward</label>
                        <select id="reward" class="form-select">
                            <option>25 poin</option>
                            <option>50 poin</option>
                            <option>100 poin</option>
                        </select>
                    </div>

                    <div class="d-flex gap-2">
                        <button type="submit" class="btn btn-dark">Tanyakan pertanyaanmu</button>
                        <button type="reset" class="btn btn-secondary">Batal</button>
                    </div>

                </form>
            </div>
        </div>

        <!-- Info Box -->
        <div class="col-md-4 mt-4 mt-md-0">
            <div class="info-box">
                <strong>80%</strong> jawaban <br> diberikan dalam <br> <strong>10 menit</strong>
            </div>
        </div>
    </div>
</div>

<script>
    function previewGambar(event) {
        const input = event.target;
        const file = input.files[0];
        const previewImg = document.getElementById('img-preview');
        const placeholderIcon = document.getElementById('icon-placeholder');

        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                previewImg.src = e.target.result;
                previewImg.classList.remove('d-none');
                placeholderIcon.classList.add('d-none');
            };
                reader.readAsDataURL(file);
        }
    }
</script>
<?= $this->endSection()?>