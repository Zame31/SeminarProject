<?php
	$tampilkan = mysql_query("SELECT * FROM seminar ORDER BY kode_seminar");
?>
    <div class="title-content">
    <span>Management</span>
    data seminar
  </div>
  <div class="content">
    <!--FUNGSIONAL-->
    <div class="row">
      <div class="col-md-6">
        <form action="?module=data_seminar&act=cariseminar" method="post">
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
          <a type="button" class="btn btn-default" href="module_seminar/action_seminar.php?module=data_seminar&act=export"><i class="fa fa-download"> Excel</i></a>
          <a type="button" class="btn btn-default" href="module_seminar/cetak_seminar.php"><i class="fa fa-print"></i></a>
        </div>
      </div>
    </div>
    <!--TABLE-->
    <table cellpadding="0" cellspacing="0" border="0" class="table table-hover tab-mar-top" id="example">
      <thead>
        <tr>
          <th width="10px">No</th>
          <th class="tab-col">Kode Seminar</th>
          <th>Tema</th>
          <th>Nama Seminar</th>
          <th>Penyelenggara</th>
          <th>Waktu</th>
          <th>Tanggal</th>
          <th>Kapasitas</th>
          <th>kode Lokasi</th>
          <th>Harga</th>
          <th>Fasilitas</th>
          <th>Banner</th>
          <th width="30px">Aksi</th>
        </tr>
      </thead>
      <tbody>
<?php
    $no=1;
    while ($tampil=mysql_fetch_array($tampilkan)){
      include "/../../main/format_tanggal.php";

       echo "<tr><td>$no</td>
             <td class='tab-col'>$tampil[kode_seminar]</td>
             <td>$tampil[tema]</td>
             <td>$tampil[nama_seminar]</td>
             <td>$tampil[penyelenggara]</td>
             <td>$tampil[waktu]</td>
             <td>$tanggal</td>
             <td>$tampil[kapasitas]</td>
             <td>$tampil[kode_lokasi]</td>
             <td>$tampil[harga]</td>
             <td>$tampil[fasilitas]</td>
             <td>";
             if ($tampil['banner']!='belum ada banner'){
                echo " <img src='pic/pic_seminar/small_$tampil[banner]'> </td>";
             }else {
              echo "$tampil[banner]";
             }
             echo "
             <td><a href='?module=data_seminar&act=editseminar&id=$tampil[kode_seminar]' class='fa fa-edit'></a>
             <a class='fa fa-remove' href=javascript:confirmdelete('$action?module=data_seminar&act=hapusseminar&id=$tampil[kode_seminar]')></a></td>
             </tr>";
      $no++;
    }
  echo "
        </tbody>
        </table>
        </div>";


?>
