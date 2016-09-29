<style type="text/css" media="screen">
    .modal_costume .modal-dialog {
    width: 40%;
    margin-top: 50px;
  }

  .modal_costume .modal-content{
    border-radius: 0;
   }

   .modal_costume .modal-header{
    background-color: #183544;
   }
</style>

  <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="background-color: #183544; margin-top: -5px;">
      <div class="container">
        <a class="navbar-brand" href="#"><p class="brand">BUKMAR</sub>.com</p></a>
        <ul class="nav navbar-nav">
          <li><a href="#" style="letter-spacing: 1px; color: #fff; margin-left: 85px;">Hubungi Kami : </a></li>
          <p style="color: #F36F36; float: left; margin-top: 20px; margin-left: -10px; letter-spacing: 2px;">0274 - 566 569</p>
        </ul>

        <div class="row" style="margin-left: 800px; margin-top: 9px;">
          <div class="col-md-8">
            <div class="btn-group btn-group-sm" role="group" aria-label="Small button group">
              <button type="button" class="btn btn-danger" data-toggle="modal" href='#myModal'>Login</button>
              <a class="btn btn-sm btn-info" href="<?php echo base_url("index.php/home/register"); ?>">DAFTAR</a>
            </div>
          </div>
        </div>
      </div>
    </nav> <!-- end navbar -->

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
