<section class="registrasi paddingan">
    <div class="container">
        <div class="section-title" data-aos="fade-up">
            <h2>Login</h2>
            <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem</p>
        </div>

        <div class="row">
            <div data-aos="fade-right" class="col-md">
                <form action="<?= base_url('loginproses') ?>" method="post" class="bayangan" style="padding: 30px;">
                    <div class="mb-3">
                        <input type="text" class="form-control" name="kunci" placeholder="E-mail/ NIP/ NIK" required>
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control" name="password" placeholder="Masukkan Password" required>
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">MASUK</button>
                    </div>
                </form>
            </div>
            <div class="col-md order-1 order-lg-2 hero-img" data-aos="fade-left" data-aos-delay="200">
                <div class="card mb-3 bayangan" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="assets/img/dosen-icon.png" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Civitas Akademika IPDN</h5>
                                <p class="card-text">Dosen, PNS, Non PNS, Praja bisa menggunakan Nomor Induk untuk login</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mb-3 bayangan" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="assets/img/dosen-icon.png" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Umum</h5>
                                <p class="card-text">Untuk anda yang diluar Civitas Akademika bisa menggunakan E-mail yang terdaftar untuk login.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>