<?php

$edit=mysql_query("SELECT * FROM sponsor_seminar WHERE kode_seminar='$_GET[id]' and kode_sponsor='$_GET[id2]'");
    $ed=mysql_fetch_array($edit);
?>
  <div class="content">
    <div class="edit-cont">
      <!--title-->
      <div class="edit-title"><p>Edit Sponsor Seminar</p></div>
<?php
     echo "<form class='form-horizontal' method=POST action=$action?module=data_sponsor_seminar&act=update_sponsor_seminar>
          <input type=hidden name=id value='$ed[kode_seminar]'>
          <input type=hidden name=id2 value='$ed[kode_sponsor]'>
          <div class='form-group'>
            <label class='col-lg-2 control-label'> Kode Seminar</label>
            <div class='col-lg-10'>
              <input type='text' class='form-control' name='lode' value='$ed[kode_seminar]'>
            </div>
          </div>
          <div class='form-group'>
            <label class='col-lg-2 control-label'> Kode Sponsor</label>
            <div class='col-lg-10'>
              <input type='text' class='form-control' name='kode_sponsor' value='$ed[kode_sponsor]'>
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