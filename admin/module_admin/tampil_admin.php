<?php
	$tampil_admin = mysql_query("SELECT * FROM admin ORDER BY username");
?>
    <div class="title-content">
    <span>Management</span>
    data admin
  </div>
  <div class="content">
    <!--FUNGSIONAL-->
    <div class="row">
      <div class="col-md-6">
        <form action="?module=data_admin&act=cariadmin" method="post">
          <div class="input-group search">
            <input name="cari" type="text" class="form-control" placeholder="Search for...">
            <span class="input-group-btn">
              <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
            </span>
          </div>
        </form>
      </div>
      <div class="col-md-6">
        <div class="btn-group" role="group" aria-label="fungsional">
          <a type="button" class="btn btn-default" href="#tambah_data" data-toggle="modal"><i class="fa fa-user-plus"></i></a>
          <a type="button" class="btn btn-default" href="module_admin/action_admin.php?module=data_admin&act=export"><i class="fa fa-download"> Excel</i></a>
          <a type="button" class="btn btn-default" href="module_admin/cetak_admin.php"><i class="fa fa-print"></i></a>
        </div>
      </div>
    </div>
    <!--TABLE-->
    <table cellpadding="0" cellspacing="0" border="0" class="table table-hover tab-mar-top" id="example">
      <thead>
        <tr>
          <th width="10px">No</th>
          <th class="tab-col">Username</th>
          <th>Nama Lengkap</th>
          <th>Alamat</th>
          <th>E-Mail</th>
          <th>Telp/HP</th>
          <th>Blokir</th>
          <th width="20px">Aksi</th>
        </tr>
      </thead>
      <tbody>
<?php        
    $no=1;
    while ($tampil=mysql_fetch_array($tampil_admin)){
       echo "<tr><td>$no</td>
             <td class='tab-col'>$tampil[username]</td>
             <td>$tampil[nama_lengkap]</td>
             <td>$tampil[alamat]</td>
             <td>$tampil[email]</td>
             <td>$tampil[telp]</td>
             <td align=center>$tampil[blokir]</td>
             <td><a href='?module=data_admin&act=editadmin&id=$tampil[id_session]' class='fa fa-edit'></a>
             <a class='fa fa-remove' href=javascript:confirmdelete('$action?module=data_admin&act=hapusadmin&id=$tampil[id_session]')></a></td>
             </tr>";
      $no++;
    }
  echo "
        </tbody>
        </table>
        </div>";
?>