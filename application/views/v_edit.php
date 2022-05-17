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
	<header><h1>EDIT DATA OBAT</h1></header>
	</div>
	
	<div class="container">
	<?php foreach($obat as $t){ ?>
		<form action="<?php echo base_url('index.php/Apotek/update/');?><?php echo $t->kode_obat?>" method="post">
		<div class="form-group">
			<label><b>Nama Obat :</b></label>
				<input type="text" class="form-control" name="nama_obat" value="<?php echo $t->nama_obat ?>">
			<label><b>Jenis Obat :</b></label>
				<input type="text" class="form-control" name="jenis_obat" value="<?php echo $t->jenis_obat ?>">
			<label><b>Harga Obat :</b></label>
				<input type="text" class="form-control" name="harga_obat" value="<?php echo $t->harga_obat ?>">
			<label><b>Stok :</b></label>
				<input type="text" class="form-control" name="stok" value="<?php echo $t->stok ?>"><br>
			<center><input type="submit" class="btn btn-success" name="perbarui" value="Perbarui"></center>
		</div>
	</form>
	<?php } ?>
	</div>
	
</body>
</html>