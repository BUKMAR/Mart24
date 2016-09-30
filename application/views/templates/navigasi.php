  <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="background-color: #183544; margin-top: -5px;">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#" style="margin-top: 5px;"><p class="brand">BUKMAR</sub>.com</p></a>
      </div>

      <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav" style="margin-top: 5px;">
          <li><a href="#" style="letter-spacing: 1px; color: #fff; margin-left: 85px;  ">Hubungi Kami : </a></li>
          <p style="color: #F36F36; float: left; margin-top: 18px; margin-left: -10px; letter-spacing: 2px;">0857-286-480-65</p>
        </ul>

        <div class="container">
          <ul class="nav navbar-nav navbar-right" style="margin-left: -20px;">
            <button class="btn btn-sm btn-danger" data-toggle="modal" href='#myModal' style="color: #212121; font-size: 12px; font-weight: bold; background-color: #F57C00;" >Login</button>

            <a href="<?php echo base_url("index.php/home/register"); ?>" class="btn btn-sm btn-success" style="color: #212121; font-size: 12px; font-weight: bold; background-color: #1976D2;" >Daftar</a>

            <span class="glyphicon glyphicon-shopping-cart" style="width: 20px; height: 20px; margin-top: 20px; position: relative; " aria-hidden="true"><a href="" title=""><span class="badge" style="height: 20px; width: 30px; margin-top: -20px; margin-left: 15px; background-color: red; color: #000; font-size: 12px; float: left; position: relative;">24</span></span>
            </a>

          </ul>
        </div>
      </div>
    </div>
  </nav>

  <!— Modal —>
  <div class="modal fade modal_costume" id="myModal" role="dialog">
    <div class="modal-dialog">

      <!— Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="margin-left: auto; margin-right: auto;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">
             <img src="<?php echo base_url("assets/images/logo.png"); ?>" width="100" height="100" class="img-responsive" alt="Image">
          </h4>
        </div>
        <div class="modal-body">
          <form action="<?php echo base_url("index.php/member/login"); ?>" method="POST" role="form">

             <div class="form-group">
                <label >User Name</label>
                <input type="text" name="username" class="form-control" id="" placeholder="Username">
             </div>
             <div class="form-group">
                <label >Password</label>
                <input type="password" name="password" class="form-control" id="" placeholder="Username">
             </div>

             <button type="submit" class="btn btn-sm btn-primary">Submit</button>
          </form>
        </div>
        <div class="modal-footer">
        </div>
      </div>

    </div>
  </div>
