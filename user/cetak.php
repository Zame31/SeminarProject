<?php
date_default_timezone_set('Asia/Jakarta');

//Array Hari
$array_hari = array(1=>"Senin","Selasa","Rabu","Kamis","Jumat", "Sabtu","Minggu");
$hari = $array_hari[date("N")];
//Format Tanggal
$tanggal = date ("j");
//Array Bulan
$array_bulan = array(1=>"Januari","Februari","Maret", "April", "Mei", "Juni","Juli","Agustus","September","Oktober", "November","Desember");
$bulan = $array_bulan[date("n")];
//Format Tahun
$tahun = date("Y");


include "../main/connection.php";

$tampil_admin = mysql_query("SELECT nama_seminar,no_daftar,seminar.kode_seminar,seminar.tanggal,tanggal_daftar,mahasiswa.nim,mahasiswa.nama,mahasiswa.jurusan
                             FROM seminar,pendaftaran,mahasiswa
                             WHERE seminar.kode_seminar=pendaftaran.kode_seminar and pendaftaran.nim=mahasiswa.nim and
                                   pendaftaran.no_daftar ='$_GET[id]'");

while ($tampil=mysql_fetch_array($tampil_admin)){

  $date2 = $tampil['tanggal_daftar'];

  $date =  $tampil['tanggal'];

  $BulanIndo = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
  $tahun = substr($date, 0, 4);
  $bulan = substr($date, 5, 2);
  $tgl   = substr($date, 8, 2);
  $tanggal = $tgl . " " . $BulanIndo[(int)$bulan-1] . " ". $tahun;

  $BulanIndo = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
  $tahun = substr($date2, 0, 4);
  $bulan = substr($date2, 5, 2);
  $tgl   = substr($date2, 8, 2);
  $tanggal2 = $tgl . " " . $BulanIndo[(int)$bulan-1] . " ". $tahun;

  $strhtml = "<div class='tiket'>
                <div class='tiket-title'>
                  <span> $tampil[nama_seminar]</span><br>
                  <span class='waktu'>$tanggal</span>
                </div>
                <div class='row tiket-body'>
                <table>
                  <tr>
                    <td width=200px>Kode Pendaftaran</td>
                    <td>$tampil[kode_seminar]$tampil[no_daftar]</td>
                  </tr>
                  <tr>
                    <td>Tanggal Daftar</td>
                    <td>$tanggal2</td>
                  </tr>
                  <tr>
                    <td>NIM</td>
                    <td>$tampil[nim]</td>
                  </tr>
                  <tr>
                    <td>Nama Peserta</td>
                    <td>$tampil[nama]</td>
                  </tr>
                  <tr>
                    <td>Jurusan</td>
                    <td>$tampil[jurusan]</td>
                  </tr>
                </table>
                </div>
              </div>";
  }
  $no = 0;

  $strhtml .= "</table>";

// Panggil mPdf
require('../assets/vendor/mpdf/mpdf.php');
$stylesheet3 = file_get_contents('../assets/css/style_user.css');
$stylesheet1 = file_get_contents('../assets/css/bootstrap.min.css');
$stylesheet2 = file_get_contents('../assets/css/cetak.css');

$fileName = 'Bukti Pesan';

//$mpdf = new mPDF('utf-8', 'A4', 0, '', 10, 10, 5, 1, 1, 1, '');
//$mpdf = new mPDF('utf-8','A4-L');
$mpdf = new mPDF('utf-8',array(210,148));

//$mpdf->SetDisplayMode('fullpage');
$mpdf->WriteHTML($stylesheet3,1);
$mpdf->WriteHTML($stylesheet1,1);
$mpdf->WriteHTML($stylesheet2,1);

$mpdf->WriteHTML($strhtml);
$mpdf->cacheTables = true;
$mpdf->Output();
 ?>
