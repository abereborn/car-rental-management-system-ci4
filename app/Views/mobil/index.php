<?= $this->extend('layout/dashboard') ?>
<?= $this->section('content') ?>

<div class="d-flex justify-content-between align-items-center mb-4">
    <h3 class="fw-bold">🚗 Data Mobil</h3>

    <div>
        <?php if (session()->get('role') == 'admin') : ?>
            <a href="/admin/create" class="btn btn-dark btn-sm">
                + Admin
            </a>
        <?php endif; ?>

        <a href="/mobil/create" class="btn btn-primary btn-sm">
            + Mobil
        </a>
    </div>
</div>

<!-- TABEL MOBIL -->
<div class="card shadow-sm border-0 mb-5">
    <div class="card-body p-0">

        <table class="table table-hover align-middle mb-0">
            <thead class="table-dark text-center">
                <tr>
                    <th>Nama</th>
                    <th>Merk</th>
                    <th>Plat</th>
                    <th>Harga/Hari</th>
                    <th>Status</th>
                    <th width="150">Aksi</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($mobil as $m): ?>
                <tr>
                    <td><?= esc($m['nama_mobil']) ?></td>
                    <td><?= esc($m['merk']) ?></td>
                    <td><?= esc($m['plat_nomor']) ?></td>
                    <td>
                        Rp <?= number_format($m['harga_per_hari'], 0, ',', '.'); ?>
                    </td>
                    <td class="text-center">
                        <?php if ($m['status'] == 'Tersedia') : ?>
                            <span class="badge bg-success">Tersedia</span>
                        <?php else : ?>
                            <span class="badge bg-danger">Disewa</span>
                        <?php endif; ?>
                    </td>
                    <td class="text-center">
                        <a href="/mobil/edit/<?= $m['id'] ?>"
                           class="btn btn-warning btn-sm">
                           Edit
                        </a>

                        <a href="/mobil/delete/<?= $m['id'] ?>"
                           onclick="return confirm('Yakin hapus?')"
                           class="btn btn-danger btn-sm">
                           Hapus
                        </a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>

        </table>

    </div>
</div>
</div>

<?= $this->endSection() ?>