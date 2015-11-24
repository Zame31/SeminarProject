<div class="modal fade" id="tambah_data" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
    <form class="form-horizontal" method="POST" action="module_tamu/action_tamu.php">
        <div class="modal-header">
          <p><i class="fa fa-user-plus"></i> Tambah</p>
        </div>
        <div class="modal-body">
            <div class="form-group">
              <label for="admin-usr" class="col-lg-4 control-label"> Kode Tamu : </label>
              <div class="col-lg-8">
                <input type="text" class="form-control" name="kode_tamu" placeholder="Kode Tamu">
              </div>
            </div>
            <div class="form-group">
              <label for="admin-name" class="col-lg-4 control-label">Nama Tamu : </label>
              <div class="col-lg-8">
                <input type="text" class="form-control" name="nama" placeholder="Nama Tamu">
              </div>
            </div>
             <div class="form-group">
              <label for="admin-name" class="col-lg-4 control-label"> Gelar : </label>
              <div class="col-lg-8">
                <input type="text" class="form-control" name="gelar" placeholder="Gelar">
              </div>
            </div>
             <div class="form-group">
               <label for="admin-name" class="col-lg-4 control-label"> Alamat Tamu : </label>
               <div class="col-lg-8">
                 <input type="text" class="form-control" name="alamat" placeholder="Alamat Tamu">
               </div>
             </div>
             <div class="form-group">
               <label for="admin-name" class="col-lg-4 control-label"> Umur : </label>
               <div class="col-lg-8">
                 <input type="text" class="form-control" name="umur" placeholder="Umur">
               </div>
             </div>
             <div class="form-group">
               <label for="admin-name" class="col-lg-4 control-label"> Pekerjaan : </label>
               <div class="col-lg-8">
                  <input type="text" class="form-control" name="pekerjaan" placeholder="Pekerjaan">
              </div>
             </div>
             <div class="form-group">
                <label for="admin-name" class="col-lg-4 control-label"> Jenis Kelamin : </label>
                <div class="col-lg-8">
                   <input type="text" class="form-control" name="jk" placeholder="Jenis Kelamin">
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