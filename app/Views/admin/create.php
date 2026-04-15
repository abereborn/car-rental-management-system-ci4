<?= $this->extend('layout/dashboard') ?>
<?= $this->section('content') ?>

<div class="row justify-content-center">
    <div class="col-md-6">

        <div class="card shadow border-0">
            <div class="card-body">

                <h4 class="mb-4 fw-bold text-center">
                    👤 Tambah Admin
                </h4>

                <?php if (session()->getFlashdata('errors')) : ?>
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            <?php foreach (session()->getFlashdata('errors') as $error) : ?>
                                <li><?= $error ?></li>
                            <?php endforeach ?>
                        </ul>
                    </div>
                <?php endif; ?>

                <form action="/admin/store" method="post">
                    <?= csrf_field(); ?>

                    <div class="mb-3">
                        <label class="form-label">Nama Lengkap</label>
                        <input type="text" 
                               name="nama_lengkap"
                               class="form-control"
                               value="<?= old('nama_lengkap') ?>"
                               required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Username</label>
                        <input type="text" 
                               name="username" 
                               class="form-control"
                               value="<?= old('username') ?>"
                               required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" 
                               name="password" 
                               class="form-control"
                               required>
                    </div>

                    <div class="d-flex justify-content-between">
                        <a href="/admin" class="btn btn-secondary">
                            ← Kembali
                        </a>

                        <button type="submit" class="btn btn-success">
                            Simpan Admin
                        </button>
                    </div>

                </form>

            </div>
        </div>

    </div>
</div>

<?= $this->endSection() ?>