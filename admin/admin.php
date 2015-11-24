
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Seminar Kampus</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="E-Learning Website" />
  <meta name="keywords" content="learning, website" />
  <meta name="author" content="Zamzam Nurzaman" />
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
  <!--<link rel="stylesheet" href="assets/css/fonts.css">-->
  <link rel="stylesheet" href="../assets/css/style.css">
  <link href="../assets/css/DT_bootstrap.css" rel="stylesheet" media="screen">
  <link rel="stylesheet" href="../assets/vendor/font-awesome/css/font-awesome.min.css">
  <link href="http://fonts.googleapis.com/css?family=Roboto:400,300italic,300,100italic,100,400italic,500,500italic,700,900,900italic,700italic%7COswald:400,300,700" rel="stylesheet" type="text/css">
  <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
  <script src="../assets/js/jquery.min.js"></script>
  <script src="../assets/js/bootstrap.min.js"></script>
  <script src="../assets/vendor/datatables/js/jquery.dataTables.min.js"></script>
  <script src="../assets/js/dataTables.bootstrap.min.js"></script>
  <script src="../assets/js/DT_bootstrap.js"></script> 
</head>
<body>
  <div class="container-fluid">
    <ul class="nav nav-pills nav-stacked side-nav">
      <!--title-->
      <div class="title">seminar <span class="blue">kampus</span></div>
      <!--menu-->
      <li class="menu-admin" data-toggle="collapse" data-parent="#p1" href="#pv1">
        <a class="nav-sub-container">
          <!--
          <div class="admin">
            <span>Admin</span>
            ADMIN
          </div>
          <div class="caret-container"><span class="caret arrow"></span></div></a></li>
          <ul class="nav nav-pills nav-stacked collapse out" id="pv1">
            <li><a href="#">View Profil</a></li>
            <li><a href="#">Message</a></li>
            <li><a href="#">Setting</a></li>
            <li><a href="#">Logout</a></li>
          </ul>
          -->
     <?php include "nav_admin.php"; ?>
    </ul>
  <!--CONTENT-->
  <section>
    <?php include "content_admin.php"; ?>
  </section>
  </div>

  
</body>
</html>


