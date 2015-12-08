<?php
session_start();
include "../../main/connection.php";

$module=$_GET['module'];
$act=$_GET['act'];



//UPDATE MAHASISWA
if ($module=='data_narasumber_seminar' AND $act=='update_narasumber_seminar'){
    mysql_query("UPDATE narasumber_seminar SET
                                    kode_narasumber   = '$_POST[kode_narasumber]',
                           WHERE    kode_seminar   = '$_POST[id]'");
  
  header('location:../admin.php?module='.$module);
}

//DELETE MAHASISWA
elseif ($module=='data_narasumber_seminar' AND $act=='hapusnarasumber_seminar'){
  mysql_query("DELETE FROM narasumber_seminar WHERE kode_seminar = '$_GET[id]'");
  header('location:../admin.php?module='.$module);
}

//EXPORT KE EXCEL
 else if ($module=='data_narasumber_seminar' AND $act=='export'){
  header("Content-type: application/vnd-ms-excel");
  header("Content-Disposition: attachment; filename=data_narasumber_seminar.xls");
  include "table_narasumber_seminar.php";
}

//TAMBAH MAHASISWA
else{
      $kode_seminar   = $_POST["kode_seminar"];
      $kode_narasumber = $_POST["kode_narasumber"];
      
                                      
      $sql    = "INSERT INTO narasumber_seminar(kode_seminar,kode_narasumber)
                  values ('$kode_seminar',$kode_narasumber')";
      $kueri = mysql_query($sql);
      header('location:../admin.php?module=data_narasumber_seminar');
    }
?>

