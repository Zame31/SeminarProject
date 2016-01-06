<?php
	$tampilkan = mysql_query("SELECT * FROM pendaftaran ORDER BY no_daftar");
?>
    <div class="title-content">
    <span>Management</span>
    data pendaftaran
  </div>
  <div class="content">
    <!--FUNGSIONAL-->
    <div class="row">
      <div class="col-md-6">
        <form action="?module=data_pendaftaran&act=caripendaftaran" method="post">
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
          <a type="button" class="btn btn-default" href="module_pendaftaran/action_pendaftaran.php?module=data_pendaftaran&act=export"><i class="fa fa-download"> Excel</i></a>
          <a type="button" class="btn btn-default" href="module_pendaftaran/cetak_pendaftaran.php"><i class="fa fa-print"></i></a>
        </div>
      </div>
    </div>
    <!--TABLE-->
    <table cellpadding="0" cellspacing="0" border="0" class="table table-hover tab-mar-top" id="example">
      <thead>
        <tr>
          <th width="10px">No Daftar</th>
          <th width="10px">Waktu Daftar</th>
          <th class="tab-col">Kode Seminar</th>
          <th>NIM</th>
          <th width="30px">Aksi</th>
        </tr>
      </thead>
      <tbody>
<?php
    $no=1;
    while ($tampil=mysql_fetch_array($tampilkan)){
       echo "<tr>
             <td>$tampil[no_daftar]</td>
             <td class='tab-col' width='200px'>$tampil[tanggal_daftar]</td>
             <td>$tampil[kode_seminar]</td>
             <td>$tampil[nim]</td>

             <td><a href='?module=data_pendaftaran&act=editpendaftaran&id=$tampil[no_daftar]' class='fa fa-edit'></a>
             <a class='fa fa-remove' href=javascript:confirmdelete('$action?module=data_pendaftaran&act=hapuspendaftaran&id=$tampil[no_daftar]')></a></td>
      </tr>";
      $no++;

    }
  echo "
        </tbody>
        </table>
        </div>";
?>
