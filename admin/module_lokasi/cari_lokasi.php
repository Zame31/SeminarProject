<?php
  $cari       = $_POST["cari"];
	$tampilkan = mysql_query("SELECT * FROM lokasi 
                              WHERE kode_lokasi like '%$cari%'or 
                               nama_lokasi like '%$cari%' or
                               alamat like '%$cari%' or
                               kota like '%$cari%' or
                               harga_sewa like '%$cari%' or
                               fasilitas like '%$cari%'");
?>
    <div class="title-content">
    <span>Management</span>
    data lokasi
  </div>
  <div class="content">
    <!--FUNGSIONAL-->
    <div class="row">
      <div class="col-md-6">
        <form action="?module=data_lokasi&act=carilokasi" method="post">
          <div class="input-group search">
            <input name="cari" type="text" class="form-control" placeholder="Search for...">
            <span class="input-group-btn">
              <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
              
            </span>
          </div>

        </form>
        <a href="?module=data_lokasi" class="button-reset">Reset</a>
      </div>
      <div class="col-md-6">
        <div class="btn-group" role="group" aria-label="fungsional">
          <a type="button" class="btn btn-default" href="#tambah_lokasi" data-toggle="modal"><i class="fa fa-user-plus"></i></a>
          <a type="button" class="btn btn-default" href="module_lokasi/action_lokasi.php?module=data_lokasi&act=export"><i class="fa fa-download"> Excel</i></a>
          <a type="button" class="btn btn-default" href="module_lokasi/cetak_lokasi.php"><i class="fa fa-print"></i></a>
        </div>
      </div>
    </div>
    <!--TABLE-->
    <table class="table table-hover tab-mar-top">
      <thead>
        <tr>
          <th>No</th>
          <th class="tab-col">Kode lokasi</th>
          <th>Nama Lokasi</th>
          <th>Alamat</th>
          <th>Kota</th>
          <th>Harga Sewa</th>
          <th>Fasilitas</th>
          <th width="80px">Aksi</th>
        </tr>
      </thead>
      <tbody>
<?php        
    $no=1;
    while ($tampil=mysql_fetch_array($tampilkan)){
       echo "<tr><td>$no</td>
            <td class='tab-col'>$tampil[kode_lokasi]</td>
             <td>$tampil[nama_lokasi]</td>
             <td>$tampil[alamat]</td>
             <td>$tampil[kota]</td>
             <td>$tampil[harga_sewa]</td>
             <td>$tampil[fasilitas]</td>
             <td><a href='?module=data_lokasi&act=editlokasi&id=$tampil[kode_lokasi]' class='fa fa-edit'></a>
             <a class='fa fa-remove' href=javascript:confirmdelete('$action?module=data_lokasi&act=hapuslokasi&id=$tampil[kode_lokasi]')></a></td>
             </tr>";
      $no++;
    }
  echo "
        </tbody>
        </table>
        </div>";
?>