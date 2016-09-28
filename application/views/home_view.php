<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title>BUKMAR</title>
   <link rel="icon" href="<?php echo base_url("assets/images/icon.jpg"); ?>">
   <link rel="stylesheet" href="<?php echo base_url("assets/node_modules/bootstrap/dist/css/bootstrap.min.css"); ?>">
   <link rel="stylesheet" href="<?php echo base_url("assets/node_modules/material/dist/css/material.min.css"); ?>">
   <link rel="stylesheet" href="<?php echo base_url("assets/node_modules/material/dist/css/ripples.min.css"); ?>">
   <link rel="stylesheet" href="<?php echo base_url("assets/node_modules/css/style_catalog.css"); ?>">
   <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> -->
   <script type="text/javascript" src="<?php echo base_url("assets/node_modules/bootstrap/dist/js/bootstrap.min.js"); ?>"></script>
   <script type="text/javascript" src="<?php echo base_url("assets/node_modules/bootstrap/js/dropdown.js"); ?>"></script>
   <script type="text/javascript" src="<?php echo base_url("assets/node_modules/material/dist/js/ripples.min.js"); ?>"></script>
   <script type="text/javascript" src="<?php echo base_url("assets/node_modules/material/dist/js/material.min.js"); ?>"></script>

  <script type="text/javascript">
      $.material.init();
   </script>
</head>

<style type="text/css" media="screen">
	.navbar {
		min-height: 10px;
	}

   body {
      background-color: #fff;
   }

   .iklan {
      border: 1px solid #dedede;
   }

   .brand {
      font-weight: bold;
      font-size: 19px;
      word-spacing: 10px;
      letter-spacing: 4px;
      color: #fff;
   }


	.nav li > a {
		margin-top: -8px;
	}

	.hover-link a {
		color: black;
	}

   .footer-set {
      font-weight: bold;
      font-size: 15px;
      color: #000;
   }

   .navbar-nav { color: #000; }

   .move-button {
      margin-left: -30px;
   }

   .navbar {min-height: 4px;}
   .navbar-brand {padding: 0 15px; height: 4px; line-height: 80px;}

   .img-sidebar img {
      display: block;
      width: 245px;
      margin-left: auto;
      margin-right: auto;
   }
</style>

<body>
	<!-- <div class="container-fluid"> -->
		<nav class="navbar navbar-info navbar-fixed-top" role="navigation" style="background-color: #424242;">
			<div class="container">
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-ex1-collapse">
					<ul class="nav navbar-nav">
						<li><a href="#">  <p class="brand">BUKMAR</sub>.com</p></a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right move-button">
						<li>
                     <button type="button" class="btn btn-sm btn-danger">LOGIN</button>
                  </li>
	               <li>
                     <button type="button" class="btn btn-sm btn-success">DAFTAR</button>
                  </li>
					</ul>
				</div><!-- /.navbar-collapse -->
			</div>
		</nav>
	<!-- </div> -->

   <div class="container-fluid">
      <div id="wrapper" style="margin-left: 30px;">
        <!-- Sidebar -->
        <div id="sidebar-wrapper" style="width: 285px;">
         <div class="img-sidebar">
            <img src="<?php echo base_url("assets/images/icon.jpg"); ?>" class="img-responsive" alt="Image" >
         </div>
        </div>
        <!-- /#sidebar-wrapper -->

         <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
            <?php for ($i = 1; $i <= 4; $i++): ?>
               <div class="row">
                  <div class="col-xs-8 col-sm-8 col-md-12">
                     <div class="container-fluid">
                        <div class="panel panel-default">
                           <div class="panel-body">
                              <div class="row">
                                 <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                    <img src="<?php echo base_url("assets/images/masako.jpg"); ?>" class="img-responsive" alt="Image">
                                 </div>
                                 <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                                    <div class="table-responsive">
                                       <table class="table table-hover">
                                          <thead>
                                             <tr>
                                                <th>Paket <?php echo $i; ?></th>
                                             </tr>
                                          </thead>
                                          <tbody>
                                             <tr>
                                                <td>
                                                   <ul class="list-group">
                                                      <li class="list-group-item">Item 1</li>
                                                      <li class="list-group-item">Item 2</li>
                                                      <li class="list-group-item">Item 3</li>
                                                   </ul>
                                                </td>
                                             </tr>
                                          </tbody>
                                       </table>
                                    </div>
                                    <a class="btn btn-md btn-danger" href="#" role="button">Pesan Sekarang</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div> <!-- end col content -->
               </div>
            <?php endfor ?>

            </div>
        </div>
        <!-- /#page-content-wrapper -->
   </div> <!-- end wrapper menu left -->
   </div>
</body>
</html>
