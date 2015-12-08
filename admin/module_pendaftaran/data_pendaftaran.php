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
$action ="module_pendaftaran/action_pendaftaran.php";
switch (@$_GET['act']) {
  default:
    //TAMPIL pendaftaran
    include "tampil_pendaftaran.php";
  break;
  case 'editpendaftaran':
    //EDIT pendaftaran
    include "edit_pendaftaran.php"; 
  break;
  case 'caripendaftaran':
    //EDIT pendaftaran
    include "cari_pendaftaran.php"; 
  break;  
}
//ENDSWITCH

  //TAMBAH pendaftaran
  include "tambah_pendaftaran.php";
?>
