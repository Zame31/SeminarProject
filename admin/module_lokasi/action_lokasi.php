<?php
session_start();
include "../../main/connection.php";

$module=$_GET['module'];
$act=$_GET['act'];


//UPDATE lokasi
if ($module=='data_lokasi' AND $act=='update_lokasi'){
    mysql_query("UPDATE lokasi SET 
                                    nama_lokasi           = '$_POST[nama_lokasi]',
                                    alamat  = '$_POST[alamat]',
                                    harga_sewa        	 = '$_POST[harga_sewa]'
                           WHERE    kode_lokasi   = '$_POST[id]'");
  
  header('location:../admin.php?module='.$module);
}

//DELETE lokasi
elseif ($module=='data_lokasi' AND $act=='hapuslokasi'){
  mysql_query("DELETE FROM lokasi WHERE kode_lokasi = '$_GET[id]'");
  header('location:../admin.php?module='.$module);
}

//EXPORT KE EXCEL
elseif ($module=='data_lokasi' AND $act=='export'){
  header("Content-type: application/vnd-ms-excel");
  header("Content-Disposition: attachment; filename=data_lokasi.xls");
  include "table_lokasi.php";
}

//TAMBAH lokasi
else {
  $kode_lokasi            = $_POST["kode_lokasi"];
  $nama_lokasi         = $_POST["nama_lokasi"];
  $alamat          = $_POST["alamat"];
  $harga_sewa  = $_POST["harga_sewa"];

                                  
  $sql    = "INSERT INTO lokasi(kode_lokasi,nama_lokasi,alamat,harga_sewa) 
              values ('$kode_lokasi','$nama_lokasi','$alamat','$harga_sewa')";
  $kueri = mysql_query($sql);
  header('location:../admin.php?module=data_lokasi');
}
?>

