<!DOCTYPE html>
<html>
<head>
	<title>Jual Beli Kain Songket</title>

  <style type="text/css">
    aside{
      position: center;
    }
  </style>

  <script type="text/javascript">
        function hitungtotal(){
        // var nama = (document.form.inama.value);
        var jenis = (document.form.ijenis.value);
        var jumlahpaket = parseFloat (document.form.ijumlah.value);
        var ht = 0.0 ;
        var sub = 0.0;
        var diskon = 0.0;
        var total = 0.0;
        if (jenis == "Corak") {
          ht = 100000;
        }
        else if(jenis == "Modif")
        {
          ht = 20000;
        }
        else
        {
          ht = 15000;
        }

        sub = jumlahpaket*ht;
        if (document.form.imamber.checked == true) 
        {
          diskon = 0.10 * sub;
        }
        else
        {
          diskon=0.0;
        }
        total = sub - diskon;
        document.form.otiket.value=eval(ht);
        document.form.osub.value=eval(sub);
        document.form.odiskon.value=eval(diskon);
        document.form.ototal.value=eval(total);
      }
        </script>

</head>

  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/animate.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap/parsley/parsley.css">


<body>

<aside>
  <div class="container animated shake">
    <div class="col-lg-4"></div>
    <div class="col-lg-10">
      <div class="well well-lg" style="">
        <center><h1 align="center">Transaksi Jual Beli Kain Songket</h1></center>
        <center><h4 align="center">Selamat Datang</h4></center>
      </div>  
     <form name="form" onchange="hitungtotal()">
  <br>
      <!-- <div class="form-group">
        <label class="col-sm-4 control-label animated bounceInDown" >
          Nama
        </label>
        <div class="col-sm-8">
          <input type="text" class="form-control animated bounceInLeft" placeholder="Masukan Nama" name="inama">
        </div>
      </div>
 -->
  
      <div class="form-group">
        <label class="col-sm-4 control-label animated bounceInDown">
          Jenis
        </label>
        <div class="col-sm-8" >
        <select name="ijenis" class="form-control animated bounceInLeft" style="">
            <option value="Pilih...">Pilih Jenis Songket...</option>
            <option value="Corak">Corak</option>
            <option value="Modif">Modif</option>
            <option value="Variasi">Variasi</option>
          </select>
        </div>
      </div>
            
      <div class="form-group">
        <label class="col-sm-4 control-label animated bounceInDown" >
          Jumlah
        </label>
        <div class="col-sm-8" >
          <input type="text" class="form-control animated bounceInLeft" placeholder="Masukan Berapa Jumlah Dibeli" name="ijumlah" style="">
        </div>
      </div>
        
       <div class="form-group">
        <label class="col-sm-4 control-label animated bounceInDown">
          Member
        </label>
        <div class="col-sm-8">
          <input type="checkbox" class="form-control animated bounceInLeft" placeholder="Apakah Anda Member" name="imamber" style="align-content: right;">
        </div>
      </div>
   
      <div class="form-group">
        <label class="col-sm-4 control-label animated bounceInDown">
          Harga
        </label>
        <div class="col-sm-8">
          <input type="text" class="form-control animated bounceInLeft" placeholder="0000000" name="otiket" style="">
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-4 control-label animated bounceInDown">
          Sub Total
        </label>
        <div class="col-sm-8">
          <input type="text" class="form-control animated bounceInLeft" placeholder="0000000" name="osub" style="">
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-4 control-label animated bounceInDown">
          Diskon
        </label>
        <div class="col-sm-8">
          <input type="text" class="form-control animated bounceInLeft" placeholder="0000000" name="odiskon" style="">
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-4 control-label animated bounceInDown">
          Total Bayar
        </label>
        <div class="col-sm-8">
          <input type="text" class="form-control animated bounceInLeft" placeholder="0000000" name="ototal" style="">
        </div>
      </div>
          
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="button" class="btn btn-warning animated bounceInDown" value="Hitung" Onclick="hitungtotal()">
          
          <input type="reset" name="" value="Ulang" class="btn btn-danger animated bounceInDown">
    </aside>

</body>
</html>