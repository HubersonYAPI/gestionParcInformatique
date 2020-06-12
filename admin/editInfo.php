<?php session_start(); // Starting Session ?>
<?php require_once '../conf/db.php' ?>
<?php include_once 'editInfoReq.php' ?>

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

<?php include_once 'sidebarMenuInfo.php' ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Ajouter un Informaticien</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Accueil</a></li>
              <li class="breadcrumb-item active">Agents</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">

                    
          <div class="col-md-9">
            <div class="card">

              <div class="card-header">
                <div class="row">
                <button style="font-size:19px">
                  <a href="informaticien.php">Retour <i class="fas fa-plus-circle"></i> </a>
                </button>
                <?php if(!empty($errors)): ?>
                    <ul> 
                        <?php foreach ($errors as $error): ?>
                            <li style="color:red; font-size:19px"><?php echo $error; ?></li>
                        <?php endforeach; ?>
                    </ul>
                   <?php endif; ?> 
                </div>
              </div>
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane">
                  <div class="tab-pane">
                    <form class="form-horizontal" action="" method="POST">
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-3 col-form-label">Nom</label>
                        <div class="col-sm-9">
                          <input type="text" name="nomInfo" class="form-control" id="inputName" value="<?= $result[0]['nomInfo']  ?>" placeholder="Nom" required/>
                        </div>                        
                      </div>
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-3 col-form-label">Prénoms</label>
                        <div class="col-sm-9">
                          <input type="text" name="prenInfo" class="form-control" id="inputName2" value="<?= $result[0]['prenInfo']  ?>" placeholder="Prénoms" required/>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName2"  class="col-sm-3 col-form-label">Téléphone</label>
                        <div class="col-sm-9">
                          <input type="text" name="telInfo" class="form-control" id="inputName2" value="<?= $result[0]['telInfo']  ?>" placeholder="Téléphone" required/>
                        </div>
                      </div>                      
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-3 col-form-label">Email</label>
                        <div class="col-sm-9">
                          <input type="email" name="emailInfo" class="form-control" id="inputEmail" value="<?= $result[0]['emailInfo']  ?>" placeholder="Email" required/>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName2"  class="col-sm-3 col-form-label">Mot de Passe</label>
                        <div class="col-sm-9">
                          <input type="password" name="mdpInfo" class="form-control" id="inputName2"  placeholder="Mot de Passe" required/>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-3 col-form-label">Confirmer Mot de Passe</label>
                        <div class="col-sm-9">
                          <input type="password" name="mdpcInfo"  class="form-control" id="inputName2" placeholder="Mot de Passe" required/>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-3 col-form-label">Service</label>
                        <div class="col-sm-9">
                          <select name= "roleInfo" class="form-control custom-select">
                            <option>Administrateur</option>
                            <option>Editeur</option>                           
                          </select>
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-9">
                          <input name="save_record" type="submit" value="Mise à jour" class="btn btn-block btn-primary">        
                        </div>
                      </div>
                    </form>
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.nav-tabs-custom -->
          </div>

          <div class="col-md-3">
           
          </div>
          <!-- /.col -->

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
</body>
</html>
