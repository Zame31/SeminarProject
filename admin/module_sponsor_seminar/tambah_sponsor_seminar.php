<?php
$tampilkan = mysql_query("SELECT kode_seminar,nama_seminar FROM seminar ORDER BY kode_seminar");
$tampilkan2 = mysql_query("SELECT * FROM sponsor ORDER BY kode_sponsor");
?>
<div class="modal fade" id="tambah_data" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
    <form class="form-horizontal" method="POST" action="module_sponsor_seminar/action_sponsor_seminar.php">
        <div class="modal-header">
          <p><i class="fa fa-user-plus"></i> Tambah</p>
        </div>
        <div class="modal-body">

          <div class="form-group" >
            <label for="admin-name" class="col-lg-4 control-label"> Kode Seminar </label>
            <div class="col-lg-8">
              <select class="form-control select-style" name="kode_seminar" required>
                <?php
                  while ($tampil=mysql_fetch_array($tampilkan)){
                  echo "<option value='$tampil[kode_seminar]'>$tampil[kode_seminar] ($tampil[nama_seminar]) </option>";
                }
                ?>
              </select>
            </div>
          </div>
          <div class="form-group" >
            <label for="admin-name" class="col-lg-4 control-label"> Kode Sponsor </label>
            <div class="col-lg-8">
              <select class="form-control select-style" name="kode_sponsor" required>
                <?php
                  while ($tampil=mysql_fetch_array($tampilkan2)){
                  echo "<option value='$tampil[kode_sponsor]'>$tampil[kode_sponsor] ($tampil[nama_sponsor]) </option>";
                }
                ?>
              </select>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button class="button-foot" data-dismiss= "modal">Close</button>
          <button class="button-foot" type="submit">Submit</button>
        </div>
      </form>
    </div>
  </div>
</div>
