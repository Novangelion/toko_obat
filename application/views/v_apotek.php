<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" media="all" href="<?php echo base_url()?>assets/css/bootstrap.css" type="text/css" >
	<link rel="stylesheet" media="all" href="<?php echo base_url()?>assets/css/bootstrap.min.css" type="text/css" >
	<link rel="stylesheet" media="all" href="<?php echo base_url()?>assets/css/style.css" type="text/css" >
	<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.js">
	</script>
	<script type="text/javascript" src="<?php echo base_url()?>assets/js/bootstrap.js">
	</script>
	<title>APOTEK RENOVA</title>
</head>
<body>
	<!--<div class="container">--->
	<div class="jumbotron" style="background-color:#000;">
	<header><h1>APOTEK RENOVA</h1></header>
	</div>
	<div class="container">
	
	<table class="table table-bordered">
		<tr class="text-center">
			<th width="50px">Kode Obat</th>
			<th width="300px">Nama Obat</th>
			<th width="150px">Jenis Obat</th>
			<th width="150px">Harga</th>
			<th width="100px">Stok</th>
			<th colspan="2">Operasi</th>
		</tr>
		<?php 
		foreach($obat as $u){ 
		?>
		<tr>
			<td><?php echo $u->kode_obat ?></td>
			<td><?php echo $u->nama_obat ?></td>
			<td><?php echo $u->jenis_obat ?></td>
			<td><?php echo $u->harga_obat ?></td>
			<td><?php echo $u->stok ?></td>
			<td><a href='<?php echo site_url('Apotek/edit/'.$u->kode_obat); ?>' class="btn btn-info">Edit</a></td>
			<td><a href='<?php echo site_url('Apotek/hapus/'.$u->kode_obat); ?>' class="btn btn-danger">Hapus</a></td>
		</tr>
		<?php } ?>
	</table><br>
                                
        <center><ul class="pagination">
            <?php echo $halaman; ?>
        </ul></center>
   

	
	</div>
	
	
	<center><a href='<?php echo site_url('Apotek/tambah_obat'); ?>' class="btn btn-primary">Tambah Obat</a></center>
	
</body>
	<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.js">
	</script>
	<script type="text/javascript" src="<?php echo base_url()?>assets/js/bootstrap.js">
	</script>
</html>
		