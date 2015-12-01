<?php
  session_start();
  date_default_timezone_set('Asia/Jakarta');
  include "../main/connection.php";

  $nim            = $_POST["nim"];
  $nama           = $_POST["nama"];
  $jurusan        = $_POST["jurusan"];
  $telepon           = $_POST["telepon"];
  $email         = $_POST["email"];

  $kode_seminar = $_POST["kode_seminar"];
  $tanggal_daftar = date('Y-m-d h:i:s');
                                  
  $sql    = "INSERT INTO mahasiswa(nim,nama,jurusan,telepon,email) 
              values ('$nim','$nama','$jurusan','$telepon','$email')";
  $kueri = mysql_query($sql);

  $sql    = "INSERT INTO pendaftaran(tanggal_daftar,kode_seminar,nim) 
              values ('$tanggal_daftar','$kode_seminar','$nim')";
  $kueri = mysql_query($sql);

  $tampil_admin = mysql_query("SELECT nama_seminar FROM seminar WHERE kode_seminar ='$kode_seminar'");

  $no=1;
  while ($tampil=mysql_fetch_array($tampil_admin)){

    echo "
        Kode Pendaftaran : KP$no;
        Tanggal Daftar : $tanggal_daftar <br>
        Nama Seminar :  $tampil[nama_seminar]<br>
        Nama Peserta : $nama <br>
        Jurusan : $jurusan <br>
        Telepon : $telepon <br>
        Email : $email
    ";
  }


  //header('location:../index.php');
?>