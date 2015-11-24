<?php
session_start();
include "../../main/connection.php";

$module=$_GET['module'];
$act=$_GET['act'];



//UPDATE ADMIN
if ($module=='data_admin' AND $act=='update_admin'){
  if (empty($_POST[password])) {
    mysql_query("UPDATE admin SET username       = '$_POST[username]',
                                  nama_lengkap   = '$_POST[nama_lengkap]',
                                  alamat         = '$_POST[alamat]',
                                  email          = '$_POST[email]',
                                  telp        	= '$_POST[telp]',
                                  blokir         = '$_POST[blokir]'                  
                           WHERE  id_session     = '$_POST[id]'");
  }
  // Apabila password diubah
  else{
    $pass=md5($_POST[password]);
    mysql_query("UPDATE admin SET username        = '$_POST[username]',
                                  password        = '$pass',
                                  nama_lengkap    = '$_POST[nama_lengkap]',
                                  alamat          = '$_POST[alamat]',
                                  email           = '$_POST[email]',
                                  telp         = '$_POST[telp]',
                                  blokir          = '$_POST[blokir]'
                           WHERE id_session      = '$_POST[id]'");
  }
  header('location:../admin.php?module='.$module);
}

//DELETE ADMIN
elseif ($module=='data_admin' AND $act=='hapusadmin'){
  mysql_query("DELETE FROM admin WHERE id_session = '$_GET[id]'");
  header('location:../admin.php?module='.$module);
}
//EXPORT KE EXCEL
elseif ($module=='data_admin' AND $act=='export'){
  header("Content-type: application/vnd-ms-excel");
  header("Content-Disposition: attachment; filename=data_admin.xls");
  include "table_admin.php";
}
//TAMBAH ADMIN
else {
  $username       = $_POST["username"];
  $password       = md5($_POST[password]);
  $nama_lengkap   = $_POST["nama_lengkap"];
  $alamat         = $_POST["alamat"];
  $email          = $_POST["email"];
  $telp           = $_POST["telp"];
  $blokir         = $_POST["blokir"]; 
                                  
  $sql    = "INSERT INTO admin(username,password,nama_lengkap,alamat,email,telp,blokir,id_session) 
              values ('$username','$password','$nama_lengkap','$alamat','$email','$telp','$blokir','$password')";
  $kueri = mysql_query($sql);
  header('location:../admin.php?module=data_admin');
}
?>

