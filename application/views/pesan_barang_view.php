<!DOCTYPE html>
<html>
<head>
  <?php require_once(APPPATH .'views/include/include_module.php'); ?>
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
   <nav class="navbar navbar-info navbar-fixed-top" role="navigation" style="background-color: #183544;">
         <div class="container">
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
               <ul class="nav navbar-nav">
                  <li><a href="#">  <p class="brand">BUKMAR</sub>.com</p></a></li>
                  <li><a href="#" style="letter-spacing: 1px; color: #fff; margin-left: 85px;">Hubungi Kami : </a></li><p style="color: #F36F36; float: left; margin-top: 13px; margin-left: -10px; letter-spacing: 2px;">0274 - 566 569</p>
               </ul>
               <ul class="nav navbar-nav navbar-right move-button">
                  <li>
                     <button type="button" class="btn btn-sm btn-danger">LOGIN</button>
                  </li>
                  <li>
                     <button type="button" class="btn btn-sm btn-success">DAFTAR</button>
                  </li>
               </ul>
            </div><!-- /.navbar-collapse -->
         </div>
   </nav

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
               <div class="row">
                  <div class="col-xs-8 col-sm-8 col-md-12">
                     <div class="container-fluid">
                        <div class="panel panel-default">
                           <div class="panel-heading">
                              <h3 class="panel-title">Register</h3>
                           </div>
                           <div class="panel-body" style="padding: 35px; border: 1px solid #dedede; margin: 25px;">
                              <form action="" method="POST" id="defaultForm" >
                                 <!-- nama membar -->
                                 <div class="form-group">
                                      <label class="col-lg-3 control-label">Nama Member <sup style="color: red; font-size: 17px;">*</sup></label>
                                      <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                         <div class="input-group">
                                             <span class="input-group-addon" id="sizing-addon2">
                                                 <span class="glyphicon glyphicon-user"></span>
                                             </span>
                                             <input type="text" class="form-control" name="nama-depan" placeholder="Nama Depan" aria-describedby="sizing-addon1">
                                         </div>
                                      </div>
                                      <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
                                         <div class="input-group">
                                             <input type="text" class="form-control" name="nama-belakang" placeholder="Nama Belakang" aria-describedby="sizing-addon1">
                                         </div>
                                      </div>
                                 </div><br>

                                 <!-- jenis kelamin -->

                                 <div class="form-group" style="margin-top: 22px;">
                                      <label class="col-lg-3 control-label">Jenis Kelamin <sup style="color: red; font-size: 17px;">*</sup></label>
                                      <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
                                         <div class="input-group">
                                             <span class="input-group-addon" id="sizing-addon2">
                                                 <span class="glyphicon glyphicon-heart"></span>
                                             </span>
                                             <select name="jenis-kelamin" id="inputJenis_kalmin" class="form-control" required="required">
                                                <option value="">Laki - Laki</option>
                                                <option value="">Perempuan</option>
                                             </select>
                                         </div>
                                      </div>
                                 </div><br>

                                 <!-- no telepon -->
                                 <div class="form-group" style="margin-top: 22px;">
                                      <label class="col-lg-3 control-label">Nomor Handphone <sup style="color: red; font-size: 17px;">*</sup></label>
                                      <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
                                         <div class="input-group">
                                             <span class="input-group-addon" id="sizing-addon2">
                                                 <span class="glyphicon glyphicon-phone"></span>
                                             </span>
                                             <input type="text" class="form-control" name="tlpn" placeholder="Nomor Handphone" aria-describedby="sizing-addon2" maxlength="15">
                                         </div>
                                      </div>
                                 </div><br>

                                 <!-- alamat member -->
                                 <div class="form-group" style="margin-top: 22px;">
                                      <label class="col-lg-3 control-label">Alamat 1 <sup style="color: red; font-size: 17px;">*</sup></label>
                                      <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
                                         <div class="input-group">
                                             <span class="input-group-addon" id="sizing-addon2">
                                                 <span class="glyphicon glyphicon-pencil"></span>
                                             </span>
                                             <textarea name="alamat1" id="inputAlamat1" class="form-control" rows="6" required="required"></textarea>
                                         </div>
                                      </div>
                                 </div>

                                 <div class="form-group" style="margin-top: 22px;">
                                      <label class="col-lg-3 control-label">Alamat 2 <sup style="color: red; font-size: 17px;">*</sup></label>
                                      <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
                                         <div class="input-group">
                                             <span class="input-group-addon" id="sizing-addon2">
                                                 <span class="glyphicon glyphicon-pencil"></span>
                                             </span>
                                             <textarea name="alamat2" id="inputAlamat3" class="form-control" rows="6" required="required"></textarea>
                                         </div>
                                      </div>
                                 </div> <br>

                                 <div class="form-group">
                                      <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                                         <div class="input-group">
                                             <button type="submit" class="btn btn-sm btn-success">Register Now</button>
                                             <a class="btn btn-sm btn-danger" href="../" role="button">Cancel</a>
                                         </div>
                                      </div>
                                 </div> <br>
                              </form>
                           </div>
                        </div>
                     </div>
               <div class="row">
                  <div class="col-xs-8 col-sm-8 col-md-12">
                  </div> <!-- end col content -->
               </div>

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

