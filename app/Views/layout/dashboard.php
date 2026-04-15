<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title><?= $title ?? 'Dashboard' ?></title>

    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="<?= base_url('css/styles.css') ?>" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">

<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <a class="navbar-brand ps-3" href="<?= base_url('/mobil') ?>">🚗 Rental Mobil</a>
    <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle">
        <i class="fas fa-bars"></i>
    </button>

    <ul class="navbar-nav ms-auto me-3 me-lg-4">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                <i class="fas fa-user fa-fw"></i>
            </a>
            <ul class="dropdown-menu dropdown-menu-end">
                <li>
                    <a class="dropdown-item" href="<?= base_url('/logout') ?>">
                        Logout
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</nav>

<div id="layoutSidenav">

    <!-- SIDEBAR -->
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark">
            <div class="sb-sidenav-menu">
                <div class="nav">

                    <div class="sb-sidenav-menu-heading">Core</div>

                    <a class="nav-link" href="<?= base_url('/mobil') ?>">
                        <div class="sb-nav-link-icon">
                            <i class="fas fa-car"></i>
                        </div>
                         Data Mobil
                    </a>

                    <a class="nav-link" href="/pembayaran-admin">
                        <div class="sb-nav-link-icon">
                            <i class="fas fa-receipt"></i>
                        </div>
                         Pembayaran User
                    </a>

                    <a class="nav-link" href="/peminjaman">
                        <div class="sb-nav-link-icon">
                            <i class="fas fa-user"></i>
                        </div>
                         Data Peminjam 
                    </a>

                    <a class="nav-link" href="<?= base_url('/transaksi') ?>">
                        <div class="sb-nav-link-icon">
                            <i class="fas fa-receipt"></i>
                        </div>
                        Transaksi
                    </a>

                </div>
            </div>

            <div class="sb-sidenav-footer">
                <div class="small">Logged in as:</div>
                <?= session()->get('username') ?>
            </div>
        </nav>
    </div>

    <!-- CONTENT -->
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4 mt-4">
                <?= $this->renderSection('content') ?>
            </div>
        </main>

        <footer class="py-4 bg-light mt-auto">
            <div class="container-fluid px-4">
                <div class="text-muted small">
                    &copy; <?= date('Y') ?> Rental Mobil System
                </div>
            </div>
        </footer>
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url('js/scripts.js') ?>"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js"></script>

</body>
</html>