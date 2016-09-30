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
                                                <td>
                                                  <p class="text-success" style="font-weight: bold;"><span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span>
                                                  Stok Tersedia</p>
                                                  <p class="text-danger" style="font-weight: bold;"><span class="glyphicon glyphicon-thumbs-down" aria-hidden="true"></span>
                                                  Stok Tidak Tersedia</p>

                                                  <img src="<?php echo base_url("assets/images/icon-onkir/free-ongkir.png"); ?>" class="img-responsive" alt="Image">


                                                </td>
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

         <!-- footer -->
         <?php require_once(APPPATH .'views/templates/footer.php'); ?>
        <!-- /#page-content-wrapper -->
      </div> <!-- end wrapper menu left -->
   </div>
 </div>
 </div>
 </div>
 </div>

</body>
</html>
