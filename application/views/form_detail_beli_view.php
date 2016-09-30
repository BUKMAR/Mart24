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
        <?php require_once(APPPATH .'views/templates/sidebar.php'); ?>
        <!-- /#sidebar-wrapper -->

         <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-xs-8 col-sm-8 col-md-12">
                     <div class="container-fluid">
                        <!-- content data barang -->
                        <div class="panel panel-default">
                           <div class="panel-body">
                           <!-- panel body katalog -->
                              <div class="row">
                                 <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                    <img src="<?php echo base_url("assets/images/masako.jpg"); ?>" class="img-responsive" alt="Image">
                                 </div>
                                 <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                                    <div class="table-responsive" style="margin: 0px;">
                                       <table class="table" style="margin: 0px;">
                                          <thead>
                                             <tr>
                                                <th><h3 style="margin: 0px;">Paket 1</h3></th>
                                             </tr>
                                          </thead>
                                          <tbody>
                                             <tr>
                                                <td>
                                                   <p>Keterangan</p>
                                                   <div class="list-group">
                                                      <a href="#" class="list-group-item active">Item 1</a>
                                                      <a href="#" class="list-group-item">Item 2</a>
                                                      <a href="#" class="list-group-item">Item 3</a>
                                                   </div>
                                                </td>
                                                <td><p class="text-success" style="font-weight: bold;">Stok Tersedia</p></td>
                                             </tr>
                                          </tbody>
                                       </table>
                                       <p style="font-size: 15px; margin: 0px;" class="text-danger"><del>Rp. 20.0000,-<del></p>
                                       <p style="font-size: 25px; font-weight: 700;">Rp. 40.000,-</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>

                        <!-- detail order barang -->

                        <div class="panel panel-default">
                           <div class="panel-body">
                              <table class="table" border="0">
                                 <thead>
                                    <tr>
                                       <td>Nama Pembeli</td>
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
                                       <td>Alamat</td>
                                       <td>
                                          <select name="alamat" id="inputAlamat" class="form-control" required="required">
                                             <option value="">Alamat 1</option>
                                             <option value="">Alamat 2</option>
                                          </select>
                                          <span>
                                             Alamat yang di tuju
                                          </span>
                                       </td>
                                    </tr>
                                 </thead>
                              </table>
                           </div>
                           <div class="panel-footer">
                              <a class="btn btn-sm btn-success" href="#" role="button">Order Sekarang</a>
                           </div>
                        </div> <!-- end panel detail order barang -->


                     </div>
                  </div> <!-- end col content -->
               </div>

         <!-- footer -->
         <?php require_once(APPPATH .'views/templates/footer.php'); ?>

        <!-- /#page-content-wrapper -->
      </div> <!-- end wrapper menu left -->
   </div>
 </div>
 </div>
</body>
</html>


