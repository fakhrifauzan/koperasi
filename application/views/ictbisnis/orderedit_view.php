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
  <body style="background-color:#444444;color:white">

    <div class="container-fluid">
    <div class="row">
		<div class="col-md-12">
			<?php foreach($tborder as $view){ ?>
			<h1 class="text-center">
				Edit Form Order<br />
				<small>No Pesanan #<?php echo $view->idOrder;?></small>
			</h1>
			<br />
			<div class="row">
				<div class="col-md-2">
				</div>
				<div class="col-md-4">
					<form action="<?php echo base_url().'order/update_order' ?>" role="form" method="post">
						<div class="form-group">							 
							<label>
								Nama Lengkap
							</label>
							<input name="idOrder" value="<?php echo $view->idOrder;?>" class="form-control" type="hidden" maxlength="50" required>
							<input name="nama" value="<?php echo $view->nama;?>" class="form-control" type="text" maxlength="50" required>
						</div>
						<div class="form-group">
							<label>
								Email
							</label>
							<input name="email" value="<?php echo $view->email;?>" class="form-control" type="email" required>
						</div>
						<div class="form-group">
							<label>
								No Handphone
							</label>
							<input name="handphone" value="<?php echo $view->handphone;?>" class="form-control" type="text" maxlenght="13" required>
						</div>
						<div class="form-group">
							<label>
								Alamat
							</label>
							<textarea name="alamat" rows ="3" class="form-control" required><?php echo $view->alamat;?></textarea>
						</div>
				</div>
				<div class="col-md-1">
				</div>
				<div class="col-md-3">
					<form role="form">
						<div class="form-group">
							<label>
								Barang Pesanan
							</label>
							<p><?php echo $view->namaBarang; ?>
							<?php foreach($tbstock as $value){
								if ($view->namaBarang == $value->namaBarang){
									echo " (Rp.$value->hargaBarang/pcs)";}
							} ?>
							<?php echo"<br /> x ".$view->jumlah." item = ";?></p>
							<h3><strong>Rp __________</strong></h3>

						</div>
						<br />
						<div class="form-group">
							<label>
								Status Pesanan
							</label>
							<select name="status" class="form-control">
                                    <option value="Belum diproses" <?php if($view->status=='Belum diproses') echo "selected"; ?>>Belum diproses</option>
                                    <option value="On Progress" <?php if($view->status=='On Progress') echo "selected"; ?>>On Progress</option>
                                    <option value="Done" <?php if($view->status=='Done') echo "selected"; ?>>Done</option>
                                    <option value="Failed" <?php if($view->status=='Failed') echo "selected"; ?>>Failed</option>
                                </select>
						</div>
						<div class="form-group">
							<label>
								Metode Pembayaran
							</label>
							<div class="radio">
  								<label>
    								<input type="radio" name="pembayaran" value="COD" <?php if ($view->pembayaran=='COD'){ echo "checked='checked'"; } ?>>
    								Cash On Delivery
  								</label>
  								<br />
  								<label>
    								<input type="radio" name="pembayaran" value="Transfer" <?php if ($view->pembayaran=='Transfer'){ echo "checked='checked'"; } ?>>
    								Transfer Bank
  								</label>
							</div>
						</div>
						<br />
						<button name="submit" type="submit" class="btn btn-primary btn-lg center-block">
							Save !
						</button>
					</form>
					<?php } ?>
				</div>
				<div class="col-md-2">
				</div>
			</div>
		</div>
	</div>
	<br />
	<div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
          <strong>Copyright &copy; 2016 <a href="http://fazan.id">Fakhri Fauzan</a>.</strong> All rights reserved.   
        </div>
        <div class="col-md-4"></div>
    </div>
	</div>

    <script src="<?php echo base_url();?>bootstrap/js/jquery.min.js"></script>
    <script src="<?php echo base_url();?>bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>bootstrap/js/scripts.js"></script>
  </body>
</html>