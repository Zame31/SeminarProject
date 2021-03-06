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
  <link href="http://fonts.googleapis.com/css?family=Roboto:300,300italic,300,100italic,100,300italic,500,500italic,700,900,900italic,700italic%7COswald:300,300,700" rel="stylesheet" type="text/css">
  <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300,300,300italic,300italic,700,700italic' rel='stylesheet' type='text/css'>
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
</head>
<body>
  <nav class="navbar navbar-default ">
    <div class="container">
      <!--Header-->
      <div class="navbar-header">
        <a class="navbar-brand" href="#">
           <img src="assets/img/ss.png">
           <h1>Seminar Kampus</h1>
           <h2>Mempermudahmu Mendaftar Seminar dan Workshop Secara Online</h2>
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
    $tampilkan = mysql_query("SELECT banner,nama_seminar,kode_seminar,tanggal,waktu,harga,seminar.kode_lokasi,nama_lokasi,kapasitas
                              FROM seminar,lokasi
                              WHERE seminar.kode_lokasi = lokasi.kode_lokasi
                              ORDER BY kode_seminar");
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
                  <td> : $tampil[nama_lokasi] </td>
                </tr>
                <tr>
                  <td> Sisa Kuota </td>
                  <td> : $tampil[kapasitas] Orang </td>
                </tr>
              </table>
            </div>";
            if ($tampil['kapasitas'] == 0) {
              echo "
              <div class='daftar'>
                <a type='button' class='btn btn-default' href='#detail$tampil[kode_seminar]' data-toggle='modal'>View</a>
                <span class='penuh'>Kuota Habis</span>
              </div>
              ";
            }else {
              echo "
              <div class='daftar'>
                <a type='button' class='btn btn-default' href='#detail$tampil[kode_seminar]' data-toggle='modal'>View</a>
                <a type='button' class='btn btn-default' href='#daftar$tampil[kode_seminar]' data-toggle='modal'>Daftar</a>
              </div>
              ";
          }
          echo "
          </div>
        </div>

          <div class='modal fade' id='detail$tampil[kode_seminar]'  role='dialog'>
            <div class='modal-dialog'>
              <div class='modal-content'>
                <img src='admin/pic/pic_seminar/$tampil[banner]' class='img-responsive'/>
              </div>
            </div>
          </div>

          <div class='modal fade' id='daftar$tampil[kode_seminar]' role='dialog'>
            <div class='modal-dialog dialog-size'>
              <div class='modal-content content-size'>
                <form class='form-horizontal' method='POST' action='user/action_user.php?module=data_user&act=tambah'>
                <div class='modal-header color-head'>
                  <p> $tampil[nama_seminar]</p>
                </div>
                <div class='modal-body body-conf'>
                  <div class='head'>Daftar Seminar</div>
                  <div class='desc'>Silahkan Isi Form Di bawah ini dengan benar  </div>
                  <input type='hidden' name='kode_seminar' value='$tampil[kode_seminar]'>
                  <div class='form-group'>
                    <label class='col-lg-3 control-label'> NIM</label>
                    <div class='col-lg-9'>
                      <input type='text' class='form-control' name='nim' placeholder='Masukan NIM anda' required>
                    </div>
                  </div>
                   <div class='form-group'>
                    <label class='col-lg-3 control-label'> Nama Lengkap</label>
                    <div class='col-lg-9'>
                      <input type='text' class='form-control' name='nama' placeholder='Nama Lengkap' required>
                    </div>
                  </div>
                  <div class='form-group'>
                    <label class='col-lg-3 control-label'> Jurusan</label>
                    <div class='col-lg-9'>
                      <input type='text' class='form-control' name='jurusan' placeholder='Jurusan' required>
                    </div>
                  </div>
                  <div class='form-group'>
                    <label for='admin-usr' class='col-lg-3 control-label'> Telepon</label>
                    <div class='col-lg-9'>
                      <input type='text' class='form-control' name='telepon' placeholder='contoh : 085730760069' required>
                    </div>
                  </div>
                  <div class='form-group'>
                    <label for='admin-usr' class='col-lg-3 control-label'> E-Mail</label>
                    <div class='col-lg-9'>
                      <input type='text' class='form-control' name='email' placeholder='contoh : nurzaman@gmail.com' required>
                    </div>
                  </div>
                </div>
                <div class='modal-footer'>
                  <button class='button-foot' data-dismiss= 'modal'>Close</button>
                  <button class='button-foot' type='submit'>Daftar</button>
                </div>
                </form>
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
