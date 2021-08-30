<section class="registrasi paddingan">
    <div class="container">
        <div class="section-title" data-aos="fade-up">
            <h2>Registrasi</h2>
            <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem</p>
        </div>
        
        <div class="row">
            <div data-aos="fade-right" class="col-md">
                <form action="<?= base_url('registproses') ?>" method="post" class="bayangan" style="padding: 30px;">
                    <div class="mb-3">
                        <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama Anda" required>
                    </div>
                    <div class="mb-3">
                        <input type="number" class="form-control" maxlength="15" name="nohp" placeholder="Masukkan No. Handphone Anda" required>
                    </div>
                    <div class="mb-3">
                        <input type="email" class="form-control" name="email" placeholder="ex: namaemail@mail.com" required>
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control" name="password" placeholder="Masukkan Password" required>
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Daftar</button>
                    </div>
                </form>
            </div>
            <div class="col-md order-1 order-lg-2 hero-img" data-aos="fade-left" data-aos-delay="200">
                <img class="img-fluid gambar-lebar" src="assets/img/Regist.png" alt="">
            </div>
        </div>

    </div>
</section>