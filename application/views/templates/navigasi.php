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
          <ul class="nav navbar-nav navbar-right" style="margin-top: 10px;">
            <li><button class="btn btn-sm btn-danger" data-toggle="modal" href='#myModal' style="color: #212121; font-size: 12px; font-weight: bold; background-color: #F57C00;" >Login</button></li>
            <li><button href="<?php echo base_url("index.php/home/register"); ?>" class="btn btn-sm btn-success" style="color: #212121; font-size: 12px; font-weight: bold; background-color: #1976D2;" >Daftar</button></li>

            <li>
                <span class="glyphicon glyphicon-shopping-cart" style="margin-left: 25px; width: 20px; height: 20px; margin-top: 20px;" aria-hidden="true"><a href="" title=""><span class="badge" style="margin-left: 15px; margin-top: -50px; height: 20px; width: 30px; background-color: red; color: #000; font-size: 12px;">24</span></a></span>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>

  <!-- <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="background-color: #183544; margin-top: -5px;">
      <div class="container">
        <a class="navbar-brand" href="#"><p class="brand">BUKMAR</sub>.com</p></a>
        <ul class="nav navbar-nav">
          <li><a href="#" style="letter-spacing: 1px; color: #fff; margin-left: 85px;">Hubungi Kami : </a></li>
          <p style="color: #F36F36; float: left; margin-top: 20px; margin-left: -10px; letter-spacing: 2px;">0274 - 566 569</p>
        </ul>

        <div class="row" style="margin-left: 800px; margin-top: 9px;">
          <div class="col-md-9">
            <div class="btn-group btn-group-sm" role="group" aria-label="Small button group">
              <button type="button" class="btn btn-danger" data-toggle="modal" href='#myModal'>Login</button>
              <a class="btn btn-sm btn-info" href="<?php echo base_url("index.php/home/register"); ?>">DAFTAR</a>
              <button class="btn btn-sm btn-warning" href="" style="background-color: none;"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span><span class="badge" style="margin-top: -5px; background-color: none; color: #000; margin-left: 15px;">24</span></button>
            </div>
          </div>
        </div>
      </div>
    </nav> --> <!-- end navbar -->




  <!— Modal —>
  <div class="modal fade modal_costume" id="myModal" role="dialog">
    <div class="modal-dialog">

      <!— Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="margin-left: auto; margin-right: auto;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">
             <img src="<?php echo base_url("assets/images/icon.jpg"); ?>" width="100" height="100" class="img-responsive" alt="Image">
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
