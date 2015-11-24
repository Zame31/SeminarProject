<div class="modal fade" id="tambah_data" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
    <form class="form-horizontal" method="POST" action="module_seminar/action_seminar.php">
        <div class="modal-header">
          <p><i class="fa fa-user-plus"></i> Tambah</p>
        </div>
        <div class="modal-body">
            <div class="form-group">
              <label for="admin-usr" class="col-lg-4 control-label"> Kode Seminar : </label>
              <div class="col-lg-8">
                <input type="text" class="form-control" name="kode_seminar" placeholder="kode seminar">
              </div>
            </div>
            <div class="form-group">
              <label for="admin-name" class="col-lg-4 control-label">Tema : </label>
              <div class="col-lg-8">
                <input type="text" class="form-control" name="tema" placeholder="Tema">
              </div>
            </div>
             <div class="form-group">
              <label for="admin-name" class="col-lg-4 control-label"> Nama Seminar : </label>
              <div class="col-lg-8">
                <input type="text" class="form-control" name="nama_seminar" placeholder="Nama Seminar">
              </div>
            </div>
             <div class="form-group">
              <label for="admin-name" class="col-lg-4 control-label"> Penyelenggara </label>
              <div class="col-lg-8">
                <input type="text" class="form-control" name="penyelenggara" placeholder="penyelenggara">
              </div>
            </div>
             <div class="form-group">
              <label for="admin-name" class="col-lg-4 control-label"> Waktu </label>
              <div class="col-lg-8">
                <input type="text" class="form-control" name="waktu" placeholder="--:-- - --:--">
              </div>
            </div> 
            <div class="form-group">
              <label for="admin-name" class="col-lg-4 control-label"> Tanggal </label>
              <div class="col-lg-8">
                <input type="date" class="form-control" name="tanggal" >
              </div>
            </div> 
            <div class="form-group">
              <label for="admin-name" class="col-lg-4 control-label"> Kapasitas </label>
              <div class="col-lg-8">
                <input type="text" class="form-control" name="kapasitas" placeholder="kapasitas">
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