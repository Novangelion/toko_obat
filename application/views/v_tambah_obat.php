<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" media="all" href="<?php echo base_url()?>assets/css/bootstrap.css" type="text/css" >
	<link rel="stylesheet" media="all" href="<?php echo base_url()?>assets/css/bootstrap.min.css" type="text/css" >
	<link rel="stylesheet" media="all" href="<?php echo base_url()?>assets/css/style.css" type="text/css" >
	<title>APOTEK RENOVA</title>
</head>
<body>
	<div class="jumbotron" style="background-color:#000;">
	<header><h1>TAMBAH OBAT</h1></header>
	</div>
	<div class="container">
		<form action="<?php echo base_url('index.php/Apotek/tambah_obat_aksi');?>" method="post">
		<div class="form-group">
			<label><b>Nama Obat :<b></label>
				<input type="text" class="form-control" name="nama_obat">
			<label><b>Jenis Obat :<b></label>
				<input type="text" class="form-control" name="jenis_obat">
			<label><b>Harga Obat :<b></label>
				<input type="text" class="form-control" name="harga_obat">
			<label><b>Stok :<b></label>
				<input type="text" class="form-control" name="stok"><br>
			<center><input type="submit" class="btn btn-success" value="Tambahkan"></center>
		</div>
		</form>
	</div>