<script>
  function confirmdelete(delUrl) {
    if (confirm("Anda yakin ingin menghapus?")) {
    document.location = delUrl;
    }
  }
</script>

<?php
session_start();

//CONTENT
$action ="module_lokasi/action_lokasi.php";
switch (@$_GET['act']) {
  default:
    //TAMPIL ADMIN
    include "tampil_lokasi.php";
  break;
  case 'editlokasi':
    //EDIT ADMIN
    include "edit_lokasi.php"; 
  break;
  case 'carilokasi':
    //EDIT ADMIN
    include "cari_lokasi.php"; 
  break;  
}
//ENDSWITCH

  //TAMBAH ADMIN
  include "tambah_lokasi.php"; 
?>
