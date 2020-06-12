<?php session_start(); // Starting Session ?>
<?php require_once '../conf/db.php'; 

$req = $db->prepare("SELECT * FROM agent");
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
  <!-- DataTables -->
  <link rel="stylesheet" href="../plugins/datatables-bs4/css/dataTables.bootstrap4.css">
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
            <h1>Liste des Agents </h1>
          <!--  <h5><?= date("Y/m/d H:i:s") ?></h5> -->
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../home.php ">Accueil</a></li>
              <li class="breadcrumb-item active">Agents</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <button style="font-size:24px">
                <a href="addAgent.php">Ajouter un agent <i class="fas fa-plus-circle"></i> </a>
              </button>
            </div>            
            
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Nom & Prénoms</th>
                  <th>Téléphone</th>                  
                  <th>Email</th>
                  <th>Mis à Jour</th>
                  <th>Actions</th>
                </tr>
                </thead>
                <?php
                if (!empty($req2)) {
                  foreach ($req2 as $row) {
                    ?>

                <tbody>
                  <tr>
                    <td><?= $row['nomAgent'] . " ".$row['prenAgent']. "<br>"; ?></td>
                    <td><?= $row['telAgent'] . "<br>"; ?></td>
                    <td><?= $row['emailAgent'] . "<br>"; ?></td>
                    <td><?= $row['dateMisJrAgent'] . "<br>"; ?></td>
                    <td class="project-actions text-left">
                      <a class="btn btn-primary btn-sm" href="viewAgent.php">
                          <i class="fas fa-eye"></i>
                      </a>
                      <a class="btn btn-info btn-sm" href="editAgent.php?id=<?= $row['idAgent'] ?>" onclick="return confirm('voulez vous vraiment modifier')">
                          <i class="fas fa-pencil-alt"> Edit</i>
                      </a>
                      <a class="btn btn-danger btn-sm" href="delAgent.php?id=<?= $row['idAgent'] ?> " onclick="return confirm('voulez vous vraiment supprimer')">
                          <i class="fas fa-trash"></i>
                      </a>
                    </td>
                  </tr>
                </tbody>

                <?php

                    }
                }

                ?>
                <tfoot>
                <tr>
                  <th>Nom & Prénoms</th>
                  <th>Téléphone</th>                  
                  <th>Email</th>
                  <th>Mis à Jour</th>
                  <th>Actions</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
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
<!-- DataTables -->
<script src="../plugins/datatables/jquery.dataTables.js"></script>
<script src="../plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
</script>
</body>
</html>
