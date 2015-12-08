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
$action ="module_tamu_seminar/action_tamu_seminar.php";
switch (@$_GET['act']) {
  default:
    //TAMPIL tamu_seminar
    include "tampil_tamu_seminar.php";
  break;
  case 'edittamu_seminar':
    //EDIT tamu_seminar
    include "edit_tamu_seminar.php"; 
  break;
  case 'caritamu_seminar':
    //EDIT tamu_seminar
    include "cari_tamu_seminar.php"; 
  break;  
}
//ENDSWITCH

  //TAMBAH tamu_seminar
  include "tambah_tamu_seminar.php";
?>
