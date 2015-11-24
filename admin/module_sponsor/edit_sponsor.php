<?php

$edit=mysql_query("SELECT * FROM sponsor WHERE kode_sponsor='$_GET[id]'");
    $ed=mysql_fetch_array($edit);
?>
  <div class="content">
    <div class="edit-cont">
      <!--title-->
      <div class="edit-title"><p>Edit Sponsor</p></div>
<?php
     echo "<form class='form-horizontal' method=POST action=$action?module=data_sponsor&act=update_sponsor>
          <input type='hidden' name='id' value='$ed[kode_sponsor]'>
          <div class='form-group'>
            <label class='col-lg-2 control-label'> Kode Sponsor</label>
            <div class='col-lg-10'>
              <input type='text' class='form-control' value='$ed[kode_sponsor]' disabled>
            </div>
          </div>
          <div class='form-group'>
            <label for='admin-usr' class='col-lg-2 control-label'> Nama Sponsor</label>
            <div class='col-lg-10'>
              <input type='text' class='form-control' name='nama_sponsor' value='$ed[nama_sponsor]'>
            </div>
          </div>
          <div class='button-edit'>
            <button class='button-foot' onclick=self.history.back()>Close</button>
            <button class='button-foot' type='submit'>Update</button>
          </div>
          </form>
          ";


?>