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
      <br />
      <br />
      <div class="page-header">
        <h1>Edit Stock</h1>
      </div>

      <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-6">
        <?php foreach($tbstock as $view){ ?>
        <form role="form" action="<?php echo base_url().'stock/update_stock' ?>" method="post">
          <div class="form-group">
            <input name="idBarang" value="<?php echo $view->idBarang;?>" class="form-control" type="hidden" maxlength="50" required>
          </div>
          <div class="form-group">
            <label>Nama Barang</label>
            <input name="namaBarang" value="<?php echo $view->namaBarang;?>" class="form-control" type="text" maxlength="50" required>
          </div>
          <div class="form-group">
            <label>Deskripsi</label>
            <textarea name="descBarang" rows="3" class="form-control"  required><?php echo $view->descBarang;?></textarea> 
          </div>
          <label>Harga Barang</label>
          <div class="input-group">
            <span class="input-group-addon">Rp.</span>
            <input name="hargaBarang" value="<?php echo $view->hargaBarang;?>" type="number" class="form-control" aria-label="Amount (to the nearest dollar)">
            <span class="input-group-addon">.00</span>
          </div>
          <div class="form-group">
            <label>Jumlah Barang</label>
            <input name="stockBarang" value="<?php echo $view->stockBarang;?>" class="form-control" type="number" id="formGroupInputLarge" placeholder="Stock Barang" maxlength="3" required>
          </div>
          <!--
          <div class="form-group">
            <label>Gambar Barang</label>
            <input type="file" value="<?php echo base_url().'images/$view->gambarBarang';?>" name="gambarBarang" />
          </div>
          -->
          <div class="form-group">
            <input type="submit" name="submit" class="btn btn-primary center-block" value="Save">
          </div>
        </form>
        <?php } ?>
      </div>
      <div class="col-md-3"></div>
      </div>
      </div>
      <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
          <p class="text-center"><strong>Copyright &copy; 2016 <a href="http://fazan.id">Fakhri Fauzan</a>.</strong> All rights reserved.</p>  
        </div>
        <div class="col-md-3"></div>
      </div>
    </div> <!-- /container -->
    <br />
    <br />

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="<?php echo base_url();?>bootstrap/assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="<?php echo base_url();?>bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>bootstrap/assets/js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="<?php echo base_url();?>bootstrap/assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
