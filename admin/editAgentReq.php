<?php 
if (!empty($_POST["save_record"])) {
    $date= date("Y/m/d H:i:s");
    $req = $db->prepare(
        "UPDATE agent SET 
        nomAgent='" . $_POST['nomAgent'] . "', 
        prenAgent='" . $_POST['prenAgent'] . "',
        emailAgent='" . $_POST['emailAgent'] . "',
        mdpAgent='" . $_POST['mdpAgent'] . "',
        telAgent='" . $_POST['telAgent'] . "',
        dateMisJrAgent='" .$date . "'
                            WHERE idAgent=" . $_GET["id"]
    );
    $result = $req->execute();

    if ($result) {
        header("location:agent.php");
    }
}

$req = $db->prepare("SELECT * FROM agent WHERE idAgent = " . $_GET["id"] . "");
$req->execute();
$result = $req->fetchAll();

?>