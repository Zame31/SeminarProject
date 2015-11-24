<?php

$edit=mysql_query("SELECT * FROM mahasiswa WHERE nim='$_GET[id]'");
    $ed=mysql_fetch_array($edit);
?>
  <div class="content">
    <div class="edit-cont">
      <!--title-->
      <div class="edit-title"><p>Edit Mahasiswa</p></div>
<?php
     echo "<form class='form-horizontal' method=POST action=$action?module=data_mahasiswa&act=update_mahasiswa>
          <input type='hidden' name='id' value='$ed[nim]'>
          <div class='form-group'>
            <label class='col-lg-2 control-label'> NIM</label>
            <div class='col-lg-10'>
              <input type='text' class='form-control' value='$ed[nim]' disabled>
            </div>
          </div>
          <div class='form-group'>
            <label class='col-lg-2 control-label'> Nama Mahasiswa</label>
            <div class='col-lg-10'>
              <input type='text' class='form-control' name='nama' value='$ed[nama]'>
            </div>
          </div>
          <div class='form-group'>
            <label for='admin-usr' class='col-lg-2 control-label'> Jurusan</label>
            <div class='col-lg-10'>
              <input type='text' class='form-control' name='jurusan' value='$ed[jurusan]'>
            </div>
          </div>
          <div class='form-group'>
            <label for='admin-usr' class='col-lg-2 control-label'> Telepon/HP</label>
            <div class='col-lg-10'>
              <input type='text' class='form-control' name='telepon' value='$ed[telepon]'>
            </div>
          </div>
          <div class='form-group'>
            <label for='admin-usr' class='col-lg-2 control-label'> E-Mail</label>
            <div class='col-lg-10'>
              <input type='text' class='form-control' name='email' value='$ed[email]'>
            </div>
          </div>

          <div class='button-edit'>
            <button class='button-foot' onclick=self.history.back()>Close</button>
            <button class='button-foot' type='submit'>Update</button>
          </div>
          </form>
          ";


?>