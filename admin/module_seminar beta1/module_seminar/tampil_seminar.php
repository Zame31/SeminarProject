<?php
	$tampil_admin = mysql_query("SELECT * FROM seminar ORDER BY kode_seminar");
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
          <a type="button" class="btn btn-default" href="module_seminar/action_seminar.php?module=data_seminar&act=export"><i class="fa fa-file-excel-o"></i></a>
          <a type="button" class="btn btn-default" href="#import_data" data-toggle="modal">Import</a>
          <button type="button" class="btn btn-default"><i class="fa fa-print"></i></button>
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
          <th>Kapasitas</th>
          <th>Banner</th>
          <th width="50px">Aksi</th>
        </tr>
      </thead>
      <tbody>
<?php        
    $no=1;
    while ($tampil=mysql_fetch_array($tampil_admin)){
       echo "<tr><td>$no</td>
             <td class='tab-col'>$tampil[kode_seminar]</td>
             <td>$tampil[tema]</td>
             <td>$tampil[nama_seminar]</td>
             <td>$tampil[penyelenggara]</td>
             <td>$tampil[waktu]</td>
             <td>$tampil[kapasitas]</td>
             <td>";
             if ($tampil['banner']!=''){
                echo " <img src='pic/pic_seminar/small_$tampil[banner]'> </td>";
             }else {
              echo "no banner";
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