<?php
include('connection.php');//Include The Database Connection File
  if(isset($_POST['nim'])){//If a nim has been submitted
    $nim = mysql_real_escape_string($_POST['nim']);//Some clean up :)
    $check_for_nim = mysql_query("SELECT nim FROM mahasiswa WHERE nim='$nim'");//Query to check if nim is available or not

      if(mysql_num_rows($check_for_nim))
      {
        echo '1';//If there is a  record match in the Database - Not Available
      }
      else
      {
        echo '0';//No Record Found - Username is available
      }
  }

?>
