<?php

$edit=mysql_query("SELECT * FROM lokasi WHERE kode_lokasi='$_GET[id]'");
    $ed=mysql_fetch_array($edit);
?>
  <div class="content">
    <div class="edit-cont">
      <!--title-->
      <div class="edit-title"><p>Edit lokasi</p></div>
<?php
     echo "<form class='form-horizontal' method=POST action=$action?module=data_lokasi&act=update_lokasi>
          <input type='hidden' name='id' value='$ed[kode_lokasi]'>
          <div class='form-group'>
            <label class='col-lg-2 control-label'> Kode lokasi</label>
            <div class='col-lg-10'>
              <input type='text' class='form-control' value='$ed[kode_lokasi]' disabled>
            </div>
          </div>
          <div class='form-group'>
            <label class='col-lg-2 control-label'> Nama Lokasi</label>
            <div class='col-lg-10'>
              <input type='text' class='form-control' name='nama_lokasi' value='$ed[nama_lokasi]'>
            </div>
          </div>
          <div class='form-group'>
            <label for='admin-usr' class='col-lg-2 control-label'> Alamat</label>
            <div class='col-lg-10'>
              <input type='text' class='form-control' name='alamat' value='$ed[alamat]'>
            </div>
          </div>
          <div class='form-group'>
            <label for='admin-usr' class='col-lg-2 control-label'> Harga Sewa</label>
            <div class='col-lg-10'>
              <input type='text' class='form-control' name='harga_sewa' value='$ed[harga_sewa]'>
            </div>
          </div>
          <div class='button-edit'>
            <button class='button-foot' onclick=self.history.back()>Close</button>
            <button class='button-foot' type='submit'>Update</button>
          </div>
          </form>
          ";


?>