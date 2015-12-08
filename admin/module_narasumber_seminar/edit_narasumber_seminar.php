<?php

$edit=mysql_query("SELECT * FROM narasumber_seminar WHERE kode_seminar='$_GET[id]'");
    $ed=mysql_fetch_array($edit);
?>
  <div class="content">
    <div class="edit-cont">
      <!--title-->
      <div class="edit-title"><p>Edit Narasumber Seminar</p></div>
<?php
     echo "<form class='form-horizontal' method=POST action=$action?module=data_narasumber_seminar&act=update_narasumber_seminar>
          <input type=hidden name=id value='$ed[kode_seminar]'>
          <div class='form-group'>
            <label class='col-lg-2 control-label'> Kode Seminar</label>
            <div class='col-lg-10'>
              <input type='text' class='form-control' name='lode' value='$ed[kode_seminar]'>
            </div>
          </div>
          <div class='form-group'>
            <label class='col-lg-2 control-label'> Kode narasumber</label>
            <div class='col-lg-10'>
              <input type='text' class='form-control' name='kode_narasumber' value='$ed[kode_narasumber]'>
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