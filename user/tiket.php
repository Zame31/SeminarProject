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
  <link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
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

  $tampil_admin = mysql_query("SELECT nama_seminar,no_daftar,seminar.kode_seminar,tanggal_daftar,mahasiswa.nim,mahasiswa.nama,mahasiswa.jurusan
                               FROM seminar,pendaftaran,mahasiswa
                               WHERE seminar.kode_seminar=pendaftaran.kode_seminar and pendaftaran.nim=mahasiswa.nim ");
  $no=1;
  while ($tampil=mysql_fetch_array($tampil_admin)){

    echo "
       <div class='container'>
          <div class='align'>
            <div class='tiket'>
              <div class='tiket-title'>
                <span>$tampil[nama_seminar]</span>
                <span class='waktu'>12 Desember 2015 Pukul 12:00 - 14:00</span>
              </div>
              <div class='row tiket-body'>
                <div class='col-lg-4'>Kode Pendaftaran</div>
                <div class='col-lg-8'>$tampil[kode_seminar]$tampil[no_daftar]</div>
                <div class='col-lg-4'>Tanggal Daftar</div>
                <div class='col-lg-8'>$tampil[tanggal_daftar]</div>
                <div class='col-lg-4'>NIM</div>
                <div class='col-lg-8'>$tampil[nim]</div>
                <div class='col-lg-4'>Nama Peserta</div>
                <div class='col-lg-8'></div>
                 <div class='col-lg-4'>Jurusan</div>
                <div class='col-lg-8'></div>
              </div>    
            </div>    
          </div>
        </div>
    ";
  }
?>