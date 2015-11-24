<?php
  $cari       = $_POST["cari"];
	$tampilkan = mysql_query("SELECT * FROM mahasiswa 
                              WHERE nim like '%$cari%' or 
                               nama like '%$cari%' or
                               jurusan like '%$cari%' or
                               telepon like '%$cari%' or
                              email like '%$cari%'");
?>
    <div class="title-content">
    <span>Management</span>
    data mahasiswa
  </div>
  <div class="content">
    <!--FUNGSIONAL-->
    <div class="row">
      <div class="col-md-6">
        <form action="?module=data_mahasiswa&act=carimahasiswa" method="post">
          <div class="input-group search">
            <input name="cari" type="text" class="form-control" placeholder="Search for...">
            <span class="input-group-btn">
              <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
              
            </span>
          </div>

        </form>
        <a href="?module=data_mahasiswa" class="button-reset">Reset</a>
      </div>
      <div class="col-md-6">
        <div class="btn-group" role="group" aria-label="fungsional">
          <a type="button" class="btn btn-default" href="#tambah_mahasiswa" data-toggle="modal"><i class="fa fa-user-plus"></i></a>
          <a type="button" class="btn btn-default" href="module_mahasiswa/action_mahasiswa.php?module=data_mahasiswa&act=export"><i class="fa fa-download"> Excel</i></a>
          <a type="button" class="btn btn-default" href="module_mahasiswa/cetak_mahasiswa.php"><i class="fa fa-print"></i></a>
        </div>
      </div>
    </div>
    <!--TABLE-->
    <table class="table table-hover tab-mar-top">
      <thead>
        <tr>
          <th>No</th>
          <th class="tab-col">NIM</th>
          <th>Nama Mahasiswa</th>
          <th>Jurusan</th>
          <th>Telepon/HP</th>
          <th>E-Mail</th>
          <th width="70px">Aksi</th>
      </thead>
      <tbody>
<?php        
    $no=1;
    while ($tampil=mysql_fetch_array($tampilkan)){
       echo "<tr><td>$no</td>
             <td class='tab-col'>$tampil[nim]</td>
             <td>$tampil[nama]</td>
             <td>$tampil[jurusan]</td>
             <td>$tampil[telepon]</td>
             <td>$tampil[email]</td>
             <td><a href='?module=data_mahasiswa&act=editamahasiswa&id=$tampil[nim]' class='fa fa-edit'></a>
             <a class='fa fa-remove' href=javascript:confirmdelete('$action?module=data_mahasiswa&act=hapusmahasiswa&id=$tampil[nim]')></a></td>
             </tr>";
      $no++;
    }
  echo "
        </tbody>
        </table>
        </div>";
?>