
<!DOCTYPE html>
<html>
<head>
	<title> SKYNETS</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background-color: #778899">
	<div class="container col-sm-12 col-md-12 col-lg-12 col-xs-12" style="margin-top: 40px">
		<div class="row ">
			<div class=" sidebar col-sm-3 col-md-2 col-lg-2 col-xs-6" >
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
				<div class="col-lg-4">
					<div class="jumbotron">
						<form action="<?php echo base_url() ?>index.php/crud/tambah_data"  method="post">
							<div class="form-group" >
								<input type="text" class="form-control" name="nama" placeholder="Username" autofocus>
								<?php echo form_error('nama'); ?>
							</div>
							<div class="form-group">
								<input type="text" name="alamat" class="form-control" placeholder="alamat">
								<?php echo form_error('alamat'); ?>
							</div>
							<div class="form-group">
								<input type="text" name="pekerjaan" class="form-control" placeholder="pekerjaan">
								<?php echo form_error('pekerjaan'); ?>
							</div>
							<button class="btn btn-lg btn-primary btn-block" name="btn-login" id="btn-login" type="submit">
								tambahkan
							</button>
						</form>	
					</div>
				</div>

				<div class="col-lg-4">
					<div class="jumbotron">
					<form action="<?php echo base_url() ?>index.php/crud/hapus"  method="post">
						<div class="form-group" >
							<input type="text" class="form-control" name="nama" placeholder="Username" autofocus>
							<?php echo form_error('nama'); ?>
						</div>
						<button class="btn btn-lg btn-danger btn-block" name="btn-login" id="btn-login" type="submit">
							Delete
						</button>
					</form>	
					</div>
				</div>

				<div class="col-lg-4">
					<div class="jumbotron">
						<form action="<?php echo base_url() ?>index.php/crud/tambah_data"  method="post">
							<div class="form-group" >
								<input type="text" class="form-control" name="nama" placeholder="Username" autofocus>
								<?php echo form_error('nama'); ?>
							</div>
							<div class="form-group">
								<input type="text" name="alamat" class="form-control" placeholder="alamat">
								<?php echo form_error('alamat'); ?>
							</div>
							<div class="form-group">
								<input type="text" name="pekerjaan" class="form-control" placeholder="pekerjaan">
								<?php echo form_error('pekerjaan'); ?>
							</div>
							<button class="btn btn-lg btn-success btn-block" name="btn-login" id="btn-login" type="submit">
								edit
							</button>
						</form>	
					</div>
				</div>			
			</div>
		</div>
	</div>
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>