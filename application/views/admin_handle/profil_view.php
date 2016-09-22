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
   <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> -->
   <script type="text/javascript" src="<?php echo base_url("assets/node_modules/bootstrap/js/dropdown.js"); ?>"></script>
   <script type="text/javascript" src="<?php echo base_url("assets/node_modules/material/dist/js/ripples.min.js"); ?>"></script>
   <script type="text/javascript" src="<?php echo base_url("assets/node_modules/material/dist/js/material.min.js"); ?>"></script>
  <script type="text/javascript">
      $.material.init();
   </script>
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
                        <legend><h1><small><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Profil Admin</small></h1></legend>
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
