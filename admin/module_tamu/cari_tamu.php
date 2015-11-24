<?php
  $cari       = $_POST["cari"];
	$tampilkan = mysql_query("SELECT * FROM tamu 
                            WHERE kode_tamu like '%$cari%'or 
                               nama_tamu like '%$cari%' or
                               gelar like '%$cari%' or
                               alamat_tamu like '%$cari%' or
                               pekerjaan like '%$cari%' or
                               umur like '%$cari%' or
                               telepon like '%$cari%' or
                               jenis_kelamin like '%$cari%' or
                              email like '%$cari%'");
?>
    <div class="title-content">
    <span>Management</span>
    data tamu
  </div>
  <div class="content">
    <!--FUNGSIONAL-->
    <div class="row">
      <div class="col-md-6">
        <form action="?module=data_tamu&act=caritamu" method="post">
          <div class="input-group search">
            <input name="cari" type="text" class="form-control" placeholder="Search for...">
            <span class="input-group-btn">
              <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
              
            </span>
          </div>

        </form>
        <a href="?module=data_tamu" class="button-reset">Reset</a>
      </div>
      <div class="col-md-6">
        <div class="btn-group" role="group" aria-label="fungsional">
          <a type="button" class="btn btn-default" href="#tambah_tamu" data-toggle="modal"><i class="fa fa-user-plus"></i></a>
          <a type="button" class="btn btn-default" href="module_tamu/action_tamu.php?module=data_tamu&act=export"><i class="fa fa-download"> Excel</i></a>
          <a type="button" class="btn btn-default" href="module_tamu/cetak_tamu.php"><i class="fa fa-print"></i></a>
        </div>
      </div>
    </div>
    <!--TABLE-->
    <table class="table table-hover tab-mar-top">
      <thead>
        <tr>
          <th>No</th>
          <th class="tab-col">Kode Tamu</th>
          <th>Nama Tamu</th>
          <th>Gelar</th>
          <th>Alamat Tamu</th>
          <th>Pekerjaan</th>
          <th>Umur</th>
          <th>Jenis Kelamin</th>
          <th>Telepon/HP</th>
          <th>E-Mail</th>
          <th width="80px">Aksi</th>
        </tr>
      </thead>
      <tbody>
<?php        
    $no=1;
    while ($tampil=mysql_fetch_array($tampilkan)){
       echo "<tr><td>$no</td>
             <td class='tab-col'>$tampil[kode_tamu]</td>
             <td>$tampil[nama_tamu]</td>
             <td>$tampil[gelar]</td>
             <td>$tampil[alamat_tamu]</td>
             <td>$tampil[pekerjaan]</td>
             <td>$tampil[umur]</td>
             <td>$tampil[jenis_kelamin]</td>
             <td>$tampil[telepon]</td>
             <td>$tampil[email]</td>
             <td><a href='?module=data_tamu&act=edittamu&id=$tampil[kode_tamu]' class='fa fa-edit'></a>
             <a class='fa fa-remove' href=javascript:confirmdelete('$action?module=data_tamu&act=hapustamu&id=$tampil[kode_tamu]')></a></td>
             </tr>";
      $no++;
    }
  echo "
        </tbody>
        </table>
        </div>";
?>