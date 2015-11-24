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
$action ="module_narasumber/action_narasumber.php";
switch (@$_GET['act']) {
  default:
    //TAMPIL ADMIN
    include "tampil_narasumber.php";
  break;
  case 'editnarasumber':
    //EDIT ADMIN
    include "edit_narasumber.php";
  break;
  case 'carinarasumber':
    //EDIT ADMIN
    include "cari_narasumber.php";
  break;  
}
//ENDSWITCH

  //TAMBAH ADMIN
  include "tambah_narasumber.php";
?>
