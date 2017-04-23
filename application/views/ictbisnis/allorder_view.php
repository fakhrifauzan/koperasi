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
            <li><a href="<?php echo base_url('stock'); ?>">Stock</a></li>
            <li class="active"><a href="#">All Order</a></li>
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
        <h1>All Order</h1>
      </div>
      
      <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
          <div class="table-responsive">
            <table id="example" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Email</th>
                  <th>Handphone</th>
                  <th>Barang</th>
                  <th>Jumlah</th>
                  <th>Pembayaran</th>
                  <th>Alamat</th>
                  <th>Status</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
              <?php $no=1; foreach($tborder as $view){
              switch ($view->status) {
                case "Done":
                  $class = "success";
                  break;
                case "Belum diproses":
                  $class = "warning";
                  break;
                case "On Progress":
                  $class = "primary";
                  break;
                case "Failed":
                  $class = "danger";
                  break;
                default:
                  $class = "default";
                  break;
              };  
              echo "
              <tr>
              <td>$no</td>
              <td>$view->nama</td>
              <td>$view->email</td>
              <td>$view->handphone</td>
              <td>$view->namaBarang</td>
              <td>$view->jumlah</td>
              <td>$view->pembayaran</td>
              <td>$view->alamat</td>
              <td><b class='label label-$class'>$view->status</b></td>
              <td>
                <a class='btn btn-sm btn-primary' href=".base_url().'order/edit_order/'.$view->idOrder." title='Edit'><i class='glyphicon glyphicon-pencil'></i></a> 
                <a class='btn btn-sm btn-danger' href=".base_url().'order/delete_order/'.$view->idOrder." title='Delete'><i class='glyphicon glyphicon-trash'></i></a>
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

    <br />
    <br />
    <br />
    </div> <!-- /container -->


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
