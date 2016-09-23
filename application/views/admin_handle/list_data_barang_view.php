<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title>Administrator</title>
   <link rel="stylesheet" href="<?php echo base_url('assets/node_modules/bootstrap/dist/css/bootstrap.min.css'); ?>">
   <link rel="stylesheet" href="<?php echo base_url('assets/node_modules/material/dist/css/material.min.css'); ?>">
   <link rel="stylesheet" href="<?php echo base_url('assets/node_modules/material/dist/css/ripples.min.css'); ?>">
   <link rel="stylesheet" href="<?php echo base_url('assets/node_modules/css/style_admin.css'); ?>">
   <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css"> -->

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
   <script type="text/javascript" src="<?php echo base_url('assets/node_modules/bootstrap/dist/js/bootstrap.min.js'); ?>"></script>
   <script type="text/javascript" src="<?php echo base_url('assets/node_modules/bootstrap/js/dropdown.js'); ?>"></script>
   <script type="text/javascript" src="<?php echo base_url('assets/node_modules/material/dist/js/ripples.min.js'); ?>"></script>
   <script type="text/javascript" src="<?php echo base_url('assets/node_modules/material/dist/js/material.min.js'); ?>"></script>
   <script type="text/javascript" src="<?php echo base_url('assets/node_modules/datatables/js/jquery.dataTables.js'); ?>"></script>
  <script type="text/javascript">
      $.material.init();
   </script>
</head>
<body style="background-color: #ffffff;">
  <div class="container-fluid">
    <?php require_once(APPPATH.'views/admin_handle/templates/navigasi.php'); ?>
     <div id="wrapper">
          <?php require_once(APPPATH.'views/admin_handle/templates/sidebar.php'); ?>
          <div id="page-content-wrapper">
              <div class="container-fluid">
                 <div class="row">
                    <div class="col-lg-12">
                      <div class="container-fluid">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                          <legend><h1><small><span class="glyphicon glyphicon-th-list" aria-hidden="true"></span> List Data Barang</small></h1></legend>
                          <hr/>
                          <!-- bagian view list data -->
                          <br/>
                          <div class="table-responsive" style="border: 1px solid #dedede; padding: 35px; border-top-right-radius: 7px;
                            border-top-left-radius: 7px;
                            border-bottom-right-radius: 7px;
                            border-bottom-left-radius: 7px;">
                              <table id="table" class="table table-hover display" 
                              width="100%" 
                              cellpadding="1" 
                              cellspacing="0" cellspacing="0" width="100%">
                                 <thead>
                                    <tr>
                                       <th>No</th>
                                       <th>ID Barang</th>
                                       <th>Nama Barang</th>
                                       <th>Kategori</th>
                                       <th>Deskrispi</th>
                                       <th>Foto</th>
                                       <th>Aksi</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                 </tbody>
                                 <tfoot>
                                    <tr>
                                       <th>No</th>
                                       <th>ID Barang</th>
                                       <th>Nama Barang</th>
                                       <th>Kategori</th>
                                       <th>Deskrispi</th>
                                       <th>Foto</th>
                                       <th>Aksi</th>
                                    </tr>
                                 </tfoot>
                              </table>
                           </div> <!-- end div tabel responsive -->
                           <!-- modal edit data -->
                           <div class="modal fade" id="modal_edit">
                              <div class="modal-dialog">
                                 <div class="modal-content">
                                    <div class="modal-header">
                                       <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                       <h4 class="modal-title">Edit Data Barang</h4>
                                    </div>
                                    <div class="modal-body">
                                       <!-- form modal -->
                                       <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                          <form action="submit_tambah_barang" method="POST" class="form-horizontal" role="form" enctype="multipart/form-data">
                                                <div class="container-fluid">
                                                   <div class="form-group">
                                                      <div class="row">
                                                        <div class="col-md-10">
                                                          <label>Nama Barang</label>
                                                          <input type="text" name="nama-barang" class="form-control" id="" placeholder="Nama barang">
                                                        </div>
                                                      </div>
                                                   </div>
                                                   <div class="form-group">
                                                      <div class="row">
                                                        <div class="col-md-4">
                                                          <label>Kategori</label>
                                                          <select name="id-kategori" id="input" class="form-control" required="required" style="border: 1px solid #dedede; border-radius: 1px;">
                                                              <?php
                                                                foreach($kategori as $value) {
                                                                  echo "<option value='". $value['id_kategori'] ."'>". $value['nama_kategori'] ."</option>";
                                                                }
                                                              ?>
                                                          </select>
                                                        </div>
                                                      </div>
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
                                                     <div class="row">
                                                        <div class="col-md-4">
                                                          <label >Satuan Stok</label>
                                                          <select name="satuan-stok" id="input" class="form-control" required="required" style="border: 1px solid #dedede; border-radius: 1px;">
                                                             <option value="Bungkus">Bungkus</option>
                                                             <option value="Kardus">Kardus</option>
                                                             <option value="Karung">Karung</option>
                                                             <option value="KG">Kg</option>
                                                          </select>
                                                        </div>
                                                      </div>
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
                                                      <div class="row">
                                                        <div class="col-md-4">
                                                          <label >Satuan Jual Barang</label>
                                                          <select name="satuan-barang" id="input" class="form-control" required="required" style="border: 1px solid #dedede; border-radius: 1px;">
                                                             <option value="1Kg">1Kg</option>
                                                             <option value="1 Piece">1 Piece</option>
                                                             <option value="1/4 Kg">1/4 Kg</option>
                                                             <option value="1/2 Kg">1/2 Kg</option>
                                                          </select>
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
                                       <!-- end form edit modal -->
                                    </div>
                                    <div class="modal-footer">
                                       <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">Close</button>
                                       <button type="button" class="btn btn-sm btn-success">Save changes</button>
                                    </div>
                                 </div>
                              </div>
                           </div> <!-- end div modal edit data barang -->
                        </div>
                      </div>
                    </div>
                 </div>
              </div>
          </div>
          <!-- /#page-content-wrapper -->
     </div> <!-- end wrapper menu left -->
  </div>
  <script src="<?php echo base_url('assets/datatables/js/jquery.dataTables.min.js')?>"></script>
  <link href="<?php echo base_url('assets/datatables/css/jquery.dataTables.min.css')?>" rel="stylesheet">
  <script type="text/javascript">
    $(function() {
        var table = $('#table').DataTable({ 
              "processing": true, //Feature control the processing indicator.
              "serverSide": true, //Feature control DataTables' server-side processing mode.
              "order": [], //Initial no order.
              // Load data for the table's content from an Ajax source
              "ajax": {
                  "url": "<?php echo site_url('admin/ajax_list_barang')?>",
                  "type": "POST"
              },
              //Set column definition initialisation properties.
              "columnDefs": [
              { 
                  "targets": [0], //first column / numbering column
                  "orderable": false, //set not orderable
              },
              ],
        }); 
    });
  </script>
</body>
</html>
