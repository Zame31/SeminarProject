<div class="modal fade" id="tambah_data" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
    <form class="form-horizontal" method="POST" action="module_mahasiswa/action_mahasiswa.php">
        <div class="modal-header">
          <p><i class="fa fa-user-plus"></i> Tambah</p>
        </div>
        <div class="modal-body">
            <div class="form-group">
              <label for="admin-usr" class="col-lg-4 control-label"> NIM : </label>
              <div class="col-lg-8">
                <input type="text" class="form-control" name="nim" placeholder="NIM">
              </div>
            </div>
            <div class="form-group">
              <label for="admin-name" class="col-lg-4 control-label">Nama Mahasiswa : </label>
              <div class="col-lg-8">
                <input type="text" class="form-control" name="nama" placeholder="Nama Mahasiswa">
              </div>
            </div>
             <div class="form-group">
              <label for="admin-name" class="col-lg-4 control-label"> Jurusan : </label>
              <div class="col-lg-8">
                <input type="text" class="form-control" name="jurusan" placeholder="Jurusan">
              </div>
            </div>
             <div class="form-group">
              <label for="admin-name" class="col-lg-4 control-label"> Telepon : </label>
              <div class="col-lg-8">
                <input type="text" class="form-control" name="telepon" placeholder="Telepon">
              </div>
            </div>
             <div class="form-group">
              <label for="admin-name" class="col-lg-4 control-label"> E-Mail </label>
              <div class="col-lg-8">
                <input type="text" class="form-control" name="email" placeholder="email">
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