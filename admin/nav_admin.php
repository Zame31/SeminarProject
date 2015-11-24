<!--NAVIGATOR-->
<?php
if ($_GET['module']=='beranda'){
    echo '
          <li role="presentation" class="active space-top"><a href="admin.php?module=beranda">Home</a></li>
          <li role="presentation"><a href="?module=data_admin">Data Admin</a></li>
          <li role="presentation"><a href="?module=data_seminar">Data Seminar</a></li>
          <li role="presentation" ><a href="?module=data_mahasiswa">Data Mahasiswa</a></li>
          <li role="presentation"><a href="?module=data_tamu">Data Tamu</a></li>
          <li role="presentation"><a href="?module=data_narasumber">Data Narasumber</a></li>
          <li role="presentation"><a href="?module=data_sponsor">Data Sponsor</a></li>
          <li role="presentation"><a href="?module=data_pendaftaran">Data Penfataran</a></li>
          ';
         
      }
 elseif ($_GET['module']=='data_admin'){
         echo '
              <li role="presentation" class="space-top"><a href="admin.php?module=beranda">Home</a></li>
              <li role="presentation" class="active"><a href="?module=data_admin">Data Admin</a></li>
              <li role="presentation"><a href="?module=data_seminar">Data Seminar</a></li>
              <li role="presentation"><a href="?module=data_mahasiswa">Data Mahasiswa</a></li>
              <li role="presentation"><a href="?module=data_tamu">Data Tamu</a></li>
              <li role="presentation"><a href="?module=data_narasumber">Data Narasumber</a></li>
              <li role="presentation"><a href="?module=data_sponsor">Data Sponsor</a></li>
              <li role="presentation"><a href="?module=data_pendaftaran">Data Penfataran</a></li>
          ';
      }
  elseif ($_GET['module']=='data_seminar'){
         echo '
              <li role="presentation" class="space-top"><a href="admin.php?module=beranda">Home</a></li>
              <li role="presentation"><a href="?module=data_admin">Data Admin</a></li>
              <li role="presentation" class="active"><a href="?module=data_seminar">Data Seminar</a></li>
              <li role="presentation" ><a href="?module=data_mahasiswa">Data Mahasiswa</a></li>
              <li role="presentation"><a href="?module=data_tamu">Data Tamu</a></li>
              <li role="presentation"><a href="?module=data_narasumber">Data Narasumber</a></li>
              <li role="presentation"><a href="?module=data_sponsor">Data Sponsor</a></li>
              <li role="presentation"><a href="?module=data_pendaftaran">Data Penfataran</a></li>
          ';
      }

   elseif ($_GET['module']=='data_mahasiswa'){
               echo '
                    <li role="presentation" class="space-top"><a href="admin.php?module=beranda">Home</a></li>
                    <li role="presentation"><a href="?module=data_admin">Data Admin</a></li>
                    <li role="presentation"><a href="?module=data_seminar">Data Seminar</a></li>
                    <li role="presentation" class="active"><a href="?module=data_mahasiswa">Data Mahasiswa</a></li>
                    <li role="presentation"><a href="?module=data_tamu">Data Tamu</a></li>
                    <li role="presentation"><a href="?module=data_narasumber">Data Narasumber</a></li>
                    <li role="presentation"><a href="?module=data_sponsor">Data Sponsor</a></li>
                    <li role="presentation"><a href="?module=data_pendaftaran">Data Penfataran</a></li>
                ';
            }
   elseif ($_GET['module']=='data_tamu'){
                  echo '
                       <li role="presentation" class="space-top"><a href="admin.php?module=beranda">Home</a></li>
                       <li role="presentation"><a href="?module=data_admin">Data Admin</a></li>
                       <li role="presentation"><a href="?module=data_seminar">Data Seminar</a></li>
                       <li role="presentation"><a href="?module=data_mahasiswa">Data Mahasiswa</a></li>
                       <li role="presentation" class="active"><a href="?module=data_tamu">Data Tamu</a></li>
                       <li role="presentation"><a href="?module=data_narasumber">Data Narasumber</a></li>
                       <li role="presentation"><a href="?module=data_sponsor">Data Sponsor</a></li>
                       <li role="presentation"><a href="?module=data_pendaftaran">Data Penfataran</a></li>
                   ';
               }
   elseif ($_GET['module']=='data_narasumber'){
                     echo '
                          <li role="presentation" class="space-top"><a href="admin.php?module=beranda">Home</a></li>
                          <li role="presentation"><a href="?module=data_admin">Data Admin</a></li>
                          <li role="presentation"><a href="?module=data_seminar">Data Seminar</a></li>
                          <li role="presentation"><a href="?module=data_mahasiswa">Data Mahasiswa</a></li>
                          <li role="presentation"><a href="?module=data_tamu">Data Tamu</a></li>
                          <li role="presentation" class="active"><a href="?module=data_narasumber">Data Narasumber</a></li>
                          <li role="presentation"><a href="?module=data_sponsor">Data Sponsor</a></li>
                          <li role="presentation"><a href="?module=data_pendaftaran">Data Penfataran</a></li>
                      ';
                  }
   elseif ($_GET['module']=='data_sponsor'){
                        echo '
                             <li role="presentation" class="space-top"><a href="admin.php?module=beranda">Home</a></li>
                             <li role="presentation"><a href="?module=data_admin">Data Admin</a></li>
                             <li role="presentation"><a href="?module=data_seminar">Data Seminar</a></li>
                             <li role="presentation"><a href="?module=data_mahasiswa">Data Mahasiswa</a></li>
                             <li role="presentation"><a href="?module=data_tamu">Data Tamu</a></li>
                             <li role="presentation"><a href="?module=data_narasumber">Data Narasumber</a></li>
                             <li role="presentation" class="active"><a href="?module=data_sponsor">Data Sponsor</a></li>
                             <li role="presentation"><a href="?module=data_pendaftaran">Data Penfataran</a></li>
                         ';
                     }
                     
    elseif ($_GET['module']=='data_pendaftaran'){
                        echo '
                             <li role="presentation" class="space-top"><a href="admin.php?module=beranda">Home</a></li>
                             <li role="presentation"><a href="?module=data_admin">Data Admin</a></li>
                             <li role="presentation"><a href="?module=data_seminar">Data Seminar</a></li>
                             <li role="presentation"><a href="?module=data_mahasiswa">Data Mahasiswa</a></li>
                             <li role="presentation"><a href="?module=data_tamu">Data Tamu</a></li>
                             <li role="presentation"><a href="?module=data_narasumber">Data Narasumber</a></li>
                             <li role="presentation"><a href="?module=data_sponsor">Data Sponsor</a></li>
                             <li role="presentation" class="active"><a href="?module=data_pendaftaran">Data Penfataran</a></li>
                         ';
                     }
?>


      