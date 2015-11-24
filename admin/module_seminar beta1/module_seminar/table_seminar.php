<style type="text/css">
	.head {font-size: 24px;}
</style>
<br>	
<div class="head">DATA SEMINAR</div>
<br>
<table border="1">
        <tr>
          <th>No</th>
          <th>Kode Seminar</th>
          <th>Tema</th>
          <th>Nama Seminar</th>
          <th>Penyelenggara</th>
          <th>Waktu</th>
          <th>Kapasitas</th>
        </tr>
      </thead>
      <tbody border="1">
<?php
	include "../../main/connection.php";
	$tampil_admin = mysql_query("SELECT * FROM seminar ORDER BY kode_seminar");        
    $no=1;
    while ($tampil=mysql_fetch_array($tampil_admin)){
       echo "<tr><td>$no</td>
             <td class='tab-col'>$tampil[kode_seminar]</td>
             <td>$tampil[tema]</td>
             <td>$tampil[nama_seminar]</td>
             <td>$tampil[penyelenggara]</td>
             <td>$tampil[waktu]</td>
             <td>$tampil[kapasitas]</td>
             ";
        $no++;
    }
  echo "
        </tbody>
        </table>
        </div>";
?>