<?php
if(!empty($_POST)){

  $errors=array();

    require '../conf/db.php';

    if(!preg_match('/^[a-zA-Z0-9é_]*$/', $_POST['nomInfo'])){
      $errors['nomInfo'] = "Votre Nom n'est pas valide";
    }else{
        $req=$db->prepare('SELECT idInfo FROM informaticien WHERE emailInfo = ?');
        $req->execute([$_POST['emailInfo']]);
        $admin = $req->fetch();

        if($admin){
            $errors['emailInfo'] = "Cet email est deja utilisé";
        }
    }
    if(!preg_match('/^[a-zA-Z0-9é _]*$/', $_POST['prenInfo'])){
      $errors['prenInfo'] = "Veillez entrer des prenoms corrects";
    }

    if($_POST['mdpInfo'] != $_POST['mdpcInfo']){
      $errors['mdpInfo'] = "Vous devez entrez un mot de passe valide ";
  }

  if(empty($errors)){

    //$password = password_hash($_POST['mdpInfo'], PASSWORD_BCRYPT);
    $date= date("Y/m/d H:i:s");
    $req = $db->prepare(
        "INSERT INTO informaticien SET 
        nomInfo='" . $_POST['nomInfo'] . "', 
        prenInfo='" . $_POST['prenInfo'] . "',
        emailInfo='" . $_POST['emailInfo'] . "',
        mdpInfo='" . $_POST['mdpInfo'] . "',
        telInfo='" . $_POST['telInfo'] . "',
        dateMisJrInfo='" .$date . "',
        roleInfo='" . $_POST['roleInfo'] . "'"
    );
    $result = $req->execute();

    if ($result) {
        header("location:informaticien.php");
    }
    
    
    /*$password = password_hash($_POST['mdpAgent'], PASSWORD_BCRYPT);


    $sql = "INSERT INTO `agent` (`nomAgent`, `prenAgent`, `emailAgent`, `mdpAgent`, `telAgent`) 
    VALUES (:nomAgent, :prenAgent, :emailAgent, :mdpAgent, :telAgent)";
    $req = $db->prepare($sql);
    
    $result = $req->execute(array(
      ':nomAgent' => $_POST['nomAgent'],
      ':prenAgent' => $_POST['prenAgent'],
      ':emailAgent' => $_POST['emailAgent'],
      ':mdpAgent' => $password,
      ':telAgent' => $_POST['telAgent'],        
    ));

    
    if(!empty($result)){
        header('location: informaticien.php');}*/

    /*$req = $db->prepare("INSERT INTO agent SET nomAgent= ?, prenAgent= ?, emailAgent= ?, mdpAgent= ?, telAgent= ?"); 
    $password = password_hash($_POST['mdpAgent'], PASSWORD_BCRYPT);
    $req->execute([$_POST['nomAgent'], $_POST['prenAgent'], $_POST['emailAgent'], $password, $_POST['telAgent'] ]);
    
        //die(var_dump($req));

    header('location: agent.php'); */

  }
  
    
    }
?>