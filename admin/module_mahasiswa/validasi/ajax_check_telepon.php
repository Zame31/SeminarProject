<?php
include('connection.php');//Include The Database Connection File
  if(isset($_POST['telepon'])){//If a telepon has been submitted
    $telepon = mysql_real_escape_string($_POST['telepon']);//Some clean up :)
    $check_for_telepon = mysql_query("SELECT telepon FROM mahasiswa WHERE telepon='$telepon'");//Query to check if telepon is available or not

      if(mysql_num_rows($check_for_telepon))
      {
        echo '1';//If there is a  record match in the Database - Not Available
      }
      else
      {
        echo '0';//No Record Found - Username is available
      }
  }

?>
