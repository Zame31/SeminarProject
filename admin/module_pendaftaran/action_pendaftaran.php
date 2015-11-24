<?php
session_start();
include "../../main/connection.php";

$module=$_GET[module];
$act=$_GET[act];



/*//UPDATE MAHASISWA
if ($module=='data_mahasiswa' AND $act=='update_mahasiswa'){
    mysql_query("UPDATE mahasiswa SET
                                    nama   = '$_POST[nama]',
                                    jurusan          = '$_POST[jurusan]',
                                    telepon          = '$_POST[telepon]',
                                    email            = '$_POST[email]'
                           WHERE    nim   = '$_POST[id]'");
  
  header('location:../admin.php?module='.$module);
}

//DELETE MAHASISWA
elseif ($module=='data_mahasiswa' AND $act=='hapusmahasiswa'){
  mysql_query("DELETE FROM mahasiswa WHERE nim = '$_GET[id]'");
  header('location:../admin.php?module='.$module);
}*/

//TAMBAH MAHASISWA
if {
  $nim            = $_POST["nim"];
  $nama        = $_POST["nama"];
  $jurusan          = $_POST["jurusan"];
  $telepon           = $_POST["telepon"];
  $email  = $_POST["email"];
                                  
  $sql    = "INSERT INTO mahasiswa(nim,nama,jurusan,telepon,email)
              values ('$nim','$nama','$jurusan','$telepon','$email')";
  $kueri = mysql_query($sql);
  header('location:../admin.php?module=data_mahasiswa');
}
?>

