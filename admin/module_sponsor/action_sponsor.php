<?php
session_start();
include "../../main/connection.php";

$module=$_GET['module'];
$act=$_GET['act'];



//UPDATE sponsor
if ($module=='data_sponsor' AND $act=='update_sponsor'){
    mysql_query("UPDATE sponsor SET

                                    nama_sponsor   = '$_POST[nama_sponsor]'
                                    WHERE    kode_sponsor   = '$_POST[id]'");
  
  header('location:../admin.php?module='.$module);
}

//DELETE sponsor
elseif ($module=='data_sponsor' AND $act=='hapussponsor'){
  mysql_query("DELETE FROM sponsor WHERE kode_sponsor = '$_GET[id]'");
  header('location:../admin.php?module='.$module);
}

//EXPORT KE EXCEL
elseif ($module=='data_sponsor' AND $act=='export'){
  header("Content-type: application/vnd-ms-excel");
  header("Content-Disposition: attachment; filename=data_sponsor.xls");
  include "table_sponsor.php";
}

//TAMBAH sponsor
else {
  $kode_sponsor            = $_POST["kode_sponsor"];
   $nama_sponsor        = $_POST["nama_sponsor"];

                                  
  $sql    = "INSERT INTO sponsor(kode_sponsor,nama_sponsor)
              values ('$kode_sponsor','$nama_sponsor')";
  $kueri = mysql_query($sql);
  header('location:../admin.php?module=data_sponsor');
}
?>

