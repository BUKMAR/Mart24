<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title></title>
   <link rel="stylesheet" href="">
</head>
<body>
   <div class="container-fluid">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
         <legend><h1><small><span class="glyphicon glyphicon-tasks" aria-hidden="true"></span> Data Barang</small></h1></legend>
      </div>

      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
         <form action="" method="POST" class="form-horizontal" role="form" enctype="multipart/form-data">
               <div class="container-fluid">
                  <div class="form-group">
                     <label>Nama Barang</label>
                     <input type="text" name="nama-barang" class="form-control" id="" placeholder="Input field">
                  </div>
                  <div class="form-group">
                     <label>Kategori</label>
                     <select name="kategori" id="input" class="form-control" required="required">
                        <option value=""></option>
                        <option value=""></option>
                        <option value="" selected="selected">Kategori Barang</option>
                     </select>
                  </div>

                  <div class="form-group">
                     <label >Deskripsi</label>
                     <textarea name="deskripsi" id="input" class="form-control" rows="5" required="required"></textarea>
                  </div>
                  <div class="form-group">
                     <label>Foto Barang</label>
                     <input type="file" name="foto-barang" class="form-control" id="" placeholder="Input field">
                  </div>
                  <div class="form-group">
                     <label>Stok Barang</label>
                     <input type="number" name="stok-barang" class="form-control" id="" placeholder="Input field">
                  </div>
                  <div class="form-group">
                     <label >Satuan Stok</label>
                     <select name="satuan-stok" id="input" class="form-control" required="required">
                        <option value=""></option>
                        <option value="" selected="selected">Satuan Stok</option>
                     </select>
                  </div>
                  <div class="form-group">
                     <label>Harga Beli</label>
                     <input type="text" name="harga-beli" class="form-control" id="" placeholder="Input field">
                  </div>
                  <div class="form-group">
                     <label>Harga Jual</label>
                     <input type="text" name="harga-jual" class="form-control" id="" placeholder="Input field">
                  </div>
                  <div class="form-group">
                     <label >Satuan Barang</label>
                     <select name="satuan-barang" id="input" class="form-control" required="required">
                        <option value=""></option>
                        <option value="" selected="selected">Satuan Barang</option>
                     </select>
                  </div>
                  <div class="form-group">
                     <button type="submit" class="btn btn-primary">Submit</button>
                     <button type="reset" class="btn btn-danger">Reset</button>
                  </div>
               </div>
         </form>
      </div>
   </div>
</body>
</html>
