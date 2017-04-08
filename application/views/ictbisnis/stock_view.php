<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Administrator</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url();?>bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="<?php echo base_url();?>bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="<?php echo base_url();?>bootstrap/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="theme.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="<?php echo base_url();?>bootstrap /assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body role="document">
    <!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Fzn.ID Store</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Stock</a></li>
            <li><a href="<?php echo base_url().'order/view_order' ?>">All Order</a></li>
            <li><a href="<?php echo base_url('login/logout'); ?>">Logout</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container theme-showcase" role="main">
      <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="jumbotron">
        <h2>Hai, <?php echo $this->session->userdata("nama"); ?>!</h2>
      </div>

      <div class="page-header">
        <h1>Add Stock</h1>
      </div>

      <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-6">
        <form role="form" action="<?php echo base_url().'stock/add_stock' ?>" enctype="multipart/form-data" method="post">
          <div class="form-group">
            <label>Nama Barang</label>
            <input name="namaBarang" class="form-control" type="text" placeholder="Nama Barang" maxlength="50" required>
          </div>
          <div class="form-group">
            <label>Deskripsi</label>
            <textarea name="descBarang" class="form-control" type="text" placeholder="Nama Barang" rows="3" required></textarea> 
          </div>
          <label>Harga Barang</label>
          <div class="input-group">
            <span class="input-group-addon">Rp.</span>
            <input name="hargaBarang" type="number" class="form-control" aria-label="Amount (to the nearest dollar)">
            <span class="input-group-addon">.00</span>
          </div>
          <div class="form-group">
            <label>Jumlah Barang</label>
            <input name="stockBarang" class="form-control" type="number" placeholder="Stock Barang" maxlength="3" required>
          </div>
          <div class="form-group">
            <label>Gambar Barang</label>
            <input type="file" name="gambarBarang" />
          </div>
          <div class="form-group">
            <button type="submit" name="submit" class="btn btn-primary center-block" title="Edit"><li class='glyphicon glyphicon-plus'></li> Add Stock</button>
          </div>
        </form>
      </div>
      <div class="col-md-3"></div>
      </div>

      <div class="page-header">
        <h1>All Stock</h1>
      </div>
      
      <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
          <div class="table-responsive">
            <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Barang</th>
                  <th>Harga</th>
                  <th>Stock</th>
                  <th>Deskripsi</th>
                  <th>Gambar</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
              <?php $no=1; foreach($tbstock as $view){
              echo "
              <tr>
              <td>$no</td>
              <td>$view->namaBarang</td>
              <td>$view->hargaBarang</td>
              <td>$view->stockBarang</td>
              <td>$view->descBarang</td>
              <td><img src=".base_url().'images/products/'.$view->gambarBarang." width='100' height='100'></td>
              <td>
                <a class='btn btn-sm btn-primary' href=".base_url().'stock/edit_stock/'.$view->idBarang." title='Edit'><li class='glyphicon glyphicon-pencil'></li> Edit</a>
                <a class='btn btn-sm btn-danger' href=".base_url().'stock/delete_stock/'.$view->idBarang." title='Delete'><li class='glyphicon glyphicon-trash'></li> Delete</a>
               </td>
              </tr>";
              $no++;
              } ?>
              </tbody>
            </table>
          </div>
        </div>
        <div class="col-md-1"></div>
      </div>
      <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
          <strong>Copyright &copy; 2016 <a href="http://fazan.id">Fakhri Fauzan</a>.</strong> All rights reserved.   
        </div>
        <div class="col-md-4"></div>
      </div>
    </div> <!-- /container -->
    <br />
    <br />

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script>window.jQuery || document.write('<script src="<?php echo base_url();?>bootstrap/assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="<?php echo base_url();?>bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>bootstrap/assets/js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="<?php echo base_url();?>bootstrap/assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>