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
$action ="module_sponsor_seminar/action_sponsor_seminar.php";
switch (@$_GET['act']) {
  default:
    //TAMPIL sponsor_seminar
    include "tampil_sponsor_seminar.php";
  break;
  case 'editsponsor_seminar':
    //EDIT sponsor_seminar
    include "edit_sponsor_seminar.php"; 
  break;
  case 'carisponsor_seminar':
    //EDIT sponsor_seminar
    include "cari_sponsor_seminar.php"; 
  break;  
}
//ENDSWITCH

  //TAMBAH sponsor_seminar
  include "tambah_sponsor_seminar.php";
?>
