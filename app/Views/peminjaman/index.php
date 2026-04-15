<?= $this->extend('layout/dashboard') ?>
<?= $this->section('content') ?>

<?php if (session()->get('role') == 'admin' && !empty($peminjam)) : ?>

<h4 class="fw-bold mt-5 mb-3">📋 Data Peminjam Mobil</h4>

<div class="card shadow-sm border-0">
    <div class="card-body p-0">

        <table class="table table-hover align-middle mb-0">
            <thead class="table-dark text-center">
                <tr>
                    <th>Nama</th>
                    <th>No Telepon</th>
                    <th>Alamat</th>
                    <th>Mobil</th>
                    <th>Status</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($peminjam as $t) : ?>
                <tr>
                    <td><?= esc($t['nama_lengkap']); ?></td>
                    <td><?= esc($t['no_telepon']); ?></td>
                    <td><?= esc($t['alamat']); ?></td>
                    <td><?= esc($t['nama_mobil']); ?></td>
                    <td class="text-center">
                        <?php if ($t['status'] == 'Disewa') : ?>
                            <span class="badge bg-danger">Disewa</span>
                        <?php else : ?>
                            <span class="badge bg-success"><?= esc($t['status']); ?></span>
                        <?php endif; ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>

        </table>

    </div>
</div>

<?php endif; ?>

<!-- PESAN KETIKA TIDAK ADA PEMBAYARAN -->
<?php if (empty($peminjam)) : ?>  
    <div class="alert alert-info text-center">
        Belum ada peminjam mobil yang terdaftar.
    </div>  
<?php endif; ?>

<?= $this->endSection() ?>