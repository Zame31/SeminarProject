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
$action ="module_admin/action_admin.php";
switch (@$_GET['act']) {
  default:
    //TAMPIL ADMIN
    include "tampil_admin.php";
  break;
  case 'editadmin':
    //EDIT ADMIN
    include "edit_admin.php"; 
  break;
  case 'cariadmin':
    //EDIT ADMIN
    include "cari_admin.php"; 
  break;  
}
//ENDSWITCH

  //TAMBAH ADMIN
  include "tambah_admin.php";
?>
