<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title>Administrator</title>
   <link rel="stylesheet" href="<?php echo base_url("assets/node_modules/bootstrap/dist/css/bootstrap.min.css"); ?>">
   <link rel="stylesheet" href="<?php echo base_url("assets/node_modules/material/dist/css/material.min.css"); ?>">
   <link rel="stylesheet" href="<?php echo base_url("assets/node_modules/material/dist/css/ripples.min.css"); ?>">
   <link rel="stylesheet" href="<?php echo base_url("assets/node_modules/css/style.css"); ?>">
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
      <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
         <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
               <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
               </button>
               <a class="navbar-brand" href="#menu-toggle" id="menu-toggle">Member BUKMAR</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
               <ul class="nav navbar-nav navbar-right">
                  <li class="dropdown">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>( Member Name / ID_MEMBER )<b class="caret"></b></a>
                     <ul class="dropdown-menu">
                        <li><a href="#">Dashboard</a></li>
                        <li><a href="#">MENU 1</a></li>
                        <li><a href="#">MENU 2</a></li>
                        <li><a href="#">MENU 3</a></li>
                        <li><a href="#">MENU 4</a></li>
                        <li><a href="#">MENU 5</a></li>
                     </ul>
                  </li>
               </ul>
            </div><!-- /.navbar-collapse -->
         </div>
      </nav>

   <div id="wrapper">
        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                </li>
                <li>
                  <div class="box-profil">
                     <img src="<?php echo base_url("assets/image/admin.png"); ?>" alt="..." class="img-circle " width="100" height="100"><br>
                     <p class="nama_profile">( Member Name / ID_MEMBER )</p>
                  </div>
                </li>
                <li>
                    <a href="#"> <span class="glyphicon glyphicon-home" aria-hidden="true"></span> Dashboard</a>
                </li>
                <li>
                    <a href="#"><span class="glyphicon glyphicon-list" aria-hidden="true"></span> MENU 1</a>
                </li>
                <li>
                    <a href="#"><span class="glyphicon glyphicon-list" aria-hidden="true"></span> MENU 2</a>
                </li>
                <li>
                    <a href="#"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>MENU 3</a>
                </li>
                <li>
                    <a href="#"><span class="glyphicon glyphicon-off" aria-hidden="true"></span>MENU 4</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

         <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-lg-12">
							<!-- bagian content -->
                  </div>
               </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->
   </div> <!-- end wrapper menu left -->

   </div>
</body>
</html>
