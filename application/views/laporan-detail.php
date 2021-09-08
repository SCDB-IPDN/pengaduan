<main id="main">
    <!-- ======= Hero Section ======= -->
    <section class="d-flex align-items-center registrasi services">

        <div class="container bayangan" style="padding: 20px;">
            <div class="section-title" data-aos="fade-up">
                <h2>Detail Laporan Anda</h2>

            </div>

            <?php 
                foreach($idkomen as $komen):
                $idlapor = $komen->id_penglap;
                $data = $this->db->get_where('pengaduan_komentar', ['id_penglap'=>$idlapor]);
                $jumlah = $data->num_rows();

                
            ?>
            <div class="card" style="font-size: 14px;">
                <div class="card-body">
                    <h5 class="card-title"><?= $komen->judul_lap; ?></h5>
                    <p class="card-text"><?= $komen->isi_lap; ?></p>
                    <p class="text-small text-secondary"><small>Posting pada <?= $komen->tgl_lap; ?></small></p>
                    <?php
                        if ($jumlah == 0) {
                            
                        } 
                        else 
                        {
                            $isiKomen = $data->result();
                            foreach($isiKomen as $kom)
                            {
                                $komentarnya = $kom->isi_komentar;
                                echo 
                                "
                                    <div class='card' style='margin:10px 0; background:gainsboro;'>
                                        <div class='card-body'>
                                            $komentarnya
                                        </div>
                                    </div>
                                    <a href='#' class='btn btn-primary btn-sm'>Komentar</a>
                                ";
                            }
                            
                        }
                    ?>
                </div>
            </div>
            <?php endforeach;?>
        </div>

    </section><!-- End Hero -->
</main>