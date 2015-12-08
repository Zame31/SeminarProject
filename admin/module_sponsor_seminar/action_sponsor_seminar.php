<?php
session_start();
include "../../main/connection.php";

$module=$_GET['module'];
$act=$_GET['act'];



//UPDATE MAHASISWA
if ($module=='data_sponsor_seminar' AND $act=='update_sponsor_seminar'){
    mysql_query("UPDATE sponsor_seminar SET
                                    kode_sponsor   = '$_POST[kode_sponsor]'
                           WHERE    kode_seminar   = '$_POST[id]' and kode_sponsor   = '$_POST[id2]'");
  
  header('location:../admin.php?module='.$module);
}

//DELETE MAHASISWA
elseif ($module=='data_sponsor_seminar' AND $act=='hapussponsor_seminar'){
  mysql_query("DELETE FROM sponsor_seminar WHERE kode_seminar = '$_GET[id]' and kode_sponsor = '$_GET[id2]'");
  header('location:../admin.php?module='.$module);
}

//EXPORT KE EXCEL
 else if ($module=='data_sponsor_seminar' AND $act=='export'){
  header("Content-type: application/vnd-ms-excel");
  header("Content-Disposition: attachment; filename=data_sponsor_seminar.xls");
  include "table_sponsor_seminar.php";
}

//TAMBAH MAHASISWA
else{
      $kode_seminar   = $_POST["kode_seminar"];
      $kode_sponsor   = $_POST["kode_sponsor"];
      
                                      
      $sql    = "INSERT INTO sponsor_seminar(kode_sponsor,kode_seminar)
                  values ('$kode_sponsor','$kode_seminar')";
      $kueri = mysql_query($sql);
      header('location:../admin.php?module=data_sponsor_seminar');
    }
?>