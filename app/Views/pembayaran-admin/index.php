<?= $this->extend('layout/dashboard') ?>
<?= $this->section('content') ?>

<!-- DAFTAR PEMBAYARAN (KHUSUS ADMIN) -->
<?php if (session()->get('role') == 'admin' && !empty($pembayaran)) : ?>

<h4 class="fw-bold mb-3">💳 Daftar Pembayaran User</h4>

<div class="card shadow-sm border-0">
    <div class="card-body p-0">

        <table class="table table-hover align-middle mb-0">
            <thead class="table-dark text-center">
                <tr>
                    <th>ID Transaksi</th>
                    <th>Mobil</th>
                    <th>Metode</th>
                    <th>Jumlah</th>
                    <th>Status</th>
                    <th>Tanggal Bayar</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($pembayaran as $p) : ?>
                <tr>
                    <td><?= esc($p['transaksi_id']); ?></td>
                    <td><?= esc($p['nama_mobil']); ?></td>
                    <td><?= esc(ucfirst($p['metode'])); ?></td>
                    <td>
                        Rp <?= number_format($p['jumlah_bayar'], 0, ',', '.') ?>
                    </td>
                    <td class="text-center">
                        <span class="badge bg-success">
                            <?= esc($p['status']); ?>
                        </span>
                    </td>
                    <td><?= esc($p['tanggal_bayar']); ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>

        </table>

    </div>
</div>

<?php endif; ?>

<!-- PESAN KETIKA TIDAK ADA PEMBAYARAN -->
<?php if (empty($pembayaran)) : ?>  
    <div class="alert alert-info text-center">
        Belum ada pembayaran yang dilakukan.
    </div>  
<?php endif; ?>

<?= $this->endSection() ?>
