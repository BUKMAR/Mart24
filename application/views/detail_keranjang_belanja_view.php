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
         <?php require_once(APPPATH .'views/templates/footer.php'); ?>



        <!-- /#page-content-wrapper -->
      </div> <!-- end wrapper menu left -->
   </div>
 </div>
 </div>




</body>
</html>
