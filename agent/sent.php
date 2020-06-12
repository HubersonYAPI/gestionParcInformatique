<?php session_start(); // Starting Session ?>
<?php require_once '../conf/db.php'; 

$req = $db->prepare("SELECT * FROM informaticien");
$req->execute();
$req2 = $req->fetchAll();

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>GPI | Personnel</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<?php include_once 'sidebarMenuAgent.php' ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <p> </p>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">
            <a href="index.php" class="btn btn-primary btn-block mb-3">Mes Interventions</a>

            <div class="card">
            <div class="card-header">
              <h3 class="card-title">Dossiers</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body p-0">
              <ul class="nav nav-pills flex-column">
                <li class="nav-item active">
                  <a href="index.php" class="nav-link">
                    <i class="fas fa-inbox"></i> Mes interventions
                    <span class="badge bg-primary float-right">12</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="in.php" class="nav-link">
                    <i class="far fa-envelope"></i> En cours
                  </a>
                </li>
                <li class="nav-item">
                  <a href="out.php" class="nav-link">
                    <i class="far fa-file-alt"></i> Resolue
                  </a>
                </li>                
              </ul>
            </div>
            <!-- /.card-body -->
          </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h3 class="card-title">Demander une Intervention</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="form-group">
                  <label>Type de panne:</label>
                  <select class="form-control">
                    <option>Ordinateur</option>
                    <option>Logiciel</option>
                    <option>Imprimante</option>
                    <option>Telephone</option>
                    <option>Internet</option>
                  </select>
                </div>
                <div class="form-group">
                    <label>Description:</label>
                    <textarea class="form-control" style="height: 300px"></textarea>
                </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <div class="float-right">
                  <button type="submit" class="btn btn-primary"><i class="far fa-envelope"></i> Envoyer</button>
                </div>
                <button type="reset" class="btn btn-default"><i class="fas fa-times"></i> Annuler</button>
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.0.0
    </div>
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<!-- Summernote -->
<script src="../plugins/summernote/summernote-bs4.min.js"></script>
<!-- Page Script -->
<script>
  $(function () {
    //Add text editor
    $('#compose-textarea').summernote()
  })
</script>
</body>
</html>
