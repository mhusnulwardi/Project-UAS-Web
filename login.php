
 <!DOCTYPE html>
<html>
<head>

	<title>Login</title>

 <style type="text/css">
	body {
		background-color: #33ccff;
		width: 360px;
		padding: 10% 0 0;
		margin: auto;
		background-image: url("gambar/background_login.jpg");
		font-size: 15px;
	}

	.user{
		 width: 100px;
		 height: 100px;
		 border-radius: 50%;
		 position: absolute;
		 top: -50px;
		 left: calc(50% - 50px);
	}

	input[type=text]{
		font-family: Roboto, sans-serif;
		outline: 1;
		width: 100%;
		border: 0;
		margin: 0 0 15px;
		padding: 15px;
		box-sizing: border-box;
		font-size: 14px;
		background: #66cccc;
	}

	input[type=password] {

		font-family: Roboto, sans-serif;
		outline: 1;
		background: #66cccc;
		width: 100%;
		border: 0;
		margin: 0 0 15px;
		padding: 15px;
		box-sizing: border-box;
		font-size: 14px;
	}

	button {
		font-family: Roboto, sans-serif;
		text-transform: uppercase;
		outline: 0;
		background: #00ff00;
		width: 30%;
		border: 0;
		padding: 15px;
		font-size: 17px;
		color: white;
		cursor: pointer;
	}

	button:hover {
		font-family: Roboto, sans-serif;
		text-transform: uppercase;
		outline: 0;
		background: green;
		width: 40%;
		border: 0;
		padding: 15px;
		font-size: 17px;
		color: yellow;
		cursor: pointer;
	}

	h1{
	 	margin: 0;
	 	padding: 5 0 20px;
	 	text-align: center;
	 	font-size: 22px;
	}

	.login-box p{
	 	margin: 0;
	 	padding: 0;
	 	font-weight: bold;
	}
	
/*	.login-box input{
	 	width: 100%;
	 	margin-bottom: 20px;
	}
*/	
	.login-box{
	 	width: 320px;
	 	height: 460px;
	 	background: rgba(0, 0, 0, 0.5);
	 	color: #fff;
	 	top: 200%;
	 	left: 50%;
	 	position: absolute;
	 	transform: translate(-50%,-50%);
	 	box-sizing: border-box;
	 	padding: 70px 30px;
	 }
</style>


	<script type="text/javascript">
	function login() {
		username = document.getElementById('username').value;
		password = document.getElementById('password').value;

		if (username == "admin" && password == "admin") {
			alert('Username atau Password anda sudah benar');
			window.location.href = 'halamanDepan.php';
		}else{
			alert('Username atau Password yang anda masukan salah!')
			alert('Silahkan isi kembali')
		}
	}
</script>

	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap/parsley/parsley.css">

	<script type="text/javascript" src="bootstrap/jquery.min.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="bootstrap/parsley/parsley.min.js"></script>
</head>
<body>

	<div class="container animated shake">
	<div class="container">
	<div class="col-md-6 col-md-offset-4" style="padding-top: 10%">
	<div class="login-box">
	<img src="gambar/ico.png" class="user animated bounceInDown">
	<marquee> <h2 class="animated bounceInLeft" style="font-family: serif;">Aplikasi Web Penjualan Songket</h2> </marquee>
<!-- <hr>
		<h1 class="animated bounceInRight" style="font-family: cooper;" >Songket</h1>
	
<hr> -->

	<center>
	<h3 class="animated bounceInRight" style="font-family: serif;">Silahkan Login dulu :)</h3>
	<div class="form-group">
	<label class="animated bounceInRight">Username</label>
	<input type="text" name="text" placeholder="username" id="username" class="form-control animated bounceInLeft">	
	</div>
   	<br>
	<div class="form-group">
	<label class="animated bounceInRight">Password</label>
	<input type="password" name="password" placeholder="********" id="password" class="form-control animated bounceInLeft">	
	</div>
	<br>
	<div class="form-group">
	<button onclick="login()" class="btn btn-success animated bounceInDown">Login</button>	
	</div>
	
	</center>

</body>
</html>

