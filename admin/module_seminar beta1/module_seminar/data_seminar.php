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
$action ="module_seminar/action_seminar.php";
switch (@$_GET['act']) {
  default:
    //TAMPIL ADMIN
    include "tampil_seminar.php";
  break;
  case 'editseminar':
    //EDIT ADMIN
    include "edit_seminar.php"; 
  break;
  case 'cariseminar':
    //EDIT ADMIN
    include "cari_seminar.php"; 
  break;  
}
//ENDSWITCH

  //TAMBAH ADMIN
  include "tambah_seminar.php";
  include "import_seminar.php"; 
?>
