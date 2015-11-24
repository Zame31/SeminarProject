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
$action ="module_mahasiswa/action_mahasiswa.php";
switch (@$_GET['act']) {
  default:
    //TAMPIL ADMIN
    include "tampil_mahasiswa.php";
  break;
  case 'editmahasiswa':
    //EDIT ADMIN
    include "edit_mahasiswa.php";
  break;
  case 'carimahasiswa':
    //EDIT ADMIN
    include "cari_mahasiswa.php";
  break;  
}
//ENDSWITCH

  //TAMBAH ADMIN
  include "tambah_mahasiswa.php";
?>
