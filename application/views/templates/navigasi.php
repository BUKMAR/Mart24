<style type="text/css" media="screen">
    .modal_costume .modal-dialog {
    width: 40%;
    margin-top: 50px;
  }

  .modal_costume .modal-content{
    border-radius: 0;
    border: 5px solid #3498db;
   }

   .modal_costume .modal-header{
    background-color: #3498db;
   }
 </style>

   <nav class="navbar navbar-info navbar-fixed-top" role="navigation" style="background-color: #183544;">
			<div class="container">
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-ex1-collapse">
					<ul class="nav navbar-nav">
						<li><a href="#">  <p class="brand">BUKMAR</sub>.com</p></a></li>
                  <li><a href="#" style="letter-spacing: 1px; color: #fff; margin-left: 85px;">Hubungi Kami : </a></li><p style="color: #F36F36; float: left; margin-top: 13px; margin-left: -10px; letter-spacing: 2px;">0274 - 566 569</p>
					</ul>
					<ul class="nav navbar-nav navbar-right move-button">
						<li>
                    <a class="btn btn-sm btn-danger" data-toggle="modal" href='#myModal' style="height: 40px;">Log in</a>
                  </li>
      	          <li>
                    <a class="btn btn-sm btn-info" href="<?php echo base_url("index.php/home/register"); ?>" style="height: 40px;">DAFTAR</a>
                  </li>
      					</ul>
				</div><!-- /.navbar-collapse -->
			</div>
	</nav


  <!-- Modal -->
  <div class="modal fade modal_costume" id="myModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">
             <img src="<?php echo base_url("assets/images/icon.jpg"); ?>" style="margin-left: 200px;" width="100" height="100" class="img-responsive" alt="Image">
          </h4>
        </div>
        <div class="modal-body">
          <form action="" method="POST" role="form">

             <div class="form-group">
                <label >User Name</label>
                <input type="text" class="form-control" id="" placeholder="Username">
             </div>
             <div class="form-group">
                <label >Password</label>
                <input type="password" class="form-control" id="" placeholder="Username">
             </div>

             <button type="submit" class="btn btn-sm btn-primary">Submit</button>
          </form>
        </div>
        <div class="modal-footer">
        </div>
      </div>

    </div>
  </div>

