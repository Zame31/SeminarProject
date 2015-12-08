<!DOCTYPE html>
<html>
<head>
  <title>Seminar Kampus</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="E-Learning Website" />
  <meta name="keywords" content="learning, website" />
  <meta name="author" content="Zamzam Nurzaman" />
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/css/style_user.css">
  <link rel="stylesheet" href="../assets/vendor/font-awesome/css/font-awesome.min.css">
  <link href="http://fonts.googleapis.com/css?family=Roboto:300,300italic,300,100italic,100,300italic,500,500italic,700,900,900italic,700italic%7COswald:300,300,700" rel="stylesheet" type="text/css">
  <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300,300,300italic,300italic,700,700italic' rel='stylesheet' type='text/css'>
  <script src="../assets/js/jquery.min.js"></script>
  <script src="../assets/js/bootstrap.min.js"></script>
</head>
<body>

<?php
  session_start();
  date_default_timezone_set('Asia/Jakarta');
  include "../main/connection.php";

  $module=$_GET['module'];
  $act=$_GET['act'];

  if ($module=='data_user' AND $act=='tambah'){
    $nim            = $_POST["nim"];
    $nama           = $_POST["nama"];
    $jurusan        = $_POST["jurusan"];
    $telepon        = $_POST["telepon"];
    $email          = $_POST["email"];

    $kode_seminar = $_POST["kode_seminar"];
    $tanggal_daftar = date('Y-m-d h:i:s');
                   
    $sql    = "INSERT INTO mahasiswa(nim,nama,jurusan,telepon,email) 
                values ('$nim','$nama','$jurusan','$telepon','$email')";
    $kueri = mysql_query($sql);

    $sql    = "INSERT INTO pendaftaran(tanggal_daftar,kode_seminar,nim) 
                values ('$tanggal_daftar','$kode_seminar','$nim')";
    $kueri = mysql_query($sql);
  }


  $tampil_admin = mysql_query("SELECT nama_seminar,no_daftar 
                               FROM seminar,pendaftaran 
                               WHERE seminar.kode_seminar=pendaftaran.kode_seminar AND 
                                     pendaftaran.kode_seminar='$kode_seminar' AND 
                                     pendaftaran.nim='$nim' AND pendaftaran.tanggal_daftar='$tanggal_daftar'");
  $no=1;
  while ($tampil=mysql_fetch_array($tampil_admin)){

    echo "
       <div class='container'>
          <div class='align'>
            <div class='tiket'>
              <div class='tiket-title'>
                <span> $tampil[nama_seminar]</span>
                <span class='waktu'>12 Desember 2015 Pukul 12:00 - 14:00</span>
              </div>
              <div class='row tiket-body'>
                <div class='col-lg-4'>Kode Pendaftaran</div>
                <div class='col-lg-8'>$kode_seminar$tampil[no_daftar]</div>
                <div class='col-lg-4'>Tanggal Daftar</div>
                <div class='col-lg-8'>$tanggal_daftar</div>
                <div class='col-lg-4'>NIM</div>
                <div class='col-lg-8'>$nim</div>
                <div class='col-lg-4'>Nama Peserta</div>
                <div class='col-lg-8'>$nama</div>
                 <div class='col-lg-4'>Jurusan</div>
                <div class='col-lg-8'>$jurusan</div>
              </div>    
            </div>    
          </div>
          <a type='button' class='btn btn-default tiket-button' href='user/cetak_pdf_user.php'><i class='fa fa-print'></i>Print</a>
        </div>
    ";
  }
  //header('location:../index.php');
?>

