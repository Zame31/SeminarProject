<?php
session_start();
include "../../main/connection.php";

$module=$_GET['module'];
$act=$_GET['act'];



//UPDATE MAHASISWA
if ($module=='data_tamu' AND $act=='update_tamu'){
    mysql_query("UPDATE tamu SET
                                    nama_tamu        = '$_POST[nama]',
                                    gelar            = '$_POST[gelar]',
                                    alamat_tamu      = '$_POST[alamat]',
                                    pekerjaan        = '$_POST[pekerjaan]',
                                    umur             = '$_POST[umur]',
                                    jenis_kelamin    = '$_POST[jk]',
                                    telepon       	 = '$_POST[telepon]',
                                    email            = '$_POST[email]'
                           WHERE    kode_tamu   = '$_POST[id]'");
  
  header('location:../admin.php?module='.$module);
}

//DELETE MAHASISWA
elseif ($module=='data_tamu' AND $act=='hapustamu'){
  mysql_query("DELETE FROM tamu WHERE kode_tamu = '$_GET[id]'");
  header('location:../admin.php?module='.$module);
}

//EXPORT KE EXCEL
elseif ($module=='data_tamu' AND $act=='export'){
  header("Content-type: application/vnd-ms-excel");
  header("Content-Disposition: attachment; filename=data_tamu.xls");
  include "table_tamu.php";
 } 

//TAMBAH MAHASISWA
else {
  $kode_tamu            = $_POST["kode_tamu"];
  $nama           = $_POST["nama"];
  $gelar          = $_POST["gelar"];
  $alamat         = $_POST["alamat"];
  $pekerjaan      = $_POST["pekerjaan"];
  $umur           = $_POST["umur"];
  $jk             = $_POST["jk"];
  $telepon        = $_POST["telepon"];
  $email          = $_POST["email"];
                                  
  $sql    = "INSERT INTO tamu(kode_tamu,nama_tamu,gelar,alamat_tamu,pekerjaan,umur,jenis_kelamin,telepon,email)
              values ('$kode_tamu','$nama','$gelar','$alamat','$pekerjaan','$umur','$jk','$telepon','$email')";
  $kueri = mysql_query($sql);
  header('location:../admin.php?module=data_tamu');
}
?>

