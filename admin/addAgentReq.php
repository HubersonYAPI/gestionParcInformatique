<?php
if(!empty($_POST)){

  $errors=array();

    require '../conf/db.php';

    if(!preg_match('/^[a-zA-Z0-9é_]*$/', $_POST['nomAgent'])){
      $errors['nomAgent'] = "Votre Nom n'est pas valide";
    }else{
        $req=$db->prepare('SELECT idAgent FROM agent WHERE emailAgent = ?');
        $req->execute([$_POST['emailAgent']]);
        $admin = $req->fetch();

        if($admin){
            $errors['emailAgent'] = "Cet email est deja utilisé";
        }
    }
    if(!preg_match('/^[a-zA-Z0-9é _]*$/', $_POST['prenAgent'])){
      $errors['prenAgent'] = "Veillez entrer des prenoms corrects";
    }

    if($_POST['mdpAgent'] != $_POST['mdpcAgent']){
      $errors['mdpAgent'] = "Vous devez entrez un mot de passe valide ";
  }

  if(empty($errors)){

    //$password = password_hash($_POST['mdpAgent'], PASSWORD_BCRYPT);
    $date= date("Y/m/d H:i:s");
    $req = $db->prepare(
        "INSERT INTO agent SET 
        nomAgent='" . $_POST['nomAgent'] . "', 
        prenAgent='" . $_POST['prenAgent'] . "',
        emailAgent='" . $_POST['emailAgent'] . "',
        mdpAgent='" . $_POST['mdpAgent'] . "',
        telAgent='" . $_POST['telAgent'] . "',
        dateMisJrAgent='" .$date . "'"
    );
    $result = $req->execute();

    if ($result) {
        header("location:agent.php");
    }
    
    
  }
  
    
    }
?>