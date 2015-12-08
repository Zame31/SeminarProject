<?php
session_start();
include "../../main/connection.php";

$module=$_GET['module'];
$act=$_GET['act'];



//UPDATE MAHASISWA
if ($module=='data_tamu_seminar' AND $act=='update_tamu_seminar'){
    mysql_query("UPDATE tamu_seminar SET
                                    kode_tamu   = '$_POST[kode_tamu]',
                           WHERE    kode_seminar   = '$_POST[id]'");
  
  header('location:../admin.php?module='.$module);
}

//DELETE MAHASISWA
elseif ($module=='data_tamu_seminar' AND $act=='hapustamu_seminar'){
  mysql_query("DELETE FROM tamu_seminar WHERE kode_seminar = '$_GET[id]'");
  header('location:../admin.php?module='.$module);
}

//EXPORT KE EXCEL
 else if ($module=='data_tamu_seminar' AND $act=='export'){
  header("Content-type: application/vnd-ms-excel");
  header("Content-Disposition: attachment; filename=data_tamu_seminar.xls");
  include "table_tamu_seminar.php";
}

//TAMBAH MAHASISWA
else{
      $kode_seminar   = $_POST["kode_seminar"];
      $kode_tamu = $_POST["kode_tamu"];
      
                                      
      $sql    = "INSERT INTO tamu_seminar(kode_seminar,kode_tamu)
                  values ('$kode_seminar',$kode_tamu')";
      $kueri = mysql_query($sql);
      header('location:../admin.php?module=data_tamu_seminar');
    }
?>

