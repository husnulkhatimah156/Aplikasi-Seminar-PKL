



<section>

  


    <div class="">

              

                    <center>
            <br>
            <br>
            <h3>FORM REGISTRASI SISWA BARU</h3>
</center>
                <div class="row justify-content-md-center">
                    <div class="col-lg-10">


<div style="background-color: #CEF0F0; margin: 20px; border-radius: 10px/10px;">
        <form action="<?php echo base_url();?>home/simpan_pendaftaran"  method="post" enctype="multipart/form-data" style="margin: 30px;">
        </center>
             <div class="formElement">
                <label class="label" style="font-weight: bold; margin-top: 20px;">Username :</label>
                <input  type="text" name="username_ortu" class="form-control" required>
            </div>
             <div class="formElement">
                <label class="label" style="font-weight: bold; margin-top: 20px;">Password :</label>
                <input autocomplete="new-password"  type="password" name="password_ortu" class="form-control" required>

            </div>
             <div class="formElement">
                <label class="label" style="font-weight: bold; margin-top: 20px;">Ulangi Password :</label>
                <input  type="password" name="password_ortu2" class="form-control" required>

        <span style="color: red;">Jika sudah register anda dapat login dan melakukan pengajuan pendaftaran siswa*</span>
            </div>


            <br>
            <div class="formElement">
                <button type="submit" class="btn btn-success btn-flat form-control" >REGISTER</button>
            </div>
          
            <br>
        </form>
  
</section>




<!--//END OUR COURSES -->
<!--============================= EVENTS =============================-->

<!--//END EVENTS -->
<!--============================= DETAILED CHART =============================-->

<!--//END DETAILED CHART -->
<!--============================= FOOTER =============================-->






<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="foot-logo">
                    <center><a href="<?php echo site_url();?>">
                        <img src="<?php echo base_url().'assets/logosmk.png'?>" width="100px" class="img-fluid" alt="footer_logo">
                    </a>
                    <p>APLIKASI PENERIMAAN PESERTA DIDIK BARU PADA SMK NEGERI 1 MARABAHAN BERBASIS WEB</p></center>
                    </div>
                </div>
                              
                <div class="col-md-4">
                 
                </div>

              
                
                <div class="col-md-4">
                    <div class="address">
                        <h3>Alamat</h3>
                        <p>Jl. Jend. Sudirman No. 87, Marabahan, Barito Kuala, Kalimantan Selatan 70513</p>
                        
                        </div>
                    </div>

                </div>
            </div>
        </footer>
        <!--//END FOOTER -->
        <!-- jQuery, Bootstrap JS. -->
        <script src="<?php echo base_url().'theme/js/jquery.min.js'?>"></script>
        <script src="<?php echo base_url().'theme/js/tether.min.js'?>"></script>
        <script src="<?php echo base_url().'theme/js/bootstrap.min.js'?>"></script>
        <!-- Plugins -->
        <script src="<?php echo base_url().'theme/js/slick.min.js'?>"></script>
        <script src="<?php echo base_url().'theme/js/waypoints.min.js'?>"></script>
        <script src="<?php echo base_url().'theme/js/counterup.min.js'?>"></script>
        <script src="<?php echo base_url().'theme/js/owl.carousel.min.js'?>"></script>
        <script src="<?php echo base_url().'theme/js/validate.js'?>"></script>
        <script src="<?php echo base_url().'theme/js/tweetie.min.js'?>"></script>
        <!-- Subscribe -->
        <script src="<?php echo base_url().'theme/js/subscribe.js'?>"></script>
        <script src="<?php echo base_url().'theme/js/jquery-ui-1.10.4.min.js'?>"></script>
        <script src="<?php echo base_url().'theme/js/jquery.isotope.min.js'?>"></script>
        <script src="<?php echo base_url().'theme/js/animated-masonry-gallery.js'?>"></script>
        <!-- Magnific popup JS -->
        <script src="<?php echo base_url().'theme/js/jquery.magnific-popup.js'?>"></script>
        <!-- Script JS -->
        <script src="<?php echo base_url().'theme/js/script.js'?>"></script>
        
            <script src="<?php echo base_url().'theme/js/jquery.dataTables.min.js'?>"></script>
            <script src="<?php echo base_url().'theme/js/dataTables.bootstrap4.min.js'?>"></script>
            <script src="<?php echo base_url();?>assets/alert/query.js"></script>
              <script>
                 $( '.uang' ).mask('00.000.000.000', {reverse: true});
              $(document).ready(function() {
                $('#display').DataTable();
              });
            </script>



    </body>

    </html>

      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<?php if($this->session->flashdata('berhasil_simpan') == TRUE): ?>
 <script type="text/javascript">
 toastr.success('Anda berhasil register, silahkan login dan melakukan pendaftaran');
 </script>
<?php endif; ?>
<?php if($this->session->flashdata('pw_salah') == TRUE): ?>
 <script type="text/javascript">
 toastr.error('Password dan Ulangi Password tidak sama!');
 </script>
<?php endif; ?>
<?php if($this->session->flashdata('username_ada') == TRUE): ?>
 <script type="text/javascript">
 toastr.error('Gagal username sudah ada!');
 </script>
<?php endif; ?>