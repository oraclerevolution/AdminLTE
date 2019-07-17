<!DOCTYPE html>
<html>
  <?php include('scripts/head.php'); ?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

   <?php include('scripts/header.php'); ?>

  <!-- Left side column. contains the logo and sidebar -->
    <?php include('scripts/nav.php'); ?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Listes des compteurs déja ajoutés
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Accueil</a></li>
        <li class="active">anciens compteurs</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Compteurs deja ajoutés</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>ville</th>
                  <th>localisation</th>
                  <th>reference coffret</th>
                  <th>numero compteur</th>
                  <th>lanternes</th>
                  <th>crosses</th>
                  <th>supports</th>
                  <th>lampes</th>
                </tr>
                </thead>
                <tbody>
                  <?php
                    require "./scripts/database.php";
                    $bdd = Database::connect();

                    $reponse = $bdd->query('SELECT * FROM compteurs');
                    while ($donnees = $reponse->fetch()) {
                  ?>
                <tr>
                  <td><?php echo $donnees['ville']; ?></td>
                  <td><?php echo $donnees['localisation']; ?></td>
                  <td><?php echo $donnees['coffret']; ?></td>
                  <td><?php echo $donnees['compteur']; ?></td>
                  <td><?php echo $donnees['lanternes']; ?></td>
                  <td><?php echo $donnees['crosses']; ?></td>
                  <td><?php echo $donnees['supports']; ?></td>
                  <td><?php echo $donnees['lampes']; ?></td>
                </tr>
                <?php
                  }
                  Database::disconnect();
                  ?>
               </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
    <?php include('scripts/footer.php'); ?>
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="./bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="./bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="./bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="./bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="./bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="./bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="./dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="./dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
</body>
</html>
