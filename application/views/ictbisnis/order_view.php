<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Form Order | Fzn.ID Store</title>

    <link href="<?php echo base_url();?>bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>bootstrap/css/style.css" rel="stylesheet">

  </head>
  <body style="background-image:url(<?php echo base_url();?>/images/background.jpg);">

  	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Fzn.ID Store</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="<?php echo base_url()?>"><span class="glyphicon glyphicon-home"></span> Home</a>
                    </li>
                    <li class="active">
                        <a href="#"><span class="glyphicon glyphicon-plus"></span> Order</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url().'order/how_to' ?>"><span class="glyphicon glyphicon-shopping-cart"></span> How To Buy</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="<?php echo base_url().'login' ?>" target="_blank"><span class="glyphicon glyphicon-log-in"></span> Login</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <br />
    <br />
    <br />
    <div class="container-fluid">
    <div class="row">
		<div class="col-md-12">
			<h1 class="text-center">
				Form Order<br />
				<small>Fzn.ID Store</small>
			</h1>
			<br />
			<div class="row">
				<div class="col-md-2">
				</div>
				<div class="col-md-4">
					<form action="<?php echo base_url().'order/add_order' ?>" role="form" method="post">
						<div class="form-group">							 
							<label>
								Nama Lengkap
							</label>
							<input name="nama" class="form-control" type="text" maxlength="50" required>
						</div>
						<div class="form-group">
							<label>
								Email
							</label>
							<input name="email" class="form-control" type="email" required>
						</div>
						<div class="form-group">
							<label>
								No Handphone
							</label>
							<input name="handphone" class="form-control" type="text" maxlenght="13" required>
						</div>
						<div class="form-group">
							<label>
								Alamat
							</label>
							<textarea name="alamat" rows ="3" class="form-control" required></textarea>
						</div>
				</div>
				<div class="col-md-1">
				</div>
				<div class="col-md-3">
					<form role="form">
						<div class="form-group">
							<label>
								Barang
							</label>
							<select name='namaBarang' class="form-control">
								<?php foreach($tbstock as $view){
								if ($view->stockBarang > 0){
									echo "<option value='$view->namaBarang'>$view->namaBarang (Rp.$view->hargaBarang/pcs)</option>";}
								}?>
							</select>	
						</div>
						<div class="form-group">
							<label>
								Jumlah Barang
							</label>
							<input name="jumlah" class="form-control" type="number" required>
						</div>
						<div class="form-group">
							<label>
								Metode Pembayaran
							</label>
							<div class="radio">
  								<label>
    								<input type="radio" name="pembayaran" value="COD">
    								Cash On Delivery
  								</label>
  								<br />
  								<label>
    								<input type="radio" name="pembayaran" value="Transfer">
    								Transfer Bank
  								</label>
							</div>
						</div>
						<br />
						<button name="submit" type="submit" class="btn btn-primary btn-lg center-block">
							Order !
						</button>
					</form>
				</div>
				<div class="col-md-2">
				</div>
			</div>
		</div>
	</div>
	<br />
	<div class="row">
		<div class="col-md-2"></div>
        <div class="col-md-8">
          <p class="text-center"><small><i><a href="<?php echo base_url() ?>">.:: back to main site ::.</a></i></small></p>  
        </div>
        <div class="col-md-2"></div>
	</div>
	<br />
	<div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
          <p class="text-center"><strong>Copyright &copy; 2016 <a href="http://fazan.id" target="_blank">Fakhri Fauzan</a>.</strong> All rights reserved.</p>  
        </div>
        <div class="col-md-2"></div>
    </div>
	<br />
</div>

    <script src="<?php echo base_url();?>bootstrap/js/jquery.min.js"></script>
    <script src="<?php echo base_url();?>bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>bootstrap/js/scripts.js"></script>
  </body>
</html>