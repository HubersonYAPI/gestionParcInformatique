<?php session_start(); // Starting Session ?>
<?php
    $erreur=null;

    if(!empty($_POST['emailInfo']) && !empty($_POST['mdpInfo'])){
        require_once 'conf/db.php';

        $req = $db->prepare('SELECT * FROM informaticien WHERE emailInfo = ? AND mdpInfo= ?');
        $req->execute([$_POST['emailInfo'],$_POST['mdpInfo']]);
        $admin=$req->fetchall();
        
        if($admin){
           
            foreach ($admin as $row) {
                $_SESSION['firstName']=$row['prenInfo'];
                $_SESSION['lastName']=$row['nomInfo'];
                $_SESSION['role']=$row['roleInfo'];

                if($row['roleInfo']=='Administrateur'){
                   header('location: admin/informaticien.php');
                }
                else{
                   header('location: edit/informaticien.php');
                }
                 
            }
            
           
            
        }

        else {
            $erreur = "Email ou Mot de passe Incorrecte";
        }
    } 

?>

