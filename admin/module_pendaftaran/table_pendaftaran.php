<style type="text/css">
	.head {font-size: 24px;}
</style>
<br>	
<div class="head">DATA ADMIN</div>
<br>
<table border="1">
        <tr>
          <th>No</th>
          <th>Username</th>
          <th>Nama Lengkap</th>
          <th>Alamat</th>
          <th>E-Mail</th>
          <th>Telp/HP</th>
          <th>Blokir</th>
        </tr>
      </thead>
      <tbody border="1">
<?php
	include "../../main/connection.php";
	$tampil_admin = mysql_query("SELECT * FROM admin ORDER BY username");        
    $no=1;
    while ($tampil=mysql_fetch_array($tampil_admin)){
       echo "<tr><td>$no</td>
             <td class='tab-col'>$tampil[username]</td>
             <td>$tampil[nama_lengkap]</td>
             <td>$tampil[alamat]</td>
             <td>$tampil[email]</td>
             <td>$tampil[telp]</td>
             <td align=center>$tampil[blokir]</td>
            </tr>
             ";
        $no++;
    }
  echo "
        </tbody>
        </table>
        </div>";
?>