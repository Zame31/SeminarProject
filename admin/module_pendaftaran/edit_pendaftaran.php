<?php

$edit=mysql_query("SELECT * FROM pendaftaran WHERE no_daftar='$_GET[id]'");
    $ed=mysql_fetch_array($edit);
?>
  <div class="content">
    <div class="edit-cont">
      <!--title-->
      <div class="edit-title"><p>Edit Pendaftaran</p></div>
<?php
     echo "<form class='form-horizontal' method=POST action=$action?module=data_pendaftaran&act=update_pendaftaran>
          <input type=hidden name=id value='$ed[no_daftar]'>
          <div class='form-group'>
            <label class='col-lg-2 control-label'> No Daftar</label>
            <div class='col-lg-10'>
              <input type='text' class='form-control' name='no_daftar' value='$ed[no_daftar]' disabled>
            </div>
          </div>
           <div class='form-group'>
            <label class='col-lg-2 control-label'> Kode Seminar</label>
            <div class='col-lg-10'>
              <input type='text' class='form-control' name='kode_seminar' value='$ed[kode_seminar]'>
            </div>
          </div>
          <div class='form-group'>
            <label class='col-lg-2 control-label'> NIM</label>
            <div class='col-lg-10'>
              <input type='text' class='form-control' name='nim' value='$ed[nim]'>
            </div>
          </div>
          
         
             <div class='col-lg-10'>";
             
    echo '
          <div class="button-edit">
            <button class="button-foot" onclick=self.history.back()>Close</button>
            <button class="button-foot" type="submit">Update</button>
          </div>
          </form>
          ';


?>