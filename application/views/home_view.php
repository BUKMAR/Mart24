<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title>BUKMAR</title>
   <link rel="icon" href="<?php echo base_url("assets/images/icon.jpg"); ?>">
   <link rel="stylesheet" href="<?php echo base_url("assets/node_modules/bootstrap/dist/css/bootstrap.min.css"); ?>">
   <link rel="stylesheet" href="<?php echo base_url("assets/node_modules/material/dist/css/material.min.css"); ?>">
   <link rel="stylesheet" href="<?php echo base_url("assets/node_modules/material/dist/css/ripples.min.css"); ?>">
   <link rel="stylesheet" href="<?php echo base_url("assets/node_modules/css/style_catalog.css"); ?>">
   <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css"> -->

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
   <script type="text/javascript" src="<?php echo base_url("assets/node_modules/bootstrap/dist/js/bootstrap.min.js"); ?>"></script>
   <script type="text/javascript" src="<?php echo base_url("assets/node_modules/bootstrap/js/dropdown.js"); ?>"></script>
   <script type="text/javascript" src="<?php echo base_url("assets/node_modules/material/dist/js/ripples.min.js"); ?>"></script>
   <script type="text/javascript" src="<?php echo base_url("assets/node_modules/material/dist/js/material.min.js"); ?>"></script>
</head>

<style type="text/css" media="screen">
  .brand {
      font-weight: bold;
      font-size: 23px;
      word-spacing: 10px;
      letter-spacing: 4px;
      color: #fff;
      font-style: oblique;
      color: #FF5A00;
   }

   body {
    background-color: #fff;
   }

   .img-sidebar img {
      display: block;
      width: 245px;
      margin-left: auto;
      margin-right: auto;
   }
</style>

<body>
    <?php require_once(APPPATH .'views/templates/navigasi.php'); ?>

     <div class="container-fluid">
      <div id="wrapper" style="margin-left: 30px;">
        <!-- Sidebar -->
        <div id="sidebar-wrapper" style="width: 285px;">
            <div class="img-sidebar">
               <img src="<?php echo base_url("assets/images/icon.jpg"); ?>" class="img-responsive" alt="Image" >
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

         <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
            <?php
                if(isset($status_insert)) {
                  if($status_insert == 'berhasil') {
                    echo "<div class='alert alert-info' style='background-color: #C8E6C9; color: #33691E;'>
                          <button type='button' class='close' data-dismiss='alert' aria-hidden='true'></button>
                          Register berhasil dilakukan harap menunggu verifikasi</div>";
                  }
                }
            ?>
            <?php for ($i = 0; $i < count($barang); $i++): ?>
               <?php $item = $barang[$i]; ?>
               <div class="row">
                  <div class="col-xs-8 col-sm-8 col-md-12">
                     <div class="container-fluid">
                        <div class="panel panel-default">
                           <div class="panel-body">
                           <!-- panel body katalog -->
                              <div class="row">
                                 <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                    <img src="<?php echo base_url($item['foto']); ?>" class="img-responsive" alt="Image">
                                 </div>
                                 <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                                    <div class="table-responsive" style="margin: 0px;">
                                       <table class="table" style="margin: 0px;">
                                          <thead>
                                             <tr>
                                                <th><h3 style="margin: 0px;"><?php echo $item['nama_paket']; ?></h3></th>
                                             </tr>
                                          </thead>
                                          <tbody>
                                             <tr>
                                                <td>
                                                   <p>Keterangan</p>
                                                   <?php echo $item['keterangan']; ?>
                                                </td>
                                                <td><p class="text-success" style="font-weight: bold;">Stok Tersedia</p></td>
                                             </tr>
                                          </tbody>
                                       </table>
                                       <p style="font-size: 15px; margin: 0px;" class="text-danger"><del>Rp. 20.0000,-<del></p>
                                       <p style="font-size: 25px; font-weight: 700;">Rp. 40.000,-</p>
                                    </div>
                                    <a class="btn btn-md btn-danger" href="<?php echo base_url('index.php/home/pesan_barang'); ?>" role="button" style="background-color: #FF5A00;"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>Pesan Sekarang</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
               <div class="row">
                  <div class="col-xs-8 col-sm-8 col-md-12">
                  </div> <!-- end col content -->
               </div>
            <?php endfor ?>

         <nav class="navbar navbar-default" role="navigation" style="background-color: #183544; margin-top: 150px;">
            <div class="container">
               <div class="row">
                 <div class="col-md-5 col-md-offset-4" style="letter-spacing: 2px;  font-weight: bold; margin-top: 10px;">BUKMAR</div>
               </div>
            <ul class="nav navbar-nav" style="margin-left: 190px; margin-top: 10px; list-style: none; float: left; color: #fff;">
               <li><a href="#">Sragen</a></li>
               <li><a href="#">Jakarta</a></li>
               <li><a href="#">Yogyakarta</a></li>
               <li><a href="#">Solo</a></li>
               <li><a href="#">Bogor</a></li>
               <li><a href="#">Surabaya</a></li>
               <li><a href="#">Malang</a></li>
            </ul>
            </div>
            <div class="container" style="margin-left: 15px; margin-top: 25px;">
               <div class="row">
                 <div class="col-md-4">
                    <p style="letter-spacing: 2px;">Informasi</p>
                    <div class="list-group" style="margin: 0px; list-style: none; margin-left: -13px; font-size: 12px;">
                       <a href="#" class="list-group-item active">Tentang Bukmar</a>
                       <a href="#" class="list-group-item active">Hubungi Kami</a>
                       <a href="#" class="list-group-item active">Karir</a>
                       <a href="#" class="list-group-item active">Cara Pembelian</a>
                       <a href="#" class="list-group-item active">Lokasi Toko</a>
                    </div>
                 </div>
                 <div class="col-md-4">
                    <p style="letter-spacing: 2px;">Bukmar</p>
                    <div class="list-group" style="margin: 0px; margin-left: -13px; font-size: 12px;">
                       <a href="#" class="list-group-item active">Syarat dan Ketentuan</a>
                       <a href="#" class="list-group-item active">Kebijakan Privasi</a>
                       <a href="#" class="list-group-item active">Daftar Produk</a>
                       <a href="#" class="list-group-item active">Produk Populer</a>
                    </div>
                 </div>
                 <div class="col-md-4">
                    <p style="letter-spacing: 2px;">Bantuan</p>
                    <div class="list-group" style="margin: 0px; margin-left: -13px; font-size: 12px;">
                       <a href="#" class="list-group-item active">Ada Pertanyaan ?</a>
                       <a href="#" class="list-group-item active">Hubungi Kami di Live Chat</a>
                       <a href="#" class="list-group-item active">Email : bukmarwidoro@gmail.com</a>
                       <a href="#" class="list-group-item active">Ikuti Medsos Kami</a>
                       <a href="#" class="list-group-item active">Youtube</a>
                    </div>
                 </div>
               </div>
            </div>

            <div class="container">
               <div class="row">
                 <div class="col-md-5 col-md-offset-4" style="margin-top: 55px;">
                    Ikuti Media Sosial Kami
                 </div>
                 <ul class="nav navbar-nav" style="margin-left: 290px; margin-top: 10px; float: left; color: #fff;">
                     <li><a href="#"><img src="<?php echo base_url("assets/images/icon/facebook_grey.png"); ?>" class="img-responsive" alt="Image" width="40" height="40"></a></li>
                     <li><a href="#"><img src="<?php echo base_url("assets/images/icon/google+_grey.png"); ?>" class="img-responsive" alt="Image" width="40" height="40"></a></li>
                     <li><a href="#"><img src="<?php echo base_url("assets/images/icon/instagram_grey.png"); ?>" class="img-responsive" alt="Image" width="40" height="40"></a></li>
                     <li><a href="#"><img src="<?php echo base_url("assets/images/icon/twitter_gray.png"); ?>" class="img-responsive" alt="Image" width="40" height="40"></a></li>
                     <li><a href="#"><img src="<?php echo base_url("assets/images/icon/youtube_grey.png"); ?>" class="img-responsive" alt="Image" width="40" height="40"></a></li>
                  </ul>
               </div>
            </div>

         </nav>



        <!-- /#page-content-wrapper -->
      </div> <!-- end wrapper menu left -->
   </div>




</body>
</html>
