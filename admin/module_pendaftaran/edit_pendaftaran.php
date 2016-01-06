<?php
$tampilkan = mysql_query("SELECT kode_seminar,nama_seminar FROM seminar ORDER BY kode_seminar");
$tampilkan2 = mysql_query("SELECT nim,nama FROM mahasiswa ORDER BY nim");
$edit=mysql_query("SELECT * FROM pendaftaran WHERE no_daftar='$_GET[id]'");
    $ed=mysql_fetch_array($edit);
?>
  <div class="content">
    <div class="edit-cont">
      <!--title-->
      <div class="edit-title"><p>Edit Pendaftaran</p></div>
<?php
     echo "<form class='form-horizontal' method=POST action=$action?module=data_pendaftaran&act=update_pendaftaran>
          <input type=hidden name=id value='$ed[no_daftar]'>
          <div class='form-group'>
            <label class='col-lg-2 control-label'> No Daftar</label>
            <div class='col-lg-10'>
              <input type='text' class='form-control' name='no_daftar' value='$ed[no_daftar]' disabled>
            </div>
          </div>

           <div class='form-group'>
            <label class='col-lg-2 control-label'> Kode Seminar</label>
            <div class='col-lg-10'>
            <select class='form-control select-style' name='kode_seminar' required>
                <option value='$ed[kode_seminar]'>$ed[kode_seminar] </option>";
                while ($tampil=mysql_fetch_array($tampilkan)){
                echo "<option value='$tampil[kode_seminar]'>$tampil[kode_seminar] ($tampil[nama_seminar]) </option>";
              }
            echo "
            </select>
            </div>
          </div>

          <div class='form-group'>
           <label class='col-lg-2 control-label'> NIM</label>
           <div class='col-lg-10'>
           <select class='form-control select-style' name='nim' required>
               <option value='$ed[nim]'>$ed[nim] </option>";
               while ($tampil=mysql_fetch_array($tampilkan2)){
               echo "<option value='$tampil[nim]'>$tampil[nim] ($tampil[nama]) </option>";
             }
           echo "
           </select>
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
