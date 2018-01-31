<!DOCTYPE html>
<html>
<head>
    <style type="text/css">
        *{margin: 0px; padding: 0px;}
        body{
            width: 100%;
        }
header{
    width: 100%;
    height: 600px;
}
header img{
    width: 100%;
    height: 600px;
}
.awal{
    width: 100%;
    height: 650px;
}
.sidebar{
    top: -20px;
    height: 650px;
    background-color: #67acb3ff;
}
.sidebar li{
    list-style: none;
    padding-left: 20px;
    text-align: center;
    font-size: 18px;
}
.sidebar li a{
    color: black;
    display: block;
}
/*awal icon wisata*/
.icon-wisata ul{
    list-style: none;
}
.icon-wisata ul li{
    width: 350px;
    float: left;
    padding-left: 4%;
}
.icon-wisata h2{
    text-align: center;
    margin: 20px 0px 20px 0px;
}
.icon-wisata ul li img{
    width: 300px;
    height: 200px;
    margin-top: 15px;
}
.icon-wisata ul li p{
    text-align: justify;
}
/*akhir icon wisata*/
.content h2{
    text-align: center;
}
.content p{
    text-align: justify;
    padding-left: 10%;
}
.copyright{
    background-color: #66ccff;
    padding: 2% 0;
}
.copyright p{
    color: white;
}
.copyright a{
    color: white;
}
.copyright a:hover{
    color: black;
    text-decoration:none;
}

    </style>
    <title>Admin</title>
    <link rel="stylesheet" type="text/css" href="style1.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
  
    <img src="gambar/menu.png" >
    <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><b>Songket Nusantara</b></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="halamanDepan.php">Home <span class="sr-only">(current)</span></a></li>
        <!-- <li><a href="berita_terbaru.php">Informasi terbaru</a></li> -->
        <li><a href="koneksi.php">Data Songket</a></li>
        <!-- <li><a href="">Gambar</a></li>
        <li><a href="">Jenis</a></li> -->
      </ul>
      <!--<form class="navbar-form navbar-right" role="search">-->
      <!--  <div class="form-group">-->
      <!--    <input type="text" class="form-control" placeholder="Search">-->
      <!--  </div>-->
      <!--  <button type="submit" class="btn btn-primary glyphicon glyphicon-search"></button>-->
      <!--</form>-->
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php">Logout</a></li>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class="container_fluid awal">
  <div class="row">
     <div class="col-sm-5 col-md-2 sidebar">
        <h1 class="glyphicon glyphicon-user" style="align-content: center; left: 85px;"></h1>
        <h3 style="text-align: center;">M. Husnul Wardi</h3>
    </div>
    <div class="col-sm-8 col md-3 content">
      <h2 style="font-family: cooper;">Admin</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
    <!-- <img src="gambar/tenun.jpg" style="width: 25%; margin-left: 20%;" >
    <img src="gambar/songket.jpg" style="width: 25%;"> -->
  </div>
</div>


<!-- <div class="container_fluid">
  <div class="row copyright text-center">
    <p><i>&copy Copyright Songket Indonesia 2018</i> | <a href="https://facebook.com"><i> M. Husnul Wardi</i></a></p>
  </div>
</div>
 -->
</body>
</html>