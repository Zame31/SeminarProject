<?php
	$tampil_admin = mysql_query("SELECT * FROM mahasiswa ORDER BY nim");
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
      </div>
      <div class="col-md-6">
        <div class="btn-group" role="group" aria-label="fungsional">
          <a type="button" class="btn btn-default" href="#tambah_data" data-toggle="modal"><i class="fa fa-user-plus"></i></a>
          <a type="button" class="btn btn-default" href="module_mahasiswa/action_mahasiswa.php?module=data_mahasiswa&act=export"><i class="fa fa-download"> Excel</i></a>
          <a type="button" class="btn btn-default" href="module_mahasiswa/cetak_pdf.php"><i class="fa fa-print"></i></a>
        </div>
      </div>
    </div>
    <!--TABLE-->
    <table cellpadding="0" cellspacing="0" border="0" class="table table-hover tab-mar-top" id="example">
      <?php include "table/table_header.php" ?>
          <th width="30px">Aksi</th>
        </tr>
      </thead>
      <tbody>
<?php
    $no=1;
    while ($tampil=mysql_fetch_array($tampil_admin)){
       include "table/table_body.php";
       echo "
             <td><a href='?module=data_mahasiswa&act=editmahasiswa&id=$tampil[nim]' class='fa fa-edit'></a>
             <a class='fa fa-remove' href=javascript:confirmdelete('$action?module=data_mahasiswa&act=hapusmahasiswa&id=$tampil[nim]')></a></td>
             </tr>";
      $no++;
    }
  echo "
        </tbody>
        </table>
        </div>";
?>
