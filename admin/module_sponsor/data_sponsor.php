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
$action ="module_sponsor/action_sponsor.php";
switch (@$_GET['act']) {
  default:
    //TAMPIL ADMIN
    include "tampil_sponsor.php";
  break;
  case 'editsponsor':
    //EDIT ADMIN
    include "edit_sponsor.php";
  break;
  case 'carisponsor':
    //EDIT ADMIN
    include "cari_sponsor.php";
  break;  
}
//ENDSWITCH

  //TAMBAH ADMIN
  include "tambah_sponsor.php";
?>
