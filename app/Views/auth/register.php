<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>

<style>
    body {
        background: linear-gradient(135deg, #f4623a, #732009, #000000);
        min-height: 100vh;
    }

    .auth-wrapper {
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 40px 15px;
    }

    .auth-card {
        width: 100%;
        max-width: 500px;
        border-radius: 20px;
        backdrop-filter: blur(15px);
        background: rgba(255, 255, 255, 0.95);
        box-shadow: 0 20px 40px rgba(0,0,0,0.25);
        padding: 40px;
        animation: fadeIn 0.6s ease-in-out;
    }

    .auth-card h3 {
        font-weight: 700;
    }

    .btn-auth {
        border-radius: 10px;
        padding: 10px;
        font-weight: 600;
        transition: 0.3s;
    }

    .btn-auth:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(0,0,0,0.2);
    }

    textarea.form-control {
        resize: none;
    }

    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }
</style>

<div class="auth-wrapper">
    <div class="auth-card">

        <h3 class="text-center mb-4">📝 Create Your Account</h3>

        <form action="/register/process" method="post">
            <?= csrf_field(); ?>

            <!-- Username -->
            <div class="form-floating mb-3">
                <input class="form-control"
                       type="text"
                       name="username"
                       placeholder="Username"
                       required>
                <label>Username</label>
            </div>

            <!-- Nama Lengkap -->
            <div class="form-floating mb-3">
                <input class="form-control"
                       type="text"
                       name="nama_lengkap"
                       placeholder="Nama Lengkap"
                       required>
                <label>Nama Lengkap</label>
            </div>

            <!-- Alamat -->
            <div class="form-floating mb-3">
                <textarea class="form-control"
                          name="alamat"
                          placeholder="Alamat"
                          style="height: 100px"
                          required></textarea>
                <label>Alamat</label>
            </div>

            <!-- No Telepon -->
            <div class="form-floating mb-3">
                <input class="form-control"
                       type="text"
                       name="no_telepon"
                       placeholder="No Telepon"
                       required>
                <label>No Telepon</label>
            </div>

            <!-- Password -->
            <div class="form-floating mb-3">
                <input class="form-control"
                       type="password"
                       name="password"
                       placeholder="Password"
                       required>
                <label>Password</label>
            </div>

            <div class="d-grid mt-4">
                <button type="submit" class="btn btn-dark btn-auth">
                    Register
                </button>
            </div>

        </form>

        <div class="text-center mt-4">
            <small>
                Sudah punya akun?
                <a href="/login" class="fw-bold">Login</a>
            </small>
        </div>

    </div>
</div>

<?= $this->endSection() ?>