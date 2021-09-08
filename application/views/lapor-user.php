<section class="registrasi paddingan">
    <div data-aos="fade-down" class="container laporan bayangan">
        <div class="section-title" data-aos="fade-up">
            <h2>Lapor</h2>
            <p>Laporkan keluhan atau aduan anda.</p>
        </div>


        <form data-aos="fade-up" action="<?= base_url('laporprosesuser') ?>" method="post" style="padding: 30px;">
           

            <div class="mb-3">
                <input type="text" class="form-control" name="judul" placeholder="Masukkan Judul Laporan Anda" required>
            </div>

            <div class="mb-3">
                <textarea name="isi" class="form-control" placeholder="Isi Laporan Anda" rows="7" required></textarea>
            </div>

            <div class="mb-3">
                Jenis Pengaduan <br><br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="jenislap" id="inlineRadio1" value="Informasi">
                    <label class="form-check-label" for="inlineRadio1">Informasi</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="jenislap" id="inlineRadio2" value="Konfirmasi">
                    <label class="form-check-label" for="inlineRadio2">Konfirmasi</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="jenislap" id="inlineRadio1" value="Permintaan Informasi">
                    <label class="form-check-label" for="inlineRadio1">Permintaan Informasi</label>
                </div>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">POSTING</button>
            </div>
        </form>


    </div>
</section>