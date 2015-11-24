<?php

$edit=mysql_query("SELECT * FROM seminar WHERE kode_seminar='$_GET[id]'");
    $ed=mysql_fetch_array($edit);
?>
  <div class="content">
    <div class="edit-cont">
      <!--title-->
      <div class="edit-title"><p>Edit Seminar</p></div>
<?php
     echo "<form class='form-horizontal' method=POST action=$action?module=data_seminar&act=update_seminar>
          <input type='hidden' name='id' value='$ed[kode_seminar]'>
          <div class='form-group'>
            <label class='col-lg-2 control-label'> Kode Seminar</label>
            <div class='col-lg-10'>
              <input type='text' class='form-control' value='$ed[kode_seminar]' disabled>
            </div>
          </div>
          <div class='form-group'>
            <label class='col-lg-2 control-label'> Tema</label>
            <div class='col-lg-10'>
              <input type='text' class='form-control' name='tema' value='$ed[tema]'>
            </div>
          </div>
          <div class='form-group'>
            <label for='admin-usr' class='col-lg-2 control-label'> Nama Seminar</label>
            <div class='col-lg-10'>
              <input type='text' class='form-control' name='nama_seminar' value='$ed[nama_seminar]'>
            </div>
          </div>
          <div class='form-group'>
            <label for='admin-usr' class='col-lg-2 control-label'> Penyelenggara</label>
            <div class='col-lg-10'>
              <input type='text' class='form-control' name='penyelenggara' value='$ed[penyelenggara]'>
            </div>
          </div>
          <div class='form-group'>
            <label for='admin-usr' class='col-lg-2 control-label'> waktu</label>
            <div class='col-lg-10'>
              <input type='text' class='form-control' name='waktu' value='$ed[waktu]'>
            </div>
          </div>
         <div class='form-group'>
            <label for='admin-usr' class='col-lg-2 control-label'> kapasitas</label>
            <div class='col-lg-10'>
              <input type='text' class='form-control' name='kapasitas' value='$ed[kapasitas]'>
            </div>
          </div>
          <div class='button-edit'>
            <button class='button-foot' onclick=self.history.back()>Close</button>
            <button class='button-foot' type='submit'>Update</button>
          </div>
          </form>
          ";


?>