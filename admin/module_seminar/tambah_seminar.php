
<?php
	$tampilkan = mysql_query("SELECT kode_lokasi,nama_lokasi FROM lokasi ORDER BY kode_lokasi");
?>
<div class="modal fade" id="tambah_data" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
    <form class="form-horizontal" method="POST"  action="module_seminar/action_seminar.php" enctype="multipart/form-data">
        <div class="modal-header">
          <p><i class="fa fa-user-plus"></i> Tambah</p>
        </div>
        <div class="modal-body">
            <div class="form-group">
              <label for="admin-usr" class="col-lg-4 control-label"> Kode Seminar : </label>
              <div class="col-lg-8">
                <input type="text" class="form-control" name="kode_seminar" placeholder="kode seminar" required>
              </div>
            </div>
            <div class="form-group">
              <label for="admin-name" class="col-lg-4 control-label">Tema : </label>
              <div class="col-lg-8">
                <input type="text" class="form-control" name="tema" placeholder="Tema" required>
              </div>
            </div>
             <div class="form-group">
              <label for="admin-name" class="col-lg-4 control-label"> Nama Seminar : </label>
              <div class="col-lg-8">
                <input type="text" class="form-control" name="nama_seminar" placeholder="Nama Seminar" required>
              </div>
            </div>
             <div class="form-group">
              <label for="admin-name" class="col-lg-4 control-label"> Penyelenggara </label>
              <div class="col-lg-8">
                <input type="text" class="form-control" name="penyelenggara" placeholder="penyelenggara" required>
              </div>
            </div>
             <div class="form-group">
              <label for="admin-name" class="col-lg-4 control-label"> Waktu </label>
              <div class="col-lg-8">
                <input type="text" class="form-control" name="waktu" placeholder="--:-- - --:--" required>
              </div>
            </div>
            <div class="form-group">
              <label for="admin-name" class="col-lg-4 control-label"> Tanggal </label>
              <div class="col-lg-8">
                <input type="date" class="form-control" name="tanggal" required>
              </div>
            </div>
            <div class="form-group">
              <label for="admin-name" class="col-lg-4 control-label"> Kapasitas </label>
              <div class="col-lg-8">
                <input type="text" class="form-control" name="kapasitas" placeholder="kapasitas" required>
              </div>
            </div>
            <div class="form-group" >
              <label for="admin-name" class="col-lg-4 control-label"> kode lokasi </label>
              <div class="col-lg-8">
                <select class="form-control select-style" name="kode_lokasi" required>
	                <?php
	                  while ($tampil=mysql_fetch_array($tampilkan)){
	                  echo "<option value='$tampil[kode_lokasi]'>$tampil[kode_lokasi] ($tampil[nama_lokasi]) </option>";
	                }
                 	?>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label for="admin-name" class="col-lg-4 control-label"> Harga </label>
              <div class="col-lg-8">
                <input type="text" class="form-control" name="harga" placeholder="Harga" required>
              </div>
            </div>
            <div class="form-group">
              <label for="admin-name" class="col-lg-4 control-label"> Fasilitas </label>
              <div class="col-lg-8">
                <input type="text" class="form-control" name="fasilitas" placeholder="Fasilitas" required>
              </div>
            </div>
            <div class="form-group">
              <label for="admin-name" class="col-lg-4 control-label"> Banner </label>
              <div class="col-lg-8">
                <input type="file" class="form-control" name="banner" required>
                <p class="help-block">Format gambar(jpg/jpeg) dan Ukuran Maksimal 5Mb</p>
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
