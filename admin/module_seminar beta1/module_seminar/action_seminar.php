<?php
session_start();
include "../../main/connection.php";
include "../../main/upload.php";

$module=$_GET['module'];
$act=$_GET['act'];

//UPDATE SEMINAR
if ($module=='data_seminar' AND $act=='update_seminar'){
    mysql_query("UPDATE seminar SET 
                                    tema           = '$_POST[tema]',
                                    nama_seminar   = '$_POST[nama_seminar]',
                                    penyelenggara  = '$_POST[penyelenggara]',
                                    waktu        	 = '$_POST[waktu]',
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
//IMPORT DARI EXCEL
elseif ($module=='data_seminar' AND $act=='import') {
  if (is_uploaded_file($_FILES['filename']['tmp_name'])) {
        echo "<h1>" . "File ". $_FILES['filename']['name'] ." Berhasil di Upload" . "</h1>";
        echo "<h2>Menampilkan Hasil Upload:</h2>";
        readfile($_FILES['filename']['tmp_name']);
    }

    //Import uploaded file to Database, Letakan dibawah sini..
    $handle = fopen($_FILES['filename']['tmp_name'], "r"); //Membuka file dan membacanya
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $import="INSERT INTO seminar(kode_seminar,tema,nama_seminar,penyelenggara,waktu,kapasitas,banner) 
        values(NULL,'$data[0]','$data[1]','$data[2]','$data[3]','$data[4]','$data[5]','$data[6]')"; //data array sesuaikan dengan jumlah kolom pada CSV anda mulai dari “0” bukan “1”
        mysql_query($import) or die(mysql_error()); //Melakukan Import
    }

    fclose($handle); //Menutup CSV file
    echo "<br><strong>Import data selesai.</strong>";
}

//TAMBAH SEMINAR
else {
  $kode_seminar      = $_POST["kode_seminar"];
  $tema              = $_POST["tema"];
  $nama_seminar      = $_POST["nama_seminar"];
  $penyelenggara     = $_POST["penyelenggara"];
  $waktu             = $_POST["waktu"];
  $kapasitas         = $_POST["kapasitas"];

  //GAMBAR
  $lokasi_file    = $_FILES['banner']['tmp_name'];
  $tipe_file      = $_FILES['banner']['type'];
  $nama_file      = $_FILES['banner']['name'];
  $direktori_file = "../pic/pic_seminar/$nama_file";

  if($tipe_file != "image/jpeg" AND
     $tipe_file != "image/jpg"){
          echo "<script>window.alert('Tipe File tidak di ijinkan.');
          window.location=(href='../admin.php?module=data_seminar')</script>";
      }else{
                UploadImage($nama_file);
                $sql    = "INSERT INTO seminar(kode_seminar,tema,nama_seminar,penyelenggara,waktu,kapasitas,banner) 
                values ('$kode_seminar','$tema','$nama_seminar','$penyelenggara','$waktu','$kapasitas','$nama_file')";
                $kueri = mysql_query($sql);
              }                                
  header('location:../admin.php?module=data_seminar');
}
?>

