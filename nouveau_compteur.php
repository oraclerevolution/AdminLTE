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
        Ajouter un nouveau compteur
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Accueil</a></li>
        <li class="active">Nouveau compteur</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Remplissez les champ ci-dessous pour recenser un nouveau compteur</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="./scripts/newCompteur.php" method="post">
              <div class="box-body">

                <div class="form-group">
                  <label for="coff">Reference Coff</label>
                  <input type="number" name="coffret" class="form-control" id="coff" placeholder="Entrez le numero de reference du coffret" required="">
                </div>

                <div class="form-group">
                  <label for="ville">Ville</label>
                  <select class="form-control" name="ville" required="">
                    <option value="bouake">Bouaké</option>
                  </select>
                </div>

                <div class="form-group">
                  <label for="local">Localisation</label>
                  <select class="form-control" name="localisation" required="">
                    <option value="carrefourd">N'Gattakro carrefourd SAMAKE</option>
                  </select>
                </div>

                <div class="form-group">
                  <label for="compteur">Numero du compteur</label>
                  <input type="number" name="compteur" class="form-control" id="compteur" placeholder="Entrez le numero du compteur" required="">
                </div>

                <div class="form-group">
                  <label for="lanterne">Lanternes à changer</label>
                  <input type="number" name="lanternes" class="form-control" id="lanterne" placeholder="Entrez le nombre de lanterne à changer" required="">
                </div>

                <div class="form-group">
                  <label for="crosses">Crosses à changer</label>
                  <input type="number" name="crosses" class="form-control" id="crosses" placeholder="Entrez le nombre de crosses à changer" required="">
                </div>

                <div class="form-group">
                  <label for="support">Supports mauvais états</label>
                  <input type="number" name="supports" class="form-control" id="support" placeholder="Entrez le nombre de support en mauvais état" required="">
                </div>

                <div class="form-group">
                  <label for="Lampes">Lampes à remplacer</label>
                  <input type="number" name="lampes" class="form-control" id="Lampes" placeholder="Entrez le nombre de lampes à remplacer" required="">
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Ajouter le compteur</button>
              </div>
            </form>
          </div>
          <!-- /.box -->

        </div>
        <!--/.col (left) -->
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
<script src="../../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="../../bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
</body>
</html>
