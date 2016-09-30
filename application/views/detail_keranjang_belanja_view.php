<!DOCTYPE html>
<html>
<head>
  <?php require_once(APPPATH .'views/include/include_module.php'); ?>
</head>

<body>
    <?php require_once(APPPATH .'views/templates/navigasi.php'); ?>

     <div class="container-fluid">
      <div id="wrapper" style="margin-left: 30px;">
        <!-- Sidebar -->
        <div id="sidebar-wrapper" style="width: 285px;">
            <div class="img-sidebar">
               <img src="<?php echo base_url("assets/images/logo.png"); ?>" style="margin-top: 20px;" class="img-responsive" alt="Image" >
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

         <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">

            <div class="alert alert-success" style="font-size: 16px;">
              <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Keranjang belanja . . .
            </div>

            <!-- content list keranjang balanja -->
            <?php for ($i= 0; $i < 1; $i++): ?>
              <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="panel panel-primary">
                      <div class="panel-body">
                        <div class="row">
                          <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                            <img src="<?php echo base_url("assets/images/logo.png"); ?>" style="margin-top: 20px;" class="img-responsive" alt="Image" >
                          </div> <!-- end col -->
                          <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
                            <table class="table" border="0">
                              <thead>
                                <tr>
                                  <td>Id Barang</td>
                                  <td></td>
                                </tr>
                                <tr>
                                  <td>Nama Pembeli</td>
                                  <td></td>
                                </tr>
                                <tr>
                                  <td>Qty</td>
                                  <td></td>
                                </tr>
                                <tr>
                                  <td>Subtotal</td>
                                  <td></td>
                                </tr>
                              </thead>
                            </table>
                          </div> <!-- end col -->
                          <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                              <button type="button" class="btn btn-danger"> <span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Batal</button>
                          </div>
                        </div> <!-- end row -->
                      </div>
                    </div>
                </div>
              </div>
            <?php endfor ?>

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="panel panel-primary">
                      <div class="panel-body">
                        <h1>Total Belanja</h1>
                        <hr>
                        <div class="row">
                          <div class="col-md-3 col-md-offset-3">
                          </div>
                          <div class="col-md-3 col-md-offset-3">
                            <h2>
                              Rp. 300.000.00,-
                            </h2>
                          </div>
                        </div>

                        <div class="panel panel-info">
                          <div class="panel-body">
                            <table class="table" border="0">
                              <table class="table" class="" border="0">
                                 <thead>
                                    <tr>
                                       <td width="225">Nama Pembeli</td>
                                       <td></td>
                                    </tr>
                                    <tr>
                                       <td>Nomor Telepon</td>
                                       <td></td>
                                    </tr>
                                    <tr>
                                       <td>Tanggal Pesan</td>
                                       <td></td>
                                    </tr>
                                    <tr>
                                       <td>Pilih Alamat Pengiriman
                                          <select name="alamat" id="inputAlamat" class="form-control" required="required">
                                             <option value="<?php //echo $member['alamat1'] ; ?>">Alamat 1</option>
                                             <option value="<?php //echo $member['alamat2'] ; ?>">Alamat 2</option>
                                          </select>
                                       </td>
                                    </tr>
                                 </thead>

                            </table>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-md-6 col-md-offset-5"><button type="button" class="btn btn-lg btn-danger">Selesai</button></div>
                        </div>
                      </div>
                    </div>
                </div> <!-- end col 12 -->
              </div>

        <!-- footer -->
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
