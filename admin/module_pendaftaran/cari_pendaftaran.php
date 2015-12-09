<?php
  $cari       = $_POST["cari"];
	$tampilkan = 
  mysql_query("SELECT * FROM pendaftaran
               WHERE no_daftar like '%$cari%' or
                      tanggal_daftar like '%$cari%' or
                kode_seminar like '%$cari%' or 
                     nim like '%$cari%'");
?>
    <div class="title-content">
    <span>Management</span>
    data pendaftaran
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
        <a href="?module=data_pendaftaran" class="button-reset">Reset</a>
      </div>
      <div class="col-md-6">
        <div class="btn-group" role="group" aria-label="fungsional">
          <a type="button" class="btn btn-default" href="#tambah_pendaftaran" data-toggle="modal"><i class="fa fa-user-plus"></i></a>
          <a type="button" class="btn btn-default" href="module_pendaftaran/action_pendaftaran.php?module=data_pendaftaran&act=export"><i class="fa fa-download"> Excel</i></a>
          <form action="module_pendaftaran/cetak_pdf_cari.php" method="post">
            <?php 
              echo "
                        <input name='cari2' type='hidden' class='btn btn-default' value='$cari'>
                  ";
            ?>
            <button class="btn btn-default" type="submit"><i class="fa fa-print"></i></button>
          </form>
      </div>
    </div>
    <!--TABLE-->
    <table class="table table-hover tab-mar-top">
      <thead>
        <tr>
          <th>No</th>
         <th width="10px">No Daftar</th>
          <th width="10px">Waktu Daftar</th>
          <th>Kode Seminar</th>
          <th>NIM</th>
          
          <th width="80px">Aksi</th>
        </tr>
      </thead>
      <tbody>
<?php        
    $no=1;
    while ($tampil=mysql_fetch_array($tampilkan)){
       echo "<tr><td>$no</td>
             <td>$tampil[no_daftar]</td>
             <td class='tab-col' width='200px'>$tampil[tanggal_daftar]</td>
             <td>$tampil[kode_seminar]</td>
             <td>$tampil[nim]</td>
                     
             <td><a href='?module=data_pendaftaran&act=editpendaftaran&id=$tampil[kode_seminar]' class='fa fa-edit'></a>
             <a class='fa fa-remove' href=javascript:confirmdelete('$action?module=data_pendaftaran&act=hapuspendaftaran&id=$tampil[kode_seminar]')></a></td>
             </tr>";
      $no++;
    }
  echo "
        </tbody>
        </table>
        </div>";
?>