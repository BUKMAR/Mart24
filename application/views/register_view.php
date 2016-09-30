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

         <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
              <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="container-fluid">
                      <div class="panel panel-info">
                        <div class="panel-heading">
                          <h3 class="panel-title">Register</h3>
                        </div>
                        <div class="panel-body" style="padding: 65px; border: 1px solid #dedede; margin: 25px;">
                          <form action="<?php echo base_url("index.php/home/submit_data_member"); ?>" method="POST" role="form">

                            <div class="form-group">
                              <label >Nama Member <sup style="color: red; font-size: 17">*</sup></label>
                              <div class="row">
                                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                  <input type="text" class="form-control" id="" name="nama-depan" placeholder="Nama Depan">
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                  <input type="text" class="form-control" id="" name="nama-belakang" placeholder="Nama Belakang">
                                </div>
                              </div>
                            </div>

                            <div class="form-group">
                              <label >Username <sup style="color: red; font-size: 17">*</sup></label>
                              <input type="text" class="form-control" id="" name="username" placeholder="Username" required="required" maxlength="15">
                            </div>

                            <div class="form-group">
                              <label >Password <sup style="color: red; font-size: 17">*</sup></label>
                              <input type="password" class="form-control" id="" name="password" placeholder="Password" required="required" maxlength="15">
                            </div>

                            <div class="form-group">
                              <label >Jenis Kelamin <sup style="color: red; font-size: 17">*</sup></label>
                              <select name="jenis-kelamin" id="inputJenis_kalmin" class="form-control" required="required">
                                <option value="Laki laki">Laki laki</option>
                                <option value="Perempuan">Perempuan</option>
                              </select>
                            </div>

                            <div class="form-group">
                              <label >Nomor Handphone <sup style="color: red; font-size: 17">*</sup></label>
                              <input type="text" class="form-control" id="" name="telp" placeholder="Nomor Handphone" required="required">
                            </div>

                            <div class="form-group">
                              <label >Alamat 1 <sup style="color: red; font-size: 17">*</sup></label>
                              <textarea name="alamat1" id="inputAlamat" class="form-control" rows="6" required="required"></textarea>
                            </div>

                            <div class="form-group">
                              <label >Alamat 2 <sup style="color: red; font-size: 17">*</sup></label>
                              <textarea name="alamat2" id="inputAlamat" class="form-control" rows="6" required="required"></textarea>
                            </div>

                            <div class="input-group">
                              <button type="submit" class="btn btn-sm btn-success">Register Now</button>
                              <a class="btn btn-sm btn-danger" href="../" role="button">Cancel</a>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                </div>
              </div>
            </div>

            <!-- footer -->
            <?php require_once(APPPATH .'views/templates/footer.php'); ?>
        </div> <!-- end content wrapper -->
     </div> <!-- end wrapper -->
   </div> <!-- end container -->

</body>
</html>

