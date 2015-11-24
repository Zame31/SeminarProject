<?php
include "../main/connection.php";

 if ($_GET['module']=='beranda'){
 		echo "selamat datang di beranda";   
      }
 elseif ($_GET['module']=='data_admin'){
          include "module_admin/data_admin.php";
      }
  elseif ($_GET['module']=='data_seminar'){
          include "module_seminar/data_seminar.php";
      }
    elseif ($_GET['module']=='data_mahasiswa'){
                include "module_mahasiswa/data_mahasiswa.php";
            }
    elseif ($_GET['module']=='data_tamu'){
                    include "module_tamu/data_tamu.php";
                }
    elseif ($_GET['module']=='data_narasumber'){
                        include "module_narasumber/data_narasumber.php";
                    }
    elseif ($_GET['module']=='data_sponsor'){
                            include "module_sponsor/data_sponsor.php";
                        }
    elseif ($_GET['module']=='data_pendaftaran'){
                            include "module_pendaftaran/data_pendaftaran.php";
                        }