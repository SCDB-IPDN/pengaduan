 <!-- ======= Hero Section ======= -->
 <section id="hero" class="d-flex align-items-center profil">

     <div class="container">
         <div class="row">
             <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
                 <h1 data-aos="fade-up">Profil Anda</h1>
                
                 <div class="card bayangan">
                    <div class="card-body">
                        <h6><b>Nama Anda</b></h6>
                        <p><?= $namaPengadu; ?></p>

                        <br>

                        <h6><b>No. Handphone</b></h6>
                        <p><?= $noHp; ?></p>

                        <br>

                        <h6><b>E-mail</b></h6>
                        <p><?= $email; ?></p>
                    </div>
                 </div>
             </div>
             <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left" data-aos-delay="200">
                 <img src="assets/img/Regist.png" class="img-fluid animated" alt="">
             </div>
         </div>
     </div>

 </section><!-- End Hero -->