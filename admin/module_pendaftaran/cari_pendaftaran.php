<?php
$cari       = $_POST["cari"];
$tampilkan = mysql_query("SELECT * FROM pendaftaran
                          WHERE no_daftar like '%$cari%' or
                                tanggal_daftar like '%$cari%' or
                                kode_seminar like '%$cari%' or
                                nim like '%$cari%'");
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
        <a href="?module=data_pendaftaran" class="button-reset">Reset</a>
      </div>
      <div class="col-md-6">
        <div class="btn-group" role="group" aria-label="fungsional">
            <form action="module_pendaftaran/cetak_pdf_cari.php" method="post" target="_blank">
            <?php
              echo "
                        <input name='cari2' type='hidden' class='btn btn-default' value='$cari'>
                  ";
            ?>
            <button class="btn btn-default in-right" type="submit"><i class="fa fa-print"></i></button>
          </form>
        </div>
      </div>
    </div>
    <!--TABLE-->
    <table class="table table-hover tab-mar-top">
      <thead>
        <tr>
          <th>No</th>
         <th class="tab-col" >No Daftar</th>
          <th >Waktu Daftar</th>
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
         <td class='tab-col'>$tampil[no_daftar]</td>
         <td>$tampil[tanggal_daftar]</td>
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
