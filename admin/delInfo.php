<?php
require_once('../conf/db.php');

$req = $db->prepare("DELETE FROM informaticien WHERE idInfo=".$_GET['id']);
$req->execute();
header('location:informaticien.php');

?>