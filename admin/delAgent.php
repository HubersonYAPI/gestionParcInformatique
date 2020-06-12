<?php
require_once('../conf/db.php');

$req = $db->prepare("DELETE FROM agent WHERE idAgent=".$_GET['id']);
$req->execute();
header('location:agent.php');

?>