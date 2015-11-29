<!DOCTYPE html>
<html>
<head>
  <title>Seminar Kampus</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="E-Learning Website" />
  <meta name="keywords" content="learning, website" />
  <meta name="author" content="Zamzam Nurzaman" />
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/style_user.css">
  <link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
  <link href="http://fonts.googleapis.com/css?family=Roboto:400,300italic,300,100italic,100,400italic,500,500italic,700,900,900italic,700italic%7COswald:400,300,700" rel="stylesheet" type="text/css">
  <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
</head>
<body>
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <!--Header-->
      <div class="navbar-header"> 
        <a class="navbar-brand" href="#">
           <img src="assets/img/icon.png">
           <h1>Seminar Kampus</h1>
        </a>
      </div><!--End Header-->
      <!--Menu-->
      <div class="collapse navbar-collapse">
        <!--Cari-->
        <!--
        <form class="navbar-form navbar-right" role="search">
          <div class="form-group">
            <input type="tesadxt" class="form-control" placeholder="Search">
          </div>asd
          <button type="submit" class="btn btn-default">Cari</button>
        </form>
   sad    asdasd -->
      </div><!--End Menu-->
    </div><!--End Container-->
  </nav>
  <?php
    session_start();
    include "main/connection.php"; 
    $tampilkan = mysql_query("SELECT * FROM seminar ORDER BY kode_seminar");
  ?>
  <section class="list-seminar" id="list-seminar">
    <div class="container">
      <div class="row">
      <?php 
         while ($tampil=mysql_fetch_array($tampilkan)){
          include "main/format_tanggal.php";

      echo "  
        <div class='col-md-3'>
          <div class='seminar'>
            <img src='admin/pic/pic_seminar/$tampil[banner]' class='img-size'/>
            <div class='info'>
              <span class='title'>$tampil[nama_seminar]</span>
              <table border='0'>
                <tr> 
                  <td>Pelaksanaan </td>
                  <td> : $tanggal </td>
                </tr>
                <tr> 
                  <td>Pukul </td>
                  <td> : $tampil[waktu] </td>
                </tr>
                <tr> 
                  <td>Harga </td>
                  <td> : Rp. $tampil[harga],00 </td>
                </tr>
                <tr> 
                  <td>Tempat </td>
                  <td> : $tampil[kode_lokasi] </td>
                </tr>
              </table>
              
             
            </div>
            <div class='daftar'>
              <a type='button' class='btn btn-default' href='#$tampil[kode_seminar]' data-toggle='modal'>Detail</a>
              <a type='button' class='btn btn-default' href='#'>Daftar</a>
            </div>
          </div>
        </div>";
       echo "
          <div class='modal fade' id='$tampil[kode_seminar]' role='dialog'>
            <div class='modal-dialog'>
              <div class='modal-content'>
                <img src='admin/pic/pic_seminar/$tampil[banner]' class='img-responsive'/>
              </div>
            </div>
          </div>
        ";
        }
       ?>
      </div>
    </div>
  </section>
</body>