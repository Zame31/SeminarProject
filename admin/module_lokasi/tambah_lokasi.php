<div class="modal fade" id="tambah_data" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
    <form class="form-horizontal" method="POST" action="module_lokasi/action_lokasi.php">
        <div class="modal-header">
          <p><i class="fa fa-user-plus"></i> Tambah</p>
        </div>
        <div class="modal-body">
            <div class="form-group">
              <label for="admin-usr" class="col-lg-4 control-label"> Kode lokasi : </label>
              <div class="col-lg-8">
                <input type="text" class="form-control" name="kode_lokasi" placeholder="kode lokasi">
              </div>
            </div>
            <div class="form-group">
              <label for="admin-name" class="col-lg-4 control-label">Nama Lokasi : </label>
              <div class="col-lg-8">
                <input type="text" class="form-control" name="nama_lokasi" placeholder="Nama Lokasi">
              </div>
            </div>
             <div class="form-group">
              <label for="admin-name" class="col-lg-4 control-label"> Alamat : </label>
              <div class="col-lg-8">
                <input type="text" class="form-control" name="alamat" placeholder="Alamat">
              </div>
            </div>
             <div class="form-group">
              <label for="admin-name" class="col-lg-4 control-label"> Harga Sewa </label>
              <div class="col-lg-8">
                <input type="text" class="form-control" name="harga_sewa" placeholder="Harga Sewa">
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