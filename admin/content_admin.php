<?php
include "../main/connection.php";

 if ($_GET['module']=='beranda'){
 		include "module_beranda/data_beranda.php";
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
    elseif ($_GET['module']=='data_lokasi'){
                            include "module_lokasi/data_lokasi.php";
                        }
    elseif ($_GET['module']=='data_pendaftaran'){
                            include "module_pendaftaran/data_pendaftaran.php";
                        }
    elseif ($_GET['module']=='data_sponsor_seminar'){
                            include "module_sponsor_seminar/data_sponsor_seminar.php";
                        }
    elseif ($_GET['module']=='data_narasumber_seminar'){
                            include "module_narasumber_seminar/data_narasumber_seminar.php";
                        }
     elseif ($_GET['module']=='data_tamu_seminar'){
                            include "module_tamu_seminar/data_tamu_seminar.php";
                        }
