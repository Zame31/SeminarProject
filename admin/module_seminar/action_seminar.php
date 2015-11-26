<?php
session_start();
include "../../main/connection.php";
include "../../main/upload.php";

$module=$_GET['module'];
$act=$_GET['act'];


//UPDATE SEMINAR
if ($module=='data_seminar' AND $act=='update_seminar'){

    $lokasi_file    = $_FILES['banner']['tmp_name'];
  $tipe_file      = $_FILES['banner']['type'];
  $nama_file      = $_FILES['banner']['name'];
  $direktori_file = "../pic/pic_seminar/$nama_file";
  UploadImage($nama_file);

    mysql_query("UPDATE seminar SET 
                                    tema           = '$_POST[tema]',
                                    nama_seminar   = '$_POST[nama_seminar]',
                                    penyelenggara  = '$_POST[penyelenggara]',
                                    waktu        	 = '$_POST[waktu]',
                                    tanggal        = '$_POST[tanggal]',
                                    kode_lokasi    = '$_POST[kode_lokasi]',
                                    kapasitas      = '$_POST[kapasitas]',
                                    banner          = '$nama_file'      
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
  $kode_lokasi                 = $_POST["kode_lokasi"]; 
  //GAMBAR
  $lokasi_file    = $_FILES['banner']['tmp_name'];
  $tipe_file      = $_FILES['banner']['type'];
  $nama_file      = $_FILES['banner']['name'];
  $direktori_file = "../pic/pic_seminar/$nama_file";

   if($tipe_file != "image/jpeg" AND $tipe_file != "image/png" AND
     $tipe_file != "image/jpg"){
          echo "<script>window.alert('Tipe File tidak di ijinkan.');
          window.location=(href='../admin.php?module=data_seminar')</script>";
      }else{
                UploadImage($nama_file);                             
  $sql    = "INSERT INTO seminar(kode_seminar,tema,nama_seminar,penyelenggara,waktu,tanggal,kode_lokasi,kapasitas,banner) 
              values ('$kode_seminar','$tema','$nama_seminar','$penyelenggara','$waktu','$tanggal','$kode_lokasi','$kapasitas','$nama_file')";
  $kueri = mysql_query($sql);
}
  header('location:../admin.php?module=data_seminar');
}
?>

