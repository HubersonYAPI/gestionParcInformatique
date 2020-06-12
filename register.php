<?php require_once 'conf/db.php' ?>

<?php
if(!empty($_POST["add_record"])){

//$service = $_POST['agentService'];

  //$ab = "SELECT idService from service, agent WHERE libService = $service "; 

    $sql = "INSERT INTO `agent` ('nomAgent', 'prenAgent', 'emailAgent', 'mdpAgent', 'telAgent') 
            VALUES (:nomAgent, :prenAgent, :emailAgent, :mdpAgent, :telAgent)";
    $req = $db->prepare($sql);
    
    $result = $req->execute(array(
        ':nomAgent' => $_POST['nomAgent'],
        ':prenAgent' => $_POST['prenAgent'],
        ':emailAgent' => $_POST['emailAgent'],
        ':mdpAgent' => $_POST['mdpAgent'],
        ':telAgent' => $_POST['telAgent'],
        //':dateMisJrAgent' => date("Y-m-d H:i:s"),
    ));

    if(!empty($result)){
      header('location: admin/informaticien.php');}
  
  }   
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>GPI| Authentification</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="#"><b>GPI</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Enregistrer un nouvel Agent  </p>

      <form action="" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Nom" name="nomAgent" id="nomAgent" required/>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Prénoms" name="prenAgent" id="prenAgent" required/>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Téléphone" name="telAgent" id="telAgent" required/>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-phone"></span>
              </div>
            </div>
          </div>
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email" name="emailAgent" id="emailAgent" required/>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Mot de passe" name="mdpAgent" id="mdpAgent" required/>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Confirmer Mot de passe" name="mdpAgenc" id="mdpAgentc" required/>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <div class="input-group-append">
              <select name= "agentService" class="form-control custom-select">
                <option selected disabled>Service</option>
                <?php 
                  
                  $connect = mysqli_connect ("localhost", "root", "","gestionParcinfo");
                  $query = "SELECT * FROM service where libService != 'INFORMATIQUE'";
                              
                  $result = mysqli_query($connect, $query);?>
                  <?php while($row = mysqli_fetch_array($result)):; ?>

                  
                  <option><?php echo $row[1]; ?></option>
                <?php endwhile; ?> 
              </select>
          </div>
        </div>

        <div class="social-auth-links text-center mb-3">
        <input name="add_record" type="submit" class="btn btn-block btn-primary" value="Enregistrer">        
        <a href="index.php" class="btn btn-block btn-danger">
            Se connecter
        </a>
      </div>
        
      </form>

      
      <!-- /.social-auth-links -->

    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

</body>
</html>
