<?php
	$tampilkan = mysql_query("SELECT * FROM narasumber ORDER BY kode_narasumber");
?>
    <div class="title-content">
    <span>Management</span>
    data narasumber
  </div>
  <div class="content">
    <!--FUNGSIONAL-->
    <div class="row">
      <div class="col-md-6">
        <form action="?module=data_narasumber&act=carinarasumber" method="post">
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
          <a type="button" class="btn btn-default" href="module_narasumber/action_narasumber.php?module=data_narasumber&act=export"><i class="fa fa-download"> Excel</i></a>
          <a type="button" class="btn btn-default" href="module_narasumber/cetak_narasumber.php"><i class="fa fa-print"></i></a>
        </div>
      </div>
    </div>
    <!--TABLE-->
    <table cellpadding="0" cellspacing="0" border="0" class="table table-hover tab-mar-top" id="example">
      <thead>
        <tr>
          <th width="10px">No</th>
          <th class="tab-col">Kode Narasumber</th>
          <th>Nama Narasumber</th>
          <th>Gelar</th>
          <th>Alamat Narasumber</th>
          <th>Pekerjaan</th>
          <th>Umur</th>
          <th>Jenis Kelamin</th>
          <th>Telepon/HP</th>
          <th>E-Mail</th>
          <th width="50px">Aksi</th>
        </tr>
      </thead>
      <tbody>
<?php        
    $no=1;
    while ($tampil=mysql_fetch_array($tampilkan)){
       echo "<tr><td>$no</td>
             <td class='tab-col'>$tampil[kode_narasumber]</td>
             <td>$tampil[nama_narasumber]</td>
             <td>$tampil[gelar]</td>
             <td>$tampil[alamat_narasumber]</td>
             <td>$tampil[pekerjaan]</td>
             <td>$tampil[umur]</td>
             <td>$tampil[jenis_kelamin]</td>
             <td>$tampil[telepon]</td>
             <td>$tampil[email]</td>
             <td><a href='?module=data_narasumber&act=editnarasumber&id=$tampil[kode_narasumber]' class='fa fa-edit'></a>
             <a class='fa fa-remove' href=javascript:confirmdelete('$action?module=data_narasumber&act=hapusnarasumber&id=$tampil[kode_narasumber]')></a></td>
             </tr>";
      $no++;
    }
  echo "
        </tbody>
        </table>
        </div>";
?>