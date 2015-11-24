<?php
  $cari       = $_POST["cari"];
	$tampilkan = mysql_query("SELECT * FROM sponsor 
                            WHERE kode_sponsor like '%$cari%' or 
                               nama_sponsor like '%$cari%'");
?>
    <div class="title-content">
    <span>Management</span>
    data sponsor
  </div>
  <div class="content">
    <!--FUNGSIONAL-->
    <div class="row">
      <div class="col-md-6">
        <form action="?module=data_sponsor&act=carisponsor" method="post">
          <div class="input-group search">
            <input name="cari" type="text" class="form-control" placeholder="Search for...">
            <span class="input-group-btn">
              <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
              
            </span>
          </div>

        </form>
        <a href="?module=data_sponsor" class="button-reset">Reset</a>
      </div>
      <div class="col-md-6">
        <div class="btn-group" role="group" aria-label="fungsional">
          <a type="button" class="btn btn-default" href="#tambah_sponsor" data-toggle="modal"><i class="fa fa-user-plus"></i></a>
          <a type="button" class="btn btn-default" href="module_sponsor/action_sponsor.php?module=data_sponsor&act=export"><i class="fa fa-download"> Excel</i></a>
          <a type="button" class="btn btn-default" href="module_sponsor/cetak_sponsor.php"><i class="fa fa-print"></i></a>
        </div>
      </div>
    </div>
    <!--TABLE-->
    <table class="table table-hover tab-mar-top">
      <thead>
        <tr>
          <th>No</th>
         <th width="100px" class="tab-col">Kode Sponsor</th>
          <th>Nama Sponsor</th>
          <th width="100px">Aksi</th>
        </tr>
      </thead>
      <tbody>
<?php        
    $no=1;
    while ($tampil=mysql_fetch_array($tampilkan)){
       echo "<tr><td>$no</td>
             <td class='tab-col'>$tampil[kode_sponsor]</td>
             <td>$tampil[nama_sponsor]</td>
             <td><a href='?module=data_sponsor&act=editsponsor&id=$tampil[kode_sponsor]' class='fa fa-edit'></a>
             <a class='fa fa-remove' href=javascript:confirmdelete('$action?module=data_sponsor&act=hapussponsor&id=$tampil[kode_sponsor]')></a></td>
             </tr>";
      $no++;
    }
  echo "
        </tbody>
        </table>
        </div>";
?>