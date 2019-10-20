
<!DOCTYPE html>
<html>
<head>
	<title> SKYNETS - Login CodeIgniter & Bootstrap</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background-color: #778899">

<div class="container col-sm-12 col-md-12 col-lg-12 col-xs-12" style="margin-top: 40px">
	<div class="row ">
		<div class=" sidebar col-sm-3 col-md- col-lg-2 col-xs-6" >
			<nav id="sidebar">
			<ul class="nav">
				<li>
					<a href="<?php echo base_url() ?>index.php" class="list-group-item active" style="text-align: center;background-color:#DCDCDC; border-color: black; color:black">
					ADMINISTRATOR
				</a>
				</li>	
				<br>
				<li>
					<a href="<?php echo base_url() ?>index.php/crud/tambah" class="list-group-item"><i class="fa fa-book"></i> Data Members</a>
				</li>
				<br>
				<li>
				<a href="#" class="list-group-item"><i class="fa fa-shopping-cart"></i> Data Belanja</a>
				</li>
				<br>
				<li>
					<a href="#" class="list-group-item"><i class="fa fa-folder"></i> Produk</a>
				</li>
				<br>
				<li>
					<a href="#" class="list-group-item"><i class="fa fa-users"></i> Network Tree</a>
				</li>			  
				<br>
				<li>
					<a href="<?php echo base_url() ?>index.php/dashboard/logout" class="list-group-item"><i class="fa fa-sign-out"></i> Logout</a>
				</li>			  
				</ul>
			</nav>
		</div>
		<div class="col-sm-9 col-md-10 col-lg-10 col-xs-6">
			<div class="panel panel-default">
			  <div class="panel-heading">
			    <h3 class="panel-title"><i class="fa fa-dashboard"></i> Dashboard</h3>
			  </div>
			  <div class="panel-body">
			    Selamat Datang <b><?php echo $this->session->userdata("user_nama") ?></b>, di halaman Administrator.
			  </div>
		</div>

	<div class="row">
		<div class="col-lg-4">
			<div class="jumbotron">
				<h2 class="display-4">Data Members</h2>
					<hr class="my-4">
					<p>0</p>
					<a href="#" class="btn btn-primary">Detail</a>
			</div>
		</div>

		<div class="col-lg-4">
			<div class="jumbotron">
					<h2 class="display-4">Network Tree</h2>
						<hr class="my-4">
						<p>0</p>
						<a href="#" class="btn btn-primary">Detail</a>
			</div>
		</div>

		<div class="col-lg-4">
			<div class="jumbotron">
					<h2 class="display-4">Data Belanja</h2>
						<hr class="my-4">
						<p>0</p>
						<a href="#" class="btn btn-primary">Detail</a>
			</div>
		</div>

	</div>
</div>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>