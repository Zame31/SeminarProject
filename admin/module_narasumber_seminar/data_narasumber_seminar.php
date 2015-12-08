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
$action ="module_narasumber_seminar/action_narasumber_seminar.php";
switch (@$_GET['act']) {
  default:
    //TAMPIL narasumber_seminar
    include "tampil_narasumber_seminar.php";
  break;
  case 'editnarasumber_seminar':
    //EDIT narasumber_seminar
    include "edit_narasumber_seminar.php"; 
  break;
  case 'carinarasumber_seminar':
    //EDIT narasumber_seminar
    include "cari_narasumber_seminar.php"; 
  break;  
}
//ENDSWITCH

  //TAMBAH narasumber_seminar
  include "tambah_narasumber_seminar.php";
?>
