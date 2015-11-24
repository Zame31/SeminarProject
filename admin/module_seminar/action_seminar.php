<?php
session_start();
include "../../main/connection.php";

$module=$_GET['module'];
$act=$_GET['act'];


//UPDATE SEMINAR
if ($module=='data_seminar' AND $act=='update_seminar'){
    mysql_query("UPDATE seminar SET 
                                    tema           = '$_POST[tema]',
                                    nama_seminar   = '$_POST[nama_seminar]',
                                    penyelenggara  = '$_POST[penyelenggara]',
                                    waktu        	 = '$_POST[waktu]',
                                    tanggal        = '$_POST[tanggal]',
                                    kapasitas      = '$_POST[kapasitas]'      
                           WHERE    kode_seminar   = '$_POST[id]'");
  
  header('location:../admin.php?module='.$module);
}

//DELETE SEMINAR
elseif ($module=='data_seminar' AND $act=='hapusseminar'){
  mysql_query("DELETE FROM seminar WHERE kode_seminar = '$_GET[id]'");
  header('location:../admin.php?module='.$module);
}

//EXPORT KE EXCEL
elseif ($module=='data_seminar' AND $act=='export'){
  header("Content-type: application/vnd-ms-excel");
  header("Content-Disposition: attachment; filename=data_seminar.xls");
  include "table_seminar.php";
}

//TAMBAH SEMINAR
else {
  $kode_seminar              = $_POST["kode_seminar"];
  $tema                      = $_POST["tema"];
  $nama_seminar              = $_POST["nama_seminar"];
  $penyelenggara             = $_POST["penyelenggara"];
  $waktu                     = $_POST["waktu"];
  $tanggal                   = $_POST["tanggal"];
  $kapasitas                 = $_POST["kapasitas"]; 
                                  
  $sql    = "INSERT INTO seminar(kode_seminar,tema,nama_seminar,penyelenggara,waktu,tanggal,kapasitas) 
              values ('$kode_seminar','$tema','$nama_seminar','$penyelenggara','$waktu','$tanggal','$kapasitas')";
  $kueri = mysql_query($sql);
  header('location:../admin.php?module=data_seminar');
}
?>

