<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Fzn.ID Store</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url();?>bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url();?>bootstrap/css/heroic-features.css" rel="stylesheet">

    <!-- Ubuntu Font -->
    <link href='https://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
    <style type="text/css">
        h1 { font-family: 'Ubuntu', sans-serif; }
    </style>
    <meta http-equiv="refresh" content="3;url=<?php echo base_url() ?>">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body style="background-image:url(<?php echo base_url();?>/images/background.jpg);">

    <!-- Navigation -->
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
                        <a href="<?php echo base_url() ?>"><span class="glyphicon glyphicon-home"></span> Home</a>
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

    <!-- Page Content -->
    <div class="container">

        <!-- Jumbotron Header -->
        <header class="jumbotron hero-spacer">
            <h1>Order Sukses!</h1>
            <p>Terimakasih telah order di Fzn.ID Store! InsyaAllah berkah :D</p>
            <p>
                <i><small>* Order akan di proses maksimal 2x24 Jam</small></i>
            </p>
        </header>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-md-12">
                    <strong>Copyright &copy; 2016 <a href="http://fazan.id" target="_blank">Fakhri Fauzan</a>.</strong> All rights reserved.
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="<?php echo base_url();?>bootstrap/js/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url();?>bootstrap/js/bootstrap.min.js"></script>

</body>

</html>
