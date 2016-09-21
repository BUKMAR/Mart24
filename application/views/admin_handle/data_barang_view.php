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
   <script type="text/javascript" src="<?php echo base_url("assets/node_modules/bootstrap/dist/js/bootstrap.min.js"); ?>"></script>
   <script type="text/javascript" src="<?php echo base_url("assets/node_modules/material/dist/js/material.min.js"); ?>"></script>
   <script type="text/javascript" src="<?php echo base_url("assets/node_modules/bootstrap/js/dropdown.js"); ?>"></script>
   <script type="text/javascript" src="<?php echo base_url("assets/node_modules/material/dist/js/ripples.min.js"); ?>"></script>

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
                                              <label>Nama Barang</label>
                                              <input type="text" name="nama-barang" class="form-control" id="" placeholder="Nama  barang">
                                            </div>
                                          </div>
                                       </div>
                                       <div class="form-group">
<<<<<<< HEAD
                                          <label>Kategori</label>
                                          <select name="id-kategori" id="input" class="form-control" required="required" style="border: 1px solid #dedede; border-radius: 1px;">
                                             <option value=""></option>
                                             <option value=""></option>
                                             <option value="" selected="selected">Kategori Barang</option>
                                          </select>
=======
                                          <div class="row">
                                            <div class="col-md-4">
                                              <label>Kategori</label>
                                              <select name="id-kategori" id="input" class="form-control" required="required">
                                                  <?php
                                                    foreach($kategori as $value) {
                                                      echo "<option value='". $value['id_kategori'] ."'>". $value['nama_kategori'] ."</option>";
                                                    }
                                                  ?>
                                              </select>
                                            </div>
                                          </div>
>>>>>>> fbaddf7ca6a9f821823eb03af8cd8a92bc62ac20
                                       </div>

                                       <div class="form-group">
                                          <div class="row">
                                            <div class="col-md-10">
                                              <label >Deskripsi</label>
                                              <textarea name="deskripsi" id="input" 
                                              placeholder="Deskripsi produk dengan jelas dan padat" class="form-control" rows="10" required="required"></textarea>       
                                            </div>
                                          </div>
                                       </div>
                                       <div class="form-group">
                                          <div class="row">
                                            <div class="col-md-4">
                                              <label>Foto Barang</label>
                                              <input type="file" name="foto-barang" placeholder="Foto Barang">
                                            </div>
                                          </div>
                                       </div>
                                       <div class="form-group">
                                          <div class="row">
                                            <div class="col-md-4">
                                              <label>Stok Barang</label>
                                              <input type="number" name="stok-barang" class="form-control" placeholder="Jumlah stok tersedia">
                                            </div>
                                          </div>
                                       </div>
                                       <div class="form-group">
<<<<<<< HEAD
                                          <label >Satuan Stok</label>
                                          <select name="satuan-stok" id="input" class="form-control" required="required" style="border: 1px solid #dedede; border-radius: 1px;">
                                             <option value=""></option>
                                             <option value="" selected="selected">Satuan Stok</option>
                                          </select>
=======
                                         <div class="row">
                                            <div class="col-md-4">
                                              <label >Satuan Stok</label>
                                              <select name="satuan-stok" id="input" class="form-control" required="required">
                                                 <option value="Bungkus">Bungkus</option>
                                                 <option value="Kardus">Kardus</option>
                                                 <option value="Karung">Karung</option>
                                                 <option value="KG">Kg</option>
                                              </select>
                                            </div>
                                          </div>
>>>>>>> fbaddf7ca6a9f821823eb03af8cd8a92bc62ac20
                                       </div>
                                       <div class="form-group">
                                          <div class="row">
                                            <div class="col-md-7">
                                              <label>Harga Beli</label>
                                              <input type="text" name="harga-beli" class="form-control" id="" placeholder="Harga beli terhadap produsen">
                                            </div>
                                          </div>
                                       </div>
                                       <div class="form-group">
                                          <div class="row">
                                            <div class="col-md-7">
                                              <label>Harga Jual</label>
                                              <input type="text" name="harga-jual" class="form-control" id="" placeholder="Harga jual terhadap konsumen">
                                            </div>
                                          </div>
                                       </div>
                                       <div class="form-group">
<<<<<<< HEAD
                                          <label >Satuan Barang</label>
                                          <select name="satuan-barang" id="input" class="form-control" required="required" style="border: 1px solid #dedede; border-radius: 1px;">
                                             <option value=""></option>
                                             <option value="" selected="selected">Satuan Barang</option>
                                          </select>
=======
                                          <div class="row">
                                            <div class="col-md-4">
                                              <label >Satuan Jual Barang</label>
                                              <select name="satuan-barang" id="input" class="form-control" required="required">
                                                 <option value="1Kg">1Kg</option>
                                                 <option value="1 Piece">1 Piece</option>
                                                 <option value="1/4 Kg">1/4 Kg</option>
                                                 <option value="1/2 Kg">1/2 Kg</option>
                                              </select>
                                            </div>
                                          </div>
>>>>>>> fbaddf7ca6a9f821823eb03af8cd8a92bc62ac20
                                       </div>
                                       <div class="form-group">
                                          <button type="submit" class="btn btn-md btn-raised btn-primary">Submit</button>
                                          <button type="reset" class="btn btn-md btn-raised btn-danger">Reset</button>
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
