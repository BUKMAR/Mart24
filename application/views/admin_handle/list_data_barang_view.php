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
   <link rel="stylesheet" href="<?php echo base_url('assets/sweetalert/sweetalert.css'); ?>">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
   <script type="text/javascript" src="<?php echo base_url('assets/node_modules/bootstrap/dist/js/bootstrap.min.js'); ?>"></script>
   <script type="text/javascript" src="<?php echo base_url('assets/node_modules/bootstrap/js/dropdown.js'); ?>"></script>
   <script type="text/javascript" src="<?php echo base_url('assets/node_modules/material/dist/js/ripples.min.js'); ?>"></script>
   <script type="text/javascript" src="<?php echo base_url('assets/node_modules/material/dist/js/material.min.js'); ?>"></script>
   <script type="text/javascript" src="<?php echo base_url('assets/node_modules/datatables/js/jquery.dataTables.js'); ?>"></script>
   <script type="text/javascript" src="<?php echo base_url("assets/node_modules/ckeditor/ckeditor.js"); ?>"></script>
  <script type="text/javascript">
      $.material.init();
   </script>
   <script type="text/javascript" src="<?php echo base_url('assets/sweetalert/sweetalert.min.js'); ?>"></script>
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
                                       <th>Nama Paket</th>
                                       <th>Tanggal Upload</th>
                                       <th>Harga Jual</th>
                                       <th>Harga Beli</th>
                                       <th>Foto</th>
                                       <th>Aksi</th>
                                    </tr>
                              </thead>
                              <tbody>
                              </tbody>
                            </table>
                        </div>
                        <?php 
                          for($i = 0; $i < $jumlah_total_barang; $i++) {
                            $item = $barang[$i];

                            $id = 'id-'. $i;

                            echo "<div class='modal fade' id='$id' role='dialog'>
                               <div class='modal-dialog'>
                                  <div class='modal-content'>
                                     <div class='modal-header'>
                                        <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
                                        <h4 class='modal-title'>Edit Barang ". $item['nama_paket'] ."</h4>
                                     </div>
                                    <form action='submit_edit_barang' method='POST' class='form-horizontal' role='form' enctype='multipart/form-data' 
                                        style='padding: 35px; border: 1px solid #dedede; margin: 15px;'>
                                     <div class='modal-body'>
                                                <input type='hidden' name='id-barang' value='". $item['id_barang'] ."'/>
                                                  <div class='container-fluid'>
                                                    <div class='form-group'>
                                                      <div class='row'>
                                                        <div class='col-md-10'>
                                                          <label>Nama Paket</label>
                                                          <input type='text' name='nama-paket' value='". $item['nama_paket'] ."' class='form-control' placeholder='Nama paket' required>
                                                        </div>
                                                      </div>
                                                    </div>
                                                    <div class='form-group'>
                                                      <div class='row'>
                                                        <div class='col-md-11'>
                                                          <label >Keterangan</label>
                                                          <textarea id='keterangan' name='keterangan' class='form-control' required>". $item['keterangan'] ."</textarea>
                                                           <script>
                                                              CKEDITOR.replace('keterangan');
                                                           </script>
                                                        </div>
                                                      </div>
                                                    </div>
                                                    <div class='form-group'>
                                                      <div class='row'>
                                                        <div class='col-md-4'>
                                                          <label>Foto Barang</label>
                                                          <input type='file' name='foto-barang' placeholder='Foto Barang' required>
                                                        </div>
                                                      </div>
                                                    </div>
                                                    <div class='form-group'>
                                                      <div class='row'>
                                                        <div class='col-md-7'>
                                                          <label>Harga Beli</label>
                                                          <input type='text' name='harga-beli' value='".  $item['harga_beli'] ."' class='form-control' placeholder='Harga beli terhadap produsen' required/>
                                                        </div>
                                                      </div>
                                                    </div>
                                                    <div class='form-group'>
                                                      <div class='row'>
                                                        <div class='col-md-7'>
                                                          <label>Harga Jual</label>
                                                          <input type='text' name='harga-jual'  value='".  $item['harga_jual'] ."'  class='form-control' placeholder='Harga jual terhadap konsumen' required>
                                                        </div>
                                                      </div>
                                                    </div>
                                                    <div class='form-group'>
                                                      <div class='row'>
                                                        <div class='col-md-5'>
                                                          <label>Stok Barang</label>
                                                          <input type='number' name='stok-barang'  value='".  $item['stok'] ."'  class='form-control' placeholder='Jumlah stok tersedia' required>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                     </div>
                                     <div class='modal-footer'>
                                        <button type='reset' class='btn btn-md btn-danger'>Reset</button>
                                        <button type='submit' class='btn btn-primary'>Save changes</button>
                                        <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
                                     </div>
                                     </form>
                                  </div>
                               </div>
                            </div>";
                          }
                        ?>

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
              "fnInitComplete": function(oSettings, json) {        
                $('.brg-delete').on('click',function(){
                  var idBarang = $(this).attr("data-brg-id");

                  swal({
                      title: "Apakah anda yakin?",
                      text: "Anda akan menghapus "+ $(this).attr("data-brg-nama-paket"),
                      type: "warning",
                      showCancelButton: true,
                      confirmButtonColor: "#DD6B55",
                      confirmButtonText: "Ya, hapus barang",
                      cancelButtonText: "Batalkan!",
                      closeOnConfirm: false,
                      closeOnCancel: false 
                    },
                    function(isConfirm){
                      if (isConfirm) {
                        $.ajax({
                          url: "<?php echo site_url('admin/ajax_delete')?>",
                          type: "POST",
                          dataType:'json',
                          data: {id: idBarang},
                          success: function() {              
                            swal("Dihapus!", "Barang berhasil dihapus", "success");
                            table.ajax.reload();
                          }
                        });
                      } else {
                        swal("Batal", "Anda batal menghapus barang", "error");
                      }
                  });
                });
              }
        }); 
    });
  </script>
</body>
</html>
