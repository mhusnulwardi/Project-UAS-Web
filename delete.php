<?php 
if (isset($_GET['id'])) {
	$id = $_GET['id'];
	$sql = mysqli_query($this->koneksi(),"DELETE FROM tbl_songket WHERE id = '$id'" );

	if ($sql) {
		header("location:koneksi.php");
	}else{
		echo "data gagal dihapus".mysqli_error($sql);
	}
}
 ?>