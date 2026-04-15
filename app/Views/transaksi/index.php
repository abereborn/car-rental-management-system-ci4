<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>LUXURY - Car Rental</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap Icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- SimpleLightbox plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="<?= base_url('css/styles.css') ?>" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#page-top">Car Rental</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto my-2 my-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                        <li class="nav-item"><a class="nav-link" href="#picture">Picture</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Transactions</a></li>
                        <!-- Logged in as: -->
                        <?php if (session()->get('logged_in')) : ?>
                        <li class="nav-item">
                            <span class="nav-link">
                                <span class="badge bg-primary">
                                    👤 <?= session()->get('nama_lengkap'); ?>
                                </span>
                            </span>
                        </li>
                        <!-- LOGOUT -->
                        <li class="nav-item">
                            <a class="nav-link text-danger font-weight-bold" href="/logout" title="Logout">
                                <i class="bi bi-power fs-5" ></i>
                            </a>
                        </li>
                        <?php endif; ?>
                         
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container px-4 px-lg-5 h-100">
                <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-8 align-self-end">
                        <h1 class="text-white font-weight-bold">Your Favorite Place for Car Rental</h1>
                        <hr class="divider" />
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                        <p class="text-white-75 mb-5">Find the perfect car for your next adventure with our wide selection of rental vehicles! Whether you're looking for a sleek sedan, a spacious SUV, or a stylish convertible, we have the ideal car to suit your needs and make your journey unforgettable.
                        </p>
                        <a class="btn btn-primary btn-xl" href="#about">Get Started!</a>
                    </div>
                </div>
            </div>
        </header>
        <!-- About-->
        <section class="page-section bg-primary" id="about">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="text-white mt-0">We've got what you need!</h2>
                        <hr class="divider divider-light" />
                        <p class="text-white-75 mb-4">Our car rental service offers a wide variety of vehicles to meet all your transportation needs. From compact cars to luxury SUVs, we have the perfect vehicle for every occasion.</p>
                        <a class="btn btn-light btn-xl" href="#services">Learn More</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container px-4 px-lg-5">
                <h2 class="text-center mt-0">At Your Service</h2>
                <hr class="divider" />
                <div class="row gx-4 gx-lg-5">
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi-gem fs-1 text-primary"></i></div>
                            <h3 class="h4 mb-2">Quality Vehicles</h3>
                            <p class="text-muted mb-0">Our vehicles are carefully selected and maintained to ensure your safety and comfort.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi-laptop fs-1 text-primary"></i></div>
                            <h3 class="h4 mb-2">Up to Date</h3>
                            <p class="text-muted mb-0">All our vehicles are regularly updated with the latest technology and features.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi-globe fs-1 text-primary"></i></div>
                            <h3 class="h4 mb-2">Easy to Use</h3>
                            <p class="text-muted mb-0">Our user-friendly interface makes booking and managing your car rental experience simple and hassle-free.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi-heart fs-1 text-primary"></i></div>
                            <h3 class="h4 mb-2">Made with Love</h3>
                            <p class="text-muted mb-0">We care about our customers and strive to provide the best car rental experience possible.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Picture-->
        <div id="picture">
            <div class="container-fluid p-0">
                <div class="row g-0">
                    <div class="col-lg-4 col-sm-6">
                        <a class="picture-box"
                        title="Project Name">
                            <img class="img-fluid"
                                src="<?= base_url('assets/img/portfolio/thumbnails/1.jpg') ?>"
                                alt="..." />

                            <div class="picture-box-caption">
                                <div class="project-category text-white-50">Sports Car</div>
                                <div class="project-name">Toyota GR86</div>
                            </div>

                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="picture-box" title="Project Name">
                            <img class="img-fluid" src="<?= base_url('assets/img/portfolio/thumbnails/2.jpg') ?>" alt="..." />
                            <div class="picture-box-caption">
                                <div class="project-category text-white-50">Hypercar</div>
                                <div class="project-name">Koenigsegg Jesko</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="picture-box" title="Project Name">
                            <img class="img-fluid" src="<?= base_url('assets/img/portfolio/thumbnails/3.jpg') ?>" alt="..." />
                            <div class="picture-box-caption">
                                <div class="project-category text-white-50">Luxury Performance SUV</div>
                                <div class="project-name">BMW XM</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="picture-box" title="Project Name">
                            <img class="img-fluid" src="<?= base_url('assets/img/portfolio/thumbnails/4.jpg') ?>" alt="..." />
                            <div class="picture-box-caption">
                                <div class="project-category text-white-50">Supercar</div>
                                <div class="project-name">Lamborghini Aventador SVJ</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="picture-box" title="Project Name">
                            <img class="img-fluid" src="<?= base_url('assets/img/portfolio/thumbnails/5.jpg') ?>" alt="..." />
                            <div class="picture-box-caption">
                                <div class="project-category text-white-50">Off-Road SUV</div>
                                <div class="project-name">Jeep Wrangler Rubicon</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="picture-box" title="Project Name">
                            <img class="img-fluid" src="<?= base_url('assets/img/portfolio/thumbnails/6.jpg') ?>" alt="..." />
                            <div class="picture-box-caption p-3">
                                <div class="project-category text-white-50">Classic Sports Coupe</div>
                                <div class="project-name">Nissan Skyline 2000GT-R</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Transactions -->
        <section class="page-section" id="contact">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6 text-center">
                        <h2 class="mt-0">Let's Get Transactions!</h2>
                        <hr class="divider" />
                        <p class="text-muted mb-5">Fill out the form below to get started with your transaction! <br>
                        and if you have any questions, feel free to contact us. We're here to help you with all your car rental needs and ensure you have a smooth and enjoyable experience.
                    </p>
                    </div>
                </div>
                    <div class="row gx-4 gx-lg-5 justify-content-center mb-5">
                        <div class="col-lg-10">

                            <!-- FORM TRANSAKSI -->
                            <form action="/transaksi/store" method="post">

                                <!-- PILIH MOBIL -->
                                <div class="form-floating mb-3">
                                    <select name="mobil_id" class="form-control" required>
                                        <option value="">Click to Select Car</option>
                                        <?php foreach ($mobil as $m) : ?>
                                            <option value="<?= $m['id']; ?>">
                                                <?= $m['nama_mobil']; ?> 
                                                (Rp <?= number_format($m['harga_per_hari'], 0, ',', '.') ?>/hari)
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                    <label>Choose Car</label>
                                </div>

                                <!-- TANGGAL SEWA -->
                                <div class="form-floating mb-3">
                                    <input type="date" name="tanggal_sewa" class="form-control" required>
                                    <label>Rental Date</label>
                                </div>

                                <!-- TANGGAL KEMBALI -->
                                <div class="form-floating mb-3">
                                    <input type="date" name="tanggal_kembali" class="form-control" required>
                                    <label>Return Date</label>
                                </div>

                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary btn-xl">
                                        Rent Now!
                                    </button>
                                </div>

                            </form>

                            <!-- DAFTAR TRANSAKSI -->
                            <div class="row gx-6 gx-lg-5 justify-content-center mt-5">
                                <div class="col-lg-10">
                                    <div class="card shadow">
                                        <div class="card-header bg-dark text-white">
                                            Your Transactions
                                        </div>
                                        <div class="card-body">
                                            <table class="table table-bordered table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Rental Date</th>
                                                        <th>Return Date</th>
                                                        <th>Total Price</th>
                                                        <th>Status</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($transaksi as $t) : ?>
                                                    <tr>
                                                        <td><?= $t['nama_mobil']; ?></td>
                                                        <td><?= $t['tanggal_sewa']; ?></td>
                                                        <td><?= $t['tanggal_kembali']; ?></td>
                                                        <td>
                                                            Rp <?= number_format($t['total_harga'], 0, ',', '.') ?>
                                                        </td>
                                                        <td>
                                                            <?php if ($t['status'] == 'pending') : ?>
                                                                <span class="badge bg-warning">
                                                                    <?= $t['status']; ?>
                                                                </span>
                                                            <?php else : ?>
                                                                <span class="badge bg-success">
                                                                    <?= $t['status']; ?>
                                                                </span>
                                                            <?php endif; ?>
                                                        </td>

                                                        <td>
                                                            <?php if ($t['status'] == 'Disewa') : ?>
                                                                <a href="/pembayaran/<?= $t['id']; ?>" 
                                                                class="btn btn-sm btn-danger">
                                                                    Pay Now
                                                                </a>
                                                            <?php else : ?>
                                                                -
                                                            <?php endif; ?>
                                                        </td>
                                                    </tr>
                                                    <?php endforeach; ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-4 text-center mb-5 mb-lg-0">
                        <i class="bi-phone fs-2 mb-3 text-muted"></i>
                        <div>+1 (555) 123-4567</div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="bg-primary py-5">
            <div class="container px-4 px-lg-5">
                <div class="small text-center text-white">Copyright &copy; 2026 - LUXURY RENTAL CAR </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- SimpleLightbox plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>