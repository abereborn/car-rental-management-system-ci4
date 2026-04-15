<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>

<style>
    body {
        background: linear-gradient(135deg, #1e3c72, #2a5298);
        min-height: 100vh;
    }

    .payment-wrapper {
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 40px 15px;
    }

    .payment-card {
        width: 100%;
        max-width: 500px;
        border-radius: 20px;
        background: rgba(255,255,255,0.95);
        backdrop-filter: blur(10px);
        box-shadow: 0 25px 50px rgba(0,0,0,0.25);
        padding: 40px;
        animation: fadeIn 0.5s ease-in-out;
    }

    .total-box {
        background: #f8f9fa;
        border-radius: 15px;
        padding: 20px;
        text-align: center;
    }

    .total-box h2 {
        font-weight: 800;
        color: #28a745;
    }

    .btn-pay {
        border-radius: 12px;
        font-weight: 600;
        padding: 12px;
        transition: 0.3s;
    }

    .btn-pay:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.2);
    }

    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }
</style>

<div class="payment-wrapper">
    <div class="payment-card">

        <h4 class="text-center mb-4">💳 Konfirmasi Pembayaran</h4>

        <div class="total-box mb-4">
            <small class="text-muted">Total Pembayaran</small>
            <h2>
                Rp <?= number_format($transaksi['total_harga'], 0, ',', '.') ?>
            </h2>
        </div>

        <form action="<?= base_url('/pembayaran/store') ?>" method="post">
            <?= csrf_field(); ?>

            <input type="hidden" 
                   name="transaksi_id" 
                   value="<?= $transaksi['id']; ?>">

            <input type="hidden" 
                   name="jumlah_bayar" 
                   value="<?= $transaksi['total_harga']; ?>">

            <div class="mb-3">
                <label class="form-label fw-semibold">
                    Metode Pembayaran
                </label>

                <select name="metode" 
                        class="form-select form-select-lg rounded-3" 
                        required>
                    <option value="">-- Pilih Metode --</option>
                    <option value="cash">💵 Cash</option>
                    <option value="transfer">🏦 Transfer Bank</option>
                    <option value="qris">📱 QRIS</option>
                </select>
            </div>

            <div class="d-grid mt-4">
                <button type="submit" 
                        class="btn btn-success btn-lg btn-pay">
                    Bayar Sekarang
                </button>
            </div>

        </form>

        <div class="text-center text-muted small mt-4">
            Pastikan metode pembayaran sudah benar sebelum konfirmasi.
        </div>

    </div>
</div>

<?= $this->endSection() ?>