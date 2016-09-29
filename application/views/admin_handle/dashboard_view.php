<!DOCTYPE html>
<html>
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
  <script type="text/javascript">
      $.material.init();
   </script>
</head>
<body>
   <div class="container-fluid">
     <?php require_once(APPPATH .'views/admin_handle/templates/navigasi.php'); ?>
     <div id="wrapper">
          <?php require_once(APPPATH .'views/admin_handle/templates/sidebar.php'); ?>
        <!-- /#sidebar-wrapper -->

         <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="container-fluid">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                           <legend><h1><small><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Dashboard</small></h1></legend>
                        </div>

                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                           <div class="panel panel-danger">
                              <div class="panel-heading">
                                 <div class="row">
                                    <div class="col-xs-3">
                                       <span style="font-size: 65px; margin-top: 10px;" class="glyphicon glyphicon-tasks" aria-hidden="true"></span>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                       <div class="huge">540</div>
                                          <div>Jumlah Data Barang</div>
                                    </div>
                                 </div>
                              </div>
                              <a href="#">
                                 <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                       <span class="pull-right"><span style="font-size: 15px;" class="glyphicon glyphicon-circle-arrow-right" aria-hidden="true"></span></span>
                                          <div class="clearfix"></div>
                                 </div>
                              </a>
                           </div>
                        </div>

                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                           <div class="panel panel-success">
                              <div class="panel-heading">
                                 <div class="row">
                                    <div class="col-xs-3">
                                       <span style="font-size: 65px; margin-top: 10px;" class="glyphicon glyphicon-transfer" aria-hidden="true"></span>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                       <div class="huge">300</div>
                                          <div>Jumlah Data Transaksi</div>
                                    </div>
                                 </div>
                              </div>
                              <a href="?pg=datakos">
                                 <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                       <span class="pull-right"><span style="font-size: 15px;" class="glyphicon glyphicon-circle-arrow-right" aria-hidden="true"></span></span>
                                          <div class="clearfix"></div>
                                 </div>
                              </a>
                           </div>
                        </div>

                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                           <div class="panel panel-warning">
                              <div class="panel-heading">
                                 <div class="row">
                                    <div class="col-xs-3">
                                       <span style="font-size: 65px; margin-top: 10px;" class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                       <div class="huge">5</div>
                                          <div>Jumlah Data Kategori Barang</div>
                                    </div>
                                 </div>
                              </div>
                              <a href="?pg=datapemilik">
                                 <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                       <span class="pull-right"><span style="font-size: 15px;" class="glyphicon glyphicon-circle-arrow-right" aria-hidden="true"></span></span>
                                          <div class="clearfix"></div>
                                 </div>
                              </a>
                           </div>
                        </div>

                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                           <div class="panel panel-default">
                              <div class="panel-heading">
                                 <div class="row">
                                    <div class="col-xs-3">
                                       <span style="font-size: 65px; margin-top: 10px;" class="glyphicon glyphicon-qrcode" aria-hidden="true"></span>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                       <div class="huge">999</div>
                                          <div>Jumlah Data Stok Barang</div>
                                    </div>
                                 </div>
                              </div>
                              <a href="?pg=datakos">
                                 <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                       <span class="pull-right"><span style="font-size: 15px;" class="glyphicon glyphicon-circle-arrow-right" aria-hidden="true"></span></span>
                                          <div class="clearfix"></div>
                                 </div>
                              </a>
                           </div>
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
