<!--Validasi-->
<script type="text/javascript">
    window.onload = function () {
    document.getElementById("password").onchange = validatePassword;
    document.getElementById("re-password").onchange = validatePassword;
    }
    function validatePassword(){
    var pass2=document.getElementById("re-password").value;
    var pass1=document.getElementById("password").value;
    if(pass1!=pass2)
    document.getElementById("re-password").setCustomValidity("Passwords Tidak Sama");
    else
    document.getElementById("re-password").setCustomValidity('');}
</script>

<div class="modal fade" id="tambah_data" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
    <form class="form-horizontal" method="POST" action="module_admin/action_admin.php">
        <div class="modal-header">
          <p><i class="fa fa-user-plus"></i> Tambah Admin</p>
        </div>
        <div class="modal-body">
            <div class="form-group">
              <label for="admin-usr" class="col-lg-4 control-label"> Username : </label>
              <div class="col-lg-8">
                <input type="text" class="form-control" name="username" placeholder="username">
              </div>
            </div>
            <div class="form-group">
              <label for="admin-name" class="col-lg-4 control-label"> password : </label>
              <div class="col-lg-8">
                <input type="password" class="form-control" id="password" name="password" placeholder="password" required>
              </div>
            </div>
            <div class="form-group">
              <label for="admin-name" class="col-lg-4 control-label"> Ketik Ulang password : </label>
              <div class="col-lg-8">
                <input type="password" class="form-control" id="re-password" name="re-password" placeholder="Ketik Ulang password" required>
              </div>
            </div>
            <div class="form-group">
              <label for="admin-name" class="col-lg-4 control-label"> Nama Lengkap : </label>
              <div class="col-lg-8">
                <input type="text" class="form-control" name="nama_lengkap" placeholder="Nama Lengkap">
              </div>
            </div>

            <div class="form-group">
              <label for = "admin-alamat" class="col-lg-4 control-label">alamat : </label>
              <div class="col-lg-8">
                <textarea class="form-control" name="alamat" rows="8"></textarea>
              </div>
            </div>

             <div class="form-group">
              <label for="admin-name" class="col-lg-4 control-label"> E-Mail : </label>
              <div class="col-lg-8">
                <input type="text" class="form-control" name="email" placeholder="E-Mail">
              </div>
            </div>
             <div class="form-group">
              <label for="admin-name" class="col-lg-4 control-label"> Telp/HP </label>
              <div class="col-lg-8">
                <input type="text" class="form-control" name="telp" placeholder="Telp/HP">
              </div>
            </div>
             <div class="form-group">
              <label for="admin-name" class="col-lg-4 control-label"> Blokir </label>
              <div class="col-lg-8">
                <label class="radio-inline">
                  <input type="radio" name="blokir" value="Y"> Iya
                </label>
                <label class="radio-inline">
                  <input type="radio" name="blokir" value="N" checked> Tidak
                </label>
              </div>
            </div>
        </div>
        <div class="modal-footer">
          <button class="button-foot" data-dismiss= "modal">Close</button>
          <button class="button-foot" type="submit">Daftar</button>
        </div>
      </form>
    </div>
  </div>
</div>