<!DOCTYPE html>
<html>
  <head>
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Administrator</title>
      <link rel="stylesheet" href="<?php echo base_url("assets/node_modules/bootstrap/dist/css/bootstrap.min.css"); ?>">
      <link rel="stylesheet" href="<?php echo base_url("assets/node_modules/material/dist/css/material.min.css"); ?>">
      <link rel="stylesheet" href="<?php echo base_url("assets/node_modules/material/dist/css/ripples.min.css"); ?>">
      <link rel="stylesheet" href="<?php echo base_url("assets/node_modules/css/style_admin.css"); ?>">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
      <script type="text/javascript" src="<?php echo base_url("assets/node_modules/bootstrap/js/dropdown.js"); ?>"></script>
      <script type="text/javascript" src="<?php echo base_url("assets/node_modules/material/dist/js/ripples.min.js"); ?>"></script>
      <script type="text/javascript" src="<?php echo base_url("assets/node_modules/material/dist/js/material.min.js"); ?>"></script>
      <script type="text/javascript" src="<?php echo base_url("assets/node_modules/ckeditor/ckeditor.js"); ?>"></script>
      <script type="text/javascript">
      $.material.init();
      </script>
    </head>
  </head>
  <body>
    <div class="container-fluid">
      <?php require_once(APPPATH.'views/admin_handle/templates/navigasi.php'); ?>
      <div id="wrapper">
        <?php require_once(APPPATH.'views/admin_handle/templates/sidebar.php'); ?>
        <!-- Page Content -->
        <div id="page-content-wrapper">
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-12">
                <div class="container-fluid">
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <legend><h1><small><span class="glyphicon glyphicon-tasks" aria-hidden="true"></span> Data Barang</small></h1></legend>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <form action="submit_tambah_barang" method="POST" class="form-horizontal" role="form" enctype="multipart/form-data" style="padding: 35px; border: 1px solid #dedede; margin: 15px;">
                      <div class="container-fluid">
                        <div class="form-group">
                          <div class="row">
                            <div class="col-md-10">
                              <label>Nama Paket</label>
                              <input type="text" name="nama-paket" class="form-control" id="" placeholder="Nama paket" required>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="row">
                            <div class="col-md-11">
                              <label >Keterangan</label>
                              <textarea id="keterangan" name="keterangan" class="form-control" required></textarea>
                               <script>
                                  CKEDITOR.replace( 'keterangan' );
                               </script>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="row">
                            <div class="col-md-4">
                              <label>Foto Barang</label>
                              <input type="file" name="foto-barang" placeholder="Foto Barang" required>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="row">
                            <div class="col-md-7">
                              <label>Harga Beli</label>
                              <input type="text" name="harga-beli" class="form-control" id="" placeholder="Harga beli terhadap produsen" required>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="row">
                            <div class="col-md-7">
                              <label>Harga Jual</label>
                              <input type="text" name="harga-jual" class="form-control" id="" placeholder="Harga jual terhadap konsumen" required>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="row">
                            <div class="col-md-5">
                              <label>Stok Barang</label>
                              <input type="number" name="stok-barang" class="form-control" placeholder="Jumlah stok tersedia" required>
                            </div>
                          </div>
                        </div>

                        <div class="form-group">
                          <button type="submit" class="btn btn-md btn-primary">Submit</button>
                          <button type="reset" class="btn btn-md btn-danger">Reset</button>
                        </div>
                      </div>
                    </form>
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
