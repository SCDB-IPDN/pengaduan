 <!-- ======= Hero Section ======= -->
 <section id="hero" class="d-flex align-items-center profil registrasi laporan">

     <div class="container bayangan" style="padding: 20px;">
         <h1>Laporan Anda</h1>

         <br><br>

         <a class="btn btn-primary btn-sm" href="lapor">Tambahkan Laporan Anda</a>

         <br><br>
         <table class="table">
             <thead>
                 <tr>
                     <th scope="col">#</th>
                     <th scope="col">Judul Laporan</th>
                     <th scope="col">Isi Laporan</th>
                     <th scope="col">Jenis Laporan</th>
                 </tr>
             </thead>
             <tbody>
                 <?php foreach($isi as $lapor): ?>
                 <tr>
                     <th scope="row">#</th>
                     <td><?= $lapor->judul_lap; ?></td>
                     <td><?= $lapor->isi_lap; ?></td>
                     <td><?= $lapor->jenis_lap; ?></td>
                 </tr>
                 <?php endforeach; ?>
             </tbody>
         </table>
     </div>

 </section><!-- End Hero -->