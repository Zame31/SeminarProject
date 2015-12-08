<?php

$edit=mysql_query("SELECT * FROM tamu_seminar WHERE kode_seminar='$_GET[id]'");
    $ed=mysql_fetch_array($edit);
?>
  <div class="content">
    <div class="edit-cont">
      <!--title-->
      <div class="edit-title"><p>Edit tamu Seminar</p></div>
<?php
     echo "<form class='form-horizontal' method=POST action=$action?module=data_tamu_seminar&act=update_tamu_seminar>
          <input type=hidden name=id value='$ed[kode_seminar]'>
          <div class='form-group'>
            <label class='col-lg-2 control-label'> Kode Seminar</label>
            <div class='col-lg-10'>
              <input type='text' class='form-control' name='lode' value='$ed[kode_seminar]'>
            </div>
          </div>
          <div class='form-group'>
            <label class='col-lg-2 control-label'> Kode Tamu</label>
            <div class='col-lg-10'>
              <input type='text' class='form-control' name='kode_tamu' value='$ed[kode_tamu]'>
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