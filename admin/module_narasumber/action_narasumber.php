<?php
session_start();
include "../../main/connection.php";

$module=$_GET['module'];
$act=$_GET['act'];



//UPDATE MAHASISWA
if ($module=='data_narasumber' AND $act=='update_narasumber'){
    mysql_query("UPDATE narasumber SET
                                    nama_narasumber  = '$_POST[nama]',
                                    gelar            = '$_POST[gelar]',
                                    alamat_narasumber = '$_POST[alamat]',
                                    pekerjaan        = '$_POST[pekerjaan]',
                                    umur             = '$_POST[umur]',
                                    jenis_kelamin    = '$_POST[jk]',
                                    telepon       	 = '$_POST[telepon]',
                                    email            = '$_POST[email]'
                           WHERE    kode_narasumber  = '$_POST[id]'");
  
  header('location:../admin.php?module='.$module);
}

//DELETE NARASUMBER
elseif ($module=='data_narasumber' AND $act=='hapusnarasumber'){
  mysql_query("DELETE FROM narasumber WHERE kode_narasumber = '$_GET[id]'");
  header('location:../admin.php?module='.$module);
}

//EXPORT KE EXCEL
elseif ($module=='data_narasumber' AND $act=='export'){
  header("Content-type: application/vnd-ms-excel");
  header("Content-Disposition: attachment; filename=data_narasumber.xls");
  include "table_narasumber.php";
}
//TAMBAH NARASUMBER
else {
  $kode_narasumber            = $_POST["kode_narasumber"];
  $nama           = $_POST["nama"];
  $gelar          = $_POST["gelar"];
  $alamat         = $_POST["alamat"];
  $pekerjaan      = $_POST["pekerjaan"];
  $umur           = $_POST["umur"];
  $jk             = $_POST["jk"];
  $telepon        = $_POST["telepon"];
  $email          = $_POST["email"];
                                  
  $sql    = "INSERT INTO narasumber(kode_narasumber,nama_narasumber,gelar,alamat_narasumber,pekerjaan,umur,jenis_kelamin,telepon,email)
              values ('$kode_narasumber','$nama','$gelar','$alamat','$pekerjaan','$umur','$jk','$telepon','$email')";
  $kueri = mysql_query($sql);
  header('location:../admin.php?module=data_narasumber');
}
?>

