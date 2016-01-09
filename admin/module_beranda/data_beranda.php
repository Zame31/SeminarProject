<div class="title-content">
<span>Home</span>
Home
</div>
<div class="content">
  <a href="module_beranda/backup.php" class="fitur">
    Backup Database
  </a>
  <a href="module_beranda/backup.php" class="fitur2">
    <form action="" method="post" name="postform" enctype="multipart/form-data" >
    		<label for="backup">Restore Database (*.sql)</label>
    		<input class="form-control" type="file" name="datafile" size="30" id="gambar" />
    		<input class="restore" type="submit" name="restore" value="Restore Database" />
    </form>
  </a>
</div>

<script>
function pastikan(text){
	confirm('Apakah Anda yakin akan '+text+'?')
}
</script>

<div class="container">





  <?php
    include '../main/connection.php';

  //membuat nama file
  $file	  =	$database.'_'.date("DdMY").'.sql';

  ?>

<?php


//Restore database ================================================
if(isset($_POST['restore']))
{
	restore($_FILES['datafile']);

	//echo "<pre>";
	//print_r($lines);
	//echo "</pre>";
}
else
{
	unset($_POST['restore']);
}

?>
</div>

<?php

function restore($file) {
	global $rest_dir;

	$nama_file	= $file['name'];
	$ukrn_file	= $file['size'];
	$tmp_file	= $file['tmp_name'];

	if ($nama_file == "")
	{
		echo "Fatal Error";
	}
	else
	{
		$alamatfile	= $rest_dir.$nama_file;
		$templine	= array();

		if (move_uploaded_file($tmp_file , $alamatfile))
		{

			$templine	= '';
			$lines		= file($alamatfile);

			foreach ($lines as $line)
			{
				if (substr($line, 0, 2) == '--' || $line == '')
					continue;

				$templine .= $line;

				if (substr(trim($line), -1, 1) == ';')
				{
					mysql_query($templine);

					$templine = '';
				}
			}
			echo "<div class='berhasil'>Restore Database Berhasil</div>";

		}else{
			echo "Proses upload gagal, kode error = " . $file['error'];
		}
	}

}

function backup($nama_file,$tables = '')
{
	global $return, $tables, $back_dir, $database ;

	if($tables == '')
	{
		$tables = array();
		$result = @mysql_list_tables($database);
		while($row = @mysql_fetch_row($result))
		{
			$tables[] = $row[0];
		}
	}else{
		$tables = is_array($tables) ? $tables : explode(',',$tables);
	}

	$return	= '';

	foreach($tables as $table)
	{
		$result	 = @mysql_query('SELECT * FROM '.$table);
		$num_fields = @mysql_num_fields($result);

		//menyisipkan query drop table untuk nanti hapus table yang lama
		$return	.= "DROP TABLE IF EXISTS ".$table.";";
		$row2	 = @mysql_fetch_row(mysql_query('SHOW CREATE TABLE  '.$table));
		$return	.= "\n\n".$row2[1].";\n\n";

		for ($i = 0; $i < $num_fields; $i++)
		{
			while($row = @mysql_fetch_row($result))
			{
				$return.= 'INSERT INTO '.$table.' VALUES(';

				for($j=0; $j<$num_fields; $j++)
				{
					$row[$j] = @addslashes($row[$j]);
					$row[$j] = @ereg_replace("\n","\\n",$row[$j]);
					if (isset($row[$j])) { $return.= '"'.$row[$j].'"' ; } else { $return.= '""'; }
					if ($j<($num_fields-1)) { $return.= ','; }
				}
				$return.= ");\n";
			}
		}
		$return.="\n\n\n";
	}

	$nama_file;

	$handle = fopen($back_dir.$nama_file,'w+');
	fwrite($handle, $return);
	fclose($handle);
}
?>

</body>
</html>
