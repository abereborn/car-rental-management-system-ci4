<?= $this->extend('layout/dashboard') ?>
<?= $this->section('content') ?>

<div class="container py-4">
    <div class="card border-0 shadow-lg rounded-4 p-4">

        <h4 class="fw-bold mb-4">
            🚗 Tambah Mobil Baru
        </h4>

        <?php if (session()->getFlashdata('errors')) : ?>
            <div class="alert alert-danger rounded-3">
                <ul class="mb-0">
                    <?php foreach (session()->getFlashdata('errors') as $error) : ?>
                        <li><?= $error ?></li>
                    <?php endforeach ?>
                </ul>
            </div>
        <?php endif; ?>

        <form action="/mobil/store" method="post">
            <?= csrf_field(); ?>

            <div class="row g-3">
                <div class="col-md-6">
                    <label class="form-label">Nama Mobil</label>
                    <input type="text" name="nama_mobil"
                           class="form-control rounded-3"
                           value="<?= old('nama_mobil') ?>">
                </div>

                <div class="col-md-6">
                    <label class="form-label">Merk</label>
                    <input type="text" name="merk"
                           class="form-control rounded-3"
                           value="<?= old('merk') ?>">
                </div>

                <div class="col-md-6">
                    <label class="form-label">Plat Nomor</label>
                    <input type="text" name="plat_nomor"
                           class="form-control rounded-3"
                           value="<?= old('plat_nomor') ?>">
                </div>

                <div class="col-md-6">
                    <label class="form-label">Harga Per Hari</label>
                    <input type="number" name="harga_per_hari"
                           class="form-control rounded-3"
                           value="<?= old('harga_per_hari') ?>">
                </div>
            </div>

            <div class="d-flex justify-content-between mt-4">
                <a href="/mobil" class="btn btn-outline-secondary rounded-3">
                    ← Kembali
                </a>

                <button type="submit" class="btn btn-success rounded-3 px-4">
                    Simpan Mobil
                </button>
            </div>
        </form>

    </div>
</div>

<?= $this->endSection() ?>