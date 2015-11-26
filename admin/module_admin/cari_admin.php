<?php
  $cari       = $_POST["cari"];
	$tampil_admin = 
  mysql_query("SELECT * FROM admin 
               WHERE username like '%$cari%' or 
                     nama_lengkap like '%$cari%' or
                     alamat like '%$cari%' or
                     email like '%$cari%' or
                     telp like '%$cari%' or
                     blokir like '%$cari%'");
?>
    <div class="title-content">
    <span>Management</span>
    data admin
  </div>
  <div class="content">
    <!--FUNGSIONAL-->
    <div class="row">
      <div class="col-md-6">
        <form action="?module=data_admin&act=cariadmin" method="post">
          <div class="input-group search">
            <input name="cari" type="text" class="form-control" placeholder="Search for...">
            <span class="input-group-btn">
              <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
            </span>
          </div>
        </form>
        <a href="?module=data_admin" class="button-reset">Reset</a>
      </div>
    </div>
    <!--TABLE-->
    <table cellpadding="0" cellspacing="0" border="0" class="table table-hover tab-mar-top" id="example">
      <?php include "table/table_header.php" ?>
            <th width="20px">Aksi</th>
         </tr>
        </thead>
      <tbody>
<?php        
    $no=1;
    while ($tampil=mysql_fetch_array($tampil_admin)){
       include "table/table_body.php";
       echo "
             <td><a href='?module=data_admin&act=editadmin&id=$tampil[id_session]' class='fa fa-edit'></a>
             <a class='fa fa-remove' href=javascript:confirmdelete('$action?module=data_admin&act=hapusadmin&id=$tampil[id_session]')></a></td>
             </tr>";
      $no++;
    }
  echo "
        </tbody>
        </table>
        </div>";
?>