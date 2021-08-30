<?php if($kondisi=='sukses'){ ?>   
    <script src='https://unpkg.com/sweetalert/dist/sweetalert.min.js'></script>
    <script>
        swal('Berhasil!', 'Registrasi anda sukses!', 'success').then(function()
        {
            window.location="home"
        });
        //window.location='<?=base_url('home')?>';
    </script>
   
<?php } else { ?>
    <script src='https://unpkg.com/sweetalert/dist/sweetalert.min.js'></script>
    <script>
            swal('Gagal!', 'Registrasi anda gagal!', 'success');
           // window.location='<?=base_url('registrasi')?>';
    </script>
    
<?php } redirect('home')?>