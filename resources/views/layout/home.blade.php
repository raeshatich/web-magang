<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>KPK Magang</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- site icons -->
      <link rel="icon" href="assets/images/kpk/logo (1).png" type="image/png" />
      <!-- bootstrap css -->
      <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
      <!-- site css -->
      <link rel="stylesheet" href="assets/css/style.css" />
      <!-- responsive css -->
      <link rel="stylesheet" href="assets/css/responsive.css" />
      <!-- colors css -->
      <link rel="stylesheet" href="assets/css/colors.css" />
      <!-- custom css -->
      <link rel="stylesheet" href="assets/css/custom.css" />
      <!-- wow animation css -->
      <link rel="stylesheet" href="assets/css/animate.css" />
      <!-- Revolution Loaling Fonts and Icons  -->
      <link rel="stylesheet" href="assets/js/revolution/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
      <!-- Revolution style Sheets  -->
      <link rel="stylesheet" href="assets/js/revolution/css/settings.css">
      <link rel="stylesheet" href="assets/js/revolution/css/layers.css">
      <link rel="stylesheet" href="assets/js/revolution/css/navigation.css">
      <!-- owl stylesheets -->
      <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
      <link rel="stylesheet" href="assets/css/owl.theme.default.css">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
      
      
   </head>

   <body id="default_theme" class="home_page1">
      <!-- header -->
      @include('partials.sidebar')
      
            
      <!-- Start Banner Slider -->
      <div class="banner-slider">
         <div class="container-fluid">
            <div class="row">
               <div id="slider_main" class="carousel slide" data-ride="carousel">
               
                  <!-- The slideshow -->
                  
                </div>
                  <div class="carousel-inner">
                     <div class="carousel-item active">
                        <div class="full">
                           <div class="full text_align_center">
                            
                              <h3>Mau Magang di KPK?</h3><br>
                              <h5>Daftarin diri kamu sekarang sesuai minat kamu dan lengkapi informasi profilmu.</h2><br>
                               <button class="btn btn-warning btn-round ml-auto" data-toggle="modal" data-target="#modalAdddaftar">
                                  Daftar
                                  <i class="fa fa-plus"></i>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
      </div>

      <div class="modal fade" id="modalAdddaftar" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-lg">
             <div class="modal-content">
                 <div class="modal-header">
                     <h5 class="modal-title" id="exampleModalLongTitle">Tambah kategori</h5>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                     </button>
                 </div>
     
                  <form action="/home/store" enctype="multipart/form-data" method="POST"> 
                     @csrf 

                    <div class="modal-body">
                        <form>
                            <div class="row g-3">
                                <div class="col-sm-6">
                                    <label>Nama Lengkap</label>
                                    <input type="text" name="nama_daftar" id="nama_daftar" class="form-control" placeholder="Nama Lengkap..." required>

                                </div>
                                <div class="col-sm-6">
                                    <label for="email" class="form-label">Email </label>
                                    <input type="email" name="email" class="form-control" id="email" placeholder="you@example.com">
                                </div>

                                <div class="col-sm-6">
                                    <label for="nik" class="form-label">NIK</label>
                                    <input type="text" name="nik" id="nik" class="form-control" placeholder="NIK..." required>
                                
                                </div>

                                <div class="col-sm-6">
                                    <label for="notel" class="form-label">Nomor Telepon </label>
                                    <input type="text" name="notel" class="form-control" id="notel" placeholder="Nomor Telepon...">
                                
                                </div>
                            
                                <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Jenis Kelamin</label>
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input"
                                        name="jk" id="jkl" value="laki-laki">
                                        <label for="jkl" class="form-check-label">
                                            Laki-laki
                                            </label>
                                        </div>
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input"
                                        name="jk" id="jkp" value="perempuan">
                                        <label for="jkp" class="form-check-label">
                                            Perempuan
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <label for="univ" class="form-label">Universitas</label>
                                    <input type="text" class="form-control" name="univ" id="univ" placeholder="Universitas...">
                                    </div>

                                <div class="col-12">
                                    <label for="ps" class="form-label">Program Studi</label>
                                    <input type="text" class="form-control" name="ps"id="ps" placeholder="Program Studi...">
                                    </div>

                                <div class="col-3">
                                    <label for="ipk" class="form-label">IPK Terakhir</label>
                                    <input type="text" class="form-control" name="ipk" id="ipk" placeholder="IPK Terakhir...">
                                    </div>
                                <div class="mb-3">
                                    <label for="cv" class="form-label">Input CV</label>
                                    <input class="form-control" type="file" id="cv" name="cv"> 
                                    </div>
                            </form>
                 </div>
     
                 <div class="modal-footer">
                     <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-undo"></i> Close</button>
                     <button type="submit" class="btn btn-primary">Save changes</button>
                     </div>
     
                 
                 </div>
             </div>
         </div>
     
    </div>
      <!-- End Banner Slider -->
      @yield('container')
      @include('sweetalert::alert')
      
      <!-- cpy -->
      <footer class="pt-3 mt-4 text-muted border-top full text_align_center">
      
        Hak Cipta © 2022 Komisi Pemberantasan Korupsi. Semua Hak Dilindungi.
      </footer>
      </div>
      <!-- end cpy -->
      <!-- jQuery (necessary for Bootstrap's JavaScript) -->
      <script src="assets/js/jquery.min.js"></script>
      <script src="assets/js/popper.min.js"></script>
      <script src="assets/js/bootstrap.min.js"></script>
      <!-- javascript -->
      <script src="assets/js/owl.carousel.js"></script>
      <!-- wow animation -->
      <script src="assets/js/wow.js"></script>
      <!-- menumaker -->
      <script src="assets/js/menumaker.js"></script>
      <!-- custom js -->
      <script src="assets/js/custom.js"></script>
      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
   </body>
   
</html>