<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

        <div class="logo">
            <h1><a href="<?= base_url('')?>"> <img src="https://upload.wikimedia.org/wikipedia/commons/5/56/Lambang_IPDN.png" width="50" height="65" alt="Pengaduan IPDN"> PENGADUAN</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
        </div>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto active" href="<?= base_url('home#hero') ?>">Home</a></li>
                <li><a class="nav-link scrollto active" href="<?= base_url('isi_laporan') ?>">Tulis Laporan</a></li>
                <li><a class="nav-link scrollto active" href="<?= base_url('laporan') ?>">Laporan Anda</a></li>
                <li><a class="getstarted btn-outline-primary scrollto" href="<?= base_url('profil') ?>">Profil</a></li>
                <li><a class="getstarted btn-outline-primary scrollto" href="<?= base_url('logout') ?>">Logout</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->