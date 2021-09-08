<main id="main">
    <!-- ======= Hero Section ======= -->
    <section class="d-flex align-items-center registrasi services">

        <div class="container bayangan" style="padding: 20px;">
            <div class="section-title" data-aos="fade-up">
                <h2>Laporan Anda</h2>
                <p>Laporkan keluhan atau aduan anda.</p>
            </div>
            <a data-aos="fade-up" class="btn btn-primary btn-sm" href="isi_laporan">Tambahkan Laporan Anda</a>

            <br><br>
            <table data-aos="fade-up" id="pertabelan" class="table table-bordered table-striped">
                <thead class="bg-light">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Judul Laporan</th>
                        <th scope="col">Jenis Laporan</th>
                        <th scope="col">Tanggapan</th>
                        <th scope="col">Tindakan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($isi as $lapor) :

                        $idlapor = $lapor->id_penglap;
                        $komen = $this->db->get_where('pengaduan_komentar', ['id_penglap'=>$idlapor]);
                        $jumlah = $komen->num_rows();

                        if ($jumlah == 0) {
                            $isiKomen = "Belum ada tanggapan";
                            $atr = "";
                        } else {
                            $isiKomen = "
                                <a href='laporan_detail/".$idlapor."'>$jumlah Tanggapan</a>
                            ";
                            $atr = "class='table-info'";
                        }

                    ?>
                        <tr <?= $atr; ?>>
                            <th scope="row"><?= $no; ?></th>
                            <td>
                                <a title="Lihat Detail" href="<?= base_url('laporan_detail/'.$idlapor);  ?>">
                                    <?= $lapor->judul_lap; ?>
                                </a>
                            </td>
                            <td><?= $lapor->jenis_lap; ?></td>
                            <td align='center'>
                               <?= $isiKomen; ?>
                            </td>
                            <td>
                                <center>
                                    <a class="btn btn-warning btn-sm" href="#">Edit</a>
                                    <a class="btn btn-danger btn-sm" href="#">Hapus</a>
                                </center>
                            </td>
                        </tr>
                    <?php
                        $no++;
                    endforeach;
                    ?>
                </tbody>
            </table>
        </div>

    </section><!-- End Hero -->
</main>