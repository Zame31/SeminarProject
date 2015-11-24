<?php

$edit=mysql_query("SELECT * FROM tamu WHERE kode_tamu='$_GET[id]'");
    $ed=mysql_fetch_array($edit);
?>
  <div class="content">
    <div class="edit-cont">
      <!--title-->
      <div class="edit-title"><p>Edit Tamu</p></div>
<?php
     echo "<form class='form-horizontal' method=POST action=$action?module=data_tamu&act=update_tamu>
          <input type='hidden' name='id' value='$ed[kode_tamu]'>
          <div class='form-group'>
            <label class='col-lg-2 control-label'> Kode Tamu</label>
            <div class='col-lg-10'>
              <input type='text' class='form-control' value='$ed[kode_tamu]' disabled>
            </div>
          </div>
          <div class='form-group'>
            <label class='col-lg-2 control-label'> Nama Tamu</label>
            <div class='col-lg-10'>
              <input type='text' class='form-control' name='nama' value='$ed[nama_tamu]'>
            </div>
          </div>
          <div class='form-group'>
            <label for='admin-usr' class='col-lg-2 control-label'> Gelar</label>
            <div class='col-lg-10'>
              <input type='text' class='form-control' name='gelar' value='$ed[gelar]'>
            </div>
          </div>
          <div class='form-group'>
            <label for='admin-usr' class='col-lg-2 control-label'> Alamat Tamu</label>
            <div class='col-lg-10'>
               <input type='text' class='form-control' name='alamat' value='$ed[alamat_tamu]'>
            </div>
          </div>
          <div class='form-group'>
             <label for='admin-usr' class='col-lg-2 control-label'> Pekerjaan</label>
             <div class='col-lg-10'>
                <input type='text' class='form-control' name='pekerjaan' value='$ed[pekerjaan]'>
             </div>
          </div>
          <div class='form-group'>
              <label for='admin-usr' class='col-lg-2 control-label'> Umur</label>
              <div class='col-lg-10'>
                 <input type='text' class='form-control' name='umur' value='$ed[umur]'>
              </div>
          </div>
          <div class='form-group'>
              <label for='admin-usr' class='col-lg-2 control-label'> Jenis Kelamin</label>
              <div class='col-lg-10'>
                  <input type='text' class='form-control' name='jk' value='$ed[jenis_kelamin]'>
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