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

          <form action="module_mahasiswa/cetak_pdf_cari.php" method="post" target="_blank">
            <?php
              echo "
                        <input name='cari2' type='hidden' class='btn btn-default' value='$cari'>
                  ";
            ?>
            <button class="btn btn-default in-right" type="submit"><i class="fa fa-print"></i></button>
          </form>


          <!--<a type="button" class="btn btn-default" href="module_mahasiswa/cetak_pdf_cari.php"><i class="fa fa-print"></i></a>-->
        </div>
      </div>
    </div>
    <!--TABLE-->
    <table cellpadding="0" cellspacing="0" border="0" class="table table-hover tab-mar-top" id="example">
      <?php include "table/table_header.php" ?>
          <th width="20px">Aksi</th>
      </thead>
      <tbody>
<?php
    $no=1;
    while ($tampil=mysql_fetch_array($tampilkan)){
        include "table/table_body.php";
       echo "
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
