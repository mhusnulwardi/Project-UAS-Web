<!DOCTYPE html>
<html>
<head>
	<title>Ubah Data Songket</title>

	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css">

</head>

<body>
	<div class="container">
	<!-- 	<h2 align="center">Ubah Data Komputer</h2> -->
		<div class="well well-lg">
				<center><h1 align="center" style="font-family: serif;">Ubah Data Songket</h1></center>
				<center><h4 align="center">Selamat Datang</h4></center>
			</div>	
		<hr>
		<?php
		$id = $_GET['id'];
		$sql = mysqli_query($this->koneksi(),"SELECT * FROM tbl_songket WHERE id='$id'");
		$row = mysqli_fetch_object($sql);
		?>
		<form action="koneksi.php ?>" method="POST" class="form-horizontal">

			<input type="hidden" name="id" value="<?php echo $row->id; ?>"> 
			<div class="form-group">
				<label class="col-sm-2 control-label" style="font-family: serif;">
					Gambar
				</label>
				<div class="col-sm-6">
					<select name="gambar" class="img-thumbnail" value="<?php echo $row->gambar; ?>">
            		<option >Pilih...</option>
            		<option >1.jpg</option>
            		<option >2.jpg</option>
            		<option >3.jpg</option>
            		<option >4.jpg</option>
            		<option >5.jpg</option>
            		<option >6.jpg</option>
					</select>
			</div>
			</div>

			<div class="form-group">
				<label class="col-sm-2 control-label" style="font-family: serif;">
					Nama
				</label>
				<div class="col-sm-6">
					<input type="text" name="nama" class="form-control" value="<?php echo $row->nama; ?>"> 
				</div>
			</div>

			<div class="form-group">
				<label class="col-sm-2 control-label" style="font-family: serif;">
					Jenis
				</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" placeholder="Masukan Merk Disini" name="jenis" value="<?php echo $row->jenis; ?>">
				</div>
			</div>

			<div class="form-group">
				<label class="col-sm-2 control-label" style="font-family: serif;">
					Stok
				</label>
				<div class="col-sm-4">
					<input type="number" class="form-control" placeholder="Masukan Stok Disini" name="stok" value="<?php echo $row->stok; ?>">
				</div>
			</div>
			
			<div class="form-group">
				<label class="col-sm-2 control-label" style="font-family: serif;">
					Harga
				</label>
				<div class="col-sm-4">
					<input type="number" class="form-control" placeholder="Masukan Harga Disini" name="harga" value="<?php echo $row->id; ?>">
				</div>
			</div>

			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-success" name="kirim" value="update">
						<span class="glyphicon glyphicon-plus" aria-hidden="true" >
						Ubah
					</span>
				</button>

					<button type="reset" class="btn btn-danger">
						<span class="glyphicon glyphicon-trash" aria-hidden="true">
						Hapus
					</span>
				</button>
				</div>
			</div>
		</form>
	</div>
	
</body>
</html>