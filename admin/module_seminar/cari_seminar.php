<?php
  $cari       = $_POST["cari"];
	$tampilkan = mysql_query("SELECT * FROM seminar 
                              WHERE kode_seminar like '%$cari%'or 
                               tema like '%$cari%' or
                               nama_seminar like '%$cari%' or
                               penyelenggara like '%$cari%' or
                               waktu like '%$cari%' or
                               tanggal like '%$cari%' or
                               kode_lokasi like '%$cari%' or
                               kapasitas like '%$cari%'");
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
        <a href="?module=data_seminar" class="button-reset">Reset</a>
      </div>
      <div class="col-md-6">
        <div class="btn-group" role="group" aria-label="fungsional">
          <a type="button" class="btn btn-default" href="#tambah_seminar" data-toggle="modal"><i class="fa fa-user-plus"></i></a>
          <a type="button" class="btn btn-default" href="module_seminar/action_seminar.php?module=data_seminar&act=export"><i class="fa fa-download"> Excel</i></a>
          
          <form action="module_seminar/cetak_pdf_cari.php" method="post">
            <?php 
              echo "
                        <input name='cari2' type='hidden' class='btn btn-default' value='$cari'>
                  ";
            ?>
            <button class="btn btn-default" type="submit"><i class="fa fa-print"></i></button>
          </form>
         <!-- <a type="button" class="btn btn-default" href="module_seminar/cetak_seminar.php"><i class="fa fa-print"></i></a>-->
        </div>
      </div>
    </div>
    <!--TABLE-->
    <table class="table table-hover tab-mar-top">
      <thead>
        <tr>
          <th>No</th>
          <th class="tab-col">Kode Seminar</th>
          <th>Tema</th>
          <th>Nama Seminar</th>
          <th>Penyelenggara</th>
          <th>Waktu</th>
          <th>Tanggal</th>
          <th>Kapasitas</th>
          <th>Kode Lokasi</th>
          <th width="80px">Aksi</th>
        </tr>
      </thead>
      <tbody>
<?php        
    $no=1;
    while ($tampil=mysql_fetch_array($tampilkan)){
    //Tanggal Format
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