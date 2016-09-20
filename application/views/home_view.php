<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title>BUKMAR</title>
   <link rel="icon" href="<?php echo base_url("assets/image/icon.jpg"); ?>">
   <link rel="stylesheet" href="<?php echo base_url("assets/node_modules/bootstrap/dist/css/bootstrap.min.css"); ?>">
   <link rel="stylesheet" href="<?php echo base_url("assets/node_modules/material/dist/css/material.min.css"); ?>">
   <link rel="stylesheet" href="<?php echo base_url("assets/node_modules/material/dist/css/ripples.min.css"); ?>">
   <link rel="stylesheet" href="<?php echo base_url("assets/node_modules/css/style_catalog.css"); ?>">
  <!--  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">

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

</style>

<body>
	<!-- <div class="container-fluid"> -->
		<nav class="navbar navbar-info navbar-fixed-top" role="navigation" style="height: 48px; border-bottom:6px #8fc800 solid; ">
			<div class="container-fluid">
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-ex1-collapse">
					<ul class="nav navbar-nav">
						<li><a href="#"><p class="brand">BUKMAR</sub>.com</p></a></li>
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
	<div id="wrapper">
        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <div class="panel panel-default">
               <div class="panel-body">
                  <img src="<?php echo base_url("image/icon.jpg"); ?>" class="img-responsive" alt="Image">
                  <input type="text" name="" id="input" class="form-control" value="" required="required" title="" placeholder="Aku mau belanja...">
                  <!-- <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"> -->
                     <div class="form-group">
                        <label>Berdasarkan Lokasi</label>
                        <select name="alamat_jalan_kos" id="input" class="form-control" >
                           <option value="Kota Yogyakarta">Kota Yogyakarta</option>
                           <option value="Bantul">Bantul</option>
                           <option value="Sleman">Sleman</option>
                           <option value="" selected>Semua Kategori</option>
                        </select>
                     </div>
                  <!-- </div> -->
                  <div class="form-group">
                     <button type="submit" class="btn btn-block btn-raised btn-danger">Search</button>
                  </div>
               </div>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

         <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
               <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                  <div class="alert alert-info">
                     <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                     <img src="<?php echo base_url("image/delivery-order.jpg"); ?>" class="img-responsive" alt="Image" height="80" width="280">
                  </div>
               </div>
               <div class="row">
                  <div class="col-xs-8 col-sm-8 col-md-12">

							<?php for ($i = 1; $i <= 12; $i++): ?>

                  	<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                        <a href="#" title="">
                     		<div class="panel panel-default">
                     			<div class="panel-body">
                     				<img src="<?php echo base_url("image/masako.jpg"); ?>" class="img-responsive" alt="Image" height="140" width="180">
                     				<p align="center">Bumbu Masako 1 Pack</p>
                     				<p align="center" style="font-family: sans-serif; font-weight: bold;">Rp. 5.000.00,-</p>
                     			</div>
                     		</div>
                        </a>
                  	</div>

                  	<?php endfor ?>

                  </div> <!-- end col content -->
               </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->
   </div> <!-- end wrapper menu left -->
   <nav class="navbar navbar-info navbar-fixed-bottom" role="navigation">
      <div class="container">
         <ul class="nav navbar-nav footer-set" style="margin-top: -3px;">
            <li>
               <a href="#">BBM : 5CCB6C1E</a>
            </li>
            <li>
               <a href="#">WA / Telegram : 085728648065</a>
            </li>
         </ul>
      </div>
   </nav>
</body>
</html>
