<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data</title>

	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css">

</head>

<body>
	<div class="container">
		<!-- <h2 align="center">Tambah Data Songket</h2> -->
		<div class="well well-lg">
				<center><h1 align="center">Tambah Data Songket</h1></center>
				<center><h4 align="center">Selamat Datang</h4></center>
			</div>	
		<hr>
		<form action="koneksi.php" method="POST" class="form-horizontal">
			<div class="form-group">
				<label class="col-sm-2 control-label">
					Gambar
				</label>
				<div class="col-sm-6">
					<select name="gambar" class="img-thumbnail" >
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
				<label class="col-sm-2 control-label">
					Nama
				</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" placeholder="Masukan Nama Songket" name="nama">
				</div>
			</div>

			<div class="form-group">
				<label class="col-sm-2 control-label">
					Jenis
				</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" placeholder="Masukan jenis Songket" name="jenis">
				</div>
			</div>

			<div class="form-group">
				<label class="col-sm-2 control-label">
					Stok
				</label>
				<div class="col-sm-4">
					<input type="number" class="form-control" placeholder="Masukan Stok Disini" name="stok">
				</div>
			</div>
			
			<div class="form-group">
				<label class="col-sm-2 control-label">
					Harga
				</label>
				<div class="col-sm-4">
					<input type="number" class="form-control" placeholder="Masukan Harga Disini" name="harga">
				</div>
			</div>

			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-success" name="kirim" value="tambah">
						<span class="glyphicon glyphicon-plus" aria-hidden="true">
						Tambah
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