<?php
	$tampilkan = mysql_query("SELECT * FROM narasumber_seminar ORDER BY kode_seminar");
?>
    <div class="title-content">
    <span>Management</span>
    data narasumber seminar
  </div>
  <div class="content">
    <!--FUNGSIONAL-->
    <div class="row">
      <div class="col-md-6">
        <form action="?module=data_narasumber_seminar&act=carinarasumber_seminar" method="post">
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
          <a type="button" class="btn btn-default" href="module_narasumber_seminar/action_narasumber_seminar.php?module=data_narasumber_seminar&act=export"><i class="fa fa-download"> Excel</i></a>
          <a type="button" class="btn btn-default" href="module_narasumber_seminar/cetak_narasumber_seminar.php"><i class="fa fa-print"></i></a>
        </div>
      </div>
    </div>
    <!--TABLE-->
    <table cellpadding="0" cellspacing="0" border="0" class="table table-hover tab-mar-top" id="example">
      <thead>
        <tr>
          <th width="10px">No</th>
          <th class="tab-col">Kode Seminar</th>
          <th>Kode Narasumber</th>
          
          
          <th width="50px">Aksi</th>
        </tr>
      </thead>
      <tbody>
<?php        
    $no=1;
    while ($tampil=mysql_fetch_array($tampilkan)){
       echo "<tr><td>$no</td>
             <td class='tab-col'>$tampil[kode_seminar]</td>
             <td>$tampil[kode_narasumber]</td>
             
             <td><a href='?module=data_narasumber_seminar&act=editnarasumber_seminar&id=$tampil[kode_seminar]' class='fa fa-edit'></a>
             <a class='fa fa-remove' href=javascript:confirmdelete('$action?module=data_narasumber_seminar&act=hapusnarasumber_seminar&id=$tampil[kode_seminar]')></a></td>
      </tr>";
      $no++;

    }
  echo "
        </tbody>
        </table>
        </div>";
?>