<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>

<style>
    body {
        background: linear-gradient(135deg, #000000, #732009, #f4623a);
        min-height: 100vh;
    }

    .auth-wrapper {
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .auth-card {
        width: 100%;
        max-width: 420px;
        border-radius: 20px;
        backdrop-filter: blur(15px);
        background: rgba(255, 255, 255, 0.95);
        box-shadow: 0 20px 40px rgba(0,0,0,0.2);
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

    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }
</style>

<div class="auth-wrapper">
    <div class="auth-card">

        <h3 class="text-center mb-4">🔐 Welcome Back</h3>

        <?php if (session()->getFlashdata('error')) : ?>
            <div class="alert alert-danger text-center">
                <?= session()->getFlashdata('error') ?>
            </div>
        <?php endif; ?>

        <form action="/login/process" method="post">
            <?= csrf_field(); ?>

            <div class="form-floating mb-3">
                <input class="form-control" 
                       type="text" 
                       name="username" 
                       placeholder="Username" required>
                <label>Username</label>
            </div>

            <div class="form-floating mb-3">
                <input class="form-control" 
                       type="password" 
                       name="password" 
                       placeholder="Password" required>
                <label>Password</label>
            </div>

            <div class="d-grid mt-4">
                <button type="submit" class="btn btn-dark btn-auth">
                    Login
                </button>
            </div>
        </form>

        <div class="text-center mt-4">
            <small>
                Belum punya akun? 
                <a href="/register" class="fw-bold">Register</a>
            </small>
        </div>

    </div>
</div>

<?= $this->endSection() ?>