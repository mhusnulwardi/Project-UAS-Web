<?php 

class songket {

	function koneksi() {
		$host = "localhost";
		$username = "root";
		$password = "";
		$database = "db_songket";

		return mysqli_connect($host,$username,$password,$database);
	}

	function login() {
		session_start();
		if (isset($_POST['btnlogin'])) {
			$user = $_POST['username'];
			$pass = sha1(trim($_POST['password']));
			$query = "SELECT * FROM tbl_user WHERE username='$user' AND password='$pass'";
			$result = mysqli_query($this->koneksi(), $query);
		
			$count = mysqli_num_rows($result);

			if ($count == 1) {
				$data = mysqli_fetch_object($result);
				echo $data->username;
				$_SESSION['username'] =$data->username;
				header("location:koneksi.php");
				
			}else{
				header("location:login.php");
			}
		}	
	}

	function logout(){
		session_start();
		session_unset();
		session_destroy();
		header('location:login.php');
	}

	function index () {
		session_start();
		if (isset($_POST['kirim'])) {
			if ($_POST['kirim'] == "tambah") {
				$this->tambah_data();
			}
			if ($_POST['kirim'] == "update") {
				$this->update_data();
			}
		}
		$sql = mysqli_query($this->koneksi(),"SELECT * FROM tbl_songket");
		include "view_songket.php";
	}

	function tambah_data(){
		$gambar = $_POST['gambar'];
		$nama = $_POST['nama'];
		$jenis = $_POST['jenis'];
		$stok = $_POST['stok'];
		$harga = $_POST['harga'];
		$sql = mysqli_query($this->koneksi(),
			"INSERT INTO tbl_songket VALUES (NULL,  '$gambar', '$nama' , '$jenis' , '$stok' , '$harga')"
		);
		if ($sql) { //memeriksa apakah queri berhasil dieksekusi
			header("location: koneksi.php"); //jika ya. maka pindahkan laman ke imdex.php
		}
		echo($sql)? "data berhasil disimpan" : "data gagal disimpan".mysqli_erorr($sql);
	}

	function update_data(){
		$id = $_POST['id'];
		$gambar = $_POST['gambar'];
		$nama = $_POST['nama'];
		$jenis = $_POST['jenis'];
		$stok = $_POST['stok'];
		$harga = $_POST['harga'];
		$sql = mysqli_query($this->koneksi(),
			"UPDATE tbl_songket SET 
			gambar='$gambar',
			nama='$nama',
			jenis='$jenis',
			stok='$stok',
			harga='$harga'
			WHERE id = '$id'"
		);
		// echo ($sql)? "Data berhasil disimpan" : "Data Gagal disimpan".mysqli_error($sql);
	}

	function tambah () {
		include "tambah.php";
	}
	function delete () {
		include "delete.php";
	}
	function update () {
		include "update.php";
	}
}
$page = isset($_GET['p']) ? $_GET['p'] : "index";
$data = new songket();
$data->{$page}();

 ?>