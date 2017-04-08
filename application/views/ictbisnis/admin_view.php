<!DOCTYPE html>
<html>
<head>
	<title>Administrator | www.store.fazan.id</title>
</head>
<body>
	<h1>Login berhasil !</h1>
	<h2>Hai, <?php echo $this->session->userdata("nama"); ?></h2><br />
	<a href="<?php echo base_url().'order/view_order'; ?>">View All Order</a><br />
	<a href="<?php echo base_url().'stock'; ?>">View All Stock</a><br />
	<a href="<?php echo base_url('login/logout'); ?>">Logout</a>
</body>
</html>