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
$action ="module_tamu/action_tamu.php";
switch (@$_GET['act']) {
  default:
    //TAMPIL ADMIN
    include "tampil_tamu.php";
  break;
  case 'edittamu':
    //EDIT ADMIN
    include "edit_tamu.php";
  break;
  case 'caritamu':
    //EDIT ADMIN
    include "cari_tamu.php";
  break;  
}
//ENDSWITCH

  //TAMBAH ADMIN
  include "tambah_tamu.php";
?>
