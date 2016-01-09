<?php

include '../../main/connection.php';

//membuat nama file
$file	  =	$database.'_'.date("DdMY").'.sql';


backup($file);

$file = $back_dir.$file;

if (file_exists($file))
{
  header('Content-Description: File Transfer');
  header('Content-Type: application/octet-stream');
  header('Content-Disposition: attachment; filename='.basename($file));
  header('Content-Transfer-Encoding: binary');
  header('Expires: 0');
  header('Cache-Control: private');
  header('Pragma: private');
  header('Content-Length: ' . filesize($file));
  ob_clean();
  flush();
  readfile($file);
  exit;

}
else
{
  echo "file $file sudah tidak ada.";
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
