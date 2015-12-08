<?php
session_start();
date_default_timezone_set('Asia/Jakarta');
include "../../main/connection.php";

$module=$_GET['module'];
$act=$_GET['act'];



//UPDATE MAHASISWA
if ($module=='data_pendaftaran' AND $act=='update_pendaftaran'){

    $tanggal_daftar = date('Y-m-d h:i:s');
    
    mysql_query("UPDATE pendaftaran SET
                                    tanggal_daftar   = '$tanggal_daftar',
                                    kode_seminar   = '$_POST[kode_seminar]',
                                    nim   = '$_POST[nim]'
                           WHERE    no_daftar   = '$_POST[id]'");
  
  header('location:../admin.php?module='.$module);
}

//DELETE MAHASISWA
elseif ($module=='data_pendaftaran' AND $act=='hapuspendaftaran'){
  mysql_query("DELETE FROM pendaftaran WHERE no_daftar = '$_GET[id]'");
  header('location:../admin.php?module='.$module);
}

//EXPORT KE EXCEL
 else if ($module=='data_pendaftaran' AND $act=='export'){
  header("Content-type: application/vnd-ms-excel");
  header("Content-Disposition: attachment; filename=data_pendaftaran.xls");
  include "table_pendaftaran.php";
}

//TAMBAH MAHASISWA
else{
      $kode_seminar   = $_POST["kode_seminar"];
      $nim            = $_POST["nim"];
      
      $tanggal_daftar = date('Y-m-d h:i:s');


      $sql    = "INSERT INTO pendaftaran(tanggal_daftar,kode_seminar,nim) 
                values ('$tanggal_daftar','$kode_seminar','$nim')";
      $kueri = mysql_query($sql);
      header('location:../admin.php?module=data_pendaftaran');
    }
?>

