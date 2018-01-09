<?php
require_once '../config/db.php';

$stmt = $DB_con->prepare("DELETE from clicks;");
$stmt->execute();
header('Location:../results/');

?>
