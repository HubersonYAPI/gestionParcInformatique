<?php 
if (!empty($_POST["save_record"])) {
    $date= date("Y/m/d H:i:s");
    $req = $db->prepare(
        "UPDATE informaticien SET 
        nomInfo='" . $_POST['nomInfo'] . "', 
        prenInfo='" . $_POST['prenInfo'] . "',
        emailInfo='" . $_POST['emailInfo'] . "',
        mdpInfo='" . $_POST['mdpInfo'] . "',
        telInfo='" . $_POST['telInfo'] . "',
        dateMisJrInfo='" .$date . "',
        roleInfo='" . $_POST['roleInfo'] . "'
                            WHERE idInfo=" . $_GET["id"]
    );
    $result = $req->execute();

    if ($result) {
        header("location:informaticien.php");
    }
}

$req = $db->prepare("SELECT * FROM informaticien WHERE idInfo = " . $_GET["id"] . "");
$req->execute();
$result = $req->fetchAll();

?>