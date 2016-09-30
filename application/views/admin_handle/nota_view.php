<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title>Administrator</title>
   <link rel="stylesheet" href="<?php //echo base_url("assets/node_modules/bootstrap/dist/css/bootstrap.min.css"); ?>">
   <link rel="stylesheet" href="<?php echo base_url("assets/node_modules/material/dist/css/material.min.css"); ?>">
   <link rel="stylesheet" href="<?php echo base_url("assets/node_modules/material/dist/css/ripples.min.css"); ?>">
   <link rel="stylesheet" href="<?php echo base_url("assets/node_modules/css/style_admin.css"); ?>">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
   <script type="text/javascript" src="<?php echo base_url("assets/node_modules/bootstrap/js/dropdown.js"); ?>"></script>
   <script type="text/javascript" src="<?php echo base_url("assets/node_modules/material/dist/js/ripples.min.js"); ?>"></script>
   <script type="text/javascript" src="<?php echo base_url("assets/node_modules/material/dist/js/material.min.js"); ?>"></script>
  <script type="text/javascript">
      $.material.init();
   </script>
</head>
<body>
   <div class="container-fluid">
       <?php //require_once(APPPATH.'views/admin_handle/templates/navigasi.php'); ?>
       <div id="wrapper">
            <?php //require_once(APPPATH.'views/admin_handle/templates/sidebar.php'); ?>

         <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid" style="margin-left: -200px;">
               <div class="row">
                  <div class="col-lg-12">
                    <div class="container-fluid" style="padding-left: 30px; padding-right: 30px;">
                      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <h1 align="center">RIWAYAT BELANJA ANDA</h1>

                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                          <table class="table table-hover">
                            <thead>
                              <tr>
                                <th>Kode Pelanggan</th>
                                <th>:</th>
                                <th>KD-001-9090</th>
                              </tr>
                              <tr>
                                <th>Nama Pelanggan</th>
                                <th>:</th>
                                <th></th>
                              </tr>
                              <tr>
                                <th>Alamat</th>
                                <th>:</th>
                                <th></th>
                              </tr>
                              <!-- <tr>
                                <th>No. Faktur</th>
                                <th>:</th>
                                <th>FK-8071</th>
                              </tr>
                              <tr>
                                <th>Priode</th>
                                <th>:</th>
                                <th>01/01/2016 s/d 01/02/2016</th>
                              </tr> -->
                            </thead>
                          </table>
                        </div>
                        <hr style="border: 2px solid;">

                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                          <div class="row">
                            <div class="col-md-4">
                              <table class="table table-hover">
                                <thead>
                                  <tr>
                                    <th>No. Faktur</th>
                                    <th>:</th>
                                    <th>FK-8071</th>
                                  </tr>
                                </thead>
                              </table>
                            </div>
                            <div class="col-md-4 col-md-offset-4">
                              <table class="table table-hover">
                                <thead>
                                  <tr>
                                    <th>Priode</th>
                                    <th>:</th>
                                    <th>01/01/2016 s/d 01/02/2016</th>
                                  </tr>
                                </thead>
                              </table>
                            </div>
                          </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                          <table class="table table-hover">
                            <thead>
                              <tr>
                                <th>Tanggal</th>
                                <th>Nomor</th>
                                <th>Nama Barang</th>
                                <th>Qty</th>
                                <th>Harga Satuan</th>
                                <th>Diskon</th>
                                <th>Jumlah</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>01</td>
                                <td>1</td>
                                <td>Paket 1</td>
                                <td>5</td>
                                <td>2000</td>
                                <td>0</td>
                                <td>4000</td>
                              </tr>
                              <tr>
                                <th colspan="6">Jumlah</th>
                                <td>4000</td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                        <hr style="border: 2px solid;">


                      </div>
                    </div>
                  </div>
               </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->
   </div> <!-- end wrapper menu left -->

   </div>
</body>
</html>
