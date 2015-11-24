<div class="modal fade" id="import_data" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
    <form class="form-horizontal" method="POST" action="?module=data_seminar&act=import" enctype="multipart/form-data">
        <div class="modal-header">
          <p><i class="fa fa-user-plus"></i> Import</p>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label for="admin-usr" class="col-lg-4 control-label"> Silahkan masukan file csv yang ingin diupload </label>
            <div class="col-lg-8">
              <input type="file" name="filename">
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button class="button-foot" data-dismiss= "modal">Close</button>
          <button class="button-foot" type="Upload">Submit</button>
        </div>
      </form>
    </div>
  </div>
</div>