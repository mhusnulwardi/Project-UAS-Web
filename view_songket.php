<!DOCTYPE html>
<html>
<head>
	<title>Data Songket</title>
	
</head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css">
<body>
	<img src="gambar/menu.png">
<nav class="navbar navbar-inverse" >
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false" >
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="halamanDepan.php">Home <span class="sr-only">(current)</span></a></li>
        <li class="active"><a href="koneksi.php">Data Songket</a></li>
        <li><a href="#">Gambar</a></li>
        <li><a href="#">Jenis</a></li>
        <li class="dropdown">
          <!-- <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Jenis <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">MOTIF CORAK</a></li>
            <li><a href="#">MOTIF BATIK</a></li>
            <li><a href="#">MOTIF TENGKILIS</a></li>
            <li><a href="#">MOTIF LUKIS</a></li>
            <li><a href="#">MOTIF GAMBIT</a></li>
            <li><a href="#">MOTTIF LOTIM</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">SONGKET LOMBOK</a></li>
            <li><a href="#">SONGKET JAWA</a></li>
          </ul> -->
        </li>
      </ul>


      <form class="navbar-form navbar-right" role="search" >
        <div class="form-group">
          <input type="text" class="form-control"  placeholder="search">
        </div>
        	
        <button type="submit" class="btn btn-primary" >Cari</button>
      </form>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


	<div class="container animated shake">
		<div class="col-lg-6"></div>
		<div class="col-lg-14" >
			<div class="well well-lg">
				<center><h1 align="center" style="font-family: cooper;">Data Songket</h1></center>
				<center><h4 align="center" style="font-family: serif;">Selamat Datang</h4></center>
			</div>	
			<br>
			<table class="table table-striped table table-bordered" style="font-family: serif; background-color: #99ffff;">
				<tr>
					<th>No</th>
					<th>Gambar</th>
					<th>Nama</th>
					<th>Jenis</th>
					<th>Stok</th>
					<th>Harga</th>
					<th>Aksi</th>
				</tr>

				 <!-- <?php
				$no = 1;
					while ($row = mysqli_fetch_object($sql)) {
						
				  ?> --> 
				<tr>
					<td><?php echo $no++;?></td>
					<td><img src="gambar/<?= $row->gambar ?> " class="img-thumbnail" width="100" ></td>
					<td><?php echo $row->nama?></td>
					<td><?php echo $row->jenis?></td>
					<td><?php echo $row->stok?></td>
					<td><?php echo $row->harga?></td>
					
					<td>
					<a class="btn btn-primary" href="koneksi.php?p=update&id=<?php echo $row->id;?>">
						<span class="glyphicon glyphicon-edit  animated flipInX"/ > Update</span>
					</a>
					<a class="btn btn-warning" href="koneksi.php?p=delete&id=<?php echo $row->id;?>">
						<span class="glyphicon glyphicon-trash  animated flipInX"/> Hapus</span>
					</a>
					<!-- <a class="btn btn-info" href="koneksi.php?p=beli&id=<?php echo $row->id;?>">
						<span class="glyphicon glyphicon-plus"> Beli </span>
					</a> -->
				</td>
		<!-- 		 <?php 

				}

				 ?> -->
 
			</table>
			
	</div>
</div>
			<div class="col-lg-4 " align="center"></div>
		<div class="col-lg-4" align="center">
			<div class="well well-lg ">
			<a href="koneksi.php?p=tambah" class="btn btn-success" href="tambah.php">
				<span class="glyphicon glyphicon-plus">
				Tambah
			</span>
			</a>
			<!-- <a href="koneksi.php?p=logout" class="btn btn-danger">
				<span class="glyphicon glyphicon-log-out ">
				 Keluar 
				</span>
			</a> -->
			<!-- <a href="home.php" class="btn btn-info">
				<span class="glyphicon glyphicon-circle-arrow-left">
				Kembali
				</span>
			</a>
 -->
		</div>
	</div>

</body>
</html>